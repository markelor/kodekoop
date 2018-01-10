<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col">
				<ul class="breadcrumb">
					<li><a href="{{ url(LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'), 'routes.home') )}}">@lang('menu.home')</a></li>
					<li><a href="{{ url(LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'), 'routes.projects') )}}">@lang('menu.services')</a></li>
					<li class="active">@lang('menu.creation')</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<div class="container">

	<div class="row">
		<div class="col">
			<div class="portfolio-title">
				<div class="row">
					
					<div class="col-lg-10 text-center">
						<h2 class="mb-0">@lang('services.creation')</h2>
					</div>
					
				</div>
			</div>

			<hr class="tall">
		</div>
	</div>

	<div class="row">
		<div class="col-lg-4">

			<span class="img-thumbnail d-block">
				<img alt="" class="img-fluid" src="{{ asset('img/services/hosting.png') }}">
			</span>

		</div>

		<div class="col-lg-8">

			<div class="portfolio-info">
				<div class="row">
					<div class="col-md-6">
						<h5>@lang('services.web-creation-what-is')</h5>
					</div>
				</div>
			</div>

			@foreach (Lang::get('services.web-creation-what-is-descriptions') as $descriptions => $description)
				<p class="mt-2">
				{{$description['text']}}
				</p>
				<dl>
				@foreach ($description['lists'] as $lists => $list)
					<dt>{{$list['title']}}</dt>
					<dd>{{$list['body']}}</dd>
					<ul><ul class="list list-icons list-icons-sm">
					@foreach ($list['sublists'] as $sublists => $sublist)
						<li><i class="fa fa-caret-right"></i>
							<strong>{{$sublist['title']}}</strong>
							{{$sublist['body']}}
						</li>
					@endforeach
					</ul></ul>
				@endforeach
				</dl>
			@endforeach

		</div>
	</div>
	<div class="row">
		<div class="col">
			<hr class="tall">
			<h4>@lang('services.web-creation-kodekoop')</h4>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="tabs">
				<ul class="nav nav-tabs nav-justified">
					<?php $i=0; ?>
					@foreach (Lang::get('services.web-creation-kodekoop-services') as $services => $service)
						@if ($i == 0)
							<li class="nav-item active">
								<a class="nav-link" href="#service{{$i}}" data-toggle="tab" class="text-center"><i class="fa fa-star"></i> {{$service['title']}}</a>
							</li>
						@else
							<li class="nav-item">
								<a class="nav-link" href="#service{{$i}}" data-toggle="tab" class="text-center">{{$service['title']}}</a>
							</li>
						@endif
						<?php $i++; ?>
					@endforeach
				</ul>
				<div class="tab-content">
					<?php $i=0; ?>
					@foreach (Lang::get('services.web-creation-kodekoop-services') as $services => $service)
						@if ($i == 0)
							<div id="service{{$i}}" class="tab-pane active">
								<p>{{$service['body']}}</p>
							</div>
						@else
							<div id="service{{$i}}" class="tab-pane">
								<p>{{$service['body']}}</a></p>
							</div>
						@endif
						<?php $i++; ?>
					@endforeach
				</div>
			</div>
		</div>

	</div>

	<div class="row">
		<div class="col">

			<hr class="tall mt-4">

			<h4 class="mb-3 text-uppercase">Related <strong>Work</strong></h4>
				
			<div class="row">
				<div class="col-12 col-sm-6 col-lg-3 mb-4">
					<div class="portfolio-item">
						<a href="portfolio-single-small-slider.html">
							<span class="thumb-info thumb-info-lighten">
								<span class="thumb-info-wrapper">
									<img src="{{ asset('img/projects/project.jpg') }}" class="img-fluid" alt="">
									<span class="thumb-info-title">
										<span class="thumb-info-inner">Presentation</span>
										<span class="thumb-info-type">Brand</span>
									</span>
									<span class="thumb-info-action">
										<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
									</span>
								</span>
							</span>
						</a>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-lg-3 mb-4">
					<div class="portfolio-item">
						<a href="portfolio-single-small-slider.html">
							<span class="thumb-info thumb-info-lighten">
								<span class="thumb-info-wrapper">
									<img src="{{ asset('img/projects/project-2.jpg') }}" class="img-fluid" alt="">
									<span class="thumb-info-title">
										<span class="thumb-info-inner">Identity</span>
										<span class="thumb-info-type">Logo</span>
									</span>
									<span class="thumb-info-action">
										<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
									</span>
								</span>
							</span>
						</a>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-lg-3 mb-4">
					<div class="portfolio-item">
						<a href="portfolio-single-small-slider.html">
							<span class="thumb-info thumb-info-lighten">
								<span class="thumb-info-wrapper">
									<img src="{{ asset('img/projects/project-3.jpg') }}" class="img-fluid" alt="">
									<span class="thumb-info-title">
										<span class="thumb-info-inner">Watch Mockup</span>
										<span class="thumb-info-type">Brand</span>
									</span>
									<span class="thumb-info-action">
										<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
									</span>
								</span>
							</span>
						</a>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-lg-3 mb-4">
					<div class="portfolio-item">
						<a href="portfolio-single-small-slider.html">
							<span class="thumb-info thumb-info-lighten">
								<span class="thumb-info-wrapper">
									<img src="{{ asset('img/projects/project-4.jpg') }}" class="img-fluid" alt="">
									<span class="thumb-info-title">
										<span class="thumb-info-inner">Three Bottles</span>
										<span class="thumb-info-type">Logo</span>
									</span>
									<span class="thumb-info-action">
										<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
									</span>
								</span>
							</span>
						</a>
					</div>
				</div>
			</div>

		</div>
	</div>

</div>