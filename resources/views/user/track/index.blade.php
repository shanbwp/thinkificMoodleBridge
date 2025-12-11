@extends('layouts.usermaster')
@section('title') Dashboard ACR__Helper @endsection
@section('content') 
<div class="row">
    <div class="col-md-12">
        <h4 class="card-title" style="border-bottom-style: solid">Pending Submissions</h4>
    </div>
</div>
<div class="row">
    <div class="col-md-12  ">
        <div class="card redbg ">
            <div class="card-header redbg">
                <div class="row">

                    <div class="col-md-2 text-right">
                        <a href="">
                            <button type="button" class="btn btn-primary" style="border-radius: 1.5rem">Missing
                                Info</button>
                        </a>
                    </div>
                    <div class="col-md-3 text-left">
                        <a href="">
                            <button type="button" class="btn btn-primary" style="border-radius: 1.5rem" onclick="deleteAll()">Delete Selected
                                Files</button>
                        </a>
                    </div>
                    <div class="col-md-3 text-right">
                        <a href="">
                            <button type="button" class="btn btn-primary" style="border-radius: 1.5rem" onclick="submitAll()">Submitted Selected Files</button>
                        </a>
                    </div> 
                </div>
                <br><br>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table mb-0" id="tableId">
                            <thead>
                                <tr>
                                    <th> <input type="checkbox" id="checkAll" value="something"></th>
                                    <th> File Name</th>
                                    <th>Status</th>
                                    <th>Duration</th>
                                    <th>Edit</th>
                                    <th>Delete</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($results as $key)
                                <tr>
                                    <td><input type="checkbox" name="selectedTrack1" class="selectedTrack" value="{{$key->id}}"></td>
                                    <td> {{$key->voice}}</td>
                                    <td> {{$key->genre==null?'Missing Info':'complete'}}</td>
                                    <td> {{$key->description}} <span id="{{$key->id}}" class="duration" onclick="getDuration('{{asset("assets/images/track/".$key->voice)}}','{{$key->id}}')"></span>
                                    </td>
                                    <td> <a href="{{route('track-edit',$key->id)}}" class="py-2 px-3 ">Edit </a></td>
                                    <td><a href="{{route('track-delete',$key->id)}}" class="py-2 px-3">Delete </a>
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
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

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

    function submitAll() {
        var trackIds = [];
        $.each($("input[name='selectedTrack1']:checked"), function() {
            trackIds.push($(this).val());
        }); 

        $.ajax({
            type: 'POST',
            url: "{{ route('ajax-selected-track-submit') }}",
            data: {
                trackIds: trackIds
            },
            success: function(data) {
                //alert(data.success);
            }
        });

    }

    
    function deleteAll() {
        var trackIds = [];
        $.each($("input[name='selectedTrack1']:checked"), function() {
            trackIds.push($(this).val());
        }); 

        $.ajax({
            type: 'POST',
            url: "{{ route('ajax-selected-track-delete') }}",
            data: {
                trackIds: trackIds
            },
            success: function(data) {
                alert(data.success);
            }
        });

    }

    $('#checkAll').click(function() {
        $('input:checkbox').prop('checked', this.checked);
    });
    </script>
    @endsection