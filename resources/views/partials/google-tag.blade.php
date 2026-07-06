@php
	$ga4Id = config('services.google_tag.ga4_id');
	$adsId = config('services.google_tag.ads_conversion_id');
	$primaryId = $ga4Id ?: $adsId;
@endphp
@if ($primaryId)
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id={{ $primaryId }}"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		@if ($ga4Id)
			gtag('config', '{{ $ga4Id }}');
		@endif
		@if ($adsId)
			gtag('config', '{{ $adsId }}');
		@endif
	</script>
	<!-- End Google tag -->
@endif
