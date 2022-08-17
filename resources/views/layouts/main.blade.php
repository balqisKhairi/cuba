<!doctype html>
<html class="no-js" lang="zxx">
    <head>
    <meta charset="utf-8">
        
         <title>e-JaSDs</title>
        
         
         <!doctype html>
    <html class="no-js" lang="zxx">
    <head>
    <link rel="manifest" href="site.webmanifest">
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin2/assets/img/favicon.ico') }}">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="manifest" href="site.webmanifest">
        

		<!-- CSS here -->
            <link rel="stylesheet" href="{{ asset('admin2/assets/css/bootstrap.min.css') }}">
            <link rel="stylesheet" href="{{ asset('admin2/assets/css/owl.carousel.min.css') }}">
            <link rel="stylesheet" href="{{ asset('admin2/assets/css/flaticon.css') }}">
            <link rel="stylesheet" href="{{ asset('admin2/assets/css/price_rangs.css') }}">
            <link rel="stylesheet" href="{{ asset('admin2/assets/css/slicknav.css') }}">
            <link rel="stylesheet" href="{{ asset('admin2/assets/css/animate.min.css') }}">
            <link rel="stylesheet" href="{{ asset('admin2/assets/css/magnific-popup.css') }}">
            <link rel="stylesheet" href="{{ asset('admin2/assets/css/fontawesome-all.min.css') }}">
            <link rel="stylesheet" href="{{ asset('admin2/assets/css/themify-icons.css') }}">
            <link rel="stylesheet" href="{{ asset('admin2/assets/css/slick.css') }}">
            <link rel="stylesheet" href="{{ asset('admin2/assets/css/nice-select.css') }}">
            <link rel="stylesheet" href="{{ asset('admin2/assets/css/style.css') }}">
</head>
</head>
<style>
            .button:hover {background-color: #ff6680}

.button:active {
  background-color: #ff6680;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

.head-btn2:active {
  background-color: #f5ec42;
  box-shadow: 0 5px ;
  transform: translateY(4px);
}
            </style>
<body>
<header>
<div class="header-area header-transparrent">
           <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-md-4">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="{{ route('home') }} "> <img src="{{ asset('admin2/assets/img/logo/ejasd.png') }}" alt=""></a>
                            </div>  
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="menu-wrapper">
                                <!-- Main-menu -->
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                            <li></li>
                                            <li></li>
                                          
                                            
                                            <li></li>
                                        </ul>
                                    </nav>
                                </div>          
                                <!-- Header-btn -->
                                <div class="header-btn d-none f-right d-lg-block">
                                    
                                    <a href="{{ route('login') }}" class="btn head-btn2">LOG IN</a>
                                    <a href="{{ route('register') }}" class="btn head-btn2">STUDENT</a>
                                    <a href="{{ route('employers.emp-register') }}" class="btn head-btn2">EMPLOYER</a>
                                   
                                </div>
							 </div>
                        </div>
                     </div>
                </div>
           </div>
       </div>
        <!-- Header End -->
    </header>
    @yield('content')
   
</body>
</html>
