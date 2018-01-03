<div role="main" class="main">
  <section class="page-header">
    <div class="container">
      <div class="row">
        <div class="col">
          <ul class="breadcrumb">
            <li><a href="{{ url(LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'), 'routes.home') )}}">@lang('menu.home')</a></li>
            <li class="active">@lang('menu.about-us')</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="word-rotator-title mb-4">
          @lang('about-us.main-title') <strong class="inverted inverted-primary"> <span class="word-rotator" data-plugin-options="{'delay': 2000, 'animDelay': 300}"><span class="word-rotator-items"><span>@lang('about-us.main-title-rotate1')</span><span>@lang('about-us.main-title-rotate2')</span><span>@lang('about-us.main-title-rotate3')</span></span></span></strong>
        </h2>
        <p class="lead">
          @lang('about-us.main-body')
        </p>
        <hr class="tall">
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-lg-5">
        <h2>@lang('about-us.skill-title')</h2>
        <p>@lang('about-us.skill-body')</p>
      </div>
      <div class="col-lg-7">
        <div class="progress-bars mt-4">
          <div class="progress-label">
            <span>HTML/CSS</span>
          </div>
          <div class="progress mb-2">
            <div class="progress-bar progress-bar-primary" data-appear-progress-animation="100%">
              <span class="progress-bar-tooltip">100%</span>
            </div>
          </div>
          <div class="progress-label">
            <span>Design</span>
          </div>
          <div class="progress mb-2">
            <div class="progress-bar progress-bar-primary" data-appear-progress-animation="85%" data-appear-animation-delay="100">
              <span class="progress-bar-tooltip">85%</span>
            </div>
          </div>
          <div class="progress-label">
            <span>WordPress</span>
          </div>
          <div class="progress mb-2">
            <div class="progress-bar progress-bar-primary" data-appear-progress-animation="75%" data-appear-animation-delay="200">
              <span class="progress-bar-tooltip">75%</span>
            </div>
          </div>
          <div class="progress-label">
            <span>Photoshop</span>
          </div>
          <div class="progress mb-2">
            <div class="progress-bar progress-bar-primary" data-appear-progress-animation="85%" data-appear-animation-delay="300">
              <span class="progress-bar-tooltip">85%</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-5 mb-5">
      <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
        <span class="thumb-info thumb-info-hide-wrapper-bg">
          <span class="thumb-info-wrapper">
            <a href="about-me.html">
              <img src="{{ asset('img/team/team-1.jpg') }}" class="img-fluid" alt="">
              <span class="thumb-info-title">
                <span class="thumb-info-inner">@lang('about-us.employee1.name') @lang('about-us.employee1.surname')</span>
                <span class="thumb-info-type">@lang('about-us.employee1.profile')</span>
              </span>
            </a>
          </span>
            <span class="thumb-info-social-icons">
              <a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i><span>Facebook</span></a>
              <a href="http://www.twitter.com"><i class="fa fa-twitter"></i><span>Twitter</span></a>
              <a href="http://www.linkedin.com"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
            </span>
          
        </span>
      </div>
      <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
        <h2><strong>@lang('about-us.employee1.name')</strong></h2>
        <p>@lang('about-us.employee1.description')</p>
      </div> 
      <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
        <span class="thumb-info thumb-info-hide-wrapper-bg">
          <span class="thumb-info-wrapper">
            <a href="about-me.html">
              <img src="{{ asset('img/team/team-1.jpg') }}" class="img-fluid" alt="">
              <span class="thumb-info-title">
                <span class="thumb-info-inner">@lang('about-us.employee2.name') </span>
                <span class="thumb-info-type">@lang('about-us.employee2.profile')</span>
              </span>
            </a>
          </span>
            <span class="thumb-info-social-icons">
              <a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i><span>Facebook</span></a>
              <a href="http://www.twitter.com"><i class="fa fa-twitter"></i><span>Twitter</span></a>
              <a href="http://www.linkedin.com"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
            </span>
          
        </span>
      </div>
      <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
        <h2><strong>@lang('about-us.employee2.name')</strong> @lang('about-us.employee2.surname')</h2>
        <p>@lang('about-us.employee2.description')</p>
      </div>   
    </div>
  </div>
</div>
