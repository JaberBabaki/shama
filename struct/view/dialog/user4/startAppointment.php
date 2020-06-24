<div class="modal fade" id="startModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog cascading-modal" style="margin-top: 12px" role="document">
  <!--Content-->
    <div class="modal-content"> 
    <!--Modal cascading tabs-->
    <div class="modal-c-tabs">
      <div class="h2 text-center" id="textAppointment"></div>
      <br>
      



    <div style="display: none;" id="packageInfo">
        <span style="margin: 66px" class="p h4">تعداد جلسات مورد نیاز</span>
        <div class="wrap-input100 validate-input" data-validate="تعداد جلسات درمانی مورد نیاز" style="right: 9%">
            <input class="input100" type="text" id="sessionSize" placeholder="تعداد جلسات" style="width: 400px" value="">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
        </div>
        <span style="display: none; text-align: center;" class="form-validation" id="textSessionSize"></span>
        
        <span style="margin: 66px" class="p h4">موضوع مشاوره</span>
        <div class="wrap-input100 validate-input" data-validate="شیوه درمان" style="right: 9%">
          <select id="counselingCategories" class="input100" style="width: 400px" style="height: 37px;padding-right: 3px;width: 100%">
            <option value="0" selected disabled>موضوع مشاوره را وارد کنید</option>
            <?php foreach(UserCommonController::listCounselingCategories() as $item): ?>
              <option value=<?=$item['value']?>><?=$item['name']?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <span style="display: none; text-align: center;" class="form-validation" id="textcounselingCategories"></span>
        
        <span style="margin: 66px" class="p h4">رویکرد درمانی</span>
        <div class="wrap-input100 validate-input" data-validate="شیوه درمان" style="right: 9%">
          <select id="treatmentApproach" class="input100" style="width: 400px" style="height: 37px;padding-right: 3px;width: 100%">
            <option value="0" selected disabled>رویکرد درمانی را وارد کنید</option>
            <?php foreach(UserCommonController::listTreatmentApproach() as $item): ?>
              <option value=<?=$item['value']?>><?=$item['name']?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <span style="display: none; text-align: center;" class="form-validation" id="textTreatmentApproach"></span>



        <span style="margin: 66px" class="p h4">موضوع فرعی</span>
        <div class="wrap-input100 validate-input" data-validate="شیوه درمان" style="right: 9%">
          <select id="subTopic" class="input100" style="width: 400px" style="height: 37px;padding-right: 3px;width: 100%">
            <option value="0" selected disabled>موضوع فرعی را وارد کنید</option>
            <?php foreach(UserCommonController::listSubTopic() as $item): ?>
              <option value=<?=$item['value']?>><?=$item['name']?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <span style="display: none; text-align: center;" class="form-validation" id="textTreatmentApproach"></span>
        
        
        <span style="margin: 66px" class="p h4">نتیجه درمان</span>
        <div class="wrap-input100 validate-input" data-validate="نتیجه درمان" style="right: 9%">
            <input class="input100" type="text" id="treatmentResult" placeholder="نتیجه درمان" style="width: 400px" value="">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
        </div>

        <span style="display: none; text-align: center;" class="form-validation" id="textDiagnosis"></span>
        <span style="margin: 66px" class="p h4">تشخیص</span>
        <div class="wrap-input100 validate-input" data-validate="تشخیص" style="right: 9%">
            <input class="input100" type="text" id="diagnosis" placeholder="تشخیص" style="width: 400px" value="">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
        </div>
        <span style="display: none; text-align: center;" class="form-validation" id="textTreatmentResult"></span>
    </div>

    <div style="display: none;" id="btnBoxNewStart" class="btn-group btn-group-justified">
      <div class="btn-group">
        <button class="btn btn-success"  id="btnVerifyNewStart">تایید</button>
      </div>  
      <div class="btn-group">
        <button class="btn btn-danger"  id="btnCancelNewStart">انصراف</button>
      </div>  
    </div>

    <div style="display: none;" class="btn-group btn-group-justified" id="btnBoxStart">
      <div class="btn-group">
        <button class="btn btn-success"  id="btnStartVerify">تایید</button>
      </div>  
      <div class="btn-group">
        <button class="btn btn-primary"  id="btnStartModify">ویرایش</button>
      </div>  
      <div class="btn-group">
        <button class="btn btn-info"  id="btnStartCreatNewPackage">ایجاد درمان جدید</button>
      </div>  
      <div class="btn-group">
        <button class="btn btn-danger"  id="btnStartCancel">انصراف</button>
      </div>  
    </div>

    <div style="display: none;" id="btnBoxFinishWithEndAppointmentNumber" class="btn-group btn-group-justified">
      <div class="btn-group">
        <button class="btn btn-success"  id="btnFinishWithEndAppointmentNumberVerify">تایید</button>
      </div>  
      <div class="btn-group">
        <button class="btn btn-primary"  id="btnFinishWithEndAppointmentNumberModify">ویرایش</button>
      </div>  
      <div class="btn-group">
        <button class="btn btn-info"  id="btnFinishWithEndAppointmentNumberCreatNewPackage">ایجاد درمان جدید</button>
      </div>  
      <div class="btn-group">
        <button class="btn btn-danger"  id="btnFinishWithEndAppointmentNumberCancel">انصراف</button>
      </div>  
    </div>

    <div style="display: none;" id="boxVerifyAndNewPackage">
      <ul style="list-style: none; display: inline-flex; margin-bottom: 80px" >
        <li style="position: fixed; right: 65px;">
          <button class="btn btn-pill btn-success" style=" width: 180px" id="btnٰVerifyNewSession">تایید</button>
        </li>
        <li style="position: fixed; left: 65px;">
          <button class="btn btn-pill btn-secondary"  id="btnAddSessionNumber" style="background-color: lightcoral; width: 180px">ایجاد دسته نوبت جدید</button>
        </li>
      </ul>
    </div>

    <div style="display: none;" id="btnBoxFinish">
      <ul style="list-style: none; display: inline-flex;" >
        <li style="margin: 6px">
          <button class="btn btn-pill btn-success"  id="btnٰFinishVerify111n">تایید</button>
        </li>
        <li style="margin: 6px">
          <button class="btn btn-pill btn-info"  id="btnFinishCancel">شروع دسته نوبت جدید</button>
        </li>
        <li style="margin: 6px">
          <button class="btn btn-pill btn-warning"  id="btnFinishModify">ویرایش</button>
        </li>
      </ul>
    </div>

    <div style="display: none;" id="btnBoxFinishWithFillInfo" class="btn-group btn-group-justified">
      <div class="btn-group">
        <button class="btn btn-success"  id="btnٰFinishWithFillInfoVerify">تایید</button>
      </div>  
      <div class="btn-group">
        <button class="btn btn-danger"  id="btnFinishWithFillInfoCancel">انصراف</button>
      </div> 
    </div>
    
    <div style="display: none;" id="btnBoxFinishWithoutFillInfo" class="btn-group btn-group-justified">
      <div class="btn-group">
        <button class="btn btn-success"  id="btnٰFinishhWithoutFillInfoVerify">تایید</button>
      </div>  
      <div class="btn-group">
        <button class="btn btn-primary"  id="btnٰFinishWithoutFillInfoModify">ویرایش</button>
      </div>  
      <div class="btn-group">
        <button class="btn btn-info"  id="btnٰFinishWithoutFillInfoCreatNewPackage">ایجاد درمان جدید</button>
      </div>  
      <div class="btn-group">
        <button class="btn btn-danger"  id="btnFinishWithoutFillInfoCancel">انصراف</button>
      </div> 
    </div>
    <!-- <div id="boxEndAppointment" style="list-style: none; display: inline-flex; margin-bottom: 80px; display: none">
      <ul>
        <li style="position: fixed; right: 65px">
          <button class="btn btn-success" style=" width: 180px" id="‌btnVerifyEndAppointment"> تایید </button>
        </li>
        <li style="position: fixed; left: 65px">
          <button class="btn btn-danger"  id="‌btnCancelEndAppointment" style="background-color: lightcoral; width: 180px"> انصراف</button>
        </li>
      </ul>
    </div> -->
    </div>
    </div>
  </div>
</div>  

<script>
$('#table').html('<div class="h2 text-center">لطفا درمانگاه مورد نظر را انتخاب کنید</div>');
var timestamp = '<?=time();?>';
var date = new Date(timestamp * 1000);
var hours;
var minutes;
var seconds;
var formattedTime;
var booked=null;

var creatNewPackage = false;
var calendar_id;
var sessionNumber;
var className;
var baseURL = "<?php echo baseUrl(); ?>";

setInterval(updateTime, 1000);

function showBookedAppointments() {
    var formData = new FormData();
    counseling_id = $('#selectedCounseling').find('option:selected').val();
    formData.append('counseling_id',counseling_id);
    $.ajax({
      url: baseURL+'/user4/todayAppointments',
      type: 'POST',
      dataType: 'JSON',
      data: formData,
      contentType: false,
      processData: false,
      success: function (result) {
        jsonData = result;
        if (jsonData.Status == true) {
          booked = jsonData.ResultData;
          if(booked!=null){          
          var tableBody = '<table class="table datatable-basic dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">';
          tableBody += '<thead>';
          tableBody += '<tr style="background-color: #263238; color: white; font-size: 16px" role="row">';
          tableBody += '<th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ًRow-number" style="text-align: center;">ردیف</th>';
          tableBody += '<th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="End-hour" style="text-align: center;">بیمار</th>';
          tableBody += '<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="End-date: activate to sort column ascending" style="text-align: center;">تاریخ</th>';
          tableBody += '<th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Days" style="text-align: center;">ساعت</th>';
          tableBody += '<th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="End-hour" style="text-align: center;">روز</th>';
          tableBody += '<th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="End-hour" style="text-align: center;">تعداد جلسات انجام شده</th>';
          tableBody += '<th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="End-hour" style="text-align: center;">تعداد جلسات مورد نیاز</th>';
          tableBody += '<th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="text-align: center;">عملیات</th>';
          tableBody += '</tr>';
          tableBody += '</thead>';
          tableBody += '<tbody>';
          for(var i=0; i < booked.length; i++){

            if(booked[i]['status']=="started"){
              className = i;
              calendar_id = booked[i]['calendar_id'];
              tableBody += '<tr class="row'+i+ '"role="row" style="background-color: #FFFF00"  value="">';
            }else if(booked[i]['status']=="finished"){
              tableBody += '<tr class="row'+i+ '"role="row" style="background-color: #A3DB02" value="">';
            }else{
              tableBody += '<tr class="row'+i+ '"role="row" value="">';
            }
            
            tableBody += '<td style="text-align: center;">';
            tableBody += toPersianNum(i);
            tableBody += '</td>';
          
            tableBody += '<td class="userName'+i+'" style="text-align: center;">';
            tableBody += booked[i]['userName'];
            tableBody += '</td>';
          
            tableBody += '<td style="text-align: center;">';
            tableBody += dateConverter(booked[i]['date'], 'enToFa');
            tableBody += '</td>';
          
            tableBody += '<td style="text-align: center;">';
            tableBody += toPersianNum(booked[i]['endTime'])+'<br>'+'تا'+'<br>'+toPersianNum(booked[i]['startTime']);
            tableBody += '</td>';
          
            tableBody += '<td style="text-align: center;">';
            switch (booked[i]["day"]){
              case "6":
                tableBody += '<span> شنبه</span>';
                break;
              case "0":
                tableBody += '<span> یکشنبه</span>';
                break;
              case "1":
                tableBody += '<span> دوشنبه</span>';
                break;
              case "2":
                tableBody += '<span> سه شنبه</span>';
                break;
              case "3":
                tableBody += '<span> چهارشنبه</span>';
                break;
              case "4":
                tableBody += '<span> پنجشنبه</span>';
                break;
              case "5":
                tableBody += '<span> جمعه</span>';
                break;
            }
            tableBody +='</td>';
          
            tableBody +='<td class="sessionNumber'+i+'" style="text-align: center;">';
            tableBody += toPersianNum(booked[i]['sessionNumber']);
            tableBody +='</td>';
          
            tableBody +='<td class="sessionSize'+i+'" style="text-align: center;" id="textSessionSize'+i+'">';
            if (booked[i]['sessionNumber']==0){
              tableBody += 'نامعلوم';
            }else{
              tableBody += toPersianNum(booked[i]['sessionSize'])
            }
            tableBody +='</td>';
          
            tableBody +='<td class="text-center">';
            tableBody += '<ul class="icons-list">';
            tableBody += '<li class="dropdown">';
            tableBody += '<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">';
            tableBody += '<i class="icon-menu9"></i>';
            tableBody += '</a>';
            tableBody += '<ul class="dropdown-menu dropdown-menu-right">';
            if(booked[i]['status']=="notStarted"){
              tableBody += '<li class="start'+i+'" onclick="runStartAppointmentDialog('+booked[i]["calendar_id"]+','+i+')"><a ><i class="icon-file-pdf"></i>شروع</a></li>';
            }
            tableBody += '<li onclick="runAppointmenInfo('+booked[i]["calendar_id"]+','+i+')"><a href="#"><i class="icon-file-excel"></i> اطلاعات بیمار</a></li>';
            tableBody += '<li'
            if(booked[i]['status']=="finished" || booked[i]['status']=="notStarted"){
              tableBody += ' style="display: none" '
            }
            tableBody += ' class="end'+i+'" onclick="runEndAppointmentDialog('+booked[i]["calendar_id"]+','+i+')"><a href="#"><i class="icon-file-excel"></i> پایان</a></li>';
            // tableBody += '<li style="display: none" class="end'+i+'" onclick="runEndAppointmentDialog('+booked[i]["calendar_id"]+','+i+')"><a href="#"><i class="icon-file-excel"></i> پایان</a></li>';
            tableBody += '</ul>';
            tableBody += '</li>';
            tableBody += '</ul>';
            tableBody +='</td>';
            
            tableBody+='</tr>';


          }
          tableBody+='</tbody>';
          tableBody+='</table>';
          $('#table').html(tableBody);

        }else{
          $('#table').html('<div class="h2 text-center">نوبت رزرو شده ایی وجود ندارد</div>');
        }
        }
       }
    });
  }



$("#btnCancelNewStart").click(function(){
  $("#startModal").modal("hide"); 
});

$("#btnVerifyNewStart").click(function(){
  sendStart(calendar_id, className, sessionNumber, false);
});

$("#btnCancelStart").click(function(){
  $("#startModal").modal("hide"); 
});

$("#btnStartCancel").click(function(){
  $("#startModal").modal("hide"); 
});

$("#btnFinishFinishWithoutFillInfoCancel").click(function(){
  $("#startModal").modal("hide"); 
});

$("#btnFinishWithFillInfoCancel").click(function(){
  $("#startModal").modal("hide"); 
});

$("#btnFinishWithEndAppointmentNumberCancel").click(function(){
  $("#startModal").modal("hide"); 
});

$("#btnModify").click(function(){
  $("#sessionSize").prop('disabled', false);
  $("#treatmentApproach").prop('disabled', false);
  $("#subTopic").prop('disabled', false);
  $("#counselingCategories").prop('disabled', false);
  $("#treatmentResult").prop('disabled', false);
  $("#diagnosis").prop('disabled', false);
});

$("#btnStartModify").click(function(){
  $("#sessionSize").prop('disabled', false);
  $("#treatmentApproach").prop('disabled', false);
  $("#subTopic").prop('disabled', false);
  $("#counselingCategories").prop('disabled', false);
  $("#treatmentResult").prop('disabled', false);
  $("#diagnosis").prop('disabled', false);
});

$("#btnٰFinishWithoutFillInfoModify").click(function(){
  $("#sessionSize").prop('disabled', false);
  $("#treatmentApproach").prop('disabled', false);
  $("#subTopic").prop('disabled', false);
  $("#counselingCategories").prop('disabled', false);
  $("#treatmentResult").prop('disabled', false);
  $("#diagnosis").prop('disabled', false);
});

$("#btnFinishWithEndAppointmentNumberModify").click(function(){
  $("#sessionSize").prop('disabled', false);
  $("#treatmentApproach").prop('disabled', false);
  $("#subTopic").prop('disabled', false);
  $("#counselingCategories").prop('disabled', false);
  $("#treatmentResult").prop('disabled', false);
  $("#diagnosis").prop('disabled', false);
});

$("#btnStartVerify").click(function(){
  sendStart(calendar_id, className, sessionNumber, false);
});

$("#btnCreatNewPackage").click(function(){
  sendStart(calendar_id, className, sessionNumber, true);
});

$("#btnٰFinishWithFillInfoVerify").click(function(){
      var formData = new FormData();
      formData.append('calendar_id', calendar_id);
      var sessionSize = $("#sessionSize").val();
      sessionSize = covertNumber(sessionSize, 'faToEn');
      sessionSize = parseInt(sessionSize);
      var treatmentResult = $("#treatmentResult").val();
      var treatmentApproach = $("#treatmentApproach").val();
      var subTopic = $("#subTopic").val();
      var counselingCategories = $("#counselingCategories").val();
      var diagnosis = $("#diagnosis").val();
      status1 = checkSessionSize(sessionSize);
      status2 = checkTreatmentApproach(treatmentApproach);
      status3 = checkTreatmentResult(treatmentResult);
      status3 = checkDiagnosis(diagnosis);
      if (status1 == true && status2 == true && status3 == true){
        formData.append('startNewPackage', true);
        formData.append('treatment_result', treatmentResult);
        formData.append('session_size', sessionSize );
        formData.append('treatment_approach', treatmentApproach);
        formData.append('sub_topic', subTopic);
        formData.append('counseling_category', counselingCategories);
        formData.append('diagnosis', diagnosis);
        sendEndAppointment(formData, className, sessionNumber, sessionSize);            
      }     
    });

$("#btnٰFinishhWithoutFillInfoVerify").click(function(){
  var formData = new FormData();
  formData.append('calendar_id', calendar_id);
  var sessionSize = $("#sessionSize").val();
  sessionSize = covertNumber(sessionSize, 'faToEn');
  sessionSize = parseInt(sessionSize);
  var treatmentResult = $("#treatmentResult").val();
  var treatmentApproach = $("#treatmentApproach").val();
  var subTopic = $("#subTopic").val();
  var counselingCategories = $("#counselingCategories").val();
  var diagnosis = $("#diagnosis").val();
  status1 = checkSessionSize(sessionSize);
  status2 = checkTreatmentApproach(treatmentApproach);
  status3 = checkTreatmentResult(treatmentResult);
  status3 = checkDiagnosis(diagnosis);
  if (status1 == true && status2 == true && status3 == true){
    formData.append('startNewPackage', false);
    formData.append('treatment_result', treatmentResult);
    formData.append('session_size', sessionSize );
    formData.append('treatment_approach', treatmentApproach);
    formData.append('sub_topic', subTopic);
    formData.append('counseling_category', counselingCategories);
    formData.append('diagnosis', diagnosis);
    sendEndAppointment(formData, className, sessionNumber, sessionSize);            
  }     
});

$("#btnStartCreatNewPackage").click(function(){
  $('.sessionSize'+className).text('نامعلوم');
  $('.sessionNumber'+className).text('۰');
  sendStart(calendar_id, className, sessionNumber, true);
});

$("#btnFinishWithEndAppointmentNumberCreatNewPackage").click(function(){
  $('.sessionSize'+className).text('نامعلوم');
  $('.sessionNumber'+className).text('۰');
  sendStart(calendar_id, className, sessionNumber, true);


  // $("#sessionSize").prop('disabled', false);
  // $("#treatmentApproach").prop('disabled', false);
  // $("#treatmentResult").prop('disabled', false);
  // $("#diagnosis").prop('disabled', false);
  // $("#textAppointment").html("<div>"+'لطفا اطلاعات بیمار مورد نظر را تکمیل کنید'+"</div>");
  // $("#sessionSize").val('');
  // $("#treatmentResult").val('');
  // $("#treatmentApproach").val('');
  // $("#diagnosis").val('');
  // creatNewPackage = true;
});
    
$("#btnFinishWithEndAppointmentNumberVerify").click(function(){
  var sessionNumber = $('.sessionNumber'+className).text();
  sessionNumber = covertNumber(sessionNumber, 'faToEn');
  sessionNumber = parseInt(sessionNumber);
  var sessionSize = $("#sessionSize").val();
  sessionSize = covertNumber(sessionSize, 'faToEn');
  sessionSize = parseInt(sessionSize);
  if (sessionSize<=sessionNumber){
    $("#textAppointment").html("<div>"+'برای ادامه روند درمان باید تعداد جلسات مورد نیاز را افزایش دهید سپس روی تایید کلیک کنید'+"</div>");
  }else{
    // if (creatNewPackage==true){
      // sendStart(calendar_id, className, sessionNumber, true);
      // creatNewPackage = false;
    // }else{
      sendStart(calendar_id, className, sessionNumber, false);
    // }
      
    $('.sessionSize'+className).text(sessionSize);
  }
});

function hideAll(){
  
}

function runAppointmenInfo(ـcalendar_id, className){
    var formData = new FormData();
    $("#btnBoxNewStart").hide();
    $("#btnBoxStart").hide();
    formData.append('calendar_id',ـcalendar_id);
    formData.append('infoRequest',true);
    
    $.ajax({
      url: baseURL+'/user4/appointmentStatus',
      type: 'POST',
      dataType: 'JSON',
      data: formData,
      contentType: false,
      processData: false,
      success: function (result) {
        jsonData = result;
        if (jsonData.Status == true) {
          sessionNumber = jsonData.ResultData.sessionNumber;
          sessionSize = jsonData.ResultData.sessionSize;
          if (sessionSize==null && sessionNumber==0){
            $("#btnBoxFinishWithFillInfo").hide();
            $("#packageInfo").hide();
            $("#textAppointment").html("<div>"+'بیمار مورد نظر جلسه درمانی تمام شده ندارد'+"</div>");
            $("#startModal").modal("show");
          }else if (parseInt(sessionSize)>parseInt(sessionNumber)){
            sessionNumber = covertNumber(sessionNumber, 'enToFa');
            $("#textAppointment").html("<div>"+" نوبت  "+sessionNumber+"  بیمار مورد نظر انجام شده است "+"</div>"+"<div>"+"اطلاعات درمانی بیمار:"+"</div>");
            $("#startModal").modal("show");
            $("#packageInfo").show();
            $("#sessionSize").val(jsonData.ResultData.sessionSize);
            $("#treatmentApproach").val(jsonData.ResultData.treatmentApproach);
            
            $("#treatmentResult").val(jsonData.ResultData.treatmentResult);
            $("#diagnosis").val(jsonData.ResultData.diagnosis);
            $("#sessionSize").prop('disabled', true);
            $("#treatmentApproach").prop('disabled', true);
            $("#treatmentResult").prop('disabled', true);
            $("#diagnosis").prop('disabled', true);
          }else{
            $("#textAppointment").html("<div>"+' نوبت های بیمار مورد نظر تمام شده است'+"</div>");
            $("#startModal").modal("show");
            $("#packageInfo").show();
            $("#sessionSize").val(jsonData.ResultData.sessionSize);
            $("#treatmentApproach").val(jsonData.ResultData.treatmentApproach);
            $("#treatmentResult").val(jsonData.ResultData.treatmentResult);
            $("#diagnosis").val(jsonData.ResultData.diagnosis);
            $("#sessionSize").prop('disabled', true);
            $("#treatmentApproach").prop('disabled', true);
            $("#treatmentResult").prop('disabled', true);
            $("#diagnosis").prop('disabled', true);
          }
        }
       }
    });
}
function runStartAppointmentDialog(_calendar_id, _className){
    var formData = new FormData();
    formData.append('calendar_id',_calendar_id);
    formData.append('infoRequest', false);
    $("#btnBoxFinishWithEndAppointmentNumber").hide();
    $.ajax({
      url: baseURL+'/user4/appointmentStatus',
      type: 'POST',
      dataType: 'JSON',
      data: formData,
      contentType: false,
      processData: false,
      success: function (result) {
        jsonData = result;
        if (jsonData.Status == false) {
          $("#startModal").modal("show");
          $("#textAppointment").html("<div>"+jsonData.Message+"</div>");
        }else{
          className = _className;
          calendar_id = _calendar_id;
          sessionNumber = jsonData.ResultData.sessionNumber;
          sessionSize = jsonData.ResultData.sessionSize;
          if (sessionNumber==0){
            $("#textAppointment").html("<div>"+'شروع درمان جدید برای بیمار مورد نظر'+"</div>");
            $("#btnBoxNewStart").show();
            $("#startModal").modal("show");
            $('.sessionSize'+className).text('نامعلوم');
          }else if (parseInt(sessionSize)>parseInt(sessionNumber)){
            num = parseInt(sessionNumber)+1;
            num = num.toString();
            $("#textAppointment").html("<div>"+" نوبت  "+num+"  بیمار مورد نظر است "+"</div>"+"<div>"+"اطلاعات درمانی بیمار:"+"</div>");
            $("#btnBoxStart").show();
            $("#startModal").modal("show");
            $("#packageInfo").show();
            $("#btnBoxFinishWithoutFillInfo").hide();
            $("#sessionSize").val(jsonData.ResultData.sessionSize);
            $("#treatmentApproach").val(jsonData.ResultData.treatmentApproach);
            $("#subTopic").val(jsonData.ResultData.subTopic);
            $("#counselingCategories").val(jsonData.ResultData.counselingCategories);

            $("#treatmentResult").val(jsonData.ResultData.treatmentResult);
            $("#diagnosis").val(jsonData.ResultData.diagnosis);
            $("#sessionSize").prop('disabled', true);
            $("#treatmentApproach").prop('disabled', true);
            $("#subTopic").prop('disabled', true);
            $("#counselingCategories").prop('disabled', true);
            
            $("#treatmentResult").prop('disabled', true);
            $("#diagnosis").prop('disabled', true);
          }else{
            $("#textAppointment").html("<div>"+' نوبت های بیمار مورد نظر تمام شده است'+"</div>");
            $("#btnBoxFinishWithEndAppointmentNumber").show();
            $("#startModal").modal("show");
            $("#packageInfo").show();
            $("#sessionSize").val(jsonData.ResultData.sessionSize);
            $("#treatmentApproach").val(jsonData.ResultData.treatmentApproach);
            $("#subTopic").val(jsonData.ResultData.subTopic);
            $("#counselingCategories").val(jsonData.ResultData.counselingCategories);
            
            $("#treatmentResult").val(jsonData.ResultData.treatmentResult);
            $("#diagnosis").val(jsonData.ResultData.diagnosis);
            $("#sessionSize").prop('disabled', true);
            $("#treatmentApproach").prop('disabled', true);
            $("#subTopic").prop('disabled', true);
            $("#counselingCategories").prop('disabled', true);
            
            $("#treatmentResult").prop('disabled', true);
            $("#diagnosis").prop('disabled', true);
          }
        }
       }
    });
}

function sendStart(calendar_id, className, sessionNumber, startNewPackage){
  var formData = new FormData();
  var sessionNumber = $('.sessionNumber'+className).text();
  sessionNumber = covertNumber(sessionNumber, 'faToEn');
  sessionNumber = parseInt(sessionNumber);
  formData.append('calendar_id',calendar_id);            
  if (sessionNumber==0){
    formData.append('startNewPackage', startNewPackage);
    sendStartAjax(formData, className, sessionNumber);
  }else{
    var sessionSize = $("#sessionSize").val();
    sessionSize = covertNumber(sessionSize, 'faToEn');
    sessionSize = parseInt(sessionSize);
    var treatmentResult = $("#treatmentResult").val();
    var treatmentApproach = $("#treatmentApproach").val();
    var subTopic = $("#subTopic").val();
    var counselingCategories = $("#counselingCategories").val();

    var diagnosis = $("#diagnosis").val();
    status1 = checkSessionSize(sessionSize);
    status2 = checkTreatmentApproach(treatmentApproach);
    status3 = checkSubTopic(subTopic);
    status4 = checkCounselingCategories(counselingCategories);
    status5 = checkTreatmentResult(treatmentResult);
    status6 = checkDiagnosis(diagnosis);
    if (status1 == true && status2 == true && status3 == true && status4 == true && status5 == true && status6 == true){
      formData.append('startNewPackage', startNewPackage);
      formData.append('treatment_result', treatmentResult);
      formData.append('session_size', sessionSize );
      formData.append('treatment_approach', treatmentApproach);
      formData.append('sub_topic', subTopic);
      formData.append('counseling_category', counselingCategories);
      formData.append('diagnosis', diagnosis);
      sendStartAjax(formData, className, sessionNumber);
    }     
  }
  
}

function sendStartAjax(formData, className, sessionNumber){
  var jsonData;
  $.ajax({
    url: baseURL+'/user4/startAppointment',
    type: 'POST',
    dataType: 'JSON',
    data: formData,
    contentType: false,
    processData: false,
    success: function (result) {
      jsonData = result;
      if (jsonData.Status == true) {
        if (sessionNumber !=0){
          sessionSize = $("#sessionSize").val();
          sessionSize = covertNumber(sessionSize, 'enToFa');
          $('.sessionSize'+className).text(sessionSize);
        }
        $("#startModal").modal("hide");
        $("#btnBoxStart").hide();
        $("#btnBoxNewStart").hide();
        $('.start'+className).hide();
        $('.end'+className).show();
        $('.row'+className).val("start=done");
        $('.row'+className).css("background-color", "#FFFF00");
        if (sessionNumber==0){
          Swal.fire({
                type: 'success',
                position: 'top',
                title: 'درمان جدید برای بیمار مورد نظر با موفقیت آغاز شد',
                showConfirmButton: false,
                timer: 2000, 
            });   
        }else{
          Swal.fire({
                type: 'success',
                position: 'top',
                title: 'نوبت با موفقیت آغاز شد',
                showConfirmButton: false,
                timer: 2000, 
            });   
        }
        
      }
    }
  });
}

function runEndAppointmentDialog(_calendar_id, className){
    var sessionNumber = $('.sessionNumber'+className).text();
    sessionNumber = covertNumber(sessionNumber, 'faToEn');
    sessionNumber = parseInt(sessionNumber);
    var formData = new FormData();
    $("#startModal").modal("show");
    $("#packageInfo").show();
    var formData = new FormData();
    formData.append('calendar_id', _calendar_id);
    formData.append('infoRequest',true);
    $.ajax({
      url: baseURL+'/user4/appointmentStatus',
      type: 'POST',
      dataType: 'JSON',
      data: formData,
      contentType: false,
      processData: false,
      success: function (result) {
        jsonData = result;
        if (jsonData.Status == true) {
          sessionNumber = jsonData.ResultData.sessionNumber;
          sessionSize = jsonData.ResultData.sessionSize;
          if (sessionNumber==0){
            $("#textAppointment").html("<div>"+'لطفا اطلاعات درمانی بیمار مورد نظر را تکمیل نمایید'+"</div>");  
            $("#btnBoxFinishWithoutFillInfo").hide();
            $("#btnBoxFinishWithEndAppointmentNumber").hide();
            $("#btnBoxFinishWithFillInfo").show();
            $("#sessionSize").val('');
            $("#treatmentResult").val('');
            $("#treatmentApproach").val('');
            $("#diagnosis").val('');
            $("#sessionSize").prop('disabled', false);
            $("#treatmentApproach").prop('disabled', false);
            $("#treatmentResult").prop('disabled', false);
            $("#diagnosis").prop('disabled', false);
          }else if (parseInt(sessionSize)>parseInt(sessionNumber)){
            $("#btnBoxFinishWithoutFillInfo").show();
            $("#btnBoxFinishWithEndAppointmentNumber").hide();
            $("#btnBoxFinishWithFillInfo").hide();
            sessionNumber = covertNumber(sessionNumber, 'enToFa');
            $("#textAppointment").html("<div>"+" نوبت  "+sessionNumber+"  بیمار مورد نظر انجام شده است "+"</div>"+"<div>"+"اطلاعات درمانی بیمار:"+"</div>");
            $("#startModal").modal("show");
            $("#packageInfo").show();
            $("#sessionSize").val(jsonData.ResultData.sessionSize);
            $("#treatmentApproach").val(jsonData.ResultData.treatmentApproach);
            $("#treatmentResult").val(jsonData.ResultData.treatmentResult);
            $("#diagnosis").val(jsonData.ResultData.diagnosis);
            $("#sessionSize").prop('disabled', true);
            $("#treatmentApproach").prop('disabled', true);
            $("#treatmentResult").prop('disabled', true);
            $("#diagnosis").prop('disabled', true);
          }else{
            $("#textAppointment").html("<div>"+' نوبت های بیمار مورد نظر تمام شده است'+"</div>");
            $("#startModal").modal("show");
            $("#packageInfo").show();
            $("#sessionSize").val(jsonData.ResultData.sessionSize);
            $("#treatmentApproach").val(jsonData.ResultData.treatmentApproach);
            $("#treatmentResult").val(jsonData.ResultData.treatmentResult);
            $("#diagnosis").val(jsonData.ResultData.diagnosis);
            $("#sessionSize").prop('disabled', true);
            $("#treatmentApproach").prop('disabled', true);
            $("#treatmentResult").prop('disabled', true);
            $("#diagnosis").prop('disabled', true);
          }
        }
      }
    });
}

function sendEndAppointment(formData, className, sessionNumber, sessionSize){
  $.ajax({
        url: baseURL+'/user4/endAppointment',
        type: 'POST',
        dataType: 'JSON',
        data: formData,
        contentType: false,
        processData: false,
        success: function (result) {
          jsonData = result;
          if (jsonData.Status == true) { 
            $('.end'+className).hide();
            sessionNumber = $('.sessionNumber'+className).text();
            sessionNumber = covertNumber(sessionNumber, 'faToEn')
            sessionNumber = parseInt(sessionNumber)+1;
            sessionNumber = sessionNumber.toString();
            sessionSize = $("#sessionSize").val();
            $('.sessionNumber'+className).text(covertNumber(sessionNumber, 'enToFa'));
            $('.sessionSize'+className).text(covertNumber(sessionSize, 'enToFa')); 
            $('.row'+className).css("background-color", "#A3DB02");
            $("#startModal").modal("hide");
            $("#packageInfo").hide();
            $("#btnBoxFinishWithFillInfo").hide();

            Swal.fire({
              type: 'success',
              position: 'top',
              title: 'نوبت با موفقیت به پایان رسید',
              showConfirmButton: false,
              timer: 1500, 
            });
          }
        }
      });
}

function checkSessionSize(sessionSize){
  var status = true;
  if (sessionSize.length == 0) {
    $("#textSessionSize").css({"display": "block", "color": "red"});
    $("#textSessionSize").text("لطفا تعداد جلسات موردنیاز را وارد کنید");
    status = false;
  }else{
    sessionSize = covertNumber(sessionSize, 'faToEn');
    sessionSize = parseInt(sessionSize);
    if (!Number.isInteger(sessionSize)) {
    $("#textSessionSize").css({"display": "block", "color": "red"});
    $("#textSessionSize").text(" لطفا عدد وارد کنید");
    status = false;
    } else {    
      $("#textSessionSize").css({"display": "none"});
      $("#textSessionSize").text("");
    } 
  } 
  
  return status;
}

function checkTreatmentResult(treatmentResult){
  var status = true;
  if (treatmentResult.length == 0) {
    $("#textTreatmentResult").css({"display": "block", "color": "red"});
    $("#textTreatmentResult").text("لطفا نتیجه درمان را وارد کنید");
    status = false;
  } else {    
    $("#textTreatmentResult").css({"display": "none"});
    $("#textTreatmentResult").text("");
  }
  return status;
}

function checkTreatmentApproach(treatmentApproach){
  var status = true;
  if (treatmentApproach.length == 0) {
    $("#textTreatmentApproach").css({"display": "block", "color": "red"});
    $("#textTreatmentApproach").text("لطفا شیوه درمان را وارد کنید");
    status = false;
  } else {    
    $("#textTreatmentApproach").css({"display": "none"});
    $("#textTreatmentApproach").text("");
  }
  return status;
}

function checkSubTopic(subTopic){
  var status = true;
  if (subTopic.length == 0) {
    $("#textSubTopic").css({"display": "block", "color": "red"});
    $("#textSubTopic").text("لطفا شیوه درمان را وارد کنید");
    status = false;
  } else {    
    $("#textSubTopic").css({"display": "none"});
    $("#textSubTopic").text("");
  }
  return status;
}

function checkCounselingCategories(counselingCategories){
  var status = true;
  if (counselingCategories.length == 0) {
    $("#textCounselingCategories").css({"display": "block", "color": "red"});
    $("#textCounselingCategories").text("لطفا شیوه درمان را وارد کنید");
    status = false;
  } else {    
    $("#textCounselingCategories").css({"display": "none"});
    $("#textCounselingCategories").text("");
  }
  return status;
}

function checkDiagnosis(diagnosis){
  var status = true;
  if (diagnosis.length == 0) {
    $("#textDiagnosis").css({"display": "block", "color": "red"});
    $("#textDiagnosis").text("لطفا تشخیص را انتخاب کنید");
    status = false;
  } else {    
    $("#textDiagnosis").css({"display": "none"});
    $("#textDiagnosis").text("");
  }
  return status;
}

function covertNumber(str, convert='faToEn'){
  var englishToPersian = [/۰/g, /۱/g, /۲/g, /۳/g, /۴/g, /۵/g, /۶/g, /۷/g, /۸/g, /۹/g];
  var persianToEnglish = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
  if(typeof str === 'string'){
    if (convert=='faToEn'){
      for(var i=0; i<10; i++){
        str = str.replace(englishToPersian[i], i);
      }
  }else{
    for(var i=0; i<10; i++){
        str = str.replace(i, persianToEnglish[i]);
      }
    }
  }

  return str;
}


  function updateTime(){
    hours = date.getHours();
    minutes = "0" + date.getMinutes();
    seconds = "0" + date.getSeconds();
    formattedTime = hours + ':' + minutes.substr(-2) + ':' + seconds.substr(-2);
    $('#time').html(formattedTime);
    date.setSeconds( date.getSeconds() + 1 );
    if (booked!=null){
      for (var i=0; i<booked.length; i++){
        var tmp = booked[i]["startTime"].split(":");
        var startHour = tmp[0];
        var startMin = tmp[1];
        tmp = booked[i]["endTime"].split(":");
        var endHour = tmp[0];
        var endMin = tmp[1];
        var startTimeObject = new Date();
        startTimeObject.setHours(startHour, startMin, "00");
        var endTimeObject = new Date(startTimeObject);
        endTimeObject.setHours(endHour, endMin, "00");
        var currentTimeObject = new Date();
        currentTimeObject.setHours(date.getHours(), date.getMinutes(), "00")
        // alert(startTimeObject.getTime());
        // alert(currentTimeObject.getTime());
        // alert(endTimeObject.getTime());
        if (startTimeObject.getTime() < currentTimeObject.getTime() && currentTimeObject.getTime()<endTimeObject.getTime() && $('.row'+i).val()!="start=done" && booked[i]['status']=='notStarted'){
          $('.row'+i).css("background-color", "#D8BFD8");
        }else if(currentTimeObject.getTime()>endTimeObject.getTime() && $('.row'+i).val()!="start=done" && booked[i]['status']=='notStarted'){
          $('.row'+i).css("background-color", "#ff6666");
        }
      }
    }
  }

  
  function dateConverter(date){
    return today = new Date(date).toLocaleDateString('fa-IR');
  }


  function toPersianNum(number)
    {
      number.toString();
      for(var i=0; i<number.length; i++){
        number = number.replace("1","۱");
        number = number.replace("2","۲");
        number = number.replace("3","۳");
        number = number.replace("4","۴");
        number = number.replace("5","۵");
        number = number.replace("6","۶");
        number = number.replace("7","۷");
        number = number.replace("8","۸");
        number = number.replace("9","۹");
        number = number.replace("0","۰");   
      }
      return number;
    }

</script>


