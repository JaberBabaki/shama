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
              <li><a href='/user4/dashboard'><i class="icon-home4"></i> <span>داشبورد</span></a>
              </li>
              <li class="active"><a href='/user4/informationPsych'><i class="icon-stack"></i>
                  <span>ثبت اطلاعات درمانگر</span></a></li>
              <li><a href="/user4/appointments"><i class="icon-people"></i> <span>نوبت ها</span></a></li>

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
        </div>


      </div>
      <div class="page-header page-header-default">
        <div class="page-header-content">
        </div>
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <?php
            if ($shenaseh == null) {
              echo "<div class='alert alert-danger no-border tac' id='divAlertDangerCenter'>
              <button type='button' class='close' data-dismiss='alert'><span class='sr-only'>Close</span></button>
              <span class='text-semibold'> اطلاعات درمانگر در سامانه ثبت نشده است</span>
              </div>";
            } else {
              echo "<div class='alert alert-success no-border tac'>
										<button type='button' class='close' data-dismiss='alert'><span class='sr-only'>Close</span></button>
										<span class='text-semibold'>اطلاعات شما با شناسه </span>" . $shenaseh . "<span> در سامانه ثبت شده است.</span>
								    </div>";
            } ?>
            <div class='alert alert-success no-border tac' id='divAlertSuccessAjaxCenter' style="display: none">
              <button type='button' class='close' data-dismiss='alert'><span class='sr-only'>Close</span></button>
              <span class='text-semibold' id='txtAlertMsg1Center'></span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="col-md-12" id="alert">
              <div class="alert alert-info no-border tac">
                <button type="button" class="close" data-dismiss="alert"><span class="sr-only">Close</span></button>
              <span class="text-semibold ">توجه داشته باشید اطلاعاتی که در این بخش وارد خواهید کرد صحت لازم را داشته باشید. این اطلاعات پس از تایید برای تمامی  شهروندان ومراکز مشاوره قابل نمایش است با تشکر از همکاری شما.
</span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-flat">
                <div class="panel-heading">
                  <h5 class="panel-title">اطلاعات درمانگر <a class="heading-elements-toggle"><i
                        class="icon-more"></i></a>
                  </h5>

                  <div class="heading-elements">
                    <ul class="icons-list">
                      <li><a data-action="collapse"></a></li>
                    </ul>
                  </div>
                </div>
                <div class="panel-body">
                  <form name="formPsych">
                    <div class="form-group form-group-material">
                      <span class="help-block">نام ونام خانوادگی درمانگر مشاوره در این بخش بنویسید:</span>
                      <input type="text" name="edtNamePsych" value="" class="form-control"
                             placeholder="نام و نام خانوادگی">
                      <label style="display: none;font-size: 12px" id="lblPsychName"
                             class="validation-error-label"> </label>
                    </div>
                    <div class="form-group form-group-material">
                      <span class="help-block"> کد ملی درمانگر مشاوره در این بخش بنویسید:</span>
                      <input type="text" name="edtNationalCode" class="form-control" placeholder="کد ملی">
                      <label style="display: none;font-size: 12px" id="lblNationalCode"
                             class="validation-error-label"> </label>
                    </div>
                    <div class="form-group form-group-material">
                      <span class="help-block"> مجوز نطام روانشناسی را در بخش زیر وارد کنید:</span>
                      <input type="text" name="edtLicense" class="form-control" placeholder="مجوز نظام روانشناسی">
                      <label style="display: none;font-size: 12px" id="lblLicense"
                             class="validation-error-label"> </label>
                    </div>
                    <div class="form-group form-group-material">
                      <span class="help-block">ایمیل درمانگر مشاوره را در بخش زیر وارد کنید:</span>
                      <input type="text" name="edtEmailPsych" class="form-control" placeholder="ایمیل">
                      <label style="display: none;font-size: 12px" id="lblEmailPsych"
                             class="validation-error-label"> </label>
                    </div>
                    <div class="form-group form-group-material">
                      <span class="help-block">شماره موبایل درمانگر مشاوره را وارد کنید:</span>
                      <input type="text" name="edtPhoneNumberPsych" class="form-control" placeholder="شماره موبایل">
                      <label style="display: none;font-size: 12px" id="lblPhoneNumberPsych"
                             class="validation-error-label"> </label>
                    </div>
                    <div class="form-group">
                      <span class="help-block">لطفا استان و شهرستان مورد نظر را انتخاب کنید:</span>

                      <div class="row">
                        <div class="col-md-6">
                          <div>
                            <select id="statePsych" class="form-control"
                                    style="height: 37px;padding-right: 3px;width: 100%"
                                    onchange="changeListOstan('#statePsych','#cityPsych')">
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
                            <select id="cityPsych" class="form-control"
                                    style="height: 37px;padding-right: 3px;width: 100%">
                              <option value="0" selected disabled>شهر را انتخاب کنید</option>
                            </select>
                          </div>
                        </div>

                      </div>
                      <label style="display: none;font-size: 12px" id="lblOstanPsych"
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
                                <input type="text" class="form-control" id="articleTitle1"
                                       placeholder="عنوان مقاله">
                              </div>

                              <div class="col-md-4" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" class="form-control" id="articleAuthor1"
                                       placeholder="نام نویسندگان">
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
                                <input type="text" class="form-control" id="bookAuthor1"
                                       placeholder="نام نویسندگان">
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
                                <input type="text" class="form-control" id="bookAuthor2"
                                       placeholder="نام نویسندگان">
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
                                <input type="text" class="form-control" id="bookAuthor3"
                                       placeholder="نام نویسندگان">
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
                                <input type="text" class="form-control" id="bookAuthor4"
                                       placeholder="نام نویسندگان">
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
                                <input type="text" class="form-control" id="bookAuthor5"
                                       placeholder="نام نویسندگان">
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
                                <input type="text" class="form-control" id="awardsHonorTitle1"
                                       placeholder=" عنوان ">
                              </div>
                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" class="form-control" id="awardsHonorYear1" placeholder="سال">
                              </div>
                            </div>
                            <label>2:</label>

                            <div class="row">
                              <div class="col-md-9" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" class="form-control" id="awardsHonorTitle2"
                                       placeholder=" عنوان ">
                              </div>
                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" class="form-control" id="awardsHonorYear2" placeholder="سال">
                              </div>
                            </div>
                            <label>3:</label>

                            <div class="row">
                              <div class="col-md-9" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" class="form-control" id="awardsHonorTitle3"
                                       placeholder=" عنوان ">
                              </div>
                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" class="form-control" id="awardsHonorYear3" placeholder="سال">
                              </div>
                            </div>
                            <label>4:</label>

                            <div class="row">
                              <div class="col-md-9" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" class="form-control" id="awardsHonorTitle4"
                                       placeholder=" عنوان ">
                              </div>
                              <div class="col-md-3" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" class="form-control" id="awardsHonorYear4" placeholder="سال">
                              </div>
                            </div>
                            <label>5:</label>

                            <div class="row">
                              <div class="col-md-9" style="padding-left: 5px;padding-right: 5px">
                                <input type="text" class="form-control" id="awardsHonorTitle5"
                                       placeholder=" عنوان ">
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
                            <span onclick="formPsychValidation()" id="btnRegisterPsych" type="submit"
                                class="btn btn-primary"><?php if ($shenaseh == null) {
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
          opts.title = 'Breaking News';
          opts.text = 'Have you met Ted?';
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
    $('.date-picker').persianDatepicker({
      initialValue: false,
      format: 'YYYY/MM/DD'
    });
    function dialogdSelectFile(id) {
      $(id).trigger('click');
    }

    var okPic = 1;
    var okCV = 1;
    function selectFile(input, type) {
      if (input.files && input.files[0]) {
        size = input.files[0].size;
        var imgsize = size / 1024;
        if (type == 'image') {
          if (imgsize <= 100) {
            var reader = new FileReader();
            reader.onload = function (e) {
              $('#preview')
                .attr('src', e.target.result)
                .width(150).height(200);
            };
            reader.readAsDataURL(input.files[0]);
            printOk('#lblSelectPic', '');
            okPic = 0;
          } else {
            okPic = 1;
            printError("#lblSelectPic", "حجم عکس ارسالی بیش از ۱۰۰ کیلو بایت است.");
          }
        }
        if (type == 'pdf') {
          if (imgsize <= 2000) {
            var fileName = input.files[0].name;
            $("#CV").text(fileName);
            printOk('#lblCV', '');
            okCV = 0;
          } else {
            okCV = 1;
            printError("#lblCV", "حجم رزومه ارسالی بیش از ۲مگابایت است.");
          }
        }
      }
    }

    function printError(elemId, hintMsg) {
      $(elemId).text(hintMsg);
      $(elemId).css({'display': 'block'});
    }
    function printOk(elemId, hintMsg) {
      $(elemId).text(" ");
      $(elemId).css({'display': 'none'});
    }


    function formPsychValidation() {
      var ostanData = $("#statePsych :selected").text();
      var cityData = $("#cityPsych :selected").text();
      var cityValue = $('#statePsych').find('option:selected').val();
      var ostanValue = $('#cityPsych').find('option:selected').val();
      var edtPsychName = document.forms["formPsych"]["edtNamePsych"].value;
      var edtEmailPsych = document.forms["formPsych"]["edtEmailPsych"].value;
      var edtPhoneNumber = document.forms["formPsych"]["edtPhoneNumberPsych"].value;
      var edtNationalCode = document.forms["formPsych"]["edtNationalCode"].value;
      var edtLicense = document.forms["formPsych"]["edtLicense"].value;
      var gender = $("input[name='gender']:checked").val();

      var karshenasi = $("#karshenasiFild").val() + "|" + $("#karshenasiGrayesh").val() + "|" + $("#karshenasiUni").val() + "|" + $("#karshenasiYear").val();
      var arshad = $("#arshadFild").val() + "|" + $("#arshadGrayesh").val() + "|" + $("#arshadUni").val() + "|" + $("#arshadYear").val();
      var doctora = $("#doctoraFild").val() + "|" + $("#doctoraGrayesh").val() + "|" + $("#doctoraUni").val() + "|" + $("#doctoraYear").val();

      var workshop1 = $("#workshopTitle1").val() + "|" + $("#workshopInsti1").val() + "|" + $("#workshopLocation1").val() + "|" + $("#workshopYear1").val();
      var workshop2 = $("#workshopTitle2").val() + "|" + $("#workshopInsti2").val() + "|" + $("#workshopLocation2").val() + "|" + $("#workshopYear2").val();
      var workshop3 = $("#workshopTitle3").val() + "|" + $("#workshopInsti3").val() + "|" + $("#workshopLocation3").val() + "|" + $("#workshopYear3").val();
      var workshop4 = $("#workshopTitle4").val() + "|" + $("#workshopInsti4").val() + "|" + $("#workshopLocation4").val() + "|" + $("#workshopYear4").val();
      var workshop5 = $("#workshopTitle5").val() + "|" + $("#workshopInsti5").val() + "|" + $("#workshopLocation5").val() + "|" + $("#workshopYear5").val();

      var article1 = $("#articleTitle1").val() + "|" + $("#articleAuthor1").val() + "|" + $("#articleMagzine1").val() + "|" + $("#articleYear1").val();
      var article2 = $("#articleTitle2").val() + "|" + $("#articleAuthor2").val() + "|" + $("#articleMagzine2").val() + "|" + $("#articleYear2").val();
      var article3 = $("#articleTitle3").val() + "|" + $("#articleAuthor3").val() + "|" + $("#articleMagzine3").val() + "|" + $("#articleYear3").val();
      var article4 = $("#articleTitle4").val() + "|" + $("#articleAuthor4").val() + "|" + $("#articleMagzine4").val() + "|" + $("#articleYear4").val();
      var article5 = $("#articleTitle5").val() + "|" + $("#articleAuthor5").val() + "|" + $("#articleMagzine5").val() + "|" + $("#articleYear5").val();

      var book1 = $("#bookTitle1").val() + "|" + $("#bookAuthor1").val() + "|" + $("#bookPublish1").val() + "|" + $("#bookYear1").val();
      var book2 = $("#bookTitle2").val() + "|" + $("#bookAuthor2").val() + "|" + $("#bookPublish2").val() + "|" + $("#bookYear2").val();
      var book3 = $("#bookTitle3").val() + "|" + $("#bookAuthor3").val() + "|" + $("#bookPublish3").val() + "|" + $("#bookYear3").val();
      var book4 = $("#bookTitle4").val() + "|" + $("#bookAuthor4").val() + "|" + $("#bookPublish4").val() + "|" + $("#bookYear4").val();
      var book5 = $("#bookTitle5").val() + "|" + $("#bookAuthor5").val() + "|" + $("#bookPublish5").val() + "|" + $("#bookYear5").val();

      var conferance1 = $("#conferanceTitle1").val() + "|" + $("#conferanceInsti1").val() + "|" + $("#conferanceLocation1").val() + "|" + $("#conferanceYear1").val();
      var conferance2 = $("#conferanceTitle2").val() + "|" + $("#conferanceInsti2").val() + "|" + $("#conferanceLocation2").val() + "|" + $("#conferanceYear2").val();
      var conferance3 = $("#conferanceTitle3").val() + "|" + $("#conferanceInsti3").val() + "|" + $("#conferanceLocation3").val() + "|" + $("#conferanceYear3").val();
      var conferance4 = $("#conferanceTitle4").val() + "|" + $("#conferanceInsti4").val() + "|" + $("#conferanceLocation4").val() + "|" + $("#conferanceYear4").val();
      var conferance5 = $("#conferanceTitle5").val() + "|" + $("#conferanceInsti5").val() + "|" + $("#conferanceLocation5").val() + "|" + $("#conferanceYear5").val();

      var awardsHonor1 = $("#awardsHonorTitle1").val() + "|" + $("#awardsHonorYear1").val();
      var awardsHonor2 = $("#awardsHonorTitle2").val() + "|" + $("#awardsHonorYear2").val();
      var awardsHonor3 = $("#awardsHonorTitle3").val() + "|" + $("#awardsHonorYear3").val();
      var awardsHonor4 = $("#awardsHonorTitle4").val() + "|" + $("#awardsHonorYear4").val();
      var awardsHonor5 = $("#awardsHonorTitle5").val() + "|" + $("#awardsHonorYear5").val();

      var imageFile = $('#selectPersonalImage')[0].files[0];
      var CVFile = $('#selectCVFile')[0].files[0];


      var formDataPsych = new FormData();
      var data = "";

      okCity = 1;
      okOstan = 1;
      okNamePsych = 1;
      okNationalCode = 1;
      okLicense = 1;
      okGender = 1;
      okEmail = 1;
      okPhone = 1;

      if (edtPsychName.length <= 2 && edtPsychName.length >= 30) {
        printError('#lblPsychName', 'نام وارد شده صحیح نیست');
        okNamePsych = 1;
      } else if (edtPsychName.length == 0) {
        printError('#lblPsychName', 'لطفا نام را وارد کنید');
        okNamePsych = 1;
      } else {
        printOk('#lblPsychName', '');
        okNamePsych = 0;
      }

      if (edtNationalCode.length <= 2 && edtNationalCode.length >= 30) {
        printError('#lblNationalCode', 'کد ملی وارد شده صحیح نیست');
        okNationalCode = 1;
      } else if (edtNationalCode.length == 0) {
        printError('#lblNationalCode', 'لطفا کد ملی را وارد کنید');
        okNationalCode = 1;
      } else {
        printOk('#lblNationalCode', '');
        okNationalCode = 0;
      }

      if (edtLicense.length <= 2 && edtLicense.length >= 30) {
        printError('#lblLicense', 'مجوز نظام روانشناسی اشتباه است');
        okLicense = 1;
      } else if (edtLicense.length == 0) {
        printError('#lblLicense', 'لطفا مجوز نظام روانشناسی را وارد کنید');
        okLicense = 1;
      } else {
        printOk('#lblLicense', '');
        okLicense = 0;
      }

      var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
      if (edtEmailPsych.length <= 7 && edtEmailPsych.length >= 1) {
        printError('#lblEmailPsych', 'ایمیل وارد شده صحیح نیست');
        okEmail = 1;
      } else if (edtEmailPsych.length == 0) {
        printError('#lblEmailPsych', 'لطفا ایمیلی وارد کنید');
        okEmail = 1;
      } else {
        if (reg.test(edtEmailPsych) == false) {
          printError('#lblEmailPsych', 'ایمیل وارد شده صحیح نیست');
          okEmail = 1;
        } else {
          printOk('#lblEmailPsych', '');
          okEmail = 0;
        }
      }
      if (edtPhoneNumber.length == 11) {
        printOk('#lblPhoneNumberPsych', '');
        okPhone = 0;
      } else if (edtPhoneNumber.length == 0) {
        printError('#lblPhoneNumberPsych', 'لطفا شماره موبایل را وارد کنید');
        okPhone = 1;
      } else {
        printError('#lblPhoneNumberPsych', 'شماره موبایل وارد شده صحیح نیست');
        okPhone = 1;
      }

      if (cityValue == 0 && ostanValue == 0) {
        printError('#lblOstanPsych', 'استان و شهر را انتخاب کنید');
        okCity = 1;
        okOstan = 1;
      } else {
        printOk('#lblOstanPsych', '');
        okCity = 0;
        okOstan = 0;
      }

      if (gender == '0' || gender == '1') {
        printOk('#lblGender', '');
        okGender = 0;
      } else {
        printError('#lblGender', 'لطفا جنسیت را تعیین کنید');
        okGender = 1;
      }
      if (imageFile == null) {
        printError("#lblSelectPic", "لطفا عکس پرسنلی را وارد کنید");
      }
      alert(okCity + '-' + okOstan + '-' + okEmail + '-' + okPhone + '-' + okNamePsych + '-' + okGender + '-' + okPic + '-' + okCV)
      if (okCity == 0 && okOstan == 0 && okNamePsych == 0 && okGender == 0 && okPic == 0 && okEmail == 0 && okPhone == 0 && okNationalCode == 0 && okLicense == 0) {
        formDataPsych.append('personalImage', imageFile);
        formDataPsych.append('CVFile', CVFile);
        formDataPsych.append('namePsych', edtPsychName);
        formDataPsych.append('nationalCode', edtNationalCode);
        formDataPsych.append('license', edtLicense);
        formDataPsych.append('emailPsych', edtEmailPsych);
        formDataPsych.append('phoneNumber', edtPhoneNumber);
        formDataPsych.append('ostan',ostanValue);
        formDataPsych.append('city',cityValue );
        formDataPsych.append('gender', gender);
        formDataPsych.append('karshenasi', karshenasi);
        formDataPsych.append('arshad', arshad);
        formDataPsych.append('doctora', doctora);
        formDataPsych.append('workshop1', workshop1);
        formDataPsych.append('workshop2', workshop2);
        formDataPsych.append('workshop3', workshop3);
        formDataPsych.append('workshop4', workshop4);
        formDataPsych.append('workshop5', workshop5);
        formDataPsych.append('article1', article1);
        formDataPsych.append('article2', article2);
        formDataPsych.append('article3', article3);
        formDataPsych.append('article4', article4);
        formDataPsych.append('article5', article5);
        formDataPsych.append('book1', book1);
        formDataPsych.append('book2', book2);
        formDataPsych.append('book3', book3);
        formDataPsych.append('book4', book4);
        formDataPsych.append('book5', book5);
        formDataPsych.append('conferance1', conferance1);
        formDataPsych.append('conferance2', conferance2);
        formDataPsych.append('conferance3', conferance3);
        formDataPsych.append('conferance4', conferance4);
        formDataPsych.append('conferance5', conferance5);
        formDataPsych.append('awardsHonor1', awardsHonor1);
        formDataPsych.append('awardsHonor2', awardsHonor2);
        formDataPsych.append('awardsHonor3', awardsHonor3);
        formDataPsych.append('awardsHonor4', awardsHonor4);
        formDataPsych.append('awardsHonor5', awardsHonor5);
        $.ajax({
          url: '/user4/registerPsych',
          type: 'POST',
          dataType: 'JSON',
          data: formDataPsych,
          contentType: false,
          processData: false,
          success: function (result) {
            var json = result;
            if (json.Status == true) {
              if ((json.ResultData.code == 200)) {
                showStackTopLeft('success', "مشخصات درمانگر با موفقیت در مرکز مشاوره ثبت شده است.");
                $('#btnRegisterPsych').text(' ویرایش');
                document.documentElement.scrollTop = 0;
                var n = json.ResultData.message;
                $('#divAlertDangerCenter').css({'display': 'none'});
                $('#divAlertSuccessAjaxCenter').css({'display': 'block'});
                $('#txtAlertMsg1Center').text("اطلاعات مرکز مشاوره با " + json.ResultData.message + "در سامانه ثبت شده است ");
              } else if ((json.ResultData.code == 201)) {
                showStackTopLeft('success', "اطلاعات مرکز با موفقیت ویرایش شده است");
                document.documentElement.scrollTop = 0;
                var n = json.ResultData.message;
                $('#txtAlertMsg1Center').text(" اطلاعات درمانگر با شناسه " + json.ResultData.message + "در سامانه ویرایش شده است");
              }
            } else {
              var msg = json.Error.message;
              showStackTopLeft('error', msg);
            }

          }
        });
      }
    }

    function changeListOstan(idOstan, idCity) {
      var id = $(idOstan).find('option:selected').val();
      $.ajax({
        method: 'POST',
        url: '/UserCommon/getCity',
        dataType: 'JSON',
        data: {
          id: id
        },
        success: function (result) {
          var html = '';
          for (var i in result.ResultData) {
            html += '<option value=' + result.ResultData[i]['id'] + '>' + result.ResultData[i]['name'] + '</option>';
          }
          $(idCity).html(html);
        }
      });
    }


  </script>
