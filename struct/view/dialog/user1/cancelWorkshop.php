<script src="/asset/js/sweetalert2/sweetalert2.js"></script>

<div class="modal fade" id="cancelDialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog cascading-modal" style="margin-top: 106px" role="document">
  <!--Content-->
    <div class="modal-content"> 
    <!--Modal cascading tabs-->
    <div class="modal-c-tabs" style="color: #000; line-height: 34px">
        <div class="verify-title" id="appointmentText"></div>
        <ul style="list-style: none; display: inline-flex; margin-bottom: 80px" id="verifyBox">
          <li style="position: fixed; right: 65px">
            <div class="container-login100-form-btn" >
            <button class="btn btn-success" style=" width: 180px" id="verify"> تایید </button>
            </div>
          </li>
          <li style="position: fixed; left: 65px">
            <div class="container-login100-form-btn" >
            <button class="btn btn-danger"  id="cancelBtn" style="background-color: lightcoral; width: 180px"> انصراف</button>
            </div>
          </li>
        </ul>

      <div style="display: none;" id="payInfo">
        <div class="wrap-input100 validate-input" data-validate="لطفا شماره کارت خود را وارد کنید!" style="right: 9%">
            <input class="input100" type="text" id="cardNum" placeholder="شماره کارت" style="width: 400px">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
        </div>
        <sapn style="display: none; text-align: center;" class="form-validation" id="validCardNum"></sapn>
        <div class="wrap-input100 validate-input" data-validate="لطفا نام و نام خانوادگی خود را وارد کنید!" style="right: 9%">
            <input class="input100" type="text" id="name" placeholder="نام و نام خانوادگی" style="width: 400px">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
        </div>
        <sapn style="display: none; text-align: center;" class="form-validation" id="validName"></sapn>
        <div>
        <ul style="list-style: none; display: inline-flex; margin-bottom: 80px" id="verifyBox">
        <li style="position: fixed; right: 65px">
          <div class="container-login100-form-btn" >
          <button class="btn btn-success" style=" width: 180px" id="verifyBtn"> تایید </button>
          </div>
        </li>
        <li style="position: fixed; left: 65px">
          <div class="container-login100-form-btn" >
          <button class="btn btn-danger"  id="cancel" style="background-color: lightcoral; width: 180px"> انصراف</button>
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
      var booked_id;
      var paymentMode;
      // var appointment_id = document.getElementById('nearest-appointment').getAttribute('value');
      // $('#nearest-appointment').click(function(){
      function runCancelDialog(_booked_id){
        booked_id = _booked_id;
        $('#cancelDialog').modal('show');
        var formData = new FormData();  
        formData.append('booked_id', booked_id);
        $.ajax({
            url: baseURL+'/mangeCounseling/bookedWorkshopInfo',
            type: 'POST',
            dataType: 'JSON',
            data: formData,
            contentType: false,
            processData: false,
            success: function (result) {
                var json = result;
                if (json.Status == true) {
                    paymentSteps(json);
                }
            }
        });
    }

    function paymentSteps(json){
      var courseName = json.courseName;
      var teacherName = json.teacherName;
    //   var startTime = json.startTime;
    //   var endTime = json.endTime;
    //   var date = json.date;
    //   var day = json.day;
      paymentMode = json.paymentMode;
    //   var weekDay = new Array(7);
    //   weekDay[0] = "یکشنبه";
    //   weekDay[1] = "دوشنبه";
    //   weekDay[2] = "سه شنبه";
    //   weekDay[3] = "چهار شنبه";
    //   weekDay[4] = "پنجشنبه";
    //   weekDay[5] = "جمعه";
    //   weekDay[6] = "شنبه";
      $("#appointmentText").html("<div>"+" شما درخواست لغو نوبت دوره "+courseName+" را کرده اید "+"</div>");
    
      $('#cancel').click(function(){
        $('#cancelDialog').modal('hide');
      });

      $('#verify').click(function(){
        $('#verifyBox').hide(400);
      if (paymentMode==2){
        $('#payInfo').show(1000);
      }else{
            var formData = new FormData();
            formData.append('name', '');
            formData.append('cardNum', '');
            formData.append('booked_id', booked_id);
            var jsonData;
            $.ajax({
                url: baseURL+'/user1/cancelWorkshop',
                type: 'POST',
                dataType: 'JSON',
                data: formData,
                contentType: false,
                processData: false,
                success: function (result) {
                    jsonData = result;
                    if (jsonData.Status == true) {
                        $('#cancelDialog').modal('hide');

                        Swal.fire({
                            type: 'success',
                            position: 'top',
                            title: 'نوبت شما با موفقیت لغو شد',
                            text: 'مبلغ تا ۲۴ ساعت آینده به حساب شما انتقال داده می شود',
                            showConfirmButton: false,
                            timer: 3000,
                            onClose: () => {
                                location.reload(true)
                            } 
                        });
                    }else{
                        Swal.fire({
                            type: 'error',
                            position: 'top',
                            title: 'مجددا تلاش کنید',
                            showConfirmButton: false,
                            timer: 6000,
                            onClose: location.reload(true), 
                        });
                    }
                    
                }
            });
      }
      });
    }





    $('#cancelBtn').click(function(){
      $('#cancelDialog').modal('hide');
    });

    // function submitCancel(){
    $('#verifyBtn').click(function(){
        var cardNum = document.getElementById("cardNum").value;
        var name = document.getElementById("name").value;
        status1 = checkCardNum(cardNum);
        status2 = checkName(name);
        if (status1 == true && status2 == true){
            var formData = new FormData();
            formData.append('name', name);
            formData.append('cardNum', cardNum);
            formData.append('booked_id', booked_id);
            var jsonData;
            $.ajax({
                url: baseURL+'/user1/cancelWorkshop',
                type: 'POST',
                dataType: 'JSON',
                data: formData,
                contentType: false,
                processData: false,
                success: function (result) {
                    jsonData = result;
                    if (jsonData.Status == true) {
                        $('#cancelDialog').modal('hide');

                        Swal.fire({
                            type: 'success',
                            position: 'top',
                            title: 'نوبت شما با موفقیت لغو شد',
                            text: 'مبلغ تا ۲۴ ساعت آینده به حساب شما انتقال داده می شود',
                            showConfirmButton: false,
                            timer: 3000,
                            onClose: () => {
                                location.reload(true)
                            } 
                        });
                    }else{
                        Swal.fire({
                            type: 'error',
                            position: 'top',
                            title: 'مجددا تلاش کنید',
                            showConfirmButton: false,
                            timer: 6000,
                            onClose: location.reload(true), 
                        });
                    }
                    
                }
            });
        }
    });

    function checkCardNum(cardNum){
      var status = true;
      if (cardNum.length != 16 && cardNum.length != 0) {
        $("#validCardNum").css({"display": "block", "color": "red"});
        $("#validCardNum").text(" شماره کارت وارد شده صحیح نیست");
        status = false;
      } else if (cardNum.length == 0) {
        $("#validCardNum").css({"display": "block", "color": "red"});
        $("#validCardNum").text("لطفا شماره کارت را وارد کنید");
        status = false;
      } else {    
          $("#validCardNum").css({"display": "none"});
          $("#validCardNum").text("");
          status = true;
        } 
        return status;
    }

    function checkName(name){
      var status = true;
      if (name.length == 0) {
        $("#validName").css({"display": "block", "color": "red"});
        $("#validName").text("لطفا نام و نام خانوادگی خود را وارد کنید");
        status = false;
      } else if (name.split(' ').length == 1) {
        $("#validName").css({"display": "block", "color": "red"});
        $("#validName").text("نام یا نام خانوادگی وارد نشده است");
        status = false;
      } else {    
          $("#validName").css({"display": "none"});
          $("#validName").text("");
          status = true;
        } 
        return status;
    }

</script>
