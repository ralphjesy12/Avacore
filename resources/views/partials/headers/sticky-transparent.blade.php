<div id="header" class="sticky transparent header-md clearfix">
    <header id="topNav">
        <div class="container">

            <!-- Mobile Menu Button -->
            <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Logo -->
            <a class="logo pull-left scrollTo" href="#top">
                <img src="{{ asset('theme/assets/images/logo_light.png') }}" alt="" />
                <img src="{{ asset('theme/assets/images/logo_dark.png') }}" alt="" />
            </a>

            <!--
            Top Nav

            AVAILABLE CLASSES:
            submenu-dark = dark sub menu -->
            <div class="navbar-collapse pull-right nav-main-collapse collapse">
                <nav class="nav-main">

                    <!--
                    .nav-onepage
                    Required for onepage navigation links

                    Add .external for an external link! -->
                    <ul id="topMain" class="nav nav-pills nav-main nav-onepage">
                        <li class="active"><!-- HOME -->
                            <a href="#slider">
                                HOME
                            </a>
                        </li>
                        <li class="dropdown"><!-- ABOUT -->
                            <a class="dropdown-toggle" href="#">
                                ABOUT
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#about">ABOUT SMARTY</a></li>
                                <li><a href="#skills">OUR SKILLS</a></li>
                            </ul>
                        </li>
                        <li><!-- WORK -->
                            <a href="#work">
                                WORK
                            </a>
                        </li>
                        <li><!-- TEAM -->
                            <a href="#team">
                                TEAM
                            </a>
                        </li>
                        <li><!-- SERVICES -->
                            <a href="#services">
                                SERVICES
                            </a>
                        </li>
                        <li><!-- PRICING -->
                            <a href="#pricing">
                                PRICING
                            </a>
                        </li>
                        <li><!-- TESTIMONIALS -->
                            <a href="#testimonials">
                                TESTIMONIALS
                            </a>
                        </li>
                        <li><!-- BLOG -->
                            <a class="external" href="blog-default-aside-left.html">
                                BLOG
                            </a>
                        </li>
                        <li><!-- CONTACT -->
                            <a href="#contact">
                                CONTACT
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

</div>
