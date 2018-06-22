@extends('index')
@section('title',trans('search.hosting-title'))
@section('description', trans('search.hosting-description'))
@section('keywords', trans('search.hosting-keywords'))

@section('header')
    @include('header.header')
@endsection

@section('content')
    @include('services.single-service.partials.hosting')
@endsection
@section('footer')
    @include('footer.footer')
@endsection