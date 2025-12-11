@extends('layouts.usermaster')
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
        <div class="col-md-12" style="border-bottom:solid">
            <h4 class="card-title"> Create Album</h4>
        </div>
    </div>
    </div> 
    <br>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row redbg">
                        <div class="col-md-12 ">
                            <h4>Album Form</h4>
                        </div><br>
                        <br>
                        <p>(Put Your Music into Premium, YouTube's Subscription Service, and Earn Streaming Revenue)
                            *required fields.</p>
                    </div>
                </div>
                <div class="card-body redbg">
                    <div class="row">
                        <div class="table-responsive">
                            <form action="{{ route('album-store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="album_title">Album Title:</label>
                                    <input type="text" name="album_title" class="form-control" id="album_title"
                                        style="border-radius: 1.5rem">
                                </div>
                                <div class="form-group">
                                    <label for="album_artist">Album Artist:</label>
                                    <input type="text" name="album_artist" class="form-control" id="album_artist"
                                        style="border-radius: 1.5rem">
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="date">Date:</label>
                                            <input type="text" name="date" class="form-control" id="date"
                                                style="border-radius: 1.5rem">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="genre">Genre:</label>
                                    <select class="form-control" id="selectUser" name="genre" required focus
                                        style="border-radius: 1.5rem">
                                        <option value="" disabled selected>Please select genre</option>
                                        @foreach ($generies as $genre)
                                            <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="label">Label:</label>
                                    <input type="text" name="label" class="form-control" id="label"
                                        style="border-radius: 1.5rem">
                                </div>

                                <div class="form-group">
                                    <label for="publisher">Publisher:</label>
                                    <input type="text" name="publisher" class="form-control" id="publisher"
                                        style="border-radius: 1.5rem">
                                </div>
                                <div class="form-group">
                                    <label for="upc">UPC:</label>
                                    <input type="text" name="upc" class="form-control" id="upc"
                                        style="border-radius: 1.5rem">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="c_name">Contributer Name:</label>
                                            <input type="text" name="c_name" class="form-control" id="c_name"
                                                style="border-radius: 1.5rem">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="c_role">Contributer Role:</label>
                                            <input type="text" name="c_role" class="form-control" id="c_role"
                                                style="border-radius: 1.5rem">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary" style="border-radius: 1.5rem">Save
                                            Changes</button>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 ">
            <div class="card redbg">
                <div class="card-header">
                    <div class="row redbg">
                        <div class="col-md-12">
                            <h4 class="card-title">Album Cover</h4>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="table-responsive">
                            <div class="form-group">
                                <input type="file" name="image" accept=".jpg, .jpeg" required class="form-control"
                                    id="image">
                            </div>
                            <h5>See Spaces:</h5>
                            <ul>
                                <li>Square Ratio Only</li>
                                <li>jpg Format Only</li>
                                <li>At Least 1400 X 1400</li>
                                <li>At Least 300 Dpi</li>
                            </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        var _URL = window.URL || window.webkitURL;
        $("#image").change(function(e) {
            var file, img;
            if ((file = this.files[0])) {
                img = new Image();
                var objectUrl = _URL.createObjectURL(file);
                img.onload = function() {
                    if ((this.width < 1400 && this.height < 1400)) {
                        alert("At Least 1400 X 1400");
                        $("#image").val('');
                    }


                    _URL.revokeObjectURL(objectUrl);
                };
                img.src = objectUrl;
            }
        });
    </script>
@endsection
