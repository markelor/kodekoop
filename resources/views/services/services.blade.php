@extends('index')
@section('title',trans('search.services-title'))
@section('description', trans('search.services-description'))
@section('keywords', trans('search.services-keywords'))

@section('header')
    @include('header.header')
@endsection

@section('content')
    @include('services.partials.services')
    @include('services.partials.prices')
@endsection
@section('footer')
    @include('footer.footer')
@endsection