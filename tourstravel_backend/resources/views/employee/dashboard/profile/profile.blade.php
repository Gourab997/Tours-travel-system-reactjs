@extends('employee.layouts.main')
@section('profile')

    <div class="main-body">
   
          <!-- Breadcrumb -->
        
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="{{ asset('/upload')}}/{{ $LoggedUserInfo->profile_img}}" alt="" class="rounded-circle" width="150">
                    					    
					
                    
                    <div class="mt-3">


                      
                      <h4> {{ session('username') }}</h4>
                      
                      <p class="text-muted font-size-sm">{{ $LoggedUserInfo->type }}</p>
                      <a href="/employee/dashboard/editprofile/{{$LoggedUserInfo->id}}" class="btn btn-primary">Edit Profile</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                
                
            
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                    <span class="text-secondary">{{ $LoggedUserInfo->facebook }}</span>
                  </li>
                </ul>
              </div>
            </div>
            
                
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$LoggedUserInfo->fullname}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$LoggedUserInfo->email}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$LoggedUserInfo->phone}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">User Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$LoggedUserInfo->username}}
                    </div>
                  </div>
                  <hr>



                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    
                    <div class="col-sm-9 text-secondary">
                      {{$LoggedUserInfo->address}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Blood Group</h6>
                    </div>
                  

                    <div class="col-sm-9 text-secondary">
                      {{$LoggedUserInfo->bloodgroup}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Gender</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{$LoggedUserInfo->gender}}
                      
                    </div>
                  </div>
                  <hr>
                </div>
              </div>
            
            </div>
          </div>
        </div>
        
@endsection