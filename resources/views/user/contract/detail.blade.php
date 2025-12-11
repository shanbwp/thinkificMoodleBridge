@extends('layouts.usermaster')
@section('title')
Dashboard ACR__Helper
@endsection

@section('content')
<style>
    .redbg {
        background-color: #c42f35 !important;
    }
</style>
<div class="row">
  <div class="col-md-12" style="border-bottom:solid">
    <h4 class="card-title"> Claim Request Detail</h4>
  </div>
</div>
</div> 
<br>
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header redbg">

      </div>
      <div class="card-body p-5 redbg">
        <div class="row">
          <div class="table-responsive">
            <form action="{{route('claim-store')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="youTube_url">YouTube URL:</label>
                <input type="text" name="youtube_url" value="{{$data->youtube_url}}" class="form-control" id="youtube_url" style="border-radius: 1.5rem">
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <label for="start_time">From Time:</label>
                  <input type="text" name="start_time" value="{{$data->start_time}}" class="form-control" id="start_time" style="border-radius: 1.5rem">
                </div>
                <div class="col-lg-6">
                  <label for="end_time">To Time:</label>
                  <input type="text" name="end_time" value="{{$data->end_time}}" class="form-control" id="end_time" style="border-radius: 1.5rem">
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea type="text" name="message" class="form-control" id="message">{{$data->message}}</textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12"> 
                   <div class="form-group">
                    <label for="message">Status:</label>
                      <select class="form-control" name="status" id="status"> 
                        <option value="{{$data->status==1?'selected':''}}">Approved</option>
                        <option value="{{$data->status==0?'selected':''}}">Pending</option> 
                        <option value="{{$data->status==2?'selected':''}}">Decline</option> 
                      </select>
                    </div> 
                </div> 
              </div>
              <br> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection