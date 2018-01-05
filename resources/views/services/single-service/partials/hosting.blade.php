<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col">
				<ul class="breadcrumb">
					<li><a href="{{ url(LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'), 'routes.home') )}}">@lang('menu.home')</a></li>
					<li><a href="{{ url(LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'), 'routes.projects') )}}">@lang('menu.projects')</a></li>
					<li class="active">@lang('menu.project1')</li>
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
					<div class="portfolio-nav-all col-lg-1">
						<a href="portfolio-single-small-slider.html" data-tooltip data-original-title="Back to list"><i class="fa fa-th"></i></a>
					</div>
					<div class="col-lg-10 text-center">
						<h2 class="mb-0">Porto Watch</h2>
					</div>
					<div class="portfolio-nav col-lg-1">
						<a href="portfolio-single-small-slider.html" class="portfolio-nav-prev" data-tooltip data-original-title="Previous"><i class="fa fa-chevron-left"></i></a>
						<a href="portfolio-single-small-slider.html" class="portfolio-nav-next" data-tooltip data-original-title="Next"><i class="fa fa-chevron-right"></i></a>
					</div>
				</div>
			</div>

			<hr class="tall">
		</div>
	</div>

	<div class="row">
		<div class="col-lg-4">

			<div class="owl-carousel owl-theme" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 3000}">
				<div>
					<span class="img-thumbnail d-block">
						<img alt="" class="img-fluid" src="{{ asset('img/projects/project-1.jpg') }}">
					</span>
				</div>
				<div>
					<span class="img-thumbnail d-block">
						<img alt="" class="img-fluid" src="{{ asset('img/projects/project-1-2.jpg') }}">
					</span>
				</div>
			</div>

		</div>

		<div class="col-lg-8">

			<div class="portfolio-info">
				<div class="row">
					<div class="col-md-6">
						<h5>Project Description</h5>
					</div>
					<div class="col-md-6 text-left text-lg-right">
						<ul>
							<li>
								<a href="#" data-tooltip data-original-title="Like"><i class="fa fa-heart"></i>14</a>
							</li>
							<li>
								<i class="fa fa-calendar"></i> 01 January 2017
							</li>
							<li>
								<i class="fa fa-tags"></i> <a href="#">Brand</a>, <a href="#">Design</a>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus nibh sed elimttis adipiscing. Fusce in hendrerit purus. Suspendisse potenti. Proin quis eros odio, dapibus dictum mauris. Donec nisi libero, adipiscing id pretium eget, consectetur sit amet leo. Nam at eros quis mi egestas fringilla non nec purus.</p>

			<a href="#" class="btn btn-primary btn-icon"><i class="fa fa-external-link"></i>Live Preview</a> <span class="arrow hlb appear-animation" data-appear-animation="rotateInUpLeft" data-appear-animation-delay="800"></span>

			<ul class="portfolio-details">
				<li>
					<h5 class="mt-2 mb-1">Skills</h5>

					<ul class="list list-inline list-icons">
						<li class="list-inline-item"><i class="fa fa-check-circle"></i> Design</li>
						<li class="list-inline-item"><i class="fa fa-check-circle"></i> HTML/CSS</li>
						<li class="list-inline-item"><i class="fa fa-check-circle"></i> Javascript</li>
						<li class="list-inline-item"><i class="fa fa-check-circle"></i> Backend</li>
					</ul>
				</li>
				<li>
					<h5 class="mt-2 mb-1">Client</h5>
					<p>Okler Themes</p>
				</li>
			</ul>

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

</div>

<section class="call-to-action call-to-action-default with-button-arrow content-align-center call-to-action-in-footer">
<div class="container">
	<div class="row">
		<div class="col-md-9 col-lg-9">
			<div class="call-to-action-content">
				<h3>Porto is <strong>everything</strong> you need to create an <strong>awesome</strong> website!</h3>
				<p class="mb-0">The <strong>#1 Selling</strong> HTML Site Template on ThemeForest</p>
			</div>
		</div>
		<div class="col-md-3 col-lg-3">
			<div class="call-to-action-btn">
				<a href="http://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank" class="btn btn-lg btn-primary">Buy Now!</a><span class="arrow hlb d-none d-md-block" data-appear-animation="rotateInUpLeft" style="top: -40px; left: 70%;"></span>
			</div>
		</div>
	</div>
</div>
</section>