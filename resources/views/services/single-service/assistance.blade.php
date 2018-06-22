@extends('index')
@section('title',trans('search.assistance-title'))
@section('description', trans('search.assistance-description'))
@section('keywords', trans('search.assistance-keywords'))

@section('header')
    @include('header.header')
@endsection

@section('content')
    @include('services.single-service.partials.assistance')
@endsection
@section('footer')
    @include('footer.footer')
@endsection