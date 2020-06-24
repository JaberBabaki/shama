<link href="/asset/css/colors.css" rel="stylesheet" type="text/css">
	<!-- Core JS files -->
	<script type="text/javascript" src="/asset/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="/asset/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="/asset/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="/asset/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->
	<!-- Theme JS files -->
	<script type="text/javascript" src="/asset/js/plugins/media/fancybox.min.js"></script>
	<script type="text/javascript" src="/asset/js/core/app.js"></script>
	<script type="text/javascript" src="/asset/js/plugins/ui/ripple.min.js"></script>
	<!-- /theme JS files -->
  <style>
    .position{
      padding: 23px;
    }
  </style>
	<!-- Page container -->
  <div class="page-container">
    <div class="page-content">
      <div class="row">
      <div class="col-md-2">
      <div class="sidebar sidebar-main sidebar-default" style="background-color: #C4C4C4 ">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user-material" style="height: 950px;">
						<div class="category-content">
							<div class="sidebar-user-material-content">
                <?php if($patient == 0): ?>
                  <a href="<?php echo baseUrl(); ?>/user1/mainPage"><img src="/asset/image/avatar/avatar.jpg" class="img-circle img-responsive" alt=""></a>
                  <h5 style="text-align: center; margin-top: 19px;"><?=$email?></h5>
                <?php endif;?>
                <?php if($patient == 1): ?>
                  <a href="<?php echo baseUrl(); ?>/user1/mainPage"><img src="/asset/image/per-pic/user1/<?=$photo?>" class="img-circle img-responsive" alt=""></a>
                  <h5 style="text-align: center; margin-top: 19px;"><?=$name?></h5>
                <?php endif;?>
                
							</div>								
						</div>
						
						<!-- <div class="navigation-wrapper" id="user-nav"> -->
		
						<ul class="navigation ">
							<li style="background-color: #C4C4C4"><a href="<?php echo baseUrl(); ?>/user1/mainPage" class="text-right"><span>پروفایل من</span></a></li>
							<li class="active"><a href="<?php echo baseUrl(); ?>/user1/completePersonalData" class="text-right"> <span>تکمیل اطلاعات کاربری</span></a></li>
							<li><a href="<?php echo baseUrl(); ?>/user1/allAppointments" class="text-right"><span>کل نوبت های رزرو شده</span></a></li>
							<li><a href="<?php echo baseUrl(); ?>/user1/notCompletedAppointments" class="text-right"><span>نوبت های آتی</span></a></li>
							<li><a href="<?php echo baseUrl(); ?>/user1/completedAppointments" class="text-right"><span>نوبت های ویزیت شده</span></a></li>
							<li><a href="<?php echo baseUrl(); ?>/user1/passedAppointments" class="text-right"><span>نوبت های حضور نیافته</span></a></li>
							<li><a href="<?php echo baseUrl(); ?>/user1/canceledAppointments" class="text-right"><span>نوبت های لغو شده</span></a></li>
							<li><a href="<?php echo baseUrl(); ?>/user1/allworkshops" class="text-right"><span>دوره های رزرو شده</span></a></li>
							<li><a href="<?php echo baseUrl(); ?>/user1/notCompletedWorkshops" class="text-right"><span>دوره های آتی</span></a></li>
							<li><a href="<?php echo baseUrl(); ?>/user1/completedWorkshops" class="text-right"><span>دوره های انجام شده</span></a></li>
							<li><a href="<?php echo baseUrl(); ?>/user1/passedWorkshops" class="text-right"><span>دوره های حضور نیافته</span></a></li>
							<li><a href="<?php echo baseUrl(); ?>/user1/canceledWorkshops" class="text-right"><span>دوره های لغو شده</span></a></li>
							<li><a href="<?php echo baseUrl(); ?>/user1/logout" class="text-right"></i> <span>خروج</span></a></li>
							</ul>
					</div>
				</div>
			</div>
      </div>
      <div class="col-md-5">
        <div>
          <h3 class="text-right">تکمیل اطلاعات:</h3>
        </div>
        <br>
        <div class="text-right">
          <span>نام ونام خانوادگی خود را در این بخش بنویسید:</span>
          <input type="text" name="patientName" value="" class="form-control"
                             placeholder="نام و نام خانوادگی">
                      <label style="display: none;font-size: 12px" id="lblManagerName"
                             class="validation-error-label"> </label>
        </div>
        <br>
        <div class="text-right">
          <span>ایمیل خود را در بخش زیر وارد کنید:</span>
          <input type="text" name="patientEmail" class="form-control" placeholder="ایمیل">
                      <label style="display: none;font-size: 12px" id="lblEmailManager"
                             class="validation-error-label"> </label>
        </div>
        <br>
        <div class="text-right">
          <span class="help-block">شماره موبایل مدیر را وارد کنید:</span>
          <input type="text" name="patientPhone" class="form-control" placeholder="شماره موبایل">
          <label style="display: none;font-size: 12px" id="lblPhoneNumberManager"
                class="validation-error-label"> </label>
        </div>
        <br>
        <div class="text-right">
        <span class="help-block">لطفا استان و شهرستان مورد نظر را انتخاب کنید:</span>
          <div class="row">
          <div class="col-md-6">
            <div>
              <select id="stateManager" class="form-control"
                      style="height: 37px;padding-right: 3px;width: 100%"
                      onchange="changeListOstan('#stateManager','#cityManager')">
                <option value="0" selected disabled>استان را انتخاب کنید</option>
                <?php
                $result = UserCommonModel::getOstan();
                for ($i = 0; $i <= count($result) - 1; $i++) {
                  echo '  <option value=' . $result[$i]['ostan_id'] . '>' . $result[$i]['name'] . '</option>';
                }
                ?>
              </select>
              <label style="display: none;font-size: 12px" id="lblOstan"
                      class="validation-error-label"> </label>
            </div>
          </div>
          <div class="col-md-6">
            <div>
              <select id="cityManager" class="form-control"
                      style="height: 37px;padding-right: 3px;width: 100%">
                <option value="0" selected disabled>شهر را انتخاب کنید</option>
              </select>
            </div>
          </div>
          <label style="display: none;font-size: 12px" id="lblOstanManager"
                             class="validation-error-label"> </label>
          </div>
        </div>
        <br>
        <div class="text-right">
        <div>
          <div class="form-group">
            <label class="display-block">جنسیت:</label>

            <form id="radioGenderManager">
              <input class="radio-inline" type="radio" name="gender" value="1"> مرد
              <input class="radio-inline" type="radio" name="gender" value="0"> زن
            </form>
          </div>
          <label style="display: none;font-size: 12px" id="lblGender"
                  class="validation-error-label"> </label>
        </div>
        </div>


        <br>
        <div class="text-right">
        <span class="help-block">عکس پرسنلی:</span>
          <div class="tac">
            <div>
              <img src="https://placehold.it/128x128" id="previewPersonalImageManager" class="img-thumbnail">
            </div>
            <br>

            <div class="tac">
              <div class="btn btn-primary btn-file">
                <i class="icon-file-plus"></i>
                <input id="selectPersonalImageManager" onchange="selectFile(this,'imagePersonalPhoto')" type="file"
                      accept=".png,.jpg,.jpeg" name="name" style="display: none;"/>
                <sapn onclick="dialogdSelectFile('#selectPersonalImageManager')">انتخاب عکس</sapn>
              </div>
            </div>
            <br>

            <div class="media-body">
              <span
                class="help-block">فرمت های قابل قبول jpg و png است و حداکثر سایز برابر با ۱۰۰ کبلو بایت است
              </span>
            </div>
            <label style="display: none;font-size: 12px" id="lblselectPersonalImageManager"
                  class="validation-error-label"> </label>
          </div>
        </div>
        <br>
        <br>
        <div class="text-left">
                            <span onclick="formManagerValidation()" id="btnRegisterPsych" type="submit"
                                class="btn btn-primary"><?php if ($shenaseh == null) {
                                echo "ثبت";
                              } else {
                                  echo "ویرایش";
                              } ?><i
                               class="icon-arrow-left13 position-right"></i></span>
                    </div> 
            </div>
  
      </div>

    </div>

  </div>

			<!-- /main sidebar -->
			<!-- Main content -->
			<!-- /main content -->

		</div>
    <!-- /page content -->

    
	</div>

  <script>
        function changeListOstan(idOstan, idCity) {
          var id = $(idOstan).find('option:selected').val();
          $.ajax({
            method: 'POST',
            url: '/UserCommon/getCity',
            dataType: 'JSON',
            data: {
              id: id
            },
            success: function (result) {
              var html = '';
              for (var i in result.ResultData) {
                html += '<option value=' + result.ResultData[i]['id'] + '>' + result.ResultData[i]['name'] + '</option>';
              }
              $(idCity).html(html);
            }
          });
        }

        function dialogdSelectFile(id) {
          $(id).trigger('click');
        }

        function selectFile(input, type) {
          if (input.files && input.files[0]) {
            size = input.files[0].size;
            var imgsize = size / 1024;
            if (type == 'imagePersonalPhoto') {
              if (imgsize <= 100) {
                var reader = new FileReader();
                reader.onload = function (e) {
                  $('#previewPersonalImageManager')
                    .attr('src', e.target.result)
                    .width(150).height(200);
                };
                reader.readAsDataURL(input.files[0]);
                printOk('#lblselectPersonalImageManager', '');
                okPersonalPhoto = 0;
              } else {
                okPersonalPhoto = 1;
                printError("#lblselectPersonalImageManager", "حجم عکس ارسالی بیش از ۱۰۰ کیلو بایت است.");
              }
            } 
          }
    }

    function printError(elemId, hintMsg) {
      $(elemId).text(hintMsg);
      $(elemId).css({'display': 'block'});
    }
    
    function printOk(elemId, hintMsg) {
      $(elemId).text(" ");
      $(elemId).css({'display': 'none'});
    }

    function formManagerValidation() {
      var stateValue = $('#stateManager').find('option:selected').val();
      var cityValue = $('#cityManager').find('option:selected').val();
      var name = $("input[name=patientName]").val();
      var email = $("input[name=patientEmail]").val();
      var phone = $("input[name=patientPhone]").val();
      var gender = $("input[name='gender']:checked").val();
      var personalPhoto = $('#selectPersonalImageManager')[0].files[0];
      var formDataPsych = new FormData();
      console.log(cityValue);
      var data = "";
      verrify = 1;

      if (name.length <= 2 && name.length >= 30) {
        printError('#lblManagerName', 'نام وارد شده صحیح نیست');
        verrify = 0;
      } else if (name.length == 0) {
        printError('#lblManagerName', 'لطفا نام را وارد کنید');
        verrify = 0;
      } else {
        printOk('#lblManagerName', '');
      }

      var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
      if (email.length <= 7 && email.length >= 1) {
        printError('#lblEmailManager', 'ایمیل وارد شده صحیح نیست');
        verrify = 0;
      } else if (email.length == 0) {
        printError('#lblEmailManager', 'لطفا ایمیلی وارد کنید');
        verrify = 0;
      } else {
        if (reg.test(email) == false) {
          printError('#lblEmailManager', 'ایمیل وارد شده صحیح نیست');
          verrify = 0;
        } else {
          printOk('#lblEmailManager', '');
        }
      }

      if (phone.length == 11) {
        printOk('#lblPhoneNumberManager', '');
        verrify = 0;
      } else if (phone.length == 0) {
        printError('#lblPhoneNumberManager', 'لطفا شماره موبایل را وارد کنید');
        verrify = 0;
      } else {
        printError('#lblPhoneNumberManager', 'شماره موبایل وارد شده صحیح نیست');
      }

      if (cityValue == 0 && stateValue == 0) {
        printError('#lblOstanManager', 'استان و شهر را انتخاب کنید');
        verrify = 0;
      } else {
        printOk('#lblOstanManager', '');
      }

      if (gender == '0' || gender == '1') {
        printOk('#lblGender', '');
        verrify = 0;
      } else {
        printError('#lblGender', 'لطفا جنسیت را تعیین کنید');
      }

      if (personalPhoto == null) {
        printError("#lblselectPersonalImageManager", "لطفا عکس پرسنلی را وارد کنید");
        verrify = 0;
      }

      if (verrify == 0) {
        
        formDataPsych.append('personalImage', personalPhoto);
        formDataPsych.append('name', name);
        formDataPsych.append('email', email);
        formDataPsych.append('phone', phone);
        formDataPsych.append('state',stateValue);
        formDataPsych.append('city',cityValue);
        formDataPsych.append('gender', gender);
        
        $.ajax({
          url: '/user1/registerPatient',
          type: 'POST',
          dataType: 'JSON',
          data: formDataPsych,
          contentType: false,
          processData: false,
          success: function (result) {
            var json = result;
            if (json.Status == true) {
              if ((json.ResultData.code == 200)) {
                showStackTopLeft('success', "مشخصات مدیر با موفقیت در مرکز مشاوره ثبت شده است.");
                $('#btnRegisterPsych').text(' ویرایش');
                document.documentElement.scrollTop = 0;
                var n = json.ResultData.message;
                $('#divAlertDangerCenter').css({'display': 'none'});
                $('#divAlertSuccessAjaxCenter').css({'display': 'block'});
                $('#txtAlertMsg1Center').text("اطلاعات مرکز مشاوره با " + json.ResultData.message + "در سامانه ثبت شده است ");
              } else if ((json.ResultData.code == 201)) {
                showStackTopLeft('success', "اطلاعات مدیر با موفقیت ویرایش شده است");
                document.documentElement.scrollTop = 0;
                var n = json.ResultData.message;
                $('#txtAlertMsg1Center').text(" اطلاعات مدیر با شناسه " + json.ResultData.message + "در سامانه ویرایش شده است");
              }
            } else {
              var msg = json.Error.message;
              showStackTopLeft('error', msg);
            }

          }
        });
      }
    }


  </script>

  <!-- <script>
    $(document).ready(function(){
      $('#nearest-appointment').click(function(){
      var calendar_id = document.getElementById('nearest-appointment').getAttribute('value');
      $('#cancelDialog').modal('show');
      });
    });
  </script> -->
