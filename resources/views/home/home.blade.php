@extends('index')
@section('title','Kodekoop')
@section('description', 'hasierako deskribapena.')
@section('keywords', 'Trabajos web','Creador web','Paginas web','Diseñador web,Diseño web,Angular,Laravel,PHP,Bootstrap,HTML5,CSS3,JavaScript,Jquery,Freelance,Web Freelancer,SEO,Email marketing,SEO,PPC,Banner, Desarrollador Web, Desarrollo Web')
{{-- @section('canonical','http://www.creadoreswebs.es')--}}

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

