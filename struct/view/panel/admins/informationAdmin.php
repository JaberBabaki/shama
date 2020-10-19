<div class="page-container">
  <div class="page-content">
    <div class="sidebar sidebar-main">
      <div class="sidebar-content">
        <div class="sidebar-user">
          <div class="category-content">
            <div class="media">
              <a href="#" class="media-left"><img src="/asset/image/logo/placeholder.jpg" class="img-circle img-sm"
                                                  alt=""></a>

              <div class="media-body">
                <span class="media-heading text-semibold"><?php if (!isGuest()) {
                    echo $_SESSION['email'];
                  } ?></span>
              </div>
            </div>
          </div>
        </div>
        <div class="sidebar-category sidebar-category-visible">
          <div class="category-content no-padding">
          <ul class="navigation navigation-main navigation-accordion">
            	  <li class="navigation-header"><span>بخش اصلی</span> <i class="icon-menu" title="Main pages"></i></li>
              	<li><a class="" href='/admins/dashboard'><i class="icon-home4"></i> <span>داشبورد</span></a></li>
                <li class="active"><a href="informationAdmin"><i class="icon-people"></i> <span>اطلاعات کاربری</span></a></li>
                <li><a href="requestAccess"><i class="icon-merge"></i> <span>درخواست دسترسی</span></a></li>
                <li><a href="requestedAccesses"><i class="icon-envelope"></i> <span>درخواست های ارسال شده</span></a></li>
                <li class=""><a href="reportAppointment"><i class="icon-pencil7"></i> <span>گزارش گیری نوبت ها</span></a></li>
                <li><a href="reportWorkshop"><i class="icon-pencil7"></i> <span>گزارش گیری کارگاه ها</span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="content-wrapper">
      <div class="page-header page-header-default">
        <div class="page-header-content">
          <div class="page-title">
            <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold"> اطلاعات درمانگر</span>
            </h4>
          </div>
        </div>


      </div>
      <div class="page-header page-header-default">
        <div class="page-header-content">
        </div>
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <?php
            if ($shenaseh == null) {
              echo "<div class='alert alert-danger no-border tac' id='divAlertDangerCenter'>
              <button type='button' class='close' data-dismiss='alert'><span class='sr-only'>Close</span></button>
              <span class='text-semibold'> اطلاعات مدیر در سامانه ثبت نشده است</span>
              </div>";
            } else {
              echo "<div class='alert alert-success no-border tac'>
										<button type='button' class='close' data-dismiss='alert'><span class='sr-only'>Close</span></button>
										<span class='text-semibold'>اطلاعات شما با شناسه </span>" . $shenaseh . "<span> در سامانه ثبت شده است.</span>
								    </div>";
            } ?>
            <div class='alert alert-success no-border tac' id='divAlertSuccessAjaxCenter' style="display: none">
              <button type='button' class='close' data-dismiss='alert'><span class='sr-only'>Close</span></button>
              <span class='text-semibold' id='txtAlertMsg1Center'></span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="col-md-12" id="alert">
              <div class="alert alert-info no-border tac">
                <button type="button" class="close" data-dismiss="alert"><span class="sr-only">Close</span></button>
              <span class="text-semibold ">توجه داشته باشید اطلاعاتی که در این بخش وارد خواهید کرد صحت لازم را داشته باشید. این اطلاعات برای مدیر اصلی ارسال می شود و در صورت صحت اطلاعات دسترسی درخواست شده به شما داده خواهد شد. با تشکر از همکاری شما.
</span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-flat">
                <div class="panel-heading">
                  <h5 class="panel-title">اطلاعات مدیر <a class="heading-elements-toggle"><i
                        class="icon-more"></i></a>
                  </h5>

                  <div class="heading-elements">
                    <ul class="icons-list">
                      <li><a data-action="collapse"></a></li>
                    </ul>
                  </div>
                </div>
                <div class="panel-body">
                  <form name="formManager">
                    <div class="form-group form-group-material">
                      <span class="help-block">نام ونام خانوادگی مدیر در این بخش بنویسید:</span>
                      <input type="text" name="edtNameManager" value="" class="form-control"
                             placeholder="نام و نام خانوادگی">
                      <label style="display: none;font-size: 12px" id="lblManagerName"
                             class="validation-error-label"> </label>
                    </div>
                    <div class="form-group form-group-material">
                      <span class="help-block"> کد ملی مدیر در این بخش بنویسید:</span>
                      <input type="text" name="edtNationalCodeManager" class="form-control" placeholder="کد ملی">
                      <label style="display: none;font-size: 12px" id="lblNationalCodeManager"
                             class="validation-error-label"> </label>
                    </div>
                    <div class="form-group form-group-material">
                      <span class="help-block">ایمیل مدیر را در بخش زیر وارد کنید:</span>
                      <input type="text" name="edtEmailManager" class="form-control" placeholder="ایمیل">
                      <label style="display: none;font-size: 12px" id="lblEmailManager"
                             class="validation-error-label"> </label>
                    </div>
                    <div class="form-group form-group-material">
                      <span class="help-block">شماره موبایل مدیر را وارد کنید:</span>
                      <input type="text" name="edtPhoneNumberManager" class="form-control" placeholder="شماره موبایل">
                      <label style="display: none;font-size: 12px" id="lblPhoneNumberManager"
                             class="validation-error-label"> </label>
                    </div>
                    <div class="form-group">
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

                      </div>
                      <label style="display: none;font-size: 12px" id="lblOstanManager"
                             class="validation-error-label"> </label>
                    </div>
                    <div style="margin-right: 15px">
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

                    <span class="help-block">عکس جلو کارت ملی:</span>

                    <div class="tac">
                      <div>
                        <img src="https://placehold.it/128x128" id="previewFrontNatinalCardImageManager" class="img-thumbnail">
                      </div>
                      <br>

                      <div class="tac">
                        <div class="btn btn-primary btn-file">
                          <i class="icon-file-plus"></i>
                          <input id="selectFrontNatinalCardImageManager" onchange="selectFile(this,'imageFrontNatinalCard')" type="file"
                                 accept=".png,.jpg,.jpeg" name="name" style="display: none;"/>
                          <sapn onclick="dialogdSelectFile('#selectFrontNatinalCardImageManager')">انتخاب عکس</sapn>
                        </div>
                      </div>
                      <br>

                      <div class="media-body">
                      <span
                        class="help-block">فرمت های قابل قبول jpg و png است و حداکثر سایز برابر با ۴۰۰ کبلو بایت است</span>
                      </div>
                      <label style="display: none;font-size: 12px" id="lblselectFrontNatinalCardImageManager"
                             class="validation-error-label"> </label>
                    </div>

                    <span class="help-block">عکس پشت کارت ملی:</span>

                    <div class="tac">
                      <div>
                        <img src="https://placehold.it/128x128" id="previewBackNatinalCardImageManager" class="img-thumbnail">
                      </div>
                      <br>

                      <div class="tac">
                        <div class="btn btn-primary btn-file">
                          <i class="icon-file-plus"></i>
                          <input id="selectBackNatinalCardImageManager" onchange="selectFile(this,'imageBackNatinalCard')" type="file"
                                 accept=".png,.jpg,.jpeg" name="name" style="display: none;"/>
                          <sapn onclick="dialogdSelectFile('#selectBackNatinalCardImageManager')">انتخاب عکس</sapn>
                        </div>
                      </div>
                      <br>

                      <div class="media-body">
                      <span
                        class="help-block">فرمت های قابل قبول jpg و png است و حداکثر سایز برابر با ۱۰۰ کبلو بایت است</span>
                      </div>
                      <label style="display: none;font-size: 12px" id="lblselectBackNatinalCardImageManager"
                             class="validation-error-label"> </label>
                    </div>

                    <span class="help-block">عکس صفحه اول شناسنامه:</span>

                    <div class="tac">
                    <div>
                        <img src="https://placehold.it/128x128" id="previewFirstPageBirthCertificationImageManager" class="img-thumbnail">
                    </div>
                    <br>

                    <div class="tac">
                        <div class="btn btn-primary btn-file">
                        <i class="icon-file-plus"></i>
                        <input id="selectFirstPageBirthCertificationImageManager" onchange="selectFile(this,'firstPageBirthCertificationImageManager')" type="file"
                                accept=".png,.jpg,.jpeg" name="name" style="display: none;"/>
                        <sapn onclick="dialogdSelectFile('#selectFirstPageBirthCertificationImageManager')">انتخاب عکس</sapn>
                        </div>
                    </div>
                    <br>

                    <div class="media-body">
                    <span
                        class="help-block">فرمت های قابل قبول jpg و png است و حداکثر سایز برابر با ۱۰۰ کبلو بایت است</span>
                    </div>
                    <label style="display: none;font-size: 12px" id="lblFirstPageBirthCertificationImageManager""
                            class="validation-error-label"> </label>
                    </div>
                    <br>
                    <div class="text-right">
                            <span onclick="formManagerValidation()" id="btnRegisterPsych" type="submit"
                                class="btn btn-primary"><?php if ($shenaseh == null) {
                                echo "ثبت";
                              } else {
                                  echo "ویرایش";
                              } ?><i
                               class="icon-arrow-left13 position-right"></i></span>
                    </div>

                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    function showStackTopLeft(type, msg) {
      if (typeof window.stackTopLeft === 'undefined') {
        window.stackTopLeft = {
          'dir1': 'down',
          'dir2': 'right',
          'firstpos1': 25,
          'firstpos2': 25,
          'push': 'top'
        };
      }
      var opts = {
        title: 'Over Here',
        text: "Check me out. I'm in a different stack.",
        stack: window.stackTopLeft
      };
      switch (type) {
        case 'error':
          opts.title = 'خطا';
          opts.text = msg;
          opts.type = 'error';
          break;
        case 'info':
          opts.title = 'Breaking News';
          opts.text = 'Have you met Ted?';
          opts.type = 'info';
          break;
        case 'success':
          opts.title = 'تبریک';
          opts.text = msg;
          opts.type = 'success';
          break;
      }
      PNotify.alert(opts);
    }
    $('.date-picker').persianDatepicker({
      initialValue: false,
      format: 'YYYY/MM/DD'
    });
    function dialogdSelectFile(id) {
      $(id).trigger('click');
    }

    var okPersonalPhoto = 1;
    var okFrontNatinalCardImageManager = 1;
    var okBackNatinalCardImageManager = 1;
    var okPageBirthCertificationImageManager = 1;

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
        } else if (type == 'imageFrontNatinalCard'){
          if (imgsize <= 400) {
            var reader = new FileReader();
            reader.onload = function (e) {
              $('#previewFrontNatinalCardImageManager')
                .attr('src', e.target.result)
                .width(400).height(200);
            };
            reader.readAsDataURL(input.files[0]);
            printOk('#lblselectFirstNatinalCardImageManager', '');
            okFrontNatinalCardImageManager = 0;
          } else {
            okFrontNatinalCardImageManager = 1;
            printError("#lblselectFrontNatinalCardImageManager", "حجم عکس ارسالی بیش از ۴۰۰ کیلو بایت است.");
          }

        } else if (type == 'imageBackNatinalCard'){
          if (imgsize <= 400) {
            var reader = new FileReader();
            reader.onload = function (e) {
              $('#previewBackNatinalCardImageManager')
                .attr('src', e.target.result)
                .width(400).height(200);
            };
            reader.readAsDataURL(input.files[0]);
            printOk('#lblselectBackNatinalCardImageManager', '');
            okBackNatinalCardImageManager = 0;
          } else {
            okBackNatinalCardImageManager = 1;
            printError("#lblselectBackNatinalCardImageManager", "حجم عکس ارسالی بیش از ۴۰۰ کیلو بایت است.");
          }

        } else if (type == 'firstPageBirthCertificationImageManager'){
          if (imgsize <= 400) {
            var reader = new FileReader();
            reader.onload = function (e) {
              $('#previewFirstPageBirthCertificationImageManager')
                .attr('src', e.target.result)
                .width(400).height(200);
            };
            reader.readAsDataURL(input.files[0]);
            printOk('#lblFirstPageBirthCertificationImageManager', '');
            okPageBirthCertificationImageManager = 0;
          } else {
            okPageBirthCertificationImageManager = 1;
            printError("#lblFirstPageBirthCertificationImageManager", "حجم عکس ارسالی بیش از ۴۰۰ کیلو بایت است.");
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
      var ostanData = $("#stateManager :selected").text();
      var cityData = $("#cityManager :selected").text();
      var cityValue = $('#stateManager').find('option:selected').val();
      var ostanValue = $('#cityManager').find('option:selected').val();
      var edtManagerName = document.forms["formManager"]["edtNameManager"].value;
      var edtEmailManager = document.forms["formManager"]["edtEmailManager"].value;
      var edtPhoneNumber = document.forms["formManager"]["edtPhoneNumberManager"].value;
      var edtNationalCode = document.forms["formManager"]["edtNationalCodeManager"].value;
      var gender = $("input[name='gender']:checked").val();

      var personalPhoto = $('#selectPersonalImageManager')[0].files[0];
      var frontNationalCard = $('#selectFrontNatinalCardImageManager')[0].files[0];
      var backNationalCard = $('#selectBackNatinalCardImageManager')[0].files[0];
      var firstPageBirthCertification = $('#selectFirstPageBirthCertificationImageManager')[0].files[0];

      var formDataPsych = new FormData();
      var data = "";

      okCity = 1;
      okOstan = 1;
      okNameManager = 1;
      okNationalCode = 1;
      okGender = 1;
      okEmail = 1;
      okPhone = 1;

      if (edtManagerName.length <= 2 && edtManagerName.length >= 30) {
        printError('#lblManagerName', 'نام وارد شده صحیح نیست');
        okNameManager = 1;
      } else if (edtManagerName.length == 0) {
        printError('#lblManagerName', 'لطفا نام را وارد کنید');
        okNameManager = 1;
      } else {
        printOk('#lblManagerName', '');
        okNameManager = 0;
      }

      if (edtNationalCode.length <= 2 && edtNationalCode.length >= 30) {
        printError('#lblNationalCodeManager', 'کد ملی وارد شده صحیح نیست');
        okNationalCode = 1;
      } else if (edtNationalCode.length == 0) {
        printError('#lblNationalCodeManager', 'لطفا کد ملی را وارد کنید');
        okNationalCode = 1;
      } else {
        printOk('#lblNationalCodeManager', '');
        okNationalCode = 0;
      }


      var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
      if (edtEmailManager.length <= 7 && edtEmailManager.length >= 1) {
        printError('#lblEmailManager', 'ایمیل وارد شده صحیح نیست');
        okEmail = 1;
      } else if (edtEmailManager.length == 0) {
        printError('#lblEmailManager', 'لطفا ایمیلی وارد کنید');
        okEmail = 1;
      } else {
        if (reg.test(edtEmailManager) == false) {
          printError('#lblEmailManager', 'ایمیل وارد شده صحیح نیست');
          okEmail = 1;
        } else {
          printOk('#lblEmailManager', '');
          okEmail = 0;
        }
      }
      if (edtPhoneNumber.length == 11) {
        printOk('#lblPhoneNumberManager', '');
        okPhone = 0;
      } else if (edtPhoneNumber.length == 0) {
        printError('#lblPhoneNumberManager', 'لطفا شماره موبایل را وارد کنید');
        okPhone = 1;
      } else {
        printError('#lblPhoneNumberManager', 'شماره موبایل وارد شده صحیح نیست');
        okPhone = 1;
      }

      if (cityValue == 0 && ostanValue == 0) {
        printError('#lblOstanManager', 'استان و شهر را انتخاب کنید');
        okCity = 1;
        okOstan = 1;
      } else {
        printOk('#lblOstanManager', '');
        okCity = 0;
        okOstan = 0;
      }

      if (gender == '0' || gender == '1') {
        printOk('#lblGender', '');
        okGender = 0;
      } else {
        printError('#lblGender', 'لطفا جنسیت را تعیین کنید');
        okGender = 1;
      }

      if (personalPhoto == null) {
        printError("#lblselectPersonalImageManager", "لطفا عکس پرسنلی را وارد کنید");
      }

      if (frontNationalCard == null) {
        printError("#lblselectFrontNatinalCardImageManager", "لطفا عکس روی کارت ملی را وارد کنید");
      }

      if (backNationalCard == null) {
        printError("#lblselectBackNatinalCardImageManager", "لطفا عکس پشت کارت ملی را وارد کنید");
      }

      if (firstPageBirthCertification == null) {
        printError("#lblFirstPageBirthCertificationImageManager", "لطفا عکس صفحه اول شناسنامه را وارد کنید");
      }
      //alert(okCity + '-' + okOstan + '-' + okEmail + '-' + okPhone + '-' + okNamePsych + '-' + okGender + '-' + okPic + '-' + okCV)

     
      if (okCity == 0 && okOstan == 0 && okNameManager == 0 && okGender == 0 && okPersonalPhoto == 0 && okFrontNatinalCardImageManager == 0 && okBackNatinalCardImageManager == 0 && okPageBirthCertificationImageManager == 0 && okEmail == 0 && okPhone == 0 && okNationalCode == 0) {
        
        formDataPsych.append('personalImage', personalPhoto);
        formDataPsych.append('frontNationalCard', frontNationalCard);
        formDataPsych.append('backNationalCard', backNationalCard);
        formDataPsych.append('firstPageBirthCertification', firstPageBirthCertification);
        
        formDataPsych.append('nameManager', edtManagerName);
        formDataPsych.append('nationalCode', edtNationalCode);
        formDataPsych.append('emailManager', edtEmailManager);
        formDataPsych.append('phoneNumber', edtPhoneNumber);
        formDataPsych.append('ostan',ostanValue);
        formDataPsych.append('city',cityValue );
        formDataPsych.append('gender', gender);
        
        $.ajax({
          url: '/admins/registerManager',
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

    $( "#verifyRequests" ).on('click', function() {
    if ($("#verifyRequestsUl").css("display") == 'none')
      $("#verifyRequestsUl").css({"display": "block"});
    else
      $("#verifyRequestsUl").css({"display": "none"});    
    });

  </script>
