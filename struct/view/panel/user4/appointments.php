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
              <li ><a href='/user4/dashboard'><i class="icon-home4"></i> <span>داشبورد</span></a>
              </li>
              <li><a href="informationPsych"><i class="icon-people"></i> <span>اطلاعات کاربری درمانگر</span></a></li>
              <li class="active"><a href="/user4/appointments"><i class="icon-people"></i> <span>نوبت ها</span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="content-wrapper">
      <div class="page-header page-header-default">
        <div class="page-header-content">
          <div class="page-title">
            <i class="icon-arrow-right "></i> <span class="h2 text-semibold"> نوبت ها </span>            
          </div>
        <div class="h2" style="text-align: left" id="time"></div>
        </div>
      </div>
      
        <!-- Basic datatable -->
        <div class="panel">
          <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
            <div class="datatable-header" style="background-color: #e3dcdc26">
              <form class="main-search">
                <div class="input-group content-group" style="width: 100%;">
                  <div class="form-group">
                    <select onchange="showBookedAppointments()" id="selectedCounseling" name="location" data-placeholder="نام مرکز مشاوره" class="select">
                      <option></option>
                      <?php echo $info ?>
                      </optgroup>
                    </select>
                  </div>
                </div>
                </form>
              <div id="DataTables_Table_0_filter" class="dataTables_filter"><label><span>فیلتر:</span> <input type="search" class="" placeholder="Type to filter..." aria-controls="DataTables_Table_0"></label></div>
            <div class="dataTables_length" id="DataTables_Table_0_length"><label><span>نمایش:</span> <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="select2-hidden-accessible" tabindex="-1" aria-hidden="true"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select><span class="select2 select2-container select2-container--default select2-container--below" dir="rtl" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-DataTables_Table_0_length-vt-container"><span class="select2-selection__rendered" id="select2-DataTables_Table_0_length-vt-container" title="10">10</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></label></div>
            </div>
            <div class="datatable-scroll" id="table">

            </div>
          <div class="datatable-footer"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 10 of 15 entries</div><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><a class="paginate_button previous disabled" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" id="DataTables_Table_0_previous">→</a><span><a class="paginate_button current" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0">2</a></span><a class="paginate_button next" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" id="DataTables_Table_0_next">←</a></div></div></div>
          </div>
    </div>
  </div>
</div>

<?php
$doc_root = $_SERVER["DOCUMENT_ROOT"]; 
include "$doc_root/struct/view/dialog/user4/startAppointment.php";  
?>

<style>
  tr:nth-of-type(odd) {
  background-color: #f5f5f5;
  }
</style>

