<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Happy Employee</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon-32x32.png') }}" sizes="32x32" />
    <!-- site css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/site.min.css') }}">
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src="{{ asset('js/html5shiv.js') }}"></script>
    <script src="{{ asset('js/respond.min.js') }}"></script>
    <![endif]-->
</head>
<body>


<!--nav-->
<nav role="navigation" class="navbar navbar-custom">

    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button data-target="#bs-content-row-navbar-collapse-5" data-toggle="collapse" class="navbar-toggle" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/" class="navbar-brand">Happy Employee</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div id="bs-content-row-navbar-collapse-5" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right" style="height: 70px">
                <li class="active"><a href="getting-started.html">Getting Started</a></li>
                <li class="active"><a href="index.html">Documentation</a></li>
                <!-- <li class="disabled"><a href="#">Link</a></li> -->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <h5 style="margin: 0">
                            <img class="img-circle" src="https://pbs.twimg.com/profile_images/352878396/butters-avatar-sq-transp.png" style="height: 40px; width: auto">&nbsp;&nbsp;
                            {{ Auth::user()->name }} {{  Auth::user()->surname }}<b class="caret"></b>
                        </h5>
                    </a>
                    <ul role="menu" class="dropdown-menu">
                        <li class="dropdown-header">Setting</li>
                        <li><a href="{{ route('profile.show', ['id' => Auth::user()->id]) }}">Профиль</a></li>
                        <li class="divider"></li>
                        <li class="active"><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li class="disabled">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Выйти
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!--header-->
<div class="container-fluid">
    <!--documents-->
    <div class="row row-offcanvas row-offcanvas-left">
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" role="navigation">
            <ul class="list-group panel">
                <li class="list-group-item"><i class="glyphicon glyphicon-align-justify"></i> <b>SIDE PANEL</b></li>
                <li class="list-group-item"><input type="text" class="form-control search-query" placeholder="Search Something"></li>
                <li class="list-group-item"><a href="/"><i class="glyphicon glyphicon-home"></i>Главная </a></li>
                @if(Auth::user()->role == 17)
                <li class="list-group-item"><a href="{{ route('profile.new') }}"><i class="fa fa-male"></i>Новые сотрудники&nbsp;&nbsp;<span class="badge">2</span> </a></li>
                @endif
                <li class="list-group-item"><a href="{{ route('profile.index') }}"><i class="fa fa-group"></i>Сотрудники компании </a></li>
                <li class="list-group-item"><a href="list.html"><i class="glyphicon glyphicon-th-list"></i>Tables and List </a></li>
                <li class="list-group-item"><a href="forms.html"><i class="glyphicon glyphicon-list-alt"></i>Forms</a></li>
                <li class="list-group-item"><a href="alerts.html"><i class="glyphicon glyphicon-bell"></i>Alerts</a></li>
                <li class="list-group-item"><a href="timeline.html" ><i class="glyphicon glyphicon-indent-left"></i>Timeline</a></li>
                <li class="list-group-item"><a href="calendars.html" ><i class="glyphicon glyphicon-calendar"></i>Calendars</a></li>
                <li class="list-group-item"><a href="typography.html" ><i class="glyphicon glyphicon-font"></i>Typography</a></li>
                <li class="list-group-item"><a href="footers.html" ><i class="glyphicon glyphicon-minus"></i>Footers</a></li>
                <li class="list-group-item"><a href="panels.html" ><i class="glyphicon glyphicon-list-alt"></i>Panels</a></li>
                <li class="list-group-item"><a href="navs.html" ><i class="glyphicon glyphicon-th-list"></i>Navs</a></li>
                <li class="list-group-item"><a href="colors.html" ><i class="glyphicon glyphicon-tint"></i>Colors</a></li>
                <li class="list-group-item"><a href="flex.html" ><i class="glyphicon glyphicon-th"></i>Flex</a></li>
                <li class="list-group-item"><a href="login.html" ><i class="glyphicon glyphicon-lock"></i>Login</a></li>
                <li>
                    <a href="#demo3" class="list-group-item " data-toggle="collapse">Item 3  <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <div class="collapse" id="demo3">
                        <a href="#SubMenu1" class="list-group-item" data-toggle="collapse">Subitem 1  <span class="glyphicon glyphicon-chevron-right"></span></a>
                        <div class="collapse list-group-submenu" id="SubMenu1">
                            <a href="#" class="list-group-item">Subitem 1 a</a>
                            <a href="#" class="list-group-item">Subitem 2 b</a>
                            <a href="#SubSubMenu1" class="list-group-item" data-toggle="collapse">Subitem 3 c <span class="glyphicon glyphicon-chevron-right"></span></a>
                            <div class="collapse list-group-submenu list-group-submenu-1" id="SubSubMenu1">
                                <a href="#" class="list-group-item">Sub sub item 1</a>
                                <a href="#" class="list-group-item">Sub sub item 2</a>
                            </div>
                            <a href="#" class="list-group-item">Subitem 4 d</a>
                        </div>
                        <a href="javascript:;" class="list-group-item">Subitem 2</a>
                        <a href="javascript:;" class="list-group-item">Subitem 3</a>
                    </div>
                </li>
                <li>
                    <a href="#demo4" class="list-group-item " data-toggle="collapse">Item 4  <span class="glyphicon glyphicon-chevron-right"></span></a>
                <div class="collapse" id="demo4">
                    <a href="" class="list-group-item">Subitem 1</a>
                    <a href="" class="list-group-item">Subitem 2</a>
                    <a href="" class="list-group-item">Subitem 3</a>
                </div>
                </li>
            </ul>
        </div>
        <div class="col-xs-12 col-sm-9 content">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: white">
                    <h4 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> {{ (isset($panelTitle) ? $panelTitle : null)  }}</h4>
                </div>

                @yield('content')

            </div>
        </div><!-- content -->
    </div>
</div>
<!--footer-->
<div class="row">
    <div class="col-md-12">
        <div class="footer">
            <div class="container">
                <div class="clearfix">
                    <div class="footer-logo"><a href="#">Bootflat-Admin</a></div>
                    <dl class="footer-nav">
                        <dt class="nav-title">PORTFOLIO</dt>
                        <dd class="nav-item"><a href="#">Web Design</a></dd>
                        <dd class="nav-item"><a href="#">Branding &amp; Identity</a></dd>
                        <dd class="nav-item"><a href="#">Mobile Design</a></dd>
                        <dd class="nav-item"><a href="#">Print</a></dd>
                        <dd class="nav-item"><a href="#">User Interface</a></dd>
                    </dl>
                    <dl class="footer-nav">
                        <dt class="nav-title">ABOUT</dt>
                        <dd class="nav-item"><a href="#">The Company</a></dd>
                        <dd class="nav-item"><a href="#">History</a></dd>
                        <dd class="nav-item"><a href="#">Vision</a></dd>
                    </dl>
                    <dl class="footer-nav">
                        <dt class="nav-title">GALLERY</dt>
                        <dd class="nav-item"><a href="#">Flickr</a></dd>
                        <dd class="nav-item"><a href="#">Picasa</a></dd>
                        <dd class="nav-item"><a href="#">iStockPhoto</a></dd>
                        <dd class="nav-item"><a href="#">PhotoDune</a></dd>
                    </dl>
                    <dl class="footer-nav">
                        <dt class="nav-title">CONTACT</dt>
                        <dd class="nav-item"><a href="#">Basic Info</a></dd>
                        <dd class="nav-item"><a href="#">Map</a></dd>
                        <dd class="nav-item"><a href="#">Conctact Form</a></dd>
                    </dl>
                </div>
                <div class="footer-copyright text-center">Copyright &copy; 2017 Happy Employee.All rights reserved.</div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript" src="{{ asset('js/site.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('tinymce/tinymce.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/hemp.js') }}"></script>

</body>

</html>