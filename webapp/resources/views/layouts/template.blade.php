<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('meta')
    <title>@yield('title')</title>
    <link rel="icon" href="/images/favicon.ico">

    <!--CSS Link-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

    <!--Font Link-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Sacramento&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&family=Montserrat&family=Sacramento&display=swap" rel="stylesheet">  
    
    <!-- Font Awesome  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <!-- Navigation -->
        <div class="row bg-white shadow fixed-top">
            <div id="header" class="col-md-10 mx-auto py-2">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-5">
                        @include('layouts.messages')
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a href="/" class="navbar-brand">
                        <img  src="/images/logo.png" alt="Logo" class="img-fluid w-50">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about-us">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Courses</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/it">Information Technology</a>
                                <a class="dropdown-item" href="/electrical#courses">Electrical/Telecomms Engineering</a>
                                <a class="dropdown-item" href="/civil#courses">Architecture/Civil Engineering</a>
                                <a class="dropdown-item" href="/mechanical#courses">Mechanical/Automotive Engineering</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact#contact">Contact Us</a>
                        </li>
                    </ul>
                    </div>
                </nav>
            </div>
        </div>
        @yield('container')
        <!--Contact-->
        <div class="row py-4">
            <div class="col-md-6 mx-auto">
                <!-- <h3>Let's Keep in Touch</h3> -->
                <p class="text-white">
                    Designed by <a class="text-white" href="https://teampiccolo.com">Team Piccolo</a><br>
                    Copyright &copy; 2021 AMEC CAD TRAINING<br> 
                    All rights reserved
                </p>
            </div>
        </div>
        <div class="row bg-white py-3">
            <div class="col-md-6 mx-auto">
                <a class="mx-1" href="https://m.facebook.com/ameccadng" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a>
                <a class="mx-1" href="https://twitter.com/ameccadng/" target="_blank"><i class="fab fa-twitter fa-2x"></i></a>
                <a class="mx-1" href="#" target="_blank"><i class="fab fa-whatsapp fa-2x"></i></a>
                <a class="mx-1" href="#" target="_blank"><i class="fab fa-linkedin fa-2x"></i></i></a>
            </div>
        </div>
    </div>
    <!--Script link-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>