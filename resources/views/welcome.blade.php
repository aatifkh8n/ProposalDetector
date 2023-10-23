@extends('templates.main')

@section('title')
    ProposalDetector
@endsection

@section('subtitle')
    Home
@endsection

@section('content')

      <main role="main" class="inner cover">
        <h1 class="cover-heading">FYP Proposal Detector System</h1>
        <p class="lead">The system stores the Final Year Project (FYP) Proposals and can search among previous done projects effectively and efficiently.</p>
        <p class="lead">
          <a href="{{URL::to('/proposals')}}" class="btn btn-lg btn-secondary">Try it!</a>
        </p>
      </main>

@endsection