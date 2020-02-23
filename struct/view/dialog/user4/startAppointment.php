<!-- <link rel="stylesheet" href="/asset/css/style-login.css"> -->
<!-- <link rel="stylesheet" href="/asset/css/bootstrap.min.css"> -->
<!-- <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script> -->
<!-- <script src="/asset/js/jquery.min.js"></script> -->
<script src="/asset/js/sweetalert2/sweetalert2.js"></script>

<div class="modal fade" id="startModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog cascading-modal" style="margin-top: 12px" role="document">
  <!--Content-->
    <div class="modal-content"> 
    <!--Modal cascading tabs-->
    <div class="modal-c-tabs">
      <div class="h2" id="startText"></div>
      <ul style="list-style: none; display: inline-flex; margin-bottom: 80px" id="verifyBtn">
        <li style="position: fixed; right: 65px">
          <div class="container-login100-form-btn" >
          <button class="btn btn-pill btn-success" style=" width: 180px" id="verifystart"> تایید </button>
          </div>
        </li>
        <li style="position: fixed; left: 65px">
          <div class="container-login100-form-btn" >
          <button class="btn btn-pill btn-secondary"  id="startNewPackage" style="background-color: lightcoral; width: 180px"> شروع جلسات جدید</button>
          </div>
        </li>
      </ul>
      <div style="display: none; margin-bottom: 184px" id="checkPayment">
        <div class="check-payment">انتخاب نوع پرداخت:</div>
        <div>
          <ul>
            <li style="position: fixed; right: 65px">
              <div class="container-login100-form-btn" >
                <button class="check-payment-btn" id="onlinePay">  آنلاین </button>
              </div>
            </li>
            <li style="position: fixed; left: 65px">
              <div class="container-login100-form-btn" >
              <button class="check-payment-btn" id="offlinePay">حضوری</button>
              </div>
            </li>
          </ul>
        </div>
        <div style="display: none" id="payment">
          <button class="payment-btn" >  پرداخت </button>
        </div>
        <div style="display: none" id="NotPayment">
          <button class="payment-btn" >  تایید </button>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>  

<script>
var baseURL = "<?php echo baseUrl(); ?>";
var calendar_id = 50;
function runStartAppointmentDialog(){
    var formData = new FormData();
    var startedFlag = 0;
    formData.append('calendar_id',calendar_id);
    console.log(formData.get("calendar_id"));
    $.ajax({
      url: baseURL+'/user4/appointmentStatus',
      type: 'POST',
      dataType: 'JSON',
      data: formData,
      contentType: false,
      processData: false,
      success: function (result) {
        alert(formData);
      //   jsonData = result;
      //   alert();
      //   if (jsonData.Status == true) {
      //     alert();
      //   }
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


