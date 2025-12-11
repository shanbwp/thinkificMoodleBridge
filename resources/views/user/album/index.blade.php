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
        <div class="col-md-12">
            <h4 class="card-title" style="border-bottom-style: solid"> Submitted Data</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div>
                <span class="font-primary">Submitted</span>
                <span>/</span>
                <span href="#" style="font-weight: bold">YouTube Premium</span>
            </div>
        </div>
        <div class="col-md-6">
            <a href="{{ route('album-create') }}"><button type="button" class="btn btn-primary">Create new</button></a>

        </div>
    </div> 
    <div class="card-body redbg">
        <div class="table-responsive">
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th> Album Title</th>
                        <th>Album Artist</th>
                        <th>Date</th>
                        <th>Genre</th>
                        <th>Label</th>
                        <th>Publisher</th>
                        <th>UPC</th>
                        <th>C_Name</th>
                        <th>C_Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($results as $key)
                        <tr>
                            <td> {{ $key->album_title }}</td>
                            <td> {{ $key->album_artist }}</td>
                            <td> {{ $key->date }}</td>
                            <td> {{ $key->genreration->name }}</td>
                            <td> {{ $key->label }}</td>
                            <td> {{ $key->publisher }}</td>
                            <td> {{ $key->upc }}</td>
                            <td> {{ $key->c_name }}</td>
                            <td> {{ $key->c_role }}</td>

                            <td> <a href="{{ route('track-submited-list', $key->id) }}"
                                    class="py-2 px-3 badge btn-primary">Track List </a></td>
                            <!-- <a href="{{ route('track-delete', $key->id) }}"  class="py-2 px-3 badge btn-danger"  >Delete </a>
                            </td> -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div> 
@endsection 
