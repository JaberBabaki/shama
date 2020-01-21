<script src="/asset/js/jquery.min.js"></script>
<script src="/asset/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/asset/css/style-login.css">

<!--Modal: Login / Register Form-->
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">
  <!--Content-->
    <div class="modal-content">
    <!--Modal cascading tabs-->
    <div class="modal-c-tabs">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs md-tabs tabs-2 dark-blue darken-3" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" style="color: grey; font-size: 20px" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-user ml-2" style="font-size: 25px; color: grey"></i>
        ورود</a>
      </li>
      <li class="nav-item" >
        <a class="nav-link" style="color: grey; font-size: 20px" data-toggle="tab" href="#panel8" role="tab"><i class="fa fa-user ml-2" style="font-size: 25px; color: grey"></i>
        ثبت نام</a>
      </li>
    </ul>
    <div class="tab-content">
      <!--panel login-->
      <div class="tab-pane fade in show active" id="panel7" role="tabpanel">
        <!--Body-->
        <div>
        <section id="loginForm" class="block-wrapper pt-0">
          <div class="container">
            <div class="wrap-login100-dialog">
              <div class="login100-pic-dialog js-tilt" data-tilt>
                <img src="/asset/image/logo/login.png" alt="IMG">
              </div>
              <form class="login100-form validate-form" action="" method="post" name="myForm" onSubmit="return checkEmail()">
                <span class="login100-form-title">ورود به ناحیه کاربری</span> <!-- Form Title -->
                <div class="wrap-input100 validate-input" data-validate="لطفا پست الکترونیک خود را وارد کنید!">
                  <input class="input100" type="text" name="email" placeholder="پست الکترونیک">
                  <span class="focus-input100"></span>
                      <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                      </span>
                </div>
                <sapn style="display: none" class="form-validation" id="valid_email"
                "></sapn>
                <div class="wrap-input100 validate-input" data-validate="لطفا رمز عبور را وارد کنید!">
                  <input class="input100" type="password" name="password" placeholder="رمز عبور">
                  <span class="focus-input100"></span>
                      <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                      </span>
                </div>
                <sapn style="display: none" class="form-validation" id="valid_pass"></sapn>
                <div class="container-login100-form-btn">
                  <button class="login100-form-btn">ورود</button>
                </div>
                <div class="text-center p-t-12">
                  <a class="txt2" href="#">
                    بازگردانی رمز عبور!
                  </a>
                </div>
                <div class="text-center p-t-30">
                  <a class="txt2" href="#">
                    <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    هنوز ثبت نام نکرده اید ؟
                  </a>
                </div>
              </form>
            </div>
          </div>
        </section>
        </div>
        
      </div>
      <div class="tab-pane fade" id="panel8" role="tabpanel">
         <section class='block-wrapper pt-0'>
            <div class='container'>
              <div class="wrap-login100-dialog">
                <div class="login100-pic-dialog js-tilt" data-tilt>
                  <img src="/asset/image/logo/login.png" alt="IMG">
                </div>
                <form class="login100-form validate-form" name="myForm">
                  <span class="login100-form-title">ثبت  نام در شبکه ملی ازدواج</span>
                  <div class="wrap-input100 validate-input">
                    <select name="cars" class="input100-select" id="access">
                      <option value="1" selected>شهروند</option>
                      <option value="2">مربیان</option>
                      <option value="3">مراکز مشاوره</option>
                      <option value="4">درمانگر</option>
                    </select>
                  </div>
                  <div class="wrap-input100 validate-input">
                    <input class="input100" type="text" name="email" placeholder="ایمیل یا شماره موبایل">
                    <span class="focus-input100"></span>
                        <span class="symbol-input100">
                          <i class="fa fa-envelope"></i>
                    </span>
                  </div>
                  <sapn style="display: none" class="form-validation" id="valid_email""></sapn>
                  <div class="wrap-input100 validate-input">
                    <input class="input100" type="password" name="pass" placeholder="رمز عبور">
                    <span class="focus-input100"></span>
                        <span class="symbol-input100">
                          <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                  </div>
                  <sapn style="display: none" class="form-validation" id="valid_pass"></sapn>
                  <div class="wrap-input100 validate-input">
                    <input class="input100" type="password" name="confrmPass" placeholder="تکرار رمز عبور">
                    <span class="focus-input100"></span>
                        <span class="symbol-input100">
                          <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                  </div>
                  <sapn style="display: none" class="form-validation" id="valid_confrm_pass"></sapn>
                  <div class="container-login100-form-btn">
                    <button onclick="formRegisterValidation()" class="login100-form-btn">ثبت نام</button>
                  </div>
                  <div class="text-center p-t-30">
                    <a class="txt2" href="#">
                      <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                      قبلا ثبت نام کرده ام
                    </a>
                  </div>
                </form>
              </div>
            </div>
        </section>

      </div>
    </div>
    </div>
    </div>
  </div>
</div>



<script>
  function checkEmail() {
    var emailData = document.forms["myForm"]["email"].value;
    var passwordData = document.forms["myForm"]["password"].value;
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if (emailData.length <= 7 && emailData.length >= 1) {
      $("#valid_email").css({"display": "block", "color": "red"});
      $("#valid_email").text("ایمیل وارد شده صحیح نیست");
      return false;
    } else if (emailData.length == 0) {
      $("#valid_email").css({"display": "block", "color": "red"});
      $("#valid_email").text("لطفا ایمیل را وارد کنید");
      return false;
    } else {
      if (reg.test(emailData) == false) {
        $("#valid_email").css({"display": "block", "color": "red"});
        $("#valid_email").text("ایمیل وارد شده صحیح نیست");
        return false;
      } else {
        $("#valid_email").css({"display": "none"});
        $("#valid_email").text("");
        return true;
      }
    }
  }

    function formRegisterValidation() {

    var emailData = document.forms["myForm"]["email"].value;
    var passData = document.forms["myForm"]["pass"].value;
    var confrmData = document.forms["myForm"]["confrmPass"].value;
    var access = document.forms["myForm"]["access"].value;
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    var ok = 0;
    //alert(emailData.length)
    if (emailData.length <= 7 && emailData.length >= 1) {
      $('#valid_email').css({'display': 'block', 'color': 'red'});
      $('#valid_email').text('ایمیل وارد شده صحیح نیست');
      ok = 1;
    } else if (emailData.length == 0) {
      $('#valid_email').css({'display': 'block', 'color': 'red'});
      $('#valid_email').text('لطفا ایمیلی وارد کنید');
      ok = 1;
    } else {
      if (reg.test(emailData) == false) {
        $('#valid_email').css({'display': 'block', 'color': 'red'});
        $('#valid_email').text('ایمیل وارد شده صحیح نیست');
        ok = 1;
      } else {
        $('#valid_email').css({'display': 'none'});
        $('#valid_email').text('');
        ok = 0;
      }
    }

    if (passData.length <= 8 && passData.length >= 1) {
      $('#valid_pass').css({'display': 'block', 'color': 'red'});
      $('#valid_pass').text('رمز عبور وارد شده باید بیش از ۸ کاراکتر باشد');
      ok = 1;
    } else if (passData.length == 0) {
      $('#valid_pass').css({'display': 'block', 'color': 'red'});
      $('#valid_pass').text('لطفا رمز عبور را وارد کنید');
      ok = 1;
    } else {
      $('#valid_pass').css({'display': 'none'});
      $('#valid_pass').text('');
      ok = 0;
    }
    if (passData != '' || confrmData != '') {
      if (passData != confrmData) {
        $('#valid_confrm_pass').css({'display': 'block', 'color': 'red'});
        $('#valid_confrm_pass').text('رمز عبور وارد شده یکسان نمی باشد');
        ok = 1;
      } else {
        $('#valid_confrm_pass').css({'display': 'none'});
        $('#valid_confrm_pass').text('');
        ok = 0;
      }
    }

    if (ok == 0) {
      $.ajax({
        url: '/userCommon/register',
        type: 'POST',
        datatype: 'json',
        data: {
          email: emailData,
          password: passData,
          confrmPassword: confrmData,
          access: access
        },
        success: function (result) {
          var json=JSON.parse(result);
          if((json.Status==true)){
            window.location.href = "/userCommon/registerSuccess";
          }else{
            if(json.Error.code==100){
              $('#valid_email').css({'display': 'block', 'color': 'red'});
              $('#valid_email').text('ایمیل وارد شده صحیح نیست');
            }else if(json.Error.code==101){
              $('#valid_email').css({'display': 'block', 'color': 'red'});
              $('#valid_email').text(json.Error.message);
            }else if(json.Error.code==102){
              $('#valid_pass').css({'display': 'block', 'color': 'red'});
              $('#valid_pass').text(json.Error.message);
            }else if(json.Error.code==103){
              $('#valid_pass').css({'display': 'block', 'color': 'red'});
              $('#valid_pass').text(json.Error.message);
            }else if(json.Error.code==104){
              $('#valid_pass').css({'display': 'block', 'color': 'red'});
              $('#valid_pass').text(json.Error.message);
            }else if(json.Error.code==105){
              $('#valid_confrm_pass').css({'display': 'block', 'color': 'red'});
              $('#valid_confrm_pass').text(json.Error.message);
            }else if(json.Error.code==106){
              $('#valid_email').css({'display': 'block', 'color': 'red'});
              $('#valid_email').text(json.Error.message);
            }
          }
        }
      });
    }
  }
</script>

