@if (auth()->check() && auth()->user()->id === config('app.admin_id')){
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
							<a class="collapsed" data-toggle="collapse" data-target="#foot_reklamace" href="{{ route('pages.documents.claim-product') }}">Reklamace</a>
						</h4>
					</div>
					<div id="foot_reklamace" class="panel-collapse">
						<div class="panel-body">
							<div class="footer-menu_wrap">
								<ul role="menu" class="footer-menu_group">
									<li role="menuitem" class="footer-menu_item">
										<a href="{{ route('pages.documents.claim-product') }}">Jak a kde reklamovat</a>
									</li>
									<li role="menuitem" class="footer-menu_item">
										<a href="{{ route('pages.documents.claim-policy') }}">Reklamační řád</a>
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
										<a href="/pages/marketingcampaigndetailarticle.aspx?mct_id=14679">{{ config('app.name')}}</a>
									</li>
									<li role="menuitem" class="footer-menu_item">
										<a href="/pages/marketingcampaigndetailarticle.aspx?mct_id=14681">{{ config('app.name') }} a datová výměna</a>
									</li>
									<li role="menuitem" class="footer-menu_item">
										{{-- <a href="/pages/marketingcampaigndetailarticle.aspx?mct_id=14683">Finanční služby</a> --}}
									</li>
									<li role="menuitem" class="footer-menu_item">
										{{-- <a href="/pages/marketingcampaigndetailarticle.aspx?mct_id=14684">eD EDEN</a> --}}
									</li>
									<li role="menuitem" class="footer-menu_item">
										{{-- <a href="/pages/marketingcampaigndetailarticle.aspx?mct_id=14685">KLIKMAN</a> --}}
									</li>
									<li role="menuitem" class="footer-menu_item">
										{{-- <a href="/pages/marketingcampaigndetailarticle.aspx?mct_id=14682">Outsourcing dopravy a logistiky</a> --}}
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
                                        <a href="{{ route('pages.documents.term-service') }}"><strong>Obchodní podmínky</strong></a>
                                    </li>
                                    <li role="menuitem" class="footer-menu_item">
                                        <a href="/zpracovani-osobnich-udaju/article2-cgdpr">Zpracování osobních údajů</a>
                                    </li>
                                    {{-- <li role="menuitem" class="footer-menu_item">
                                        <a href="/pages/marketingcampaigndetailarticle.aspx?mct_id=14675">Profil společnosti</a>
                                    </li> --}}
                                    <li role="menuitem" class="footer-menu_item">
                                        <a href="/pages/supportfirma.aspx?region=ostrava&code=0702">Kontakty</a>
                                    </li>
                                    {{-- <li role="menuitem" class="footer-menu_item">
                                        <a href="https://www.edecko.cz/category/oceneni" target="_blank">Certifikáty a ocenění</a>
                                    </li>
                                    <li role="menuitem" class="footer-menu_item">
                                        <a href="/pages/marketingcampaigndetailarticle.aspx?mct_id=14678">Jsme etická firma</a>
                                    </li> --}}
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
						<a href="{{ env('LINKEDIN_URL') }}" class="footer-social-media_item footer-social-media_item--linkedin" title="LinkedIn" target="_blank"><i class="icon-linkedin"></i></a>
						<a href="{{ env('FACEBOOK_URL') }}" class="footer-social-media_item footer-social-media_item--facebook" title="Facebook" target="_blank"><i class="icon-facebook"></i></a>
					</div>
				</div>
			</div>

			<div class="signature">
                @php
                    $year = date('Y')
                @endphp
				© 2007 – {{ $year }}, {{ env('APP_NAME') }}, <span class="web-author">Created by <a target="_blank" href="{{ env('DEVELOPER_URL') }}">{{ env('DEVELOPER_NAME') }}</a></span>
			</div>

		</div>
	</div>
}

@else
    <div class="page-footer_container">
        <div class="page-footer_in">

            <div class="panel-group footer-menu" style="display: flex; gap: 20px;">

                <div class="panel" style="flex: 1; width: auto; float: none;">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-target="#foot_reklamace" href="{{ route('pages.documents.claim-product') }}">Reklamace</a>
                        </h4>
                    </div>
                    <div id="foot_reklamace" class="panel-collapse">
                        <div class="panel-body">
                            <div class="footer-menu_wrap">
                                <ul role="menu" class="footer-menu_group">
                                    <li role="menuitem" class="footer-menu_item">
                                        <a href="{{ route('pages.documents.claim-product') }}">Jak a kde reklamovat</a>
                                    </li>
                                    <li role="menuitem" class="footer-menu_item">
                                        <a href="{{ route('pages.documents.claim-policy') }}">Reklamační řád</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel" style="flex: 1; width: auto; float: none;">
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
										<a href="{{ route('pages.company-marketing') }}">{{ config('app.name')}}</a>
									</li>
									<li role="menuitem" class="footer-menu_item">
										<a href="/pages/marketingcampaigndetailarticle.aspx?mct_id=14681">{{ config('app.name') }} a datová výměna</a>
									</li>
                                    {{-- <li role="menuitem" class="footer-menu_item">
                                        <a href="/pages/marketingcampaigndetailarticle.aspx?mct_id=14683">Finanční služby</a>
                                    </li>
                                    <li role="menuitem" class="footer-menu_item">
                                        <a href="/pages/marketingcampaigndetailarticle.aspx?mct_id=14684">eD EDEN</a>
                                    </li>
                                    <li role="menuitem" class="footer-menu_item">
                                        <a href="/pages/marketingcampaigndetailarticle.aspx?mct_id=14685">KLIKMAN</a>
                                    </li>
                                    <li role="menuitem" class="footer-menu_item">
                                        <a href="/pages/marketingcampaigndetailarticle.aspx?mct_id=14682">Outsourcing dopravy a logistiky</a> --}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel" style="flex: 1; width: auto; float: none;">
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
                                        <a href="{{ route('pages.documents.term-service') }}"><strong>Obchodní podmínky</strong></a>
                                    </li>
                                    <li role="menuitem" class="footer-menu_item">
                                        <a href="{{ route('pages.processing-personal-info') }}">Zpracování osobních údajů</a>
                                    </li>
                                    {{-- <li role="menuitem" class="footer-menu_item">
                                        <a href="/pages/marketingcampaigndetailarticle.aspx?mct_id=14675">Profil společnosti</a>
                                    </li> --}}
                                    <li role="menuitem" class="footer-menu_item">
                                        <a href="{{ route('pages.contact') }}">Kontakty</a>
                                    </li>
                                    {{-- <li role="menuitem" class="footer-menu_item">
                                        <a href="https://www.edecko.cz/category/oceneni" target="_blank">Certifikáty a ocenění</a>
                                    </li>
                                    <li role="menuitem" class="footer-menu_item">
                                        <a href="/pages/marketingcampaigndetailarticle.aspx?mct_id=14678">Jsme etická firma</a>
                                    </li> --}}
                                    {{-- <li role="menuitem" class="footer-menu_item">
                                        <a href="/pages/career.aspx">Kariéra</a>
                                    </li>
                                    <li role="menuitem" class="footer-menu_item">
                                        <a href="/cookiesConsent/article-ccookiesConsent">Ochrana soukromí</a>
                                    </li> --}}
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
                        <a href="{{ env('LINKEDIN_URL') }}" class="footer-social-media_item footer-social-media_item--linkedin" title="LinkedIn" target="_blank"><i class="icon-linkedin"></i></a>
                        <a href="{{ env('FACEBOOK_URL') }}" class="footer-social-media_item footer-social-media_item--facebook" title="Facebook" target="_blank"><i class="icon-facebook"></i></a>
                    </div>
                </div>
            </div>

            <div class="signature">
                @php
                    $year = date('Y')
                @endphp
                © 2007 – {{ $year }}, {{ env('APP_NAME') }}, <span class="web-author">Created by <a target="_blank" href="{{ env('DEVELOPER_URL') }}">{{ env('DEVELOPER_NAME') }}</a></span>
            </div>

        </div>
    </div>
@endif

