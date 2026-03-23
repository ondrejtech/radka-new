<x-guest-layout>
    <div class="login-pf-page">

        <a class="kc-background-link" target="_blank">
            <img src="https://www.edecko.cz/wp-content/uploads/2026/02/login-page-banner-MS-4K-cz-1-2048x1152.jpg"
                srcset="https://www.edecko.cz/wp-content/uploads/2026/02/login-page-banner-MS-4K-cz-1-2048x1152.jpg 1920w, https://www.edecko.cz/wp-content/uploads/2026/02/login-page-banner-MS-4K-cz-1-2048x1152.jpg 3840w"
                sizes="(min-width: 3840px) 3840px, 1920px" alt="Background image">
        </a>

        <div id="kc-header" class="login-pf-page-header">
            <div id="kc-header-wrapper" class="">edshop</div>
        </div>

        <div class="card-pf">
            <header class="login-pf-header">
                <div class="logo"></div>
                <div class="" id="kc-locale">
                    <div id="kc-locale-wrapper" class="">
                        <div id="kc-locale-dropdown" class="">
                            <a href="#" id="kc-current-locale-link">Čeština</a>
                            <ul class="">
                                <li class=""><a class="" href="#">Čeština</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <h1 id="kc-page-title">Zapomněli jste heslo?</h1>
            </header>

            <div id="kc-content">
                <div id="kc-content-wrapper">

                    @if (session('status'))
                        <div class="alert alert-info">{{ session('status') }}</div>
                    @endif

                    <form id="kc-reset-password-form" class="form-horizontal"
                        action="{{ route('password.email') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <label for="username" class="control-label">Přihlašovací jméno</label>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <input type="text" id="username" name="email" class="form-control"
                                    value="{{ old('email') }}" autofocus>
                                @error('email')
                                    <span class="field-error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group login-pf-settings">
                            <div id="kc-form-options" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="link">
                                    <span><a href="{{ route('login') }}">Zpět</a></span>
                                </div>
                            </div>
                            <div id="kc-form-buttons" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <input class="btn btn-primary btn-block btn-lg" type="submit" value="Odeslat">
                            </div>
                        </div>
                    </form>

                    <div id="kc-info" class="login-pf-signup">
                        <div id="kc-info-wrapper" class="">
                            Zadejte své uživatelské jméno a my vám zašleme pokyny k vytvoření nového hesla.
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</x-guest-layout>
