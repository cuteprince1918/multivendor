@extends('admin.layout.adminloginapp')
@section('content')
<div class="all-wrapper menu-side with-pattern">
      <div class="auth-box-w">
        <div class="logo-w">
          <a href="index.html"><img alt="" src="{{ url('public/admin/img/logo-big.png') }}"></a>
        </div>
        <h4 class="auth-header">
          Login Form
        </h4>
          <form action="" name="loginform" id="loginform" method="POST">{{ csrf_field() }}
          <div class="form-group">
              <label for="">Username</label><input class="form-control" name="email" placeholder="Enter your username" type="text">
            <div class="pre-icon os-icon os-icon-user-male-circle"></div>
          </div>
          <div class="form-group">
              <label for="">Password</label><input class="form-control" name="password" placeholder="Enter your password" type="password">
            <div class="pre-icon os-icon os-icon-fingerprint"></div>
          </div>
          <div class="buttons-w">
              <button class="btn btn-primary" type="submit" name="submit" id="submit">Log me in</button>
            <div class="form-check-inline">
              <!--<label class="form-check-label"><input class="form-check-input" type="checkbox">Remember Me</label>-->
            </div>
          </div>
        </form>
      </div>
    </div>
@endsection