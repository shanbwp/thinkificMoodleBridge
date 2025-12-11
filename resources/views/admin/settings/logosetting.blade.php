@extends('layouts.master') 
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
                <form action="{{route('setting-logo-update')}}" method="post" enctype='multipart/form-data'>
                @csrf  
                <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                    <label for="fav_icon">Fav_Icon:</label>
                    <input type="file" name="fav_icon" value="{{$data->fav_icon}}" class="form-control" id="fav_icon">
                    </div>
                </div>
                <div class="col-md-6">
                <img src="{{asset('assets/images/setting/' . $data->fav_icon)}}" hieght="100px" width="100px" alt="image"></td>
	
                </div>
                 </div>
                <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                    <label for="logo">Logo:</label>
                    <input type="file" name="logo" value="{{$data->logo}}" class="form-control" id="logo">
                    </div>
                </div>
                <div class="col-md-6">
                <img src="{{asset('assets/images/setting/' . $data->logo)}}" hieght="100px" width="100px" alt="image"></td>
                </div>
                </div>
                 <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                    <label for="white_logo">White_Logo:</label>
                    <input type="file" name="white_logo" value="{{$data->white_logo}}" class="form-control" id="white_logo">
                    </div>
                </div>
                <div class="col-md-6">
                <img src="{{asset('assets/images/setting/' . $data->white_logo)}}" hieght="100px" width="100px" alt="image"></td>
                </div>
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