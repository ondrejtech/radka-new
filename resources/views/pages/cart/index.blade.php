@extends('layouts.app')

@section('meta-robots', 'noindex, nofollow')

@section('content')
    <main class="page-content" role="main" aria-label="Hlavní obsah">
        <livewire:template.basket />
    </main>
@endsection
