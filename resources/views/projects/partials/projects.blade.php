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
								<img src="{{ asset('img/projects/antzuolako-8-miliak.jpg') }}" class="img-fluid" alt="">
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
		</div>
	</div>

</div>
