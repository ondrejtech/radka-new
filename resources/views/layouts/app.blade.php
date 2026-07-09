<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs-CZ" lang="cs-CZ">
<head><meta charset="utf-8" /><meta name="author" content="{{ env('DEVELOPER_NAME').', '.env('DEVELOPER_URL')}}" />
	@include('partials.meta-pixel')
	@include('partials.meta-events')
	@include('partials.google-tag')
	@include('partials.google-events')

	<!-- Heureka.cz PRODUCT DETAIL script -->
	<script>
		(function(t, r, a, c, k, i, n, g) {t['ROIDataObject'] = k;
		t[k]=t[k]||function(){(t[k].q=t[k].q||[]).push(arguments)},t[k].c=i;n=r.createElement(a),
		g=r.getElementsByTagName(a)[0];n.async=1;n.src=c;g.parentNode.insertBefore(n,g)
		})(window, document, 'script', '//www.heureka.cz/ocm/sdk.js?version=2&page=product_detail', 'heureka', 'cz');
	</script>
<!-- End Heureka.cz PRODUCT DETAIL script -->
	<meta name="robots" content="@yield('meta-robots', 'index, follow')" />
	<link rel="canonical" href="{{ url()->current() }}" />
	@include('partials.seo-jsonld')
	<meta name="viewport" content="width=device-width, initial-scale=1.0" /><meta name="format-detection" content="telephone=no" />

	<!--[if IE]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<![endif]-->

	<link rel="shortcut icon" href="{{ asset('Images/favicon.ico') }}" />

	<!--[if lt IE 9]>
	<script src="{{ asset('Scripts/library/html5shiv.min.js') }}"></script>
	<script src="{{ asset('Scripts/library/respond.min.js') }}"></script>
	<![endif]-->

	<link media="all" rel="stylesheet" href="{{ asset('Styles/fonts/Gotham/kit.css') }}" />
	<link media="all" rel="stylesheet" href="{{ asset('Styles/icons/style.css') }}?v=2" />
    <link rel="stylesheet" href="{{asset('Styles/icons/fonts/simple-line-icons.ttf') }}">

	<link href="{{ asset('assets/bundles/css/main.css') }}" rel="stylesheet"/>
    <style>[x-cloak] { display: none !important; }</style>


    @foreach(File::files(public_path('assets/bundles/css/')) as $file)
        @if($file->getExtension() === 'css')
            <link rel="stylesheet" href="{{ asset('assets/bundles/css/' . $file->getFilename()) }}">
        @endif
    @endforeach



	<script src="{{ asset('assets/bundles/js/main.js') }}"></script>
    <script src="{{ asset('assets/bundles/js/product.js')}}"></script>
    {{-- <script src="{{ asset('assets/bundles/js/productcompare.js') }}"></script> --}}
	<script src="{{ asset('asets/bundles/js/basket.js') }}"></script>
    <script src="{{ asset('assets/bundles/js/orderdetail.js') }}"></script>
    <script src="{{ asset('assets/bundles/js/documentlist.js') }}"></script>

	<script>
	    var g_cur_ID = 8;
	    // Disable session check AJAX - the original endpoint does not exist in this app
	    App.use_checkAuthentication = false;
	</script>

	<link href="{{ asset('assets/bundles/css/default.css') }}" rel="stylesheet"/>

	<script src="{{ asset('assets/bundles/js/default.js') }}"></script>
<meta name="description" content="@yield('meta-description', config('app.name') . ' – internetový obchod se širokým sortimentem za výhodné ceny. Rychlé dodání a spolehlivý nákup.')" /><title>@yield('title', config('app.name') . ' – internetový obchod')</title>
@livewireStyles
@stack('styles')
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.min.css"/>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/default.min.css"/>
<style>
    .alertify-notifier {
        z-index: 2147483647 !important;
    }
</style>
</head>
<body class='@auth is-logged @endauth {{ $bodyClass ?? '' }}'>
<input type="hidden" id="csrfToken" value="{{ csrf_token() }}" />
	<div class="page page-with-aside">


		<header id="pageHeader" class="page-header" role="banner" aria-label="Záhlaví">
			<div class="page-header_container">
				<div id="pageHeaderIn" class="page-header_in">

					<div class="page-header_item logo-box">
						<div class="logo-box_in">
							<a href="{{ url('/') }}" class="logo" title="Přejít na úvodní stránku">
								<img itemprop="logo" src="{{ asset('Images/loga/td.jpg') }}" alt="{{ env('APP_NAME') }} [logo]" />
								<span itemprop="legalName" class="hide-common-user text-hidden-desc">{{ config('app.name') }}</span>
							</a>
						</div>
					</div>

					<hr class="hide" />

					<div id="searchForm_wrap" class="page-header_item search-form-wrap" >
						<livewire:template.search-form />
					</div>

					<hr class="hide" />

					<div class="page-header_item">
						<button id="searchForm_touchBtn" class="btn search-form_touch-btn" type="button">
							<i class="icon-search btn_icon"></i>
						</button>
						<div id="headUserMenu" class="head-user-menu">
							@auth
								<div class="dropdown">
									<button class="btn dropdown-toggle user-info" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="icon-user btn_icon user-info_icon"></i>
										<span class="btn_label user-info_label">
											<strong class="user-info_name">{{ auth()->user()->name }}</strong>
											<span class="user-info_id">ID:
												<span class="highlight">
													{{ auth()->user()->id }}
												</span>
											</span>
										</span>
										<span class="dropdown-caret"></span>
									</button>
									<div class="dropdown-menu dropdown-menu--right">
										<div class="dropdown-menu_in">
											<ul class="dropdown-menu-group">
												<li class="dropdown-item-wrap dropdown-item-wrap--user-logout visible-touch">
													<a href="#" class="dropdown-item dropdown-item--user-logout" title="Odhlásit" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
														<i class="icon-logout dropdown-item_icon"></i>
														<span class="dropdown-item_label">Odhlásit</span>
													</a>
												</li>
												<li class="dropdown-item-wrap"><a class="dropdown-item dropdown-item--highlight" href="#"><span class="dropdown-item_label">Můj přehled</span></a></li>
												<li class="dropdown-item-wrap"><a class="dropdown-item dropdown-item--highlight" href="#"><span class="dropdown-item_label">Košíky a nabídky</span></a></li>
												<li class="dropdown-item-wrap"><a class="dropdown-item dropdown-item--highlight" href=" {{ route('pages.documents.orderlist') }} "><span class="dropdown-item_label">Objednávky</span></a></li>
												<li class="dropdown-item-wrap"><a class="dropdown-item dropdown-item--highlight" href="#"><span class="dropdown-item_label">Položky objednávek</span></a></li>
												<li class="dropdown-item-wrap"><a class="dropdown-item dropdown-item--highlight" href="#"><span class="dropdown-item_label">Faktury</span></a></li>
												<li class="dropdown-item-wrap"><a class="dropdown-item" href="#"><span class="dropdown-item_label">Nedodané objednávky</span></a></li>
												<li class="dropdown-item-wrap"><a class="dropdown-item" href="#"><span class="dropdown-item_label">Nedodané zboží</span></a></li>
												<li class="dropdown-item-wrap"><a class="dropdown-item" href="#"><span class="dropdown-item_label">Odeslané zboží</span></a></li>
												<li class="dropdown-item-wrap"><a class="dropdown-item" href="#"><span class="dropdown-item_label">Dodací listy</span></a></li>
												<li class="dropdown-item-wrap"><a class="dropdown-item" href="#"><span class="dropdown-item_label">Vyfakturované zboží</span></a></li>
												<li class="dropdown-item-wrap"><a class="dropdown-item" href="#"><span class="dropdown-item_label">Nevyřízené faktury</span></a></li>
												<li class="dropdown-item-wrap"><a class="dropdown-item" href="#"><span class="dropdown-item_label">Platba neuhrazených faktur</span></a></li>
											</ul>
											<ul class="dropdown-menu-group">
												<li class="dropdown-item-wrap"><a class="dropdown-item" href="#"><span class="dropdown-item_label">Další doklady/nastavení</span></a></li>
												<li class="dropdown-item-wrap"><a class="dropdown-item" href="#"><span class="dropdown-item_label">Statistika prodeje</span></a></li>
												<li class="dropdown-item-wrap"><a class="dropdown-item" href="#"><span class="dropdown-item_label">Expedice (balíky)</span></a></li>
												<li class="dropdown-item-wrap"><a class="dropdown-item" href="#"><span class="dropdown-item_label">Dobropisy</span></a></li>
												<li class="dropdown-item-wrap"><a class="dropdown-item" href="#"><span class="dropdown-item_label">Reklamace</span></a></li>
												<li class="dropdown-item-wrap"><a class="dropdown-item" href="#"><span class="dropdown-item_label">Žádosti o vratku</span></a></li>
												<li class="dropdown-item-wrap"><a class="dropdown-item" href="#"><span class="dropdown-item_label">Platby</span></a></li>
												<li class="dropdown-item-wrap"><a class="dropdown-item" href="#"><span class="dropdown-item_label">Přehled licencí</span></a></li>
												<li class="dropdown-item-wrap"><a class="dropdown-item" href="#"><span class="dropdown-item_label">Ceník</span></a></li>
												<li class="dropdown-item-wrap"><a class="dropdown-item" href="#"><span class="dropdown-item_label">Motivační programy</span></a></li>
												<li class="dropdown-item-wrap"><a class="dropdown-item" href="#"><span class="dropdown-item_label">Porovnání produktů</span></a></li>
												<li class="dropdown-item-wrap"><a class="dropdown-item" href="#"><span class="dropdown-item_label">Moje nastavení</span></a></li>
											</ul>
										</div>
									</div>
								</div>
								<form id="logout-form" method="POST" action="{{ route('logout') }}" style="display:none">@csrf</form>
								<a href="#" class="btn btn-user-logout" title="Odhlásit" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
									<i class="icon-logout btn_icon btn-user-logout_icon"></i>
									<span class="btn_label btn-user-logout_label">Odhlásit</span>
								</a>
							@else
								<a href="{{ route('register') }}" class="btn btn--other btn-user-login user-info" title="Registrace" style="min-height:40px;">
									<i class="icon-invoice btn_icon btn-user-login_icon"></i>
									<span class="btn_label btn-user-login_label">Registrace</span>
								</a>
								<a href="{{ route('login') }}" class="btn btn-user-login user-info" title="Přihlášení" style="min-height:40px;">
									<i class="icon-user btn_icon btn-user-login_icon"></i>
									<span class="btn_label btn-user-login_label">Přihlášení</span>
								</a>
							@endauth
						</div>

						<hr class="hide" />

						<div id="headerBasket" class="basket-header">
							<livewire:template.cart-widget />
						</div>

						<button id="headMainMenu_btnToggle" class="btn head-main-menu_btn-toggle-menu" type="button"><i class="icon-menu btn_icon"></i><span class="btn_label">Zobrazit menu</span></button>
					</div>

					<div class="flex-line-break"></div>

					<div id="headMainMenu" class="head-nav head-main-menu">
						<livewire:template.main-navigation />
					</div>

				</div>
			</div>
		</header>
		<main class="page-content" role="main" aria-label="Hlavní obsah">
			@yield('content')
		</main>

        <footer class="page-footer" role="contentinfo">
            @include('layouts.footer')
        </footer>
	</div>

	<div id="siteTools" class="site-tools site-tools--bottom page-footer_container"></div>
    @yield('compare-bar')
	<script>


		function GAAction(category,prefix,obj) {

            var gaString = "gtag('event','Click',{'category':'#CATEGORY#','label':'#PREFIX##LABEL#','value':2});";

	        /**
				// gaLabel je label pro popis v GA
				// pokud je na elementu z ktereho se vola metoda atribut data-label tak se pouzije hodnota z tohoto atributu
				// pokud je na elementu z ktereho se vola metoda atribut data-title (slouzi vetsinou pro dictionary) tak se pouzije hodnota z tohoto atributu
				// pokud data-label neni ale jedna se o formularovy prvek tak se pokusi text vytahnout pres label ktery je s elementem sparovany [id / for]
				// pokud ani jedno vyse tak se pokusi najit obycejny text daneho elementu
				*/
	        var gaLabel = '';

	        var arrFormElements = ['select','input','button'];

	        if(typeof obj == 'object') {
	            var tagName = obj.prop('tagName').toLowerCase();

	            if(obj.attr('data-label')) {
	                gaLabel = obj.data('label');
	            } else if(obj.attr('data-title')) {
	                // pokud ma element atribut data-title pro slovnik tak ho pouzij
	                gaLabel = dictionary.GetValue(obj.data('title'));
	            } else if($.inArray( tagName, arrFormElements ) != -1) {
	                // pokud to je button tak vem text
	                if(obj.is('button')) {
	                    gaLabel = obj.text();
	                } else if(obj.is(':submit')) {
	                    // pokud to je input[type="submit"] tak vem value
	                    gaLabel = obj.val();
	                } else {
	                    // pokud ma id a existuje k nemu sparovany label
	                    if(obj.attr('id') && $('[for="' + obj.attr('id') +'"]')) {
	                        gaLabel = $('[for="' + obj.attr('id') +'"]').text();
	                    }
	                }
	            } else {
	                gaLabel = obj.text();
	            }

	            // specialita pro combobox
	            if(tagName == 'select') {
	                gaLabel = gaLabel + ' - ' + obj.find(':selected').text();
	            }

	        } else if(typeof obj == 'string') {
	            // obj je pouze string
	            gaLabel = obj;
		}
            //alert(gaString);
	        gaString = gaString.replace("#LABEL#", jsCorrect($.trim(gaLabel)).replace("\"","")).replace("#CATEGORY#",GACategoryName(category)).replace("#PREFIX#",GACategoryLevelPrefix(prefix));
		//alert(gaString);
		eval(gaString);
	    }
    </script>
@livewireScripts
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>
<script>
    window.addEventListener('message', event => {
        if (!event.detail || !event.detail[0] || !event.detail[0].text) return;
        alertify.set('notifier', 'position', 'top-right');
        alertify.notify(event.detail[0].text, event.detail[0].type);
    });
</script>
@stack('scripts')
</body>
</html>
