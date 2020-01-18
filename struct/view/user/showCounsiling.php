<link href="/asset/css/iranmap.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="/asset/css/tooltipster.css"/>
<script type="text/javascript" src="/asset/js/plugins/jquery.tooltipster.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<script>
  $(function () {
    $('#IranMap .list li.province>ul>li>a').click(function (e) {
      var provinceName = $(this).html();
      if (provinceName) {
        $('#IranMap .city').html(' نمایش مرکز ' + provinceName);
        var id=$(this).attr('at')
        window.open('/mangeCounseling/homePageCounseling/'+id);
      }
      e.preventDefault();
    });
  });
  $(function () {
    $('#search').tooltipster({
      contentAsHTML: true,
      animation: 'fade',
      position: 'bottom',
      interactive: true
    });
  });

  function runSearch(val) {
    var value = val;
    $.ajax({
        method: 'POST',
        url: '/UserCommon/feedCounsiling',
        dataType: 'JSON',
        data: {
          keyword: value
        },
        success: function (data) {
          var html = '';
          var baseURL = "<?php echo baseUrl(); ?>";
          for (var i in data.ResultData) {
            html += '<br><strong style="display: block;text-align:right; margin-right: 30px"><a target="_blank"  href="' + baseURL + '/mangeCounseling/homePageCounseling/' + data.ResultData[i].id + '">' + data.ResultData[i].name + ' </a></strong><br>';
          }
          var tooltipsterHtml = '<div style="direction: rtl;width:999px">' + html + '</div>';
          $("#search").tooltipster('content', tooltipsterHtml);
        }
      }
    );
  }
</script>
<section class='block-wrapper pt-0'>
  <div class='container'>
    <div id="IranMap" class="clear tac">
      <div class="form-group form-group-material">
        <div class="form-group form-group-material">
          <span class="help-block tac" style="font-size: 15px;display: block">لطفا در این بخش نام کامل مرکز مشاوره را بنویسید:</span>
          <br>
          <input class="form-control" title="Search" id="search" name="edtCenterName"
                 onkeyup="runSearch(this.value)"
                 placeholder="نام مرکز">
        </div>
      </div>
      <br>
      <div class="list tac" style="width:100% ">
        <ul>
          <li class="province"><span> مراکز مشاوره شهر <?php echo $ResultData[0]['name'] ?></span>
            <ul>
              <?php
                for ($i = 1; $i < count($ResultData); $i++) {
                  echo "<li class='azerbaijan-east'><a at='".$ResultData[$i]["id"]."'".">".$ResultData[$i]["name"]."</a></li>";
                }
              ?>
            </ul>
          </li>
        </ul>
      </div>
      <div class="city clear">
        <p>نمایش مرکز مشاوره با کلیک بر روی آن</p>
      </div>
    </div>
  </div>
</section>