@extends('layouts.main')
@section('content')

<style>

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("{{ asset('admin2/assets/img/hero/about.jpg') }}");
  height: 50%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  filter: blur;
}

.hero-text {
   
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color:#FFFFFF;
}

.section-overly {
    /* position: relative; */
    z-index: 0;
}

h2{
    color: #ffffff;
}
    </style>
<main>

<!-- Hero Area Start-->
<div class="hero-image">
<div class="single-slider section-overly slider-height2 d-flex align-items-center" >
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="hero-text">
                    <h2 style="font-size:50px" color="#FFFFFF">{{$job->jobName}}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Hero Area End -->
<!-- job post company Start -->
<div class="job-post-company pt-20 pb-20">
    <div class="container">
        <div class="row justify-content-between">
            <!-- Left Content -->
            <div class="col-xl-7 col-lg-8">
                <!-- job single -->
                <div class="single-job-items mb-50">
                    <div class="job-items">
                        <div class="company-img company-img-details">
                            <a href="#"><img src="{{ asset($job->jobPic) }}" width='100' height='100' alt=""></a>
                        </div>
                        <div class="job-tittle">
                            <a href="#">
                                <h4>{{$job->jobName}}</h4>
                            </a>
                            <ul>
                               
                                <li><i class="fas fa-map-marker-alt"></i>{{$job->jobLocation}}</li>
                                <li><i class="fas fa-dollar-sign"></i>RM{{$job->jobPay}}</li>

                                @if($job->jobStatus == 0)
                                <li><i class="fas fa-clock"></i>PENDING</li>
                                @elseif($job->jobStatus == 1)
                                <li><i class="fas fa-check"></i>APPROVED</li>
                                @else
                                <li><i class="fas fa-times"></i>REJECTED</li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                  <!-- job single End -->
               
                <div class="job-post-details">
                    <div class="post-details1 mb-50">
                        <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4>Job Description</h4>
                        </div>
                        <p>{{$job->jobDesc}}</p>
                    </div>
                    <div class="post-details2  mb-50">
                         <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4>Required Knowledge, Skills, and Abilities</h4>
                        </div>
                       <ul>
                           <li>System Software Development</li>
                           <li>Mobile Applicationin iOS/Android/Tizen or other platform</li>
                           <li>Research and code , libraries, APIs and frameworks</li>
                           <li>Strong knowledge on software development life cycle</li>
                           <li>Strong problem solving and debugging skills</li>
                       </ul>
                    </div>
                    <div class="post-details2  mb-50">
                         <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4></h4>
                        </div>
                       
                    </div>
                </div>

            </div>
            <!-- Right Content -->
            <div class="col-xl-4 col-lg-4">
                <div class="post-details3  mb-50">
                    <!-- Small Section Tittle -->
                   <div class="small-section-tittle">
                       <h4>Job Overview</h4>
                   </div>
                  <ul>
                     
                      <li>Location : <span>{{$job->jobLocation}}</span></li>
                     
                      <li>Job Type : <span>{{$job->jobType}}</span></li>
                      <li>Salary :  <span>RM{{$job->jobPay}}</span></li>
                      
                  </ul>
                 <div class="apply-btn2">
               @if(Auth::user()->userType=='student')
        @if(!$job->checkApplication())
        <form action="{{route('jobs.apply',[$job->id]) }}" method="post">
         
         <button class="btn">Apply Now</button> <br></br>
         @csrf
        

         <a href="{{route('employers.show',[$job->id]) }}"  button class="btn">View Company</button></a>
                 </div>
               </div>
               </form>
@endif
@endif
                <div class="post-details4  mb-50">
                </main>

                     
    </body>
</html>
      
@endsection