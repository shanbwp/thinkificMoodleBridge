@extends('layouts.usermaster')
@section('title') List Payout Preferences @endsection
@section('content') 
<div class="row">
    <div class="col-md-12">
        <h4 class="card-title" style="border-bottom-style: solid">Payout Preferences</h4>
    </div> 
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card card-black" style="background-color: black;">
            <div class="card-header redbg">
                <div class="row"> 
                    <div class="col-md-9 text-left">
                        <h3> Payout Methods</h3>
                    </div> 
                     <div class="col-md-3 text-center">
                        <a href="{{route('user-payout-preference-create')}}"> <button type="button" class="btn btn-success" style="border-radius: 1.5rem" >Add New</button>  </a>
                     </div>
                </div> 
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0" id="tableId">

                        <tbody>
                            @foreach($results as $key)
                            <tr>
                                <td>
                                     <button type="button" class="btn btn-{{$key->status=='1'?'success':'warning'}}" style="border-radius: 1.5rem" >{{$key->status=='active'?'Active':'Inactive'}} </button>
                                     
                                </td>
                                <td> {{$key->account_type}}</td>
                                <td> {{$key->bank_type}}</td>
                                <td> {{$key->bank_type=='paypal'?$key->paypal_email:$key->account_title}}</td>
                                <td>
                                    <a href="{{route('user-payout-preference-edit',$key->id)}}" class="py-2 px-3 ">Edit  </a>
                                    <a href="{{route('user-payout-preference-delete',$key->id)}}" class="py-2 px-3">Delete </a>
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