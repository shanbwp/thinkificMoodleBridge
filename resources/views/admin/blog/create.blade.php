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
            <h4 class="card-title"> Create Blog</h4>
          </div>
          <div class="col-md-6 ">
            <h4 class="card-title text-right ">
              <a href="{{route('blog-list')}}" class="btn btn-primary">List of Blog</a>
            </h4>
          </div>
        </div>
      </div>
      <div class="card-body redbg">
        <div class="table-responsive">
          <form action="{{route('blog-store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="name">Blog Title:</label>
              <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="form-group">
              <label for="date">Date:</label>
              <input type="text" name="date" class="form-control" id="date">
            </div>
            <div class="form-group">
              <label for="country">Create BY:</label>
              <input type="text" name="country" class="form-control" id="country">
            </div>
            <div class="form-group">
              <label for="description">Blog Content:</label>
              <textarea name="description" class="form-control ckeditor" id="description"></textarea> 
            </div>
            <div class="form-group">
              <label for="image">Image:</label>
              <input type="file" name="image" class="form-control" id="image">
            </div>
            <div class="form-group">
              <label for="img_alt">Image Alt:</label>
              <input type="text" name="img_alt" class="form-control" id="img_alt">
            </div>
            <div class="form-group">
              <label for="slug">Slug *:</label>
              <input type="text" name="slug" class="form-control" required id="slug">
            </div>
            <div class="form-group">
              <label for="meta_title">Meta Title:</label>
              <input type="text" name="meta_title" class="form-control" id="meta_title">
            </div>
            <div class="form-group">
              <label for="meta_tag">Meta Tag:</label>
              <input type="text" name="meta_tag" class="form-control" id="meta_tag">
            </div>
            <div class="form-group">
              <label for="meta_description">Meta Desceiption:</label>
              <input type="text" name="meta_description" class="form-control" id="meta_description">
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