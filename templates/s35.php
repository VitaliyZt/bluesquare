<?php $page_id = $args['page_id']; ?>
<section class="s35">
   <div class="container container_1290">
      <div class="s35__main">
         <h3 class="s35__title nstitle"><?php the_field("s35_title", $page_id); ?></h3>
         <p class="s35__text"><?php the_field("s35_text", $page_id); ?></p>
      </div>
      <div class="s35__items-slider">
         <div class="s35__items-box swiper">
            <ul class="s35__items swiper-wrapper">
               <?php
               $items = get_field("s35_slider", $page_id);
               foreach ($items as $item) {
               ?>
                  <li class="s35__item-wrap swiper-slide">
                     <div class="s35-item">
                        <picture class="s35-item__bg of-img">
                           <source srcset="<?php echo $item["s35_background_webp"]["url"]; ?>" type="image/webp">
                           <img loading="lazy" src="<?php echo $item["s35_background"]["url"]; ?>" alt="">
                        </picture>
                        <div class="s35-item__main pa-100">
                           <h4 class="s35-item__title"><?php echo $item["s35_title"]; ?></h4>
                           <p class="s35-item__text"><?php echo $item["s35_text"]; ?></p>
                           <a href="<?php echo $item["s35_link"]; ?>" class="s35-item__btn sbtn sbtn_2">Learn More</a>
                        </div>
                     </div>
                  </li>
               <?php }
               wp_reset_postdata(); ?>
            </ul>
            <div class="s35__items-pagination swiper-pagination"></div>
         </div>
      </div>
   </div>
</section>