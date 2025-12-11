@extends('layouts.master')
@section('title')
Dashboard || Shoping
@endsection
@section('content')
<style>
   .redbg {
      background-color: black !important;
   }
</style>
<div class="row">
          <div class="col-md-12">
            <div class="card redbg">
            <div class="card-header redbg">
            <div class="row">
        <div class="col-md-6"> <h4 class="card-title"> Edit Store</h4></div>
        <div class="col-md-6 "> <h4 class="card-title text-right "> 
              </div>  
              </div>
              <div class="card-body">
              <div class="table-responsive">
                <form action="{{route('storesetting-update',['id'=>$data->id])}}" method="post" enctype='multipart/form-data'>
                @csrf   
                <div class="form-group">
                    <label for="store_name">Store-Name:</label>
                    <input type="text" name="store_name" value="{{$data->store_name}}" class="form-control" id="store_name">
                    </div>
                <div class="form-group">
                    <label for="store_phone">Store-Phone:</label>
                    <input type="text" name="store_phone" value="{{$data->store_phone}}" class="form-control" id="store_phone">
                    </div>
                    <div class="form-group">
                    <label for="store_address">Store_Address:</label>
                    <input type="text" name="store_address" value="{{$data->store_address}}" class="form-control" id="store_address">
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
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