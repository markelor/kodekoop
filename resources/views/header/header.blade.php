<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 57, 'stickySetTop': '-55px', 'stickyChangeLogo': true}">
    <div class="header-body">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{ url(LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'), 'routes.home') )}}">
                                <img alt="Kodekoop" width="220" height="54" data-sticky-width="165" data-sticky-height="40" data-sticky-top="33" src="{{ asset('img/logo.png') }}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row pt-3">
                        <nav class="header-nav-top">
                            <ul class="nav nav-pills">
                                <li class="nav-item d-none d-lg-block">
                                    <a class="nav-link" href="{{ url(LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'), 'routes.contact') )}}"><i class="fa fa-angle-right"></i> @lang('menu.contact')</a>
                                </li>
                                <li class="nav-item d-none d-lg-block">
                                    <span class="ws-nowrap">kontaktua@kodekoop.eus</span>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" role="button" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('img/blank.gif') }}" class="flag flag-{{ app()->getLocale() }}" alt="@lang('menu.language')" />
                                        @lang('menu.language')
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownLanguage">
                                      @foreach (LaravelLocalization::getSupportedLocales() as $language=> $properties)
                                          <a class="dropdown-item" hreflang="{{$language}}" href="{{ LaravelLocalization::getLocalizedURL($language, null, [], true) }}">
                                              <img src="{{ asset('img/blank.gif') }}" class="flag flag-{{$language}}" alt="{{ $properties['native'] }}" />
                                              {{ $properties['native'] }}
                                          </a>     
                                      @endforeach                                                    
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-row">
                        <div class="header-nav">
                            <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">                          
                                        <li class="">
                                            <a class="nav-link {{ Request::is(Config::get('app.locale')) ? 'active' : '' }}" href="{{ url('/')}}">
                                                @lang('menu.home')
                                            </a>
                                        </li>
                                        {{--<li class="">
                                            <a class="nav-link {{(url()->current() == LaravelLocalization::localizeURL(trans('routes.about-us'))) ? "active" : "" }}" href="{{ url(LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'), 'routes.about-us') )}}">
                                                @lang('menu.about-us')

                                            </a>
                                        </li>
                                        <li class="">
                                            <a class="nav-link {{(url()->current() == LaravelLocalization::localizeURL(trans('routes.services'))) ? "active" : "" }}" href="{{ url(LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'), 'routes.services') )}}">
                                                @lang('menu.services')

                                            </a>
                                        </li>

                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle {{(url()->current() == LaravelLocalization::localizeURL(trans('routes.web-pages'))) || (url()->current() == LaravelLocalization::localizeURL(trans('routes.maintenance'))) ? "active" : "" }}" href="#">
                                                @lang('menu.services')
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item {{(url()->current() == LaravelLocalization::localizeURL(trans('routes.web-pages'))) ? "active" : "" }}" href="{{ url(LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'), 'routes.web-pages') )}}">@lang('menu.web-pages')</a></li>
                                                <li><a class="dropdown-item {{(url()->current() == LaravelLocalization::localizeURL(trans('routes.maintenance'))) ? "active" : "" }}" href="{{ url(LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'), 'routes.maintenance') )}}">@lang('menu.maintenance')</a></li>
                                            </ul>
                                        </li>
                                        
                                        <li class="">
                                            <a class="nav-link {{(url()->current() == LaravelLocalization::localizeURL(trans('routes.projects'))) ? "active" : "" }}" href="{{ url(LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'), 'routes.projects') )}}">
                                                @lang('menu.projects')
                                            </a>
                                        </li>--}}
                                        <li class="">
                                            <a class="nav-link {{(url()->current() == LaravelLocalization::localizeURL(trans('routes.contact'))) ? "active" : "" }}" href="{{ url(LaravelLocalization::getURLFromRouteNameTranslated(Config::get('app.locale'), 'routes.contact') )}}">
                                                @lang('menu.contact')
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <ul class="header-social-icons social-icons d-none d-sm-block">
                                <li class="social-icons-facebook"><a href="http://www.facebook.com/kodekoop.eus/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li class="social-icons-twitter"><a href="http://www.twitter.com/kodekoop" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li class="social-icons-instagram"><a href="http://www.instagram.com/kodekoop/" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div role="main" class="main">