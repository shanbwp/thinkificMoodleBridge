@extends('layouts.usermaster')

@section('title')
Dashboard ACR__Helper
@endsection
@section('content')
<style>
  .redbg {
    background-color: black !important;
  }
</style>
<div class="row redbg">
  <div class="col-md-12" style="border-bottom:solid">
    <h4 class="card-title"> Create Album</h4>
  </div>
</div>
</div>

<br>
<div class="row">
  <div class="col-md-12">
    <div class="card redbg ">
      <div class="card-header redbg">
        <div class="row">
          <div class="col-md-12">
            <h4 class="card-title">Edit Track</h4>
          </div><br>
          
        </div>
      </div>
      <div class="card-body redbg">
        <div class="row">
          <div class="table-responsive">
            <form action="{{route('album-track-update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="track_title">Track Title:</label>
                <input type="text" name="track_title" class="form-control" value="{{$data->track_title}}"   id="name" style="border-radius: 1.5rem">
              </div>
              <div class="form-group">
                <label for="album_artist">ISRC:</label>
                <input type="text" name="isrc" class="form-control" value="{{$data->isrc}}" id="isrc" style="border-radius: 1.5rem">
              </div>

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="custom_tag">Custom Tag:</label>
                    <input type="text" name="custom_tag" class="form-control" value="{{$data->custom_tag}}"  id="custom_tag" style="border-radius: 1.5rem">
                  </div>
                </div>
              </div>                 
              <div class="row">
                 <div class="col-md-12">
                 <button type="submit" class="btn btn-primary" style="border-radius: 1.5rem">Edit Track</button>
                 </div>
              </div>


          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>

@endsection 