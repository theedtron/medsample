<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('../assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('../assets/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Med Africa</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/icon?family=Material+Icons')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700')}}" />
    <link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css')}}" />

    <!-- CSS Files -->
    <link href="{{asset('../assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('../assets/css/material-kit.css')}}" rel="stylesheet"/>

</head>

<body class="landing-page">
<nav class="navbar navbar-transparent navbar-absolute">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">MedAfrica</a>
        </div>

        <div class="collapse navbar-collapse" id="navigation-example">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#services">
                        Services
                    </a>
                </li>
                <li>
                    <a href="#fitness">
                        <i class="fa fa-bicycle"></i> Fitness
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com" target="_blank" class="btn btn-simple btn-white btn-just-icon">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com" target="_blank" class="btn btn-simple btn-white btn-just-icon">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com" target="_blank" class="btn btn-simple btn-white btn-just-icon">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="wrapper">
    <div class="header header-filter" style="background-image: url({{asset('../assets/img/health.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="brand">
                        <h1>Med Africa</h1>
                        <h3>A Badass Health And Fitness App.</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main main-raised">
        <div class="container">
            <div class="section text-center section-landing" id="services">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="title">Stay Healthy And Informed</h2>
                        <h5 class="description">MedAfrica is your direct access to health information and services. With this app you can search, filter and view health information and services near you even when offline as well as connect with doctors on the go. Other services include Hospitals, Diagnosis, Symptoms, Nutrition, Drugs, First Aid, Insurance and Fitness. Med Africa personalizes your health services by frequency of use.</h5>
                    </div>
                </div>

                <div class="features">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-info">
                                    <i class="fa fa-user-md"></i>
                                </div>
                                <h4 class="info-title">Doctors</h4>
                                <p>Search for doctors within your area.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-danger">
                                    <i class="fa fa-male"></i>
                                </div>
                                <h4 class="info-title">Diagnosis</h4>
                                <p>Diagnose yourself using our vast database of various symptoms.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-warning">
                                    <i class="fa fa-plus-circle"></i>
                                </div>
                                <h4 class="info-title">Drugs</h4>
                                <p>Search for drugs and their availability in your area.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-primary">
                                    <i class="fa fa-medkit"></i>
                                </div>
                                <h4 class="info-title">First Aid</h4>
                                <p>Learn how to give first aid lise CPR, recovery position and a lot more.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-default">
                                    <i class="fa fa-lightbulb-o"></i>
                                </div>
                                <h4 class="info-title">Tips</h4>
                                <p>Get frequent tips on how to stay health and keep your body fit.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-success">
                                    <i class="fa fa-apple"></i>
                                </div>
                                <h4 class="info-title">Nutrition</h4>
                                <p>Learn about dieting and what best suites you for a healthy life.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section text-center" id="fitness">
                <h2 class="title">Fitness</h2>

                <div class="team">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="team-player">
                                <img src="{{asset('../assets/img/walking.png')}}" alt="Thumbnail Image" class="img-raised img-circle">
                                <h4 class="title">Walk <br />
                                    <small class="text-muted">Monitor your walks with the app to get real time data</small>
                                </h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="team-player">
                                <img src="{{asset('../assets/img/run-girl.png')}}" alt="Thumbnail Image" class="img-raised img-circle">
                                <h4 class="title">Run<br />
                                    <small class="text-muted">Make the most of your runs by monitoring the amount of fat you're burning</small>
                                </h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="team-player">
                                <img src="{{asset('../assets/img/bike.png')}}" alt="Thumbnail Image" class="img-raised img-circle">
                                <h4 class="title">Bike<br />
                                    <small class="text-muted">Monitor your calorie burning sessions as you enjoy your ride</small>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="section landing-section">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="text-center title">Download The App</h2>
                        <h4 class="text-center description">Click links below to download the app.</h4>
                        <div class="team">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="team-player">
                                    <img src="{{asset('../assets/img/google-play-badge.png')}}" alt="Thumbnail Image">
                                    <h4 class="title"><a href="{{url('https://play.google.com/store/apps/details?id=com.shimba.android.med')}}" target="_blank">Download For Android</a> <br />
                                    </h4>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="team-player">
                                    <img src="{{asset('../assets/img/app-store-badge.png')}}" alt="Thumbnail Image">
                                    <h4 class="title">Download For Apple<br />
                                    </h4>
                                </div>
                            </div>
                        </div>
                        </div>
                        {{--<form class="contact-form">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-md-6">--}}
                                    {{--<div class="form-group label-floating">--}}
                                        {{--<label class="control-label">Your Name</label>--}}
                                        {{--<input type="email" class="form-control">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-6">--}}
                                    {{--<div class="form-group label-floating">--}}
                                        {{--<label class="control-label">Your Email</label>--}}
                                        {{--<input type="email" class="form-control">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group label-floating">--}}
                                {{--<label class="control-label">Your Messge</label>--}}
                                {{--<textarea class="form-control" rows="4"></textarea>--}}
                            {{--</div>--}}

                            {{--<div class="row">--}}
                                {{--<div class="col-md-4 col-md-offset-4 text-center">--}}
                                    {{--<button class="btn btn-primary btn-raised">--}}
                                        {{--Send Message--}}
                                    {{--</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    </div>
                </div>

            </div>
        </div>

    </div>

    <footer class="footer">
        <div class="container">

            <div class="copyright pull-right">
                &copy; {{\Carbon\Carbon::now()->year}}
            </div>
        </div>
    </footer>

</div>
</body>

<!--   Core JS Files   -->
<script src="{{asset('../assets/js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('../assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('../assets/js/material.min.js')}}"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{asset('../assets/js/nouislider.min.js')}}" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="{{asset('../assets/js/bootstrap-datepicker.js')}}" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="{{asset('../assets/js/material-kit.js')}}" type="text/javascript"></script>

</html>
