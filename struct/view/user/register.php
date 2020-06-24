<section class='block-wrapper pt-0'>
  <div class='container'>
    <div class="wrap-login100">
      <div class="login100-pic js-tilt" data-tilt>
        <img src="/asset/image/logo/login.png" alt="IMG">
      </div>
      <form class="login100-form validate-form" name="myForm">
        <span class="login100-form-title">ثبت  نام در شبکه ملی ازوداج</span>
        <div class="wrap-input100 validate-input">
          <select name="cars" class="input100-select" id="access">
            <option value="1" selected>شهروند</option>
            <option value="2">مربیان</option>
            <option value="3">مراکز مشاوره</option>
            <option value="4">درمانگر</option>
            <option value="5">مدیر</option>
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
          <span onclick="formRegisterValidation()" class="login100-form-btn" name>ثبت نام</span>
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
<script>
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
