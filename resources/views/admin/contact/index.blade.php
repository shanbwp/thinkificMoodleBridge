@extends('layouts.master')
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
      <div class="card redbg">
         <div class="card-header redbg">
            <div class="row">
               <div class="col-md-6 ">
                  <h4 class="card-title">List of All Contacts</h4>
               </div> 
            </div>
         </div>
         <div class="card-body">
            <div class="table-responsive">
               <table class="table mb-0">
                  <thead>
                     <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Actions </th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($results as $key)
                     <tr>
                        <td> {{$key->name}}</td>
                        <td> {{$key->email}}</td>
                        <td> {{$key->phone}}</td>
                        <td> {{$key->subject}}</td>
                        <td> {{$key->message}}</td>
                       
                        <td> <a href="{{route('contact-edit',$key->id)}}" class="py-2 px-3 badge btn-primary" >Edit </a>
                           <a href="{{route('contact-delete',$key->id)}}"  class="py-2 px-3 badge btn-danger"  >Delete </a>
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