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
        <div class="col-md-6"> <h4 class="card-title"> Edit Logo</h4></div>
        <div class="col-md-6 "> <h4 class="card-title text-right "> 
              </div>  
              </div>
              <div class="card-body">
              <div class="table-responsive">
                <form action="{{route('storeownersetting-update',['id'=>$data->id])}}" method="post" enctype='multipart/form-data'>
                @csrf   
                <div class="form-group">
                    <label for="storeowner_name">StoreOwner-Name:</label>
                    <input type="text" name="storeowner_name" value="{{$data->storeowner_name}}" class="form-control" id="storeowner_name">
                    </div>
                <div class="form-group">
                    <label for="storeowner_phone">StoreOwner-Phone:</label>
                    <input type="text" name="storeowner_phone" value="{{$data->storeowner_phone}}" class="form-control" id="storeowner_phone">
                    </div>
                    <div class="form-group">
                    <label for="storeowner_email">StoreOwner-Email:</label>
                    <input type="text" name="storeowner_email" value="{{$data->storeowner_email}}" class="form-control" id="storeowner_email">
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