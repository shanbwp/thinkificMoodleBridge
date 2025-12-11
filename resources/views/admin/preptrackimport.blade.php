@extends('layouts.master')
@section('title') Dashboard ACR__Helper @endsection
@section('content') 
<div class="row">
    <div class="col-md-12">
        <h4 class="card-title" style="border-bottom-style: solid">Tracks Prep</h4>
    </div>
</div>
<div class="row">
    <div class="col-md-12  ">
    <div class="card bg-light mt-3">
        <div class="card-header">
           Track Prep
        </div>
        <div class="card-body">
            <form action="{{ route('import-track') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control" accept=".csv">
                <br>
                <button class="btn btn-success">Import Track Data</button>
                <a class="btn btn-warning" href="{{ route('export-track') }}">Export Track Data</a>
            </form>
        </div>
    </div>
    </div>
    @endsection 