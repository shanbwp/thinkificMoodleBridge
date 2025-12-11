@extends('layouts.master')
@section('title') Dashboard ACR__Helper @endsection
@section('content') 
<div class="row">
    <div class="col-md-12">
        <h4 class="card-title" style="border-bottom-style: solid">File Segments </h4>
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
                                    <th> Album Id</th>
                                    <th> File Name</th>
                                    <th> Time line</th>
                                    <th> Status</th>
                                    <th> Result</th>
                                    <th> Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($results as $key)
                                <tr> 
                                    <td> {{$key->album->project->name}}</td>
                                    <td> {{$key->album->source_id}}</td>
                                    <td> {{$key->segment_id}}</td> 
                                    <td> start ={{$key->start}}---{{$key->start+$key->duration}}</td> 
                                    <td> {{$key->status}}</td>  
                                    <td> {{$key->result}}</td>  
                                    <td>
                                         <a href="{{route('file-segment-verify',$key->id)}}" class="py-2 px-3">request to verify  </a>  
                                         <a href="{{route('file-segment-delete',['album_id'=>$key->album_id,'id'=>$key->id])}}" class="py-2 px-3">Delete </a> 
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