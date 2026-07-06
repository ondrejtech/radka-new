@php
	$ga4Id = config('services.google_tag.ga4_id');
	$adsId = config('services.google_tag.ads_conversion_id');
	$adsLabel = config('services.google_tag.ads_purchase_label');
@endphp
@if ($ga4Id || ($adsId && $adsLabel))
	<script>
		document.addEventListener('livewire:init', () => {
			const first = (detail) => Array.isArray(detail) ? detail[0] : detail;
			const items = (d) => (d.ids || (d.id ? [d.id] : [])).map((id) => ({ item_id: String(id) }));

			@if ($ga4Id)
				const ga4 = (name, detail) => {
					const d = first(detail);
					if (!window.gtag || !d) return;
					window.gtag('event', name, {
						currency: 'CZK',
						value: d.value,
						transaction_id: d.transactionId,
						items: items(d),
					});
				};

				window.Livewire.on('meta-add-to-cart', (e) => ga4('add_to_cart', e));
				window.Livewire.on('meta-initiate-checkout', (e) => ga4('begin_checkout', e));
				window.Livewire.on('meta-purchase', (e) => ga4('purchase', e));
			@endif

			@if ($adsId && $adsLabel)
				window.Livewire.on('meta-purchase', (e) => {
					const d = first(e);
					if (!window.gtag || !d) return;
					window.gtag('event', 'conversion', {
						send_to: '{{ $adsId }}/{{ $adsLabel }}',
						value: d.value,
						currency: 'CZK',
						transaction_id: d.transactionId,
					});
				});
			@endif
		});
	</script>
@endif
