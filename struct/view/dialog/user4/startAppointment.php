<div class="modal fade" id="startModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog cascading-modal" style="margin-top: 12px" role="document">
  <!--Content-->
    <div class="modal-content"> 
    <!--Modal cascading tabs-->
    <div class="modal-c-tabs">
      <br>
      <div class="h2 text-center" id="textAppointment"></div>
      <br>
      <ul style="list-style: none; display: inline-flex; display: none; margin-bottom: 80px" id="boxStartAppointment">
        <li style="position: fixed; right: 65px;">
          <div class="container-login100-form-btn display: none;" >
          <button class="btn btn-pill btn-success" style=" width: 180px" id="btnVerifyStartAppointment"> تایید </button>
          </div>
        </li>
        <li style="position: fixed; left: 65px;">
          <div class="container-login100-form-btn" >
          <button class="btn btn-pill btn-secondary"  id="btnCancelStartAppointment" style="background-color: lightcoral; width: 180px">لغو</button>
          </div>
        </li>
      </ul>

      <ul style="list-style: none; display: inline-flex; display: none; margin-bottom: 80px" id="boxAddAndNewPackage">
        <li style="position: fixed; right: 65px;">
          <div class="container-login100-form-btn display: none;" >
          <button class="btn btn-pill btn-success" style=" width: 180px" id="btnNewPackage"> ایجاد دسته نوبت جدید </button>
          </div>
        </li>
        <li style="position: fixed; left: 65px;">
          <div class="container-login100-form-btn" >
          <button class="btn btn-pill btn-secondary"  id="btnAddSessionNumber" style="background-color: lightcoral; width: 180px">اضافه کردن جلسات</button>
          </div>
        </li>
      </ul>

      <ul style="list-style: none; display: inline-flex; display: none; margin-bottom: 80px" id="boxVerifyAndNewPackage">
        <li style="position: fixed; right: 65px;">
          <div class="container-login100-form-btn display: none;" >
          <button class="btn btn-pill btn-success" style=" width: 180px" id="btnٰVerifyNewSession">تایید</button>
          </div>
        </li>
        <li style="position: fixed; left: 65px;">
          <div class="container-login100-form-btn" >
          <button class="btn btn-pill btn-secondary"  id="btnAddSessionNumber" style="background-color: lightcoral; width: 180px">ایجاد دسته نوبت جدید</button>
          </div>
        </li>
      </ul>

    <div style="display: none;" id="packageInfo">
        <div class="wrap-input100 validate-input" data-validate="تعداد جلسات درمانی مورد نیاز" style="right: 9%">
            <input class="input100" type="text" id="sessionSize" placeholder="تعداد جلسات" style="width: 400px">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
        </div>
        <span style="display: none; text-align: center;" class="form-validation" id="textSessionSize"></span>
        <div class="wrap-input100 validate-input" data-validate="شیوه درمان" style="right: 9%">
            <input class="input100" type="text" id="treatmentApproach" placeholder="شیوه درمان" style="width: 400px">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
        </div>
        <span style="display: none; text-align: center;" class="form-validation" id="textTreatmentApproach"></span>
        <div class="wrap-input100 validate-input" data-validate="نتیجه درمان" style="right: 9%">
            <input class="input100" type="text" id="treatmentResult" placeholder="نتیجه درمان" style="width: 400px">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
        </div>
        <span style="display: none; text-align: center;" class="form-validation" id="textTreatmentResult"></span>
    </div>

    <div id="boxEndAppointment" style="list-style: none; display: inline-flex; margin-bottom: 80px; display: none">
      <ul>
        <li style="position: fixed; right: 65px">
          <button class="btn btn-success" style=" width: 180px" id="‌btnVerifyEndAppointment"> تایید </button>
        </li>
        <li style="position: fixed; left: 65px">
          <button class="btn btn-danger"  id="‌btnCancelEndAppointment" style="background-color: lightcoral; width: 180px"> انصراف</button>
        </li>
      </ul>
    </div>
    </div>
    </div>
  </div>
</div>  

<script>
var baseURL = "<?php echo baseUrl(); ?>";
var info_id;
function runStartAppointmentDialog(calendar_id, className){
    var formData = new FormData();
    var sessionNumber;
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
            $("#textAppointment").html("<div>"+'شروع دسته نوبت های جدید برای بیمار مورد نظر'+"</div>");
            $("#boxStartAppointment").show();
          }else if (parseInt(sessionSize)>parseInt(sessionNumber)){
            num = parseInt(sessionNumber)+1;
            num = num.toString();
            $("#textAppointment").html("<div>"+" نوبت  "+num+"  بیمار مورد نظر است "+"</div>");
            $("#boxVerifyAndNewPackage").show();
            $("#boxStartAppointment").hide();
          }else{
            $("#textAppointment").html("<div>"+'دسته نوبت های بیمار مورد نظر تمام شده است'+"</div>");
            $("#boxAddAndNewPackage").show();
          }
            $("#startModal").modal("show");
            $("#btnCancelStartAppointment").click(function(){
              $("#startModal").modal("hide"); 
              $("#boxStartAppointment").hide();
              $("#boxAddAndNewPackage").hide();
              $("#boxVerifyAndNewPackage").hide();
            });

            $("#btnVerifyStartAppointment").click(function(){
              $info_id = sendStart(calendar_id, className);
            });
            
            $("#btnٰVerifyNewSession").click(function(){
              $info_id = sendStart(calendar_id, className);
            });
            
          // }
        }
       }
    });
}

function sendStart(calendar_id, className){
  var formData = new FormData();
  formData.append('calendar_id',calendar_id);
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
        $("#startModal").modal("hide");
        $("#boxStartAppointment").hide();
        $('.start'+className).hide();
        $('.end'+className).show();
        $("#boxStartAppointment").hide();
        $("#boxAddAndNewPackage").hide();
        $("#boxVerifyAndNewPackage").hide();
        // info_id = jsonData.ResultData.info_id;
        Swal.fire({
                type: 'success',
                position: 'top',
                title: 'دسته نوبت های جدید با موفقیت شروع شد',
                showConfirmButton: false,
                timer: 1500, 
            });   
      }
    }
  });
  return info_id;
}

function runEndAppointmentDialog(calendar_id, className){
  // $("#finish").click(function(){
    var sessionNumber = $('.sessionNumber'+className).text();
    sessionNumber = covertNumber(sessionNumber, 'faToEn');
    sessionNumber = parseInt(sessionNumber);
    var formData = new FormData();
    $("#startModal").modal("show");
    $("#boxEndAppointment").show();
    $("#‌btnVerifyEndAppointment").click(function(){
      formData.append('calendar_id',calendar_id);
      if (sessionNumber==0){
        $("#packageInfo").show();
        $("#textAppointment").html("<div>"+'اطلاعات درمانی بیمار مورد نظر را تکمیل کنید'+"</div>");
      var sessionSize = $("#sessionSize").val();
      var treatmentResult = $("#treatmentResult").val();
      var treatmentAppraoch = $("#treatmentApproach").val();
      status1 = checkSessionSize(sessionSize);
      status2 = checktreatmentApproach(treatmentAppraoch);
      status3 = checktreatmentResult(treatmentResult);
      if (status1 == true && status2 == true && status3 == true){
        formData.append('startNewPackage', true);
        formData.append('treatment_result', treatmentResult);
        formData.append('treatment_approach', treatmentAppraoch);
        formData.append('session_size', sessionSize );
        formData.append('treatment_approach', treatmentApproach);
        sendEndAppointment(formData, className, sessionNumber, sessionSize);
      }                 
    }else{
      num = sessionNumber+1;
      num = num.toString();      
      $("#textAppointment").html("<div>"+" نوبت  "+num+"  بیمار مورد نظر به پایان برسد؟ "+"</div>");
      formData.append('startNewPackage', false);
      sendEndAppointment(formData, className, sessionNumber, sessionSize);
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
            num = parseInt(sessionNumber)+1;
            num = num.toString();
            $('.sessionNumber'+className).text(covertNumber(num, 'enToFa'));
            $('.sessionSize'+className).text(covertNumber(sessionSize, 'enToFa'));
            $('.row'+className).css("background-color", "#A3DB02");
            $("#startModal").modal("hide");
            $("#packageInfo").hide();
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

function checktreatmentResult(treatmentResult){
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

function checktreatmentApproach(treatmentApproach){
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


