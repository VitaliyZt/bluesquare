<?php /* Template Name: Software */ ?>
<?php get_header(); ?>
<?php $contacts_link = get_permalink(get_page_id_by_template_name("contact_us.php")); ?>

<section class="s51">
   <div class="container container_1290">
      <div class="s51__box sbox">
         <div>
            <div class="s51__main">
               <div class="s51__heading">
                  <h2 class="s51__title wow animate__animated animate__fadeInRight" data-wow-offset="0"><?php the_field("s51_title"); ?></h2>
                  <p class="s51__subtitle wow animate__animated animate__fadeIn" data-wow-delay="0.5s" data-wow-offset="0"><?php the_field("s51_text"); ?></p>
               </div>
               <a href="<?php echo $contacts_link; ?>" class="s51__btn sbtn sbtn_2 wow animate__animated animate__fadeIn" data-wow-delay="1s" data-wow-offset="0"><?php the_field("s51_button_text"); ?></a>
            </div>
         </div>
         <div>
         <?php if(false){ ?>            
            <picture class="s51__img">
               <source srcset="<?php echo get_field("s51_image_webp")["url"]; ?>" type="image/webp">
               <img loading="lazy" src="<?php echo get_field("s51_image_png")["url"]; ?>" alt="">
            </picture>
         <?php } ?>            
         <?php get_template_part("templates/video"); ?>
         </div>
      </div>
   </div>
</section>

<section class="s52 gradient-bg wow animate__animated animate__fadeInUp">
   <div class="container container_1290">
      <div class="s52__heading">
         <h3 class="s52__title nstitle"><?php the_field("s52_title"); ?></h3>
         <p class="s52__text"><?php the_field("s52_text"); ?></p>
      </div>
      <div class="s41__items-box s41__items-box_3">
         <div class="s41__items-bg pa-100">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/4/41-11.svg" alt="">
         </div>
         <ul class="s41__items">
            <?php
            $items = get_field("s52_blocks");
            foreach ($items as $item) {
            ?>
               <li class="s41-item">
                  <div class="s41-item__bg pa-100">
                     <img src="<?php echo bloginfo('template_url'); ?>/assets/img/4/41-4.svg" alt="">
                  </div>
                  <div class="s41-item__main pa-100">
                     <h4 class="s41-item__heading"><?php echo $item["s52_blocks_title"]; ?></h4>
                     <p class="s41-item__text"><?php echo $item["s52_blocks_text"]; ?></p>
                  </div>
               </li>
            <?php }
            wp_reset_postdata(); ?>
         </ul>
      </div>
   </div>
</section>

<section class="s53">
   <div class="container container_1290">
      <div class="s53__wrap">
         <div class="s53__top wow animate__animated animate__fadeInUp">
            <h3 class="s53__title nstitle-2"><?php the_field("s53_title"); ?></h3>
            <p class="s53__text"><?php the_field("s53_text"); ?></p>
         </div>
         <div class="s53__box sbox">
            <div>
               <ul class="s53__items">
                  <?php
                  $items = get_field("s53_blocks_left");
                  foreach ($items as $item) {
                  ?>
                     <li class="s53-item">
                        <div class="s53-item__main">
                           <div class="s53-item__img">
                              <img src="<?php echo $item["s53_blocks_left_image"]["url"]; ?>" alt="">
                           </div>
                           <p class="s53-item__text"><?php echo $item["s53_blocks_left_text"]; ?></p>
                        </div>
                     </li>
                  <?php }
                  wp_reset_postdata(); ?>
               </ul>
            </div>
            <div>
               <picture class="s53__img">
                  <source srcset="<?php echo get_field("s53_image_webp")["url"]; ?>" type="image/webp">
                  <img loading="lazy" src="<?php echo get_field("s53_image_png")["url"]; ?>" alt="">
               </picture>
            </div>
            <div>
               <ul class="s53__items">
                  <?php
                  $items = get_field("s53_blocks_right");
                  foreach ($items as $item) {
                  ?>
                     <li class="s53-item">
                        <div class="s53-item__main">
                           <div class="s53-item__img">
                              <img src="<?php echo $item["s53_blocks_right_image"]["url"]; ?>" alt="">
                           </div>
                           <p class="s53-item__text"><?php echo $item["s53_blocks_right_text"]; ?></p>
                        </div>
                     </li>
                  <?php }
                  wp_reset_postdata(); ?>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <svg class="svg-mask">
      <clipPath id="my-clip-path-4" clipPathUnits="objectBoundingBox">
         <path d="M0.107,0.001 C0.101,0.001,0.096,0.007,0.095,0.015 L0.004,0.983 C0.003,0.992,0.009,1,0.016,1 L0.992,0.999 C0.999,0.999,1,0.991,1,0.982 L0.935,0.014 C0.935,0.006,0.93,0,0.923,0 L0.107,0.001"></path>
      </clipPath>
      <clipPath id="my-clip-path-5" clipPathUnits="objectBoundingBox">
         <path d="M0.109,1 C0.103,1,0.097,0.998,0.097,0.99 L0.004,0.022 C0.003,0.013,0.009,0.005,0.016,0.005 L0.992,0.004 C0.999,0.004,1,0.011,1,0.02 L0.937,0.989 C0.936,0.997,0.931,1,0.925,1 L0.109,1"></path>
      </clipPath>
   </svg>
</section>

<section class="s54 wow animate__animated animate__fadeInUp">
   <div class="container container_1290">
      <div class="s54__box sbox">
         <div>
            <picture class="s54__img">
               <source srcset="<?php echo get_field("s54_image_webp")["url"]; ?>" type="image/webp">
               <img loading="lazy" src="<?php echo get_field("s54_image_png")["url"]; ?>" alt="">
            </picture>
         </div>
         <div>
            <div class="s54__main">
               <blockquote class="s54__text"><?php the_field("s54_text"); ?></blockquote>
               <em class="s54__name"><?php the_field("s54_name"); ?></em>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="s55">
   <div class="container container_1290">
      <div class="s55__top">
         <h3 class="s55__title nstitle"><?php the_field("s55_title"); ?></h3>
         <div class="s55__text"><?php the_field("s55_text"); ?></div>
      </div>
      <ul class="s55__items">
         <?php
         $items = get_field("s55_blocks");
         foreach ($items as $item) {
         ?>
            <li class="s55-item">
               <div class="s55-item__main">
                  <div class="s55-item__img">
                     <img src="<?php echo $item["s55_blocks_image"]["url"]; ?>" alt="">
                  </div>
                  <h4 class="s55-item__title"><?php echo $item["s55_blocks_title"]; ?></h4>
                  <p class="s55-item__text"><?php echo $item["s55_blocks_text"]; ?></p>
               </div>
            </li>
         <?php }
         wp_reset_postdata(); ?>
      </ul>
      <svg class="svg-mask">
         <clipPath id="my-clip-path-1" clipPathUnits="objectBoundingBox">
            <path d="M0,0.894 C0,0.901,0.004,0.907,0.01,0.908 L0.989,1 C0.995,1,1,0.995,1,0.987 L1,0.015 C1,0.007,0.995,0,0.989,0.001 L0.01,0.069 C0.004,0.07,0,0.076,0,0.083 L0,0.894"></path>
         </clipPath>
         <clipPath id="my-clip-path-2" clipPathUnits="objectBoundingBox">
            <path d="M1,0.894 C1,0.901,0.997,0.907,0.992,0.908 L0.013,1 C0.007,1,0.002,0.995,0.002,0.987 L0.002,0.015 C0.002,0.007,0.007,0,0.013,0.001 L0.992,0.069 C0.997,0.07,1,0.076,1,0.083 L1,0.894"></path>
         </clipPath>
      </svg>
   </div>
</section>

<?php get_template_part("templates/s36", null, array("page_id" => get_page_id_by_template_name("about_us.php"))); ?>

<section class="s56">
   <div class="container container_1290">
      <div class="s56__box sbox">
         <div>
            <div class="s56__main">
               <h3 class="s56__title nstitle"><?php the_field("s56_title"); ?></h3>
               <ul class="s56__items">
                  <?php
                  $items = get_field("s56_faq");
                  foreach ($items as $i => $item) {
                  ?>
                     <li class="s56-item<?php if (!$i) { ?> _active<?php } ?>">
                        <h4 class="s56-item__title"><?php echo $item["s56_faq_question"]; ?></h4>
                        <p class="s56-item__text"><?php echo $item["s56_faq_answer"]; ?></p>
                     </li>
                  <?php }
                  wp_reset_postdata(); ?>
               </ul>
            </div>
         </div>
         <div>
            <picture class="s56__img">
               <source srcset="<?php echo get_field("s56_image_webp")["url"]; ?>" type="image/webp">
               <img loading="lazy" src="<?php echo get_field("s56_image_png")["url"]; ?>" alt="">
            </picture>
         </div>
      </div>
   </div>
</section>

<section class="s57">
   <div class="container container_1290">
      <div class="s57__box sbox">
         <div>
            <picture class="s57__img of-img">
               <source srcset="<?php echo get_field("s57_image_webp")["url"]; ?>" type="image/webp">
               <img loading="lazy" src="<?php echo get_field("s57_image_png")["url"]; ?>" alt="">
            </picture>
            <svg class="svg-mask">
               <clipPath id="my-clip-path-3" clipPathUnits="objectBoundingBox">
                  <path d="M0.986,0.092 C0.994,0.093,1,0.098,1,0.104 V0.92 C1,0.926,0.994,0.932,0.986,0.932 L0.017,1 C0.008,1,0,0.995,0,0.988 V0.012 C0,0.005,0.008,-0.001,0.017,0 L0.986,0.092"></path>
               </clipPath>
            </svg>
         </div>
         <div>
            <div class="s57__main">
               <h3 class="s57__title nstitle"><?php the_field("s57_title"); ?></h3>
               <?php echo do_shortcode('[contact-form-7 id="a04286b" title="Let’s Talk" html_class="s57__form sform"]'); ?>
            </div>
         </div>
      </div>
   </div>
</section>

<?php get_footer(); ?>