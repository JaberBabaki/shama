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
            <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold"> لیست دوره ها</span>
            </h4>
          </div>
        </div>
        <div class="breadcrumb-line" style="padding-left: 10px;padding-bottom: 10px;padding-top: 10px;"><a
            class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
            <a type="submit" href="/user3/workshop" class="btn btn-primary">تعریف دوره <i class="icon-plus2 position-right"></i></a>
            <a type="submit" href="/user3/listWorkshops" class="btn btn-primary">لیست دوره ها<i class="icon-list-ordered position-right"></i></a>
        </div>
      </div>


      <div class="panel container">
          <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
            <div class="datatable-header" style="background-color: #e3dcdc26">
              <div id="DataTables_Table_0_filter" class="dataTables_filter"><label><span>فیلتر:</span> <input type="search" class="" placeholder="Type to filter..." aria-controls="DataTables_Table_0"></label></div>
              <div class="dataTables_length" id="DataTables_Table_0_length"><label><span>نمایش:</span> <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="select2-hidden-accessible" tabindex="-1" aria-hidden="true"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select><span class="select2 select2-container select2-container--default select2-container--below" dir="rtl" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-DataTables_Table_0_length-vt-container"><span class="select2-selection__rendered" id="select2-DataTables_Table_0_length-vt-container" title="10">10</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></label></div>
            </div>
            <div class="datatable-scroll"><table class="table datatable-basic dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
              <thead>
                <tr style="background-color: #263238; color: white; font-size: 16px" role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ًRow-number" style="text-align: center;">ردیف</th>
                    <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First Name: activate to sort column descending" style="text-align: center;">نام دوره</th>
                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="End-date: activate to sort column ascending" style="text-align: center;">مدرس</th>
                    <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Days" style="text-align: center;">تاریخ شروع دوره</th>
                    <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="End-hour" style="text-align: center;">ساعت شروع دوره</th>
                    <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="End-hour" style="text-align: center;">مدت دوره</th>
                    <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="text-align: center;">فعال</th>
                    <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="text-align: center;">عملیات</th>
                </tr>
              </thead>
              <tbody>
              <style>
                tr:nth-of-type(odd) {
                background-color: #f5f5f5;
                }
              </style>
              <?php if ($records!=null):?>
                <?php for ($i=0; $i<count($records); $i++):?>    
                  <tr role="row" >
                    <td style="text-align: center;"><?=$i+1 ?></td>
                    <td style="text-align: center;"><?=$records[$i]['course_name']?></td>
                    <td style="text-align: center;"><?=$records[$i]['teacher_name']?></td>
                    <td style="text-align: center;">
                        <?=dateConverter($records[$i]["start_date_workhop"], 'enToFa')?><br> تا <br><?=dateConverter($records[$i]["end_date_workshop"], 'enToFa')?>
                    </td>
                  <td style="text-align: center;"><?=stringConverter($records[$i]["start_time_workshop"], 'enToFa')?><br> تا <br><?=stringConverter($records[$i]["end_time_workshop"], 'enToFa')?></td>
                  <td style="text-align: center;"><?=stringConverter($records[$i]["duration_course"], 'enToFa')?></td>
                  <td style="text-align: center;">
                    <?php if($records[$i]["status"]==1):?>
                      <span style="background-color: lightgreen; padding: 7px 17px; box-shadow: 2px 2px 5px grey;">فعال</span>
                    <?php endif;?>
                    <?php if($records[$i]["status"]==0):?>
                      <span style="background-color: red; padding: 7px 13px; box-shadow: 2px 2px 5px grey;">غیر فعال</span>
                    <?php endif;?>
                  
                  </td>
                  <td class="text-center">
                    <ul class="icons-list">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                          <i class="icon-menu9"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                          <li><a href="#"><i class="icon-file-pdf"></i> ویرایش</a></li>
                          <li><a href="#"><i class="icon-file-excel"></i> حذف</a></li>
                          <li><a href="#"><i class="icon-file-excel"></i> غیر فعال</a></li>
                        </ul>
                      </li>
                    </ul>
                  </td>
                </tr>
              <?php endfor;?> 
            <?php endif; ?>
              </tbody>
              </table></div><div class="datatable-footer"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 15 entries</div><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><a class="paginate_button previous disabled" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" id="DataTables_Table_0_previous">→</a><span><a class="paginate_button current" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0">2</a></span><a class="paginate_button next" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" id="DataTables_Table_0_next">←</a></div></div></div>
          </div>
    </div>
  </div>
</div>
<script>

function stringConverter($string, $type='faToEn') {
  if($type=='faToEn'){
    return strtr($string, array('/'=>'-', '۰'=>'0', '۱'=>'1', '۲'=>'2', '۳'=>'3', '۴'=>'4', '۵'=>'5', '۶'=>'6', '۷'=>'7', '۸'=>'8', '۹'=>'9'));
  }else if($type=='enToFa'){
    return strtr($string, array('-'=>'/', '0'=>'۰', '1'=>'۱', '2'=>'۲', '3'=>'۳', '4'=>'۴', '5'=>'۵', '6'=>'۶', '7'=>'۷', '8'=>'۸', '9'=>'۹'));
  }
}

function dateConverter($date, $type='faToEn'){
  if($type=='enToFa'){
    $dateTmp = new DateTime($date);
    $formatter = new IntlDateFormatter(
                          "fa_IR@calendar=persian", 
                          IntlDateFormatter::FULL, 
                          IntlDateFormatter::FULL, 
                          'Asia/Tehran', 
                          IntlDateFormatter::TRADITIONAL, 
                          "yyyy-MM-dd");
    $dateTmp = $formatter->format($dateTmp);
    return stringConverter($dateTmp, $type);
  }else{
    
  }
  
  
}
</script>
