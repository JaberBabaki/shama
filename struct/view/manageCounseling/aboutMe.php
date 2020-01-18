<br>
<br>
<section class="block-wrapper p-0">
  <div class="container">
    <div class="row">
      <div class="content">
        <div class="row">
          <div class="col-lg-4">
            <div class="right-sidebar sidebar-1">
              <div class="widgets author-box-widget ts-grid-box">


                </div>
              </div>
            </div>
          </div>

          <?php
          $photo='/asset/image/bran-pic/'.$counselingPhoto;
          echo "<div class='col-lg-12'>
            <div class='right-sidebar sidebar-1'>
              <div class='widgets author-box-widget ts-grid-box'>
																	 <div class='post-content'>
																	  <div class='tac'>
                                              <div>
                                                <img src='$photo' id='preview' class='img-thumbnail'>
                                              </div>
                                              <br>
                                               <span class='text-semibold no-margin-top' style='font-size:18px'>".'مرکز مشاوره '."</span>
                                               <span class='text-semibold no-margin-top' style='font-size:18px'>".$counselingName."</span>
                                              <br>
                                    </div>
                                              <br>
																		<div class='col-sm-12'>
                                          <br>
                                          <span class='status-mark border-success position-left'></span>
                                          <span class='text-semibold no-margin-top'>موسس مرکز مشاوره: </span>
                                           <span class='text-semibold no-margin-top'>".$founderName."</span>
                                          <br>
                                          <br>
                                          <br>
                                          <span class='status-mark border-success position-left'></span>
                                          <span class='text-semibold no-margin-top'>تاریخ اعتبار مرکز مشاوره : </span>
                                           <span class='text-semibold no-margin-top'>".$expairDate."</span>
																		</div>
																		                                          <br>
                                          <br>
                                          <br>
																																 <div class='authors-social'>
																			<span class='status-mark border-success position-left'></span>
																			<span class='text-semibold' style='font-size:11px'>این اطلاعات در تاریخ </span>
																			<span class='text-semibold' style='font-size:10px'>".$registerTime."</span>
																			<span class='text-semibold' style='font-size:11px'> ایجاد و در تاریخ </span>
																			<span class='text-semibold' style='font-size:10px'>".$lastUpdate." </span>
																			<span class='text-semibold' style='font-size:11px'>بروزرسانی شد </span>

																</div>
																	</div>
																</div>
															</div>
														</div>";

          ?>
        </div>
      </div>
    </div>
  </div>
</section>


