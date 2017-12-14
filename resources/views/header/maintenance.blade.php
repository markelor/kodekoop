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
                                        @foreach (Config::get('app.languages') as $language)
                                            @if ($language != App::getLocale())
                                            <a class="dropdown-item" href="{{ route('langroute', $language) }}">
                                                <img src="img/blank.gif" class="flag flag-{{$language}}" alt="@lang('language.{{$language}}')" />
                                                @lang('language.{{$language}}')
                                            </a>
                                            @endif
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