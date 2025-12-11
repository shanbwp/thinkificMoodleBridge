@extends('layouts.master') 
@section('title')
Dashboard ACR_Helper
@endsection
@section('content') 
<div class="row">
  <div class="col-md-12">
    <div class="card redbg">
      <div class="card-header redbg">
        <div class="row">
          <div class="col-md-6">
            <h4 class="card-title"> Create User</h4>
          </div>
          <div class="col-md-6 ">
            <h4 class="card-title text-right ">
              <a href="{{route('user-list')}}" class="btn btn-primary">List of Users</a>
            </h4>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <form action="{{route('user-store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="image">Image:</label>
              <input type="file" name="image" class="form-control" id="image">
            </div>
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" name="name" class="form-control" id="name">
            </div> 
            <div class="form-group">
              <label for="phone">Phone:</label>
              <input type="text" name="phone" class="form-control" id="phone">
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" name="email" class="form-control" id="email">
            </div>
            <div class="form-group">
              <label for="paypal_email">Paypal Email:</label>
              <input type="email" name="paypal_email" class="form-control" id="paypal_email">
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" name="password" class="form-control" id="password">
            </div>
            <div class="form-group">
              <label for="Address">Address:</label>
              <input type="text" name="address" class="form-control" id="Address">
            </div> 
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div> 
</div>  
@endsection
 