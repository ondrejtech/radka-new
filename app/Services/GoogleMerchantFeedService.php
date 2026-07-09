<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\StreamedResponse;
use XMLWriter;

class GoogleMerchantFeedService
{
    /**
     * Only products under this super-category are exported (multishoping.eu catalog).
     */
    private const PARENT_SUPER_CATEGORY_CODE = 52;

    /**
     * Stream the Google Merchant Center product feed (RSS 2.0).
     *
     * Only in-stock products with a price and an image are included.
     */
    public function stream(): StreamedResponse
    {
        return response()->stream(function (): void {
            $writer = new XMLWriter;
            $writer->openUri('php://output');
            $writer->startDocument('1.0', 'UTF-8');
            $writer->startElement('rss');
            $writer->writeAttribute('version', '2.0');
            $writer->writeAttribute('xmlns:g', 'http://base.google.com/ns/1.0');
            $writer->startElement('channel');
            $writer->writeElement('title', (string) config('app.name'));
            $writer->writeElement('link', (string) config('app.url'));
            $writer->writeElement('description', 'Google Merchant product feed');

            Product::query()
                ->where('OnStock', true)
                ->where('YourPrice', '>', 0)
                ->whereIn('CategoryCode', function ($query): void {
                    $query->select('CategoryCode')
                        ->from('ProductCategory')
                        ->where('ParentSuperCategoryCode', self::PARENT_SUPER_CATEGORY_CODE);
                })
                ->whereIn('ProId', function ($query): void {
                    $query->select('ProId')->from('ProductImage');
                })
                ->select([
                    'ProId', 'Name', 'NameB2C', 'DescriptionShort',
                    'YourPrice', 'ProducerName', 'EANCode',
                ])
                ->chunkById(500, function ($products) use ($writer): void {
                    foreach ($products as $product) {
                        $this->writeItem($writer, $product);
                    }
                    $writer->flush();
                }, 'ProId');

            $writer->endElement(); // channel
            $writer->endElement(); // rss
            $writer->endDocument();
            $writer->flush();
        }, 200, [
            'Content-Type' => 'application/xml; charset=UTF-8',
        ]);
    }

    private function writeItem(XMLWriter $writer, Product $product): void
    {
        $brand = trim((string) $product->ProducerName);
        $gtin = $this->gtin($product->EANCode);

        $writer->startElement('item');
        $writer->writeElement('g:id', (string) $product->ProId);
        $writer->writeElement('title', Str::limit($this->clean($product->NameB2C ?: $product->Name), 150, ''));
        $writer->writeElement('description', Str::limit($this->clean($product->DescriptionShort ?: $product->Name), 5000, ''));
        $writer->writeElement('g:link', $this->productUrl($product));
        $writer->writeElement('g:image_link', route('product-image', ['proId' => $product->ProId]));
        $writer->writeElement('g:availability', 'in_stock');
        $writer->writeElement('g:price', $this->price((float) $product->YourPrice));
        $writer->writeElement('g:condition', 'new');

        if ($brand !== '') {
            $writer->writeElement('g:brand', $brand);
        }

        if ($gtin !== null) {
            $writer->writeElement('g:gtin', $gtin);
        }

        if ($gtin === null && $brand === '') {
            $writer->writeElement('g:identifier_exists', 'false');
        }

        $writer->endElement();
    }

    private function clean(?string $value): string
    {
        return trim((string) preg_replace('/\s+/', ' ', strip_tags((string) $value)));
    }

    private function productUrl(Product $product): string
    {
        return route('product.detail', [
            'slug' => Str::slug((string) $product->Name),
            'proId' => $product->ProId,
        ]);
    }

    private function price(float $price): string
    {
        return number_format($price, 2, '.', '').' CZK';
    }

    /**
     * Return a valid GTIN (8, 12, 13 or 14 digits) or null.
     */
    private function gtin(?string $ean): ?string
    {
        $digits = preg_replace('/\D/', '', (string) $ean);

        return in_array(strlen((string) $digits), [8, 12, 13, 14], true) ? $digits : null;
    }
}
