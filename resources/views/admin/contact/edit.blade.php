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
          <div class="col-md-6">
            <h4 class="card-title"> Edit Contact</h4>
          </div>
          <div class="col-md-6 ">
            <h4 class="card-title text-right ">
              <a href="{{route('contact-list')}}" class="btn btn-primary">List of Contact</a>
            </h4>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <form action="{{route('contact-update',['id'=>$data->id])}}" method="post" enctype='multipart/form-data'>
            @csrf
            <div class="form-group">
              <label for="title1">Name:</label>
              <input type="text" name="name" value="{{$data->name}}" class="form-control" id="title1">
            </div>
            <div class="form-group">
              <label for="title1">Email:</label>
              <input type="text" name="email" value="{{$data->email}}" class="form-control" id="title2">
            </div>
            <div class="form-group">
              <label for="title3">Phone:</label>
              <input type="text" name="phone" value="{{$data->phone}}" class="form-control" id="title3">
            </div>
            <div class="form-group">
              <label for="url">Subject:</label>
              <input type="text" name="subject" value="{{$data->subject}}" class="form-control" id="title3">

            </div>
            <div class="form-group">
              <label for="url">Message:</label>
              <textarea class="form-control" name="message" value="{{$data->message}}" placeholder="message"></textarea>
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