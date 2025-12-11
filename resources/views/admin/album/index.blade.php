@extends('layouts.master')
@section('title') Dashboard ACR__Helper @endsection
@section('content') 
<div class="row"> 
    <div class="col-md-6 ">
        <h4 class="card-title ">List of File</h4>
    </div>
    <div class="col-md-6 ">
        <h4 class="card-title text-right "><a href="{{route('file-create')}}" class="btn btn-primary">Add New File</a></h4>
    </div> 
</div>
<div class="row">
    <div class="col-md-12  ">
        <div class="card  ">
            <div class="card-header"> 
                <div class="card-body redbg">
                    <div class="table-responsive">
                        <table class="table mb-0" id="tableId">
                            <thead>
                                <tr>
                                    <th> Project Name</th>
                                    <th> Source Id</th>
                                    <th> File Name</th>
                                    <th> File Segments</th>
                                    <th> Duration</th> 
                                    <th> Status</th>
                                    <th> Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($results as $key)
                                <tr> 
                                    <td> {{$key->project->name}} </td>
                                    <td> {{$key->source_id}} </td>
                                    <td> {{$key->file}}  </td>
                                    <td> <a href="{{route('file-segment-list',$key->id)}}" >{{count($key->segmants)}}</a> </td>
                                    <td> <span id="{{$key->id}}" class="duration" onclick="getDuration('{{asset("assets/files/".$key->file)}}',{{$key->id}})"></span>  </td>
                                    <td> {{ $key->status }} </td>
                                    <td> 
                                        <a href="{{route('file-edit',$key->id)}}" class="py-2 px-3 ">Edit </a>   
                                        <a href="{{route('file-delete',$key->id)}}" class="py-2 px-3">Delete </a> 
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    @section('scripts')
    <script>
    function getDuration(voice, id) {
        //  alert(voice);
        var au = document.createElement('audio');
        // var ausrc =  {{asset('assets/images/track')}}/+voice;
        au.src = "" + voice;
        au.addEventListener('loadedmetadata', function() {
            var duration = au.duration;
            console.log("The duration of the song is of: " + duration + " seconds");
            $("#" + id).text(parseInt(duration) + "seconds"); 
        }, false);
    }


    $(document).ready(function() {
        $(function() {
            setTimeout(function() {
                console.log('yess');
                $(".duration").click();
            }, 5000);
        });
    });
    </script>
  @endsection