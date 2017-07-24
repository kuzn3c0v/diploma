<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Happy Employee</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon-32x32.png') }}" sizes="32x32" />
    <!-- site css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/site.min.css') }}">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src="{{ asset('js/html5shiv.js') }}"></script>
    <script src="{{ asset('js/respond.min.js') }}"></script>
    <![endif]-->
    <style>
        body {
            padding-top: 40px;
            background-color: #303641;
            color: #C1C3C6
        }
    </style>
</head>

<body>

@yield('content')

<div class="clearfix"></div>

<div class="row">
    <div class="col-md-12">
        <div class="footer">
            <div class="container">
                <div class="clearfix">
                    <div class="footer-logo"><h4>Kuzn3c0v Alexander</h4></div>
                    <dl class="footer-nav">
                        <dt class="nav-item"><a href="mailto:kuzn3c0v@gmail.com"><i class="fa fa-envelope"></i>&nbsp;&nbsp;kuzn3c0v@gmail.com</a></dt>
                    </dl>
                    <dl class="footer-nav">
                        <dt class="nav-item"><i class="fa fa-mobile">&nbsp;&nbsp;(066) 678-85-38</i></dt>

                    </dl>
                    <dl class="footer-nav">
                        <dt class="nav-item"><a href="skype:kuzn3c0v?chat"><i class="fa fa-skype"></i>&nbsp;&nbsp;kuzn3c0v</a></dt>
                    </dl>
                    <dl class="footer-nav">
                        <dt class="nav-item"><a href="https://github.com/kuzn3c0v"><i class="fa fa-github"></i>&nbsp;&nbsp;GitHub</a></dt>
                    </dl>
                </div>
                <div class="footer-copyright text-center">Copyright &copy; 2017 Happy Employee.All rights reserved.</div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript" src="{{ asset('js/site.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/hemp.js') }}"></script>

</body>

</html>