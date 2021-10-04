@extends('layouts.basefront')
@section('content')

<style>
    .login-text-box
    {
      width: 100%;
      padding: 12px 20px;
      box-sizing: border-box;
      border: none;
      border-bottom: 2px solid rgba(219,234,254);
    }
    .fontuser {
        position: relative;
    }
          
    .fontuser .log-i{
        position: absolute;
        right: 15px;
        bottom: 14px;
        color: gray;
    }

    .floating-label-group {
      position: relative;
      margin-top: 15px;
      margin-bottom: 25px;
    }
    .floating-label-group .floating-label {
      font-size: 13px;
      color: #cccccc;
      position: absolute;
      pointer-events: none;
      top: 9px;
      left: 12px;
      transition: all 0.1s ease;
    }
    .floating-label-group input:focus ~ .floating-label,
    .floating-label-group input:not(:focus):valid ~ .floating-label {
      top: -30px;
      bottom: 0px;
      left: 0px;
      font-size: 20px;
      opacity: 1;
      color: #404040;
    }
    .bg-image-left
    {
        background:linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('./assets/img/slide-2.jpg');
        background-repeat: no-repeat;
        color:white;
    }
    .text-blue
    {
      color:#374799;
    }
</style>
<div class="container-fluid ps-0 font-poppins-normal">

  <div class="row">
    <div class="col-md-6 bg-image-left">
    </div>
    <div class="col-md-6 p-5 mt-5 mb-5">
      <h2 class="text-center">KERALA STATE SERVICE PORTAL</h2>
      <div class="col-md-12 d-flex justify-content-center mt-5">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked="checked">
          <label class="form-check-label" for="inlineRadio1">Login With Password</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
          <label class="form-check-label" for="inlineRadio2">Login With OTP</label>
        </div>
      </div>
      <div class="col-md-12 d-flex justify-content-center mt-5">
        <div class="col-md-9">
          <form method="POST" action="{{ route('checklogin') }}">
                        @csrf
            <div class="mb-3">
              
              <div class="floating-label-group  fontuser mt-4">
                <input id="email" type="email" class="login-text-box" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <label class="floating-label">Enter the Username</label>
                <i class="fa fa-mobile fa-lg log-i"></i>

                 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>
            
              <div class="d-flex justify-content-end">
                <button class="btn btn-sm btn-default text-blue" disabled><b>Get OTP</b></button>
              </div>
        
          
              <div class="floating-label-group fontuser mt-4">
                  <input id="password" type="password" class="login-text-box" name="password" required autocomplete="current-password">
                <label class="floating-label">Enter the Password</label>
                <i class="fa fa-key fa-lg log-i"></i>
                 @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>

              <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Login</button>
              </div>
            
            
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


</div>
@endsection