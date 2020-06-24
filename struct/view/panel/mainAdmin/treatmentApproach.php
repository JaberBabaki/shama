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
              <li><a href='dashboard'><i class="icon-home4"></i> <span>داشبورد</span></a>
              </li>
              <li>
                <a id="verifyRequests" class="has-ul" >
                  <i class="icon-envelop"></i> 
                  <span>درخواست ها</span>
                </a>
                <ul class="hidden-ul" id="verifyRequestsUl" style="display: none;">
										<li><a href="#" id="layout1">تایید شده</a></li>
                    <li><a href="#" id="layout1">در انتظار تایید</a></li>
										<li><a href="#" id="layout1">تایید نشده</a></li>

									</ul>
              </li>
              <li class="active"><a href='setting'><i class="icon-cog4"></i> <span>تنظیمات</span></a>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="content-wrapper">
      <div class="page-header page-header-default">
        <div class="page-header-content">
          <div class="page-title">
            <h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold"> تنظیمات </span></h4>
          </div>
        </div>
      </div>
      <div class="navbar navbar-default navbar-xs content-group">
            <div class="row">
                <div class="navbar-collapse collapse" id="navbar-filter">
                <ul class="nav navbar-nav">
                        <li class=""><a href="setting"  aria-expanded="false"><i class=" icon-portfolio position-left"></i> موضوع مشاوره</a></li>
                        <li class="active"><a href="treatmentApproach"  aria-expanded="false"><i class="icon-grid5 position-left"></i> رویکرد درمانی</a></li>
                        <li class=""><a href="subTopic"  aria-expanded="false"><i class="icon-git-merge position-left"></i> موضوع فرعی</a></li>
                        <li class=""><a href="workshopTopic"  aria-expanded="false"><i class=" icon-file-plus position-left"></i> موضوع کارگاه</a></li>
                        <li class=""><a href="workshopTeacher"  aria-expanded="false"><i class="icon-user-plus position-left"></i> مدرس کارگاه</a></li>
                        <li class=""><a href="employer"  aria-expanded="false"><i class="icon-hat position-left"></i> کارفرما</a></li>
                        <li class=""><a href="license"  aria-expanded="false"><i class="icon-package position-left"></i> مرجع اعطای پروانه</a></li>
                    </ul>
                </div>
        </div>
      </div>
      <div class="content">
        <div class="col-md-5">
            <!-- Vertical form -->
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title"><i class="icon-add position-left"></i>اضافه کردن رویکرد درمانی<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
                </div>
                <div class="panel-body">
                        <div class="form-group">
                            <label>رویکرد درمانی</label>
                            <input id="treatmentApproach" type="text" class="form-control">
                        </div>
                        <label style="display: none;font-size: 12px;" id="lblCounselingTopic" class="validation-error-label"> </label>
                        <div class="text-right">
                            <button class="btn btn-primary" onclick="formvalidationAndSend()"><i class="icon-add position-left"></i> ثبت</button>
                        </div>
                </div>
            </div>
            <!-- /vertical form -->
        </div>

        <div class="col-md-7">
                  <div class="panel panel-center">
                  <?php if ($record == null): ?>
                    <span class="d-flex align-items-center">رکودی وجود ندارد</span>
                  <?php endif; ?>
                  <?php if ($record != null): ?>
                    <table class="table datatable-column-search-inputs dataTable" id="DataTables_Table_2" role="grid" aria-describedby="DataTables_Table_2_info">
                  <thead>
                    <tr role="row">
                      <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending">#</th>
                      <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">موضوع</th>
                      <!-- <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">شهر</th>
                      <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">ساعت</th>
                      <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending">تاریخ</th>
                      <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending">وضعیت</th> -->
                      <th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 100px;">عملیات</th>
                    </tr>
                  </thead>
                  <?php for($i=0; $i<count($record); $i++): ?>
                    <tbody>  
                      <tr role="row" class="odd">
                      <td class="sorting_1"><?=$i+1?></td>
                        <td class="sorting_1"><?=$record[$i]['categoryName']?></td>
                        <td class="text-center">
                          <ul class="icons-list">
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <i class="icon-menu9"></i>
                              </a>
                              <ul class="dropdown-menu dropdown-menu-right">
                                  <li><a href="#"><i class="icon-file-pdf"></i> حذف</a></li>
                                </ul>
                            </li>
                            </ul>
                          </td>
                      </tr>
                    </tbody>
                  <?php endfor; ?>
                </table>
              </div>
            </div>
        <?php endif; ?>
      </div>
      
            
                
                        
      <!-- /available hours -->


    </div>
  </div>
</div>



<script>
    $( "#verifyRequests" ).on('click', function() {
        if ($("#verifyRequestsUl").css("display") == 'none')
        $("#verifyRequestsUl").css({"display": "block"});
        else
        $("#verifyRequestsUl").css({"display": "none"});    
    });

    function formvalidationAndSend(){
        var treatmentApproach = $('#treatmentApproach').val();
        var formDataPsych = new FormData();
        var validate = 1;
        if (treatmentApproach.length == 0) {
            printError('#lblCounselingTopic', 'لطفا موضوع مشاوره را وارد کنید');
            validate = 0;
        }  else {
            printOk('#lblCounselingTopic', '');
        }
        if (validate == 1){
            formDataPsych.append('treatmentApproach', treatmentApproach);
            $.ajax({
            url: '/mainAdmin/addTreatmentApproach',
            type: 'POST',
            dataType: 'JSON',
            data: formDataPsych,
            contentType: false,
            processData: false,
            success: function (result) {
                var json = result;
                if (json.Status == true) {
                    if ((json.ResultData.code == 200)) {
                        document.documentElement.scrollTop = 0;
                        var message = json.ResultData.message;
                        showStackTopLeft('success', message);
                    }
                } else {
                    var msg = json.Error.message;
                    showStackTopLeft('error', msg);
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

    function printError(elemId, hintMsg) {
      $(elemId).text(hintMsg);
      $(elemId).css({'display': 'block'});
    }

    function printOk(elemId, hintMsg) {
      $(elemId).text(" ");
      $(elemId).css({'display': 'none'});
    }
    



</script>