<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>vinazine - HTML5 Template</title>
  <link rel="stylesheet" href="/asset/css/base.css">
  <link href="/asset/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="/asset/css/bootstrap.min.css">
  <link href="/asset/css/core.css" rel="stylesheet" type="text/css">
  <link href="/asset/css/components.css" rel="stylesheet" type="text/css">
  <link href="/asset/css/colors.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="/asset/css/font-awesome.min.css">
  <link rel="stylesheet" href="/asset/css/animate.css">
  <link rel="stylesheet" href="/asset/css/icofonts.css">
  <link rel="stylesheet" href="/asset/css/owlcarousel.min.css">
  <link rel="stylesheet" href="/asset/css/slick.css">
  <link rel="stylesheet" href="/asset/css/navigation.css">
  <link rel="stylesheet" href="/asset/css/magnific-popup.css">
  <link rel="stylesheet" href="/asset/css/style.css">
  <link rel="stylesheet" href="/asset/css/colors/color-12.css">
  <link rel="stylesheet" href="/asset/css/responsive.css">
  
  <!-- Core JS files -->
  <script type="text/javascript" src="/asset/js/plugins/loaders/pace.min.js"></script>
  <script type="text/javascript" src="/asset/js/core/libraries/jquery.min.js"></script>
  <script type="text/javascript" src="/asset/js/core/libraries/bootstrap.min.js"></script>
  <script type="text/javascript" src="/asset/js/plugins/loaders/blockui.min.js"></script>
  <!-- /core JS files -->

  <!-- Theme JS files -->
  <script type="text/javascript" src="/asset/js/plugins/media/fancybox.min.js"></script>
  <script type="text/javascript" src="/asset/js/core/app.js"></script>


</head>

<body class="body-color">
<div class="body-inner-content">
  <header class="navbar-standerd" style="height: 84px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav class="navigation ts-main-menu navigation-landscape">
            <div class="nav-header">
              <a class="nav-brand" href="index-2.html">
              </a>

              <div class="nav-toggle"></div>
            </div>


            <div class="nav-menus-wrapper clearfix">
              <!-- social-->
              <ul class="top-social float-left">
                <li>
                  <a href="#">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-google-plus"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-pinterest"></i>
                  </a>
                </li>

              </ul>
              <!-- social-->

              <div class='col-md-6' style="text-align: right; color: #8a8a8a; font-size: 14px;">
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

              <!--nav right menu start-->
              <ul class="right-menu align-to-right">
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
              <!--nav right menu end-->


              <!-- nav menu start-->
              <ul class="nav-menu nav-menu-centered">
                <li class="active">
                  <?php echo "<a href=".baseURL().'/mangeCounseling/homePageCounseling/>'.'خانه'.'</a>';?>
                </li>
                <li>
                <?php echo "<a href=".baseURL().'/mangeCounseling/turns/>'.'مشاوران'.'</a>';?>
                </li>

                </li>
                <li>
                  <?php echo "<a href=".baseURL().'/mangeCounseling/turns/'.$params.'>'.'نوبت دهی'.'</a>';?>
                </li>
                <li>
                  <?php echo "<a href=".baseURL().'/mangeCounseling/homePageCounseling/>'.'کارگاه های آموزشی'.'</a>';?>
                </li>
                <li>
                  <?php echo "<a href=".baseURL().'/mangeCounseling/homePageCounseling/>'.'محصولات آموزشی'.'</a>';?>
                </li>
                <li>
                  <?php echo "<a href=".baseURL().'/mangeCounseling/homePageCounseling/>'.'دانستنی های ازدواج'.'</a>';?>
                </li>
                <li>
                  <?php echo "<a href=".baseURL().'/mangeCounseling/homePageCounseling/>'.'کتابخانه'.'</a>';?>
                </li>
                <li>
                  <?php echo "<a href=".baseURL().'/mangeCounseling/aboutMe/>'.'ارتباط با مرکز'.'</a>';?>
                </li>

              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
    
  </header>

  <?php echo $content ?>

  <footer class="ts-footer ts-footer-2">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="footer-menu text-center">
            <ul>
              <li>
                <a href="#">Support</a>
              </li>
              <li>
                <a href="#">Suggestion</a>
              </li>
              <li>
                <a href="#">Privacy</a>
              </li>
              <li>
                <a href="#">About</a>
              </li>
              <li>
                <a href="#">Our Ads </a>
              </li>
              <li>
                <a href="#">Terms</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- end row-->
      <div class="row">
        <div class="col-md-6">
          <div class="copyright-text">
            <p>©
              <a href="#">VINBLOG</a>. Vin Blog, 2018</p>
          </div>
        </div>
        <!-- col end-->
        <div class="col-md-6">
          <ul class="footer-social-list text-right">
            <li class="ts-facebook">
              <a href="#">
                <i class="fa fa-facebook"></i>
              </a>
            </li>
            <li class="ts-google-plus">
              <a href="#">
                <i class="fa fa-google-plus"></i>
              </a>
            </li>
            <li class="ts-twitter">
              <a href="#">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
            <li class="ts-youtube">
              <a href="#">
                <i class="fa fa-youtube-play"></i>
              </a>
            </li>
            <li class="ts-linkedin">
              <a href="#">
                <i class="fa fa-linkedin"></i>
              </a>

            </li>
          </ul>
        </div>
      </div>
    </div>

  </footer>


</div>
<script src="js/jquery.min.js"></script>
<script src="js/navigation.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl-carousel.2.3.0.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/main.js"></script>
</body>
</html>