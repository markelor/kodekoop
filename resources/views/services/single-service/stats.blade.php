@extends('index')
@section('title',trans('search.stats-title'))
@section('description', trans('search.stats-description'))
@section('keywords', trans('search.stats-keywords'))

@section('header')
    @include('header.header')
@endsection

@section('content')
    @include('services.single-service.partials.stats')
@endsection
@section('footer')
    @include('footer.footer')
@endsection