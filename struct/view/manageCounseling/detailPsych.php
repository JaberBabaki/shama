<link rel="stylesheet" href="/asset/css/appointment.css">
<div class="row" style="height: 514px">
  <div class="col-lg-4 ts-grid-box" style="margin:10px 63px 0 0">
    <div id="floating-appts-area" class="practitioner-profile stick" style="">
      <div class="appointments-preview">
        <div class="appointment-subset">
          <div class="subset-heading">
            <h2 class="book-apts-head">رزرو نوبت</h2>
              <div class="he-appt-dropdowns">
                <input type="hidden" id="he-appt-specialty-page" value="General Practice">
              </div>
          </div>
          <div class="specialty-row" data-specialty="General Practice" style="display: block;">
            <div class="practitioner-row" data-practitioner="60262" style="display: block;">
              <div class="next-available" style="text-align: center;">
                <?php if($nextAvailable==null):?>
                  <span>همه نوبت های دکتر مورد نظر پر شده است</span>
                <?php endif; ?>
                <?php if($nextAvailable!=null): ?>
                  <span class="next-available-title">نزدیکترین نوبت قابل رزرو</span>
                  <a id="next-available"  class="apptTimeBtn search-time-fw" value="<?=$nextAvailable[0]?>" onclick="bookAppointment()">
                  <span><?=$nextAvailable[1]?> </span>
                  </a>
                <?php endif;?>
              </div>
              <?php if($firstAvailableArray!=null):?>
                <div class="day-row">
                  <span class="search-time-booknow"><?=$firstAvailableArray[0]?></span>
                  <?php for($i=1; $i<count($firstAvailableArray); $i++): ?>
                      <a class="apptTimeBtn apptTimeBtnTime" href=""><?=$firstAvailableArray[$i]?></a>
                      <?php if($i==5):?>
                        <a class="apptTimeBtn apptTimeBtnMore apptMoreShown" href="" style="display: inline-block;">بیشتر...</a>
                      <?php endif; ?>
                  <?php endfor; ?>
                </div>
              <?php endif; ?>
              <?php if($secondAvailableArray!=null):?>
                <div class="day-row">
                  <span class="search-time-booknow"><?=$secondAvailableArray[0]?></span>

                  <?php for($i=1; $i<count($secondAvailableArray); $i++): ?>
                      <a class="apptTimeBtn apptTimeBtnTime" href=""><?=$secondAvailableArray[$i]?></a>
                      <?php if($i==5):?>
                        <a class="apptTimeBtn apptTimeBtnMore apptMoreShown" href="" style="display: inline-block;">بیشتر...</a>
                      <?php endif; ?>
                  <?php endfor; ?>
                </div>
            <?php endif; ?>
            <?php if($nextAvailable!=null):?>
              <a href="" class="book-now"><span>نشان دادن همه نوبت ها</span></a>
            <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-7 ts-grid-box" style="margin:10px 10px 0 0">
    <div class="row">
      <div class="col-lg-8">
        <h2 style="text-align: right;  margin-bottom: 30px;">دکتر علی زمانی</h1>
        <h3 style="text-align: right;  margin-bottom: 30px;">عضو هیت علمی دانشگاه علوم پزشکی</h2>
        <h4 style="text-align: right; ">او دارای مدرک دکترای در رشتهٔ جامعه‌شناسی از دانشگاه یوتای آمریکا و سه کارشناسی ارشد در رشته‌های روان‌شناسی و اقتصاد از دانشگاه تهران و «مشاورهٔ ازدواج، خانواده و کودکان» از دانشگاه یوتا است. او پیش از انقلاب مدرس دانشکدهٔ علوم اجتماعی دانشگاه تهران بوده‌است. او پی‌اچ‌دی خود را با موضوع تحلیل جامعه‌شناسانهٔ انقلاب مشروطه ایران در سال ۱۹۷۴ از دانشگاه یوتا دریافت کرد.</h4>
        
      </div>
      <div class="col-lg-4">
        <div class="thumb thumb-rounded">
            <img src="/asset/image/per-pic/5e0f285d8e298PerPic.png" alt="">
            <div class="caption-overflow">
              <span>
                <a href="/asset/image/per_pic1.jpg" class="btn bg-success-400 btn-icon btn-xs" data-popup="lightbox"><i class="icon-plus2"></i></a>
                <a href="user_pages_profile.html" class="btn bg-success-400 btn-icon btn-xs"><i class="icon-link"></i></a>
              </span>
            </div>
          </div>
        </div>
    </div>
  </div>
      <!-- /basic datatable -->
<script>
  function bookAppointment(){
    var formData = new FormData();
    var calendar_id = document.getElementById('next-available').getAttribute('value');
    formData.append('calendar_id', calendar_id);
    $.ajax({
      url: '/mangeCounseling/bookAppointment',
      type: 'POST',
      dataType: 'JSON',
      data: formData,
      contentType: false,
      processData: false,
      success: function (result) {
        var json = result;
        if ((json.Status == true)) {
          var msg = json.ResultData.message;
          alert(msg);
          location.reload();
        } 
      }
    });
  }

  
(function() {
    var allApptsLink = '/public/practitioner/appointments.php?id=89011';

    // Change show all appointments link according to user selection
    $(document).on('change_show_times_for', function() {
        var params = '';
        var specialty = $('select#he-appt-specialty-page').val();
        var practice = $('select#he-appt-practitioner-page').val();
        if (specialty) params += '&specialty=' + encodeURIComponent(specialty);
        if (practice) params += '&location=' + encodeURIComponent(practice);
        $('.appointments-preview .book-now').attr('href', allApptsLink + params);
    });

    $('select#he-appt-specialty-page').change(function() {
        $(document).trigger('change_show_times_for');
    });

    $('select#he-appt-practitioner-page').change(function() {
        $(document).trigger('change_show_times_for');
    });

    $(document).trigger('change_show_times_for');
})();
</script>
</div>