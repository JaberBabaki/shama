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
            <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold"> نوبت ها </span></h4>
          </div>
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
            <div class="datatable-scroll"><table class="table datatable-basic dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
              <thead>
                <tr style="background-color: #263238; color: white; font-size: 16px" role="row">
                  <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ًRow-number" style="text-align: center;">ردیف</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="End-date: activate to sort column ascending" style="text-align: center;">تاریخ</th>
                  <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Days" style="text-align: center;">ساعت</th>
                  <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="End-hour" style="text-align: center;">روز</th>
                  <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="text-align: center;">عملیات</th>
                </tr>
              </thead>
              <tbody>
              <style>
                tr:nth-of-type(odd) {
                background-color: #f5f5f5;
                }
              </style>
              <?php if ($booked!=null):?>
                <?php for ($i=0; $i<count($booked); $i++):?>    
                  <tr role="row" >
                    <td style="text-align: center;"><?=$i+1 ?></td>
                    <td style="text-align: center;"><?=dateConverter($booked[$i]['date'], 'enToFa') ?></td>
                    <td style="text-align: center;">
                    <?=stringConverter($booked[$i]['endTime'], 'enToFa')?><br>  تا <br> <?=stringConverter($booked[$i]['startTime'], 'enToFa')?>
                    </td>
                    <td style="text-align: center;">
                      <?php
                        switch($booked[$i]["day"]){
                          case 6:
                            echo '<span> شنبه<br></span>';
                            break;
                          case 0:
                            echo '<span> یکشنبه<br></span>';
                            break;
                          case 1:
                            echo '<span> دوشنبه<br></span>';
                            break;
                          case 2:
                            echo '<span> سه شنبه<br></span>';
                            break;
                          case 3:
                            echo '<span> چهارشنبه<br></span>';
                            break;
                          case 4:
                            echo '<span> پنجشنبه<br></span>';
                            break;
                          case 5:
                            echo '<span> جمعه<br></span>';
                            break;
                        }
                      ?>
                    </td>
                  <td class="text-center">
                    <ul class="icons-list">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                          <i class="icon-menu9"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                          <li onclick="runStartAppointmentDialog()"><a ><i class="icon-file-pdf"></i>شروع</a></li>
                          <li><a href="#"><i class="icon-file-excel"></i> اطلاعات بیمار</a></li>
                          <li><a href="#"><i class="icon-file-excel"></i> پایان</a></li>
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

<?php
$doc_root = $_SERVER["DOCUMENT_ROOT"]; 
include "$doc_root/struct/view/dialog/user4/startAppointment.php";  
?>

<script>
  var psychShenaseh;
  function showBookedAppointments() {
    psychShenaseh= $('#selectedCounseling').find('option:selected').val();
    alert(psychShenaseh);
  }
  // function registerCalender() {
//   $("select.select").change(function(){
//         var selectedCountry = $(this).children("option:selected").val();
//         alert("You have selected the country - " + selectedCountry);
//     });  
// }
/*function showBookedAppointments(){
  var psychShenaseh = $('#selectedCounseling').find('option:selected').val();
  alert("You have selected the country - " + psychShenaseh);
};*/
// $( document ).ready(function() {
//   var psychShenaseh = $('#selectedCounseling').find('option:selected').val();
//   alert("You have selected the country - " + psychShenaseh);
// });



</script>
<!-- <script>
setInterval(function()
    {
        var formData = new FormData();  
        formData.append('psych_id', psych_id);
        $.ajax({
            url: baseURL+'/user4/getBookedAndCanceledAppoitmentsByPsychId',
            type: 'POST',
            dataType: 'JSON',
            data: formData,
            contentType: false,
            processData: false,
            success: function (result) {
                var json = result;
                if (json.Status == true) {
                    paymentSteps(json);
                }
            }
        });
}, 1000);


</script> -->