<body class="app sidebar-mini">
    <!--loader -->
    <div id="spinner">
        <img src="{{ asset('admin/assets/img/svgs/loader.svg') }}" alt="loader">
    </div>
    <!--app open-->
    <div id="app" class="page">
        <div class="main-wrapper">

            <!-- Header Start -->

            <!--nav open-->
            <nav class="navbar navbar-expand-lg main-navbar">
                <a class="header-brand" href="{{ route('dashboard') }}">
                    <img src="{{ asset('admin/assets/img/logo/logo.png') }}" class="header-brand-img main-logo"
                        alt="treal-Admin  logo">
                    <img src="{{ asset('admin/assets/img/logo/logo.png') }}" class="header-brand-img mobile-logo"
                        alt="treal-Admin  logo">

                </a>
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-2">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link toggle"><i
                                    class="fe fe-align-justify"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link d-md-none navsearch"><i
                                    class="fe fe-search"></i></a></li>
                    </ul>
                    
                </form>
                
            </nav>
            <!--nav closed-->
            <!--navbar mobile--->
            <div class="mb-1 responsive-navbar navbar-dark d-sm-none bg-white">
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                    <ul class="navbar-nav navbar-right">
                        <li class="dropdown header-fullscreen">
                            <a href="#" class="nav-link nav-link-lg full-screen-link" id="fullscreen-button">
                                <i class="fe fe-maximize"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!--End navbar mobile- -->
