@extends('layouts.master')

@section('title')
Dashboard musyc
@endsection
@section('content') 
<div class="row">
          <div class="col-md-12">
            <div class="card redbg">
            <div class="card-header redbg">
            <div class="row">
        <div class="col-md-6"> <h4 class="card-title">User Detail</h4></div>
        <div class="col-md-6 "> <h4 class="card-title text-right "> 
       
              </div>  
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <form action="#" method="post" enctype="multipart/form-data">
                   @csrf
                    <div class="form-group">
                    <label for="fname">F-Name:</label>
                    <input type="text"  name="fname" value="{{$data->fname}}" class="form-control" id="fname">
                    </div>
                    <div class="form-group">
                    <label for="lname">L-Name:</label>
                    <input type="text"  name="lname" value="{{$data->lname}}" class="form-control" id="lname">
                    </div>
                  
                  
                    <div class="form-group">
                    
                    <img src="{{asset('assets/images/user/' . $data->image)}}" hieght="50px" width="50px" alt="image">
                    </div>
                    <div class="form-group">
                  
                    <img src="{{asset('assets/images/user/' . $data->nic_image)}}" hieght="50px" width="50px" alt="image">
                    </div>
                    <div class="form-group">
                    <label for="p_name">phone:</label>
                    <input type="text" name="p_name" value="{{$data->p_name}}" class="form-control" id="p_name">
                    </div>
                    <div class="form-group">
                    <label for="email">email:</label>
                    <input type="email" name="email" value="{{$data->email}}"  class="form-control" id="email">
                    </div>
                    <div class="form-group">
                    <label for="Address">Address:</label>
                    <input type="text" name="Address" value="{{$data->Address}}"  class="form-control" id="Address">
</div>
                    <div class="form-group">
                    <label for="payment_method">Payment Method:</label>
                    <select  name="payment_method" class="form-control">
                           <option value="pending" {{$data->payment_method==='jazzcash'?'selected':''}}>JazzCash</option>
                           <option value="verified" {{$data->payment_method==='easypysa'?'selected':''}}> EasyPysa</option>
                           <option value="non_verified" {{$data->payment_method==='bank'?'selected':''}}> Bank</option>
                        </select>
                    </div>
                    <div class="form-group">
                    <label for="city">city:</label>
                    <input type="text" name="city"  value="{{$data->city}}" class="form-control" id="city">
                    </div>
                    <div class="form-group">
                    <label for="eligliblity">Eligiblity:</label>
                    <select name="eligible" value="{{$data->eligible}}" class="form-control">
                       <option value="yes" {{$data->eligible==='yes'?'selected':''}}>Yes</option>
                       <option  value="no" {{$data->eligible==='no'?'selected':''}}>No</option>
</select>
</div>
<div class="form-group">
<label for="status">Status:</label>
                    <select name="status" value="{{$data->status}}" class="form-control">
                       <option value="pending" {{$data->status==='pending'?'selected':''}}>pending</option>
                       <option value="verified" {{$data->status==='verified'?'selected':''}}>verified</option>
                       <option value="non_verified" {{$data->status==='non-verified'?'selected':''}}>non-verified</option>
</select>
                    </div>
                    <div class="form-group">
                    <label for="note">Note:</label>
                    <input type="text" name="note"  value="{{$data->note}}" class="form-control" id="note">
                    </div>
                    <div class="form-group">
                    <label for="cause">cause:</label>
                    <input type="text" name="cause" value="{{$data->cause}}" class="form-control" id="cause">
                    </div>

                    <div class="form-group">
                    <label for="request_note">Request_note:</label>
                    <textarea type="text" name="request_note" value="{{$data->request_note}}" class="form-control" id="request_note"></textarea>
                    </div>
                   
                   
                    </form>
                </div>
              </div>
            </div>
          </div>
         
          </div>
        </div>

@endsection 