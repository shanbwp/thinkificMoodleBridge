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
            <h4 class="card-title"> Edit Blog</h4>
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
          <form action="{{route('blog-update',['id'=>$data->id])}}" method="post" enctype='multipart/form-data'>
            @csrf
            <div class="form-group">
              <label for="title1">Blog Title:</label>
              <input type="text" name="name" value="{{$data->name}}" class="form-control" id="name">
            </div>
            <div class="form-group">
              <label for="date">Date:</label>
              <input type="text" name="date" value="{{$data->date}}" class="form-control" id="date">
            </div>
            <div class="form-group">
              <label for="country">Create BY:</label>
              <input type="text" name="country" value="{{$data->country}}" class="form-control" id="country">
            </div>
            <div class="form-group">
              <label for="description">Blog Content:</label>
              <textarea name="description" class="form-control ckeditor" id="description">{!!$data->description!!}</textarea> 
             
            </div>
            <div class="form-group">
              <label for="image">Image:</label>
              <input type="file" name="image"class="form-control" id="image">
              <img src="{{asset('assets/images/blog/' . $data->image)}}" hieght="50px" width="50px" alt="image">
            </div>
            <div class="form-group">
              <label for="img_alt">Image Alt:</label>
              <input type="text" name="img_alt" value="{{$data->img_alt}}" class="form-control" id="img_alt">
            </div>
            <div class="form-group">
              <label for="slug">Slug:</label>
              <input type="text" name="slug" value="{{$data->slug}}" class="form-control" id="slug">
            </div>
            <div class="form-group">
              <label for="meta_title">Meta Title:</label>
              <input type="text" name="meta_title" value="{{$data->meta_title}}" class="form-control" id="meta_title">
            </div>
            <div class="form-group">
              <label for="meta_tag">Meta Tag:</label>
              <input type="text" name="meta_tag" value="{{$data->meta_tag}}" class="form-control" id="meta_tag">
            </div>
            <div class="form-group">
              <label for="meta_description">Meta Desceiption:</label>
              <input type="text" name="meta_description" value="{{$data->meta_description}}" class="form-control" id="meta_description">
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