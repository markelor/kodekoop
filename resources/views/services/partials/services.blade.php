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

	<h2>Our <strong>Services</strong></h2>

	<div class="row align-items-center">
		<div class="col-lg-10">
			<p class="lead">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla non pulvinar. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut eu risus enim, ut pulvinar lectus. Sed hendrerit nibh metus.
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
						<h4 class="text-uppercase">Loved by Customers</h4>
						<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus.</p>
						<p><a href="/" class="lnk-primary learn-more">Learn More <i class="fa fa-angle-right"></i></a></p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="featured-box featured-box-secondary featured-box-effect-1 mt-0 mt-lg-5">
					<div class="box-content">
						<i class="icon-featured fa fa-book"></i>
						<h4 class="text-uppercase">Well Documented</h4>
						<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus.</p>
						<p><a href="/" class="lnk-secondary learn-more">Learn more <i class="fa fa-angle-right"></i></a></p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="featured-box featured-box-tertiary featured-box-effect-1 mt-0 mt-lg-5">
					<div class="box-content">
						<i class="icon-featured fa fa-trophy"></i>
						<h4 class="text-uppercase">Winner</h4>
						<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus.</p>
						<p><a href="/" class="lnk-tertiary learn-more">Learn more <i class="fa fa-angle-right"></i></a></p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="featured-box featured-box-quaternary featured-box-effect-1 mt-0 mt-lg-5">
					<div class="box-content">
						<i class="icon-featured fa fa-cogs"></i>
						<h4 class="text-uppercase">Customizable</h4>
						<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus. </p>
						<p><a href="/" class="lnk-quaternary learn-more">Learn more <i class="fa fa-angle-right"></i></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<hr>

	<div class="row pt-4">
		<div class="col-lg-8">
			<h2>Our <strong>Features</strong></h2>
			<div class="row">
				<div class="col-sm-6">
					<div class="feature-box">
						<div class="feature-box-icon">
							<i class="fa fa-group"></i>
						</div>
						<div class="feature-box-info">
							<h4 class="heading-primary mb-0">Customer Support</h4>
							<p class="mb-4">Lorem ipsum dolor sit amet, consectetur.</p>
						</div>
					</div>
					<div class="feature-box">
						<div class="feature-box-icon">
							<i class="fa fa-file"></i>
						</div>
						<div class="feature-box-info">
							<h4 class="heading-primary mb-0">HTML5 / CSS3 / JS</h4>
							<p class="mb-4">Lorem ipsum dolor sit amet,.</p>
						</div>
					</div>
					<div class="feature-box">
						<div class="feature-box-icon">
							<i class="fa fa-google-plus"></i>
						</div>
						<div class="feature-box-info">
							<h4 class="heading-primary mb-0">500+ Google Fonts</h4>
							<p class="mb-4">Lorem ipsum dolor sit amet, consectetur.</p>
						</div>
					</div>
					<div class="feature-box">
						<div class="feature-box-icon">
							<i class="fa fa-adjust"></i>
						</div>
						<div class="feature-box-info">
							<h4 class="heading-primary mb-0">Colors</h4>
							<p class="mb-4">Lorem ipsum dolor sit amet, consectetur.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="feature-box">
						<div class="feature-box-icon">
							<i class="fa fa-film"></i>
						</div>
						<div class="feature-box-info">
							<h4 class="heading-primary mb-0">Sliders</h4>
							<p class="mb-4">Lorem ipsum dolor sit amet, consectetur.</p>
						</div>
					</div>
					<div class="feature-box">
						<div class="feature-box-icon">
							<i class="fa fa-user"></i>
						</div>
						<div class="feature-box-info">
							<h4 class="heading-primary mb-0">Icons</h4>
							<p class="mb-4">Lorem ipsum dolor sit amet, consectetur.</p>
						</div>
					</div>
					<div class="feature-box">
						<div class="feature-box-icon">
							<i class="fa fa-bars"></i>
						</div>
						<div class="feature-box-info">
							<h4 class="heading-primary mb-0">Buttons</h4>
							<p class="mb-4">Lorem ipsum dolor sit, consectetur.</p>
						</div>
					</div>
					<div class="feature-box">
						<div class="feature-box-icon">
							<i class="fa fa-desktop"></i>
						</div>
						<div class="feature-box-info">
							<h4 class="heading-primary mb-0">Lightbox</h4>
							<p class="mb-4">Lorem sit amet, consectetur.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<h2>and more...</h2>

			<div class="accordion" id="accordion">
				<div class="card card-default">
					<div class="card-header">
						<h4 class="card-title m-0">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
								<i class="fa fa-usd"></i>
								Pricing Tables
							</a>
						</h4>
					</div>
					<div id="collapseOne" class="collapse show">
						<div class="card-body">
							Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor.
						</div>
					</div>
				</div>
				<div class="card card-default">
					<div class="card-header">
						<h4 class="card-title m-0">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
								<i class="fa fa-comment"></i>
								Contact Forms
							</a>
						</h4>
					</div>
					<div id="collapseTwo" class="collapse">
						<div class="card-body">
							Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.
						</div>
					</div>
				</div>
				<div class="card card-default">
					<div class="card-header">
						<h4 class="card-title m-0">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
								<i class="fa fa-laptop"></i>
								Portfolio Pages
							</a>
						</h4>
					</div>
					<div id="collapseThree" class="collapse">
						<div class="card-body">
							Donec tellus massa, tristique sit amet condimentum vel, facilisis quis sapien.
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<hr class="tall">

	<div class="row justify-content-around mb-5">
		<div class="col-sm-7">
			<h2>Premium <strong>Features</strong></h2>
			<p class="lead">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci.
			</p>
			<p class="mt-4">
				 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. Sed in nunc nec ligula consectetur mollis in vel justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent scelerisque volutpat turpis, eu hendrerit enim scel.
			</p>
		</div>
		<div class="col-sm-4 mt-4">
			<img class="img-fluid mt-5" src="{{ asset('img/device.png') }}" alt="">
		</div>
	</div>

</div>

</div>