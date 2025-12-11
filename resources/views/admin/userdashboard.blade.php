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
            <h3 class="page-title">Welcome User!</h3>
            <ul class="breadcrumb">
               <li class="breadcrumb-item active">Dashboard</li>
            </ul>
         </div>
      </div>
   </div>
   <!-- /Page Header -->
   <div class="row">
      <div class="col-xl-3 col-sm-6 col-12">
         <div class="card redbg">
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
                  <h6 class="text-muted"> Upload Files</h6>
                  {{count($upload)}}
                  <div class="progress progress-sm">
                     <div class="progress-bar bg-primary w-50"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
         <div class="card redbg">
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
                  <h6 class="text-muted">Pending Files</h6>
                  {{count($pending)}}
                  <div class="progress progress-sm">
                     <div class="progress-bar bg-success w-50"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
         <div class="card redbg">
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
                  <h6 class="text-muted">Submitted Files</h6>
                  {{count($submitted)}}
                  <div class="progress progress-sm">
                     <div class="progress-bar bg-danger w-50"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12">
         <div class="card redbg">
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
                  <h6 class="text-muted">Claim Requets</h6>
                  {{count($claim)}}
                  <div class="progress progress-sm">
                     <div class="progress-bar bg-warning w-50"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-12 col-lg-6">
         <!-- Sales Chart -->
         <div class="card card-chart">
            <div class="card-header redbg">
               <h4 class="card-title">Revenue</h4>
            </div>
            <div class="card-body">
               <div id="morrisArea"></div>
            </div>
         </div>
         <!-- /Sales Chart -->
      </div>
      <div class="col-md-12 col-lg-6">
         <!-- Invoice Chart -->
         <div class="card card-chart">
            <div class="card-header redbg">
               <h4 class="card-title">Status</h4>
            </div>
            <div class="card-body">
               <div id="morrisLine"></div>
            </div>
         </div>
         <!-- /Invoice Chart -->
      </div>
   </div> 
</div> 
@endsection 