<!DOCTYPE html>
<html lang="en">
<head>
    <title>M.Sameh - CV Resume</title>
    <meta charset="UTF-8">
    <meta name="description" content="Civic - CV Resume">
    <meta name="keywords" content="resume, civic, onepage, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->   
    <link href="img/favicon.ico" rel="shortcut icon"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,600,600i,700" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<div id="preloder">
        <div class="loader"></div>
    </div>
    
    <!-- Header section start -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="site-logo">
                        <h2><a href="#">MS Developments</a></h2>
                        <p>Enhance your online presence</p>
                    </div>
                </div>
                <div class="col-md-8 text-md-right header-buttons">
                    <a href="#" class="site-btn">Download CV</a>
                    @if(session()->has('username'))
                    <a href="{{ url('/logout') }}" class="site-btn">Logout</a>
                    @else
                    <a href="{{ url('admin-login') }}" class="site-btn">Mohamed Sameh?</a>
                    @endif
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    <!--====== Javascripts & Jquery ======-->
    <script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/circle-progress.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>