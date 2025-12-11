@extends('layouts.master')
@section('title')
Dashboard ACR__Helper
@endsection
@section('content') 
<div class="row">
   <div class="col-md-12">
      <div class="card">
         <div class="card-header redbg">
            <div class="row">
               <div class="col-md-6 ">
                  <h4 class="card-title ">List of Project</h4>
               </div>
               <div class="col-md-6 ">
                  <h4 class="card-title text-right "><a href="{{route('project-create')}}" class="btn btn-primary">Add New Project</a></h4>
               </div>
            </div>
         </div>
         <div class="card-body redbg">
            <div class="table-responsive ">
               <table class="table mb-0">
                  <thead > 
                     <tr>
                        <th>Name</th>
                        <th>Secret Id</th>
                        <th>Duration</th> 
                        <th>Duration Limit</th>
                        <th>Albums</th>
                        <th>Status</th>
                        <th>Actions </th>
                     </tr>
                  </thead>
                  <tbody >
                     @foreach($results as $key)
                        <tr>
                           <td> {{$key->name}}</td>
                           <td> {{$key->secret_id}}</td>
                           <td> {{$key->duration}}</td>
                           <td> {{$key->duration_limt}}</td> 
                           <td> <a href="{{route('file-list',$key->id)}}">{{count($key->albums)}}</a></td> 
                           <td> {{$key->status}}</td> 
                           <td> 
                              <a href="{{route('project-edit',$key->id)}}" class="py-2 px-3 badge btn-primary" >Edit </a>
                              <a href="{{route('project-delete',$key->id)}}"  class="py-2 px-3 badge btn-danger"  >Delete </a>
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