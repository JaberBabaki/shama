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
        <div class="content-wrapper">
          <div class="content">
            <div class="row">
              <div class="col-md-12">
                <div class='alert alert-success no-border tac' id='divAlertSuccessAjaxCoach' style="display: none">
                  <button type='button' class='close' data-dismiss='alert'><span class='sr-only'>Close</span></button>
                  <span class='text-semibold' id='txtAlertMsg1Coach'></span>
                </div>
              </div>
            <div class="row">
              <div class="col-md-12">
                <div class="panel panel-flat">
                  <div class="panel-heading">
                    <h5 class="panel-title">اطلاعات دوره ها<a class="heading-elements-toggle"><i class="icon-more"></i></a>
                    </h5>

                    <div class="heading-elements">
                      <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                      </ul>
                    </div>
                  </div>

                  <div class="panel-body">
                    <form name="formCoach">
                      <div class="form-group form-group-material">
                        <input type="text" name="edtNameCourse" class="form-control" placeholder="نام دوره">
                        <label style="display: none;font-size: 12px" id="lblNameCourse"
                               class="validation-error-label"> </label>
                      </div>
                      <form  class="main-search">
                        <form  class="main-search">
                          <form action="#" class="main-search">
                            <div class="input-group content-group" style="width: 100%;">
                              <div class="form-group">
                                <select id="lstPsychName" name="location" data-placeholder="نام درمانگر" class="select">
                                  <option></option>
                                  <?php echo $info ?>
                                  </optgroup>
                                </select>
                              </div>
                            </div>
                          </form>

                      <div class="form-group form-group-material">
                        <span class="help-block">شماره موبایل مربی مشاوره را وارد کنید:</span>
                        <input type="text" name="edtPhoneNumberCoach" class="form-control" placeholder="شماره موبایل">
                        <label style="display: none;font-size: 12px" id="lblPhoneNumberCoach"
                               class="validation-error-label"> </label>
                      </div>
                      <div class="form-group">
                        <span class="help-block">لطفا استان و شهرستان مورد نظر را انتخاب کنید:</span>

                        <div class="row">
                          <div class="col-md-6">
                            <div>
                              <select id="stateCoach" class="form-control"
                                      style="height: 37px;padding-right: 3px;width: 100%"
                                      onchange="changeListOstan('#stateCoach','#cityCoach')">
                                <option value="0" selected disabled>استان را انتخاب کنید</option>
                                <?php
                                $result = UserCommonModel::getOstan();
                                for ($i = 0; $i <= count($result) - 1; $i++) {
                                  echo '  <option value=' . $result[$i]['ostan_id'] . '>' . $result[$i]['name'] . '</option>';
                                }
                                ?>
                              </select>
                              <label style="display: none;font-size: 12px" id="lblOstan"
                                     class="validation-error-label"> </label>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div>
                              <select id="cityCoach" class="form-control"
                                      style="height: 37px;padding-right: 3px;width: 100%">
                                <option value="0" selected disabled>شهر را انتخاب کنید</option>
                              </select>
                            </div>
                          </div>

                        </div>
                        <label style="display: none;font-size: 12px" id="lblOstanCoach"
                               class="validation-error-label"> </label>
                      </div>
                      <div style="margin-right: 15px">
                        <div class="form-group">
                          <label class="display-block">جنسیت:</label>

                          <form id="radioGender">
                            <input class="radio-inline" type="radio" name="gender" value="1"> مرد
                            <input class="radio-inline" type="radio" name="gender" value="0"> زن
                          </form>
                        </div>
                        <label style="display: none;font-size: 12px" id="lblGender"
                               class="validation-error-label"> </label>
                      </div>
                      <span class="help-block">عکس پروفایل:</span>

                      <div class="tac">
                        <div>
                          <img src="https://placehold.it/128x128" id="preview" class="img-thumbnail">
                        </div>
                        <br>

                        <div class="tac">
                          <div class="btn btn-primary btn-file">
                            <i class="icon-file-plus"></i>
                            <input id="selectPersonalImage" onchange="selectFile(this,'image')" type="file"
                                   accept=".png,.jpg,.jpeg" name="name" style="display: none;"/>
                            <sapn onclick="dialogdSelectFile('#selectPersonalImage')">انتخاب عکس</sapn>
                          </div>
                        </div>
                        <br>

                        <div class="media-body">
                      <span
                        class="help-block">فرمت های قابل قبول jpg و png است و حداکثر سایز برابر با ۱۰۰ کبلو بایت است</span>
                        </div>
                        <label style="display: none;font-size: 12px" id="lblSelectPic"
                               class="validation-error-label"> </label>
                      </div>
                      <br>

                      <div class="panel-body">
                        <fieldset>
                          <legend class="text-semibold" style="margin-bottom: 0px">
                            <i class="icon-file-text2 position-left"></i>
                            اطلاعات تحصیلی
                            <a class="control-arrow collapsed" data-toggle="collapse" data-target="#demo1"
                               aria-expanded="false">
                              <i class="icon-circle-down2"></i>
                            </a>
                          </legend>
                          <div class="collapse" id="demo1" aria-expanded="false" style="height: 0px;">
                      <span
                        class="help-block">لطفا اطلاعات مربوط به مدارک تحصیلی خود را در بخش های زیر وارد نمایید:</span>

                            <div class="form-group">
                              <div class="col-md-12" style="margin-top: 5px">
                                <label>مقطع کارشناسی:</label>

                                <div class="row">
                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="karshenasiFild" placeholder="رشته ">
                                  </div>

                                  <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="karshenasiGrayesh" placeholder="گرایش">
                                  </div>
                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="karshenasiUni" placeholder="دانشگاه">
                                  </div>
                                  <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="karshenasiYear" placeholder="سال  ">
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12" style="margin-top: 20px">
                                <label>کارشناسی ارشد:</label>

                                <div class="row">
                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="arshadFild" placeholder="رشته ">
                                  </div>

                                  <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="arshadGrayesh" placeholder="گرایش">
                                  </div>
                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="arshadUni" placeholder="دانشگاه">
                                  </div>
                                  <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="arshadYear" placeholder="سال  ">
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-12" style="margin-top: 20px">
                                <label>دکترا:</label>

                                <div class="row">
                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="doctoraFild" placeholder="رشته ">
                                  </div>

                                  <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="doctoraGrayesh" placeholder="گرایش">
                                  </div>

                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="doctoraUni" placeholder="دانشگاه">
                                  </div>
                                  <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="doctoraYear" placeholder="سال  ">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                        <fieldset>
                          <legend class="text-semibold" style="margin-bottom: 0px">
                            <i class="icon-file-text2 position-left"></i> کارگاه ها و دوره ها
                            <a class="control-arrow collapsed" data-toggle="collapse" data-target="#demo2"
                               aria-expanded="false">
                              <i class="icon-circle-down2"></i>
                            </a>
                          </legend>
                          <div class="collapse" id="demo2" aria-expanded="false" style="height: 0px;">
                      <span
                        class="help-block">لطفا ۴ کارگاه ها و دوره هایی که شرکت کردید را در بخش های زیر بنویسید:</span>

                            <div class="form-group">
                              <div class="col-md-12" style="margin-top: 5px">
                                <label>1:</label>

                                <div class="row">
                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="workshopTitle1" placeholder="عنوان">
                                  </div>

                                  <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="workshopInsti1"
                                           placeholder="موسسه برگزار کننده">
                                  </div>

                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="workshopLocation1"
                                           placeholder="محل برگزاری">
                                  </div>
                                  <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="workshopYear1" placeholder="سال">
                                  </div>
                                </div>
                                <label>2:</label>

                                <div class="row">
                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="workshopTitle2" placeholder="عنوان">
                                  </div>

                                  <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="workshopInsti2"
                                           placeholder="موسسه برگزار کننده">
                                  </div>

                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="workshopLocation2"
                                           placeholder="محل برگزاری">
                                  </div>
                                  <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="workshopYear2" placeholder="سال">
                                  </div>
                                </div>
                                <label>3:</label>

                                <div class="row">
                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="workshopTitle3" placeholder="عنوان">
                                  </div>

                                  <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="workshopInsti3"
                                           placeholder="موسسه برگزار کننده">
                                  </div>

                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="workshopLocation3"
                                           placeholder="محل برگزاری">
                                  </div>
                                  <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="workshopYear3" placeholder="سال">
                                  </div>
                                </div>
                                <label>4:</label>

                                <div class="row">
                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="workshopTitle4" placeholder="عنوان">
                                  </div>

                                  <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="workshopInsti4"
                                           placeholder="موسسه برگزار کننده">
                                  </div>

                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="workshopLocation4"
                                           placeholder="محل برگزاری">
                                  </div>
                                  <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="workshopYear4" placeholder="سال">
                                  </div>
                                </div>
                                <label>5:</label>

                                <div class="row">
                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="workshopTitle5" placeholder="عنوان">
                                  </div>

                                  <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="workshopInsti5"
                                           placeholder="موسسه برگزار کننده">
                                  </div>

                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="workshopLocation5"
                                           placeholder="محل برگزاری">
                                  </div>
                                  <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="workshopYear5" placeholder="سال">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                        <fieldset>
                          <legend class="text-semibold" style="margin-bottom: 0px">
                            <i class="icon-file-text2 position-left"></i> مقالات
                            <a class="control-arrow collapsed" data-toggle="collapse" data-target="#demo3"
                               aria-expanded="false">
                              <i class="icon-circle-down2"></i>
                            </a>
                          </legend>
                          <div class="collapse" id="demo3" aria-expanded="false" style="height: 0px;">
                      <span
                        class="help-block">لطفا ۴ مقالاتی که تاکنون منشر کردید را در بخش های زیر بنویسید:</span>

                            <div class="form-group">
                              <div class="col-md-12" style="margin-top: 5px">
                                <label>1:</label>

                                <div class="row">
                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="articleTitle1" placeholder="عنوان مقاله">
                                  </div>

                                  <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="articleAuthor1" placeholder="نام نویسندگان">
                                  </div>

                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="articleMagzine1" placeholder="نام مجله">
                                  </div>
                                  <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="articleYear1" placeholder="سال">
                                  </div>
                                </div>
                                <label>2:</label>

                                <div class="row">
                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="articleTitle2" placeholder="عنوان">
                                  </div>

                                  <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="articleAuthor2"
                                           placeholder="نام نویسندگان">
                                  </div>

                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="articleMagzine2" placeholder="نام مجله">
                                  </div>
                                  <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="articleYear2" placeholder="سال">
                                  </div>
                                </div>
                                <label>3:</label>

                                <div class="row">
                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="articleTitle3" placeholder="عنوان">
                                  </div>

                                  <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="articleAuthor3"
                                           placeholder="نام نویسندگان">
                                  </div>

                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="articleMagzine3" placeholder="نام مجله">
                                  </div>
                                  <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="articleYear3" placeholder="سال">
                                  </div>
                                </div>
                                <label>4:</label>

                                <div class="row">
                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="articleTitle4" placeholder="عنوان">
                                  </div>

                                  <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="articleAuthor4"
                                           placeholder="نام نویسندگان">
                                  </div>

                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="articleMagzine4" placeholder="نام مجله">
                                  </div>
                                  <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="articleYear4" placeholder="سال">
                                  </div>
                                </div>
                                <label>5:</label>

                                <div class="row">
                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="articleTitle5" placeholder="عنوان">
                                  </div>

                                  <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="articleAuthor5"
                                           placeholder="نام نویسندگان">
                                  </div>

                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="articleMagzine5" placeholder="نام مجله">
                                  </div>
                                  <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="articleYear5" placeholder="سال">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                        <fieldset>
                          <legend class="text-semibold" style="margin-bottom: 0px">
                            <i class="icon-file-text2 position-left"></i> کتب
                            <a class="control-arrow collapsed" data-toggle="collapse" data-target="#demo4"
                               aria-expanded="false">
                              <i class="icon-circle-down2"></i>
                            </a>
                          </legend>
                          <div class="collapse" id="demo4" aria-expanded="false" style="height: 0px;">
                      <span
                        class="help-block">لطفا ۴ کتابی که تاکنون منشر کردید را در بخش های زیر بنویسید:</span>

                            <div class="form-group">
                              <div class="col-md-12" style="margin-top: 5px">
                                <label>1:</label>

                                <div class="row">
                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="bookTitle1" placeholder=" عنوان کتاب">
                                  </div>

                                  <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="bookAuthor1" placeholder="نام نویسندگان">
                                  </div>

                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="bookPublish1" placeholder="ناشر">
                                  </div>
                                  <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="bookYear1" placeholder="سال">
                                  </div>
                                </div>
                                <label>2:</label>

                                <div class="row">
                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="bookTitle2" placeholder=" عنوان کتاب">
                                  </div>

                                  <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="bookAuthor2" placeholder="نام نویسندگان">
                                  </div>

                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="bookPublish2" placeholder="ناشر">
                                  </div>
                                  <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="bookYear2" placeholder="سال">
                                  </div>
                                </div>
                                <label>3:</label>

                                <div class="row">
                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="bookTitle3" placeholder=" عنوان کتاب">
                                  </div>

                                  <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="bookAuthor3" placeholder="نام نویسندگان">
                                  </div>

                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="bookPublish3" placeholder="ناشر">
                                  </div>
                                  <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="bookYear3" placeholder="سال">
                                  </div>
                                </div>
                                <label>4:</label>

                                <div class="row">
                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="bookTitle4" placeholder=" عنوان کتاب">
                                  </div>

                                  <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="bookAuthor4" placeholder="نام نویسندگان">
                                  </div>

                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="bookPublish4" placeholder="ناشر">
                                  </div>
                                  <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="bookYear4" placeholder="سال">
                                  </div>
                                </div>
                                <label>5:</label>

                                <div class="row">
                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="bookTitle5" placeholder=" عنوان کتاب">
                                  </div>

                                  <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="bookAuthor5" placeholder="نام نویسندگان">
                                  </div>

                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="bookPublish5" placeholder="ناشر">
                                  </div>
                                  <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="bookYear5" placeholder="سال">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                        <fieldset>
                          <legend class="text-semibold" style="margin-bottom: 0px">
                            <i class="icon-file-text2 position-left"></i> همایش ها
                            <a class="control-arrow collapsed" data-toggle="collapse" data-target="#demo5"
                               aria-expanded="false">
                              <i class="icon-circle-down2"></i>
                            </a>
                          </legend>
                          <div class="collapse" id="demo5" aria-expanded="false" style="height: 0px;">
                      <span
                        class="help-block">لطفا ۴ همایشی در آن شرکت کردید را در بخش های زیر بنویسید:</span>

                            <div class="form-group">
                              <div class="col-md-12" style="margin-top: 5px">
                                <label>1:</label>

                                <div class="row">
                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="conferanceTitle1" placeholder=" عنوان ">
                                  </div>

                                  <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="conferanceInsti1"
                                           placeholder="برگزار کننده">
                                  </div>

                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="conferanceLocation1"
                                           placeholder="محل برگزاری">
                                  </div>
                                  <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="conferanceYear1" placeholder="سال">
                                  </div>
                                </div>
                                <label>2:</label>

                                <div class="row">
                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="conferanceTitle2" placeholder=" عنوان ">
                                  </div>

                                  <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="conferanceInsti2"
                                           placeholder="برگزار کننده">
                                  </div>

                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="conferanceLocation2"
                                           placeholder="محل برگزاری">
                                  </div>
                                  <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="conferanceYear2" placeholder="سال">
                                  </div>
                                </div>
                                <label>3:</label>

                                <div class="row">
                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="conferanceTitle3" placeholder=" عنوان ">
                                  </div>

                                  <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="conferanceInsti3"
                                           placeholder="برگزار کننده">
                                  </div>

                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="conferanceLocation3"
                                           placeholder="محل برگزاری">
                                  </div>
                                  <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="conferanceYear3" placeholder="سال">
                                  </div>
                                </div>
                                <label>4:</label>

                                <div class="row">
                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="conferanceTitle4" placeholder=" عنوان ">
                                  </div>

                                  <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="conferanceInsti4"
                                           placeholder="برگزار کننده">
                                  </div>

                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="conferanceLocation4"
                                           placeholder="محل برگزاری">
                                  </div>
                                  <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="conferanceYear4" placeholder="سال">
                                  </div>
                                </div>
                                <label>5:</label>

                                <div class="row">
                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="conferanceTitle5" placeholder=" عنوان ">
                                  </div>

                                  <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="conferanceInsti5"
                                           placeholder="برگزار کننده">
                                  </div>

                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="conferanceLocation5"
                                           placeholder="محل برگزاری">
                                  </div>
                                  <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="conferanceYear5" placeholder="سال">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                        <fieldset>
                          <legend class="text-semibold" style="margin-bottom: 0px">
                            <i class="icon-file-text2 position-left"></i> جوایز و افتخارات
                            <a class="control-arrow collapsed" data-toggle="collapse" data-target="#demo6"
                               aria-expanded="false">
                              <i class="icon-circle-down2"></i>
                            </a>
                          </legend>
                          <div class="collapse" id="demo6" aria-expanded="false" style="height: 0px;">
                      <span
                        class="help-block">لطفا جوایز و افتخارت خود را در بخش های زیر بنویسید:</span>

                            <div class="form-group">
                              <div class="col-md-12" style="margin-top: 5px">
                                <label>1:</label>

                                <div class="row">
                                  <div class="col-md-9" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="awardsHonorTitle1" placeholder=" عنوان ">
                                  </div>
                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="awardsHonorYear1" placeholder="سال">
                                  </div>
                                </div>
                                <label>2:</label>

                                <div class="row">
                                  <div class="col-md-9" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="awardsHonorTitle2" placeholder=" عنوان ">
                                  </div>
                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="awardsHonorYear2" placeholder="سال">
                                  </div>
                                </div>
                                <label>3:</label>

                                <div class="row">
                                  <div class="col-md-9" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="awardsHonorTitle3" placeholder=" عنوان ">
                                  </div>
                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="awardsHonorYear3" placeholder="سال">
                                  </div>
                                </div>
                                <label>4:</label>

                                <div class="row">
                                  <div class="col-md-9" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="awardsHonorTitle4" placeholder=" عنوان ">
                                  </div>
                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="awardsHonorYear4" placeholder="سال">
                                  </div>
                                </div>
                                <label>5:</label>

                                <div class="row">
                                  <div class="col-md-9" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="awardsHonorTitle5" placeholder=" عنوان ">
                                  </div>
                                  <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                    <input type="text" class="form-control" id="awardsHonorYear5" placeholder="سال">
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <br>
                        </fieldset>
                      </div>
                      <div class="form-group">
                        <label>آپلود رزومه:</label>
                        <br>

                        <div class="uploader">
                          <input id="selectCVFile" onchange="selectFile(this,'pdf')" type="file"
                                 accept=".pdf" name="name" style="display: none;"/>

                          <span id="CV" class="filename" style="user-select: none;">رزومه را انتخاب کنید </span>
                          <sapn class="browse btn btn-primary hidden-xs" style="user-select: none;"
                                onclick="dialogdSelectFile('#selectCVFile')">انتخاب رزومه
                          </sapn>
                        </div>
                        <span class="help-block tac"> لطفا رزومه خود را در این بخش آپلود کنید، توجه بفرمایید که رزومه شما برای شهروندان قابل دریافت و نمایش است .</span>
                        <label style="display: none;font-size: 12px" id="lblCV"
                               class="validation-error-label"> </label>
                      </div>
                      <div class="text-right">
                  <span onclick="formCoachValidation()" id="btnRegisterCoach" type="submit"
                        class="btn btn-primary"><?php if ($record == null) {
                      echo "ثبت";
                    } else {
                      echo "ویرایش";
                    } ?><i
                      class="icon-arrow-left13 position-right"></i></span>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
