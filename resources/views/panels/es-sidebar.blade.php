
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="../../../html/ltr/vertical-menu-template/index.html">
                        <div class="brand-log"></div>
                        <h2 class="brand-text mb-0">FGSHLB</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                <i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block primary" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item  {{ (request()->is('es')) ? 'active' : '' }}">
                <a href="/es">
                <i class="feather icon-home"></i>
                <span class="menu-title" data-i18n="Dashboard">Dashboard</span>
                <span class="badge badge badge-warning badge-pill float-right"></span>
                </a>
                </li>
               
                <!-- <li class=" nav-item"><a href="#"><i class="feather icon-book"></i><span class="menu-title" data-i18n="Starter kit">Compensation Plan</span></a>
                    <ul class="menu-content">
                        <li class="active"><a href="sk-layout-2-columns.html"><i></i><span class="menu-item" data-i18n="2 columns">Emerald Package</span></a>
                        </li>
                        <li><a href="sk-layout-fixed-navbar.html"><i></i><span class="menu-item" data-i18n="Fixed navbar">Sapphaire Package</span></a>
                        </li>
                        <li><a href="sk-layout-floating-navbar.html"><i></i><span class="menu-item" data-i18n="Floating navbar">Rubby Package</span></a>
                        </li>
                        <li><a href="sk-layout-fixed.html"><i></i><span class="menu-item" data-i18n="Fixed layout">Gold Package</span></a>
                        </li>
                        <li><a href="sk-layout-fixed.html"><i></i><span class="menu-item" data-i18n="Fixed layout">Diamond Package</span></a>
                        </li>
                    </ul>
                </li> -->
                <li class=" {{ (request()->is('es/applications')) ? 'active' : '' }} nav-item"><a href="{{route('es.applications')}}">
                <i class="feather icon-arrow-down"></i></i><span class="menu-title" data-i18n="Documentation">Applications</span></a>
                </li>

                <li class="{{ (request()->is('user/earnings/')) ? 'active' : '' }} nav-item"><a href="gs')}}">
                <i class="feather icon-arrow-down"></i></i><span class="menu-title" data-i18n="Documentation">Audit Trail</span></a>
                </li>

                <li class="{{ (request()->is('user/earnings/')) ? 'active' : '' }} nav-item"><a href="gs')}}">
                <i class="feather icon-arrow-down"></i></i><span class="menu-title" data-i18n="Documentation">Report</span></a>
                </li>
                
                <li class=" nav-item"><a href="'"><i class="feather icon-arrow-down"></i></i><span class="menu-title" data-i18n="Documentation">Notifications</span></a>
                </li>
               
               
               
                <li class=" nav-item {{ (request()->is('es/settings', 'es/settings/*')) ? 'active' : '' }}"><a href="{{route('es.settings')}}"><i class="feather icon-log-out"></i><span class="menu-title" data-i18n="Raise Support">Settings</span></a>
                </li>
            </ul>
        </div>
    </div>
<!-- END: Main Menu-->
