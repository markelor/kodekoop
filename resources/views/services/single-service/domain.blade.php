@extends('index')
@section('title',trans('search.domain-title'))
@section('description', trans('search.domain-description'))
@section('keywords', trans('search.domain-keywords'))

@section('header')
    @include('header.header')
@endsection

@section('content')
    @include('services.single-service.partials.domain')
@endsection
@section('footer')
    @include('footer.footer')
@endsection