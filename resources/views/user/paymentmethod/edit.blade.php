@extends('layouts.usermaster')
@section('title') Add Payout Preferences @endsection
@section('content')

<div class="row">
    <div class="col-md-12" style="border-bottom:solid">
        <h4 class="card-title"> Payment Method </h4>
    </div>
</div>
</div>
<br>
<div class="row">
    <div class="col-md-12">
        <div class="card redbg">
            <div class="card-header redbg">
            <div class="row"> 
                    <div class="col-md-9 text-left">
                      <h3>General Information</h3>
                    </div> 
                     <div class="col-md-3 text-center">
                        <a href="{{route('user-payout-preference-list')}}"> <button type="button" class="btn btn-success" style="border-radius: 1.5rem" >List </button>  </a>
                     </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="table-responsive">
                        <form action="{{route('user-payout-preference-update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-check col-md-2">
                                    <label class="form-check-label" for="radio1"> Account Type</label>
                                </div>
                                <div class="form-check col-md-2">
                                    <input type="radio" class="form-check-input " id="individual" name="account_type" value="individual" {{$data->account_type=='individual'?'checked':''}} >
                                    <label class="form-check-label" for="individual">Individual</label>
                                </div>
                                <div class="form-check col-md-2">
                                    <input type="radio" class="form-check-input "  id="business" name="account_type"
                                        value="business" {{$data->account_type=='business'?'checked':''}}>
                                    <label class="form-check-label" for="business">Business</label>
                                </div>
                                <div class="form-check col-md-2">
                                    <label class="form-check-label" for="radio1"> Status:</label>
                                </div>
                                <div class="form-check col-md-2">
                                    <input type="radio" class="form-check-input " id="active" name="status" value="1" {{$data->status=='1'?'checked':''}} >
                                    <label class="form-check-label" for="active">Active</label>
                                </div>
                                <div class="form-check col-md-2">
                                    <input type="radio" class="form-check-input "  id="inactive" name="status" value="0" {{$data->status=='0'?'checked':''}}>
                                    <label class="form-check-label" for="inactive">InActive</label>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                              <div class="form-group col-md-6">
                                  <label for="fname">First Name:</label>
                                  <input type="text" name="fname" class="form-control" id="fname" value="{{$data->fname}}" style="border-radius: 1.5rem">
                              </div>
                              <div class="form-group col-md-6">
                                  <label for="lname">Last Name:</label>
                                  <input type="text" name="lname" class="form-control" id="lname" value="{{$data->lname}}" style="border-radius: 1.5rem">
                              </div>
                            </div>
                            <div class="row">
                              <div class="form-group col-md-6">
                                  <label for="email">Email:</label>
                                  <input type="email" name="email" readonly class="form-control" id="email" value="{{$data->email}}" style="border-radius: 1.5rem">
                              </div>
                              <div class="form-group col-md-6" id="account_type_indi" style=" display:{{$data->account_type=='business'?'none':''}}">
                                  <label for="dob">Date of Birth:</label>
                                  <input type="date" name="dob" class="form-control" id="dob" value="{{$data->dob}}" style="border-radius: 1.5rem">
                              </div>
                              <div class="form-group col-md-6" id="account_type_busi" style=" display:{{$data->account_type=='individual'?'none':''}}">
                                  <label for="bname">Business Name:</label>
                                  <input type="text" name="bname" class="form-control" id="bname" value="{{$data->bname}}" style="border-radius: 1.5rem">
                              </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="country">Country :</label>
                                    <input type="text" name="country"  class="form-control" id="country" value="{{$data->country}}" style="border-radius: 1.5rem">
                                </div> 
                            </div>
                            
                            <div class="row">
                              <div class="form-group col-md-6 ">
                                  <label for="address">Address:</label>
                                  <input type="text" name="address"   class="form-control" value="{{$data->address}}" id="address" style="border-radius: 1.5rem">
                              </div> 
                              <div class="form-group col-md-6 ">
                                  <label for="address2">Address2:</label>
                                  <input type="text" name="address2"   class="form-control" id="address2" value="{{$data->address2}}" style="border-radius: 1.5rem">
                              </div> 
                            </div>
                            
                            <div class="row">
                              <div class="form-group col-md-6">
                                  <label for="city">City:</label>
                                  <input type="text" name="city"   class="form-control" id="city" value="{{$data->city}}" style="border-radius: 1.5rem">
                              </div> 
                              <div class="form-group col-md-3 ">
                                  <label for="state">State:</label>
                                  <input type="text" name="state"   class="form-control" id="state" value="{{$data->state}}" style="border-radius: 1.5rem">
                              </div> 
                              <div class="form-group col-md-3 ">
                                  <label for="zip_code">Zip Code:</label>
                                  <input type="text" name="zip_code"   class="form-control" id="zip_code" value="{{$data->zip_code}}" style="border-radius: 1.5rem">
                              </div> 
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-check col-md-2">
                                    <label class="form-check-label" for="bank"> Bank Type</label>
                                </div>
                                <div class="form-check col-md-2">
                                    <input type="radio" class="form-check-input " id="bank" name="bank_type" {{$data->bank_type=='bank'?'checked':''}} value="bank" checked>
                                    <label class="form-check-label" for="bank">Bank</label>
                                </div>
                                <div class="form-check col-md-2">
                                    <input type="radio" class="form-check-input " id="paypal" name="bank_type" {{$data->bank_type=='paypal'?'checked':''}} value="paypal">
                                    <label class="form-check-label" for="paypal">paypal</label>
                                </div>
                            </div>
                            <br>
                            <div class="row" id="bank_type_bank" style=" display:{{$data->bank_type=='paypal'?'none':''}}">
                              <div class="form-group col-md-6">
                                  <label for="routing_number">Routing Number:</label>
                                  <input type="text" name="routing_number"   class="form-control" id="routing_number" value="{{$data->routing_number}}"  style="border-radius: 1.5rem">
                              </div> 
                              <div class="form-group col-md-3 ">
                                  <label for="account_number">Account Number:</label>
                                  <input type="text" name="account_number"   class="form-control" id="account_number" value="{{$data->account_number}}"  style="border-radius: 1.5rem">
                              </div> 
                              <div class="form-group col-md-3 ">
                                  <label for="account_title">Name of Account Holder (as shown on bank statement):</label>
                                  <input type="text" name="account_title"   class="form-control" id="account_title" value="{{$data->account_title}}" style="border-radius: 1.5rem">
                              </div> 
                            </div>
                            <br>
                            <div class="row" id="bank_type_paypal" style=" display:{{$data->bank_type=='bank'?'none':''}}">
                              <div class="form-group col-md-6 ">
                                  <label for="paypal_email">Email address of your existing PayPal Account:</label>
                                  <input type="text" name="paypal_email"   class="form-control" id="paypal_email" value="{{$data->paypal_email}}"  style="border-radius: 1.5rem">
                              </div> 
                              <div class="form-group col-md-6 ">
                                  <label for="paypal_email_confirm">Confirm the email address of your existing PayPal Account:</label>
                                  <input type="text" name="paypal_email_confirm"   class="form-control" id="paypal_email_confirm"   style="border-radius: 1.5rem">
                              </div> 
                            </div> 
                            <br>
                            <div class="row">
                                <div class="col-lg-12 p-4 text-center">
                                    <button type="submit" class="btn btn-primary" style="border-radius: 1.5rem">Save  Changes</button>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function(){
  
        $('input[type=radio][name=account_type]').change(function() {
            if (this.value == 'individual') {
                $('#account_type_indi').show();
                $('#account_type_busi').hide();
            }else if (this.value == 'business') {
                $('#account_type_indi').hide();
                $('#account_type_busi').show();
            }
        });

        $('input[type=radio][name=bank_type]').change(function() {
            if (this.value == 'bank') { 
                $('#bank_type_bank').show();
                $('#bank_type_paypal').hide();
            }else if (this.value == 'paypal') {
                
                $('#bank_type_bank').hide();
                $('#bank_type_paypal').show();
            }
        });
  
    });
</script>
@endsection