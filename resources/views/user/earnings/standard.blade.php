@extends('layouts.usermaster')
@section('title') Dashboard ACR__Helper @endsection
@section('content')

<div class="row">
    <div class="col-md-12">
        <h4 class="card-title" style="border-bottom-style: solid">Standard Earnings</h4>
    </div>
</div>
<div class="row">
    <div class="col-md-12  ">
        <div class="card  ">
            <div class="card-header">
                <form action="{{route('user-earning-standard')}}">
                    <div class="row">
                        <div class="col-md-2">
                            <select class="btn btn-danger form-control select2" style="border-radius: 1.5rem"
                                name="track">
                                <option value="">All Track /Asset</option>
                                @foreach($tracks as $key)
                                <option value="{{$key}}"
                                    {{isset($_GET['track'])?($_GET['track']==$key?'selected':''):''}}>{{$key}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-3">
                            <select class="btn btn-danger form-control select2" style="border-radius: 1.5rem"
                                name="month">
                                <option value="">All Month</option>
                                @foreach($months as $key)
                                <option value="{{$key}}"
                                    {{isset($_GET['month'])?($_GET['month']==$key?'selected':''):''}}>{{$key}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select class="btn btn-danger form-control select2" style="border-radius: 1.5rem"
                                name="country">
                                <option value="">All Countries</option>
                                @foreach($contries as $key)
                                <option value="{{$key}}"
                                    {{isset($_GET['country'])?($_GET['country']==$key?'selected':''):''}}>{{$key}}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-3">
                            <button type="submit" class="btn btn-primary ">Search</button>
                            <a href="{{route('user-earning-standard')}}" class="btn btn-primary"> Clear</a>
                        </div>
                    </div>
                </form>
            </div>

            <div class="card-body redbg">
                <div class="table-responsive">
                    <table class="table mb-0" id="tableId">
                        <thead>
                            <tr>
                                <th>Track Code</th>
                                <th>Asset</th>
                                <th>Artist</th>
                                <th>Lable</th>
                                <th>Asset Type</th>
                                <th>Country</th>
                                <th>Total Views</th>
                                <th>Gross Earnings</th>
                                <th>Net Earning Payable</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $tge=0 ; $tne=0;?>
                            @foreach($results as $key)
                            <tr>
                                <td> {{$key->track_code}}</td>
                                <td> {{$key->asset}}</td>
                                <td> {{$key->artist}}</td>
                                <td> {{$key->label}}</td>
                                <td> {{$key->type}}</td>
                                <td> {{$key->country}}</td>
                                <td> {{$key->views}}</td>
                                <td> ${{$key->net_earning}}</td>
                                <td> ${{$key->user_net_earning}}</td>
                            </tr>
                            <?php $tge=$tge+$key->net_earning ; $tne=$tne+$key->user_net_earning;?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card  ">
            <div class="card-header redbg">
                <h3 class="text-center"> Total Gross Earnings</h3>
            </div>
            <div class="card-body redbg">
                <div class="table-responsive text-center">
                    <h3>${{$tge}} </h3>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card  ">
            <div class="card-header redbg">
                <h3 class="text-center"> Total Net Earnings</h3>
            </div>
            <div class="card-body redbg">
                <div class="table-responsive text-center">
                    <h3>${{$tne}} </h3>
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
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function submitAll() {
    var trackIds = [];
    $.each($("input[name='selectedTrack1']:checked"), function() {
        trackIds.push($(this).val());
    });

    $.ajax({
        type: 'POST',
        url: "{{ route('admin-ajax-selected-track-submit') }}",
        data: {
            trackIds: trackIds
        },
        success: function(data) {
            //alert(data.success);
        }
    });

}
</script>
@endsection