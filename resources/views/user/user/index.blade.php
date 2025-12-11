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
               <div class="col-md-6 ">
                  <h4 class="card-title">List of All Users</h4>
               </div>
               <div class="col-md-6 ">
                  <h4 class="card-title text-right "><a href="{{route('user-create')}}" class="btn btn-primary">Add New User</a></h4>
               </div>
            </div>
         </div>
         <div class="card-body">
            <div class="table-responsive">
               <table class="table mb-0">
                  <thead>
                     <tr>
                        <th>Group ID</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Phone </th>
                        <th>Email </th>
                        <th>Address</th>
                        <th>Payment </th>
                        <th>Actions </th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($results as $key)
                     <tr>
                        <td> {{$key->group_id}}</td>
                        <td> {{$key->name}}</td>
                        <td><img src="{{asset('assets/images/user/' . $key->image)}}" hieght="50px" width="50px" alt="image"></td>
                        <td> {{$key->phone}}</td>
                        <td> {{$key->email}}</td>
                        <td> {{$key->Address}}</td>
                        <td> {{$key->payment}}</td>
                        
                        <td> <a href="{{route('user-edit',$key->id)}}" class="py-2 px-3 badge btn-primary" >Edit </a>
                           <a href="{{route('user-delete',$key->id)}}" class="py-2 px-3 badge btn-danger">Delete </a>
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