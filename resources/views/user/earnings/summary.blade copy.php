@extends('layouts.usermaster')
@section('title') Dashboard ACR__Helper @endsection
@section('content')
<style>
.redbg {
    background-color: black !important;
}
.card {
    border: 1px solid #f0f0f0; 
    margin: 10px;
}
.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

.active,
.accordion:hover {
    background-color: #ccc;
}

.panel {
    padding: 0 18px;
    display: none;
    background-color: #212529;
    overflow: hidden;
}
</style>
<div class="row">
    <div class="col-md-12">
        <h4 class="card-title" style="border-bottom-style: solid"> Statements</h4>
    </div>
</div>
<div class="row">
    <div class="col-md-12  ">
        <div class="card  ">
            <div class="card-header">
                <form action="{{route('user-earning-standard')}}">
                    <div class="row">
                        <div class="col-md-6">
                            <select class="btn btn-danger form-control select2" style="border-radius: 1.5rem"
                                name="user">
                                <option value="">All </option>
                                @foreach($months as $key)
                                <option value="{{$key}}"
                                    {{isset($_GET['user'])?($_GET['month']==$key->id?'selected':''):''}}>{{$key}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary ">Search</button>
                            <a href="route('user-earning-standard')"><button class="btn btn-primary">Clear</button></a>
                        </div>
                    </div>
                </form>
            </div>

            <div class="card-body redbg">
                <button class="accordion">2022(Q1) </button>
                <div class="panel">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card  ">
                                <div class="card-header redbg text-center">
                                    <h3>January</h3>
                                </div>
                                <div class="card-body redbg">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Payout %</th>
                                                    <th>Gross Earnings</th>
                                                    <th>Net Earnings</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> 90%</td>
                                                    <td> 200</td>
                                                    <td> 180</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td>Total</td>
                                                    <td>200</td>
                                                    <td>$180</td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card  ">
                                <div class="card-header redbg text-center">
                                    <h3>January</h3>
                                </div>
                                <div class="card-body redbg">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Payout %</th>
                                                    <th>Gross Earnings</th>
                                                    <th>Net Earnings</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> 90%</td>
                                                    <td> 200</td>
                                                    <td> 180</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td>Total</td>
                                                    <td>200</td>
                                                    <td>$180</td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card  ">
                                <div class="card-header redbg text-center">
                                    <h3>January</h3>
                                </div>
                                <div class="card-body redbg">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Payout %</th>
                                                    <th>Gross Earnings</th>
                                                    <th>Net Earnings</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> 90%</td>
                                                    <td> 200</td>
                                                    <td> 180</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td>Total</td>
                                                    <td>200</td>
                                                    <td>$180</td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
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