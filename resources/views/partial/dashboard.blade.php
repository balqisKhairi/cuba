<div id="content-wrapper">
<div class="container-fluid">
          <div class="d-sm-flex justify-content-between align-items-center mb-4">
          <h3 class="text-dark mb-0"></h3>
 
                        @if(Auth::user()->userType=='employer')
                        <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="{{ route('jobs.create') }}"  style="background: rgb(255,207,35);color: rgb(0,0,0);font-weight: bold;">
                          
                        <i class="fas fa-upload fa-sm text-black-50" style="color: #000000;font-size: 17px;"></i>&nbsp;Post Job</a>
                            @endif

                            @if(Auth::user()->userType=='student')
                        <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="{{ route('studView') }}"style="background: rgb(255,207,35);color: rgb(0,0,0);font-weight: bold;">
                            <i class="fas fa-search fa-sm text-white-50"style="color: #000000;font-size: 17px;"></i>&nbsp;Find Job</a>
                            @endif
                           </div>

                          
</div>           
</div>           



                         @section('content')
                         <div class="card" style="border-style: none;">
                    <div class="card-body" style="box-shadow: 0px 0px 0px rgb(133, 135, 150);padding: 10px;height: 80px;border-color: rgb(255,255,255);margin: 12px;">
                        <h4 class="card-title" style="color: rgb(0,0,0);font-style: italic;">Welcome!</h4>
                        <h6 class="text-muted card-subtitle mb-2"></h6>
                        <p class="card-text" style="color: rgb(0,0,0);font-family: Aleo, serif;font-style: italic;">Glad to see you again. You are logged in!<br></p>
                    </div>
                
@endsection


                        

  
