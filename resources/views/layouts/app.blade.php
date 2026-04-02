<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs-CZ" lang="cs-CZ">
<head><meta charset="utf-8" /><meta name="author" content="E LINKX a.s., info@elinkx.cz" />

	<meta name="robots" content="noindex,nofollow" />
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
    <link rel="stylesheet" href="{{ asset('assets/bundles/css/productlist.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/bundles/css/productcompare.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bundles/css/product-view.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/bundles/css/basket.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bundles/css/documents.css') }}">

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

	<script>
var consentAnalytical = hasConsentForCategory(3);
var consentMarketing = hasConsentForCategory(4);
window.dataLayer = window.dataLayer || [];
function gtag() { dataLayer.push(arguments); }
gtag('consent', 'update', {
'ad_storage': consentMarketing ? 'granted' : 'denied',
'analytics_storage': consentAnalytical ? 'granted' : 'denied',
'ad_user_data': consentMarketing ? 'granted' : 'denied',
'ad_personalization': consentMarketing ? 'granted' : 'denied',
});
</script>
<!--Google tag(gtag.js)-->
<script async src='https://www.googletagmanager.com/gtag/js?id=G-PQ4965MKYM'></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'G-PQ4965MKYM');
</script>

	<link href="{{ asset('assets/bundles/css/default.css') }}" rel="stylesheet"/>

	<script src="{{ asset('assets/bundles/js/default.js') }}"></script>

<!-- Google Tag Manager -->
<script>
var consentAnalytical = hasConsentForCategory(3);
var consentMarketing = hasConsentForCategory(4);
window.dataLayer = window.dataLayer || [];
function gtag() { dataLayer.push(arguments); }
gtag('consent', 'update', {
'ad_storage': consentMarketing ? 'granted' : 'denied',
'analytics_storage': consentAnalytical ? 'granted' : 'denied',
'ad_user_data': consentMarketing ? 'granted' : 'denied',
'ad_personalization': consentMarketing ? 'granted' : 'denied',
});
</script>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-W86G38K');</script>
<!-- End Google Tag Manager -->
<meta name="keywords" content="hardware, software, distributor, distribuce, prodej, mobility, digitální, elektronika, počítač, notebook, monitor, panel, switch, router, rack, server, fotoaparát, PDA, navigace, MP3, KVM, UPS" /><meta name="description" content="eD system a.s. - distributor hardware, software, PC komponent, mobilit a digitální techniky" /><title>
	@yield('title', 'IT | eD SHOP - eD system a.s.')
</title>
@livewireStyles
@stack('styles')
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.min.css"/>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/default.min.css"/>
</head>
<body class='@auth is-logged @endauth {{ $bodyClass ?? '' }}'>
	<!-- Google Tag Manager -->
<noscript><iframe src='//www.googletagmanager.com/ns.html?id=GTM-W86G38K' height='0' width='0' style='display:none;visibility:hidden'></iframe></noscript>
<!-- End Google Tag Manager -->

	<input type="hidden" id="csrfToken" value="{{ csrf_token() }}" />
	<div class="page page-with-aside">


		<header id="pageHeader" class="page-header" role="banner" aria-label="Záhlaví">
			<div class="page-header_container">
				<div id="pageHeaderIn" class="page-header_in">

					<div class="page-header_item logo-box">
						<div class="logo-box_in">
							<a href="{{ url('/') }}" class="logo" title="Přejít na úvodní stránku">
								<img itemprop="logo" src="{{ asset('Images/logo_ci.svg') }}" alt="eD system a.s. [logo]" />
								<span itemprop="legalName" class="hide-common-user text-hidden-desc">eD system a.s.</span>
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
												<li class="dropdown-item-wrap"><a class="dropdown-item dropdown-item--highlight" href="#"><span class="dropdown-item_label">Objednávky</span></a></li>
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
	<div class="page-footer_container">
		<div class="page-footer_in">

			<div class="panel-group footer-menu">
				<div class="panel panel--double">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a class="collapsed" data-toggle="collapse" data-target="#foot_konfiguratory" href="#foot_konfiguratory">Konfigurátory</a>
						</h4>
					</div>
					<div id="foot_konfiguratory" class="panel-collapse">
						<div class="panel-body">
							<div class="footer-menu_wrap footer-menu_wrap--double">
								<ul role="menu" class="footer-menu_group">
									<li role="heading" class="footer-menu_label">
										Konfigurátory eDshopu
									</li>
									<li role="menuitem" class="footer-menu_item">
										<a href="https://edsystemb2b.avacom.cz" target="_blank">AVACOM baterie</a>
									</li>
									<li role="menuitem" class="footer-menu_item">
										<a href="/pages/hpiquotelogin.aspx?mfr=HPE" target="_blank" title="Konfigurační nástroj pro HP servery, storage a networking">HPE iQuote</a>
									</li>
									<li role="menuitem" class="footer-menu_item">
										<a href="/pages/hpiquotelogin.aspx?mfr=HPI" target="_blank" title="Konfigurační nástroj pro HP PC a tiskárny">HPI  iQuote</a>
									</li>
									<li role="menuitem" class="footer-menu_item">
										<a href="/pages/kingstonkonfig.aspx" target="_blank">Kingston</a>
									</li>
									<li role="menuitem" class="footer-menu_item">
										<a href="/pages/konfigurator.aspx?konfurl=KONF_LYNX" target="_blank">LYNX</a>
									</li>
									<li role="menuitem" class="footer-menu_item">
										<a href="/pages/wizard.aspx?wiz_code=BATTEST" target="_blank">Baterie UPS</a>
									</li>
									<li role="menuitem" class="footer-menu_item">
										<a href="/pages/wizard.aspx?wiz_code=SHOME" target="_blank">Smart Home</a>
									</li>
									<li role="heading" class="footer-menu_label">
										Externí konfigurátory
									</li>
									<li role="menuitem" class="footer-menu_item">
										<a href="https://www.adata.com/cz/support/dms/" target="_blank">ADATA</a>
									</li>
									<li role="menuitem" class="footer-menu_item">
										<a href="http://www.apc.com/site/Yourbusiness/index.cfm/resellerspartner/product-selectors/?ISOCountryCode=cz" target="_blank">APC konfigurátory</a>
									</li>
								</ul>
								<ul role="menu" class="footer-menu_group">
									<li role="menuitem" class="footer-menu_item">
										<a href="http://www.cyberpower-eu.com/products/ups_sizing_tool.htm" target="_blank">CBP konfigurátor</a>
									</li>
									<li role="menuitem" class="footer-menu_item">
										<a href="https://ssc.hpe.com/portal/site/ssc/?selectedCountry=CZ&lang=cs_CZ" target="_blank">HP Carepack</a>
									</li>
									<li role="menuitem" class="footer-menu_item">
										<a href="https://www.hpe.com/us/en/networking.html" target="_blank">HP Networking</a>
									</li>
									<li role="menuitem" class="footer-menu_item">
										<a href="https://h20195.www2.hpe.com/v2/Library.aspx?doctype=41&doccompany=HPE&footer=41&filter_doctype=no&filter_doclang=no&country=&filter_country=no&cc=us&lc=en&filter_status=rw#doctype-41&doccompany-HPE&sortorder-csdisplayorder&teasers-off&isRetired-false&isRHParentNode-false" target="_blank">HP Prod. Bulletin</a>
									</li>
									<li role="menuitem" class="footer-menu_item">
										<a href="https://www.hpe.com/cz/en/storage/product-portfolio.html" target="_blank">HP Storage</a>
									</li>
									<li role="menuitem" class="footer-menu_item">
										<a href="https://dcsc.lenovo.com" target="_blank">Lenovo servers and storages (EN)</a>
									</li>
									<li role="menuitem" class="footer-menu_item">
										<a href="http://uk.transcend-info.com/Support/compatibility" target="_blank">Transcend konfigurátor (EN)</a>
									</li>
									<li role="menuitem" class="footer-menu_item">
										<a href="https://h22174.www2.hpe.com/SimplifiedConfig/Welcome" target="_blank">HPE One Config Simple</a>
									</li>
									<li role="menuitem" class="footer-menu_item">
										<a href="https://www.dicota.com/en/finder" target="_blank">DICOTA Productfinder</a>
									</li>
									<li role="menuitem" class="footer-menu_item">
										<a href="http://ups.legrand.com/selection-guide/ups-configurator" target="_blank">UPS Legrand</a>
									</li>
									<li role="menuitem" class="footer-menu_item">
										<a href="http://powerquality.eaton.com/UPS/selector/SolutionOverview.asp" target="_blank">UPS Eaton</a>
									</li>
									<li role="menuitem" class="footer-menu_item">
										<a href="/pages/microsoftcsp.aspx" target="_blank">Microsoft CSP</a>
									</li>
									<li role="menuitem" class="footer-menu_item">
										<a href="https://i-tec.pro/konfigurator/?kctg=DOCKING-STATIONS" target="_blank">iTec produktový konfigurátor</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a class="collapsed" data-toggle="collapse" data-target="#foot_reklamace" href="#foot_reklamace">Reklamace</a>
						</h4>
					</div>
					<div id="foot_reklamace" class="panel-collapse">
						<div class="panel-body">
							<div class="footer-menu_wrap">
								<ul role="menu" class="footer-menu_group">
									<li role="menuitem" class="footer-menu_item">
										<a href="/jak-a-kde-reklamovat/article2-c10695">Jak a kde reklamovat</a>
									</li>
									<li role="menuitem" class="footer-menu_item">
										<a href="/reklamacni-rad/article2-cI4_REK_RAD">Reklamační řád</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a class="collapsed" data-toggle="collapse" data-target="#foot_sluzby" href="#foot_sluzby">Služby</a>
						</h4>
					</div>
					<div id="foot_sluzby" class="panel-collapse">
						<div class="panel-body">
							<div class="footer-menu_wrap">
								<ul role="menu" class="footer-menu_group">
									<li role="menuitem" class="footer-menu_item">
										<a href="/pages/marketingcampaigndetailarticle.aspx?mct_id=14679">eD SHOP</a>
									</li>
									<li role="menuitem" class="footer-menu_item">
										<a href="/pages/marketingcampaigndetailarticle.aspx?mct_id=14681">eD EDI a datová výměna</a>
									</li>
									<li role="menuitem" class="footer-menu_item">
										<a href="/pages/marketingcampaigndetailarticle.aspx?mct_id=14683">Finanční služby</a>
									</li>
									<li role="menuitem" class="footer-menu_item">
										<a href="/pages/marketingcampaigndetailarticle.aspx?mct_id=14684">eD EDEN</a>
									</li>
									<li role="menuitem" class="footer-menu_item">
										<a href="/pages/marketingcampaigndetailarticle.aspx?mct_id=14685">KLIKMAN</a>
									</li>
									<li role="menuitem" class="footer-menu_item">
										<a href="/pages/marketingcampaigndetailarticle.aspx?mct_id=14682">Outsourcing dopravy a logistiky</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="panel">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a class="collapsed" data-toggle="collapse" data-target="#foot_onas" href="#foot_onas">O nás</a>
						</h4>
					</div>
					<div id="foot_onas" class="panel-collapse">
						<div class="panel-body">
							<div class="footer-menu_wrap">
								<ul role="menu" class="footer-menu_group">
									<li role="menuitem" class="footer-menu_item">
										<a href="/pages/marketingcampaigndetailarticle.aspx?mct_id=15616"><strong>Obchodní podmínky</strong></a>
									</li>
									<li role="menuitem" class="footer-menu_item">
										<a href="/zpracovani-osobnich-udaju/article2-cgdpr">Zpracování osobních údajů</a>
									</li>
									<li role="menuitem" class="footer-menu_item">
										<a href="/pages/marketingcampaigndetailarticle.aspx?mct_id=14675">Profil společnosti</a>
									</li>
									<li role="menuitem" class="footer-menu_item">
										<a href="/pages/supportfirma.aspx?region=ostrava&code=0702">Kontakty</a>
									</li>
									<li role="menuitem" class="footer-menu_item">
										<a href="https://www.edecko.cz/category/oceneni" target="_blank">Certifikáty a ocenění</a>
									</li>
									<li role="menuitem" class="footer-menu_item">
										<a href="/pages/marketingcampaigndetailarticle.aspx?mct_id=14678">Jsme etická firma</a>
									</li>
									<li role="menuitem" class="footer-menu_item">
										<a href="/pages/career.aspx">Kariéra</a>
									</li>
									<li role="menuitem" class="footer-menu_item">
										<a href="/cookiesConsent/article-ccookiesConsent">Ochrana soukromí</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="panel footer-awards">
				<div class="panel-heading">
					<h4 class="panel-title">Certifikáty, soutěže a ocenění společnosti</h4>
				</div>
				<div class="panel-body">
					<table>
						<tbody>
							<tr>
								<td>
									<img src="{{ asset('Images/loga/Broadline 2021.png') }}" alt="Broadline distributor 2021 [logo]" />
								</td>
								<td>
									<img src="{{ asset('Images/loga/hp21.png') }}" alt="HP Partner roku 2021 [logo]" />
								</td>
								<td>
									<img src="{{ asset('Images/loga/czechTOP-cz.png') }}" alt="Czech top 100 [logo]" />
								</td>
								<td>
									<img src="{{ asset('Images/loga/canon21.png') }}" alt="Canon the best distrubutor of 2021 [logo]" />
								</td>
								<td>
									<a href="https://aaa.bisnode.cz/CZ1000047974516/AAA?language=cs-CZ" target="_blank">
										<img src="{{ asset('Images/loga/aaa_duveryhodnost.png') }}" alt="Hodnocení důvěryhodnosti AAA [logo]" />
									</a>
								</td>
							</tr>
						</tbody>
					</table>
					<div class="footer-social-media">
						<span class="footer-social-media_item footer-social-media_item--heading">Sleduje nás na sociálních sítích</span>
						<a href="//www.linkedin.com/company/1130210" class="footer-social-media_item footer-social-media_item--linkedin" title="LinkedIn" target="_blank"><i class="icon-linkedin"></i></a>
						<a href="//www.facebook.com/edsystemcz" class="footer-social-media_item footer-social-media_item--facebook" title="Facebook" target="_blank"><i class="icon-facebook"></i></a>
					</div>
				</div>
			</div>

			<div class="signature">
				© 2007 – 2026, eD system a.s., <span class="web-author">Created by <a target="_blank" href="http://www.elinkx.cz">E LINKX a.s.</a></span>
			</div>

		</div>
	</div>
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
