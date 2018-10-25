@extends('layouts.app')

@section('content')
    @include('partials.page-header')

@section('content')
    <div class="card-columns">
        <div class="card">
            <img class="card-img" src="@asset('images/header-image1.jpg')" alt="Card image">
        </div>

        <div class="card">
            <img class="card-img" src="@asset('images/header-image1.jpg')" alt="Card image">
        </div>

        <div class="card">
            <img class="card-img" src="@asset('images/header-image1.jpg')" alt="Card image">
        </div>

        <div class="card">
            <img class="card-img" src="@asset('images/header-image1.jpg')" alt="Card image">
        </div>

    </div>
@stop

@endsection
