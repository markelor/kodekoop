@extends('index')
@section('title',trans('search.home-title'))
@section('description', trans('search.home-description'))
@section('keywords', trans('search.home-keywords'))

@section('header') 
	@include('header.header')
@endsection 

@section('content')
    {{-- @include('home.partials.home')  --}}
    {{--@include('home.partials.brands') --}}
    {{--@include('home.partials.testimonials') --}}  
 	@include('home.partials.navigation')
 	@include('services.partials.services')
 	@include('about-us.partials.separator')
 	@include('about-us.partials.about-us')
 	@include('projects.partials.separator')
 	@include('projects.partials.projects')

@endsection

@section('footer')
    @include('footer.footer')
@endsection

