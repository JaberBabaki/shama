<link href="/asset/css/colors.css" rel="stylesheet" type="text/css">
	<!-- Core JS files -->
	<script type="text/javascript" src="/asset/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="/asset/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="/asset/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="/asset/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->
	<!-- Theme JS files -->
	<script type="text/javascript" src="/asset/js/plugins/media/fancybox.min.js"></script>
	<script type="text/javascript" src="/asset/js/core/app.js"></script>
	<script type="text/javascript" src="/asset/js/plugins/ui/ripple.min.js"></script>
	<!-- /theme JS files -->
  <style>
    .position{
      padding: 23px;
    }
  </style>
	<!-- Page container -->
  <div class="page-container">
    <div class="page-content">
      <div class="row">
      <div class="col-md-2">
      <div class="sidebar sidebar-main sidebar-default" style="background-color: #C4C4C4 ">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user-material" style="height: 950px;">
						<div class="category-content">
							<div class="sidebar-user-material-content">
                <?php if($patient == 0): ?>
                  <a href="<?php echo baseUrl(); ?>/user1/mainPage"><img src="/asset/image/avatar/avatar.jpg" class="img-circle img-responsive" alt=""></a>
                  <h5 style="text-align: center; margin-top: 19px;"><?=$email?></h5>
                <?php endif;?>
                <?php if($patient == 1): ?>
                  <a href="<?php echo baseUrl(); ?>/user1/mainPage"><img src="/asset/image/per-pic/user1/<?=$photo?>" class="img-circle img-responsive" alt=""></a>
                  <h5 style="text-align: center; margin-top: 19px;"><?=$name?></h5>
                <?php endif;?>
                
							</div>								
						</div>
						
						<!-- <div class="navigation-wrapper" id="user-nav"> -->
		
						<ul class="navigation ">
							<li class="active" style="background-color: #C4C4C4"><a href="<?php echo baseUrl(); ?>/user1/mainPage" class="text-right"><span>پروفایل من</span></a></li>
							<li class=""><a href="<?php echo baseUrl(); ?>/user1/completePersonalData" class="text-right"> <span>تکمیل اطلاعات کاربری</span></a></li>
							<li><a href="<?php echo baseUrl(); ?>/user1/allAppointments" class="text-right"><span>کل نوبت های رزرو شده</span></a></li>
							<li><a href="<?php echo baseUrl(); ?>/user1/notCompletedAppointments" class="text-right"><span>نوبت های آتی</span></a></li>
							<li><a href="<?php echo baseUrl(); ?>/user1/completedAppointments" class="text-right"><span>نوبت های ویزیت شده</span></a></li>
							<li><a href="<?php echo baseUrl(); ?>/user1/passedAppointments" class="text-right"><span>نوبت های حضور نیافته</span></a></li>
							<li><a href="<?php echo baseUrl(); ?>/user1/canceledAppointments" class="text-right"><span>نوبت های لغو شده</span></a></li>
							<li><a href="<?php echo baseUrl(); ?>/user1/allworkshops" class="text-right"><span>دوره های رزرو شده</span></a></li>
							<li><a href="<?php echo baseUrl(); ?>/user1/notCompletedWorkshops" class="text-right"><span>دوره های آتی</span></a></li>
							<li><a href="<?php echo baseUrl(); ?>/user1/completedWorkshops" class="text-right"><span>دوره های انجام شده</span></a></li>
							<li><a href="<?php echo baseUrl(); ?>/user1/passedWorkshops" class="text-right"><span>دوره های حضور نیافته</span></a></li>
							<li><a href="<?php echo baseUrl(); ?>/user1/canceledWorkshops" class="text-right"><span>دوره های لغو شده</span></a></li>
							<li><a href="<?php echo baseUrl(); ?>/user1/logout" class="text-right"></i> <span>خروج</span></a></li>
							</ul>
					</div>
				</div>
			</div>
      </div>
      <div class="col-md-5">

	  <?php
          if ($patient == 1) {
            $photo='/asset/image/per-pic/user1/'.$photo;
            echo "<div>
															<div class='panel border-left-lg border-left-success invoice-grid timeline-content'>
																<div class='panel-body'>
																	<div class='row'>
																							<div class='tac'>
                                              <div>
                                                <img src='$photo' id='preview' class='img-thumbnail'>
                                              </div>
                                              <br>
                                               <span class='text-semibold no-margin-top' style='font-size:18px'>" . $name . "</span>
                                              <br>
                                    </div>
                                              <br>
																		<div class='col-sm-6'>
																		<span class='status-mark border-success position-left'></span>
																		<span class='text-semibold no-margin-top'>ایمیل: . $email</span>
																		<br>
																		<br>
																		<span class='status-mark border-success position-left'></span>
																		<span class='text-semibold no-margin-top'>شناسه : . $shenaseh .</span>
																		<br>
																		<br>
																		</div>
																	</div>
																</div>

																<div class='panel-footer panel-footer-condensed'><a class='heading-elements-toggle'><i class='icon-more'></i></a>
																	<div class='heading-elements'>
																		<span class='heading-text'>
																			<span class='status-mark border-success position-left'></span>
																			<span class='text-semibold' style='font-size:11px'>این اطلاعات در تاریخ </span>
																			<span class='text-semibold' style='font-size:10px'>" . $registered_at . "</span>
																			<span class='text-semibold' style='font-size:11px'> ایجاد و در تاریخ </span>
																			<span class='text-semibold' style='font-size:10px'>" . $updated_at . " </span>
																			<span class='text-semibold' style='font-size:11px'>بروزرسانی شد </span>
																		</span>

																	</div>
																</div>
															</div>
														</div>";
          } else if ($patient == 0) {
            echo "<div class='alert alert-primary alert-bordered tac'>
                        <button type='button' class='close' data-dismiss='alert'><span class='sr-only'>Close</span></button>
                        <span class='text-semibold'> باسلام  </span>
                        <br>
                        <br>
                        <span class='text-semibold'> به پنل مدیریت خوش آمدید</span>
                        <br>
                        <br>
                        <br>
                        <span class='text-semibold'>لطفا برای ادامه فعالیت از بخش اطلاعات کاربری اقدام به تکمیل اطلاعات بفرمایید</span>
                        </div>";
          }
          ?>

		</div>
  
      </div>

    </div>

  </div>

		</div>  
	</div>

  
