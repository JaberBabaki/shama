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
              <li class="active"><a href="informationCenter"><i class="icon-people"></i> <span>اطلاعات مرکز</span></a>
              </li>
              <li><a href="workshop"><i class="icon-stack2"></i> <span>تعریف دوره ها</span></a></li>
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
            <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">اطلاعات مرکز مشاوره</span>
            </h4>
          </div>
        </div>
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-6">
            <?php
            // as mogh render bekhon;
            if ($counseling == 0) {
              echo "<div class='alert alert-danger no-border tac' id='divAlertDangerCenter'>
              <button type='button' class='close' data-dismiss='alert'><span class='sr-only'>Close</span></button>
              <span class='text-semibold'> اطلاعات مرکز مشاوره در سامانه ثبت نشده است</span>
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
          <div class="col-md-6">
            <?php
            if ($founder == 0) {
              echo "<div class='alert alert-danger no-border tac' id='divAlertDangerFounder'>
              <button type='button' class='close' data-dismiss='alert'><span class='sr-only'>Close</span></button>
              <span class='text-semibold'> اطلاعات موسس مرکز مشاوره ثبت نشده است</span>
              </div>";
            } else {
              echo "<div class='alert alert-success no-border tac'>
										<button type='button' class='close' data-dismiss='alert'><span class='sr-only'>Close</span></button>
										<span class='text-semibold'>اطلاعات موسس مرکز مشاوره با موفقیت در سامانه ثبت شده است</span>
								    </div>";
            } ?>
            <div class='alert alert-success no-border tac' id='divAlertSuccessAjaxFounder' style="display: none">
              <button type='button' class='close' data-dismiss='alert'><span class='sr-only'>Close</span></button>
              <span class='text-semibold' id='txtAlertMsg1Founder'></span>
            </div>
          </div>
          <br>
          <br>
          <br>

          <div class="col-md-12" id="alert">
            <div class="alert alert-info no-border tac">
              <button type="button" class="close" data-dismiss="alert"><span class="sr-only">Close</span></button>
              <span class="text-semibold ">توجه داشته باشید اطلاعاتی که در این بخش وارد خواهید کرد صحت لازم را داشته باشید. این اطلاعات پس از تایید برای تمامی کاربران و شهروندان قابل نمایش است با تشکر از همکاری شما.
</span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="panel panel-flat">
              <div class="panel-heading">
                <h5 class="panel-title">اطلاعات مرکز<a class="heading-elements-toggle"><i class="icon-more"></i></a>

                </h5>

                <div class="heading-elements">
                  <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                  </ul>
                </div>
              </div>

              <div class="panel-body">
                <form name="myForm">
                  <div class="form-group form-group-material">
                    <span class="help-block">لطفا در این بخش نام کامل مرکز مشاوره را بنویسید:</span>
                    <input type="text" class="form-control" name="edtCenterName" placeholder="نام مرکز">
                    <label style="display: none;font-size: 12px" id="lblCenterName"
                           class="validation-error-label"> </label>
                  </div>

                  <span class="help-block">عکس برند:</span>

                  <div class="tac">
                    <div>
                      <img src="https://placehold.it/128x128" id="previewBrand" class="img-thumbnail">
                    </div>
                    <br>

                    <div class="tac">
                      <div class="btn btn-primary btn-file">
                        <i class="icon-file-plus"></i>
                        <input id="selectBrandImage" onchange="selectFile(this,'imageBrand')" type="file"
                               accept=".png,.jpg,.jpeg" name="name" style="display: none;"/>
                        <sapn onclick="dialogdSelectFile('#selectBrandImage')">انتخاب عکس</sapn>
                      </div>
                    </div>
                    <br>

                    <div class="media-body">
                      <span
                        class="help-block">فرمت های قابل قبول jpg و png است و حداکثر سایز برابر با ۱۰۰ کبلو بایت است</span>
                    </div>
                    <label style="display: none;font-size: 12px" id="lblSelectPicBrand"
                           class="validation-error-label"> </label>
                  </div>
                  <div class="form-group">
                    <span class="help-block">لطفا استان و شهرستان مورد نظر را انتخاب کنید:</span>

                    <div class="row">
                      <div class="col-md-6">
                        <div>
                          <select  id="state" class="form-control"
                                  style="height: 37px;padding-right: 3px;width: 100%"
                                  onchange="changeListOstan('#state','#city')">
                            <option value="0" selected disabled>استان را انتخاب کنید</option>
                            <?php
                            $result = UserCommonModel::getOstan();
                            for ($i = 0; $i <= count($result) - 1; $i++) {
                              echo '  <option value=' . $result[$i]['ostan_id'] . '>' . $result[$i]['name'] . '</option>';
                            }
                            ?>
                          </select>

                        </div>
                      </div>
                      <div class="col-md-6">
                        <div>
                          <select id="city" class="form-control"
                                  style="height: 37px;padding-right: 3px;width: 100%">
                            <option value="0" selected disabled>شهر را انتخاب کنید</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <label style="display: none;font-size: 12px" id="lblOstan"
                           class="validation-error-label"> </label>
                  </div>
                  <div class="form-group form-group-material">
                    <span class="help-block">تاریخ تاسیس مرکز مشاوره را در بخش زیر بنویسید:</span>
                    <input type="text" class="form-control date-picker" name="edtEstablishDate" readonly="readonly"
                           placeholder="تاریخ تاسیس">
                    <label style="display: none;font-size: 12px" id="lblEstablishDate"
                           class="validation-error-label"> </label>
                  </div>
                  <div class="form-group form-group-material">
                    <span class="help-block">اعتبار پروانه تخصصی مرکز مشاوره را در بخش زیر بنویسید:</span>
                    <input type="text" class="form-control date-picker" name="edtExpairDateCenter" readonly="readonly"
                           placeholder="تاریخ اعتبار پروانه">
                    <label style="display: none;font-size: 12px" id="lblExpairDateCenter"
                           class="validation-error-label"> </label>
                  </div>
                  <div class="form-group form-group-material">
                    <label class="text-semibold">لطفا حوزه مشاوره مرکز را تعیین کنید:</label>

                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="chkPsychology">
                        روانشناسی
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="chkLegal">
                        حقوقی
                      </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="chkReligion">
                        دینی
                      </label>
                    </div>
                    <br>
                    <label style="display: none;font-size: 12px" id="lblChk" class="validation-error-label"> </label>
                  </div>
                  <div class="form-group form-group-material">
                    <sapan class="help-block">لطفا شماره حسابی جهت پرداخت های الکترونیکی ویزیت بنویسید:</sapan>
                    <input type="text" class="form-control" name="edtAccountNumber" placeholder="شماره حساب">
                    <label style="display: none;font-size: 12px" id="lblAccountNumber"
                           class="validation-error-label"> </label>
                  </div>

                  <div class="form-group form-group-material">
                    <span class="help-block">آدرس محل مرکز مشاره را در بخش زیر بنویسید:</span>
                    <input type="text" class="form-control" name="edtAddress" placeholder="آدرس">
                    <label style="display: none;font-size: 12px" id="lblAddress"
                           class="validation-error-label"> </label>
                  </div>
                  <div class="form-group form-group-material">
                    <span class="help-block">تلفن تماس مرکز مشاوره را در بخش زیر بنویسید:</span>
                    <input type="text" class="form-control" name="edtPhoneNumber" placeholder="تلفن">
                    <label style="display: none;font-size: 12px" id="lblPhoneNumber"
                           class="validation-error-label"> </label>
                  </div>
                  <div class="form-group form-group-material">
                    <span
                      class="help-block">چنانچه توضیحاتی دیگر در مورد مرکز مشاوره نیاز هست در این بخش بنویسید:</span>
                    <textarea rows="5" cols="5" class="form-control" name="edtMoreExplain"
                              placeholder="توضیحات"></textarea>
                    <label style="display: none;font-size: 12px" id="lblMoreExplain"
                           class="validation-error-label"> </label>
                  </div>
                  <div class="form-group form-group-material">
                    <div class="text-right">
                      <span onclick="formCenterValidation()" class="btn btn-primary"
                            id="btnRegister"> <?php if ($counseling == 0) {
                          echo "ثبت";
                        } else {
                          echo "ویرایش";
                        } ?> <i class="icon-arrow-left13 position-right"></i>
                      </span>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="panel panel-flat">
              <div class="panel-heading">
                <h5 class="panel-title">اطلاعات موسس<a class="heading-elements-toggle"><i class="icon-more"></i></a>
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
                    <span class="help-block">نام ونام خانوادگی موسس مرکز مشاوره در این بخش بنویسید:</span>
                    <input type="text" name="edtNameFounder" class="form-control" placeholder="نام و نام خانوادگی">
                    <label style="display: none;font-size: 12px" id="lblFounderName"
                           class="validation-error-label"> </label>
                  </div>
                  <div class="form-group form-group-material">
                    <span class="help-block">ایمیل موسس مرکز مشاوره را در بخش زیر وارد کنید:</span>
                    <input type="text" name="edtEmailFounder" class="form-control" placeholder="ایمیل">
                    <label style="display: none;font-size: 12px" id="lblEmailFounder"
                           class="validation-error-label"> </label>
                  </div>
                  <div class="form-group form-group-material">
                    <span class="help-block">شماره موبایل موسس مرکز مشاوره را وارد کنید:</span>
                    <input type="text" name="edtPhoneNumberFounder" class="form-control" placeholder="شماره موبایل">
                    <label style="display: none;font-size: 12px" id="lblPhoneNumberFounder"
                           class="validation-error-label"> </label>
                  </div>
                  <div class="form-group">
                    <span class="help-block">لطفا استان و شهرستان مورد نظر را انتخاب کنید:</span>

                    <div class="row">
                      <div class="col-md-6">
                        <div>
                          <select id="stateFounder" class="form-control"
                                  style="height: 37px;padding-right: 3px;width: 100%"
                                  onchange="changeListOstan('#stateFounder','#cityFounder')">
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
                          <select id="cityFounder" class="form-control"
                                  style="height: 37px;padding-right: 3px;width: 100%">
                            <option value="0" selected disabled>شهر را انتخاب کنید</option>
                          </select>
                        </div>
                      </div>

                    </div>
                    <label style="display: none;font-size: 12px" id="lblOstanFounder"
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
                  <span onclick="formFounderValidation()" id="btnRegisterFounder" type="submit"
                        class="btn btn-primary"><?php if ($founder == 0) {
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
        opts.title = 'Oh No';
        opts.text = 'Watch out for that water tower!';
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
  var okPicBrand = 1;
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
      if (type == 'imageBrand') {
        if (imgsize <= 100) {
          var reader = new FileReader();
          reader.onload = function (e) {
            $('#previewBrand')
              .attr('src', e.target.result)
              .width(200).height(200);
          };
          reader.readAsDataURL(input.files[0]);
          printOk('#lblSelectPicBrand', '');
          okPicBrand = 0;
        } else {
          okPicBrand = 1;
          printError("#lblSelectPicBrand", "حجم عکس ارسالی بیش از ۱۰۰ کیلو بایت است.");
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

  function formCenterValidation() {
    var ostanData = $("#state :selected").text();
    var cityData = $("#city :selected").text();
    var cityValue = $('#state').find('option:selected').val();
    var ostanValue = $('#city').find('option:selected').val();
    var edtCounselingName = document.forms["myForm"]["edtCenterName"].value;
    var edtEstablishDate = document.forms["myForm"]["edtEstablishDate"].value;
    var edtExpairDateCenter = document.forms["myForm"]["edtExpairDateCenter"].value;
    var chkPsychology = document.forms["myForm"]["chkPsychology"].checked;
    var chkLegal = document.forms["myForm"]["chkLegal"].checked;
    var chkReligion = document.forms["myForm"]["chkReligion"].checked;
    var edtAccountNumber = document.forms["myForm"]["edtAccountNumber"].value;
    var edtAddress = document.forms["myForm"]["edtAddress"].value;
    var edtPhoneNumber = document.forms["myForm"]["edtPhoneNumber"].value;
    var edtMoreExplain = document.forms["myForm"]["edtMoreExplain"].value;
    var data = "";
    var imageFileBrand = $('#selectBrandImage')[0].files[0];
    var formDataFounder = new FormData();
    okCity = 1;
    okOstan = 1;
    okCenterName = 1;
    okEstablishDate = 1;
    okExpairDateCenter = 1;
    okPsychology = 1;
    okLegal = 1;
    okReligion = 1;
    okAccountNumber = 1;
    okAdddress = 1;
    okPhoneNumber = 1;
    okMoreExplain = 1;

    status=1;

    if (edtCounselingName.length <= 2 && edtCounselingName.length >= 30) {
      printError('#lblCenterName', 'نام وارد شده صحیح نیست');
      okCenterName = 1;
      status=0;
    } else if (edtCounselingName.length == 0) {
      printError('#lblCenterName', 'لطفا نام مرکز را وارد کنید');
      okCenterName = 1;
      status=0;
    } else {
      printOk('#lblCenterName', '');
      okCenterName = 0;
    }
    if (cityValue == 0 && ostanValue == 0) {
      printError('#lblOstan', 'استان و شهر را انتخاب کنید');
      okCity = 1;
      okOstan = 1;
    } else {
      printOk('#lblOstan', '');
      okCity = 0;
      okOstan = 0;
    }

    if (!edtEstablishDate.length == 10) {
      printError('#lblEstablishDate', 'تاریخ وارد شده صحیح نیست');
      okEstablishDate = 1;
    } else if (edtEstablishDate.length == 0) {
      printError('#lblEstablishDate', 'لطفا تاریخ تاسیس را وارد کنید');
      okEstablishDate = 1;
    } else {
      printOk('#lblEstablishDate', '');
      okEstablishDate = 0;
    }

    if (!edtExpairDateCenter.length == 10) {
      printError('#lblExpairDateCenter', 'تاریخ وارد شده صحیح نیست');
      okExpairDateCenter = 1;
    } else if (edtExpairDateCenter.length == 0) {
      printError('#lblExpairDateCenter', 'لطفا تاریخ اعتبار را وارد کنید');
      okExpairDateCenter = 1;
    } else {
      printOk('#lblExpairDateCenter', '');
      okExpairDateCenter = 0;
    }

    if (!chkPsychology && !chkLegal && !chkReligion) {
      printError('#lblChk', 'لطفا حداقل یکی از حوزه های فعالیت مرکز را انتخاب کنید');
      okPsychology = 1;
    } else {
      printOk('#lblChk', '');
      okPsychology = 0;
      if (chkPsychology) {
        data = "1,";
      }
      if (chkLegal) {
        data = data + "2,";
      }
      if (chkReligion) {
        data = data + "3";
      }
    }

    if (edtAccountNumber.length == 0) {
      printError('#lblAccountNumber', 'لطفا شماره حساب را وارد کنید');
      okAccountNumber = 1;
    } else {
      printOk('#lblAccountNumber', '');
      okAccountNumber = 0;
    }

    if (edtAddress.length <= 10 && edtAddress.length >= 1) {
      printError('#lblAddress', 'آدرس وارد شده صحیح نیست');
      okAdddress = 1;
    } else if (edtAddress.length == 0) {
      printError('#lblAddress', 'لطفا آدرس را وارد کنید');
      okAdddress = 1;
    } else {
      printOk('#lblAddress', '');
      okAdddress = 0;
    }

    if (edtPhoneNumber.length == 11) {
      printError('#lblPhoneNumber', 'شماره تلفن وارد شده صحیح نیست');
      okPhoneNumber = 1;
    } else if (edtPhoneNumber.length == 0) {
      printError('#lblPhoneNumber', 'لطفا شماره تلفنی وارد کنید');
      okPhoneNumber = 1;
    } else {
      printOk('#lblPhoneNumber', '');
      okPhoneNumber = 0;
    }

    if (imageFileBrand == null) {
      printError("#lblSelectPicBrand", "لطفا عکس پرسنلی را وارد کنید");
    }


    if (okCenterName == 0 && okCity == 0 && okOstan == 0 && okEstablishDate == 0 && okExpairDateCenter == 0 && okPsychology == 0 && okAccountNumber == 0 && okAdddress == 0 && okPhoneNumber == 0 && okPicBrand == 0) {
      formDataFounder.append('imageBrand', imageFileBrand);
      formDataFounder.append('counselingName', edtCounselingName);
      formDataFounder.append('ostan', ostanValue);
      formDataFounder.append('city', cityValue);
      formDataFounder.append('establishDate', edtEstablishDate);
      formDataFounder.append('expairDateCenter', edtExpairDateCenter);
      formDataFounder.append('fieldActivity', data);
      formDataFounder.append('accountNumber', edtAccountNumber);
      formDataFounder.append('phoneNumber', edtPhoneNumber);
      formDataFounder.append('address', edtAddress);
      formDataFounder.append('moreExplain', edtMoreExplain);
      $.ajax({
        url: '/user3/registerCounseling',
        type: 'POST',
        dataType: 'JSON',
        data: formDataFounder,
        contentType: false,
        processData: false,
        success: function (result) {
          var json = result;
          if ((json.ResultData.code == 200)) {
            showStackTopLeft('success', "اطلاعات مرکز مشاوره با موفقیت ثبت شده است");
            $('#btnRegister').text(' ویرایش');
            document.documentElement.scrollTop = 0;
            var n = json.ResultData.message;
            $('#divAlertDangerCenter').css({'display': 'none'});
            $('#divAlertSuccessAjaxCenter').css({'display': 'block'});
            $('#txtAlertMsg1Center').text("اطلاعات مرکز مشاوره با " + json.ResultData.message + "در سامانه ثبت شده است ");
          } else if ((json.ResultData.code == 201)) {
            showStackTopLeft('success', "اطلاعات مرکز با موفقیت ویرایش شده است");
            document.documentElement.scrollTop = 0;
            var n = json.ResultData.message;
            $('#txtAlertMsg1Center').text("اطلاعات مرکز مشاوره با  " + json.ResultData.message + "در سامانه ویرایش شده است");
          } else {
            if ((json.Error.code == 100 || json.Error.code == 101 || json.Error.code == 102 )) {
              document.documentElement.scrollTop = 0.5;
              var msg = json.Error.message;
              printError('#lblSelectPic', msg);
            }
          }
        }
      });
    } else {
    }
  }
  function formFounderValidation() {
    var ostanData = $("#stateFounder :selected").text();
    var cityData = $("#cityFounder :selected").text();
    var cityValue = $('#stateFounder').find('option:selected').val() ;
    var ostanValue = $('#cityFounder').find('option:selected').val() ;
    var edtFounderName = document.forms["formFounder"]["edtNameFounder"].value;
    var edtEmailFounder = document.forms["formFounder"]["edtEmailFounder"].value;
    var edtPhoneNumber = document.forms["formFounder"]["edtPhoneNumberFounder"].value;
    var gender = $("input[name='gender']:checked").val();

    //alert(cityValue);

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


    var formDataFounder = new FormData();
    var data = "";

    okCity = 1;
    okOstan = 1;
    okNameFounder = 1;
    okGender = 1;
    okEmail = 1;
    okPhone = 1;

    if (edtFounderName.length <= 2 && edtFounderName.length >= 30) {
      printError('#lblFounderName', 'نام وارد شده صحیح نیست');
      okNameFounder = 1;
    } else if (edtFounderName.length == 0) {
      printError('#lblFounderName', 'لطفا نام را وارد کنید');
      okNameFounder = 1;
    } else {
      printOk('#lblFounderName', '');
      okNameFounder = 0;
    }
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if (edtEmailFounder.length <= 7 && edtEmailFounder.length >= 1) {
      printError('#lblEmailFounder', 'ایمیل وارد شده صحیح نیست');
      okEmail = 1;
    } else if (edtEmailFounder.length == 0) {
      printError('#lblEmailFounder', 'لطفا ایمیلی وارد کنید');
      okEmail = 1;
    } else {
      if (reg.test(edtEmailFounder) == false) {
        printError('#lblEmailFounder', 'ایمیل وارد شده صحیح نیست');
        okEmail = 1;
      } else {
        printOk('#lblEmailFounder', '');
        okEmail = 0;
      }
    }
    if (edtPhoneNumber.length == 11) {
      printOk('#lblPhoneNumberFounder', '');
      okPhone = 0;
    } else if (edtPhoneNumber.length == 0) {
      printError('#lblPhoneNumberFounder', 'لطفا شماره موبایل را وارد کنید');
      okPhone = 1;
    } else {
      printError('#lblPhoneNumberFounder', 'شماره موبایل وارد شده صحیح نیست');
      okPhone = 1;
    }
    if (cityValue == 0 && ostanValue == 0) {
      printError('#lblOstanFounder', 'استان و شهر را انتخاب کنید');
      okCity = 1;
      okOstan = 1;
    } else {
      printOk('#lblOstanFounder', '');
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
    //alert(okCity + '-' + okOstan+'-'+okEmail+'-'+okPhone+'-'+okNameFounder+'-'+okGender+'-'+okPic+'-'+okCV)
    if (okCity == 0 && okOstan == 0 && okNameFounder == 0 && okGender == 0 && okPic == 0 && okEmail == 0 && okPhone == 0) {
      formDataFounder.append('personalImage', imageFile);
      formDataFounder.append('CVFile', CVFile);
      formDataFounder.append('nameFounder', edtFounderName);
      formDataFounder.append('emailFounder', edtEmailFounder);
      formDataFounder.append('phoneNumber', edtPhoneNumber);
      formDataFounder.append('ostan', ostanValue);
      formDataFounder.append('city', cityValue);
      formDataFounder.append('gender', gender);
      formDataFounder.append('karshenasi', karshenasi);
      formDataFounder.append('arshad', arshad);
      formDataFounder.append('doctora', doctora);
      formDataFounder.append('workshop1', workshop1);
      formDataFounder.append('workshop2', workshop2);
      formDataFounder.append('workshop3', workshop3);
      formDataFounder.append('workshop4', workshop4);
      formDataFounder.append('workshop5', workshop5);
      formDataFounder.append('article1', article1);
      formDataFounder.append('article2', article2);
      formDataFounder.append('article3', article3);
      formDataFounder.append('article4', article4);
      formDataFounder.append('article5', article5);
      formDataFounder.append('book1', book1);
      formDataFounder.append('book2', book2);
      formDataFounder.append('book3', book3);
      formDataFounder.append('book4', book4);
      formDataFounder.append('book5', book5);
      formDataFounder.append('conferance1', conferance1);
      formDataFounder.append('conferance2', conferance2);
      formDataFounder.append('conferance3', conferance3);
      formDataFounder.append('conferance4', conferance4);
      formDataFounder.append('conferance5', conferance5);
      formDataFounder.append('awardsHonor1', awardsHonor1);
      formDataFounder.append('awardsHonor2', awardsHonor2);
      formDataFounder.append('awardsHonor3', awardsHonor3);
      formDataFounder.append('awardsHonor4', awardsHonor4);
      formDataFounder.append('awardsHonor5', awardsHonor5);
      $.ajax({
        url: '/user3/registerFounder',
        type: 'POST',
        dataType: 'JSON',
        data: formDataFounder,
        contentType: false,
        processData: false,
        success: function (result) {
          var json = result;
          if (json.Status == true) {
            if ((json.ResultData.code == 200)) {
              showStackTopLeft('success', "مشخصا    ت موسس مرکز مشاوره با موفقیت ثبت شده است");
              $('#btnRegisterFounder').text(' ویرایش');
              document.documentElement.scrollTop = 0;
              var n = json.ResultData.message;
              $('#divAlertDangerFounder').css({'display': 'none'});
              $('#divAlertSuccessAjaxFounder').css({'display': 'block'});
              $('#txtAlertMsg1Founder').text("اطلاعات موسس مرکز مشاوره با موفقیت در سامانه ثبت شده است");
            } else if ((json.ResultData.code == 201)) {
              showStackTopLeft('success', "اطلاعات موسس مرکز مشاوره با موفقیت ویرایش شده است");
              document.documentElement.scrollTop = 0;
              var msg = json.ResultData.message;
              $('#txtAlertMsg1Founder').text("اطلاعات موسس مرکز مشاوره با موفقیت در سامانه ثبت شده است");
            }
          } else {
            if ((json.Error.code == 100 || json.Error.code == 101 || json.Error.code == 102 )) {
              document.documentElement.scrollTop = 0.5;
              var msg = json.Error.message;
              printError('#lblSelectPic', msg);
            } else if ((json.Error.code == 103 || json.Error.code == 104 )) {
              var msg = json.Error.message;
              printError('#lblSelectPic', msg);
            }
          }
        }
      });
    } else {
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
          html += '<option value=' + result.ResultData[i]['id'] +'>' + result.ResultData[i]['name'] +'</option>';
        }
        $(idCity).html(html);

      }
    });
  }
</script>
