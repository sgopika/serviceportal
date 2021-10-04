<?php
$title = 'Government of Kerala';
include './header.php'; ?>

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
          
    .fontuser i{
        position: absolute;
        right: 15px;
        bottom: 20px;
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
        background:linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('https://product.cdit.org/sites/keralagov/assets/img/slide-2.jpg');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
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
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
          <label class="form-check-label" for="inlineRadio1">Login With MPIN</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
          <label class="form-check-label" for="inlineRadio2">Login With OTP</label>
        </div>
      </div>
      <div class="col-md-12 d-flex justify-content-center mt-5">
        <div class="col-md-8">
          <form>
            <div class="mb-3">
              
              <div class="floating-label-group  fontuser">
                <input type="text" id="username" class="login-text-box" autocomplete="off" autofocus required >
                <label class="floating-label">Enter Mobile Number/MPIN</label>
                <i class="fa fa-mobile fa-lg"></i>
              </div>
            
              <div class="d-flex justify-content-end">
                <button class="btn btn-sm btn-default text-blue"><b>Get OTP</b></button>
              </div>
        
          
              <div class="floating-label-group fontuser mt-4">
                <input type="password" id="password" class="login-text-box" autocomplete="off" required />
                <label class="floating-label">Enter OTP sent to your phone</label>
                <i class="fa fa-key fa-lg"></i>
              </div>

              <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Login</button>
              </div>
            
            
              <!-- <div class="fontuser">
                <label for="exampleInputEmail1" class="form-label">Enter Mobile Number</label>
                <input type="email" class="login-text-box" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"><p class="text-right">Get OTP</p></div>
                <i class="fa fa-user fa-lg"></i>
              </div>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Enter OTP sent to your phone</label>
              <input type="password" class=" login-text-box" id="exampleInputPassword1">
            </div>
            <div class="d-flex justify-content-end">
              <button type="submit" class="btn btn-primary ">Login</button>
            </div> -->
          </form>
        </div>
      </div>
    </div>
  </div>


</div>
<?php include './footer.php'; ?>