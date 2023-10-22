@extends('templates.main')

@section('title')
    ProposalDetector
@endsection

@section('subtitle')
    Home
@endsection

@section('heading')
    FYP Proposal Detection System
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