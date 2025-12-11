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
        <div class="col-md-6"> <h4 class="card-title"> Create slider</h4></div>
        <div class="col-md-6 "> <h4 class="card-title text-right "> 
        <a href="{{route('contact-list')}}" class="btn btn-primary">List of slider</a></h4></div>
              </div>  
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <form action="{{route('contact-store')}}" method="post" enctype="multipart/form-data">
                   @csrf
                    <div class="form-group">
                    <label for="name">name:</label>
                    <input type="text"  name="name"  class="form-control" id="name">
                    </div>
                    <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text"  name="email"  class="form-control" id="email">
                    </div>
                    <div class="form-group">
                    <label for="phone">phone:</label>
                    <input type="text"  name="phone"  class="form-control" id="phone">
                    </div>
                    <div class="form-group">
                    <label for="subject">subject:</label>
                    <input type="text"  name="subject"  class="form-control" id="subject">
                    </div>
                    <div class="form-group">
                    <label for="message">:message</label>
                    <textarea type="text" name="message" class="form-control" id="message"></textarea>
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