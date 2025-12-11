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
   <h4 class="card-title" style="border-bottom-style: solid">Pending Submissions</h4>
   </div>
</div>
<div class="row">
   <div class="col-md-12">
      <div class="card redbg">
         <div class="card-header redbg">
            <div class="row">
               <div class="col-md-3">
               <a class="block sm:inline-block ml-4 mb-4 py-2 px-6 text-center tracking-wide text-white bg-primary font-light hover:bg-secondary focus:bg-secondary transition-colors" href="/tracks/downloadTracksData">
                    Download Data Template.csv
                </a>
               </div>
               <div class="col-md-3">
               <a class="block sm:inline-block ml-4 mb-4 py-2 px-6 text-center tracking-wide text-white bg-primary font-light hover:bg-secondary focus:bg-secondary transition-colors" href="/tracks/downloadTracksData">
                    Download  Raw Data.csv
                </a>
            </div>
            <div class="col-md-3">
               <a class="block sm:inline-block ml-4 mb-4 py-2 px-6 text-center tracking-wide text-white bg-primary font-light hover:bg-secondary focus:bg-secondary transition-colors" href="/tracks/downloadTracksData">
                    Upload Data.csv
                </a>
         </div>
         <div class="col-md-3">
               <a class="block sm:inline-block ml-4 mb-4 py-2 px-6 text-center tracking-wide text-white bg-primary font-light hover:bg-secondary focus:bg-secondary transition-colors" href="/tracks/downloadTracksData">
                   Missing Info
                </a>
</div>
</div>

         <div class="card-body">
            <div class="table-responsive">
               <table class="table mb-0">
                  <thead>
                     <tr>
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
                        <td> {{$key->title}}</td>
                        <td> {{$key->status}}</td>
                        <td> {{$key->description}}</td>
                        <td><img src="{{asset('assets/images/resume/' . $key->image)}}" hieght="50px" width="50px" alt="image"></td>
                        <td> <a href="{{route('resume-edit',$key->id)}}" class="py-2 px-3 badge btn-primary" >Edit </a></td>
</td><a href="{{route('resume-delete',$key->id)}}"  class="py-2 px-3 badge btn-danger"  >Delete </a>
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