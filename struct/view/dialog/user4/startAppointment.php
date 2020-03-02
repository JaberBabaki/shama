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
        <span style="margin: 66px" class="p h4">شیوه درمان</span>
        <div class="wrap-input100 validate-input" data-validate="شیوه درمان" style="right: 9%">
            <input class="input100" type="text" id="treatmentApproach" placeholder="شیوه درمان" style="width: 400px" value="">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
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
var creatNewPackage = false;
var calendar_id;
var sessionNumber;
var calssName;
var baseURL = "<?php echo baseUrl(); ?>";

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
  $("#treatmentResult").prop('disabled', false);
  $("#diagnosis").prop('disabled', false);
});

$("#btnStartModify").click(function(){
  $("#sessionSize").prop('disabled', false);
  $("#treatmentApproach").prop('disabled', false);
  $("#treatmentResult").prop('disabled', false);
  $("#diagnosis").prop('disabled', false);
});

$("#btnٰFinishWithoutFillInfoModify").click(function(){
  $("#sessionSize").prop('disabled', false);
  $("#treatmentApproach").prop('disabled', false);
  $("#treatmentResult").prop('disabled', false);
  $("#diagnosis").prop('disabled', false);
});

$("#btnFinishWithEndAppointmentNumberModify").click(function(){
  $("#sessionSize").prop('disabled', false);
  $("#treatmentApproach").prop('disabled', false);
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

function runAppointmenInfo(calendar_id, className){
    var formData = new FormData();
    $("#btnBoxNewStart").hide();
    $("#btnBoxStart").hide();
    formData.append('calendar_id',calendar_id);
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
            $("#textAppointment").html("<div>"+'بیمار مورد نظر جلسه درمانی نداشته است'+"</div>");
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
    className = _className;
    calendar_id = _calendar_id;
    var formData = new FormData();
    formData.append('calendar_id',calendar_id);
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
          // Start new appointment package
          sessionNumber = jsonData.ResultData.sessionNumber;
          sessionSize = jsonData.ResultData.sessionSize;
          if (sessionSize==null && sessionNumber==0){
            $("#textAppointment").html("<div>"+'شروع درمان جدید برای بیمار مورد نظر'+"</div>");
            $("#btnBoxNewStart").show();
            $("#startModal").modal("show");
          }else if (parseInt(sessionSize)>parseInt(sessionNumber)){
            num = parseInt(sessionNumber)+1;
            num = num.toString();
            $("#textAppointment").html("<div>"+" نوبت  "+num+"  بیمار مورد نظر است "+"</div>"+"<div>"+"اطلاعات درمانی بیمار:"+"</div>");
            $("#btnBoxStart").show();
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
            $("#btnBoxFinishWithEndAppointmentNumber").show();
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
    var diagnosis = $("#diagnosis").val();
    status1 = checkSessionSize(sessionSize);
    status2 = checkTreatmentApproach(treatmentApproach);
    status3 = checkTreatmentResult(treatmentResult);
    status3 = checkDiagnosis(diagnosis);
    if (status1 == true && status2 == true && status3 == true){
      formData.append('startNewPackage', startNewPackage);
      formData.append('treatment_result', treatmentResult);
      formData.append('session_size', sessionSize );
      formData.append('treatment_approach', treatmentApproach);
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

function runEndAppointmentDialog(calendar_id, className){
    var sessionNumber = $('.sessionNumber'+className).text();
    sessionNumber = covertNumber(sessionNumber, 'faToEn');
    sessionNumber = parseInt(sessionNumber);
    var formData = new FormData();
    $("#startModal").modal("show");
    $("#packageInfo").show();
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
    }else{
      $("#textAppointment").html("<div>"+'اطلاعات درمانی بیمار مورد نظر '+"</div>");  
      $("#btnBoxFinishWithFillInfo").hide();
      $("#btnBoxFinishWithEndAppointmentNumber").hide();
      $("#btnBoxFinishWithoutFillInfo").show();
      $("#sessionSize").prop('disabled', true);
      $("#treatmentApproach").prop('disabled', true);
      $("#treatmentResult").prop('disabled', true);
      $("#diagnosis").prop('disabled', true);
    }

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
// function runEndAppointmentDialog(){
//     var formData = new FormData();
//     var startedFlag = 0;
//     var endedFlag = 0;
//     formData.append('calendar_id', calendar_id);
//     formData.append('treatment_approach ', treatment_approach);
//     formData.append('treatment_result', treatment_result);
//     formData.append('session_size', session_size );
//     formData.append('number_of_session', number_of_session );

//     $.ajax({
//       url: baseURL+'/user4/endAppointment',
//       type: 'POST',
//       dataType: 'JSON',
//       data: formData,
//       contentType: false,
//       processData: false,
//       success: function (result) {
//         jsonData = result;
//         if (jsonData.Status == true) {
//             endedFlag = 1;

//         }
//       }
//     });
// }

// $(document).ready(function(){
  
// });


// function paymentSteps(json, email = null){
//   var counselingName = json.counselingName;
//   var psychName = json.psychName;
//   if (email == null) email = json.email;
//   var startTime = json.startTime;
//   var endTime = json.endTime;
//   var date = json.date;
//   var day = json.day;
//   var weekDay = new Array(7);
//   weekDay[0] = "یکشنبه";
//   weekDay[1] = "دوشنبه";
//   weekDay[2] = "سه شنبه";
//   weekDay[3] = "چهار شنبه";
//   weekDay[4] = "پنجشنبه";
//   weekDay[5] = "جمعه";
//   weekDay[6] = "شنبه";
//   $("#modalVerify").modal("show");
//   $("#appointmentText").html("<div>"+'کاربر    '+email+"</div>"+"<div>"+"شما برای دکتر "+psychName+" در درمانگاه "+counselingName+" از ساعت "+ startTime +" تا "+ endTime +"  در روز "+  weekDay[day]  +"  "+  date  +" درخواست نوبت کرده اید. "+"</div>");
//   $("#verifyAppointment").click(function(){
//     $('#verifyBtn').hide(500);
//     $('#checkPayment').show();
//   });
//   $("#onlinePay").click(function(){
//     $("#offlinePay").css('background-color', '#6f6b6b54');
//     $("#offlinePay").css('color', 'black');
//     $("#onlinePay").css('background-color', 'green');
//     $("#onlinePay").css('color', 'white');
//     $('#NotPayment').hide();
//     $('#payment').show();
//   });

//   $("#offlinePay").click(function(){
//     $("#onlinePay").css('background-color', '#6f6b6b54');
//     $("#onlinePay").css('color', 'black');
//     $("#offlinePay").css('background-color', 'green');
//     $("#offlinePay").css('color', 'white');
//     $('#payment').hide();
//     $('#NotPayment').show();
//   });

//   $('#bookAgain').click(function(){
//       $("#modalVerify").modal("hide");
//     });

//   $('#payment').click(function(){
//     $("#modalVerify").modal("hide");
//     var formData = new FormData();
//     formData.append('calendar_id', calendar_id);
//     formData.append('paymentMode', 2);
//     $.ajax({
//       url: baseURL+'/user1/bookAppointment',
//       type: 'POST',
//       dataType: 'JSON',
//       data: formData,
//       contentType: false,
//       processData: false,
//       buttonsStyling: false,
//       success: function (result) {
//         var json = result;
//         if ((json.Status == true)) {
//           showConfrmAppointment();
//         }
//       }
//     });              
//   });

  
//   $('#NotPayment').click(function(){
//     $("#modalVerify").modal("hide");
//     var formData = new FormData();
//     formData.append('calendar_id', calendar_id);
//     formData.append('paymentMode', 1);
//     $.ajax({
//       url: baseURL+'/user1/bookAppointment',
//       type: 'POST',
//       dataType: 'JSON',
//       data: formData,
//       contentType: false,
//       processData: false,
//       buttonsStyling: false,
//       success: function (result) {
//         var json = result;
//         if ((json.Status == true)) {
//           showConfrmAppointment();
//         }
//       }
//     });
//   });
// }

//   function showConfrmAppointment(){
//     url = baseURL+'/user1/mainPage';
//           Swal.fire({
//             type: 'success',
//             position: 'top',
//             html: '<div style="font-size: 25px">تبریک</div><div style="font-size: 20px">نوبت شما با موفقیت ثبت شد</div><div style="font-size: 15px">برای مشاهده نوبت رزرو شده وارد پنل خود شوید و یا برای رزرو مجدد نوبت روی رزرو نویت کلیک کنید</div>',
//             showCloseButton: false,
//             showCancelButton: true,
//             focusConfirm: false,
//             buttonsStyling: false,
//             confirmButtonText:
//               creatButton('ورود به پنل کاربری', url, 'class="btn btn-pill btn-danger"'),
//             cancelButtonText:
//               creatButton('رزرو مجدد', '', 'class="btn btn-pill btn-secondary"'),
//           });
//   }

//   function creatButton(text, link, style){
//     return ('<a'+' type="button"'+ style + ' href='+link+'>'+text+'</a>');
//   }

</script>


