<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <title>مشاوره آنلاین</title>

  <link rel="stylesheet" href="/asset/css/base.css">
  <link rel="stylesheet" href="/asset/css/bootstrap.css">
  <link rel="stylesheet" href="/asset/css/bootstrap.min.css">
  <link rel="stylesheet" href="/asset/css/font-awesome.min.css">
  <link rel="stylesheet" href="/asset/css/animate.css">
  <link rel="stylesheet" href="/asset/css/navigation.css">
  <link rel="stylesheet" href="/asset/css/style.css">
  <link rel="stylesheet" href="/asset/css/colors/color-9.css">
  <link rel="stylesheet" href="/asset/css/responsive.css">
  <link rel="stylesheet" href="/asset/css/style-login.css">
	<link href="/asset/css/components.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="/asset/css/sweetalert2/sweetalert2.css">


  <script src="/asset/js/jquery.min.js"></script>
  <script src="/asset/js/navigation.js"></script>
  <script src="/asset/js/bootstrap.min.js"></script>



<script src="asset/js/loginDialog/mdb.min.js"></script>
<script src="asset/js/loginDialog/popper.min.js"></script>


<script src="/home/ali/project/web/shama/shama/asset/js/loginDialog/mdb.min.js"></script>
<script src="/home/ali/project/web/shama/shama/asset/js/loginDialog/popper.min.js"></script>
<link rel="stylesheet" href="/home/ali/project/web/shama/shama/asset/css/loginDialog/mdb.min.css">
<!-- Your custom styles (optional) -->
<link rel="stylesheet" href="/home/ali/project/web/shama/shama/asset/css/loginDialog/style.css">
<link rel="stylesheet" href="/home/ali/project/web/shama/shama/asset/css/loginDialog/all.css">

</head>

<body class="body-white">
<section class="top-bar top-bg">
  <div class="container">
    <div class="row">
      <div class='col-md-6' style="text-align: right">
        <div class='ts-date'>
          <i class='fa fa-clock-o'></i>
          <span><?php echo jdate(date('Y-m-d'), "d M Y", date("l"));
            if (!isGuest()) {
              echo "<span class='p-3'><i class='fa fa-user ml-2'></i>کاربر </span>";
              echo $_SESSION['email'];
              echo " خوش آمدید";
            } ?> </span>
        </div>
      </div>
      <div class="col-md-6 align-self-center">
        <ul class="top-nav">
          <li>
            <?php if (!isGuest()) {
              if (isUser1() == '10') {
                echo "<a href='/user1/mainPage'><span class='p-3'><i class='fa fa-lock ml-2'></i>ورود به پنل</span></a>";
              }else{
                if (isUser2() == '20') {
                  echo "<a href='/user2/dashboard'><span class='p-3'><i class='fa fa-lock ml-2'></i>ورود به پنل</span></a>";
                }
                if (isUser3() == '30') {
                  echo "<a href='/user3/dashboard'><span class='p-3'><i class='fa fa-lock ml-2'></i>ورود به پنل</span></a>";
                }
                if (isUser4() == '40') {
                  echo "<a href='/user4/dashboard'><span class='p-3'><i class='fa fa-lock ml-2'></i>ورود به پنل</span></a>";
                }
              }
            } else {
              echo "<a href='/userCommon/login'><span class='p-3'><i class='fa fa-lock ml-2'></i> ورود </span></a>";
            } ?>
          </li>
          <li>
            <?php if (!isGuest()) {
              echo "<a href='/userCommon/logout'><span class='p-3'><i class='fa fa-sign-out ml-2'></i>خروج</span></a>";
            } else {
              echo "<a href='/userCommon/register'><span class='p-3'><i class='fa fa-user ml-2'></i>ثبت نام</span></a>";
            } ?>
          </li>
          <li>
            <span class="p-3" href="#"> <i class="fa fa-paper-plane ml-2" aria-hidden="true"></i> عضویت در کانال </span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="header-middle">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="logo-item text-center">
          <a href="index-2.html">
            <img class="logo" src="/asset/image/logo/photo_۲۰۱۹-۰۸-۲۴_۱۶-۴۵-۰۰.jpg" alt="">
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<header class="header-default">
  <div class="container">
    <div class="border-top"></div>
    <div class="row">
      <div class="col-lg-8 mx-auto nav-menu-item menu-centerd" style="flex: 0 0 82%; max-width: 100%;">
        <nav class="navigation ts-main-menu navigation-landscape">
          <div class="nav-header">
            <a class="nav-brand mobile-logo visible-xs" href="index-2.html"> </a>

            <div class="nav-toggle"></div>
          </div>
          <div class="nav-menus-wrapper clearfix">
            <ul class="nav-menu">
              <li class="active">
                <a href="<?php echo homePage(false); ?>" class="f"><span> صفحه اصلی</span></a>
              </li>
              <li >
                <a href="<?php echo baseUrl(); ?>/UserCommon/searchCounsiling" class="f"><span> مراکز مشاوره </span></a>
              </li>
              <li>
                <a href="#" class="f"><span>مربیان ازدواج</span></a>
              </li>
              <li>
                <a href="<?php echo baseUrl(); ?>/UserCommon/searchPsych"  class="f"><span>درمانگران</span></a>
              </li>
              <li>
                <a href="#" class="f"><span>شهروندان </span></a>
                <ul class="nav-dropdown">
                  <li>
                    <a href="#"><span>شرکت در دوره های عمومی</span></a>
                  </li>
                  <li>
                    <a href="#"><span>سبک زندگی ایرانی اسلامی</span></a>
                  </li>
                  <li>
                    <a href="#"><span>هنر زندگی</span></a></a>
                  </li>
                  <li>
                    <a href="#"><span>مقالات عمومی</span></a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#"><span> تست روانشناسی</span></a>
              </li>
              <li>
                <a href="#"><span>مشاوره انلاین </span></a>
              </li>
            </ul>
            <ul class="right-menu">
              <li class="header-search">
                <div class="nav-search">
                  <div class="nav-search-button">
                    <i class="icon icon-search"></i>
                  </div>
                  <form>
                    <span class="nav-search-close-button" tabindex="0">✕</span>

                    <div class="nav-search-inner">
                      <input type="search" name="search" placeholder="Type and hit ENTER">
                    </div>
                  </form>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</header>

<?php echo $content ?>

<footer class="ts-footer ts-footer-1">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <ul class="footer-social text-center">
          <li class="ts-facebook">
            <a href="#">
              <i class="fa fa-facebook"></i>
              <span>Facebook</span>
            </a>
          </li>
          <li class="ts-google-plus">
            <a href="#">
              <i class="fa fa-google-plus"></i>
              <span>Google Plus</span>
            </a>
          </li>
          <li class="ts-twitter">
            <a href="#">
              <i class="fa fa-twitter"></i>
              <span>Twitter</span>
            </a>
          </li>
          <li class="ts-pinterest">
            <a href="#">
              <i class="fa fa-pinterest-p"></i>
              <span>pinterest</span>
            </a>
          </li>
          <li class="ts-linkedin">
            <a href="#">
              <i class="fa fa-linkedin"></i>
              <span>Linkedin</span>
            </a>

          </li>
        </ul>
        <div class="copyright-text text-center">
          <span style="font-size: 12px"> تمامی خدمات این سایت، حسب مورد دارای مجوزهای لازم از مراجع مربوطه می باشند و فعالیت های این سایت تابع قوانین و مقررات جمهوری اسلامی ایران است.</span><br>
          <span
            style="font-size: 12px">تمام حقوق مادي و معنوي اين سايت متعلق به موسسه آموزش عالی مدت مي باشد.</span><br>
          <span style="font-size: 12px"> Copyright © 2017 All rights reservd </span>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- footer end -->

</body>

</html>