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
                                <a href="{{ route('blog-list') }}" class="btn btn-primary">List of Blog</a>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="card-body redbg">
                    <div class="table-responsive">
                        <form action="{{ route('acrTest') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="image">Image:</label>
                                <input type="file" name="audio" class="form-control" id="image">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
