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
        <div class="col-md-6"> <h4 class="card-title"> Update  Social Links </h4></div>
        <div class="col-md-6 "> <h4 class="card-title text-right "> 
              </div>  
              </div>
              <div class="card-body">
              <div class="table-responsive">
                <form action="{{route('setting-social-link-update',['id'=>$data->id])}}" method="post" enctype='multipart/form-data'>
                @csrf   
                    <div class="form-group">
                    <label for="fb_url">FaceBook Url:</label>
                    <input type="text" name="fb_url" value="{{$data->fb_url}}" class="form-control" id="fb_url">
                    </div>
                    <div class="form-group">
                    <label for="insta_url">Instagram url:</label>
                    <input type="text" name="insta_url" value="{{$data->insta_url}}" class="form-control" id="insta_url">
                    </div>
                    <div class="form-group">
                    <label for="twitter_url">Twitter url:</label>
                    <input type="text" name="twitter_url" value="{{$data->twitter_url}}" class="form-control" id="twitter_url">
                    </div>
                    
                    <div class="form-group">
                    <label for="youtube_url">Youtube url:</label>
                    <input type="text" name="youtube_url" value="{{$data->youtube_url}}" class="form-control" id="youtube_url">
                    </div>
                    <div class="form-group">
                    <label for="linkedin_url">LinkedIn url:</label>
                    <input type="text" name="linkedin_url" value="{{$data->linkedin_url}}" class="form-control" id="linkedin_url">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
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