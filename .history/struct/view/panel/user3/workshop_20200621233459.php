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
              <li class="active"><a href="workshop"><i class="icon-stack2"></i> <span>تعریف دوره ها</span></a></li>
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
          <a type="submit" href="/user3/workshop" class="btn btn-primary">تعریف دوره <i class="icon-plus2 position-right"></i></a>
          <a type="submit" href="/user3/listWorkshops" class="btn btn-primary">لیست دوره ها<i class="icon-list-ordered position-right"></i></a>
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
                        <input type="text" name="edtNameCourse" class="form-control" id="iptNameCourse" placeholder="نام دوره">
                        <label style="display: none;font-size: 12px" id="lblNameCourse"
                               class="validation-error-label"> </label>
                      </div>


                      <div class="form-group">
                    <div class="form-control-feedback">
                                <i class="icon-reading text-size-large text-muted"></i>
                            </div>
                        <div class="has-feedback has-feedback-left">
                        <select data-placeholder="موضوع" multiple="" id="iptTopicWorkshop" class="select select2-hidden-accessible"
                            tabindex="-1" aria-hidden="true">
                            <?php if(UserCommonController::listWorkshopTopic() == null ): ?>
                                <option value="0">موضوع</option>
                            <?php endif; ?>
                                <?php if (UserCommonController::listWorkshopTopic() != null ): ?> 
                                    <?php foreach(UserCommonController::listWorkshopTopic() as $item): ?>
                                          <option value=<?=$item['value']?>><?=$item['name']?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                        </select>
                        </div>
                        <label style="display: none;font-size: 12px" id="lblTopicWorkshop"
                               class="validation-error-label"> </label>
                    </div>

                    <div class="form-group form-group-material" id="formSelectTeacherType">
                    <span class="help-block">آیا مدرس در لیست مدرس های ثبت شده وجود دارد:</span>                   
                    <div class="radio">
                      <label>
                        <input type="radio" name="chkPsychology" id='registeredTeacher'>
                        بله
                      </label>
                      <label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="chkPsychology" id='unregisteredTeacher'>
                          خیر
                      </label>
                      <label>
                    </div>
                    <label style="display: none;font-size: 12px" id="lblSelectTeacherType"
                               class="validation-error-label"> </label>
                  </div>
                    
                    <div class="form-group" id="registeredTeacherInput" style="display: none;">
                      <div class="form-control-feedback">
                          <i class="icon-reading text-size-large text-muted"></i>
                        </div>
                        <div class="has-feedback has-feedback-left">
                          <select data-placeholder="مدرس ثبت شده" multiple="" id="lstRegisteredTeacher" class="select select2-hidden-accessible"
                            tabindex="-1" aria-hidden="true">
                            <?php if(UserCommonController::listTeachers() == null ): ?>
                              <option value="0">مدرس ثبت شده</option>
                            <?php endif; ?>
                            <?php if (UserCommonController::listTeachers() != null ): ?> 
                              <?php foreach(UserCommonController::listTeachers() as $item): ?>
                                <option value=<?=$item['value']?>><?=$item['name']?></option>
                              <?php endforeach; ?>
                            <?php endif; ?>
                          </select>
                        </div>
                        <label style="display: none;font-size: 12px" id="lblRegisteredTeacher"
                               class="validation-error-label"> </label>
                    </div>

                    <div class="form-group form-group-material" id="unregisteredTeacherInput" style="display: none;">
                      <input type="text" name="edtDurationCourse" class="form-control" id="iptUnregisteredTeacher" placeholder="مدرس ثبت نشده">
                      <label style="display: none;font-size: 12px" id="lblUnRegisteredTeacher"
                               class="validation-error-label"> </label>
                    </div>

                    <div class="form-group form-group-material">
                      <input type="text" name="edtDurationCourse" class="form-control" id="iptDurationCourse" placeholder="مدت دوره">
                      <label style="display: none;font-size: 12px" id="lblDurationCourse"
                              class="validation-error-label"> </label>
                    </div>
                    
                    <div class="form-group form-group-material">
                        <input type="text" name="edtFeeCourse" class="form-control" id="iptFeeCourse" placeholder="شهریه دوره">
                        <label style="display: none;font-size: 12px" id="lblFeeCourse"
                               class="validation-error-label"> </label>
                      </div>
                      <div class="form-group form-group-material">
                        <input type="text" class="form-control date-picker" name="edtStartRegisterTime" id="iptStartRegisterDate"
                               readonly="readonly"
                               placeholder="روز آغاز ثبت نام ">
                        <label style="display: none;font-size: 12px" id="lblStartRegisterDate"
                          class="validation-error-label"> </label>
                      </div>
                      <div class="form-group form-group-material">
                        <input type="text" class="form-control time-picker" name="edtStartRegisterTime" id="iptStartRegisterTime"
                               readonly="readonly"
                               placeholder="ساعت آغاز ثبت نام ">
                        <label style="display: none;font-size: 12px" id="lblStartRegisterTime"
                          class="validation-error-label"> </label>
                      </div>
                      <div class="form-group form-group-material">
                        <input type="text" class="form-control date-picker" name="edtEndRegisterTime" id="iptEndRegisterDate"
                               readonly="readonly"
                               placeholder="روز پایان ثبت نام">
                        <label style="display: none;font-size: 12px" id="lblEndRegisterDate"
                               class="validation-error-label"> </label>
                      </div>
                      <div class="form-group form-group-material">
                        <input type="text" class="form-control time-picker" name="edtEndRegisterTime" id="iptEndRegisterTime"
                               readonly="readonly"
                               placeholder="ساعت پایان ثبت نام">
                        <label style="display: none;font-size: 12px" id="lblEndRegisterTime"
                               class="validation-error-label"> </label>
                      </div>
                      <div class="form-group form-group-material">
                        <input type="text" name="edtCapacityCourse" class="form-control" placeholder=" ظرفیت کلاس" id="iptCapacityCourse">
                        <span style="display: none; text-align: center;" class="form-validation" id="eorClassCapacity"></span>
                        <label style="display: none;font-size: 12px" id="lblCapacityCourse"
                               class="validation-error-label"> </label>
                      </div>
                      <div class="form-group form-group-material">
                        <input type="text" class="form-control date-picker" name="edtStartTime" id="iptStartDate"
                               readonly="readonly"
                               placeholder="روز آغاز کلاس">
                        <label style="display: none;font-size: 12px" id="lblStartDate"
                               class="validation-error-label"> </label>
                      </div>
                      <div class="form-group form-group-material">
                        <input type="text" class="form-control time-picker" name="edtStartTime" id="iptStartTime"
                               readonly="readonly"
                               placeholder="ساعت آغاز کلاس">
                        <label style="display: none;font-size: 12px" id="lblStartTime"
                               class="validation-error-label"> </label>
                      </div>

                      <div class="form-group form-group-material">
                        <input type="text" class="form-control date-picker" name="edtEndTime" id="iptEndDate"
                               readonly="readonly"
                               placeholder="روز پایان کلاس">
                        <label style="display: none;font-size: 12px" id="lblEndDate"
                               class="validation-error-label"> </label>
                      </div>
                      <div class="form-group form-group-material">
                        <input type="text" class="form-control time-picker" name="edtEndTime" id="iptEndTime"
                               readonly="readonly"
                               placeholder="ساعت پایان کلاس">
                        <label style="display: none;font-size: 12px" id="lblEndTime"
                               class="validation-error-label"> </label>
                      </div>
                      <div class="form-group form-group-material">
                    <textarea rows="5" cols="5" class="form-control" name="edtMoreExplain" id="iptMoreExplain"
                              placeholder="محتوای دوره"></textarea>
                    <label style="display: none;font-size: 12px" id="lblMoreExplain"
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

                  <!-- employer -->
                  <div class="form-group" id="frmEmployer">
                      <div class="form-control-feedback">
                          <i class="icon-reading text-size-large text-muted"></i>
                        </div>
                        <div class="has-feedback has-feedback-left">
                          <select data-placeholder="کارفرما" multiple="" id="iptEmployer" class="select select2-hidden-accessible"
                            tabindex="-1" aria-hidden="true">
                            <?php if(UserCommonController::listEmployer() == null ): ?>
                              <option value="0">کارفرما</option>
                            <?php endif; ?>
                            <?php if (UserCommonController::listEmployer() != null ): ?> 
                              <?php foreach(UserCommonController::listEmployer() as $item): ?>
                                <option value=<?=$item['value']?>><?=$item['name']?></option>
                              <?php endforeach; ?>
                            <?php endif; ?>
                          </select>
                        </div>
                        <label style="display: none;font-size: 12px" id="lblEmployer"
                               class="validation-error-label"> </label>
                  </div>

                  <!-- license -->
                  <div class="form-group" id="frmEmployer">
                      <div class="form-control-feedback">
                          <i class="icon-reading text-size-large text-muted"></i>
                        </div>
                        <div class="has-feedback has-feedback-left">
                          <select data-placeholder="مرجع اعطای پروانه" multiple="" id="lstEmployer" class="select select2-hidden-accessible"
                            tabindex="-1" aria-hidden="true">
                            <?php if(UserCommonController::listLicense() == null ): ?>
                              <option value="0">مرجع اعطای پروانه</option>
                            <?php endif; ?>
                            <?php if (UserCommonController::listLicense() != null ): ?> 
                              <?php foreach(UserCommonController::listLicense() as $item): ?>
                                <option value=<?=$item['value']?>><?=$item['name']?></option>
                              <?php endforeach; ?>
                            <?php endif; ?>
                          </select>
                        </div>
                        <label style="display: none;font-size: 12px" id="lblEmployer"
                               class="validation-error-label"> </label>
                  </div>

                  <div class="form-group form-group-material" id="workshopType">
                    <div class="radio">
                      <label>
                        <input type="radio" id='generalWorkshop' value="0">
                        دوره همگانی
                      </label>
                      <label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" id='specialWorkshop' value="1">
                          خیر
                      </label>
                      <label>
                    </div>
                    <label style="display: none;font-size: 12px" id="lblSelectTeacherType"
                               class="validation-error-label"> </label>
                  </div>

                  <div class="form-group form-group-material" id="workshopType">
                    <div class="radio">
                      <label>
                        <input type="radio" id='generalWorkshop' value="0">
                        دوره همگانی
                      </label>
                      <label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" id='specialWorkshop' value="1">
                        دوره تخصصی ویژه روان شناسی
                      </label>
                    </div>
                    <label style="display: none;font-size: 12px" id="lblWorkshopType"
                           class="validation-error-label"> </label>
                  </div>

                  <div class="form-group form-group-material">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" id='checkBox'>
                        فعال
                      </label>
                    </div>
                  </div>
                  <div class="text-right">
                    <span onclick="formCoachValidation()" id="btnRegisterCoach" type="submit"
                        class="btn btn-primary">ثبت<i class="icon-arrow-left13 position-right"></i></span>
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

  $('#registeredTeacher').click(function(){
    $('#unregisteredTeacherInput').hide();
    $('#registeredTeacherInput').show();
  });

  $('#unregisteredTeacher').click(function(){
    $('#registeredTeacherInput').hide();
    $('#unregisteredTeacherInput').show();
  });

  $('.date-picker').persianDatepicker({
    initialValue: false,
    format: 'YYYY/MM/DD'
  });

  $('.time-picker').persianDatepicker({
    initialValue: false,
    onlyTimePicker: true,
    format: 'h:mm'
  });
  
  function formCoachValidation() {
    status = true;

    // Validate teacher name
    if ($("#formSelectTeacherType").find("input[type='radio']:checked").attr('id') == 'registeredTeacher'){
      var registeredTeacherTxt = $('#lstRegisteredTeacher').find('option:selected').text();
      var registeredTeacherId = $('#lstRegisteredTeacher').find('option:selected').val();
      printOk('#lblSelectTeacherType', '');
      if (registeredTeacherTxt.length == 0){
        printError('#lblRegisteredTeacher', 'لطفا نام مدرس را وارد کنید');
        status = false;
      }else{
        iptNameTeacher = registeredTeacherTxt;
        iptIdTeacher = registeredTeacherId;
      }
    }else if ($("#formSelectTeacherType").find("input[type='radio']:checked").attr('id') == 'unregisteredTeacher'){
      var unRegisteredTeacherTxt = $('#iptUnregisteredTeacher').val();
      printOk('#lblSelectTeacherType', '');
      if (unRegisteredTeacherTxt.length == 0){
        printError('#lblUnRegisteredTeacher', 'لطفا نام مدرس را وارد کنید');
        status = false;
      }else{
        iptNameTeacher = unRegisteredTeacherTxt;
        iptIdTeacher = null;
      }
    }else{
      printError('#lblSelectTeacherType', 'لطفا بله یا خیر را انتخاب کنید');
      status = false;
    }

    // Validate workshop type
    if ($("#workshopType").find("input[type='radio']:checked").val() == null){
      status = false;
      printError('#lblWorkshopType', 'لطفا نوع کارگاه را مشخص کنید');
    }else{
      printOk('#lblWorkshopType', '');
      var workshopTypeId = $("#workshopType").find("input[type='radio']:checked").val();
    }

    var ostanData = $("#stateFounder :selected").text();
    var cityData = $("#cityFounder :selected").text();
    var cityValue = $('#stateFounder').find('option:selected').val();
    var ostanValue = $('#cityFounder').find('option:selected').val();
    var iptNameCourse = $("#iptNameCourse").val();
    var iptDurationCourse = $("#iptDurationCourse").val();
    var iptFeeCourse = $("#iptFeeCourse").val();
    var iptStartRegisterTime = $("#iptStartRegisterTime").val();
    iptStartRegisterTime = iptStartRegisterTime.split(" ")[0];
    var iptStartRegisterDate = $("#iptStartRegisterDate").val();  
    var iptEndRegisterTime = $("#iptEndRegisterTime").val();
    iptEndRegisterTime = iptEndRegisterTime.split(" ")[0];
    var iptEndRegisterDate = $("#iptEndRegisterDate").val();
    var iptCapacityCourse = $("#iptCapacityCourse").val();
    var iptStartTime = $("#iptStartTime").val();
    var iptStartDate = $("#iptStartDate").val();
    var iptEndTime = $("#iptEndTime").val();
    iptEndTime = iptEndTime.split(" ")[0];
    var iptEndDate = $("#iptEndDate").val();
    var iptMoreExplain = $("#iptMoreExplain").val();
    var active = $("#checkBox").prop('checked');

    // Workshop is activated or not
    if (active==true) active=1;
    else active = 0;
    
    
    // Validate workshop name
    if (iptNameCourse.length <= 2 && iptNameCourse.length >= 30) {
      printError('#lblNameCourse', 'نام وارد شده صحیح نیست');
      status = false;
    } else if (iptNameCourse.length == 0) {
      printError('#lblNameCourse', 'لطفا نام دوره را وارد کنید');
      status = false;
    } else {
      printOk('#lblNameCourse', '');
    }

    // Validate workshop topic
    var iptTopicWorkshop = $('#iptTopicWorkshop').find('option:selected').text();
    var iptTopicWorkshopId = $('#iptTopicWorkshop').find('option:selected').val();
    printOk('#lblTopicWorkshop', '');
    if (iptTopicWorkshop.length == 0){
      printError('#lblTopicWorkshop', 'لطفا موضوع کارگاه را وارد کنید');
      status = false;
    }

    // Validate workshop's employers
    var iptEmployerWorkshop = $('#iptEmployer').find('option:selected').text();
    var iptEmployerWorkshopId = $('#iptEmployer').find('option:selected').val();
    printOk('#lblEmployer', '');
    if (iptEmployerWorkshop.length == 0){
      printError('#lblEmployer', 'لطفا کارفرما را وارد کنید');
      status = false;
    }
    
    
    if (cityValue == 0 && ostanValue == 0) {
      printError('#lblOstan', 'استان و شهر را انتخاب کنید');
      status = false;
    } else {
      printOk('#lblOstan', '');
    }

    if (!iptStartRegisterTime.length == 10) {
      printError('#lblStartRegisterTime', 'ساعت وارد شده صحیح نیست');
      status = false;
    } else if (iptStartRegisterTime.length == 0) {
      printError('#lblStartRegisterTime', 'لطفا ساعت آغاز ثبت نام را وارد کنید');
      status = false;
    } else {
      printOk('#lblStartRegisterTime', '');
      iptStartRegisterTime = convertNumber(iptStartRegisterTime);
    }

    if (!iptStartRegisterDate.length == 10) {
      printError('#lblStartRegisterDate', 'تاریخ وارد شده صحیح نیست');
      status = false;
    } else if (iptStartRegisterDate.length == 0) {
      printError('#lblStartRegisterDate', 'لطفا تاریخ آغاز ثبت نام را وارد کنید');
      status = false;
    } else {
      printOk('#lblStartRegisterDate', '');
      iptStartRegisterDate = dateConverter(iptStartRegisterDate);
    }

    if (!iptEndRegisterTime.length == 10) {
      printError('#lblEndRegisterTime', 'ساعت وارد شده صحیح نیست');
      status = false;
    } else if (iptEndRegisterTime.length == 0) {
      printError('#lblEndRegisterTime', 'لطفا ساعت پایان ثبت نام را وارد کنید');
      status = false;
    } else {
      printOk('#lblEndRegisterTime', '');
      iptEndRegisterTime = convertNumber(iptEndRegisterTime);
    }

    if (!iptEndRegisterDate.length == 10) {
      printError('#lblEndRegisterDate', 'تاریخ وارد شده صحیح نیست');
      status = false;
    } else if (iptEndRegisterDate.length == 0) {
      printError('#lblEndRegisterDate', 'لطفا تاریخ پایان ثبت نام را وارد کنید');
      status = false;
    } else {
      printOk('#lblEndRegisterDate', '');
      iptEndRegisterDate = dateConverter(iptEndRegisterDate);
    }

    if (!iptStartTime.length == 10) {
      printError('#lblStartTime', 'ساعت وارد شده صحیح نیست');
      status = false;
    } else if (iptStartTime.length == 0) {
      printError('#lblStartTime', 'لطفا ساعت شروع کلاس را وارد کنید');
      status = false;
    } else {
      printOk('#lblStartTime', '');
      iptStartTime = convertNumber(iptStartTime);
    }

    if (!iptStartDate.length == 10) {
      printError('#lblStartDate', 'تاریخ وارد شده صحیح نیست');
      status = false;
    } else if (iptStartDate.length == 0) {
      printError('#lblStartDate', 'لطفا تاریخ شروع کلاس را وارد کنید');
      status = false;
    } else {
      printOk('#lblStartDate', '');
      iptStartDate = dateConverter(iptStartDate);
    }

    if (!iptEndDate.length == 10) {
      printError('#lblEndDate', 'تاریخ وارد شده صحیح نیست');
      status = false;
    } else if (iptEndDate.length == 0) {
      printError('#lblEndDate', 'لطفا تاریخ پایان کلاس را وارد کنید');
      status = false;
    } else {
      printOk('#lblEndDate', '');
      iptEndDate = dateConverter(iptEndDate);
    }

    if (!iptEndTime.length == 10) {
      printError('#lblEndTime', 'ساعت وارد شده صحیح نیست');
      status = false;
    } else if (iptEndTime.length == 0) {
      printError('#lblEndTime', 'لطفا ساعت پایان کلاس را وارد کنید');
      status = false;
    } else {
      printOk('#lblEndTime', '');
      iptEndTime = convertNumber(iptEndTime);
    }

    iptDurationCourseCheck = convertNumber(iptDurationCourse, 'faToEn');
    iptDurationCourseCheck = parseInt(iptDurationCourseCheck);
    if (iptDurationCourse.length == 0) {
      printError('#lblDurationCourse', 'لطفا مدت دوره را وارد کنید');
      status = false;
    }else if (!Number.isInteger(iptDurationCourseCheck)){
      printError('#lblDurationCourse', 'لطفا عدد وارد کنید');
    } else {
      printOk('#lblDurationCourse', '');
      iptDurationCourse = convertNumber(iptDurationCourse);
    }
    
    iptCapacityCourseCheck = convertNumber(iptCapacityCourse, 'faToEn');
    iptCapacityCourseCheck = parseInt(iptCapacityCourseCheck);
    if (iptCapacityCourse.length == 0) {
      printError('#lblCapacityCourse', 'لطفا ظرفیت دوره را وارد کنید');
      status = false;
    }else if(!Number.isInteger(iptCapacityCourseCheck)){
      printError('#lblCapacityCourse', 'لطفا عدد وارد کنید');
    } else {
      printOk('#lblCapacityCourse', '');
      iptCapacityCourse = convertNumber(iptCapacityCourse);

    }
    
    iptFeeCourseCheck = convertNumber(iptFeeCourse, 'faToEn');
    iptFeeCourseCheck = parseInt(iptFeeCourseCheck);
    if (iptFeeCourse.length == 0) {
      printError('#lblFeeCourse', 'لطفا شهریه دوره را وارد کنید');
      status = false;
    }else if (!Number.isInteger(iptFeeCourseCheck)){
      printError('#lblFeeCourse', 'لطفا عدد وارد کنید');
    } else {
      printOk('#lblFeeCourse', '');
      iptFeeCourse = convertNumber(iptFeeCourse);
    }
    if (status == "true") {
      formDataFounder = new FormData();
      formDataFounder.append('nameCourse', iptNameCourse);
      formDataFounder.append('topicWorkshop', iptTopicWorkshopId);
      formDataFounder.append('employerWorkshop', iptEmployerWorkshopId);
      formDataFounder.append('nameTeacher', iptNameTeacher);
      formDataFounder.append('idTeacher', iptIdTeacher);
      formDataFounder.append('ostan', ostanValue);
      formDataFounder.append('city', cityValue);
      formDataFounder.append('durationCourse', iptDurationCourse);
      formDataFounder.append('feeCourse', iptFeeCourse);
      formDataFounder.append('startRegisterTime', iptStartRegisterTime);
      formDataFounder.append('startRegisterDate', iptStartRegisterDate);
      formDataFounder.append('endRegisterTime', iptEndRegisterTime);
      formDataFounder.append('endRegisterDate', iptEndRegisterDate);
      formDataFounder.append('capacityCourse', iptCapacityCourse);
      formDataFounder.append('startTime', iptStartTime);
      formDataFounder.append('startDate', iptStartDate);
      formDataFounder.append('endTime', iptEndTime);
      formDataFounder.append('endDate', iptEndDate);
      formDataFounder.append('moreExplain', iptMoreExplain);
      formDataFounder.append('type', workshopTypeId);
      formDataFounder.append('active', active);
      $.ajax({
        url: '/user3/registerWorkShop',
        type: 'POST',
        dataType: 'JSON',
        data: formDataFounder,
        contentType: false,
        processData: false,
        success: function (result) {
          var json = result;
          if ((json.ResultData.code == 200)) {
            showStackTopLeft('success', "دوره با موفقیت ثبت شده است");
            document.documentElement.scrollTop = 0;
            }
        }
      });
    }
  }

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

    function printError(elemId, hintMsg) {
      $(elemId).text(hintMsg);
      $(elemId).css({'display': 'block'});
    }
    function printOk(elemId, hintMsg) {
      $(elemId).text(" ");
      $(elemId).css({'display': 'none'});
    }

    function dateConverter(date, convert='faToEn'){
    if(convert=='enToFa')
      return date = new Date(date).toLocaleDateString('fa-IR');
    else{
      date = convertNumber(date);
      moment.locale('fa'); 
      m = moment(date, 'YYYY/M/D');
      m.locale('en');
      date = m.format('YYYY/M/D'); 
      return date;   
    }
    }

 
  function convertNumber(str, convert='faToEn'){
    var englishToPersian = [/۰/g, /۱/g, /۲/g, /۳/g, /۴/g, /۵/g, /۶/g, /۷/g, /۸/g, /۹/g];
    var persianToEnglish = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
    if(typeof str === 'string'){
      if (convert=='faToEn'){
        for(var i=0; i<10; i++){
          str = str.replace(englishToPersian[i], i);
        }
    }else{
      for(var i=0; i<10; i++){
          str = str.replace(i, persianToEnglish[i]);
        }
      }
    }

    return str;
  }

</script>
