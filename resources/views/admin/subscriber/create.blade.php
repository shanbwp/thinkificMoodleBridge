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
        <div class="col-md-6"> <h4 class="card-title"> Create Blog</h4></div>
        <div class="col-md-6 "> <h4 class="card-title text-right "> 
        <a href="{{route('blog-list')}}" class="btn btn-primary">List of Blog</a></h4></div>
              </div>  
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <form action="{{route('blog-store')}}" method="post" enctype="multipart/form-data">
                   @csrf
                    <div class="form-group">
                    <label for="name">name:</label>
                    <input type="text"  name="name"  class="form-control" id="name">
                    </div>
                    <div class="form-group">
                    <label for="date">date:</label>
                    <input type="text"  name="date"  class="form-control" id="date">
                    </div>
                    <div class="form-group">
                    <label for="country">country:</label>
                    <input type="text"  name="country"  class="form-control" id="country">
                    </div>
                    <div class="form-group">
                    <label for="description">description:</label>
                    <input type="text"  name="description"  class="form-control" id="description">
                    </div>
                    <div class="form-group">
                    <label for="image">image:</label>
                    <input type="file"  name="image"  class="form-control" id="image">
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