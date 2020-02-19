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
      


			<!-- Main content -->
			<div class="content-wrapper">

				

<!-- Content area -->
<div class="content" style="padding: 0 93px 60px 123px">

<!-- Dropdown menu -->
<div class="table-responsive">

<?php if($booked!=null): ?>
<table class="table text-nowrap table-striped border table-hover table-condensed">
<tbody>
  <tr class="active border-double">
    <td colspan="6" class="text-center" style="font-size: 18px; background: #E4CDCD; color: black;">نوبت های آتی</td>
  </tr>
  <?php for ($i=0; $i<count($booked); $i++): ?>
    <tr>
      <td>
        <div class="media-left position">
          <div class="text-muted text-size-small">
          <?=stringConverter($booked[$i]['endTime'], 'enToFa')?> - <?=stringConverter($booked[$i]['startTime'], 'enToFa')?> 
          </div>
        </div>
      </td>
      <td>
        <div class="text-default text-semibold position">درمانگاه <?=$booked[$i]['counselingName']?></div>
      </td>
      <td>
        <div class="media-left position">
          <div class="text-default text-semibold text-center"><?=dayNumToDayNameConverter($booked[$i]['day']) ?></div>
          <div class="text-muted text-size-small">
            <?=dateConverter($booked[$i]['date'], 'enToFa') ?>
          </div>
        </div>
      </td>
      <td><div class="text-default text-semibold position">
        <?php if($booked[$i]['paymentMode']==1): ?>
          پرداخت در محل
        <?php endif; ?>
        <?php if($booked[$i]['paymentMode']==2): ?>
          پرداخت آنلاین
        <?php endif; ?>
      </div></td>
    </tr>
  <?php endfor; ?>    
</tbody>
</table>
<?php endif; ?>
</table>

<br>
<br>
<br>
<br>
<br>
<br>

<?php if($canceled!=null): ?>
<table class="table text-nowrap table-striped border table-hover table-condensed">
<tbody>
<tr class="active border-double">
<td colspan="6" class="text-center" style="font-size: 18px; background: #E4CDCD; color: black;">نوبت های لغو شده</td>
</tr>
<?php for($i=0; $i<count($canceled); $i++): ?>
    <tr style="background-color:  #f25555 ">
      <td>
        <div class="media-left position">
          <div class="text-default text-size-small">
          <?=stringConverter($canceled[$i]['endTime'], 'enToFa')?> - <?=stringConverter($canceled[$i]['startTime'], 'enToFa')?> 
          </div>
        </div>
      </td>
      <td>
        <div class="text-default text-semibold position">درمانگاه <?=$canceled[$i]['counselingName']?></div>
      </td>
      <td>
        <div class="media-left position">
          <div class="text-default text-semibold text-center"><?=dayNumToDayNameConverter($canceled[$i]['day']) ?></div>
          <div class="text-default text-size-small">
            <?=dateConverter($canceled[$i]['date'], 'enToFa') ?>
          </div>
        </div>
      </td>
      <td ><div class="text-default text-semibold position" >
        <?php if($canceled[$i]['paymentMode']==1): ?>
          پرداخت در محل
        <?php endif; ?>
        <?php if($canceled[$i]['paymentMode']==2): ?>
         پرداخت آنلاین 
        
          <?php endif; ?>
      </div></td>
    </tr>
<?php endfor; ?>              
</tbody>
</table>
<?php endif; ?>
</div>

    <!-- /dropdown menu -->




</div>
<!-- /content area -->

</div>
<!-- /main content -->


      


    </div>
  </div>
</div>

<script>
var baseURL = "<?php echo baseUrl(); ?>";
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


</script>