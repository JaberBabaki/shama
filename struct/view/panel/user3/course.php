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
              <li ><a href="informationCenter"><i class="icon-people"></i> <span>اطلاعات مرکز</span></a>
              </li>
              <li class="active"><a href="course"><i class="icon-stack2"></i> <span>تعریف دوره ها</span></a></li>
              <li><a href='/user3/registerPsych'><i class="icon-stack"></i> <span>ثبت  درمانگر</span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="content-wrapper">
      <div class="page-header page-header-default">
        <div class="page-header-content">
          <div class="page-title">
            <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold"> تعریف دوره  </span>
            </h4>
          </div>
        </div>
        <div class="breadcrumb-line" style="padding-left: 10px;padding-bottom: 10px;padding-top: 10px;"><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
          <button type="submit" class="btn btn-primary">تعریف دوره <i class="icon-plus2 position-right"></i></button>
          <button type="submit" class="btn btn-primary">لیست دوره ها<i class="icon-list-ordered position-right"></i></button>
        </div>
      </div>
      <div class="content">
        <div class="row">
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  $('.date-picker').persianDatepicker({
    initialValue: false,
    format: 'YYYY/MM/DD'
  });
</script>
