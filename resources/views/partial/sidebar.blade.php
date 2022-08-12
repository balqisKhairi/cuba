<body id="page-top">
    <div id="wrapper">
        
        <!--side bar start-->
        
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0" 
        style="background: rgb(255,211,56);color: #000000;font-size: 17px;width: 220px;">
            <div class="container-fluid d-flex flex-column p-0">
              
    <!-- Brand Logo -->
     <img src="{{ asset('hai2/assets/img/1.png') }}" alt="logo1 Logo" width="100px" left="50px" class="brand-image img-circle elevation-3" >
 
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link active" href="index.html" style="color: rgb(0,0,0);font-size: 14px;">
                    <i class="fas fa-tachometer-alt" style="color: #000000;font-size: 17px;"></i>
                    <span>Dashboard</span></a></li>


                    @if(Auth::user()->userType=='student')
                    <li class="nav-item"><a class="nav-link" href="{{ route('studdents.myAcc') }}" style="color: rgba(0,0,0,0.8);font-weight: bold;font-size: 14px;">
                    <i class="fas fa-user" style="color: #000000;font-size: 17px;"></i>
                    <span>Profile</span></a></li>

                    <li class="nav-item"><a class="nav-link" href="{{ route('studdents.myJob') }}" style="color: rgba(0,0,0,0.8);font-weight: bold;font-size: 14px;">
                    <i class="fas fa-briefcase" style="color: #000000;font-size: 17px;"></i>
                    <span>My Job</span></a>


                    <a class="nav-link" href="{{ route('studdents.mycerti')}}" style="color: rgba(0,0,0,0.8);font-weight: bold;font-size: 14px;">
                    <i class="fas fa-certificate" style="color: #000000;font-size: 17px;"></i>
                    <span>My Certificate</span></a>

                    @endif

                    @if(Auth::user()->userType=='employer')

                    <li class="nav-item"><a class="nav-link" href="{{ route('employers.myAcc') }}" style="color: rgba(0,0,0,0.8);font-weight: bold;font-size: 14px;">
                    <i class="fas fa-user" style="color: #000000;font-size: 17px;"></i>
                    <span>Profile</span></a></li>

                    <li class="nav-item"><a class="nav-link" href="{{ route('jobs.myjobs') }}" style="color: rgba(0,0,0,0.8);font-weight: bold;font-size: 14px;">
                    <i class="fas fa-briefcase" style="color: #000000;font-size: 17px;"></i>
                    <span>My Job</span></a>


                    <li class="nav-item">
                    <a class="nav-link" href="#" style="color: rgba(0,0,0,0.8);font-weight: bold;font-size: 14px;">
                    <i class="fas fa-folder" style="color: #000000;font-size: 17px;"></i>
                    <span>Record</span></a>

                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('jobs.applicant') }}" style="color: rgba(0,0,0,0.8);font-weight: bold;font-size: 14px;">
                    <i class="fas fa-folder-open" style="color: #000000;font-size: 17px;"></i>
                    <span>List Of Application</span></a></li>

                    @endif 
</ul>

                    @if(Auth::user()->userType=='admin')

                    <li class="nav-item">
                    <a class="nav-link" href="#" style="color: rgba(0,0,0,0.8);font-weight: bold;font-size: 14px;">
                    <i class="fas fa-folder" style="color: #000000;font-size: 17px;"></i>
                    <span>Record</span></a></li>

                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('studdents.index') }}" style="color: rgba(0,0,0,0.8);font-weight: bold;font-size: 14px;">
                    <i class="fas fa-folder-open" style="color: #000000;font-size: 17px;"></i>
                    <span>List Of Students</span></a></li>

                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('employers.index') }}" style="color: rgba(0,0,0,0.8);font-weight: bold;font-size: 14px;">
                    <i class="fas fa-folder-open" style="color: #000000;font-size: 17px;"></i>
                    <span>List Of Employers</span></a></li>

                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('jobs.index') }}" style="color: rgba(0,0,0,0.8);font-weight: bold;font-size: 14px;">
                    <i class="fas fa-folder-open" style="color: #000000;font-size: 17px;"></i>
                    <span>List Of Jobs</span></a></li>

                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('certificates.index') }}"  style="color: rgba(0,0,0,0.8);font-weight: bold;font-size: 14px;">
                    <i class="fas fa-folder-open" style="color: #000000;font-size: 17px;"></i>
                    <span>List Of Certificates</span></a></li>

                    @endif 
                 
                  
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"  
                    style="color: rgba(0,0,0,0.8);font-weight: bold;font-size: 14px;">
                    <i class="fas fa-sign-out-alt" 
                    style="color: #000000;font-size: 17px;"></i>
                    <span>Logout</span></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                </form>
                </li>    
                </li>
                </ul>

                <div class="text-center d-none d-md-inline">
                    <button class="btn rounded-circle border-0" id="sidebarToggle" type="button" style="color: #000000;background: rgba(0,0,0,0.94);"></button></div>
            </div>
        </nav>
       
       