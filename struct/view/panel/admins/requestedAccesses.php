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
                <li class=""><a href="requestAccess"><i class="icon-merge"></i> <span>درخواست دسترسی</span></a></li>
                <li class="active"><a href="requestedAccesses"><i class="icon-envelope"></i> <span>درخواست های ارسال شده</span></a></li>
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
            <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">درخواست های ارسال شده</span>
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
            <?php if($record == null){
              echo "<div class='alert alert-danger no-border tac' id='divAlertDangerCenter'>
              <button type='button' class='close' data-dismiss='alert'><span class='sr-only'>Close</span></button>
              <span class='text-semibold'>درخواستی ثبت نشده است</span>
              </div>";
            }?>
            <?php if ($record != null): ?>
              <div class="row">
                <div class="col-md-12">
                  <div class="panel panel-center">
                    <table class="table datatable-column-search-inputs dataTable" id="DataTables_Table_2" role="grid" aria-describedby="DataTables_Table_2_info">
                  <thead>
                    <tr role="row">
                      <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" aria-sort="ascending">نوع درخواست</th>
                      <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">استان</th>
                      <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">شهر</th>
                      <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">ساعت</th>
                      <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending">تاریخ</th>
                      <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending">وضعیت</th>
                      <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 100px;">عملیات</th>
                    </tr>
                  </thead>
                  <?php foreach($record as $item): ?>
                    <tbody>  
                      <tr role="row" class="odd">
                        <td class="sorting_1"><?=$item['accessName']?></td>
                        <td>
                          <?php if ($item['province'] == null){
                            echo 'کل';
                          } else {
                            echo $item['province'];
                          }
                          ?>
                        </td>
                        <td>
                          <?php if ($item['city'] == null){
                            echo 'کل';
                          } else {
                            echo $item['city'];
                          }
                          ?>
                        </td>
                        <td><?=$item['time']?></td>
                        <td><?=$item['date']?></td>
                        <td>
                          <?php 
                          if($item['status']==0){
                            echo '<span class="label label-info">در انتظار تایید</span>';
                          }else if($item['status']==1){
                            echo '<span class="label label-success">تایید شده</span>';
                          }else if($item['status']=2){
                            echo '<span class="label label-danger">تایید نشده</span>';
                          }  
                          ?>
                        </td>
                        <td class="text-center">
                          <ul class="icons-list">
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <i class="icon-menu9"></i>
                              </a>
                              <ul class="dropdown-menu dropdown-menu-right">
                                  <li><a href="#"><i class="icon-file-pdf"></i> حذف</a></li>
                                </ul>
                            </li>
                            </ul>
                          </td>
                      </tr>
                    </tbody>
                  <?php endforeach; ?>
                </table>
              </div>
            </div>
          </div>
            <?php endif; ?>
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
        if (ostanValue == null) {
          printError('#lblOstanManager', 'استان را انتخاب کنید');
          trueInputs = 0;
        } else {
          printOk('#lblOstanManager', '');
          formDataManager.append('province',ostanValue);
        }
      }else if (country == 0 && province == 0 && city == 1){
        var ostanData = $("#stateManager :selected").text();
        var ostanValue = $('#cityManager').find('option:selected').val();
        var cityData = $("#cityManager :selected").text();
        var cityValue = $('#stateManager').find('option:selected').val();
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
    
    $( "#verifyRequests" ).on('click', function() {
    if ($("#verifyRequestsUl").css("display") == 'none')
      $("#verifyRequestsUl").css({"display": "block"});
    else
      $("#verifyRequestsUl").css({"display": "none"});    
    });



  </script>
