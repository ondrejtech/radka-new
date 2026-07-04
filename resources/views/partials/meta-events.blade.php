@if (config('services.meta.pixel_id'))
	<script>
		document.addEventListener('livewire:init', () => {
			const track = (name, detail) => {
				const d = Array.isArray(detail) ? detail[0] : detail;
				if (window.fbq && d) {
					window.fbq('track', name, {
						content_type: 'product',
						content_ids: d.ids || (d.id ? [String(d.id)] : []),
						value: d.value,
						currency: 'CZK',
					});
				}
			};

			window.Livewire.on('meta-add-to-cart', (e) => track('AddToCart', e));
			window.Livewire.on('meta-initiate-checkout', (e) => track('InitiateCheckout', e));
			window.Livewire.on('meta-purchase', (e) => track('Purchase', e));
		});
	</script>
@endif
