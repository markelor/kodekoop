<div class="container">

	<h2>@lang('menu.projects')</h2>

	<ul class="nav nav-pills sort-source" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
		<li class="nav-item" data-option-value="*"><a class="nav-link active" href="#">@lang('projects.show-all')</a></li>
		@foreach (Lang::get('projects.tags') as $tags => $tag)
			<li class="nav-item" data-option-value=".{{__('projects.tags.'.$tags.'.sing')}}"><a class="nav-link" href="#">{{$tag['pl']}}</a></li>
		@endforeach
		
	</ul>
	<?php $totalTags=''; ?>
	@foreach (Lang::get('projects.antzuolako8miliak.tags') as $tags => $tag)
		<?php $totalTags=$totalTags.__('projects.tags.'.$tag.'.sing')." ";?>
	@endforeach

	<div class="sort-destination-loader sort-destination-loader-showing mt-4 pt-2">
		<div class="row portfolio-list sort-destination" data-sort-id="portfolio">
			<div class="col-12 col-sm-6 col-lg-3 isotope-item {{$totalTags}}')">
				<div class="portfolio-item">
					<a href="{{ url(LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'), 'routes.antzuolako8miliak'))}}">
						<span class="thumb-info thumb-info-lighten">
							<span class="thumb-info-wrapper">
								<img src="{{ asset('img/projects/Antzuolako-8-miliak.jpg') }}" class="img-fluid" alt="">
								<span class="thumb-info-title">
									<span class="thumb-info-inner">Antzuolako 8 miliak</span>
									<span class="thumb-info-type">
										{{$totalTags}}
									</span>
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
