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
    @foreach (Lang::get('about-us.employees') as $employees => $employee)
        <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
          <span class="thumb-info thumb-info-hide-wrapper-bg">
            <span class="thumb-info-wrapper">
              <a href="#{{$employee['name']}}Modal" data-toggle="modal" data-target="#{{$employee['name']}}Modal">
                <img src="{{ asset('img/team/team-1.jpg') }}" class="img-fluid" alt="">
                <span class="thumb-info-title">
                  <span class="thumb-info-inner">{{$employee['name']}}</span>
                  <span class="thumb-info-type">{{$employee['profile']}}</span>
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
          <h2><strong>{{$employee['name']}}</strong> {{$employee['surname']}}</h2>
          <p>{{$employee['description']}}</p>
        </div> 
        <div class="modal fade" id="{{$employee['name']}}Modal" tabindex="-1" role="dialog" aria-labelledby="{{$employee['name']}}ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title" id="{{$employee['name']}}ModalLabel"><strong>{{$employee['name']}}</strong> {{$employee['surname']}}</h2>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="row">
                  <div class="col-lg-4">
                    <span class="thumb-info thumb-info-hide-wrapper-bg">
                      <span class="thumb-info-wrapper">
                        <img src="{{ asset('img/team/team-1.jpg') }}" class="img-fluid" alt="">
                        <span class="thumb-info-title">
                          <span class="thumb-info-inner">{{$employee['name']}} </span>
                          <span class="thumb-info-type">{{$employee['profile']}}</span>
                        </span>                        
                      </span>          
                    </span>
                  </div>
                  <div class="col-lg-8">      
                    <p>{{$employee['description']}}</p>
                    <ul class="list list-icons">
                      <li><i class="fa fa-check"></i> Fusce sit amet orci quis arcu vestibulum vestibulum sed ut felis.</li>
                      <li><i class="fa fa-check"></i> Phasellus in risus quis lectus iaculis vulputate id quis nisl.</li>
                      <li><i class="fa fa-check"></i> Iaculis vulputate id quis nisl.</li>
                    </ul>      
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <hr class="solid">
                  </div>
                </div>
                <div class="row mt-5">
                  <div class="col-lg-3">
                    <div class="circular-bar">
                      <div class="circular-bar-chart" data-percent="75" data-plugin-options="{'barColor': '#E36159'}">
                        <strong>HTML/CSS</strong>
                        <label><span class="percent">75</span>%</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="circular-bar">
                      <div class="circular-bar-chart" data-percent="85" data-plugin-options="{'barColor': '#0088CC', 'delay': 50}">
                        <strong>Design</strong>
                        <label><span class="percent">85</span>%</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="circular-bar">
                      <div class="circular-bar-chart" data-percent="60" data-plugin-options="{'barColor': '#2BAAB1', 'delay': 100}">
                        <strong>WordPress</strong>
                        <label><span class="percent">60</span>%</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="circular-bar">
                      <div class="circular-bar-chart" data-percent="95" data-plugin-options="{'barColor': '#353535', 'delay': 150}">
                        <strong>Photoshop</strong>
                        <label><span class="percent">95</span>%</label>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-light" data-dismiss="modal">@lang('translations.close')</button>
            </div>
          </div>
        </div>
      </div>
    @endforeach
    </div>
  </div>
</div>
