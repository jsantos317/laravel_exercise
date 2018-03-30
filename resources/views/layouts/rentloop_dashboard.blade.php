<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!--end::Web font -->
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/metronic.css') }}" rel="stylesheet">
</head>
<!-- end::Body -->
<body class="m-page--wide m-header--fixed m-header--fixed-mobile m-footer--push m-aside--offcanvas-default"  >
<!-- begin:: Page -->
<div id="app" class="m-grid m-grid--hor m-grid--root m-page">
    <!-- begin::Header -->
    <header class="m-grid__item		m-header "  data-minimize="minimize" data-minimize-offset="200" data-minimize-mobile-offset="200" >
        <div class="m-header__top">
            <div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
                <div class="m-stack m-stack--ver m-stack--desktop">
                    <!-- begin::Brand -->
                    <div class="m-stack__item m-brand">
                        <div class="m-stack m-stack--ver m-stack--general m-stack--inline">
                            <div class="m-stack__item m-stack__item--middle m-brand__logo">
                                <a href="index.html" class="m-brand__logo-wrapper">
                                    <img alt="" src="{{ asset('images/logo.png') }}"/>
                                </a>
                            </div>
                            <div class="m-stack__item m-stack__item--middle m-brand__tools">
                                <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-left m-dropdown--align-push" data-dropdown-toggle="click" aria-expanded="true">
                                    <a href="#" class="btn btn-outline-metal m-btn  m-btn--icon m-btn--pill">
												<span>
													Dashboard
												</span>
                                    </a>
                                </div>
                                <!-- begin::Responsive Header Menu Toggler-->
                                <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                                    <span></span>
                                </a>
                                <!-- end::Responsive Header Menu Toggler-->
                                <!-- begin::Topbar Toggler-->
                                <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                                    <i class="flaticon-more"></i>
                                </a>
                                <!--end::Topbar Toggler-->
                            </div>
                        </div>
                    </div>
                    <!-- end::Brand -->
                    <!-- begin::Topbar -->
                    <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
                        <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
                            <div class="m-stack__item m-topbar__nav-wrapper">
                                <ul class="m-topbar__nav m-nav m-nav--inline">
                                    <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" data-dropdown-toggle="click">
                                        <a href="#" class="m-nav__link m-dropdown__toggle">
                                            <span class="m-topbar__welcome">
														Hello,&nbsp;
													</span>
                                            <span class="m-topbar__username">
														{{ Auth::user()->name }}
													</span>
                                        </a>
                                        <div class="m-dropdown__wrapper">
                                            <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                            <div class="m-dropdown__inner">
                                                <div class="m-dropdown__header m--align-center" style="background: url('images/user_profile_bg.jpg'); background-size: cover;">
                                                    <div class="m-card-user m-card-user--skin-dark">
                                                        <div class="m-card-user__details">
																	<span class="m-card-user__name m--font-weight-500">
																		{{ Auth::user()->name }}
																	</span>
                                                            <a href="" class="m-card-user__email m--font-weight-300 m-link">
                                                                {{ Auth::user()->email }}
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="m-dropdown__body">
                                                    <div class="m-dropdown__content">
                                                        <ul class="m-nav m-nav--skin-light">
                                                            <li class="m-nav__separator m-nav__separator--fit"></li>
                                                            <li class="m-nav__item">
                                                                <a href="{{ route('logout') }}" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder"
                                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                                    Logout
                                                                </a>

                                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                    {{ csrf_field() }}
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end::Topbar -->
                </div>
            </div>
        </div>
        <div class="m-header__bottom">
            <div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
                <div class="m-stack m-stack--ver m-stack--desktop">
                    <!-- begin::Horizontal Menu -->
                    <div class="m-stack__item m-stack__item--middle m-stack__item--fluid">
                        <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-light " id="m_aside_header_menu_mobile_close_btn">
                            <i class="la la-close"></i>
                        </button>
                        <div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-dark m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-light m-aside-header-menu-mobile--submenu-skin-light "  >
                            <ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
                                <li class="m-menu__item  m-menu__item--active "  aria-haspopup="true">
                                    <a  href="index.html" class="m-menu__link ">
                                        <span class="m-menu__item-here"></span>
                                        <span class="m-menu__link-text">
													Dashboard
												</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end::Horizontal Menu -->
                </div>
            </div>
        </div>
    </header>
    <!-- end::Header -->
    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop 	m-container m-container--responsive m-container--xxl m-page__container m-body">
        <div class="m-grid__item m-grid__item--fluid m-wrapper">
            @yield('content')
        </div>
        <!--
			</div>
			-->
    </div>
    <!-- end::Body -->
</div>
<!-- end:: Page -->
<!-- begin::Scroll Top -->
<div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500" data-scroll-speed="300">
    <i class="la la-arrow-up"></i>
</div>
<!-- end::Scroll Top -->			<!-- begin::Quick Nav -->
</body>
<!-- end::Body -->
<!-- Scripts -->
<script src="{{ asset('js/metronic.js') }}"></script>
</body>
</html>
