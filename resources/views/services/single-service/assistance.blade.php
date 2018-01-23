@extends('index')
@section('title','Kodekoop')
@section('description')
@lang('maintenance.description')
@endsection
@section('keywords', 'Trabajos web','Creador web','Paginas web','Diseñador web,Diseño web,Angular,Laravel,PHP,Bootstrap,HTML5,CSS3,JavaScript,Jquery,Freelance,Web Freelancer,SEO,Email marketing,SEO,PPC,Banner, Desarrollador Web, Desarrollo Web')

@section('header')
    @include('header.header')
@endsection

@section('content')
    @include('services.single-service.partials.assistance')
@endsection
@section('footer')
    @include('footer.footer')
@endsection