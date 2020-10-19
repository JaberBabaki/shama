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
              	<li class=""><a href='/admins/dashboard'><i class="icon-home4"></i> <span>داشبورد</span></a></li>
                <li class=""><a href="informationAdmin"><i class="icon-people"></i> <span>اطلاعات کاربری</span></a></li>
                <li class="active"><a href="requestAccess"><i class="icon-merge"></i> <span>درخواست دسترسی</span></a></li>
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
            <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">درخواست دسترسی</span>
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
              <span class='text-semibold'>  اطلاعات مدیر در سامانه ثبت نشده است. از بخش اطلاعات کاربری اقدام به تکمیل اطلاعات کنید</span>
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
          <?php if($shenaseh != null): ?>
          <div class="col-md-12">
            <div class="col-md-12" id="alert">
              <div class="alert alert-info no-border tac">
                <button type="button" class="close" data-dismiss="alert"><span class="sr-only">Close</span></button>
              <span class="text-semibold ">برای درخواست دسترسی نوع دسترسی و اطلاعات مورد نیاز را با دقت وارد کنید و دکمه ثبت را بزنید. درخواست شما پس از بررسی جواب داده می شود. با تشکر از همکاری شما.
</span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-flat">
                <div class="navbar-collapse collapse" id="navbar-filter">
                  <ul class="nav navbar-nav">
                      <li class="active"><a href="setting" aria-expanded="false"><i class=" icon-portfolio position-left"></i> موضوع مشاوره</a></li>
                      <li class=""><a href="treatmentApproach" aria-expanded="false"><i class="icon-grid5 position-left"></i> رویکرد درمانی</a></li>
                  </ul>
                </div>
                <div class="panel-heading">
                  <h5 class="panel-title">درخواست دسترسی <a class="heading-elements-toggle"><i
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
                    <div class="form-group">
                      <span class="help-block">لطفا سطح دسترسی مورد درخواست را وارد کنید:</span>
                      <div class="row">
                        <div class="col-md-3">
                          <select 
                            name="accessTypes"
                            id="accessTypes"
                            style="height: 37px;padding-right: 3px;width: 100%"
                            class="form-control"
                          >
                            <option value="0" selected disabled>سطح دسترسی را انتخاب کنید</option>
                            <?php
                              $result = AdminsController::getAccessTypes();
                              for ($i = 0; $i <= count($result) - 1; $i++) {
                                echo '  <option value=' . $result[$i]['value'] . '>' . $result[$i]['accessName'] . '</option>';
                              }
                              ?>
                          </select>
                        </div>
                      </div>
                      <br>

                      <h1><span id="accessTypeText" class="help-block"></span></h1>
                      <div id="inputFields" class="row">
                      </div>
                      <label style="display: none;font-size: 12px" id="lblOstanManager"
                             class="validation-error-label"> </label>
                    </div>
                    
                    <br>
                    <div class="text-right">
                            <span onclick="formManagerValidation()" id="btnRegisterPsych" type="submit"
                                class="btn btn-primary">درخواست<i class="icon-arrow-left13 position-right"></i></span>
                    </div>

                  </form>

                </div>
              </div>
            </div>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <script>
      var country;
      var city;
      var province;
      var value;

      $('#accessTypes').change(function() {
        value = this.value;
        provinces ="<?php $result = UserCommonModel::getOstan(); for ($i = 0; $i <= count($result) - 1; $i++) {echo '  <option value=' . $result[$i]['ostan_id'] . '>' . $result[$i]['name'] . '</option>';}?>";
        formDataManager = new FormData();
        formDataManager.append('value', value);
        $.ajax({
          url: '/admins/whichInputField',
          type: 'POST',
          dataType: 'JSON',
          data: formDataManager,
          contentType: false,
          processData: false,
          success: function (result) {
            var json = result;
            if (json.Status == true) {
              if ((json.ResultData.code == 200)) {
                data = json.ResultData.data;
                country = data['c'];
                province = data['p'];
                city = data['ci'];
                if (country == 1 && province == 1 && city == 1){
                  $("#accessTypeText").text("روی دکمه ثبت کلیک کنید تا درخواست شما ارسال شود");
                  $("#inputFields").html('');
                }else if (country == 0 && province == 1 && city == 1){
                  $("#accessTypeText").text("استان مورد نظر را انتخاب کنید:");
                  $("#inputFields").html('<div class="col-md-3">'+'<div>'+'<select id="stateManager" class="form-control" style="height: 37px;padding-right: 3px;width: 100%">'+'<option value="0" selected disabled>'+'استان را انتخاب کنید'+'</option>'+provinces+'</select>'+'<label style="display: none;font-size: 12px" id="lblOstan" class="validation-error-label">'+'</label>'+'</div>'+'</div>');
                }else if (country == 0 && province == 0 && city == 1){
                  $("#accessTypeText").text("استان و شهر مورد نظر را انتخاب کنید:");
                  $("#inputFields").html('<div class="col-md-3">'+'<div>'+'<select id="stateManager" class="form-control" onchange="changeListOstan()">'+'style="height: 37px;padding-right: 3px;width: 100%">'+'<option value="0" selected disabled>'+'استان را انتخاب کنید'+'</option>'+provinces+'</select>'+'<label style="display: none;font-size: 12px" id="lblOstan" class="validation-error-label">'+'</label>'+'</div>'+'</div>'+
                  '<div class="col-md-3"><div><select id="cityManager" class="form-control" style="height: 37px;padding-right: 3px;width: 100%"><option value="0" selected disabled>شهر را انتخاب کنید</option></select></div></div>');
                }else if (country == 1 && province == 0 && city == 0){
                  a = 1;
                }else if (country == 0 && province == 1 && city == 0){
                  a = 1;
                }else if (country == 0 && province == 0 && city == 1){
                  a = 1;
                }else if (country == 1 && province == 1 && city == 0){
                  a = 1;
                }else if (country == 1 && province == 0 && city == 1){
                  a = 1;
                }else if (country == 0 && province == 0 && city == 0){
                  a = 1;
                }
              } 
            } 
          }
        });
      });

    function changeListOstan() {
      var id = $('#stateManager').find('option:selected').val();
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
          $('#cityManager').html(html);
        }
      });
    }

    function formManagerValidation() {
      trueInputs = 1;
      var formDataManager = new FormData();
      formDataManager.append('value', value);
      if (country == null){
        trueInputs = 0;
      }
      else if (country == 1 && province == 1 && city == 1){
        a = 1;
      }else if (country == 0 && province == 1 && city == 1){
        var ostanValue = $('#stateManager').find('option:selected').val();
        alert(ostanValue);
        if (ostanValue == null) {
          printError('#lblOstanManager', 'استان را انتخاب کنید');
          trueInputs = 0;
        } else {
          printOk('#lblOstanManager', '');
          formDataManager.append('province',ostanValue);
        }
      }else if (country == 0 && province == 0 && city == 1){
        var ostanValue = $('#stateManager').find('option:selected').val();
        var cityValue = $('#cityManager').find('option:selected').val();
        if (cityValue == 0 && ostanValue == 0) {
          printError('#lblOstanManager', 'استان و شهر را انتخاب کنید');
          trueInputs = 0;
        } else {
          formDataManager.append('province',ostanValue);
          formDataManager.append('city',cityValue );
          printOk('#lblOstanManager', '');
        }
      }else if (country == 1 && province == 0 && city == 0){
        a = 1;
      }else if (country == 0 && province == 1 && city == 0){
        a = 1;
      }else if (country == 0 && province == 0 && city == 1){
        a = 1;
      }else if (country == 1 && province == 1 && city == 0){
        a = 1;
      }else if (country == 1 && province == 0 && city == 1){
        a = 1;
      }else if (country == 0 && province == 0 && city == 0){
        a = 1;
      }

      var data = "";
      if (trueInputs == 1) {     
        $.ajax({
          url: '/admins/sendRequestedAccess',
          type: 'POST',
          dataType: 'JSON',
          data: formDataManager,
          contentType: false,
          processData: false,
          success: function (result) {
            var json = result;
            if (json.Status == true) {
              if ((json.ResultData.code == 200)) {
                var message = json.ResultData.message;
                showStackTopLeft('success', message);
                document.documentElement.scrollTop = 0;
                $('#divAlertDangerCenter').css({'display': 'none'});
                $('#divAlertSuccessAjaxCenter').css({'display': 'block'});
                $('#txtAlertMsg1Center').text("درخواست دسترسی جدیدی در سامانه ثبت گردید.");
              } 
            } else {
              var msg = json.Error.message;
              showStackTopLeft('error', msg);
            }

          }
        });
      }
    }

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

    function printError(elemId, hintMsg) {
      $(elemId).text(hintMsg);
      $(elemId).css({'display': 'block'});
    }
    function printOk(elemId, hintMsg) {
      $(elemId).text(" ");
      $(elemId).css({'display': 'none'});
    }

    $( "#verifyRequests" ).on('click', function() {
    if ($("#verifyRequestsUl").css("display") == 'none')
      $("#verifyRequestsUl").css({"display": "block"});
    else
      $("#verifyRequestsUl").css({"display": "none"});    
    });
  </script>
