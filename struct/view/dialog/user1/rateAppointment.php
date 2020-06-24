<script src="/asset/js/sweetalert2/sweetalert2.js"></script>
<!-- <script type="text/javascript"  src="/asset/js/rating/emojiRating.js"></script> -->
<link rel="stylesheet" href="/asset/css/rating/emojiRating.css">

<div class="modal fade" id="rateDialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog cascading-modal" style="margin-top: 150px" role="document">
  <!--Content-->
    <div class="modal-content"> 
    <!--Modal cascading tabs-->
    <div class="modal-c-tabs" style="color: #000; line-height: 34px">
        <div class="verify-title" id="psychRatingTxt"></div>    
        <!--  -->
        <div style="margin-top: 32px; margin-bottom: 76px">
          <ul id="psychRatingEmoji" class="emoji">
            <li><img src="/asset/image/emojis/emoji11.png" /></li>
            <li><img src="/asset/image/emojis/emoji22.png" /></li>
            <li><img src="/asset/image/emojis/emoji33.png" /></li>
            <li><img src="/asset/image/emojis/emoji44.png" /></li>
            <li><img src="/asset/image/emojis/emoji55.png" /></li>
          </ul>
          <ul class="note" id="psychRatingNote">
            <li>عالی</li>
            <li>خوب</li>
            <li>متوسط</li>
            <li>بد</li>
            <li>افتضاح</li>
          </ul>
          <div class="line" id="psychRatingLine">
            <div class="dot" id="psychRatingDot"></div>
          </div>
        </div>
        <textarea class="form-control animated" cols="10" id="psychRateTextarea" name="comment" placeholder="لطفا نظر خود را در مورد درمانگر بنویسید" rows="5"></textarea>

        <div class="verify-title" id="counselingRatingTxt"></div>
        <div style="margin-top: 32px; margin-bottom: 76px">
          <ul id="counselingRatingEmoji" class="emoji">
            <li><img src="/asset/image/emojis/emoji11.png" /></li>
            <li><img src="/asset/image/emojis/emoji22.png" /></li>
            <li><img src="/asset/image/emojis/emoji33.png" /></li>
            <li><img src="/asset/image/emojis/emoji44.png" /></li>
            <li><img src="/asset/image/emojis/emoji55.png" /></li>
          </ul>
          <ul class="note" id="counselingRatingNote">
            <li>عالی</li>
            <li>خوب</li>
            <li>متوسط</li>
            <li>بد</li>
            <li>افتضاح</li>
          </ul>
          <div class="line" id="counselingRatingLine">
            <div  class="dot" id="counselingRatingDot"></div>
          </div>
        </div>
        <textarea class="form-control animated" cols="10" id="counselingRateTextarea" name="comment" placeholder="لطفا نظر خود را در مورد درمانگاه بنویسید" rows="5"></textarea>

        <ul style="list-style: none; display: inline-flex; margin-bottom: 80px" id="verifyBox">
          <li style="position: fixed; right: 65px">
            <div class="container-login100-form-btn" >
            <button class="btn btn-success" style=" width: 180px" id="verify"> ارسال </button>
            </div>
          </li>
          <li style="position: fixed; left: 65px">
            <div class="container-login100-form-btn" >
            <button class="btn btn-danger"  id="cancelBtn" style="background-color: lightcoral; width: 180px"> انصراف</button>
            </div>
          </li>
        </ul>
    </div>
    </div>
  </div>
</div>  
<script>
  var psychRate;
  var counselingRate;
$(document).ready(function() {
    $("#psychRatingEmoji li:nth-child(1)").hover(function() {
        $("#psychRatingDot").css("margin-left", "0px");
        psychRate = 5;
        function explode() {
            $("#psychRatingEmoji li:nth-child(1) img").attr("src", "/asset/image/emojis/emoji1.png");
            $("#psychRatingEmoji li:nth-child(2) img").attr("src", "/asset/image/emojis/emoji22.png");
            $("#psychRatingEmoji li:nth-child(3) img").attr("src", "/asset/image/emojis/emoji33.png");
            $("#psychRatingEmoji li:nth-child(4) img").attr("src", "/asset/image/emojis/emoji44.png");
            $("#psychRatingEmoji li:nth-child(5) img").attr("src", "/asset/image/emojis/emoji55.png");
            $("#psychRatingNote li:nth-child(1)").css("color", "black");
            $("#psychRatingNote li:nth-child(2)").css("color", "#3A6D88");
            $("#psychRatingNote li:nth-child(3)").css("color", "#3A6D88");
            $("#psychRatingNote li:nth-child(4)").css("color", "#3A6D88");
            $("#psychRatingNote li:nth-child(5)").css("color", "#3A6D88");
        }
        setTimeout(explode, 300);
    });
    $("#psychRatingEmoji li:nth-child(2)").hover(function() {
        $("#psychRatingDot").css("margin-left", "60px");
        psychRate = 4;
        
        function explode() {
            $("#psychRatingEmoji li:nth-child(1) img").attr("src", "/asset/image/emojis/emoji11.png");
            $("#psychRatingEmoji li:nth-child(2) img").attr("src", "/asset/image/emojis/emoji2.png");
            $("#psychRatingEmoji li:nth-child(3) img").attr("src", "/asset/image/emojis/emoji33.png");
            $("#psychRatingEmoji li:nth-child(4) img").attr("src", "/asset/image/emojis/emoji44.png");
            $("#psychRatingEmoji li:nth-child(5) img").attr("src", "/asset/image/emojis/emoji55.png");
            $("#psychRatingNote li:nth-child(1)").css("color", "#3A6D88");
            $("#psychRatingNote li:nth-child(2)").css("color", "black");
            $("#psychRatingNote li:nth-child(3)").css("color", "#3A6D88");
            $("#psychRatingNote li:nth-child(4)").css("color", "#3A6D88");
            $("#psychRatingNote li:nth-child(5)").css("color", "#3A6D88");
        }
        setTimeout(explode, 300);
    });
    $("#psychRatingEmoji li:nth-child(3)").hover(function() {
        $("#psychRatingDot").css("margin-left", "120px");
        psychRate = 3;
        
        function explode() {
            $("#psychRatingEmoji li:nth-child(1) img").attr("src", "/asset/image/emojis/emoji11.png");
            $("#psychRatingEmoji li:nth-child(2) img").attr("src", "/asset/image/emojis/emoji22.png");
            $("#psychRatingEmoji li:nth-child(3) img").attr("src", "/asset/image/emojis/emoji3.png");
            $("#psychRatingEmoji li:nth-child(4) img").attr("src", "/asset/image/emojis/emoji44.png");
            $("#psychRatingEmoji li:nth-child(5) img").attr("src", "/asset/image/emojis/emoji55.png");
            $("#psychRatingNote li:nth-child(1)").css("color", "#3A6D88");
            $("#psychRatingNote li:nth-child(2)").css("color", "#3A6D88");
            $("#psychRatingNote li:nth-child(3)").css("color", "black");
            $("#psychRatingNote li:nth-child(4)").css("color", "#3A6D88");
            $("#psychRatingNote li:nth-child(5)").css("color", "#3A6D88");
        }
        setTimeout(explode, 300);
    });
    $("#psychRatingEmoji li:nth-child(4)").hover(function() {
        $("#psychRatingDot").css("margin-left", "180px");
        psychRate = 2;
        
        function explode() {
            $("#psychRatingEmoji li:nth-child(1) img").attr("src", "/asset/image/emojis/emoji11.png");
            $("#psychRatingEmoji li:nth-child(2) img").attr("src", "/asset/image/emojis/emoji22.png");
            $("#psychRatingEmoji li:nth-child(3) img").attr("src", "/asset/image/emojis/emoji33.png");
            $("#psychRatingEmoji li:nth-child(4) img").attr("src", "/asset/image/emojis/emoji4.png");
            $("#psychRatingEmoji li:nth-child(5) img").attr("src", "/asset/image/emojis/emoji55.png");
            $("#psychRatingNote li:nth-child(1)").css("color", "#3A6D88");
            $("#psychRatingNote li:nth-child(2)").css("color", "#3A6D88");
            $("#psychRatingNote li:nth-child(3)").css("color", "#3A6D88");
            $("#psychRatingNote li:nth-child(4)").css("color", "black");
            $("#psychRatingNote li:nth-child(5)").css("color", "#3A6D88");
        }
        setTimeout(explode, 300);
    });
    $("#psychRatingEmoji li:nth-child(5)").hover(function() {
        $("#psychRatingDot").css("margin-left", "240px");
        psychRate = 1;
        
        function explode() {
            $("#psychRatingEmoji li:nth-child(1) img").attr("src", "/asset/image/emojis/emoji11.png");
            $("#psychRatingEmoji li:nth-child(2) img").attr("src", "/asset/image/emojis/emoji22.png");
            $("#psychRatingEmoji li:nth-child(3) img").attr("src", "/asset/image/emojis/emoji33.png");
            $("#psychRatingEmoji li:nth-child(4) img").attr("src", "/asset/image/emojis/emoji44.png");
            $("#psychRatingEmoji li:nth-child(5) img").attr("src", "/asset/image/emojis/emoji5.png");
            $("#psychRatingNote li:nth-child(1)").css("color", "#3A6D88");
            $("#psychRatingNote li:nth-child(2)").css("color", "#3A6D88");
            $("#psychRatingNote li:nth-child(3)").css("color", "#3A6D88");
            $("#psychRatingNote li:nth-child(4)").css("color", "#3A6D88");
            $("#psychRatingNote li:nth-child(5)").css("color", "black");
        }
        setTimeout(explode, 300);
    });

    ////////////////
    $("#counselingRatingEmoji li:nth-child(1)").hover(function() {
        $("#counselingRatingDot").css("margin-left", "0px");
        counselingRate = 5;
        function explode() {
            $("#counselingRatingEmoji li:nth-child(1) img").attr("src", "/asset/image/emojis/emoji1.png");
            $("#counselingRatingEmoji li:nth-child(2) img").attr("src", "/asset/image/emojis/emoji22.png");
            $("#counselingRatingEmoji li:nth-child(3) img").attr("src", "/asset/image/emojis/emoji33.png");
            $("#counselingRatingEmoji li:nth-child(4) img").attr("src", "/asset/image/emojis/emoji44.png");
            $("#counselingRatingEmoji li:nth-child(5) img").attr("src", "/asset/image/emojis/emoji55.png");
            $("#counselingRatingNote li:nth-child(1)").css("color", "black");
            $("#counselingRatingNote li:nth-child(2)").css("color", "#3A6D88");
            $("#counselingRatingNote li:nth-child(3)").css("color", "#3A6D88");
            $("#counselingRatingNote li:nth-child(4)").css("color", "#3A6D88");
            $("#counselingRatingNote li:nth-child(5)").css("color", "#3A6D88");
        }
        setTimeout(explode, 300);
    });
    $("#counselingRatingEmoji li:nth-child(2)").hover(function() {
        $("#counselingRatingDot").css("margin-left", "60px");
        counselingRate = 4;
        function explode() {
            $("#counselingRatingEmoji li:nth-child(1) img").attr("src", "/asset/image/emojis/emoji11.png");
            $("#counselingRatingEmoji li:nth-child(2) img").attr("src", "/asset/image/emojis/emoji2.png");
            $("#counselingRatingEmoji li:nth-child(3) img").attr("src", "/asset/image/emojis/emoji33.png");
            $("#counselingRatingEmoji li:nth-child(4) img").attr("src", "/asset/image/emojis/emoji44.png");
            $("#counselingRatingEmoji li:nth-child(5) img").attr("src", "/asset/image/emojis/emoji55.png");
            $("#counselingRatingNote li:nth-child(1)").css("color", "#3A6D88");
            $("#counselingRatingNote li:nth-child(2)").css("color", "black");
            $("#counselingRatingNote li:nth-child(3)").css("color", "#3A6D88");
            $("#counselingRatingNote li:nth-child(4)").css("color", "#3A6D88");
            $("#counselingRatingNote li:nth-child(5)").css("color", "#3A6D88");
        }
        setTimeout(explode, 300);
    });
    $("#counselingRatingEmoji li:nth-child(3)").hover(function() {
        $("#counselingRatingDot").css("margin-left", "120px");
        counselingRate = 3;
        function explode() {
            $("#counselingRatingEmoji li:nth-child(1) img").attr("src", "/asset/image/emojis/emoji11.png");
            $("#counselingRatingEmoji li:nth-child(2) img").attr("src", "/asset/image/emojis/emoji22.png");
            $("#counselingRatingEmoji li:nth-child(3) img").attr("src", "/asset/image/emojis/emoji3.png");
            $("#counselingRatingEmoji li:nth-child(4) img").attr("src", "/asset/image/emojis/emoji44.png");
            $("#counselingRatingEmoji li:nth-child(5) img").attr("src", "/asset/image/emojis/emoji55.png");
            $("#counselingRatingNote li:nth-child(1)").css("color", "#3A6D88");
            $("#counselingRatingNote li:nth-child(2)").css("color", "#3A6D88");
            $("#counselingRatingNote li:nth-child(3)").css("color", "black");
            $("#counselingRatingNote li:nth-child(4)").css("color", "#3A6D88");
            $("#counselingRatingNote li:nth-child(5)").css("color", "#3A6D88");
        }
        setTimeout(explode, 300);
    });
    $("#counselingRatingEmoji li:nth-child(4)").hover(function() {
        $("#counselingRatingDot").css("margin-left", "180px");
        counselingRate = 2;
        function explode() {
            $("#counselingRatingEmoji li:nth-child(1) img").attr("src", "/asset/image/emojis/emoji11.png");
            $("#counselingRatingEmoji li:nth-child(2) img").attr("src", "/asset/image/emojis/emoji22.png");
            $("#counselingRatingEmoji li:nth-child(3) img").attr("src", "/asset/image/emojis/emoji33.png");
            $("#counselingRatingEmoji li:nth-child(4) img").attr("src", "/asset/image/emojis/emoji4.png");
            $("#counselingRatingEmoji li:nth-child(5) img").attr("src", "/asset/image/emojis/emoji55.png");
            $("#counselingRatingNote li:nth-child(1)").css("color", "#3A6D88");
            $("#counselingRatingNote li:nth-child(2)").css("color", "#3A6D88");
            $("#counselingRatingNote li:nth-child(3)").css("color", "#3A6D88");
            $("#counselingRatingNote li:nth-child(4)").css("color", "black");
            $("#counselingRatingNote li:nth-child(5)").css("color", "#3A6D88");
        }
        setTimeout(explode, 300);
    });
    $("#counselingRatingEmoji li:nth-child(5)").hover(function() {
        $("#counselingRatingDot").css("margin-left", "240px");
        counselingRate = 1;
        function explode() {
            $("#counselingRatingEmoji li:nth-child(1) img").attr("src", "/asset/image/emojis/emoji11.png");
            $("#counselingRatingEmoji li:nth-child(2) img").attr("src", "/asset/image/emojis/emoji22.png");
            $("#counselingRatingEmoji li:nth-child(3) img").attr("src", "/asset/image/emojis/emoji33.png");
            $("#counselingRatingEmoji li:nth-child(4) img").attr("src", "/asset/image/emojis/emoji44.png");
            $("#counselingRatingEmoji li:nth-child(5) img").attr("src", "/asset/image/emojis/emoji5.png");
            $("#counselingRatingNote li:nth-child(1)").css("color", "#3A6D88");
            $("#counselingRatingNote li:nth-child(2)").css("color", "#3A6D88");
            $("#counselingRatingNote li:nth-child(3)").css("color", "#3A6D88");
            $("#counselingRatingNote li:nth-child(4)").css("color", "#3A6D88");
            $("#counselingRatingNote li:nth-child(5)").css("color", "black");
        }
        setTimeout(explode, 300);
    });


    ///////


});


var baseURL = "<?php echo baseUrl(); ?>";
var appointment_id;
var paymentMode;
// var appointment_id = document.getElementById('nearest-appointment').getAttribute('value');
// $('#nearest-appointment').click(function(){
function runRatingDialog(_appointment_id) {
    appointment_id = _appointment_id;
    var formData = new FormData();
    formData.append('appointment_id', appointment_id);
    $.ajax({
        url: baseURL + '/userCommon/isExistRating',
        type: 'POST',
        dataType: 'JSON',
        data: formData,
        contentType: false,
        processData: false,
        success: function(result) {
          var json = result;
          if (json.Status == true) {
            if (json.ResultData.isExist == 1){
              Swal.fire({
                      type: 'error',
                      position: 'top',
                      title: 'نظرسنجی برای نوبت مورد نظر قبلا انجام شده است',
                      showConfirmButton: false,
                      timer: 3000
                      });
            }else{
              $('#rateDialog').modal('show');
              var formData = new FormData();
              formData.append('appointment_id', appointment_id);
              $.ajax({
                  url: baseURL + '/userCommon/appointmentInfo',
                  type: 'POST',
                  dataType: 'JSON',
                  data: formData,
                  contentType: false,
                  processData: false,
                  success: function(result) {
                      var json = result;
                      if (json.Status == true) {
                          paymentSteps(json);
                      }
                  }
              });
            }
          }

        }
    });
    
}

function paymentSteps(json) {
    var counselingName = json.counselingName;
    var psychName = json.psychName;
    var startTime = json.startTime;
    var endTime = json.endTime;
    var date = json.date;
    var day = json.day;
    paymentMode = json.paymentMode;
    var weekDay = new Array(7);
    weekDay[0] = "یکشنبه";
    weekDay[1] = "دوشنبه";
    weekDay[2] = "سه شنبه";
    weekDay[3] = "چهار شنبه";
    weekDay[4] = "پنجشنبه";
    weekDay[5] = "جمعه";
    weekDay[6] = "شنبه";
    $("#psychRatingTxt").html("<div>" + "میزان رضایت از دکتر " + psychName + "</div>");

    $("#counselingRatingTxt").html("<div>" + " میزان رضایت از درمانگاه " + counselingName + "</div>");

    $('#cancel').click(function() {
        $('#rateDialog').modal('hide');
    });

}

$('#verify').click(function() {
      var psychRateTextarea = $('#psychRateTextarea').val();
      var counselingRateTextarea = $('#counselingRateTextarea').val();
      var formData = new FormData();
      formData.append('psychRate', psychRate);
      formData.append('psychRateText', psychRateTextarea);
      formData.append('counselingRate', counselingRate);
      formData.append('counselingRateText', counselingRateTextarea);
      formData.append('appointment_id', appointment_id);
      var jsonData;
      $.ajax({
        url: baseURL + '/user1/rateAppointment',
        type: 'POST',
        dataType: 'JSON',
        data: formData,
        contentType: false,
        processData: false,
        success: function(result) {
          jsonData = result;
          if (jsonData.Status == true) {
            $('#rateDialog').modal('hide');
            Swal.fire({
                      type: 'success',
                      position: 'top',
                      title: 'نظر شما با موفقیت ثبت شد',
                      text: 'تشکر از اینکه ما را در بهبود خدمات یاری می کنید',
                      showConfirmButton: false,
                      timer: 3000
                      });
          }
        }
                
      });
})
</script>
