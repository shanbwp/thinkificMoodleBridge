@extends('layouts.master')
@section('title') User List  @endsection
@section('content') 
<div class="row">
   <div class="col-md-12">
      <div class="card">
         <div class="card-header redbg ">
            <div class="row">
               <div class="col-md-6 ">
                  <h4 class="card-title">List of All Users</h4>
               </div>
               <div class="col-md-6 ">
                  <h4 class="card-title text-right "><a href="{{route('user-create')}}" class="btn btn-primary">Add New User</a></h4>
               </div>
            </div>
         </div>
         <div class="card-body redbg">
            <div class="table-responsive">
               <table class="table mb-0" id="tableId">
                  <thead> 
                     <tr> 
                        <th>Actions </th>
                        <th>Name</th>  
                        <th>Image</th>
                        <th>Phone </th>
                        <th>Email </th>  
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($results as $key)
                     <tr> 
                        <td> 
                           <a href="{{route('project-list',$key->id)}}" class="py-2 px-3 badge btn-primary" >Project </a> 
                           <a href="{{route('user-edit',$key->id)}}" class="py-2 px-3 badge btn-primary" >Edit </a>
                            <a href="{{route('user-delete',$key->id)}}" class="py-2 px-3 badge btn-danger">Delete </a>
                        </td>
                        <td> {{$key->name}}</td>  
                        <td><img src="{{asset('assets/images/user/' . $key->image)}}" hieght="50px" width="50px" alt="image"></td>
                        <td> {{$key->phone}}</td>
                        <td class="text-overflow: ellipsis;"> {{$key->email}}</td>  
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