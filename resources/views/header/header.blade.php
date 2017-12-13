<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 55, 'stickySetTop': '-55px', 'stickyChangeLogo': true}">
    <div class="header-body">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="index.html">
                                <img alt="Porto" width="111" height="54" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="img/logo.png">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row pt-3">
                        <nav class="header-nav-top">
                            <ul class="nav nav-pills">
                                <li class="nav-item d-none d-sm-block">
                                    <a class="nav-link" href="about-us.html"><i class="fa fa-angle-right"></i> About Us</a>
                                </li>
                                <li class="nav-item d-none d-sm-block">
                                    <a class="nav-link" href="contact-us.html"><i class="fa fa-angle-right"></i> Contact Us</a>
                                </li>
                                <li class="nav-item">
                                    <span class="ws-nowrap"><i class="fa fa-phone"></i> (123) 456-789</span>
                                </li>
                            </ul>
                        </nav>
                        <div class="header-search d-none d-md-block">
                            <form id="searchForm" action="page-search-results.html" method="get">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="q" id="q" placeholder="Search..." required>
                                    <span class="input-group-btn">
                                        <button class="btn btn-light" type="submit"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="header-row">
                        <div class="header-nav">
                            <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">                          
                                        <li class="">
                                            <a class="nav-link active" href="demos.html">
                                                @lang('menu.home')
                                            </a>
                                        </li>
                                        <li class="">
                                            <a class="nav-link" href="demos.html">
                                                @lang('menu.about-us')

                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="#">
                                                @lang('menu.services')
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="contact-us.html">@lang('menu.web-pages')</a></li>
                                                <li><a class="dropdown-item" href="contact-us-advanced.php">@lang('menu.mantaince')</a></li>
                                            </ul>
                                        </li>
                                        <li class="">
                                            <a class="nav-link" href="demos.html">
                                                @lang('menu.contact')
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <ul class="header-social-icons social-icons d-none d-sm-block">
                                <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
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