@extends('layouts.master')
@section('title') Dashboard ACR__Helper @endsection
@section('content')

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="card redbg">
            <div class="card-header redbg">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title"> Edit/YouTube Content ID</h4>
                    </div> 
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <form action="{{route('admin-track-update',['id'=>$data->id])}}" method="post"
                        enctype='multipart/form-data'>
                        @csrf
                        <div class="form-group">
                            <label for="title">Song Title:</label>
                            <input type="text" name="title" value="{{$data->title}}" class="form-control" id="title">
                        </div>
                        <div class="form-group">
                            <label for="artist">Artist:</label>
                            <input type="text" name="artist" value="{{$data->artist}}" class="form-control" id="artist">
                        </div>
                        <div class="form-group">
                            <label for="genre">Genre:</label>
                            <select class="form-control" id="selectUser" name="genre" required focus
                                style="border-radius: 1.5rem">
                                <option value="" disabled selected>Please select genre</option>
                                @foreach($generies as $genre)
                                <option value="{{$genre->id}}" {{$genre->id==$data->genre?'selected':''}}> {{$genre->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="label">label:</label>
                            <input type="text" name="label" value="{{$data->label}}" class="form-control" id="label">
                        </div>
                        <div class="form-group">
                            <label for="album_title">Album Title:</label>
                            <input type="text" name="album_title" value="{{$data->album_title}}" class="form-control"
                                id="album_title">
                        </div>
                        <div class="form-group">
                            <label for="upc">Album Upc:</label>
                            <input type="text" name="upc" value="{{$data->upc}}" class="form-control" id="upc">
                        </div>
                        <div class="form-group">
                            <label for="isrc">isrc:</label>
                            <input type="text" name="isrc" value="{{$data->isrc}}" class="form-control" id="isrc">
                        </div>
                        <div class="form-group">
                            <label for="publishing">Publishing Controlled:</label> 
                            <select class="form-control" id="publishing" name="publishing"  focusstyle="border-radius: 1.5rem">
                                <option value="N"  {{$data->publishing=='N'?'selected':''}}>NO</option> 
                                <option value="Y" {{$data->publishing=='Y'?'selected':''}}> Yes</option> 
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="compos_title">Composition Title:</label>
                            <input type="text" name="compos_title" value="{{$data->compos_title}}" class="form-control"
                                id="compos_title">
                        </div>
                        <div class="form-group">
                            <label for="compos_writter">Writter:</label>
                            <input type="text" name="compos_writter" value="{{$data->compos_writter}}"
                                class="form-control" id="compos_writter">
                        </div>
                        <div class="form-group">
                            <label for="compos_publisher">Publisher:</label>
                            <input type="text" name="compos_publisher" value="{{$data->compos_publisher}}"
                                class="form-control" id="compos_publisher">
                        </div>
                        <div class="form-group">
                            <label for="compos_owner_percentage">Owner Percentage:</label>
                            <input type="number" min="0" max="100" step="0.1" name="compos_owner_percentage"
                                value="{{$data->compos_owner_percentage}}" class="form-control"
                                id="compos_owner_percentage">
                        </div>
                        <div class="form-group">
                            <label for="related_isrc">Related Isrc:</label>
                            <input type="text" name="related_isrc" value="{{$data->related_isrc}}" class="form-control"
                                id="related_isrc">
                        </div>
                        <div class="form-group">
                            <label for="iswc">ISWC:</label>
                            <input type="text" name="iswc" value="{{$data->iswc}}" class="form-control" id="iswc">
                        </div> 
                        <div class="form-group">
                            <label for="ipi_cae">IPO/CAE:</label>
                            <input type="text" name="ipi_cae" value="{{$data->ipi_cae}}" class="form-control"
                                id="ipi_cae">
                        </div>
                        <div class="form-group">
                            <label for="hfa_code">HFA Code:</label>
                            <input type="text" name="hfa_code" value="{{$data->hfa_code}}" class="form-control"
                                id="hfa_code">
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection 