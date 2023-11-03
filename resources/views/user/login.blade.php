@extends('templates.main')

@section('title')
    ProposalDetector
@endsection

@section('subtitle')
    Login
@endsection

@section('content')

      <main role="main" class="inner cover">
        <form action="{{URL::to('/authenticate')}}" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="username-login">Username</label>
            <input type="text" id="username-login" name="username" class="form-control">
          </div>
          <div class="form-group">
            <label for="password-login">Password</label>
            <input type="password" id="password-login" name="password" class="form-control">
          </div>
          <input type="submit" name="submit" value="Login" class="btn btn-secondary">
        </form>
      </main>

@endsection