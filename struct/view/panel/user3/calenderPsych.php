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
              <li><a href='/user3/dashboard'><i class="icon-home4"></i> <span>داشبورد</span></a>
              </li>
              <li><a href="informationCenter"><i class="icon-people"></i> <span>اطلاعات مرکز</span></a>
              </li>
              <li><a href="workshop"><i class="icon-stack2"></i> <span>تعریف دوره ها</span></a></li>
              <li class="active"><a href='/user3/registerPsych'><i class="icon-stack"></i> <span>ثبت  درمانگر</span></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="content-wrapper">
      <div class="page-header page-header-default">
        <div class="page-header-content">
          <div class="page-title">
            <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">تقویم درمانگر </span>
            </h4>
          </div>
        </div>
        <div class="breadcrumb-line" style="padding-left: 10px;padding-bottom: 10px;padding-top: 10px;"><a
            class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
          <a type="submit" href='/user3/registerPsych' class="btn btn-primary">ثبت درمانگر <i
              class="icon-list-ordered position-right"></i></a>
          <button type="submit" class="btn btn-primary">لیست درمانگر<i class="icon-plus2 position-right"></i></button>
          <a type="submit" href='/user3/calenderPsych' class="btn btn-primary">ثبت تقویم برای درمانگر<i
              class="icon-list-ordered position-right"></i></a>
        </div>
      </div>
      <div class="content">
        <div class="panel">
          <div class="panel-body">
            <h4 class="text-center content-group-lg">
              <span class="help-block" style="font-size: 14px"> نام درمانگر را از لیست انتخاب کنید </span>
              <span class="help-block" style="font-size: 14px"> برای درمانگر انتخاب شده می توانید تاریخ ثبت کنید </span>
            </h4>

            <form action="#" class="main-search">
              <div class="input-group content-group" style="width: 100%;">
                <div class="form-group">
                  <select id="lstPsychName" name="location" data-placeholder="نام درمانگر" class="select">
                    <option></option>
                    <?php echo $info ?>
                    </optgroup>
                  </select>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="panel">
          <div class="panel-body">
            <div class="form-group form-group-material">
              <div class="col-md-2">
                <input type="text" id="edtDateFrom" class="form-control date-picker" name="edtEstablishDate" readonly="readonly"
                       placeholder="از تاریخ">
              </div>
              <div class="col-md-2">
                <input type="text" id="edtDateTo" class="form-control date-picker" name="edtEstablishDate" readonly="readonly"
                       placeholder="تا تاریخ ">
              </div>
              <div class="col-md-4">
                <select data-placeholder="روز های هفته" multiple="" id="lstDays" class="select select2-hidden-accessible"
                        tabindex="-1" aria-hidden="true">
                  <option value="6">شنبه</option>
                  <option value="0">یکشنبه</option>
                  <option value="1">دوشنبه</option>
                  <option value="2">سه شنبه</option>
                  <option value="3">چهارشنبه</option>
                  <option value="4">پنچشنبه</option>
                  <option value="5">جمعه</option>
                </select>
              </div>
              <div class="col-md-2">
                  <input type="text" id="edtTimeStart" class="form-control time-picker" name="edtEstablishDate" readonly="readonly"
                         placeholder="از زمان ">
              </div>
              <div class="col-md-2">
                  <input type="text" id="edtTimeEnd" class="form-control time-picker" name="edtEstablishDate" readonly="readonly"
                         placeholder="تا زمان">
              </div>
              <br>
              <br>
              <div class="col-md-2">
                <input type="text" id="edtFee" class="form-control" name="edtEstablishFee"
                 placeholder="قیمت ">
              </div>
              <div class="col-md-2">
                <input type="text" id="edtDuration" class="form-control time-picker" name="edtEstablishDuration"
                 placeholder="طول هر نوبت">
              </div>
              <div class="col-md-2">
                <input type="text" id="edtTimeBeforAppointment" class="form-control time-picker" name="edtEstablishTimeBeforAppointment"
                 placeholder="بازه مجاز برای رزرو نوبت">
              </div>
            </div>
            <br>
            <br>
            <div class="text-right">
                  <span id="btnRegisterFounder" onclick="registerCalender()" type="submit"
                        class="btn btn-primary">ثبت <i
                      class="icon-arrow-left13 position-right"></i></span>
            </div>
            
          </div>
        </div>

        <!-- Basic datatable -->
        <div class="panel">
          <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
            <div class="datatable-header" style="background-color: #e3dcdc26">
              <div id="DataTables_Table_0_filter" class="dataTables_filter"><label><span>فیلتر:</span> <input type="search" class="" placeholder="Type to filter..." aria-controls="DataTables_Table_0"></label></div>
              <div class="dataTables_length" id="DataTables_Table_0_length"><label><span>نمایش:</span> <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="select2-hidden-accessible" tabindex="-1" aria-hidden="true"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select><span class="select2 select2-container select2-container--default select2-container--below" dir="rtl" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-DataTables_Table_0_length-vt-container"><span class="select2-selection__rendered" id="select2-DataTables_Table_0_length-vt-container" title="10">10</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></label></div>
            </div>
            <div class="datatable-scroll"><table class="table datatable-basic dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
              <thead>
                <tr style="background-color: #263238; color: white; font-size: 16px" role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ًRow-number" style="text-align: center;">ردیف</th><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First Name: activate to sort column descending" style="text-align: center;">نام و نام خانوادگی</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="End-date: activate to sort column ascending" style="text-align: center;">تاریخ</th><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Days" style="text-align: center;">روز</th><th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="End-hour" style="text-align: center;">ساعت</th><th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="End-hour" style="text-align: center;">وضعیت رزرو</th><th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="text-align: center;">عملیات</th></tr>
              </thead>
              <tbody>
              <style>
                tr:nth-of-type(odd) {
                background-color: #f5f5f5;
                }
              </style>
              <?php if ($regPsychs!=null):?>
                <?php for ($i=0; $i<count($regPsychs); $i++):?>    
                  <tr role="row" >
                    <td style="text-align: center;"><?=$i+1 ?></td>
                    <td style="text-align: center;"><?=$regPsychs[$i]['psychName']?></td>
                    <td style="text-align: center;">
                      <?=dateConverter($regPsychs[$i]['date'], 'enToFa')?>
                    </td>
                    <td style="text-align: center;">
                      <?php
                        $tmpArray = explode(',', $regPsychs[$i]["day"]);
                        for($j=0; $j<count($tmpArray); $j++){
                          switch($tmpArray[$j]){
                            case 6:
                              echo '<span> شنبه<br></span>';
                              break;
                            case 0:
                              echo '<span> یکشنبه<br></span>';
                              break;
                            case 1:
                              echo '<span> دوشنبه<br></span>';
                              break;
                            case 2:
                              echo '<span> سه شنبه<br></span>';
                              break;
                            case 3:
                              echo '<span> چهارشنبه<br></span>';
                              break;
                            case 4:
                              echo '<span> پنجشنبه<br></span>';
                              break;
                            case 5:
                              echo '<span> جمعه<br></span>';
                              break;
                          }
                        }
                      ?>
                    </td>
                  <td style="text-align: center;"><?=stringConverter($regPsychs[$i]["startTime"], 'enToFa')?><br> تا <br><?=stringConverter($regPsychs[$i]["endTime"], 'enToFa')?></td>
                  <td style="text-align: center;">
                    <?php if($regPsychs[$i]["appointment"]==1):?>
                      <span style="background-color: lightgreen; padding: 7px 17px; box-shadow: 2px 2px 5px grey;">رزرو شده (پرداخت در محل)</span>
                    <?php endif;?>
                    <?php if($regPsychs[$i]["appointment"]==2):?>
                      <span style="background-color: lightgreen; padding: 7px 17px; box-shadow: 2px 2px 5px grey;">رزرو شده (پرداخت آنلاین)</span>
                    <?php endif;?>
                    
                    <?php if($regPsychs[$i]["appointment"]==0):?>
                      <span style="background-color: yellow; padding: 7px 13px; box-shadow: 2px 2px 5px grey;">رزرو نشده</span>
                    <?php endif;?>
                  
                  </td>
                  <td class="text-center">
                    <ul class="icons-list">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                          <i class="icon-menu9"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                          <li><a href="#"><i class="icon-file-pdf"></i> ویرایش</a></li>
                          <li><a href="#"><i class="icon-file-excel"></i> حذف</a></li>
                        </ul>
                      </li>
                    </ul>
                  </td>
                </tr>
              <?php endfor;?> 
            <?php endif; ?>
              </tbody>
              </table></div><div class="datatable-footer"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 15 entries</div><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><a class="paginate_button previous disabled" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" id="DataTables_Table_0_previous">→</a><span><a class="paginate_button current" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0">2</a></span><a class="paginate_button next" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" id="DataTables_Table_0_next">←</a></div></div></div>
          </div>
        </div>
      </div>
        <!-- /basic datatable -->

      </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>


  $('.time-picker').persianDatepicker({
    initialValue: false,
    onlyTimePicker: true,
    format: 'LT'
  });

  $('.date-picker').persianDatepicker({
    initialValue: false,
    format: 'YYYY/MM/DD'
  });

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
        opts.title = '';
        opts.text = msg;
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

  function registerPsych() {
    var edtShenaseh = $("#edtShenaseh").val();
    var edtName = $("#edtNamePsych").val();
    var formData = new FormData();
    okName = 1;
    okShenaseh = 1;

    if (edtShenaseh.length == "") {
      okShenaseh = 1;
    } else {
      okShenaseh = 0;
    }

    if (edtName.length == "") {
      okName = 1;
    } else {
      okName = 0;
    }

    if (okName == 0 && okShenaseh == 0) {
      formData.append('id', edtShenaseh);
      $.ajax({
        url: '/user3/registerPsych',
        type: 'POST',
        dataType: 'JSON',
        data: formData,
        contentType: false,
        processData: false,
        success: function (result) {
          var json = result;
          if ((json.ResultData.code == 200)) {
            $('html, body').stop();
            showStackTopLeft('info', "لطفا اطلاعات درمانگر را مشاهده و سپس ثبت کنید.");
          } else {
            if ((json.Error.code == 402 || json.Error.code == 401)) {
              document.documentElement.scrollTop = 0.5;
              var msg = json.Error.message;
              showStackTopLeft('error', msg);
            }
          }
        }
      });
    } else {
    }
  }

function convertNumberFatoEn (str){
  var persianNumbers = [/۰/g, /۱/g, /۲/g, /۳/g, /۴/g, /۵/g, /۶/g, /۷/g, /۸/g, /۹/g];
  if(typeof str === 'string'){
    for(var i=0; i<10; i++){
      str = str.replace(persianNumbers[i], i);
    }
  }
  return str;
};

function registerCalender() {
  var psychShenaseh = $('#lstPsychName').find('option:selected').val();
  var edtFrom = $("#edtDateFrom").val();
  edtFrom = convertNumberFatoEn(edtFrom);
  moment.locale('fa'); 
  m = moment(edtFrom, 'YYYY/M/D');
  m.locale('en');
  edtFrom = m.format('YYYY/M/D');
  var edtTo = $("#edtDateTo").val();
  edtTo = convertNumberFatoEn(edtTo);
  moment.locale('fa'); 
  m = moment(edtTo, 'YYYY/M/D');
  m.locale('en');
  edtTo = m.format('YYYY/M/D');
  var edtDays = $("#lstDays").val();
  var edtTimeStart = $("#edtTimeStart").val();
  edtTimeStart = convertNumberFatoEn(edtTimeStart);
  var edtFee = $("#edtFee").val();
  edtFee = convertNumberFatoEn(edtFee);
  var edtDuration = $("#edtDuration").val();
  edtDuration = convertNumberFatoEn(edtDuration.split(" ")[0]);
  var edtTimeBeforAppointment = $("#edtTimeBeforAppointment").val();
  edtTimeBeforAppointment = convertNumberFatoEn(edtTimeBeforAppointment.split(" ")[0]);
  var edtTimeEnd = $("#edtTimeEnd").val();
  edtTimeEnd = convertNumberFatoEn(edtTimeEnd);
  var formData = new FormData();

  okShenaseh = 1;

  if (psychShenaseh.length == 0) {
    okShenaseh = 1;
  } else {
    okShenaseh = 0;
  }

  if (okShenaseh == 0) {
    formData.append('shenaseh', psychShenaseh);
    formData.append('from', edtFrom);
    formData.append('to', edtTo);
    formData.append('days', edtDays);
    formData.append('start', edtTimeStart);
    formData.append('end', edtTimeEnd);
    formData.append('fee', edtFee);
    formData.append('duration', edtDuration);
    formData.append('timeBeforAppointment', edtTimeBeforAppointment);

    //interval should be get in the front-end and replace with 1
    $.ajax({
      url: '/user3/registerCalender',
      type: 'POST',
      dataType: 'JSON',
      data: formData,
      contentType: false,
      processData: false,
      success: function (result) {
        var json = result;
        if ((json.ResultData.code == 200)) {
          var msg = json.ResultData.message;
          showStackTopLeft('success', msg);
        } else {
          if ((json.Error.code == 402 || json.Error.code == 404)) {
            document.documentElement.scrollTop = 0.5;
            var msg = json.Error.message;
            showStackTopLeft('error', msg);
          }
        }
      }
    });
  } else {
    showStackTopLeft('info', "لطفا درمانگری را انتخاب کنید.");

    }
  }

</script>

