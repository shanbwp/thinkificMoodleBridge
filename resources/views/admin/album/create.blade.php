@extends('layouts.master')
@section('title') Dashboard ACR__Helper @endsection
@section('content') 
<div class="row"> 
    <div class="col-md-12">
        <div class="card redbg">
            <div class="card-header redbg">
                <div class="row"> 
                    <div class="col-md-6 ">
                        <h4 class="card-title ">List of File</h4>
                    </div>
                    <div class="col-md-6 ">
                        <h4 class="card-title text-right "><a href="{{route('file-list')}}" class="btn btn-primary">File List</a></h4>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <form action="{{route('file-store')}}" method="post" enctype='multipart/form-data'>
                        @csrf
                        <div class="form-group">
                            <label for="source_id">Source id:</label>
                            <input type="text" name="source_id"  class="form-control" id="source_id">
                        </div> 
                        <div class="form-group">
                            <label for="project_id">Project:</label>
                            <select class="form-control" id="selectUser" name="project_id" required >
                                <option value="" disabled selected>Please select Project</option>
                                @foreach($projects as $project)
                                <option value="{{$project->id}}"> {{$project->name }}</option>
                                @endforeach
                            </select>
                        </div> 
                        <div class="form-group">
                            <label for="file">file:</label>
                            <input type="file" name="file"  class="form-control" id="file">
                        </div>  
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection 