<br>
<br>
<section class="block-wraper p-0">
  <div class="container">

  <div class="row" >
    <?php if($psychInfo!=null):?>
      <?php for($i=0; $i<count($psychInfo); $i++): ?>
        <div class="col-lg-3 col-md-6" style="background-color:#ffffff; margin-left: 4px; margin-bottom: 8px;margin-right: 4px">
          <div class="thumbnail">
            <div class="thumb thumb-rounded">
              <img src="/asset/image/per-pic/<?=$psychInfo[$i]['psychPhoto']?>"  alt="">

              <div class="caption-overflow">
                      <span>
                        <a href="/asset/image/per_pic1.jpg" class="btn bg-success-400 btn-icon btn-xs"
                          data-popup="lightbox"><i class="icon-plus2"></i></a>
                        <a href="user_pages_profile.html" class="btn bg-success-400 btn-icon btn-xs"><i
                            class="icon-link"></i></a>
                      </span>
              </div>
            </div>

            <div class="caption text-center">
              <h6 class="text-semibold no-margin"> <?=$psychInfo[$i]['psychName'] ?>
                <br>
                <br>
                <small class="display-block">عضو هییت علمی دانشگاه</small>
              </h6>
              <br>
              <ul class="icons-list mt-15">
                    <a href="/mangeCounseling/detailPsych/<?=$psychInfo[$i]['shenaseh']?>/<?=$params ?>" id="btnRegisterFounder" type="submit"
                          class="btn btn-primary">مشاهده جزییات و رزرو نوبت<i
                        class="icon-arrow-left13 position-right"></i></a>
              </ul>
            </div>
          </div>
          
        </div>
        <br>
        <br>  
      <?php endfor; ?>    
    <?php endif;?>
  </div>
</section>
