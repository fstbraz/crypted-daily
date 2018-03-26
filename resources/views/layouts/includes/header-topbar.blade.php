<header class="topbar">
    <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('home.index') }}">
                <b>
                    <img src="{{ asset('asset/images/logo-icon.png') }}" alt="homepage" class="light-logo"/>
                </b>
                <span>
                     <img src="{{ asset('asset/images/logo-text.png') }}" class="light-logo" alt="homepage"/>
                </span>
            </a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->

        <div class="navbar-collapse">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav mr-auto mt-md-0 ">
                <!-- This is  -->
                <li class="nav-item"><a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark"
                                        href="javascript:void(0)"><i class="ti-menu"></i></a></li>
                <li class="nav-item"><a
                            class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark"
                            href="javascript:void(0)"><i class="icon-arrow-left-circle"></i></a></li>
            </ul>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            <ul class="navbar-nav my-lg-0">
                <li class="nav-item hidden-sm-down">
                    {!! Form::open(['route' => 'home.search', 'method' => 'POST', 'class' => 'app-search']) !!}
                    <input type="text" id="search_term" name="search_term" class="form-control"
                           placeholder="Search coins...">
                    <a class="srh-btn"><i class="ti-search"></i></a>
                    {!! Form::close() !!}
                </li>
            </ul>
        </div>
    </nav>
</header>