@php
    $siteName = config('app.name');
    $siteUrl = url('/');

    $organization = [
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => $siteName,
        'url' => $siteUrl,
        'logo' => asset('Images/loga/td.png'),
    ];

    $website = [
        '@context' => 'https://schema.org',
        '@type' => 'WebSite',
        'name' => $siteName,
        'url' => $siteUrl,
        'potentialAction' => [
            '@type' => 'SearchAction',
            'target' => [
                '@type' => 'EntryPoint',
                'urlTemplate' => url('/search').'?fulltext={search_term_string}',
            ],
            'query-input' => 'required name=search_term_string',
        ],
    ];

    $jsonFlags = JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE;
@endphp
<script type="application/ld+json">{!! json_encode($organization, $jsonFlags) !!}</script>
<script type="application/ld+json">{!! json_encode($website, $jsonFlags) !!}</script>
