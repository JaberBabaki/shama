
<section class='block-wrapper pt-0'>
  <div class='container'>
    <div class="wrap-login100">
      <div class="login100-pic js-tilt" data-tilt>
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
<script>
  function checkEmail() {
    var emailData = document.forms["myForm"]["email"].value;
    var passwordData = document.forms["myForm"]["password"].value;
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if (emailData.length <= 7 && emailData.length >= 1) {
      $('#valid_email').css({'display': 'block', 'color': 'red'});
      $('#valid_email').text('ایمیل وارد شده صحیح نیست');
      return false;
    } else if (emailData.length == 0) {
      $('#valid_email').css({'display': 'block', 'color': 'red'});
      $('#valid_email').text('لطفا ایمیل را وارد کنید');
      return false;
    } else {
      if (reg.test(emailData) == false) {
        $('#valid_email').css({'display': 'block', 'color': 'red'});
        $('#valid_email').text('ایمیل وارد شده صحیح نیست');
        return false;
      } else {
        $('#valid_email').css({'display': 'none'});
        $('#valid_email').text('');
        return true;
      }
    }
  }
</script>
