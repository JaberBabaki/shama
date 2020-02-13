<script src="/asset/js/sweetalert2/sweetalert2.js"></script>

<div class="modal fade" id="searchPsychDialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog cascading-modal" style="margin-top: 106px" role="document">
  <!--Content-->
    <div class="modal-content"> 
        <div id="counselingList"></div>
    </div>
  </div>
</div>  


  <script>
      var baseURL = "<?php echo baseUrl(); ?>";
      var psych_id;
      function runSearchPsychDialog(_psych_id){
        psych_id = _psych_id;
        $('#searchPsychDialog').modal('show');
        var formData = new FormData();  
        formData.append('psych_id', psych_id);
        $.ajax({
            url: baseURL+'/userCommon/listCounselingByPsychId',
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
    }

    function paymentSteps(json){
      var psychName = json.psychName;
      var resultData = json.resultData;
      $("#counselingList").html('<div id="appended">'+"دکتر "+psychName+"  در درمانگاه های زیر مشغول به کار است: " + "</div>");
      for (var i=0; i<resultData.length; i++){
        $("#counselingList").append('<div id="appended"><a href="'+baseURL+'/mangeCounseling/detailPsych/'+resultData[i].psychShenaseh+'/'+resultData[i].counseil_id+'">'+'درمانگاه '+resultData[i].counselingName+'</a></div>');
      }
    }
</script>
