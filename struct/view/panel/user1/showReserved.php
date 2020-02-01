	<link href="/asset/css/colors.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="/asset/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="/asset/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="/asset/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="/asset/js/plugins/loaders/blockui.min.js"></script>
	<script type="text/javascript" src="/asset/js/plugins/media/fancybox.min.js"></script>
	<script type="text/javascript" src="/asset/js/core/app.js"></script>
	<script type="text/javascript" src="/asset/js/plugins/ui/ripple.min.js"></script>

<style>
    .position{
      padding: 23px;
    }
    .active{
        background-color: #E4CDCD;
        color: black;
    }
  </style>
	<!-- Page container -->
	<div class="page-container">
		<!-- Page content -->
		<div class="page-content">
			<!-- Main sidebar -->
			<div class="sidebar sidebar-main sidebar-default" style="right: 43px; top: -39px; background-color: #E9E9E9 ">
				<div class="sidebar-content">
          <div class="category-content">
            <a href="<?php echo baseUrl(); ?>/user1/mainPage"><img src="/asset/image/avatar/avatar.jpg" class="img-circle img-responsive" alt=""></a>
              <h5 style="text-align: center; margin-top: 19px;">zamaniali1995@gmail.com</h5>							
          </div>
          <ul class="navigation">
            <li><a href="<?php echo baseUrl(); ?>/user1/mainPage" class="text-right"><span> </span></a></li>
            <li><a href="<?php echo baseUrl(); ?>/user1/mainPage" class="text-right"><span>پروفایل من</span></a></li>
            <li><a href="<?php echo baseUrl(); ?>/user1/showReserved" class="text-right changeColor"><span>نوبت های رزرو شده</span></a></li>
            <li><a href="<?php echo baseUrl(); ?>/user1/completePersonalData" class="text-right"> <span>تکمیل اطلاعات کاربری</span></a></li>
            <li><a href="#" class="text-right"><span>خروج</span></a></li>
          </ul>
				</div>
			</div>
			<!-- /main sidebar -->
			<!-- Main content -->
			<div class="content-wrapper">
				<!-- Content area -->
				<div class="content" style="padding: 0 93px 60px 123px">
       <!-- Dropdown menu -->
          <div class="table-responsive">
          <table class="table text-nowrap table-striped border table-hover table-condensed">
          <tbody>
            <tr class="active border-double">
              <td colspan="6" class="text-center" style="font-size: 18px; background: #E4CDCD; color: black;">نزدیک ترین نوبت</td>
            </tr>
            <tr>
              <td>
                <div class="media-right">
                  <a href="#"><img src="/asset/image/jaber_babaki.jpg" class="img-circle" alt="" style="height: 80px; width: 80px"></a>
                </div>
                <div class="media-left position">
                  <div class=""><a href="#" class="text-default text-semibold">دکتر علی زمانی</a></div>
                  <div class="text-muted text-size-small">
                      ۰۲:۰۰ - ۰۳:۰۰
                  </div>
                </div>
              </td>
              <td>
                <div class="text-default text-semibold position">درمانگاه مدت</div>
              </td>
              <td>
                <div class="media-left position">
                  <div class="text-default text-semibold text-center">دوشنبه</div>
                  <div class="text-muted text-size-small">
                      ۱۳۹۸/۱۱/۱۰
                  </div>
                </div>
              </td>
              <td><div class="text-default text-semibold position">پرداخت در محل</div></td>
              <td ><div id="nearest-appointment" value="422" class="position shadow-lg"><button type="button" class="btn-lg btn-danger">لغو نوبت</button></div></td>
            </tr>          
          </tbody>
          </table>

          <table class="table text-nowrap table-striped border table-hover table-condensed">
            <tbody>
              <tr class="active border-double">
                <td colspan="6" class="text-center" style="font-size: 18px; background: #E4CDCD; color: black;">نوبت های آتی </td>
              </tr>
              <tr>
                <td>
                  <div class="media-right">
                    <a href="#"><img src="/asset/image/jaber_babaki.jpg" class="img-circle" alt="" style="height: 80px; width: 80px"></a>
                  </div>
                  <div class="media-left position">
                    <div class=""><a href="#" class="text-default text-semibold">دکتر علی زمانی</a></div>
                    <div class="text-muted text-size-small">
                      ۰۲:۰۰ - ۰۳:۰۰
                    </div>
                  </div>
                </td>
                <td>
                  <div class="text-default text-semibold position">درمانگاه مدت</div>
                </td>
                <td>
                  <div class="media-left position">
                    <div class="text-default text-semibold text-center">دوشنبه</div>
                    <div class="text-muted text-size-small">
                      ۱۳۹۸/۱۱/۱۰
                    </div>
                  </div>
								</td>
              <td><div class="text-default text-semibold position">پرداخت در محل</div></td>
              <td ><div class="position shadow-lg"><button type="button" class="btn-lg btn-danger">لغو نوبت</button></div></td>
            </tr>
            <tr>
              <td>
                <div class="media-right">
                  <a href="#"><img src="/asset/image/jaber_babaki.jpg" class="img-circle" alt="" style="height: 80px; width: 80px"></a>
                </div>
                <div class="media-left position">
                  <div class=""><a href="#" class="text-default text-semibold">دکتر علی زمانی</a></div>
                  <div class="text-muted text-size-small">
                      ۰۲:۰۰ - ۰۳:۰۰
                  </div>
                </div>
              </td>
              <td>
                <div class="text-default text-semibold position">درمانگاه مدت</div>
              </td>
              <td>
                <div class="media-left position">
                  <div class="text-default text-semibold text-center">دوشنبه</div>
                  <div class="text-muted text-size-small">
                      ۱۳۹۸/۱۱/۱۰
                  </div>
                </div>
              </td>
              <td><div class="text-default text-semibold position">پرداخت در محل</div></td>
              <td ><div class="position shadow-lg"><button type="button" class="btn-lg btn-danger">لغو نوبت</button></div></td>
            </tr>
          </tbody>
        </table>
        <br>
        <br>
          
        <table class="table text-nowrap table-striped border table-hover table-condensed">
          <tbody>
            <tr class="active border-double">
              <td colspan="6" class="text-center" style="font-size: 18px; background: #E4CDCD; color: black;">کل نوبت های گرفته شده</td>
            </tr>
            <tr>
              <td>
                <div class="media-right">
                  <a href="#"><img src="/asset/image/jaber_babaki.jpg" class="img-circle" alt="" style="height: 80px; width: 80px"></a>
                </div>
                <div class="media-left position">
                  <div class=""><a href="#" class="text-default text-semibold">دکتر علی زمانی</a></div>
                  <div class="text-muted text-size-small">
                      ۰۲:۰۰ - ۰۳:۰۰
                  </div>
                </div>
              </td>
              <td>
                <div class="text-default text-semibold position">درمانگاه مدت</div>
              </td>
              <td>
                <div class="media-left position">
                  <div class="text-default text-semibold text-center">دوشنبه</div>
                  <div class="text-muted text-size-small">
                      ۱۳۹۸/۱۱/۱۰
                  </div>
                </div>
								</td>
              <td><div class="text-default text-semibold position">پرداخت در محل</div></td>
              <td ><div class="position shadow-lg"><button type="button" class="btn-lg btn-danger">لغو نوبت</button></div></td>
            </tr>
            <tr>
              <td>
                <div class="media-right">
                  <a href="#"><img src="/asset/image/jaber_babaki.jpg" class="img-circle" alt="" style="height: 80px; width: 80px"></a>
                </div>
                <div class="media-left position">
                  <div class=""><a href="#" class="text-default text-semibold">دکتر علی زمانی</a></div>
                  <div class="text-muted text-size-small">
                      ۰۲:۰۰ - ۰۳:۰۰
                  </div>
                </div>
												</td>
              <td>
                <div class="text-default text-semibold position">درمانگاه مدت</div>
              </td>
              <td>
                <div class="media-left position">
                  <div class="text-default text-semibold text-center">دوشنبه</div>
                  <div class="text-muted text-size-small">
                      ۱۳۹۸/۱۱/۱۰
                  </div>
                </div>
								</td>
              <td><div class="text-default text-semibold position">پرداخت در محل</div></td>
              <td ><div class="position shadow-lg"><button type="button" class="btn-lg btn-danger">لغو نوبت</button></div></td>
            </tr>      
          </tbody>
        </table>
      </div>
    </div> 
  </div>
</div>
</div>
  <!-- /page container -->

<?php
$doc_root = $_SERVER["DOCUMENT_ROOT"]; 
include "$doc_root/struct/view/panel/user1/dialog.php";  
?>