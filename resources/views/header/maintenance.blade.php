<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 57, 'stickySetTop': '-55px', 'stickyChangeLogo': true}">
    <div class="header-body">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column justify-content-end">
                    <div class="header-row pt-3">
                        <nav class="header-nav-top">
                            <ul class="nav nav-pills">                                
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#" role="button" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="img/blank.gif" class="flag flag-{{ app()->getLocale() }}" alt="@lang('menu.language')" /> @lang('menu.language')
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownLanguage">
                                        @foreach (LaravelLocalization::getSupportedLocales() as $language=> $properties)
                                            <a class="dropdown-item" hreflang="{{$language}}" href="{{ LaravelLocalization::getLocalizedURL($language, null, [], true) }}">
                                                <img src="img/blank.gif" class="flag flag-{{$language}}" alt="{{ $properties['native'] }}" />
                                                {{ $properties['native'] }}
                                            </a>     
                                        @endforeach                                                    
                                    </div>
                                </li>                                            
                            </ul>
                        </nav>
                    </div>                                
                </div>
            </div>
        </div>
    </div>
</header>