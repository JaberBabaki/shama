<!-- <style>
  .navbar-inverse {
    background: #00796B;
    border-bottom-color: #004D40;
  }

  .navbar-inverse .navbar-nav > li > a, .navbar-inverse .navbar-brand, .navbar-inverse .navbar-nav > .dropdown > a .caret {
    color: #fff;
  }

  .navbar-inverse .navbar-nav > .open > a, .navbar-inverse .navbar-nav > .open > a:hover, .navbar-inverse .navbar-nav > .open > a:focus,
  .navbar-nav > li > .dropdown-menu {
    background: #4DB6AC;
  }

  .nav-pills > li > a,
  {
    color: #303F9F;
  }

  .nav > li > a:hover, .nav > li > a:focus {
    background-color: #EEEEEE;
  }
</style>

<section class='block-wrapper pt-0'>
  <div class='container'>
    <div class="row" style="margin-right:  100px;margin-right: 100px;margin-bottom: 20px">
      <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12" style="margin-top: 100px">
        <ul class="nav nav-pills nav-stacked" style="border-right:1px solid #E5E5E5">
          <br>
          <li style="margin-bottom: 20px"><a href="/user1/mainPage" style="color: #d71c33"><span><i class="fa fa-dashboard"></i> تکمیل اطلاعات</a></li></span>
          <li style="margin-bottom: 20px"><a href="/user1/showReserved"><span><i class="fa fa-tags"></i>نوبت های رزرو شده </a></li></span>
          <li style="margin-bottom: 20px"><a href="#"><i class="fa fa-history"></i> مراکز مشاوره</a></li>
          <li style="margin-bottom: 20px"><a href="#"><i class="fa fa-lock"></i> تغییر رمز عبور</a></li>
        </ul>
      </div>
      <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12" style="text-align: right;">
        <a href="#" style="color: #d71c33"><strong><span class="fa fa-dashboard"></span> تکمیل اطلاعات</strong></a>
        <hr >

      </div>
    </div>
  </div>
</section> -->

	<!-- Global stylesheets -->
	<!-- <link href="/asset/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css"> -->
	<!-- <link href="/asset/css/bootstrap.css" rel="stylesheet" type="text/css"> -->
	<!-- <link href="/asset/css/core.css" rel="stylesheet" type="text/css"> -->
	<link href="/asset/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

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

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main sidebar-default" style="right: 43px; top: -39px; background-color: #E9E9E9 ">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user-material" style="height: 511px;">
						<div class="category-content">
							<div class="sidebar-user-material-content">
								<a href="<?php echo baseUrl(); ?>/user1/mainPage"><img src="/asset/image/avatar/avatar.jpg" class="img-circle img-responsive" alt=""></a>
								<h5 style="text-align: center; margin-top: 19px;">zamaniali1995@gmail.com</h5>
							</div>								
						</div>
						
						<div class="navigation-wrapper" id="user-nav">
							<ul class="navigation ">
              <li><a href="<?php echo baseUrl(); ?>/user1/mainPage" class="active text-right"><span>پروفایل من</span></a></li>
              <li><a href="<?php echo baseUrl(); ?>/user1/showAllReserved" class="text-right"><span>کل نوبت های رزرو شده</span></a></li>
              <li><a href="<?php echo baseUrl(); ?>/user1/mainPage" class="text-right"><span>نوبت های انجام شده</span></a></li>
              <li><a href="<?php echo baseUrl(); ?>/user1/workshop" class="text-right"><span>دوره های رزرو شده</span></a></li>
              <li><a href="<?php echo baseUrl(); ?>/user1/workshop" class="text-right"><span>دوره های انجام شده</span></a></li>
              <!-- <li><a href="#"><i class="icon-comment-discussion"></i> <span><span class="badge bg-teal-400 pull-left">58</span> پیام ها</span></a></li> -->
								<!-- <li class="divider"></li> -->
								<li><a href="<?php echo baseUrl(); ?>/user1/mainPage" class="text-right"> <span>تکمیل اطلاعات کاربری</span></a></li>
								<li><a href="<?php echo baseUrl(); ?>/user1/mainPage" class="text-right"></i> <span>خروج</span></a></li>
							</ul>
						</div>
					</div>
					<!-- /user menu -->


					
				</div>
			</div>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				

				<!-- Content area -->
				<div class="content" style="padding: 0 93px 60px 123px">

          <!-- Dropdown menu -->
          <div class="table-responsive">
            <?php if($firstAvailable!=null): ?>
              <table class="table text-nowrap table-striped border table-hover table-condensed">
                <tbody>
                  <tr class="active border-double">
                    <td colspan="6" class="text-center" style="font-size: 18px; background: #E4CDCD; color: black;">نزدیک ترین نوبت</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="media-right">
                        <a href="#"><img src="/asset/image/per-pic/<?=$firstAvailable['psychPhoto']?>" class="img-circle" alt="" style="height: 80px; width: 80px"></a>
                      </div>
                      <div class="media-left position">
                        <div class=""><a href="#" class="text-default text-semibold">دکتر <?=$firstAvailable['psychName']?></a></div>
                        <div class="text-muted text-size-small">
                        <?=stringConverter($firstAvailable['endTime'], 'enToFa')?> - <?=stringConverter($firstAvailable['startTime'], 'enToFa')?> 
                        </div>
                      </div>
										</td>
                    <td>
                      <div class="text-default text-semibold position">درمانگاه <?=$firstAvailable['counselingName']?></div>
                    </td>
                    <td>
                      <div class="media-left position">
                        <div class="text-default text-semibold text-center"><?=dayNumToDayNameConverter($firstAvailable['day']) ?></div>
                        <div class="text-muted text-size-small">
                          <?=dateConverter($firstAvailable['date'], 'enToFa') ?>
                        </div>
                      </div>
								    </td>
                    <td><div class="text-default text-semibold position">
                      <?php if($firstAvailable['paymentMode']==1): ?>
                        پرداخت در محل
                      <?php endif; ?>
                      <?php if($firstAvailable['paymentMode']==2): ?>
                        پرداخت آنلاین
                      <?php endif; ?>
                    </div></td>
                    <td ><div id="nearest-appointment" onclick="runCancelDialog(<?=$firstAvailable['appointment_id']?>)" class="position shadow-lg"><button type="button" class="btn-lg btn-danger">لغو نوبت</button></div></td>
												<!-- <td class="text-center">
													<ul class="icons-list">
														<li class="dropdown">
															<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
															<ul class="dropdown-menu dropdown-menu-right">
																<li><a href="#"><i class="icon-file-stats"></i> View statement</a></li>
																<li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a></li>
																<li><a href="#"><i class="icon-file-locked"></i> Disable campaign</a></li>
																<li class="divider"></li>
																<li><a href="#"><i class="icon-gear"></i> Settings</a></li>
															</ul>
														</li>
													</ul>
												</td> -->
                  </tr>
                </tbody>
              </table>
            <?php endif; ?>
            
            <br>
            <br>

            <?php if($allAvailable!=null): ?>
              <table class="table text-nowrap table-striped border table-hover table-condensed">
                <tbody>
                  <tr class="active border-double">
                    <td colspan="6" class="text-center" style="font-size: 18px; background: #E4CDCD; color: black;">نوبت های آتی</td>
                  </tr>
                  <?php for ($i=0; $i<count($allAvailable); $i++): ?>
                    <tr>
                      <td>
                        <div class="media-right">
                          <a href="#"><img src="/asset/image/per-pic/<?=$allAvailable[$i]['psychPhoto']?>" class="img-circle" alt="" style="height: 80px; width: 80px"></a>
                        </div>
                        <div class="media-left position">
                          <div class=""><a href="#" class="text-default text-semibold">دکتر <?=$allAvailable[$i]['psychName']?></a></div>
                          <div class="text-muted text-size-small">
                          <?=stringConverter($allAvailable[$i]['endTime'], 'enToFa')?> - <?=stringConverter($allAvailable[$i]['startTime'], 'enToFa')?> 
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="text-default text-semibold position">درمانگاه <?=$allAvailable[$i]['counselingName']?></div>
                      </td>
                      <td>
                        <div class="media-left position">
                          <div class="text-default text-semibold text-center"><?=dayNumToDayNameConverter($allAvailable[$i]['day']) ?></div>
                          <div class="text-muted text-size-small">
                            <?=dateConverter($allAvailable[$i]['date'], 'enToFa') ?>
                          </div>
                        </div>
                      </td>
                      <td><div class="text-default text-semibold position">
                        <?php if($allAvailable[$i]['paymentMode']==1): ?>
                          پرداخت در محل
                        <?php endif; ?>
                        <?php if($allAvailable[$i]['paymentMode']==2): ?>
                          پرداخت آنلاین
                        <?php endif; ?>
                      </div></td>
                      <td ><div id="nearest-appointment" onclick="runCancelDialog(<?=$allAvailable[$i]['appointment_id'] ?>)"  class="position shadow-lg"><button type="button" class="btn-lg btn-danger">لغو نوبت</button></div></td>
                          <!-- <td class="text-center">
                            <ul class="icons-list">
                              <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                  <li><a href="#"><i class="icon-file-stats"></i> View statement</a></li>
                                  <li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a></li>
                                  <li><a href="#"><i class="icon-file-locked"></i> Disable campaign</a></li>
                                  <li class="divider"></li>
                                  <li><a href="#"><i class="icon-gear"></i> Settings</a></li>
                                </ul>
                              </li>
                            </ul>
                          </td> -->
                    </tr>
                  <?php endfor; ?>    
                </tbody>
              </table>
            <?php endif; ?>
          </table>
          
          <br>
          <br>
          <?php if($canceled!=null): ?>
            <table class="table text-nowrap table-striped border table-hover table-condensed">
            <tbody>
              <tr class="active border-double">
                <td colspan="6" class="text-center" style="font-size: 18px; background: #E4CDCD; color: black;">نوبت های لغو شده</td>
              </tr>
              <?php for($i=0; $i<count($canceled); $i++): ?>
                    <tr style="background-color:  #f25555 ">
                      <td>
                        <div class="media-right">
                          <a href="#"><img src="/asset/image/per-pic/<?=$canceled[$i]['psychPhoto']?>" class="img-circle" alt="" style="height: 80px; width: 80px"></a>
                        </div>
                        <div class="media-left position">
                          <div class=""><a href="#" class="text-default text-semibold">دکتر <?=$canceled[$i]['psychName']?></a></div>
                          <div class="text-default text-size-small">
                          <?=stringConverter($canceled[$i]['endTime'], 'enToFa')?> - <?=stringConverter($canceled[$i]['startTime'], 'enToFa')?> 
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="text-default text-semibold position">درمانگاه <?=$canceled[$i]['counselingName']?></div>
                      </td>
                      <td>
                        <div class="media-left position">
                          <div class="text-default text-semibold text-center"><?=dayNumToDayNameConverter($canceled[$i]['day']) ?></div>
                          <div class="text-default text-size-small">
                            <?=dateConverter($canceled[$i]['date'], 'enToFa') ?>
                          </div>
                        </div>
                      </td>
                      <td ><div class="text-default text-semibold position" >
                        <?php if($canceled[$i]['paymentMode']==1): ?>
                          پرداخت در محل
                        <?php endif; ?>
                        <?php if($canceled[$i]['paymentMode']==2): ?>
                         پرداخت آنلاین - در انتظار بازگشتن مبلغ
                        
                          <?php endif; ?>
                      </div></td>
                          <!-- <td class="text-center">
                            <ul class="icons-list">
                              <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                  <li><a href="#"><i class="icon-file-stats"></i> View statement</a></li>
                                  <li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a></li>
                                  <li><a href="#"><i class="icon-file-locked"></i> Disable campaign</a></li>
                                  <li class="divider"></li>
                                  <li><a href="#"><i class="icon-gear"></i> Settings</a></li>
                                </ul>
                              </li>
                            </ul>
                          </td> -->
                    </tr>
              <?php endfor; ?>              
          </tbody>
          </table>
        <?php endif; ?>
        </div>
          
					<!-- /dropdown menu -->




				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
  <!-- /page container -->

<?php
$doc_root = $_SERVER["DOCUMENT_ROOT"]; 
include "$doc_root/struct/view/dialog/user1/cancelAppointment.php";  
?>

  <!-- <script>
    $(document).ready(function(){
      $('#nearest-appointment').click(function(){
      var calendar_id = document.getElementById('nearest-appointment').getAttribute('value');
      $('#cancelDialog').modal('show');
      });
    });
  </script> -->
