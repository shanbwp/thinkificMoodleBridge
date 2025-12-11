@extends('layouts.usermaster')
@section('title') Dashboard ACR__Helper @endsection
@section('content')

<div class="row">
    <div class="col-md-12">
        <h4 class="card-title" style="border-bottom-style: solid"> Statements</h4>
    </div>
</div>
<div class="row">
    <div class="col-md-12  ">
        <div class="card redbg ">
            <div class="card-header redbg">
                <h2>Month Wise Earning</h2>
            </div>
            <br>
            <div class="card-body redbg">
                <div class="table-responsive">
                    <table class="table mb-0" id="tableId">
                        <thead>
                            <tr>
                                <th>Month </th>
                                <th>Payout %</th>
                                <th>Gross Earnings</th>
                                <th>Net Earnings</th> 
                                <th>Status</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($results as $key)
                            <tr>
                                <td> {{$key->month}}</td> 
                                <td> {{$key->percentage}}</td> 
                                <td> ${{$key->gross_earning}}</td>
                                <td> ${{$key->net_earning}}</td> 
                                <td> {{$key->status}}</td> 
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}
</script>
@endsection