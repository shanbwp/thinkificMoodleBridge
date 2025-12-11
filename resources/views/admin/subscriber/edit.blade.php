@extends('layouts.master')

@section('title')
Dashboard ACR__Helper
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
        <div class="col-md-6"> <h4 class="card-title"> Edit Subscriber</h4></div>
        <div class="col-md-6 "> <h4 class="card-title text-right "> 
        <a href="{{route('subscriber-list')}}" class="btn btn-primary">List of Subscriber</a></h4></div>
              </div>  
              </div>
              <div class="card-body">
              <div class="table-responsive">
                <form action="{{route('subscriber-update',['id'=>$data->id])}}" method="post" enctype='multipart/form-data'>
                @csrf   
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" name="email" value="{{$data->email}}" class="form-control" id="email">
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