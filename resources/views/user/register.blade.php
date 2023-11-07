@extends('templates.main')

@section('title')
    ProposalDetector
@endsection

@section('subtitle')
    Register
@endsection

@section('content')

      <main role="main" class="inner cover">
        <h2 class="mb-4">Sign Up</h2>
        <form action="{{URL::to('/create_user')}}" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="name-login">Name</label>
            <input type="text" id="name-login" name="name" class="form-control">
          </div>
          <div class="form-group">
            <label for="username-login">Username</label>
            <input type="text" id="username-login" name="username" class="form-control">
          </div>
          <div class="form-group">
            <label for="email-login">Email</label>
            <input type="email" id="email-login" name="email" class="form-control">
          </div>
          <div class="form-group">
            <label for="password-login">Password</label>
            <input type="password" id="password-login" name="password" class="form-control">
          </div>
          <div class="form-group">
            <label for="password-login">Confirm Password</label>
            <input type="password" id="password-login" name="cpassword" class="form-control">
          </div>
          <input type="submit" name="submit" value="Login" class="btn btn-secondary">
        </form>

        <p class="mt-4">Existing user? Login <a class="text-warning" href="{{URL::to('/login')}}">here</a></p>
      </main>

@endsection