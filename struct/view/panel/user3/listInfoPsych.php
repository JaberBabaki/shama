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
              <li><a href='/user3/dashboard'><i class="icon-home4"></i> <span>داشبورد</span></a>
              </li>
              <li><a href="informationCenter"><i class="icon-people"></i> <span>اطلاعات مرکز</span></a>
              </li>
              <li><a href="course"><i class="icon-stack2"></i> <span>تعریف دوره ها</span></a></li>
              <li class="active"><a href='/user3/registerPsych'><i class="icon-stack"></i>
                  <span>ثبت  درمانگر</span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="content-wrapper">
      <div class="page-header page-header-default">
        <div class="page-header-content">
          <div class="page-title">
            <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold"> اطلاعات درمانگر</span>
            </h4>
          </div>
          <div class="breadcrumb-line" style="padding-left: 10px;padding-bottom: 10px;padding-top: 10px;"><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
            <a type="submit" href='/user3/registerPsych' class="btn btn-primary">ثبت درمانگر <i class="icon-list-ordered position-right"></i></a>
            <a type="submit" href='/user3/listPsych' class="btn btn-primary">لیست درمانگر<i class="icon-list-ordered position-right"></i></a>
            <a type="submit" href='/user3/calenderPsych' class="btn btn-primary">ثبت تقویم برای درمانگر<i class="icon-list-ordered position-right"></i></a>
          </div>
        </div>
      </div>
      <div class="page-header page-header-default">
        <div class="page-header-content">
        </div>
      </div>
      <div class="content">
        <div class="panel panel-flat">
          <div class="panel-heading">
            <h5 class="panel-title">لیست درمانگر های مرکز مشاوره<a class="heading-elements-toggle"><i
                  class="icon-more"></i></a></h5>

            <div class="heading-elements">
              <ul class="icons-list">
                <li><a data-action="collapse"></a></li>
              </ul>
            </div>
          </div>

          <div class="panel-body tac">
            لیست درمانگر های مرکز بر اساس حروف الفبا مرتب شده است ، میتوانید از با انتخاب فیلتر مورد نظر جستجو بر اساس
            فیلتر داشته باشید.
          </div>
          <br>
<br>
<section class="block-wraper p-0">
  <div class="container">

  <div class="row" >
    <?php if($psychInfo!=null):?>
      <?php for($i=0; $i<count($psychInfo); $i++): ?>
        <div class="col-lg-3 col-md-6" style="background-color:#ffffff; margin-left: 4px; margin-bottom: 8px;margin-right: 4px">
          <div class="thumbnail">
            <div class="thumb thumb-rounded">
              <img src="/asset/image/per-pic/<?=$psychInfo[$i]['psychPhoto']?>"  alt="">

              <div class="caption-overflow">
                      <span>
                        <a href="/asset/image/per_pic1.jpg" class="btn bg-success-400 btn-icon btn-xs"
                          data-popup="lightbox"><i class="icon-plus2"></i></a>
                        <a href="user_pages_profile.html" class="btn bg-success-400 btn-icon btn-xs"><i
                            class="icon-link"></i></a>
                      </span>
              </div>
            </div>

            <div class="caption text-center">
              <h6 class="text-semibold no-margin"> <?=$psychInfo[$i]['psychName'] ?>
                <br>
                <br>
                <small class="display-block">عضو هییت علمی دانشگاه</small>
              </h6>
              <br>
              <ul class="icons-list mt-15">
                    <a href="/mangeCounseling/detailPsych/<?=$psychInfo[$i]['shenaseh']?>/<?=$params ?>" id="btnRegisterFounder" type="submit"
                          class="btn btn-primary">مشاهده جزییات و رزرو نوبت<i
                        class="icon-arrow-left13 position-right"></i></a>
              </ul>
            </div>
          </div>
          
        </div>

      <?php endfor; ?>    
    <?php endif;?>
  </div>
</section>

        </div>
      </div>
    </div>
  </div>
</div>
