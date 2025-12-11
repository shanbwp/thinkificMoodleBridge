@extends('layouts.master')

@section('title')
Dashboard ACR__Helper
@endsection

@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
            <div class="card-header">
            <div class="row">
        <div class="col-md-6"> <h4 class="card-title"> Create User</h4></div>
        <div class="col-md-6 "> <h4 class="card-title text-right "> 
        <a href="{{route('user-list')}}" class="btn btn-primary">List of Users</a></h4></div>
              </div>  
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <form action="{{route('user-update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                   @csrf
                   <div class="form-group">
                    <label for="group_id">Group ID:</label>
                    <input type="text"  name="group_id" value="{{$data->group_id}}" class="form-control" id="group_id">
                    </div>
                  
                    <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text"  name="name" value="{{$data->name}}" class="form-control" id="name">
                    </div>
                  
                    <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" name="image"  value="{{$data->image}}"class="form-control" id="image">
                    </div>
                    <div class="form-group">
                    <label for="p_name">phone:</label>
                    <input type="text" name="p_name" value="{{$data->p_name}}" class="form-control" id="p_name">
                    </div>
                    <div class="form-group">
                    <label for="email">email:</label>
                    <input type="email" name="email" value="{{$data->email}}"  class="form-control" id="email">
                    </div>
                    <div class="form-group">
                    <label for="Address">Address:</label>
                    <input type="text" name="Address" value="{{$data->Address}}"  class="form-control" id="Address">
                    </div>
                    <div class="form-group">
                    <label for="payment">Payment:</label>
                    <input type="text" name="payment" value="{{$data->payment}}"  class="form-control" id="Address">
                    </div>                 
                  <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
              </div>
            </div>
          </div>
         
          </div>
        </div>

@endsection

@section('scripts')

@endsection