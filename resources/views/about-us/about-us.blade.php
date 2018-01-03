@extends('index')
@section('title','Kodekoop')
@section('description')
@lang('about-us.description')
@endsection

@section('header')
    @include('header.header')
@endsection
@section('content')
    @include('about-us.partials.about-us')   
@endsection

@section('footer')
    @include('footer.footer')
@endsection

