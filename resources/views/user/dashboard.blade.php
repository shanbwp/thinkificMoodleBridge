@extends('layouts.usermaster')
@section('title')
Dashboard ACR__Helper
@endsection
@section('content')
<div class="content container-fluid">
   <!-- Page Header -->
   <div class="page-header">
      <div class="row">
         <div class="col-sm-12">
            <h3 class="page-title">Welcome {{ auth('user')->user()->name }}!</h3>
            
         </div>
      </div>
   </div>
   <!-- /Page Header -->
   <div class="row">
      <div class="col-xl-3 col-sm-6 col-12">
         <div class="card">
            <div class="card-body">
               <div class="dash-widget-header">
                  <span class="dash-widget-icon text-primary border-primary">
                  <i class="fe fe-users"></i>
                  </span>
                  <div class="dash-count">
                     <h3></h3>
                  </div>
               </div>
               <div class="dash-widget-info">
                  <h6 class="text-muted"> Users</h6>
                  <div class="progress progress-sm">
                     <div class="progress-bar bg-primary w-50"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
         <div class="card">
            <div class="card-body">
               <div class="dash-widget-header">
                  <span class="dash-widget-icon text-success">
                  <i class="fe fe-users"></i>
                  </span>
                  <div class="dash-count">
                     <h3></h3>
                  </div>
               </div>
               <div class="dash-widget-info">
                  <h6 class="text-muted">contact</h6>
                  <div class="progress progress-sm">
                     <div class="progress-bar bg-success w-50"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
         <div class="card">
            <div class="card-body">
               <div class="dash-widget-header">
                  <span class="dash-widget-icon text-danger border-danger">
				  <i class="fe fe-users"></i>
                  </span>
                  <div class="dash-count">
                     <!--<h3>{{count($beneficiery)}}</h3>-->
                  </div>
               </div>
               <div class="dash-widget-info">
                  <h6 class="text-muted">portfolio</h6>
                  <div class="progress progress-sm">
                     <div class="progress-bar bg-danger w-50"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
         <div class="card">
            <div class="card-body">
               <div class="dash-widget-header">
                  <span class="dash-widget-icon text-warning border-warning">
                  <i class="fe fe-users"></i>
                  </span>
                  <div class="dash-count">
                     <h3></h3>
                  </div>
               </div>
               <div class="dash-widget-info">
                  <h6 class="text-muted">Subscribers</h6>
                  <div class="progress progress-sm">
                     <div class="progress-bar bg-warning w-50"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>  
</div> 
@endsection 