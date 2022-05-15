<?php
    $cause=getCauses();
?>
<div class="section-title">
        <h2>Les causes du rechauffement climatique</h2>
</div>
<div class="tab-content">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                <ul>
                    <?php for($i=0;$i<count($cause);$i++) { ?>
                  <li><i class="ri-check-double-line"></i> <strong><?php echo $cause[$i]['titre']; ?></strong></li>
                <p class="fst-italic">
                <?php echo $cause[$i]['info']; ?>
                </p>
                
                  <?php } ?>
                   </ul>
              
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="assets/img/img/img1.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        
         
        
        </div>