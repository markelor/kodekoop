@extends('index')
@section('title',trans('search.creation-title'))
@section('description', trans('search.creation-description'))
@section('keywords', trans('search.creation-keywords'))

@section('header')
    @include('header.header')
@endsection

@section('content')
    @include('services.single-service.partials.creation')
@endsection
@section('footer')
    @include('footer.footer')
@endsection