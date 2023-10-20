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
        <a class="btn btn-success" href="{{URL::to('/proposals/')}}">Show All Proposals</a>
@endsection