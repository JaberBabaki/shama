<link rel="stylesheet" href="/asset/css/style-login.css">
<link rel="stylesheet" href="/asset/css/bootstrap.min.css">
<script src="/asset/js/jquery.min.js"></script>
<script src="/asset/js/bootstrap.min.js"></script>
<script src="/asset/js/sweetalert2/sweetalert2.js"></script>
  
<!--Modal: Login / Register Form-->
<div class="modal fade" id="loginAndRegDialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
        <section id="loginForm" class="block-wrapper pt-0">
          <div class="container">
            <div class="wrap-login100-dialog">
              <div class="login100-pic-dialog js-tilt" data-tilt>
                <img src="/asset/image/logo/login.png" alt="IMG">
              </div>
              <div>
                <span class="login100-form-title">ورود به ناحیه کاربری</span>
                <div class="wrap-input100 validate-input" data-validate="لطفا پست الکترونیک خود را وارد کنید!">
                <input class="input100" type="text" id="emailLogin" placeholder="پست الکترونیک">
                  <span class="focus-input100"></span>
                      <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                      </span>
                </div>
                <sapn style="display: none" class="form-validation" id="valid_email"></sapn>
                <div class="wrap-input100 validate-input" data-validate="لطفا رمز عبور را وارد کنید!">
                  <input class="input100" type="password" id="passwordLogin" placeholder="رمز عبور">
                  <span class="focus-input100"></span>
                      <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                      </span>
                </div>
                <sapn style="display: none" class="form-validation" id="valid_pass"></sapn>
                <div class="container-login100-form-btn" >
                  <button class="login100-form-btn" id="loginBtn">ورود</button>
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
              </div>
            </div>
          </div>
        </section>
        
      </div>
      <div class="tab-pane fade" id="panel8" role="tabpanel">
         <section class='block-wrapper pt-0'>
            <div class='container'>
              <div class="wrap-login100-dialog">
                <div class="login100-pic-dialog js-tilt" data-tilt>
                  <img src="/asset/image/logo/login.png" alt="IMG">
                </div>
                <form class="login100-form validate-form" >
                  <span class="login100-form-title">ثبت  نام در شبکه ملی ازدواج</span>
                  <div class="wrap-input100 validate-input" id="myForm">
                    <input class="input100" type="text" id="emailReg" placeholder="ایمیل یا شماره موبایل">
                    <span class="focus-input100"></span>
                        <span class="symbol-input100">
                          <i class="fa fa-envelope"></i>
                    </span>
                  </div>
                  <sapn style="display: none" class="form-validation" id="valid_email-reg"></sapn>
                  <div class="wrap-input100 validate-input">
                    <input class="input100" type="password" id="passwordReg" placeholder="رمز عبور">
                    <span class="focus-input100"></span>
                        <span class="symbol-input100">
                          <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                  </div>
                  <sapn style="display: none" class="form-validation" id="valid_pass-reg"></sapn>
                  <div class="wrap-input100 validate-input">
                    <input class="input100" type="password" id="confrmPasswordReg" placeholder="تکرار رمز عبور">
                    <span class="focus-input100"></span>
                        <span class="symbol-input100">
                          <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                  </div>
                  <sapn style="display: none" class="form-validation" id="valid_confrm_pass"></sapn>
                  <div class="container-login100-form-btn">
                    <button id="regBtn" class="login100-form-btn">ثبت نام</button>
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
var baseURL = "<?php echo baseUrl(); ?>";
var calendar_id;
function showLoginAndRegDialog(_calendar_id, runFunction=null){
    var status;
    var formData = new FormData();
    calendar_id = _calendar_id;
    $.ajax({
        url: baseURL+'/userCommon/isLoggedIn',
        type: 'GET',
        dataType: 'JSON',
        data: formData,
        contentType: false,
        processData: false,
        success: function (result) {
            if (result.login==true) runFunction(calendar_id);
            else{
                $("#loginAndRegDialog").modal("show");

                $("#loginBtn").click(function(){
                    var emailData = document.getElementById("emailLogin").value;
                    var passwordData = document.getElementById("passwordLogin").value;
                    status = checkEmailPass(emailData, passwordData);
                    if (status){
                        var formData = new FormData();
                        formData.append('email', emailData);
                        formData.append('password', passwordData);
                        $.ajax({
                            url: baseURL+'/userCommon/loginDialog',
                            type: 'POST',
                            dataType: 'JSON',
                            data: formData,
                            contentType: false,
                            processData: false,
                            success: function (result) {
                                var json = result;
                                if (json.status == false) {
                                    $("#loginAndRegDialog").modal("hide");
                                    Swal.fire({
                                        type: 'error',
                                        position: 'top',
                                        html: '<div>'+json.text1+'</div>'+'<div>'+json.text2+'</div>'+'<div>'+json.text3+'</div>',
                                    });  
                                }
                                else{
                                    $("#loginAndRegDialog").modal("hide");
                                    Swal.fire({
                                        type: 'success',
                                        position: 'top',
                                        html : '<div style="font-size: 25px">تبریک</div><div style="font-size: 20px">با موفقیت وارد حساب کاربری خود شدید</div>',
                                        showConfirmButton: false,
                                        timer: 2000,
                                    });
                                    runFunction(calendar_id);
                                    //   paymentSteps(jsonData, email = emailData);
                                }
                            } 
                        });
                    }
                });

                $("#regBtn").click(function(){
                    var emailData = document.getElementById("emailReg").value;
                    var passData = document.getElementById("passwordReg").value;      
                    var confrmData = document.getElementById("confrmPasswordReg").value;
                    status = checkEmailPassConfir(emailData, passData, confrmData);
                    if (status==true) {
                        var formData = new FormData();
                        formData.append('email', emailData);
                        formData.append('password', passData);
                        formData.append('confrmPassword', confrmData);
                        formData.append('access', access);
                        $.ajax({
                        url: baseURL+'/userCommon/register',
                        type: 'POST',
                        dataType: 'JSON',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function (result) {
                            var json = result;
                            if ((json.Status == true)) {
                            //$("#modalLogReg").modal("hide");
                            Swal.fire({
                                type: 'success',
                                position: 'top',
                                html: '<div style="font-size: 25px">تبریک</div><div style="font-size: 20px">شما با موفقیت در سامانه ثبت نام شدید</div><div style="font-size: 15px">از قسمت ورود وارد حساب خود شوید</div>',
                                showConfirmButton: false,
                                timer: 3000,
                            });
                            runFunction(calendar_id);
                            //$("#modalLogReg").show();
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
                });
            }
        }
    });
}
 
function checkEmailPass(emailData, passwordData){
  var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
  var status = true;
  if (emailData.length <= 7 && emailData.length >= 1) {
    $("#valid_email").css({"display": "block", "color": "red"});
    $("#valid_email").text("ایمیل وارد شده صحیح نیست");
    status = false;
  } else if (emailData.length == 0) {
    $("#valid_email").css({"display": "block", "color": "red"});
    $("#valid_email").text("لطفا ایمیل را وارد کنید");
    status = false;
  } else {
    if (reg.test(emailData) == false) {
      $("#valid_email").css({"display": "block", "color": "red"});
      $("#valid_email").text("ایمیل وارد شده صحیح نیست");
      status = false;
    } else {
      $("#valid_email").css({"display": "none"});
      $("#valid_email").text("");
      status = true;
    } 
  }

  if (passwordData.length <= 8 && passwordData.length >= 1) {
    $('#valid_pass').css({'display': 'block', 'color': 'red'});
    $('#valid_pass').text('رمز عبور وارد شده باید بیش از ۸ کاراکتر باشد');
    status = false;
  } else if (passwordData.length == 0) {
    $('#valid_pass').css({'display': 'block', 'color': 'red'});
    $('#valid_pass').text('لطفا رمز عبور را وارد کنید');
    status = false;
  } else {
    $('#valid_pass').css({'display': 'none'});
    $('#valid_pass').text('');
  }
  return status;
}

function checkEmailPassConfir(emailData, passData, confrmData) {
      var access = 1;
      var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
      var status = true;
      if (emailData.length <= 7 && emailData.length >= 1) {
        $('#valid_email-reg').css({'display': 'block', 'color': 'red'});
        $('#valid_email-reg').text('ایمیل وارد شده صحیح نیست');
        status = false;
      } else if (emailData.length == 0) {
        $('#valid_email-reg').css({'display': 'block', 'color': 'red'});
        $('#valid_email-reg').text('لطفا ایمیلی وارد کنید');
        status = false;
      } else {
        if (reg.test(emailData) == false) {
          $('#valid_email-reg').css({'display': 'block', 'color': 'red'});
          $('#valid_email-reg').text('ایمیل وارد شده صحیح نیست');
          status = false;
        } else {
          $('#valid_email-reg').css({'display': 'none'});
          $('#valid_email-reg').text('');
        }
      }

      if (passData.length <= 8 && passData.length >= 1) {
        $('#valid_pass-reg').css({'display': 'block', 'color': 'red'});
        $('#valid_pass-reg').text('رمز عبور وارد شده باید بیش از ۸ کاراکتر باشد');
        status = false;
      } else if (passData.length == 0) {
        $('#valid_pass-reg').css({'display': 'block', 'color': 'red'});
        $('#valid_pass-reg').text('لطفا رمز عبور را وارد کنید');
        status = false;
      } else {
        $('#valid_pass-reg').css({'display': 'none'});
        $('#valid_pass-reg').text('');
      }

      if (passData != '' || confrmData != '') {
        if (passData != confrmData) {
          $('#valid_confrm_pass').css({'display': 'block', 'color': 'red'});
          $('#valid_confrm_pass').text('رمز عبور وارد شده یکسان نمی باشد');
          status = false;
        } else {
          $('#valid_confrm_pass').css({'display': 'none'});
          $('#valid_confrm_pass').text('');
        }
      }
    return status;
  }

</script> 