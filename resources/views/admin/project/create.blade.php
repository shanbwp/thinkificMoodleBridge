@extends('layouts.master') 
@section('title')
Dashboard ACR__Helper
@endsection
@section('content') 
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-md-6">
            <h4 class="card-title"> Create Project</h4>
          </div>
          <div class="col-md-6 ">
            <h4 class="card-title text-right ">
              <a href="{{route('project-list')}}" class="btn btn-primary">List of Project</a>
            </h4>
          </div>
        </div>
      </div>
      <div class="card-body redbg">
        <div class="table-responsive">
          <form action="{{route('project-store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="name"> Title:</label>
              <input type="text" name="name" class="form-control" id="name">
            </div> 
            <div class="form-group">
              <label for="duration_limt">File Duration limt:</label>
              <input type="text" name="duration_limt" class="form-control" id="duration_limt">
            </div> 
            <div class="form-group">
              <label for="status">Status:</label>
              <select class="form-control" id="status" name="status" > 
                  <option value="active" > Active</option>
                  <option value="deactive" > Deactive</option> 
              </select>
            </div>
            <div class="form-group">
              <label for="website">Website</label>
              <input type="text" name="website" class="form-control" id="website">
            </div> 
            <div class="form-group">
              <label for="detail">Detail:</label>
              <textarea name="detail" class="form-control ckeditor" id="detail"></textarea> 
            </div>  
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div> 
</div> 
@endsection 