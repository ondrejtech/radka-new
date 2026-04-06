@extends('layouts.app')


@section('content')
    <div class="page-contend" role="main" aria-label="Hlavní obsah">
        <div class="page-content_in">
            <div class="container">
                <div class="page-content_heading">
                    <h1 class="page-title">Kontakty</h1>
                </div>
                <div class="people-tiles">
                    <h2 class="popup-box-title">Náš tým je vám k dispozici</h2>
                    <div class="people-tiles_in">
                        @foreach($persons as $person)
                            <div class="people-tile" id="{{ $person->id }}">
                                <div class="people-tile_in">
                                    <div class="people-tile_header">
                                        <figure class="people-tile_img-wrap">
                                            <img class="people-tile_img" alt="{{ $person->name }}" src="/IMGCACHE/usr/15201_0a_1.jpg">
                                        </figure>

                                        <strong class="people-tile_work-position">{{ $person->role }}</strong>
                                        <strong class="people-tile_name">{{ $person->name }}</strong>
                                        <span class="people-tile_info">{{ $person->role_title }}</span>
                                    </div>

                                    <div class="people-tile_contacts-wrap">
                                        <div class="people-tile_contact people-tile_contact--email">
                                            <span class="label">e-mail:</span> <a class="highlight"
                                                href="mailto:{{ $person->email }}">{{ $person->email }}</a>
                                        </div>
                                        <div class="people-tile_contact people-tile_contact--phone">
                                            <span class="label">tel.:</span> <span class="highlight"></span>

                                            <img class="status-pictogram people-tile_lync-status fn-getContactStatus js-tooltip"
                                                src="/images/pr_primary_black_25x25.GIF" data-contacturi="rtriska@elx.cz"
                                                alt="Lync status" style="display: none;">

                                        </div>

                                        <div class="people-tile_contact people-tile_contact--gsm">
                                            <span class="label">mob.:</span> <span class="highlight">{{ $person->phone }}</span>
                                        </div>

                                    </div>

                                    <button class="btn people-tile_btn-call-form"
                                        <span class="btn_label">Kontaktujte mě nazpět</span>
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
