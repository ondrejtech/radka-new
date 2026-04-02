@extends('layouts.app')


@section('content')
    <div class="page-contend" role="main" aria-label="Hlavní obsah">
        <livewire:template.Order :orderId=$orderId />
    </div>
@endsection
