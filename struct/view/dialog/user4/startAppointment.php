<div class="modal fade" id="startModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog cascading-modal" style="margin-top: 12px" role="document">
  <!--Content-->
    <div class="modal-content"> 
    <!--Modal cascading tabs-->
    <div class="modal-c-tabs">
      <br>
      <div class="h2 text-center" id="textAppointment"></div>
      <br>
      <ul style="list-style: none; display: inline-flex; margin-bottom: 80px" id="boxStartAppointment">
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
        <div>
        <ul style="list-style: none; display: inline-flex; margin-bottom: 80px" id="boxEndAppointment">
        <li style="position: fixed; right: 65px">
          <div class="container-login100-form-btn" >
          <button class="btn btn-success" style=" width: 180px" id="‌btnVerifyEndAppointment"> تایید </button>
          </div>
        </li>
        <li style="position: fixed; left: 65px">
          <div class="container-login100-form-btn" >
          <button class="btn btn-danger"  id="‌btnCancelEndAppointment" style="background-color: lightcoral; width: 180px"> انصراف</button>
          </div>
        </li>
      </ul>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>  

<script>
var baseURL = "<?php echo baseUrl(); ?>";
var calendar_id = 2;
function runStartAppointmentDialog(){
    var formData = new FormData();
    var info_id;
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
          if (jsonData.ResultData.sessionSize==0 && jsonData.ResultData.sessionNumber==0 );{
            $("#textAppointment").html("<div>"+'شروع دسته نوبت های جدید برای بیمار مورد نظر'+"</div>");
            $("#startModal").modal("show");
            $("#boxStartAppointment").show();
            $("#btnCancelStartAppointment").click(function(){
              $("#startModal").modal("hide");  
            });
            $("#btnVerifyStartAppointment").click(function(){
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
                    $("#start").hide();
                    $("#finish").show();
                    info_id = jsonData.ResultData.info_id;
                    Swal.fire({
                            type: 'success',
                            position: 'top',
                            title: 'دسته نوبت های جدید با موفقیت شروع شد',
                            showConfirmButton: false,
                            timer: 1500, 
                        });
                    $("#finish").click(function(){
                      $("#startModal").modal("show");
                      $("#packageInfo").show();
                      $("#textAppointment").html("<div>"+'اطلاعات درمانی بیمار مورد نظر را تکمیل کنید'+"</div>");
                      $("#‌btnVerifyEndAppointment").click(function(){
                        var sessionSize = $("#sessionSize").val();
                        var treatmentResult = $("#treatmentResult").val();
                        var treatmentAppraoch = $("#treatmentApproach").val();
                        status1 = checkSessionSize(sessionSize);
                        status2 = checktreatmentApproach(treatmentAppraoch);
                        status3 = checktreatmentResult(treatmentResult);
                        if (status1 == true && status2 == true && status3 == true){
                          formData.append('startNewPackage', true);
                          formData.append('info_id', info_id);
                          formData.append('start_new_package', 1);
                          formData.append('treatment_result', treatmentResult);
                          formData.append('session_size', sessionSize );
                          formData.append('treatment_approach', treatmentApproach);
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
                                $("#finish").hide();
                                $("#startModal").modal("hide");
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
                      });

                    });    
                  }
                }
              });   
            });

          }
        }
       }
    });
    //$("#startText").html("<div>"+' نوبت ۴ بیمار مورد نظر می باشد در صورت تمایل به ادامه نوبت ها بر روی تایید و در غیر این صورت روی پایان دادن چلسات کلیک کنید'+"</div>");
    //$("#startModal").modal("show");
    //$("#verifystart").click(function(){
      //$("#startModal").modal("hide");  
    //});
    // formData.append('calendar_id', calendar_id);
    // $.ajax({
    //   url: baseURL+'/user4/startAppointment',
    //   type: 'POST',
    //   dataType: 'JSON',
    //   data: formData,
    //   contentType: false,
    //   processData: false,
    //   success: function (result) {
    //     jsonData = result;
    //     if (jsonData.Status == true) {
    //         startedFlag = 1;
    //         $("#start").hide();
    //         $("#finish").show();
    //     }
    //   }
    // });
}

function checkSessionSize(sessionSize){
  var status = true;
  if (sessionSize.length == 0) {
    $("#textSessionSize").css({"display": "block", "color": "red"});
    $("#textSessionSize").text("لطفا تعداد جلسات موردنیاز را وارد کنید");
    status = false;
  }else{
    sessionSize = covertNumberToEnglish(sessionSize);
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

function covertNumberToEnglish(str){
  var persianNumbers = [/۰/g, /۱/g, /۲/g, /۳/g, /۴/g, /۵/g, /۶/g, /۷/g, /۸/g, /۹/g];
  if(typeof str === 'string')
  {
    for(var i=0; i<10; i++)
    {
      str = str.replace(persianNumbers[i], i);
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


