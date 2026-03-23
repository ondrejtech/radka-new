<x-guest-layout>
    <div class="login-pf-page">

        <a href="https://www.edecko.cz/2026/01/01/copilot-pc-pro-maximalni-vykon-a-bezpecnost/" class="kc-background-link"
            target="_blank">
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
                <h1 id="kc-page-title">Přihlásit k vašemu účtu</h1>
            </header>

            <div id="kc-content">
                <div id="kc-content-wrapper">

                    @if (session('status'))
                        <div class="alert alert-info">{{ session('status') }}</div>
                    @endif

                    <div id="kc-form">
                        <div id="kc-form-wrapper">
                            <form id="kc-form-login" action="{{ route('login') }}" method="post">
                                @csrf

                                <div class="form-group">
                                    <label for="username" class="control-label">Přihlašovací jméno</label>
                                    <input tabindex="1" id="username" class="form-control" name="email"
                                        value="{{ old('email') }}" type="text" autofocus autocomplete="username">
                                    @error('email')
                                        <span class="field-error">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password" class="control-label">Heslo</label>
                                    <input tabindex="2" id="password" class="form-control" name="password"
                                        type="password" autocomplete="current-password">
                                    @error('password')
                                        <span class="field-error">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group login-pf-settings">
                                    <div id="kc-form-options"></div>
                                    <div class="link">
                                        <span>
                                            <a tabindex="5" href="{{ route('password.request') }}">Zapomenuté heslo</a>
                                        </span>
                                    </div>
                                </div>

                                <div id="kc-form-buttons" class="form-group">
                                    <input type="hidden" id="id-hidden-input" name="credentialId">
                                    <input tabindex="4" class="btn btn-primary btn-block btn-lg" name="login"
                                        id="kc-login" type="submit" value="Přihlásit">
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</x-guest-layout>
