<style>
	 .big-checkbox {width: 30px; height: 30px;}

</style>
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
              	<li><a href='/admins/dashboard'><i class="icon-home4"></i> <span>داشبورد</span></a></li>
				<li><a href="informationAdmin"><i class="icon-people"></i> <span>اطلاعات کاربری</span></a></li>
				<li><a href="requestAccess"><i class="icon-merge"></i> <span>درخواست دسترسی</span></a></li>
				<li><a href="requestedAccesses"><i class="icon-envelope"></i> <span>درخواست های ارسال شده</span></a></li>
				<li class=""><a href="reportAppointment"><i class="icon-pencil7"></i> <span>گزارش گیری نوبت ها</span></a></li>
				<li class="active"><a href="reportWorkshop"><i class="icon-pencil7"></i> <span>گزارش گیری کارگاه ها</span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-right6 position-left"></i> <span class="text-semibold">گزارش گیری کارگاه ها</span></h4>
						<a class="heading-elements-toggle"><i class="icon-more"></i></a></div>

						<div class="heading-elements">
							<div class="heading-btn-group">
								<a href="#" class="btn btn-link btn-float has-text" onclick="createPDF()"><i class="icon-download text-primary"></i> <span>دانلود گزارش</span></a>
							</div>
						</div>
					</div>

					<div class="breadcrumb-line"><a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
						<ul class="breadcrumb">
							<li><a href="dashboard"><i class="icon-home2 position-left"></i> خانه</a></li>
							<li class="active">گزارش گیری کارگاه ها</li>
						</ul>

					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Detached sidebar -->
					
		            <!-- /detached sidebar -->


					<!-- Detached content -->
					<div class="col-md-4">
						<div class="sidebar sidebar-default sidebar-separate">
							<div class="sidebar-content">

								<!-- Sidebar search -->
								<div class="panel panel-white">
									<div class="panel-heading">
										<div class="panel-title text-semibold">
											<i class="icon-search4 text-size-base position-left"></i>
											فیلتر
										</div>
									</div>
									  
									<div class="panel-body">
										<form action="#">
											<!-- Start search bar workshop topic -->
											<div class="form-group">
												<div class="form-control-feedback">
													<i class="icon-reading text-size-large text-muted"></i>
												</div>
												<div class="has-feedback has-feedback-left">
													<select data-placeholder="موضوع کارگاه" multiple="" id="srhTopicWorkshop" class="select select2-hidden-accessible"
													tabindex="-1" aria-hidden="true">
													<?php if(UserCommonController::listWorkshopTopic() == null ): ?>
														<option value="0">موضوعی تعریف نشده است</option>
													<?php endif; ?>
														<?php if (UserCommonController::listWorkshopTopic() != null ): ?> 
															<?php foreach(UserCommonController::listWorkshopTopic() as $item): ?>
																<option value=<?=$item['value']?>><?=$item['name']?></option>
															<?php endforeach; ?>
														<?php endif; ?>
													</select>
												</div>
											</div>
											<!-- End search bar workshop topic -->

											<!-- Start search bar employer -->
											<div class="form-group">
												<div class="form-control-feedback">
													<i class="icon-reading text-size-large text-muted"></i>
												</div>
												<div class="has-feedback has-feedback-left">
													<select	ect data-placeholder="کارفرما" multiple="" id="srhEmployerWorkshop" class="select select2-hidden-accessible"
														tabindex="-1" aria-hidden="true">
														<?php if(UserCommonController::listEmployer() == null ): ?>
															<option value="0">رویکردی تعریف نشده است</option>
														<?php endif; ?>
															<?php if (UserCommonController::listEmployer() != null ): ?> 
																<?php foreach(UserCommonController::listEmployer() as $item): ?>
																	<option value=<?=$item['value']?>><?=$item['name']?></option>
																<?php endforeach; ?>
															<?php endif; ?>
													</select>
												</div>
											</div>
											<!-- End search bar employer -->

											<!-- Start search bar license -->
											<div class="form-group">
												<div class="form-control-feedback">
													<i class="icon-reading text-size-large text-muted"></i>
												</div>
												<div class="has-feedback has-feedback-left">
													<select data-placeholder="مرجع اعطای پروانه" multiple="" id="srhLicenseWorkshop" class="select sele\ct2-hidden-accessible"
														tabindex="-1" aria-hidden="true">
														<?php if(UserCommonController::listLicense() == null ): ?>
															<option value="0">موضوعی تعریف نشده است</option>
														<?php endif; ?>
															<?php if (UserCommonController::listLicense() != null ): ?> 
																<?php foreach(UserCommonController::listLicense() as $item): ?>
																	<option value=<?=$item['value']?>><?=$item['name']?></option>
																<?php endforeach; ?>
															<?php endif; ?>
													</select>
												</div>
											</div>
											<!-- Start search bar license -->

											<!-- Start workshop type -->
											<form class="form-group">
												<div class="checkbox">
													<label class="display-block">
														<div class=""><span><input type="checkbox" class="checkbox" name="whichLocation" value="0"></span></div>
														دوره همگانی
													</label>
												</div>
												<div class="checkbox">
													<label class="display-block">
														<div><span><input type="checkbox" class="styled" name="whichLocation" value="1"></span></div>
														دوره تخصصی ویژه روان شناسان
													</label>
												</div>
											</form>
											<!-- End workshop type -->

											<div class="form-group">
											<div class="form-control-feedback">
														<i class="icon-pin-alt text-size-large text-muted"></i>
													</div>
												<div class="has-feedback has-feedback-left">
												<select data-placeholder="استان" multiple="" id="lstProvinces" class="select sele\ct2-hidden-accessible"
													tabindex="-1" aria-hidden="true" onchange="changeListOstan()">
													<?php
                           							 	$result = MainAdminController::getAllowedProvinces();
                            							for ($i = 0; $i <= count($result) - 1; $i++) {
                              								echo '<option value=' . $result[$i]['id'] . '>' . $result[$i]['name'] . '</option>';
														}
													?>
                								</select>
												</div>
											</div>

											<div class="form-group">
											<div class="form-control-feedback">
														<i class="icon-pin-alt text-size-large text-muted"></i>
													</div>
												<div class="has-feedback has-feedback-left">
												<select data-placeholder="شهرستان" multiple="" id="cityManager" class="select sele\ct2-hidden-accessible"
													tabindex="-1" aria-hidden="true">
                								</select>
												</div>
											</div>
											
												<div class="form-group">
												<div class="has-feedback has-feedback-left">
													<input type="search" class="date-picker form-control" id="fromDate" placeholder="از تاربخ">
													<div class="form-control-feedback">
														<i class="icon-calendar text-size-large text-muted"></i>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="has-feedback has-feedback-left">
													<input type="search" class="date-picker form-control" id="toDate" placeholder="تا تاریخ">
													<div class="form-control-feedback">
														<i class="icon-calendar text-size-large text-muted"></i>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="radio no-margin-top">
													<label>
														<div class=""><span><input type="radio" name="date" value="0" class="styled" id="today"></span></div>
														امروز
													</label>
												</div>

												<div class="radio">
													<label>
														<div class=""><span><input type="radio" name="date" value="1" class="styled"></span></div>
														دیروز
													</label>
												</div>

												<div class="radio">
													<label>
														<div class=""><span><input type="radio" name="date" value="7" class="styled"></span></div>
														هفته گذشته
													</label>
												</div>

												<div class="radio">
													<label>
														<div class=""><span><input type="radio" name="date" value="30" class="styled"></span></div>
														ماه گذشته
													</label>
												</div>
											</div>
											<button type="submit" class="btn bg-blue btn-block" onclick="formManagerValidation()">
												<i class="icon-search4 text-size-base position-left"></i>
												گزارش گیری
											</button>
										</form>
										</div>

									</div>
								</div>
								<!-- /sidebar search -->


								<!-- Title selection -->
								

						
						
				
							</div>
						</div>
					<div class="col-md-8" >
						<div class="panel panel-white">
				  			<div id="DataTables_Table_2_wrapper" class="dataTables_wrapper no-footer">
								  <div class="datatable-header">
									  <div id="DataTables_Table_2_filter" class="dataTables_filter">
										  <label><span>Filter:</span> <input type="search" class="" placeholder="Type to filter..." aria-controls="DataTables_Table_2"></label>
										</div>
										<div class="dt-buttons">
											<a class="dt-button buttons-excel buttons-html5 btn btn-default" tabindex="0" aria-controls="DataTables_Table_2" id="CSV"><span>اکسل</span></a>
											<a class="dt-button buttons-pdf buttons-html5 btn btn-default" tabindex="0" aria-controls="DataTables_Table_2" onclick="createPDF()"><span>PDF</span></a>
										</div>
									</div>
									<div class="datatable-scroll-wrap" id="table">
									
								</table></div><div class="datatable-footer"><div class="dataTables_info" id="DataTables_Table_2_info" role="status" aria-live="polite">Showing 1 to 10 of 15 entries</div><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_2_paginate"><a class="paginate_button previous disabled" aria-controls="DataTables_Table_2" data-dt-idx="0" tabindex="0" id="DataTables_Table_2_previous">→</a><span><a class="paginate_button current" aria-controls="DataTables_Table_2" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="DataTables_Table_2" data-dt-idx="2" tabindex="0">2</a></span><a class="paginate_button next" aria-controls="DataTables_Table_2" data-dt-idx="3" tabindex="0" id="DataTables_Table_2_next">←</a></div></div></div>
							
							<div class="text-center content-group-lg pt-20">
								<ul class="pagination">
									<li class="disabled"><a href="#"><i class="icon-arrow-small-right"></i></a></li>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#"><i class="icon-arrow-small-left"></i></a></li>
								</ul>
							</div>
							<!-- /pagination -->

						</div>
					</div>
					<!-- /detached content -->



				</div>
				<!-- /content area -->

			</div>
      
  
  
  
  
  
  
  <!-- </div>
</div> -->
  <script>
	window.onload = onPageLoad();

	function onPageLoad() {
		document.getElementById("today").checked = true;
		var today = new Date();
		today = today.toLocaleDateString('fa-IR');
		$("#fromDate").val(today);
		$("#toDate").val(today);
	}
	function changeListOstan() {
		var html = '';
		var edtDays = $("#lstProvinces").val();
		// edtDays = edtDays[edtDays.length - 1];
		for(i=0; i<edtDays.length; i++){
			var formDataPsych = new FormData();
			formDataPsych.append('id', edtDays[i]);
			$.ajax({
            url: '/admins/getCity',
            type: 'POST',
            dataType: 'JSON',
            data: formDataPsych,
            contentType: false,
            processData: false,
            success: function (result) {
                var json = result;
                if (json.Status == true) {
					for (var i in result.ResultData) {
						html += '<option value=' + result.ResultData[i]['id'] + '>' + result.ResultData[i]['name'] + '</option>';
					}
				$('#cityManager').html(html);
                } else {
					var a = 1;

                }

            }
            });
		}

	}
	
	var searchData = {
		'gender': [],
		'whichLocation': []
	};

	$('.date-picker').persianDatepicker({
		initialValue: false,
		format: 'YYYY/MM/DD'
	});

	$('input[type="checkbox"]').click(function(){
		if($(this).prop("checked") == true){
			searchData[$(this).attr('name')].push($(this).val());
		}
		else if($(this).prop("checked") == false){
			const index = searchData[$(this).attr('name')].indexOf($(this).val());
			if (index > -1) {
				searchData[$(this).attr('name')].splice(index, 1);
			}
		}
	});

	$('input[type="radio"]').click(function(){
		if($(this).prop("checked") == true){
			var today = new Date();
			var secondDate = new Date(today.getFullYear(), today.getMonth() , today.getDate() - $(this).val());
			today = today.toLocaleDateString('fa-IR');
			secondDate = secondDate.toLocaleDateString('fa-IR');
			$("#fromDate").val(secondDate);
			$("#toDate").val(today);
		}
	});

	function convertNumberFatoEn (str){
		var persianNumbers = [/۰/g, /۱/g, /۲/g, /۳/g, /۴/g, /۵/g, /۶/g, /۷/g, /۸/g, /۹/g];
		if(typeof str === 'string'){
			for(var i=0; i<10; i++){
			str = str.replace(persianNumbers[i], i);
		}
	}
	return str;
	};

    function formManagerValidation() {
		console.log("submit clicked");
		var formData = new FormData();
		// if ($("#fromDate").val() != ''){
			d = convertNumberFatoEn($("#fromDate").val());
			moment.locale('fa'); 
			m = moment(d, 'YYYY/M/D');
			m.locale('en');
			d = m.format('YYYY/M/D');
			// searchData['date']['from'] = d;
			formData.append('dateFrom', d); 

		// }
			 
		// if ($("#toDate").val() != ''){
			d = convertNumberFatoEn($("#toDate").val());
			moment.locale('fa'); 
			m = moment(d, 'YYYY/M/D');
			m.locale('en');
			d = m.format('YYYY/M/D');
			// searchData['date']['to'] = d;
			formData.append('dateTo', d); 

		// }
	
		formData.append('treatmentApproach', $("#searchBarTreatmentApproach").val()); 
		formData.append('counselingTopic', $("#searchBarCouselingTopic").val()); 
		formData.append('subTopic', $("#searchBarSubTopic").val()); 
		formData.append('locationProvince', $("#lstProvinces").val()); 
		formData.append('locationCity', $("#cityManager").val()); 

		for (var key in searchData) {
			formData.append(key, searchData[key]); 			
		}

        $.ajax({
          url: '/admins/searchForReporting',
          type: 'POST',
          dataType: 'JSON',
          data: formData,
          contentType: false,
          processData: false,
          success: function (result) {
            var json = result;
            if (json.Status == true) {
              if ((json.ResultData.code == 200)) {
                var booked = json.ResultData.data;
				if(booked!=null){          
				var tableBody = '<table class="table datatable-button-html5-columns dataTable no-footer" id="table1" role="grid" aria-describedby="DataTables_Table_2_info">';
				tableBody += '<thead>';
				tableBody += '<tr role="row" id="tr">';
				tableBody += '<th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending">ردیف</th>';
				tableBody += '<th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending">موضوع مشاوره</th>';
				tableBody += '<th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First Name: activate to sort column descending">رویکرد درمانی</th>';
				tableBody += '<th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Job Title: activate to sort column ascending">موضوع فرعی</th>';
				tableBody += '<th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="DOB: activate to sort column ascending">مکان بیمار</th>';
				tableBody += '<th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">مکان مرکز</th>';
				tableBody += '<th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending">جنسیت</th>';
				tableBody += '<th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending">تاریخ</th>';
				tableBody += '</tr>';
				tableBody += '</thead>';
				tableBody += '<tbody>';
				for(var i=0; i < booked.length; i++){
					tableBody += '<tr role="row" class="odd" id="tr">';

					tableBody += '<td class="sorting_1">';
					tableBody += toPersianNum(i+1);
					tableBody += '</td>'

					tableBody += '<td class="sorting_1">';
					tableBody += booked[i]['counselingTopicName'];
					tableBody += '</td>'

					tableBody += '<td class="sorting_1">';
					tableBody += booked[i]['treatmenApproachName'];
					tableBody += '</td>'

					tableBody += '<td class="sorting_1">';
					tableBody += booked[i]['subTopicName'];
					tableBody += '</td>'


					tableBody += '<td class="sorting_1">';
					tableBody += booked[i]['provinceName'] + ' - ' + booked[i]['cityName'];
					tableBody += '</td>'

					tableBody += '<td class="sorting_1">';
					tableBody += booked[i]['provinceName'] + ' - ' + booked[i]['cityName'];
					tableBody += '</td>'

					tableBody += '<td class="sorting_1">';
					tableBody += booked[i]['gender'];
					tableBody += '</td>'

					tableBody += '<td class="sorting_1">';
					tableBody += new Date(booked[i]['date']).toLocaleDateString('fa-IR');
					tableBody += '</td>'
					
					tableBody += '</tr>';

				}
				tableBody+='</tbody>';
				tableBody+='</table>';
				$('#table').html(tableBody);

				}else{
				$('#table').html('<div class="h2 text-center">رکوردی یافت نشد</div>');
				}
              } 
            } else {
              var msg = json.Error.message;
              showStackTopLeft('error', msg);
            }

          }
        });
    //   }
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
    $('.date-picker').persianDatepicker({
      initialValue: false,
      format: 'YYYY/MM/DD'
    });
    function dialogdSelectFile(id) {
      $(id).trigger('click');
    }

    var okPersonalPhoto = 1;
    var okFrontNatinalCardImageManager = 1;
    var okBackNatinalCardImageManager = 1;
    var okPageBirthCertificationImageManager = 1;


    function printError(elemId, hintMsg) {
      $(elemId).text(hintMsg);
      $(elemId).css({'display': 'block'});
    }
    function printOk(elemId, hintMsg) {
      $(elemId).text(" ");
      $(elemId).css({'display': 'none'});
    }
    
    $( "#verifyRequests" ).on('click', function() {
    if ($("#verifyRequestsUl").css("display") == 'none')
      $("#verifyRequestsUl").css({"display": "block"});
    else
      $("#verifyRequestsUl").css({"display": "none"});    
    });


	function toPersianNum(number)
    {
      number.toString();
      for(var i=0; i<number.length; i++){
        number = number.replace("1","۱");
        number = number.replace("2","۲");
        number = number.replace("3","۳");
        number = number.replace("4","۴");
        number = number.replace("5","۵");
        number = number.replace("6","۶");
        number = number.replace("7","۷");
        number = number.replace("8","۸");
        number = number.replace("9","۹");
        number = number.replace("0","۰");   
      }
      return number;
    }


		function download_csv(csv, filename) {
		var csvFile;
		var downloadLink;

		// CSV FILE
		csvFile = new Blob([csv], {type: "text/csv"});

		// Download link
		downloadLink = document.createElement("a");

		// File name
		downloadLink.download = filename;

		// We have to create a link to the file
		downloadLink.href = window.URL.createObjectURL(csvFile);

		// Make sure that the link is not displayed
		downloadLink.style.display = "none";

		// Add the link to your DOM
		document.body.appendChild(downloadLink);

		// Lanzamos
		downloadLink.click();
	}

	function export_table_to_csv(html, filename) {
		var csv = [];
		var rows = document.querySelectorAll("table tr");
		for (var i = 0; i < rows.length; i++) {
			var row = [], cols = rows[i].querySelectorAll("td, th");
			
			for (var j = 0; j < cols.length; j++) 
				row.push(cols[j].innerText);
			
			csv.push(row.join(","));		
		}

		// Download CSV
		download_csv(csv.join("\n"), filename);
	}

	document.getElementById("CSV").addEventListener("click", function () {
		var html = document.getElementById("table1").outerHTML;
		export_table_to_csv(html, "table.csv");
	});


    function createPDF() {
        var sTable = document.getElementById('table').innerHTML;

        var style = "<style>";
        style = style + "table {width: 100%;font: 17px Calibri;}";
        style = style + "table, th, td {border: solid 1px #DDD; border-collapse: collapse;";
        style = style + "padding: 2px 3px;text-align: center;}";
        style = style + "</style>";

        // CREATE A WINDOW OBJECT.
        var win = window.open('', '', 'height=700,width=700');

        win.document.write('<html><head>');
        win.document.write('<title>Profile</title>');   // <title> FOR PDF HEADER.
        win.document.write(style);          // ADD STYLE INSIDE THE HEAD TAG.
        win.document.write('</head>');
        win.document.write('<body>');
        win.document.write(sTable);         // THE TABLE CONTENTS INSIDE THE BODY TAG.
        win.document.write('</body></html>');

        win.document.close(); 	// CLOSE THE CURRENT WINDOW.

        win.print();    // PRINT THE CONTENTS.
    }

  </script>
