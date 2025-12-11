@extends('layouts.master') 
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
   <div class="col-md-12 text-center">
      <h4 class="card-title"> Update Seo Settings</h4>
   </div> 
</div>
<div class="card-body">
   <div class="table-responsive">
      <form action="{{route('setting-seo-update')}}" method="post" enctype='multipart/form-data'>
         @csrf 
               <div class="form-group">
                  <label for="m_tag">M-Tag:</label>
                  <input type="text" name="meta_tag" value="{{$data->meta_tag}}" class="form-control" id="m_tag">
               </div>  
                     <div class="form-group">
                        <label for="m_title">M-Title:</label>
                        <input type="text" name="meta_title" value="{{$data->meta_title}}" class="form-control" id="m_title">
                     </div>
                     <div class="form-group">
                        <label for="m_description">M-Description:</label>
                        <input type="text" name="meta_description" value="{{$data->meta_description}}" class="form-control" id="m_description">
                     </div>
                     <div class="form-group">
                        <label for="footer_text">Footer-Text:</label>
                        <input type="text" name="footer_text" value="{{$data->footer_text}}" class="form-control" id="footer_text">
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