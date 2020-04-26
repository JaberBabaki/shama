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
              <li><a href="workshop"><i class="icon-stack2"></i> <span>تعریف دوره ها</span></a></li>
              <li class="active"><a href='/user3/registerPsych'><i class="icon-stack"></i> <span>ثبت  درمانگر</span></a>
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
            <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">ثبت درمانگر </span>
            </h4>
          </div>
        </div>
        <div class="breadcrumb-line" style="padding-left: 10px;padding-bottom: 10px;padding-top: 10px;"><a
            class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
          <a type="submit" href='/user3/registerPsych' class="btn btn-primary">ثبت درمانگر <i
              class="icon-list-ordered position-right"></i></a>
          <a type="submit" href='/user3/listPsych' class="btn btn-primary">لیست درمانگر<i
              class="icon-plus2 position-right"></i></a>
          <a type="submit" href='/user3/calenderPsych' class="btn btn-primary">ثبت تقویم برای درمانگر<i
              class="icon-list-ordered position-right"></i></a>
        </div>
      </div>
      <div class="content">
        <div class="panel">
          <div class="panel-body">
            <h4 class="text-center content-group-lg">
              <span class="help-block" style="font-size: 14px"> شناسه درمانگر را در بخش زیر وارد کنید. </span>
              <span class="help-block"
                    style="font-size: 14px">با انتخاب جستجو می توانید اطلاعات درمانگر را مشاهده کنید</span>
              <span class="help-block" style="font-size: 14px"> در نهایت با انتخاب گزینه ثبت درمانگر به مرکز مشاوره اضافه خواهد شد. </span>
            </h4>

            <div class="input-group content-group">
              <div class="has-feedback has-feedback-left">
                <input type="text" id="edtShenaseh" class="form-control input-xlg"
                       placeholder="جستجو بر اساس شناسه درمانگر ">

                <div class="form-control-feedback">
                  <i class="icon-search4 text-muted text-size-base"></i>
                </div>
                <label style="display: none;font-size: 12px" id="lblShenaseh"
                       class="validation-error-label"> </label>
              </div>

              <div class="input-group-btn">
                <button type="submit" onclick="searchPsych();" class="btn btn-primary btn-xlg">جستجو</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">

          </div>
          <div class="col-md-6">

          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
          </div>
          <div class="col-md-6">
            <div class="panel panel-flat">
              <div class="panel-heading">
                <h5 class="panel-title">اطلاعات درمانگر <a class="heading-elements-toggle"><i class="icon-more"></i></a>
                </h5>

                <div class="heading-elements">
                  <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                  </ul>
                </div>
              </div>

              <div class="panel-body">
                <form name="formFounder">
                  <div class="form-group form-group-material">
                    <input type="text" id="edtNamePsych" readonly="readonly" class="form-control"
                           placeholder="نام و نام خانوادگی">
                  </div>
                  <div class="form-group form-group-material">
                    <input type="text" id="edtEmailPsych" readonly="readonly" class="form-control" placeholder="ایمیل">
                  </div>
                  <div class="form-group form-group-material">
                    <input type="text" id="edtPhoneNumberPsych" readonly="readonly" class="form-control"
                           placeholder="شماره موبایل">
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group form-group-material">
                          <input type="text" id="edtOstan" readonly="readonly" class="form-control" placeholder="استان">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group form-group-material">
                          <input type="text" id="edtCity" readonly="readonly" class="form-control" placeholder="شهر">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div style="margin-right: 15px">
                    <div class="form-group">
                      <form id="radioGender">
                        <input class="radio-inline" id="male" type="radio" name="gender" value="1"> مرد
                        <input class="radio-inline" id="female" type="radio" name="gender" value="0"> زن
                      </form>
                    </div>
                  </div>
                  <div class="tac">
                    <div>
                      <img src="https://placehold.it/128x128" id="preview" class="img-thumbnail">
                    </div>
                  </div>

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
                        <div class="form-group">
                          <div class="col-md-12" style="margin-top: 5px">
                            <label>مقطع کارشناسی:</label>

                            <div class="row">
                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="karshenasiFild"
                                       placeholder="رشته ">
                              </div>

                              <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="karshenasiGrayesh"
                                       placeholder="گرایش">
                              </div>
                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="karshenasiUni"
                                       placeholder="دانشگاه">
                              </div>
                              <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="karshenasiYear"
                                       placeholder="سال  ">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12" style="margin-top: 20px">
                            <label>کارشناسی ارشد:</label>

                            <div class="row">
                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="arshadFild"
                                       placeholder="رشته ">
                              </div>

                              <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="arshadGrayesh"
                                       placeholder="گرایش">
                              </div>
                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="arshadUni"
                                       placeholder="دانشگاه">
                              </div>
                              <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="arshadYear"
                                       placeholder="سال  ">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12" style="margin-top: 20px">
                            <label>دکترا:</label>

                            <div class="row">
                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="doctoraFild"
                                       placeholder="رشته ">
                              </div>

                              <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="doctoraGrayesh"
                                       placeholder="گرایش">
                              </div>

                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="doctoraUni"
                                       placeholder="دانشگاه">
                              </div>
                              <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="doctoraYear"
                                       placeholder="سال  ">
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
                        <div class="form-group">
                          <div class="col-md-12" style="margin-top: 5px">
                            <label>1:</label>

                            <div class="row">
                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="workshopTitle1"
                                       placeholder="عنوان">
                              </div>

                              <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="workshopInsti1"
                                       placeholder="موسسه برگزار کننده">
                              </div>

                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="workshopLocation1"
                                       placeholder="محل برگزاری">
                              </div>
                              <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="workshopYear1"
                                       placeholder="سال">
                              </div>
                            </div>
                            <label>2:</label>

                            <div class="row">
                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="workshopTitle2"
                                       placeholder="عنوان">
                              </div>

                              <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="workshopInsti2"
                                       placeholder="موسسه برگزار کننده">
                              </div>

                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="workshopLocation2"
                                       placeholder="محل برگزاری">
                              </div>
                              <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="workshopYear2"
                                       placeholder="سال">
                              </div>
                            </div>
                            <label>3:</label>

                            <div class="row">
                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="workshopTitle3"
                                       placeholder="عنوان">
                              </div>

                              <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="workshopInsti3"
                                       placeholder="موسسه برگزار کننده">
                              </div>

                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="workshopLocation3"
                                       placeholder="محل برگزاری">
                              </div>
                              <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="workshopYear3"
                                       placeholder="سال">
                              </div>
                            </div>
                            <label>4:</label>

                            <div class="row">
                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="workshopTitle4"
                                       placeholder="عنوان">
                              </div>

                              <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="workshopInsti4"
                                       placeholder="موسسه برگزار کننده">
                              </div>

                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="workshopLocation4"
                                       placeholder="محل برگزاری">
                              </div>
                              <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="workshopYear4"
                                       placeholder="سال">
                              </div>
                            </div>
                            <label>5:</label>

                            <div class="row">
                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="workshopTitle5"
                                       placeholder="عنوان">
                              </div>

                              <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="workshopInsti5"
                                       placeholder="موسسه برگزار کننده">
                              </div>

                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="workshopLocation5"
                                       placeholder="محل برگزاری">
                              </div>
                              <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="workshopYear5"
                                       placeholder="سال">
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
                        <div class="form-group">
                          <div class="col-md-12" style="margin-top: 5px">
                            <label>1:</label>

                            <div class="row">
                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="articleTitle1"
                                       placeholder="عنوان مقاله">
                              </div>

                              <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="articleAuthor1"
                                       placeholder="نام نویسندگان">
                              </div>

                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="articleMagzine1"
                                       placeholder="نام مجله">
                              </div>
                              <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="articleYear1"
                                       placeholder="سال">
                              </div>
                            </div>
                            <label>2:</label>

                            <div class="row">
                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="articleTitle2"
                                       placeholder="عنوان">
                              </div>

                              <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="articleAuthor2"
                                       placeholder="نام نویسندگان">
                              </div>

                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="articleMagzine2"
                                       placeholder="نام مجله">
                              </div>
                              <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="articleYear2"
                                       placeholder="سال">
                              </div>
                            </div>
                            <label>3:</label>

                            <div class="row">
                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="articleTitle3"
                                       placeholder="عنوان">
                              </div>

                              <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="articleAuthor3"
                                       placeholder="نام نویسندگان">
                              </div>

                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="articleMagzine3"
                                       placeholder="نام مجله">
                              </div>
                              <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="articleYear3"
                                       placeholder="سال">
                              </div>
                            </div>
                            <label>4:</label>

                            <div class="row">
                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="articleTitle4"
                                       placeholder="عنوان">
                              </div>

                              <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="articleAuthor4"
                                       placeholder="نام نویسندگان">
                              </div>

                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="articleMagzine4"
                                       placeholder="نام مجله">
                              </div>
                              <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="articleYear4"
                                       placeholder="سال">
                              </div>
                            </div>
                            <label>5:</label>

                            <div class="row">
                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="articleTitle5"
                                       placeholder="عنوان">
                              </div>

                              <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="articleAuthor5"
                                       placeholder="نام نویسندگان">
                              </div>

                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="articleMagzine5"
                                       placeholder="نام مجله">
                              </div>
                              <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="articleYear5"
                                       placeholder="سال">
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
                        <div class="form-group">
                          <div class="col-md-12" style="margin-top: 5px">
                            <label>1:</label>

                            <div class="row">
                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="bookTitle1"
                                       placeholder=" عنوان کتاب">
                              </div>

                              <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="bookAuthor1"
                                       placeholder="نام نویسندگان">
                              </div>

                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="bookPublish1"
                                       placeholder="ناشر">
                              </div>
                              <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="bookYear1"
                                       placeholder="سال">
                              </div>
                            </div>
                            <label>2:</label>

                            <div class="row">
                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="bookTitle2"
                                       placeholder=" عنوان کتاب">
                              </div>

                              <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="bookAuthor2"
                                       placeholder="نام نویسندگان">
                              </div>

                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="bookPublish2"
                                       placeholder="ناشر">
                              </div>
                              <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="bookYear2"
                                       placeholder="سال">
                              </div>
                            </div>
                            <label>3:</label>

                            <div class="row">
                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="bookTitle3"
                                       placeholder=" عنوان کتاب">
                              </div>

                              <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="bookAuthor3"
                                       placeholder="نام نویسندگان">
                              </div>

                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="bookPublish3"
                                       placeholder="ناشر">
                              </div>
                              <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="bookYear3"
                                       placeholder="سال">
                              </div>
                            </div>
                            <label>4:</label>

                            <div class="row">
                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="bookTitle4"
                                       placeholder=" عنوان کتاب">
                              </div>

                              <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="bookAuthor4"
                                       placeholder="نام نویسندگان">
                              </div>

                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="bookPublish4"
                                       placeholder="ناشر">
                              </div>
                              <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="bookYear4"
                                       placeholder="سال">
                              </div>
                            </div>
                            <label>5:</label>

                            <div class="row">
                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="bookTitle5"
                                       placeholder=" عنوان کتاب">
                              </div>

                              <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="bookAuthor5"
                                       placeholder="نام نویسندگان">
                              </div>

                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="bookPublish5"
                                       placeholder="ناشر">
                              </div>
                              <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="bookYear5"
                                       placeholder="سال">
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
                        <div class="form-group">
                          <div class="col-md-12" style="margin-top: 5px">
                            <label>1:</label>

                            <div class="row">
                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="conferanceTitle1"
                                       placeholder=" عنوان ">
                              </div>

                              <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="conferanceInsti1"
                                       placeholder="برگزار کننده">
                              </div>

                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="conferanceLocation1"
                                       placeholder="محل برگزاری">
                              </div>
                              <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="conferanceYear1"
                                       placeholder="سال">
                              </div>
                            </div>
                            <label>2:</label>

                            <div class="row">
                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="conferanceTitle2"
                                       placeholder=" عنوان ">
                              </div>

                              <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="conferanceInsti2"
                                       placeholder="برگزار کننده">
                              </div>

                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="conferanceLocation2"
                                       placeholder="محل برگزاری">
                              </div>
                              <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="conferanceYear2"
                                       placeholder="سال">
                              </div>
                            </div>
                            <label>3:</label>

                            <div class="row">
                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="conferanceTitle3"
                                       placeholder=" عنوان ">
                              </div>

                              <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="conferanceInsti3"
                                       placeholder="برگزار کننده">
                              </div>

                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="conferanceLocation3"
                                       placeholder="محل برگزاری">
                              </div>
                              <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="conferanceYear3"
                                       placeholder="سال">
                              </div>
                            </div>
                            <label>4:</label>

                            <div class="row">
                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="conferanceTitle4"
                                       placeholder=" عنوان ">
                              </div>

                              <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="conferanceInsti4"
                                       placeholder="برگزار کننده">
                              </div>

                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="conferanceLocation4"
                                       placeholder="محل برگزاری">
                              </div>
                              <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="conferanceYear4"
                                       placeholder="سال">
                              </div>
                            </div>
                            <label>5:</label>

                            <div class="row">
                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="conferanceTitle5"
                                       placeholder=" عنوان ">
                              </div>

                              <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="conferanceInsti5"
                                       placeholder="برگزار کننده">
                              </div>

                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="conferanceLocation5"
                                       placeholder="محل برگزاری">
                              </div>
                              <div class="col-md-2" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="conferanceYear5"
                                       placeholder="سال">
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
                        <div class="form-group">
                          <div class="col-md-12" style="margin-top: 5px">
                            <label>1:</label>

                            <div class="row">
                              <div class="col-md-9" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="awardsHonorTitle1"
                                       placeholder=" عنوان ">
                              </div>
                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="awardsHonorYear1"
                                       placeholder="سال">
                              </div>
                            </div>
                            <label>2:</label>

                            <div class="row">
                              <div class="col-md-9" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="awardsHonorTitle2"
                                       placeholder=" عنوان ">
                              </div>
                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="awardsHonorYear2"
                                       placeholder="سال">
                              </div>
                            </div>
                            <label>3:</label>

                            <div class="row">
                              <div class="col-md-9" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="awardsHonorTitle3"
                                       placeholder=" عنوان ">
                              </div>
                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="awardsHonorYear3"
                                       placeholder="سال">
                              </div>
                            </div>
                            <label>4:</label>

                            <div class="row">
                              <div class="col-md-9" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="awardsHonorTitle4"
                                       placeholder=" عنوان ">
                              </div>
                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="awardsHonorYear4"
                                       placeholder="سال">
                              </div>
                            </div>
                            <label>5:</label>

                            <div class="row">
                              <div class="col-md-9" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="awardsHonorTitle5"
                                       placeholder=" عنوان ">
                              </div>
                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" readonly="readonly" class="form-control" id="awardsHonorYear5"
                                       placeholder="سال">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <br>
                    </fieldset>
                  </div>
                  <div class="form-group">
                    <div class="uploader">
                      <sapn class="browse btn btn-primary hidden-xs" style="user-select: none;"> دریافت رزومه</sapn>
                    </div>
                  </div>
                  <div class="text-right">
                  <span onclick="registerPsych()" id="btnRegisterFounder" type="submit"
                        class="btn btn-primary"> ثبت<i
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
<script>
  function showStackTopLeft(type, msg) {
    if (typeof window.stackTopLeft === 'undefined') {
      window.stackTopLeft = {
        'dir1': 'down',
        'dir2': 'right',
        'firstpos1': 25,
        'firstpos2': 25,
        'push': 'top'
      };
    }
    var opts = {
      title: 'Over Here',
      text: "Check me out. I'm in a different stack.",
      stack: window.stackTopLeft
    };
    switch (type) {
      case 'error':
        opts.title = 'خطا';
        opts.text = msg;
        opts.type = 'error';
        break;
      case 'info':
        opts.title = '';
        opts.text = msg;
        opts.type = 'info';
        break;
      case 'success':
        opts.title = 'تبریک';
        opts.text = msg;
        opts.type = 'success';
        break;
    }
    PNotify.alert(opts);
  }

  function printError(elemId, hintMsg) {
    $(elemId).text(hintMsg);
    $(elemId).css({'display': 'block'});
  }

  function printOk(elemId, hintMsg) {
    $(elemId).text(" ");
    $(elemId).css({'display': 'none'});
  }

  function searchPsych() {
    var edtShenaseh = $("#edtShenaseh").val();
    var formDataShenaseh = new FormData();
    okShenaseh = 1;

    if (edtShenaseh.length <= 2 && edtShenaseh.length >= 13) {
      printError('#lblShenaseh', 'شناسه درمانگر اشتباه وارد شده است.');
      okShenaseh = 1;
    } else if (edtShenaseh.length == 0) {
      printError('#lblShenaseh', 'شناسه درمانگر مورد نظر را وارد کنید');
      okShenaseh = 1;
    } else {
      printOk('#lblShenaseh', '');
      okShenaseh = 0;
    }

    if (okShenaseh == 0) {
      formDataShenaseh.append('shenaseh', edtShenaseh);
      $.ajax({
        url: '/user3/registerPsych',
        type: 'POST',
        dataType: 'JSON',
        data: formDataShenaseh,
        contentType: false,
        processData: false,
        success: function (result) {
          var json = result;
          if ((json.ResultData.code == 200)) {
            $('html, body').stop();
            showStackTopLeft('info', "لطفا اطلاعات درمانگر را مشاهده و سپس ثبت کنید.");
            $("#edtNamePsych").val(json.ResultData.name);
            $("#edtEmailPsych").val(json.ResultData.email);
            $("#edtPhoneNumberPsych").val(json.ResultData.phone);
            $("#edtOstan").val(json.ResultData.ostan);
            $("#edtCity").val(json.ResultData.city);
            if (json.ResultData.gender == 1) {
              $('#male').attr('checked', 'checked');
            } else {
              $('#female').attr('checked', 'checked');
            }
            var photo = '/asset/image/per-pic/' + json.ResultData.photo;
            $("#preview").attr("src", photo);

            var karshenasi = json.ResultData.karshenasi.split("*");
            $("#karshenasiFild").val(karshenasi[0]);
            $("#karshenasiGrayesh").val(karshenasi[1]);
            $("#karshenasiUni").val(karshenasi[2]);
            $("#karshenasiYear").val(karshenasi[3]);

            var masters = json.ResultData.masters.split("*");
            $("#arshadFild").val(masters[0]);
            $("#arshadGrayesh").val(masters[1]);
            $("#arshadUni").val(masters[2]);
            $("#arshadYear").val(masters[3]);

            var doctorate = json.ResultData.doctorate.split("*");
            $("#doctoraFild").val(doctorate[0]);
            $("#doctoraGrayesh").val(doctorate[1]);
            $("#doctoraUni").val(doctorate[2]);
            $("#doctoraYear").val(doctorate[3]);

            var workshop1 = json.ResultData.workshopsCourses_1.split("*");
            $("#workshopTitle1").val(workshop1[0]);
            $("#workshopInsti1").val(workshop1[1]);
            $("#workshopLocation1").val(workshop1[2]);
            $("#workshopYear1").val(workshop1[3]);

            var workshop2 = json.ResultData.workshopsCourses_2.split("*");
            $("#workshopTitle2").val(workshop2[0]);
            $("#workshopInsti2").val(workshop2[1]);
            $("#workshopLocation2").val(workshop2[2]);
            $("#workshopYear2").val(workshop2[3]);

            var workshop3 = json.ResultData.workshopsCourses_3.split("*");
            $("#workshopTitle3").val(workshop3[0]);
            $("#workshopInsti3").val(workshop3[1]);
            $("#workshopLocation3").val(workshop3[2]);
            $("#workshopYear3").val(workshop3[3]);

            var workshop4 = json.ResultData.workshopsCourses_4.split("*");
            $("#workshopTitle4").val(workshop4[0]);
            $("#workshopInsti4").val(workshop4[1]);
            $("#workshopLocation4").val(workshop4[2]);
            $("#workshopYear4").val(workshop4[3]);

            var workshop5 = json.ResultData.workshopsCourses_5.split("*");
            $("#workshopTitle5").val(workshop5[0]);
            $("#workshopInsti5").val(workshop5[1]);
            $("#workshopLocation5").val(workshop5[2]);
            $("#workshopYear5").val(workshop5[3]);

            var articles1 = json.ResultData.articles_1.split("*");
            $("#articleTitle1").val(articles1[0]);
            $("#articleAuthor1").val(articles1[1]);
            $("#articleMagzine1").val(articles1[2]);
            $("#articleYear1").val(articles1[3]);

            var articles2 = json.ResultData.articles_2.split("*");
            $("#articleTitle2").val(articles2[0]);
            $("#articleAuthor2").val(articles2[1]);
            $("#articleMagzine2").val(articles2[2]);
            $("#articleYear2").val(articles2[3]);

            var articles3 = json.ResultData.articles_3.split("*");
            $("#articleTitle3").val(articles3[0]);
            $("#articleAuthor3").val(articles3[1]);
            $("#articleMagzine3").val(articles3[2]);
            $("#articleYear3").val(articles3[3]);

            var articles4 = json.ResultData.articles_4.split("*");
            $("#articleTitle4").val(articles4[0]);
            $("#articleAuthor4").val(articles4[1]);
            $("#articleMagzine4").val(articles4[2]);
            $("#articleYear4").val(articles4[3]);

            var articles5 = json.ResultData.articles_5.split("*");
            $("#articleTitle5").val(articles5[0]);
            $("#articleAuthor5").val(articles5[1]);
            $("#articleMagzine5").val(articles5[2]);
            $("#articleYear5").val(articles5[3]);

            var books1 = json.ResultData.books_1.split("*");
            $("#bookTitle1").val(books1[0]);
            $("#bookAuthor1").val(books1[1]);
            $("#bookPublish1").val(books1[2]);
            $("#bookYear1").val(books1[3]);

            var books2 = json.ResultData.books_2.split("*");
            $("#bookTitle2").val(books2[0]);
            $("#bookAuthor2").val(books2[1]);
            $("#bookPublish2").val(books2[2]);
            $("#bookYear2").val(books2[3]);

            var books3 = json.ResultData.books_3.split("*");
            $("#bookTitle3").val(books3[0]);
            $("#bookAuthor3").val(books3[1]);
            $("#bookPublish3").val(books3[2]);
            $("#bookYear3").val(books3[3]);

            var books4 = json.ResultData.books_4.split("*");
            $("#bookTitle4").val(books4[0]);
            $("#bookAuthor4").val(books4[1]);
            $("#bookPublish4").val(books4[2]);
            $("#bookYear4").val(books4[3]);

            var books5 = json.ResultData.books_5.split("*");
            $("#bookTitle5").val(books5[0]);
            $("#bookAuthor5").val(books5[1]);
            $("#bookPublish5").val(books5[2]);
            $("#bookYear5").val(books5[3]);

            var conferences1 = json.ResultData.conferences_1.split("*");
            $("#conferanceTitle1").val(conferences1[0]);
            $("#conferanceInsti1").val(conferences1[1]);
            $("#conferanceLocation1").val(conferences1[2]);
            $("#conferanceYear1").val(conferences1[3]);

            var conferences2 = json.ResultData.conferences_2.split("*");
            $("#conferanceTitle2").val(conferences2[0]);
            $("#conferanceInsti2").val(conferences2[1]);
            $("#conferanceLocation2").val(conferences2[2]);
            $("#conferanceYear2").val(conferences2[3]);

            var conferences3 = json.ResultData.conferences_3.split("*");
            $("#conferanceTitle3").val(conferences3[0])
            $("#conferanceInsti3").val(conferences3[1]);
            $("#conferanceLocation3").val(conferences3[2]);
            $("#conferanceYear3").val(conferences3[3]);

            var conferences4 = json.ResultData.conferences_4.split("*");
            $("#conferanceTitle4").val(conferences4[0])
            $("#conferanceInsti4").val(conferences4[1]);
            $("#conferanceLocation4").val(conferences4[2]);
            $("#conferanceYear4").val(conferences4[3]);

            var conferences5 = json.ResultData.conferences_5.split("*");
            $("#conferanceTitle5").val(conferences5[0])
            $("#conferanceInsti5").val(conferences5[1]);
            $("#conferanceLocation5").val(conferences5[2]);
            $("#conferanceYear5").val(conferences5[3]);

            var awardsHonors1 = json.ResultData.awardsHonors_1.split("*");
            $("#awardsHonorTitle1").val(awardsHonors1[0])
            $("#awardsHonorYear1").val(awardsHonors1[1]);

            var awardsHonors2 = json.ResultData.awardsHonors_2.split("*");
            $("#awardsHonorTitle2").val(awardsHonors2[0])
            $("#awardsHonorYear2").val(awardsHonors2[1]);

            var awardsHonors3 = json.ResultData.awardsHonors_3.split("*");
            $("#awardsHonorTitle3").val(awardsHonors3[0])
            $("#awardsHonorYear3").val(awardsHonors3[1]);

            var awardsHonors4 = json.ResultData.awardsHonors_4.split("*");
            $("#awardsHonorTitle4").val(awardsHonors4[0])
            $("#awardsHonorYear4").val(awardsHonors4[1]);

            var awardsHonors5 = json.ResultData.awardsHonors_5.split("*");
            $("#awardsHonorTitle5").val(awardsHonors5[0])
            $("#awardsHonorYear5").val(awardsHonors5[1]);

          } else {
            if ((json.Error.code == 402 || json.Error.code == 401)) {
              document.documentElement.scrollTop = 0.5;
              var msg = json.Error.message;
              showStackTopLeft('error', msg);
            }
          }
        }
      });
    } else {
    }
  }
  function registerPsych() {
    var edtShenaseh = $("#edtShenaseh").val();
    var edtName = $("#edtNamePsych").val();
    var formData = new FormData();
    okName = 1;
    okShenaseh = 1;

    if (edtShenaseh.length == "") {
      okShenaseh = 1;
    } else {
      okShenaseh = 0;
    }

    if (edtName.length == "") {
      okName = 1;
    } else {
      okName = 0;
    }

    if (okName == 0 && okShenaseh == 0) {
      formData.append('id', edtShenaseh);
      $.ajax({
        url: '/user3/registerPsych',
        type: 'POST',
        dataType: 'JSON',
        data: formData,
        contentType: false,
        processData: false,
        success: function (result) {
          var json = result;
          if ((json.ResultData.code == 200)) {
            $('html, body').stop();
            showStackTopLeft('info', "لطفا اطلاعات درمانگر را مشاهده و سپس ثبت کنید.");
          }else if ((json.Error.code == 402 || json.Error.code == 401)) {
              document.documentElement.scrollTop = 0.5;
              var msg = json.Error.message;
              showStackTopLeft('error', msg);
          }else if ((json.ResultData.code == 201)) {
            var msg = json.ResultData.message
            showStackTopLeft('success', msg);
          }
        }
      });
    } else {
    }
  }
</script>
