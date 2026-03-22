<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductSuperCategory
 *
 * @property string $SuperCategoryCode
 * @property string $SuperCategoryName
 * @property string|null $ParentSuperCategoryCode
 * @property ProductSuperCategory|null $product_super_category
 * @property Collection|ProductSuperCategory[] $product_super_categories
 */
class ProductSuperCategory extends Model
{
    protected $table = 'ProductSuperCategory';

    protected $primaryKey = 'SuperCategoryCode';

    public $incrementing = false;

    public $timestamps = false;

    protected $fillable = [
        'SuperCategoryName',
        'ParentSuperCategoryCode',
    ];

    public function product_super_category()
    {
        return $this->belongsTo(ProductSuperCategory::class, 'ParentSuperCategoryCode');
    }

    public function product_super_categories()
    {
        return $this->hasMany(ProductSuperCategory::class, 'ParentSuperCategoryCode');
    }

    public function categories()
    {
        return $this->hasMany(ProductCategory::class, 'SuperCategoryCode', 'SuperCategoryCode');
    }
}
