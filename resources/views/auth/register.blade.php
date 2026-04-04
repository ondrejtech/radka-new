@extends('layouts.app')

@section('title', 'Registrace uživatele | ' . config('app.name'))

@push('styles')
    <link href="{{ asset('assets/bundles/css/registration.css') }}" rel="stylesheet"/>
@endpush

@section('content')
    <div class="page-content_in">
        <div class="container">

            <div x-data="aresLookup()" x-init="init()">

                <h1 class="page-title">Registrace</h1>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('register') }}" id="registration-form">
                    @csrf

                    {{-- Honeypot --}}
                    <input type="text" name="website" style="display:none;" tabindex="-1" autocomplete="off">

                    <div class="panel">
                        <div class="panel-table">

                            {{-- Firemní údaje --}}
                            <div class="panel">
                                <div class="panel-body">
                                    <h2 class="panel-title">Firemní údaje</h2>
                                    <div class="form-base">
                                        <div class="form-base_row">
                                            <div class="form-base_item">
                                                <div class="form-group">
                                                    <label for="txtLegalICO">IČ</label>
                                                    <input name="company_ic" type="text" id="txtLegalICO"
                                                        class="form-control" maxlength="20"
                                                        value="{{ old('company_ic') }}"
                                                        x-model="ico">
                                                    @error('company_ic')
                                                        <span class="field-error">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-base_item">
                                                <div class="buttons-area buttons-area--no-vertical-margin buttons-area--left">
                                                    <button type="button" class="btn btn--default"
                                                        :disabled="loading"
                                                        @click="fetchAres()">
                                                        <span class="btn_label">
                                                            <span x-show="!loading">Dohledat dle IČ</span>
                                                            <span x-show="loading">Načítám…</span>
                                                        </span>
                                                    </button>
                                                    <span x-show="aresError" x-text="aresError" class="field-error" style="display:none;"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-base_row">
                                            <div class="form-base_item">
                                                <div class="form-group">
                                                    <label for="txtLegalName">Název firmy</label>
                                                    <input name="company_name" type="text" maxlength="100"
                                                        id="txtLegalName" class="form-control"
                                                        value="{{ old('company_name') }}"
                                                        x-model="companyName">
                                                    @error('company_name')
                                                        <span class="field-error">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-base_item">
                                                <div class="form-group">
                                                    <label for="txtLegalDIC">DIČ</label>
                                                    <input name="company_dic" type="text" id="txtLegalDIC"
                                                        class="form-control" maxlength="20"
                                                        value="{{ old('company_dic') }}"
                                                        x-model="companyDic">
                                                    @error('company_dic')
                                                        <span class="field-error">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Fakturační údaje --}}
                                <div class="panel-body">
                                    <h2 class="panel-title">Fakturační údaje</h2>
                                    <div class="form-base">
                                        <div class="form-base_row">
                                            <div class="form-base_item">
                                                <div class="form-group">
                                                    <label for="txtLegalStreet">Ulice a čp.</label>
                                                    <input name="street" type="text" maxlength="100"
                                                        id="txtLegalStreet" class="form-control"
                                                        value="{{ old('street') }}"
                                                        x-model="street">
                                                    @error('street')
                                                        <span class="field-error">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-base_item">
                                                <div class="form-group">
                                                    <label for="txtLegalCity">Město</label>
                                                    <input name="city" type="text" maxlength="100"
                                                        id="txtLegalCity" class="form-control"
                                                        value="{{ old('city') }}"
                                                        x-model="city">
                                                    @error('city')
                                                        <span class="field-error">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-base_row">
                                            <div class="form-base_item">
                                                <div class="form-group">
                                                    <label for="txtLegalZip">PSČ</label>
                                                    <input name="zip" type="text" maxlength="7"
                                                        id="txtLegalZip" class="form-control"
                                                        value="{{ old('zip') }}"
                                                        x-model="zip">
                                                    @error('zip')
                                                        <span class="field-error">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-base_item">
                                                <div class="form-group">
                                                    <label for="ddLegalCountry">Stát</label>
                                                    <select name="country" id="MainContent_ddLegalCountry" class="form-control js-combo">
                                                        @php
                                                            $countries = [
                                                                'Czech Republic' => 'Czech Republic',
                                                                'Slovakia' => 'Slovakia',
                                                                'Austria' => 'Austria',
                                                                'Germany' => 'Germany',
                                                                'Poland' => 'Poland',
                                                                'Hungary' => 'Hungary',
                                                                'France' => 'France',
                                                                'Italy' => 'Italy',
                                                                'Spain' => 'Spain',
                                                                'Netherlands' => 'Netherlands',
                                                                'Belgium' => 'Belgium',
                                                                'Switzerland' => 'Switzerland',
                                                                'Great Britain' => 'Great Britain',
                                                                'USA' => 'USA',
                                                            ];
                                                            $selected = old('country', 'Czech Republic');
                                                        @endphp
                                                        @foreach ($countries as $val => $label)
                                                            <option value="{{ $val }}" @selected($selected === $val)>{{ $label }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('country')
                                                        <span class="field-error">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Kontaktní údaje --}}
                            <div class="panel">
                                <div class="panel-body">
                                    <h2 class="panel-title">Kontaktní údaje</h2>
                                    <div class="form-base">
                                        <div class="form-base_row">
                                            <div class="form-base_item">
                                                <div class="form-group">
                                                    <label for="txtPersonFName">Jméno</label>
                                                    <input name="first_name" type="text" maxlength="20"
                                                        id="txtPersonFName" class="form-control"
                                                        value="{{ old('first_name') }}">
                                                    @error('first_name')
                                                        <span class="field-error">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-base_item">
                                                <div class="form-group">
                                                    <label for="txtPersonLName">Příjmení</label>
                                                    <input name="last_name" type="text" maxlength="100"
                                                        id="txtPersonLName" class="form-control"
                                                        value="{{ old('last_name') }}">
                                                    @error('last_name')
                                                        <span class="field-error">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-base_row">
                                            <div class="form-base_item">
                                                <div class="form-group">
                                                    <label for="txtLegalTel">Mobilní telefon</label>
                                                    <input name="phone" type="text" maxlength="20"
                                                        id="txtLegalTel" class="form-control"
                                                        value="{{ old('phone') }}">
                                                    @error('phone')
                                                        <span class="field-error">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-base_item">
                                                <div class="form-group">
                                                    <label for="txtLegalEmail">E-mail</label>
                                                    <input name="email" type="text" maxlength="100"
                                                        id="txtLegalEmail" class="form-control"
                                                        value="{{ old('email') }}">
                                                    <small class="form-control-info">Kontaktní/přihlašovací e-mail</small>
                                                    @error('email')
                                                        <span class="field-error">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-base_row">
                                            <div class="form-base_item">
                                                <div class="form-group">
                                                    <label for="txtPassword">Heslo</label>
                                                    <input name="password" type="password"
                                                        id="txtPassword" class="form-control"
                                                        autocomplete="new-password">
                                                    @error('password')
                                                        <span class="field-error">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-base_item">
                                                <div class="form-group">
                                                    <label for="txtPasswordConfirm">Heslo znovu</label>
                                                    <input name="password_confirmation" type="password"
                                                        id="txtPasswordConfirm" class="form-control"
                                                        autocomplete="new-password">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="form-base">
                                        <div class="form-base_item">
                                            <div class="form-group">
                                                <label for="txtLegalNote">Poznámka</label>
                                                <textarea name="note" rows="4" id="txtLegalNote"
                                                    class="form-control">{{ old('note') }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="panel-bottom-tools reg_submit-area">
                        <div class="info-bar">
                            <span class="checkbox">
                                <input id="chkbLegalCondition" type="checkbox" name="terms_accepted" value="1"
                                    {{ old('terms_accepted') ? 'checked' : '' }}>
                                <label for="chkbLegalCondition">
                                    Souhlasím s <a href="/pages/marketingcampaigndetailarticle.aspx?mct_id=15616" target="_blank">obchodními podmínkami</a> společnosti {{ config('app.name') }}, seznámil(a) jsem se se <a href="/zpracovani-osobnich-udaju/article2-cgdpr" target="_blank">zásadami zpracování osobních údajů</a>
                                </label>
                            </span>
                            @error('terms_accepted')
                                <span class="field-error d-block">{{ $message }}</span>
                            @enderror
                            <br>
                            <span class="checkbox">
                                <input id="chkbLegalSpamSave" type="checkbox" name="newsletter" value="1"
                                    {{ old('newsletter') ? 'checked' : '' }}>
                                <label for="chkbLegalSpamSave">
                                    Souhlasím se zasíláním <a href="/zpracovani-osobnich-udaju/article2-cgdpr" target="_blank">informací o slevách, zajímavých produktech a akcích eD</a>
                                </label>
                            </span>
                        </div>
                        <div class="buttons-area">
                            <input type="submit" value="Registrovat" id="MainContent_btSave" class="btn btn--submit">
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    function aresLookup() {
        return {
            ico: '{{ old('company_ic') }}',
            companyName: '{{ old('company_name') }}',
            companyDic: '{{ old('company_dic') }}',
            street: '{{ old('street') }}',
            city: '{{ old('city') }}',
            zip: '{{ old('zip') }}',
            loading: false,
            aresError: '',

            init() {},

            async fetchAres() {
                const ico = this.ico.replace(/\D/g, '');
                if (ico.length !== 8) {
                    this.aresError = 'IČ musí mít 8 číslic.';
                    return;
                }
                this.aresError = '';
                this.loading = true;
                try {
                    const response = await fetch(`/ares/lookup/${ico}`);
                    const data = await response.json();
                    if (!response.ok) {
                        this.aresError = data.error || 'Chyba při načítání dat.';
                        return;
                    }
                    this.companyName = data.company_name || '';
                    this.companyDic  = data.company_dic  || '';
                    this.street      = data.street       || '';
                    this.city        = data.city         || '';
                    this.zip         = data.zip          || '';
                } catch (e) {
                    this.aresError = 'Nepodařilo se spojit se serverem.';
                } finally {
                    this.loading = false;
                }
            }
        };
    }
</script>
@endpush
