<header>
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
                                            <li><a href="{{ route('home') }}">Home</a></li>
                                            <li><a href="jobListing1.html">Find a Jobs </a></li>
                                          
                                            
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>          
                                <!-- Header-btn -->
                                <div class="header-btn d-none f-right d-lg-block">
                                    
                                    <a href="{{ route('login') }}" class="btn head-btn2">LOG IN</a>
                                    <a href="{{ route('register') }}" class="btn head-btn2">STUDENT</a>
                                    <a href="{{ route('employers.registration') }}" class="btn head-btn2">EMPLOYER</a>
                                   
                                </div>
								
								 
                            </div>
                        </div>
                        
                    </div>
                </div>
           </div>
       </div>
        <!-- Header End -->
    </header>