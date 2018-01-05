<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col">
				<ul class="breadcrumb">
					<li><a href="{{ url(LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'), 'routes.home') )}}">@lang('menu.home')</a></li>
					<li class="active">@lang('menu.services')</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<div class="container">

	<h2>@lang('services.our')<strong>@lang('services.services')</strong></h2>

	<div class="row align-items-center">
		<div class="col-lg-10">
			<p class="lead">
				@lang('services.general-description')
				
			</p>
		</div>
		<div class="col-lg-2">
			<a href="#" class="btn btn-lg btn-primary">Contact Us!</a>
		</div>
	</div>

	<hr>

	<div class="featured-boxes">
		<div class="row">
			<div class="col-lg-3 col-sm-6">
				<div class="featured-box featured-box-primary featured-box-effect-1 mt-0 mt-lg-5">
					<div class="box-content">
						<i class="icon-featured fa fa-user"></i>
						<h4 class="text-uppercase">@lang('services.domain')</h4>
						<p>@lang('services.domain-short-description')</p>
						<p><a href="{{ url(LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'), 'routes.services').'/'.LaravelLocalization::transRoute('routes.domain'))}}" class="lnk-primary learn-more">@lang('services.read-more') <i class="fa fa-angle-right"></i></a></p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="featured-box featured-box-secondary featured-box-effect-1 mt-0 mt-lg-5">
					<div class="box-content">
						<i class="icon-featured fa fa-book"></i>
						<h4 class="text-uppercase">@lang('services.hosting')</h4>
						<p>@lang('services.hosting-short-description')</p>
						<p><a href="{{ url(LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'), 'routes.services').'/'.LaravelLocalization::transRoute('routes.hosting'))}}" class="lnk-secondary learn-more">@lang('services.read-more') <i class="fa fa-angle-right"></i></a></p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="featured-box featured-box-tertiary featured-box-effect-1 mt-0 mt-lg-5">
					<div class="box-content">
						<i class="icon-featured fa fa-trophy"></i>
						<h4 class="text-uppercase">@lang('services.seo')</h4>
						<p>@lang('services.seo-short-description')</p>
						<p><a href="{{ url(LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'), 'routes.services').'/'.LaravelLocalization::transRoute('routes.seo'))}}" class="lnk-tertiary learn-more">@lang('services.read-more') <i class="fa fa-angle-right"></i></a></p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="featured-box featured-box-quaternary featured-box-effect-1 mt-0 mt-lg-5">
					<div class="box-content">
						<i class="icon-featured fa fa-cogs"></i>
						<h4 class="text-uppercase">@lang('services.stats')</h4>
						<p> @lang('services.stats-short-description')</p>
						<p><a href="{{ url(LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'), 'routes.services').'/'.LaravelLocalization::transRoute('routes.stats'))}}" class="lnk-quaternary learn-more">@lang('services.read-more') <i class="fa fa-angle-right"></i></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<hr>

</div>