<!doctype html>
<html class="no-js" lang="zxx">
    <head>
    <meta charset="utf-8">
        
         <title>e-JaSDs</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=2">
        
      
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
  
            <style>
.button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #000000;
  background-color: ##ffd338;
  background: rgb(255,211,56);
 
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #000000;
  position:center;
  margin-right :20px;
}

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

.head-btn2 {
    background: #ffec3f;
    border: 1px solid #ffec3f;
    color: #000000;
    background-color: #ffd338;
    font-size: 16px;
    margin: 6px 4px;
    cursor: pointer;
}
.slider-height {
    /* min-height: 850px; */
    background-repeat: no-repeat;
    background-position: top;
    background-size: cover;
    background-attachment: fixed;
}

.slider-area .hero__caption h1 {
    font-size: 80px;
    font-weight: 900;
    margin-bottom: 78px;
    color: #f9e132;
    line-height: 1.2;
    text-shadow: 0px 1px 16px black;
}
</style>
  
        </head>

   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('admin2/assets/img/logo/ejasd.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    
        <!-- Header Start -->
      
        <header>
<div class="header-area header-transparrent">
           <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-md-4">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="{{ route('home') }} "><img src="{{ asset('admin2/assets/img/logo/ejasd.png') }}" alt=""></a>
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
                                            <li></li>
                                        </ul>
                                    </nav>
                                </div>          
                                <!-- Header-btn -->
                                <div class="header-btn d-none f-right d-lg-block">
                                    <a></a>
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

    <main>



        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
           
                <div class="single-slider slider-height d-flex align-items-center" data-background="{{ asset('hai2/assets/img/isc.jpg') }}">
                    <div class="container">
                        <div class="row">
                            <div class="col text-center">
                                <div class="hero__caption">
                                    <h1>Let's Find Your Job With Us!</h1>
                                     <a href= "{{ route('alljobs') }}" button class="button">FIND JOB</a>
                                     <a href= "{{ route('login') }}" button class="button">POST JOB</a>
                                </div>
                            </div>
                        </div>
                        <!-- Search Box -->
                        
                        <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <search-component></search-component>
                            </div>
						   </div>
                        </div>
                    </div>
                </div>

      <!-- How  Apply Process Start-->
        <div class="apply-process-area apply-bg pt-50 pb-50" data-background="{{ asset('admin2/assets/img/gallery/how-applybg.png') }}">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle white-text text-center">
                            <span>APPLY PROCESS</span>
                            <h2> How it works</h2>
                        </div>
                    </div>
                </div>
                <!-- Apply Process Caption -->
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-search"></span>
                            </div>
                            <div class="process-cap">
                               <h5>1. Search a Job</h5>
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-curriculum-vitae"></span>
                            </div>
                            <div class="process-cap">
                               <h5>2. Apply for Job</h5>
                               </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-tour"></span>
                            </div>
                            <div class="process-cap">
                               <h5>3. See the Result</h5>
                               </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>
        <!-- How  Apply Process End-->
    </main>



    <!-- Footer Start-->
    <div class="footer-area footer-bg footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                       <div class="single-footer-caption mb-0">
                       
                            
                         </div>

                       </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Contact Info</h4>
                                <ul>
                                    <li>
                                    <p>Address :SMK Dato' Sulaiman, Jalan Simpang Lima / Parit Sulong, Parit Sulong, 83500 Parit Sulong, Johor</p>
                                    </li>
                                    <li><a href="#">Phone : +07-418 6214</a></li>
                                    <li><a href="#">Email : tadbirds @ gmail.com </a> </li>
                                    <li><a>        jea0015@moe.edu.my </a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                   
                     </div>
                             </div>
                            </div>
                        </div>
                    </div>
                </div>
               <!--  -->
               <div class="row footer-wejed justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <!-- logo -->
                       
                    </div>
               </div>
            </div>
        </div>
        
        <!-- Footer End-->
    </footer>
  <!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="{{ asset('admin2/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{ asset('admin2/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('admin2/assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('admin2/assets/js/bootstrap.min.js') }}"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{ asset('admin2/assets/js/jquery.slicknav.min.js') }}"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{ asset('admin2/assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('admin2/assets/js/slick.min.js') }}"></script>
        <script src="{{ asset('admin2/assets/js/price_rangs.js') }}"></script>
        
		<!-- One Page, Animated-HeadLin -->
        <script src="{{ asset('admin2/assets/js/wow.min.js') }}"></script>
		<script src="{{ asset('admin2/./assets/js/animated.headline.js') }}"></script>
        <script src="{{ asset('admin2/assets/js/jquery.magnific-popup.js') }}"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="{{ asset('admin2/assets/js/jquery.scrollUp.min.js') }}"></script>
        <script src="{{ asset('admin2/assets/js/jquery.nice-select.min.js') }}"></script>
		<script src="{{ asset('admin2/assets/js/jquery.sticky.js') }}"></script>
        
        <!-- contact js -->
        <script src="{{ asset('admin2/assets/js/contact.js') }}"></script>
        <script src="{{ asset('admin2/assets/js/jquery.form.js') }}"></script>
        <script src="{{ asset('admin2/assets/js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('admin2/assets/js/mail-script.js') }}"></script>
        <script src="{{ asset('admin2/assets/js/jquery.ajaxchimp.min.js') }}"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="{{ asset('admin2/assets/js/plugins.js') }}"></script>
        <script src="{{ asset('admin2/assets/js/main.js') }}"></script>

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        
    </body>
</html>

<script>

var path = "{{ url('typeahead_autocomplete/action') }}";

$('#jobName').typeahead({

    source: function(query, process){

        return $.get(path, {query:query}, function(data){

            return process(data);

        });

    }

});

</script>

