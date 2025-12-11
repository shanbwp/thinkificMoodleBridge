@extends('layouts.usermaster')
@section('title')
Dashboard ACR__Helper
@endsection
@section('content') 
<div class="row">
   <div class="col-md-12" style="border-bottom:solid">
      <h4 class="card-title">Welcome {{ auth('user')->user()->name }}!</h4>
   </div>
</div> 
<br>
<div class="row">
   <div class="col-md-12">
      <div class="card redbg">
         <div class="card-header">
         </div>
         <div class="card-body">
            <div class="row">
               <div class="table-responsive">
                  <form action="{{route('user-account-update',['id'=>auth('user')->user()->id])}}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                     <label for="name">Login:</label>
                     <input type="text" name="name" value="{{ auth('user')->user()->name }}" class="form-control" id="name" style="border-radius: 1.5rem">
                  </div>
                  <div class="form-group">
                     <label for="name">Full Name:</label>
                     <input type="text" name="f_name" value="{{ auth('user')->user()->f_name }}" class="form-control" id="start_time" style="border-radius: 1.5rem">
                  </div>
                  <div class="form-group">
                     <label for="email">Email:</label>
                     <input type="text" name="email" value="{{ auth('user')->user()->email }}" class="form-control" id="email" style="border-radius: 1.5rem" >
                  </div>
                  <div class="form-group">
                     <label for="email">Pay Pal:</label>
                     <input type="text" name="paypal_email" value="{{ auth('user')->user()->paypal_email }}" class="form-control" id="email" style="border-radius: 1.5rem" >
                  </div>
                  <div class="form-group">
                     <label for="email"> Confirm Pay Pal:</label>
                     <input type="text" name="email" class="form-control" id="email" style="border-radius: 1.5rem" >
                  </div>
                  <div class="row">
                     <div class="col-md-6">
                        <label for="password">New Password:</label>
                        <input type="password" name="password"  class="form-control" id="password" style="border-radius: 1.5rem">
                     </div>
                     <div class="col-md-6">
                        <label for="password">Confirm Password:</label>
                        <input type="text" name="password" class="form-control" id="password" style="border-radius: 1.5rem">
                     </div>
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-lg-6 text-right">
                        <button type="submit" class="btn btn-primary " style="border-radius: 1.5rem">Save Changes</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection