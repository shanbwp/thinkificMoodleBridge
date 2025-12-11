@extends('layouts.usermaster')
@section('title')
Dashboard ACR__Helper
@endsection
@section('content')
<div class="row">
   <div class="col-md-12">
      <h4 class="card-title" style="border-bottom-style: solid">Submitted Requests</h4>
   </div>
</div>
<div class="row">
   <div class="col-md-12">
      <div class="card card-black" style="background-color: black;">
         <div class="card-header">
         </div>

         <div class="card-body">
            <div class="table-responsive">
               <table class="table mb-0" id="tableId">
                  <thead>
                     <tr>
                        <th> YouTube_Url</th>
                        <th>Start_Time</th>
                        <th>End_Time</th>
                        <th>status</th>
                        <th>Actions</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($results as $key)
                     <tr>
                        <td> {{$key->youtube_url}}</td>
                        <!-- <td> {{$key->genre==null?'Missing Info':'complete'}}</td> -->
                        <td> {{$key->start_time}}</td>
                        <td> {{$key->end_time}}</td>
                        <td>{{$key->status==0?'Pending':($key->status==1?'Approved':'Decline')}}</td>
                        <td> <a href="{{route('claim-edit',$key->id)}}" class="py-2 px-3 ">Edit </a>
                           <a href="{{route('claim-delete',$key->id)}}" class="py-2 px-3">Delete </a>
                           <a href="{{route('claim-detail',$key->id)}}" class="py-2 px-3">Detail </a>
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
@endsection