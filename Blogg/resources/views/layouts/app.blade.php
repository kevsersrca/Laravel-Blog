<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.6/slate/bootstrap.min.css">
    <style>

        @import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);
        body {
            padding-top: 15px;
            padding-left: 65px;
        }
        .container
        {
            padding: 5%;
        }
        .navbar-twitch {
            position: fixed;
            top: 0px;
            left: 0px;
            width: 50px;
            height: 100%;
            border-radius: 0px;
            border: 0px;
            z-index: 1030;
        }
        .navbar-twitch.open {
            width: 200px;
        }
        .navbar-twitch > .container {
            padding: 0px;
            width: 100%;
        }
        .navbar-twitch .navbar-header,
        .navbar-twitch .navbar-brand {
            float: none;
            display: block;
            width: 100%;
            margin: 0px;
        }
        .navbar-twitch .navbar-brand {
            height: 50px;
        }
        .navbar-twitch > .container .navbar-brand {
            padding: 0px;
            margin: 0px;
        }
        .navbar-twitch > .container .navbar-brand > .small-nav {
            display: block;
        }
        .navbar-twitch > .container .navbar-brand > .small-nav > span.logo,
        .navbar-twitch.open > .container .navbar-brand > .full-nav {
            display: block;
            font-weight: bold;
            padding: 15px 2px 15px 3px;
            font-size: 18pt;
        }
        .navbar-twitch.open > .container .navbar-brand {
            width: 100%;
            padding: 15px 15px 60px;
            text-align: center;
        }
        .navbar-twitch.navbar-inverse > .container .navbar-brand > .small-nav > span.logo {
            /*color: rgb(255, 255, 255);*/
        }
        .navbar-twitch .navbar-nav > li {
            float: none;
        }
        .navbar-twitch > .container .full-nav {
            display: none;
        }
        .navbar-twitch.open > .container .full-nav {
            display: block;
        }
        .navbar-twitch.open > .container .small-nav {
            display: none;
        }
        .navbar-twitch .navbar-collapse {
            padding: 0px;
        }
        .navbar-twitch .navbar-nav {
            float: none;
            margin: 0px;
        }
        .navbar-twitch .navbar-nav > li > a {
            padding: 0px;
        }
        .navbar-twitch .navbar-nav > li > a > span {
            display: block;
            font-size: 16pt;
            padding: 13px 15px 13px 12px;
        }
        .navbar-twitch .tooltip,
        .navbar-twitch .tooltip .tooltip-inner {
            max-width: auto;
            white-space:nowrap;
        }
        .navbar-twitch-toggle {
            position: inherit;
            top: 5px;

        }
        .navbar-twitch ~ .navbar-twitch-toggle > .nav-open {
            display: inline-block;
        }
        .navbar-twitch ~ .navbar-twitch-toggle > .nav-close {
            display: none;
        }
        .navbar-twitch.open ~ .navbar-twitch-toggle {
            left: 245px;
        }
        .navbar-twitch.open ~ .navbar-twitch-toggle > .nav-open {
            display: none;
        }
        .navbar-twitch.open ~ .navbar-twitch-toggle > .nav-close {
            display: inline-block;
        }


        .btn-purple,
        .btn-purple:hover,
        .btn-purple:focus,
        .btn-purple:Active {
            color: rgb(255, 255, 255);
            background-color: rgb(86, 61, 124);
            border-color: rgb(111, 84, 153);
        }
        .btn-purple:hover,
        .btn-purple:focus,
        .btn-purple:Active {
            background-color: rgb(111, 84, 153);
            border-color: rgb(86, 61, 124);
        }

        .navbar {
            background-image: none !important;
        }
        .navbar-purple {
            background-color: rgb(86, 61, 124);
            border-color: rgb(111, 84, 153);
        }
        .navbar-purple .navbar-brand,
        .navbar-purple .navbar-nav > li > a,
        .navbar-purple .navbar-brand:hover,
        .navbar-purple .navbar-nav > li > a:hover,
        .navbar-purple .navbar-brand:focus,
        .navbar-purple .navbar-nav > li > a:focus {
            color: rgb(205, 191, 227);;
            font-family: Comic Sans;
        }
        .navbar-purple .navbar-brand:hover,
        .navbar-purple .navbar-nav > li > a:hover,
        .navbar-purple .navbar-brand:focus,
        .navbar-purple .navbar-nav > li > a:focus,
        .navbar-purple .navbar-nav > .active > a,
        .navbar-purple .navbar-nav > .active > a:hover,
        .navbar-purple .navbar-nav > .active > a:focus {
            background-color: rgb(111, 84, 153);
            color: rgb(255, 255, 255);
        }
    </style>
    @yield("link")
    @yield("style")

</head>
<body>
<div class="container-fluid">
    <div class="navbar navbar-purple navbar-twitch" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <span class="small-nav"> <span class="logo"> <B> </span> </span>
                    <span class="full-nav"></span>
                </a>
            </div>
            <div class="">
                <ul class="nav navbar-nav">
                    @if(Auth::guest())
                    <li class="active">
                        <a href="{{ url('/') }}">
						<span class="small-nav" data-toggle="tooltip" data-placement="right" title="Home">
							<span class="glyphicon glyphicon-home"></span>
						</span>
                            <span class="full-nav"> Home </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/login') }}">
						<span class="small-nav" data-toggle="tooltip" data-placement="right" title="Login">
							<span class="fa fa-sign-in"></span>
						</span>
                            <span class="full-nav"> Login </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/register') }}">
						<span class="small-nav" data-toggle="tooltip" data-placement="right" title="Register">
							<span class="fa fa-sign-out"></span>
						</span>
                            <span class="full-nav">Register</span>
                        </a>
                    </li>
                    @else
                        <li class="active">
                            <a href="{{ url('/home') }}">
						<span class="small-nav" data-toggle="tooltip" data-placement="right" title="Home">
							<span class="glyphicon glyphicon-home"></span>
						</span>
                                <span class="full-nav"> Home </span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="{{url('/post')}}">
						<span class="small-nav" data-toggle="tooltip" data-placement="right" title="Post's">
							<span class=" glyphicon glyphicon-list-alt"></span>
						</span>
                                <span class="full-nav"> Post's </span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="{{url('/tag')}}">
						<span class="small-nav" data-toggle="tooltip" data-placement="right" title="Tag's">
							<span class=" glyphicon glyphicon-tags"></span>
						</span>
                                <span class="full-nav"> Tag's </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/logout') }}">
						<span class="small-nav" data-toggle="tooltip" data-placement="right" title="Lagout">
							<span class="fa fa-sign-out"></span>
						</span>
                                <span class="full-nav">Lagout</span>
                            </a>
                        </li>
                     @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
    <button type="button" class="btn btn-default btn-xs navbar-twitch-toggle pull-right">
        <span class="glyphicon glyphicon-chevron-right nav-open"></span>
        <span class="glyphicon glyphicon-chevron-left nav-close"></span>
    </button>

    <div class="container">
        @yield("content")
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('.navbar-nav [data-toggle="tooltip"]').tooltip();
        $('.navbar-twitch-toggle').on('click', function(event) {
            event.preventDefault();
            $('.navbar-twitch').toggleClass('open');
        });
    });
</script>
@yield("script")
</body>
</html>