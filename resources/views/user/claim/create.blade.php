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
    <h4 class="card-title"> Claim Request</h4>
  </div>
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
            <form action="{{route('claim-store')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="youTube_url">YouTube URL:</label>
                <input type="text" name="youtube_url" class="form-control" id="youtube_url" style="border-radius: 1.5rem">
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <label for="start_time">From Time:</label>
                  <input type="text" name="start_time" value="00:00:00" class="form-control" id="start_time" style="border-radius: 1.5rem">
                </div>
                <div class="col-lg-6">
                  <label for="end_time">To Time:</label>
                  <input type="text" name="end_time" value="00:00:00"  class="form-control" id="end_time" style="border-radius: 1.5rem" >
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-lg-12">
                <div class="form-group">
                <label for="message">Message:</label>
                <textarea type="text" name="message" class="form-control" id="message" ></textarea>
              </div>
                </div>
              </div> 
              <br>
              <div class="row">
                <div class="col-lg-12 p-4 text-center">
                  <button type="submit" class="btn btn-primary" style="border-radius: 1.5rem">Save Changes</button>
                </div>
              </div> 
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection