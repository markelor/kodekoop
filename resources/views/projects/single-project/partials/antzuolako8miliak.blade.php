<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col">
				<ul class="breadcrumb">
					<li><a href="{{ url(LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'), 'routes.home') )}}">@lang('menu.home')</a></li>
					<li class="active">@lang('menu.antzuolako8miliak')</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<div class="container">



	<div class="row">
		<div class="col-lg-4">

			<div class="owl-carousel owl-theme" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 3000}">
				<div>
					<span class="img-thumbnail d-block">
						<img alt="Hasierako orria" class="img-fluid" src="{{ asset('img/projects/antzuolako-8-miliak.jpg') }}">
					</span>
				</div>
				<div>
					<span class="img-thumbnail d-block">
						<img alt="Lasterketako sailkapenak" class="img-fluid" src="{{ asset('img/projects/antzuolako-8-miliak-sailkapena.jpg') }}">
					</span>
				</div>
				<div>
					<span class="img-thumbnail d-block">
						<img alt="Argazki galeriak" class="img-fluid" src="{{ asset('img/projects/antzuolako-8-miliak-galeria.jpg') }}">
					</span>
				</div>
			</div>

		</div>

		<div class="col-lg-8">

			<div class="portfolio-info">
				<div class="row">
					<div class="col-md-6">
						<h5>Antzuolako 8 miliak</h5>
					</div>
					<div class="col-md-6 text-left text-lg-right">
						<ul>
							<li>
								<i class="fa fa-calendar"></i> @lang('projects.antzuolako8miliak.date')
							</li>
							<li>
								<i class="fa fa-tags"></i> 
								<?php $i=0; ?>
								@foreach (Lang::get('projects.antzuolako8miliak.tags') as $tags => $tag)
									@if ($i == 0)
										{{ __('projects.tags.'.$tag.'.sing')}}
									@else
										, {{ __('projects.tags.'.$tag.'.sing')}}
									@endif
									<?php $i++; ?>
								@endforeach
							</li>
						</ul>
					</div>
				</div>
			</div>

			<p class="mt-2">@lang('projects.antzuolako8miliak.description')</p>

			<a href="http://a8m.kodekoop.eus" target="_blank" class="btn btn-primary btn-icon"><i class="fa fa-external-link"></i>@lang('projects.go-to-project')</a> <span class="arrow hlb appear-animation" data-appear-animation="rotateInUpLeft" data-appear-animation-delay="800"></span>

			<ul class="portfolio-details">
				<li>
					<h5 class="mt-2 mb-1">@lang('projects.work-done')</h5>

					<ul class="list list-inline list-icons">
						@foreach (Lang::get('projects.antzuolako8miliak.tags') as $tags => $tag)
							<li class="list-inline-item"><i class="fa fa-check-circle"></i> {{ __('projects.tags.'.$tag.'.sing')}}</li>
						@endforeach
					</ul>
				</li>
				<li>
					<h5 class="mt-2 mb-1">@lang('projects.client')</h5>
					<p>@lang('projects.antzuolako8miliak.client')</p>
				</li>
			</ul>

		</div>
	</div>


<section class="call-to-action call-to-action-default with-button-arrow content-align-center call-to-action-in-footer">
<div class="container">
	<div class="row">
		<div class="col-md-9 col-lg-9">
			<div class="call-to-action-content">
				<h3>@lang('projects.want-a-web')</h3>
				<p class="mb-0">@lang('footer.contact-us')</p>
			</div>
		</div>
		<div class="col-md-3 col-lg-3">
			<div class="call-to-action-btn">
				<a href="{{ url(LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'), 'routes.contact') )}}" class="btn btn-lg btn-primary">@lang('contact.contact')</a>
			</div>
		</div>
	</div>
</div>
</section>