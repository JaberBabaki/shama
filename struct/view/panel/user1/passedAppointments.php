<link href="/asset/css/colors.css" rel="stylesheet" type="text/css">
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
<link href="/asset/css/colors.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/asset/js/plugins/loaders/pace.min.js"></script>
<script type="text/javascript" src="/asset/js/core/libraries/jquery.min.js"></script>
<script type="text/javascript" src="/asset/js/core/libraries/bootstrap.min.js"></script>
<script type="text/javascript" src="/asset/js/plugins/loaders/blockui.min.js"></script>
<!-- /core JS files -->

<!-- Theme JS files -->
<script type="text/javascript" src="/asset/js/plugins/media/fancybox.min.js"></script>
<script type="text/javascript" src="/asset/js/core/app.js"></script> -->
<script type="text/javascript" src="/asset/js/plugins/ui/ripple.min.js"></script>
<!-- /theme JS files -->
<style>
  .position{
    padding: 23px;
  }
</style>
<!-- Page container -->
<link href="/asset/css/colors.css" rel="stylesheet" type="text/css">
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

<link href="/asset/css/colors.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/asset/js/plugins/loaders/pace.min.js"></script>
<script type="text/javascript" src="/asset/js/core/libraries/jquery.min.js"></script>
<script type="text/javascript" src="/asset/js/core/libraries/bootstrap.min.js"></script>
<script type="text/javascript" src="/asset/js/plugins/loaders/blockui.min.js"></script>
<!-- /core JS files -->

<!-- Theme JS files -->
<script type="text/javascript" src="/asset/js/plugins/media/fancybox.min.js"></script>
<script type="text/javascript" src="/asset/js/core/app.js"></script> -->
<script type="text/javascript" src="/asset/js/plugins/ui/ripple.min.js"></script>
<!-- /theme JS files -->
<style>
  .position{
    padding: 23px;
  }
</style>
<!-- Page container -->
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
							<li class="" style="background-color: #C4C4C4"><a href="<?php echo baseUrl(); ?>/user1/mainPage" class="text-right"><span>پروفایل من</span></a></li>
							<li class=""><a href="<?php echo baseUrl(); ?>/user1/completePersonalData" class="text-right"> <span>تکمیل اطلاعات کاربری</span></a></li>
							<li><a href="<?php echo baseUrl(); ?>/user1/allAppointments" class="text-right"><span>کل نوبت های رزرو شده</span></a></li>
							<li class=""><a href="<?php echo baseUrl(); ?>/user1/notCompletedAppointments" class="text-right"><span>نوبت های آتی</span></a></li>
							<li class=""><a href="<?php echo baseUrl(); ?>/user1/completedAppointments" class="text-right"><span>نوبت های ویزیت شده</span></a></li>
							<li class="active"><a href="<?php echo baseUrl(); ?>/user1/passedAppointments" class="text-right"><span>نوبت های حضور نیافته</span></a></li>
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
      <?php if($passedAppointments == null): ?>
            <h3 class="">نوبتی وجود ندارد</h3>
      <?php endif; ?>
      <div class="content-wrapper">
				<!-- Content area -->
				<div class="content" style="padding: 0 93px 60px 123px">
          <!-- Dropdown menu -->
          <div class="table-responsive">
            <?php if($passedAppointments!=null): ?>
              <table class="table text-nowrap table-striped border table-hover table-condensed">
                <tbody>
                  <tr class="active border-double">
                    <td colspan="6" class="text-center" style="font-size: 18px; background: #E4CDCD; color: black;">نوبت های آتی</td>
                  </tr>
                  <?php for ($i=0; $i<count($passedAppointments); $i++): ?>
                    <tr>
                      <td>
                        <div class="media-right">
                          <a href="#"><img src="/asset/image/per-pic/<?=$passedAppointments[$i]['psychPhoto']?>" class="img-circle" alt="" style="height: 80px; width: 80px"></a>
                        </div>
                        <div class="media-left position">
                          <div class=""><a href="#" class="text-default text-semibold">دکتر <?=$passedAppointments[$i]['psychName']?></a></div>
                          <div class="text-muted text-size-small">
                          <?=stringConverter($passedAppointments[$i]['endTime'], 'enToFa')?> - <?=stringConverter($passedAppointments[$i]['startTime'], 'enToFa')?> 
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="text-default text-semibold position">درمانگاه <?=$passedAppointments[$i]['counselingName']?></div>
                      </td>
                      <td>
                        <div class="media-left position">
                          <div class="text-default text-semibold text-center"><?=dayNumToDayNameConverter($passedAppointments[$i]['day']) ?></div>
                          <div class="text-muted text-size-small">
                            <?=dateConverter($passedAppointments[$i]['date'], 'enToFa') ?>
                          </div>
                        </div>
                      </td>
                      <td><div class="text-default text-semibold position">
                        <?php if($passedAppointments[$i]['paymentMode']==1): ?>
                          پرداخت در محل
                        <?php endif; ?>
                        <?php if($passedAppointments[$i]['paymentMode']==2): ?>
                          پرداخت آنلاین
                        <?php endif; ?>
                      </div></td>
                      <td ><div id="nearest-appointment" onclick="runCancelDialog(<?=$passedAppointments[$i]['appointment_id'] ?>)"  class="position shadow-lg"><button type="button" class="btn-lg btn-danger">دلیل عدم حضور</button></div></td>
                    </tr>
                  <?php endfor; ?>    
                </tbody>
              </table>
            <?php endif; ?>
          </table>
        </div>
          
					<!-- /dropdown menu -->




				</div>
				<!-- /content area -->

			</div>
         
          
					<!-- /dropdown menu -->




				</div>
				<!-- /content area -->

			</div>

		</div>
  
      </div>

    </div>

  </div>

		</div>  
	</div>

  

  