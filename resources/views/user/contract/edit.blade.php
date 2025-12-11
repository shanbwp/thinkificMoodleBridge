@extends('layouts.usermaster')
@section('title') Contract @endsection
@section('content')

<div class="row">
    <div class="col-md-12" style="border-bottom:solid">
        <h4 class="card-title"> User Contract</h4>
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
                      <h3>Contract Information</h3>
                    </div> 
                     <div class="col-md-3 text-center">
                        <!-- <a href="{{route('user-contract-list')}}"> <button type="button" class="btn btn-success" style="border-radius: 1.5rem" >List </button>  </a> -->
                     </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="table-responsive">
                        <form action="{{route('user-contract-update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row"> 
                                <div class="form-check col-md-2">
                                    <label class="form-check-label" for="radio1"> Is Accepted:</label>
                                </div>
                                <div class="form-check col-md-2">
                                    <input type="radio" class="form-check-input"  id="active" name="is_accept" value="1" {{$data->is_accept=='1'?'checked':''}} >
                                    <label class="form-check-label" for="active">Agreed</label>
                                </div>
                                <div class="form-check col-md-2">
                                    <input type="radio" class="form-check-input "  id="inactive" name="is_accept" value="0" {{$data->is_accept=='0'?'checked':''}}>
                                    <label class="form-check-label" for="inactive">Not Agreed</label>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                              <div class="form-group col-md-6">
                                  <label for="percentage">Percentage :</label>
                                  <input type="number" min="0"  max="100" readonly name="percentage" class="form-control" id="percentage" value="{{$data->percentage}}" style="border-radius: 1.5rem">
                              </div> 
                            </div> 
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="policy">policy :</label>
                                    <textarea type="text" name="policy" readonly class="form-control" id="policy"> {{$data->policy}}</textarea>
                                </div> 
                            </div>
                             
                            <br>
                            <div class="row">
                                <div class="col-lg-12 p-4 text-center">
                                    <button type="submit" class="btn btn-primary" id="btn_save" style="border-radius: 1.5rem">Save  Changes</button>
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
  
        $('input[type=radio][name=is_accept]').change(function() {
            if (this.value == '1') {
                // $("#elementID").removeAttr('disabled');
                $('#btn_save').show();
            }else if (this.value == '0') {
                $('#btn_save').hide();
            }
        });
 
    });
</script>
@endsection