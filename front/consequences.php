<?php
    $cause=getConsequences();
?>
<section id="testimonials" class="testimonials">
<div class="section-title">
        <h2>Les causes du rechauffement climatique</h2>
</div>
<div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">
        <?php for($i=0;$i<count($cause);$i++) { ?>
          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="assets/img/img/img1.jpg" class="testimonial-img" alt="">
                <h3><?php echo $cause[$i]['titre']; ?></h3>
               
                <p>
                 <?php echo $cause[$i]['info']; ?>
                 <h4><a href="<?php echo $cause[$i]['url']; ?>-<?php echo $cause[$i]['id']; ?>">Voir plus</a></h4>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->
        <?php } ?>
</div>
<div class="swiper-pagination"></div>
</div>
</section>