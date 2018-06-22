@extends('index')
@section('title',trans('search.seo-title'))
@section('description', trans('search.seo-description'))
@section('keywords', trans('search.seo-keywords'))

@section('header')
    @include('header.header')
@endsection

@section('content')
    @include('services.single-service.partials.seo')
@endsection
@section('footer')
    @include('footer.footer')
@endsection