<!doctype html>
<html class="no-js" lang="zxx">
    <head>
    <meta charset="utf-8">
        
         <title>e-JaSD</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=2">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin2/assets/img/favicon.ico') }}">

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
  
            <style>
.button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #000000;
  background-color: #FAFF03;
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
    <header>
        <!-- Header Start -->
       <div class="header-area header-transparrent">
           <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-md-4">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.html"><img src="{{ asset('admin2/assets/img/logo/ejasd.png') }}" alt=""></a>
                            </div>  
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="menu-wrapper">
                                <!-- Main-menu -->
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="job_listing.html">Find a Jobs </a></li>
                                          
                                            
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>          
                                <!-- Header-btn -->
                                <div class="header-btn d-none f-right d-lg-block">
                                    <a href="{{ route('applications.index') }}" class="btn head-btn2">POST A JOB </a>
                                    <a href="{{ route('login') }}" class="btn head-btn2">LOG IN</a>
                                    <a href="{{ route('register') }}" class="btn head-btn2">REGISTER</a>
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
           
                <div class="single-slider slider-height d-flex align-items-center" data-background="{{ asset('admin2/assets/img/hero/pic1.jpg') }}">
                    <div class="container">
                        <div class="row">
                            <div class="col text-center">
                                <div class="hero__caption">
                                    <h1>Let's Find Your Job With Us!</h1>
                                    <button class="button" >FIND JOB</button>
                                    <button class="button" >POST JOB</button>
                                </div>
                            </div>
                        </div>
                        <!-- Search Box -->
                        <div class="row">
                            <div class="col-xl">
								
								
                                <!-- form 
                                <form action="#" class="search-box">
                                    <div class="input-form">
                                        <input type="text" name="jobName" id="jobName" placeholder="Job Tittle or keyword" data-column="0">
                                    </div>
                                    <div class="select-form">
                                        <div class="select-itms">
                                            <select name="jobLocation" id="jobLocation">
                                            <option disabled value=""> --SELECT--</option>
                   <option value="JOHOR"> JOHOR</option>
                   <option value="KELANTAN"> KELANTAN</option>
                   <option value="KEDAH"> KEDAH</option>
                   <option value="KUALA LUMPUR"> KUALA LUMPUR</option>
                   <option value="LABUAN">LABUAN</option>
                   <option value="MELAKA"> MELAKA</option>
                   <option value="NEGERI SEMBILAN"> NEGERI SEMBILAN</option>
                   <option value="PAHANG">PAHANG</option>
                   <option value="PENANG"> PENANG</option>
                   <option value="PERAK"> PERAK</option>
                   <option value="PERLIS">PERLIS</option>
                   <option value="PUTRAJAYA">PUTRAJAYA</option>
                   <option value="SABAH">SABAH</option>
                   <option value="SARAWAK">SARAWAK</option>
                   <option value="SELANGOR">SELANGOR</option>
                   <option value="TERENGGANU">TERENGGANU</option>
                                            </select>
                                        </div>
                                    </div>
                                  <!-- <div class="select-form">
                                        <div class="select-itms">
                                            <select name="jobSkill" id="jobSkill">
                                            <option disabled value=""> --SELECT--</option>
                   <option value="COOKING"> COOKING</option>
                   <option value="SEWING"> SEWING</option>
                
                                            </select>
                                        </div>
                                    </div> 
                                    
                                    <div class="search-form">
                                        <a href="#">Find</a>
                                    </div>	
                                </form>	-->
                            </div>
                        </div>
                    </div>
                </div>
           
        <!-- slider Area End-->
        <!-- Our Services Start -->
       <!-- <div class="our-services section-pad-t10">
            <div class="container">
                Section Tittle 
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <h2>Choose Your Skill </h2>
                        </div>
                    </div>
                
                <div class="row d-flex justify-contnet-center">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-tour"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="job_listing.html">Sewing</a></h5>
                               </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-cms"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="job_listing.html">Design & Development</a></h5> </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-report"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="job_listing.html">Sales & Marketing</a></h5>
                             </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-app"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="job_listing.html">Mobile Application</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-helmet"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="job_listing.html">Construction</a></h5> </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-high-tech"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="job_listing.html">Information Technology</a></h5> </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-real-estate"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="job_listing.html">Real Estate</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-content"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="job_listing.html">Content Writer</a></h5> </div>
                        </div>
                    </div>
                </div>
                More Btn 
                 Section Button 
               
            </div>
        </div> -->
        <!-- Our Services End -->
        
        
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

