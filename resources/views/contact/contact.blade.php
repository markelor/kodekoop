@extends('index')
@section('title',trans('search.contact-title'))
@section('description', trans('search.contact-description'))
@section('keywords', trans('search.contact-keywords'))

@section('header')
    @include('header.header')
@endsection
@section('content')
    @include('contact.partials.navigation')   
    @include('contact.partials.contact')   
@endsection

@section('footer')
    @include('footer.footer')
@endsection

