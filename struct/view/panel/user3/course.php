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
        <div class="breadcrumb-line" style="padding-left: 10px;padding-bottom: 10px;padding-top: 10px;"><a
            class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
          <button type="submit" class="btn btn-primary">تعریف دوره <i class="icon-plus2 position-right"></i></button>
          <button type="submit" class="btn btn-primary">لیست دوره ها<i class="icon-list-ordered position-right"></i>
          </button>
        </div>
      </div>
      <div class="content">
        <div class="content">
          <div class="row">
            <div class="row">
              <div class="col-md-6">
                <div class="panel panel-flat">
                  <div class="panel-heading">
                    <h5 class="panel-title">اطلاعات دوره ها<a class="heading-elements-toggle"><i
                          class="icon-more"></i></a>
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
                      <div class="form-group">
                        <select id="lstLecturehName" name="location" data-placeholder="نام مدرس دوره" class="select">
                          <option></option>
                          <?php echo $info ?>
                          </optgroup>
                        </select>
                      </div>
                      <div class="form-group form-group-material">
                        <input type="text" name="edtDurationCourse" class="form-control" placeholder="مدت دوره">
                        <label style="display: none;font-size: 12px" id="lblDurationCourse"
                               class="validation-error-label"> </label>
                      </div>
                      <div class="form-group form-group-material">
                        <input type="text" name="edtFeeCourse" class="form-control" placeholder="شهریه دوره">
                        <label style="display: none;font-size: 12px" id="lblFeeCourse"
                               class="validation-error-label"> </label>
                      </div>
                      <div class="form-group form-group-material">
                        <input type="text" class="form-control date-picker" name="edtStartRegisterTime"
                               readonly="readonly"
                               placeholder="روز آغاز ثبت نام ">
                        <label style="display: none;font-size: 12px" id="lblStartRegisterTime"
                               class="validation-error-label"> </label>
                      </div>
                      <div class="form-group form-group-material">
                        <input type="text" class="form-control date-picker" name="edtEndRegisterTime"
                               readonly="readonly"
                               placeholder="روز پایان ثبت نام">
                        <label style="display: none;font-size: 12px" id="lblEndtRegisterTime"
                               class="validation-error-label"> </label>
                      </div>
                      <div class="form-group form-group-material">
                        <input type="text" name="edtCapacityCourse" class="form-control" placeholder=" ظرفیت کلاس">
                        <label style="display: none;font-size: 12px" id="lblCapacityCourse"
                               class="validation-error-label"> </label>
                      </div>
                      <div class="form-group form-group-material">
                        <input type="text" class="form-control date-picker" name="edtStartTime"
                               readonly="readonly"
                               placeholder="روز آغاز کلاس">
                        <label style="display: none;font-size: 12px" id="lblStartTime"
                               class="validation-error-label"> </label>
                      </div>
                      <div class="form-group form-group-material">
                        <input type="text" class="form-control date-picker" name="edtEndTime"
                               readonly="readonly"
                               placeholder="روز پایان کلاس">
                        <label style="display: none;font-size: 12px" id="lblEndTime"
                               class="validation-error-label"> </label>
                      </div>

                      <div class="form-group form-group-material">
                    <textarea rows="5" cols="5" class="form-control" name="edtMoreExplain"
                              placeholder="محتوای دوره"></textarea>
                        <label style="display: none;font-size: 12px" id="lblMoreExplain"
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
                      <div class="form-group form-group-material">

                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="chkPsychology">
                            فعال
                          </label>
                        </div>
                      </div>
                      <div class="text-right">
                  <span onclick="formCoachValidation()" id="btnRegisterCoach" type="submit"
                        class="btn btn-primary"><?php $r = 0;
                    if ($r == null) {
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
<script>
  $('.date-picker').persianDatepicker({
    initialValue: false,
    format: 'YYYY/MM/DD'
  });
</script>
