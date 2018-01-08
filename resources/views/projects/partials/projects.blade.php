<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col">
				<ul class="breadcrumb">
					<li><a href="{{ url(LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'), 'routes.home') )}}">@lang('menu.home')</a></li>
					<li class="active">@lang('menu.projects')</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<div class="container">

	<h2>@lang('menu.projects')</h2>

	<ul class="nav nav-pills sort-source" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
		<li class="nav-item" data-option-value="*"><a class="nav-link active" href="#">Show All</a></li>
		<li class="nav-item" data-option-value=".websites"><a class="nav-link" href="#">Websites</a></li>
		<li class="nav-item" data-option-value=".logos"><a class="nav-link" href="#">Logos</a></li>
		<li class="nav-item" data-option-value=".brands"><a class="nav-link" href="#">Brands</a></li>
		<li class="nav-item" data-option-value=".medias"><a class="nav-link" href="#">Medias</a></li>
	</ul>

	<div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
		<div class="row portfolio-list sort-destination" data-sort-id="portfolio">
			<div class="col-12 col-sm-6 col-lg-3 isotope-item brands">
				<div class="portfolio-item">
					<a href="{{ url(LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'), 'routes.project1'))}}">
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
			<div class="col-12 col-sm-6 col-lg-3 isotope-item medias">
				<div class="portfolio-item">
					<a href="{{ url(LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'), 'routes.project1'))}}">
						<span class="thumb-info thumb-info-lighten thumb-info-no-zoom">
							<span class="thumb-info-wrapper">
								<span class="owl-carousel owl-theme nav-inside m-0" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 3000}">
									<span>
										<img src="{{ asset('img/projects/project-1.jpg') }}" class="img-fluid" alt="">
									</span>
									<span>
										<img src="{{ asset('img/projects/project-1-2.jpg') }}" class="img-fluid" alt="">
									</span>
								</span>

								<span class="thumb-info-title">
									<span class="thumb-info-inner">Porto Watch</span>
									<span class="thumb-info-type">Media</span>
								</span>
								<span class="thumb-info-action">
									<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
								</span>
							</span>
						</span>
					</a>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-lg-3 isotope-item logos">
				<div class="portfolio-item">
					<a href="{{ url(LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'), 'routes.project1'))}}">
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
			<div class="col-12 col-sm-6 col-lg-3 isotope-item brands">
				<div class="portfolio-item">
					<a href="{{ url(LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'), 'routes.project1'))}}">
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
			<div class="col-12 col-sm-6 col-lg-3 isotope-item logos">
				<div class="portfolio-item">
					<a href="{{ url(LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'), 'routes.project1'))}}">
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
			<div class="col-12 col-sm-6 col-lg-3 isotope-item brands">
				<div class="portfolio-item">
					<a href="{{ url(LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'), 'routes.project1'))}}">
						<span class="thumb-info thumb-info-lighten">
							<span class="thumb-info-wrapper">
								<img src="{{ asset('img/projects/project-5.jpg') }}" class="img-fluid" alt="">
								<span class="thumb-info-title">
									<span class="thumb-info-inner">Company T-Shirt</span>
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
			<div class="col-12 col-sm-6 col-lg-3 isotope-item websites">
				<div class="portfolio-item">
					<a href="{{ url(LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'), 'routes.project1'))}}">
						<span class="thumb-info thumb-info-lighten">
							<span class="thumb-info-wrapper">
								<img src="{{ asset('img/projects/project-6.jpg') }}" class="img-fluid" alt="">
								<span class="thumb-info-title">
									<span class="thumb-info-inner">Mobile Mockup</span>
									<span class="thumb-info-type">Website</span>
								</span>
								<span class="thumb-info-action">
									<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
								</span>
							</span>
						</span>
					</a>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-lg-3 isotope-item medias">
				<div class="portfolio-item">
					<a href="{{ url(LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'), 'routes.project1'))}}">
						<span class="thumb-info thumb-info-lighten">
							<span class="thumb-info-wrapper">
								<img src="{{ asset('img/projects/project-7.jpg') }}" class="img-fluid" alt="">
								<span class="thumb-info-title">
									<span class="thumb-info-inner">Porto Label</span>
									<span class="thumb-info-type">Media</span>
								</span>
								<span class="thumb-info-action">
									<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
								</span>
							</span>
						</span>
					</a>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-lg-3 isotope-item logos">
				<div class="portfolio-item">
					<a href="{{ url(LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'), 'routes.project1'))}}">
						<span class="thumb-info thumb-info-lighten">
							<span class="thumb-info-wrapper">
								<img src="{{ asset('img/projects/project-23.jpg') }}" class="img-fluid" alt="">
								<span class="thumb-info-title">
									<span class="thumb-info-inner">Business Folders</span>
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
			<div class="col-12 col-sm-6 col-lg-3 isotope-item websites">
				<div class="portfolio-item">
					<a href="{{ url(LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'), 'routes.project1'))}}">
						<span class="thumb-info thumb-info-lighten">
							<span class="thumb-info-wrapper">
								<img src="{{ asset('img/projects/project-24.jpg') }}" class="img-fluid" alt="">
								<span class="thumb-info-title">
									<span class="thumb-info-inner">Tablet Screen</span>
									<span class="thumb-info-type">Website</span>
								</span>
								<span class="thumb-info-action">
									<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
								</span>
							</span>
						</span>
					</a>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-lg-3 isotope-item medias">
				<div class="portfolio-item">
					<a href="{{ url(LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'), 'routes.project1'))}}">
						<span class="thumb-info thumb-info-lighten">
							<span class="thumb-info-wrapper">
								<img src="{{ asset('img/projects/project-25.jpg') }}" class="img-fluid" alt="">
								<span class="thumb-info-title">
									<span class="thumb-info-inner">Black Watch</span>
									<span class="thumb-info-type">Media</span>
								</span>
								<span class="thumb-info-action">
									<span class="thumb-info-action-icon"><i class="fa fa-link"></i></span>
								</span>
							</span>
						</span>
					</a>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-lg-3 isotope-item websites">
				<div class="portfolio-item">
					<a href="{{ url(LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'), 'routes.project1'))}}">
						<span class="thumb-info thumb-info-lighten">
							<span class="thumb-info-wrapper">
								<img src="{{ asset('img/projects/project-26.jpg') }}" class="img-fluid" alt="">
								<span class="thumb-info-title">
									<span class="thumb-info-inner">Monitor Mockup</span>
									<span class="thumb-info-type">Website</span>
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