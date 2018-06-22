@extends('index')
@section('title',trans('search.a8m-title'))
@section('description', trans('search.a8m-description'))
@section('keywords', trans('search.a8m-keywords'))

@section('header')
    @include('header.header')
@endsection

@section('content')
    @include('projects.single-project.partials.antzuolako8miliak')
@endsection
@section('footer')
    @include('footer.footer')
@endsection