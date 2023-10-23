@extends('templates.main')

@section('title')
    ProposalDetector
@endsection

@section('subtitle')
    Home
@endsection

@section('heading')
    <div class="row">
        
        {{-- <div class="col-8">FYP Proposal Detection System</div>
        <div class="col nav-item"><a class="nav-link text-center" href="{{URL::to('/proposals/')}}">Show All Proposals</a></div> --}}
    </div>
@endsection

@section('content')
    <div class="row px-3">
        <input class="form-control col" type="text" name="" id="" placeholder="Search a proposal here...">
        <button class="btn btn-primary ml-1">Search Proposal</button>
    </div>
    <div class="d-flex">
        <a class="btn btn-success mt-5 text-center" href="{{URL::to('/proposals/')}}">Show All Proposals</a>
    </div>
@endsection