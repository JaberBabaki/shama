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
              <li><a href='/user2/dashboard'><i class="icon-home4"></i> <span>داشبورد</span></a>
              </li>
              <li class="active">
                <a id="verifyRequests" class="has-ul" >
                  <i class="icon-envelop"></i> 
                  <span>درخواست ها</span>
                </a>
                <ul class="hidden-ul" id="verifyRequestsUl" style="display: none;">
                    <li><a href="#" id="layout1">تایید شده</a></li>
                    <li><a href="#" id="layout1">در انتظار تایید</a></li>
                    <li><a href="#" id="layout1">تایید نشده</a></li>
                </ul>
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
            <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold"> داشبورد </span></h4>
          </div>
        </div>
      </div>
      <div class="content">
        <div class="row">
          <?php
          if ($coach == 1) {
            $photo='/asset/image/per-pic/'.$coachPhoto;
            echo "<div class='col-lg-6'>
															<div class='panel border-left-lg border-left-success invoice-grid timeline-content'>
																<div class='panel-body'>
																	<div class='row'>
																							<div class='tac'>
                                              <div>
                                                <img src='$photo' id='preview' class='img-thumbnail'>
                                              </div>
                                              <br>
                                               <span class='text-semibold no-margin-top' style='font-size:18px'>" . $coachName . "</span>
                                              <br>
                                    </div>
                                              <br>
																		<div class='col-sm-6'>
																		<span class='status-mark border-success position-left'></span>
																		<span class='text-semibold no-margin-top'>ایمیل:</span>
																		<br>
																		<br>
																		<span class='status-mark border-success position-left'></span>
																		<span class='text-semibold no-margin-top'>شناسه مربی :</span>
																		<br>
																		<br>
																		</div>
																		<div class='col-sm-6'>
                                          <span class='text-semibold no-margin-top'>" . $coachEmail. "</span>
																		      <br>
																		      <br>
																		      <span class='text-semibold no-margin-top'>" . $shenaseh . "</span>
                                          <br>
																		</div>
																	</div>
																</div>

																<div class='panel-footer panel-footer-condensed'><a class='heading-elements-toggle'><i class='icon-more'></i></a>
																	<div class='heading-elements'>
																		<span class='heading-text'>
																			<span class='status-mark border-success position-left'></span>
																			<span class='text-semibold' style='font-size:11px'>این اطلاعات در تاریخ </span>
																			<span class='text-semibold' style='font-size:10px'>" . $registerTime . "</span>
																			<span class='text-semibold' style='font-size:11px'> ایجاد و در تاریخ </span>
																			<span class='text-semibold' style='font-size:10px'>" . $lastUpdate . " </span>
																			<span class='text-semibold' style='font-size:11px'>بروزرسانی شد </span>
																		</span>

																	</div>
																</div>
															</div>
														</div>";
          } else if ($coach == 0) {
            echo "<div class='alert alert-primary alert-bordered tac'>
                        <button type='button' class='close' data-dismiss='alert'><span class='sr-only'>Close</span></button>
                        <span class='text-semibold'> باسلام  </span>
                        <br>
                        <br>
                        <span class='text-semibold'> به پنل مدیریت مرکز مشاوره خوش آمدید</span>
                        <br>
                        <br>
                        <br>
                        <span class='text-semibold'>لطفا برای ادامه فعالیت از بخش اطلاعات کاربری اقدام به ثبت اقدام به تکمیل اطلاعات بفرمایید</span>
                        </div>";
          }
          ?>
        </div>
      </div>
      <!-- /available hours -->


    </div>
  </div>
</div>
<script>
  $( "#verifyRequests" ).on('click', function() {
    if ($("#verifyRequestsUl").css("display") == 'none')
      $("#verifyRequestsUl").css({"display": "block"});
    else
      $("#verifyRequestsUl").css({"display": "none"});
    
    
});
</script>