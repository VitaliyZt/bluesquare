<?php get_header(); ?>
<?php $contacts_link = get_permalink(get_page_id_by_template_name("contact_us.php")); ?>

<section class="s51 s51_3">
   <div class="container container_1290">
      <div class="s51__box sbox">
         <div>
            <div class="s51__main">
               <div class="s51__heading">
                  <h2 class="s51__title wow animate__animated animate__fadeInRight" data-wow-offset="0"><?php the_field("s51_title"); ?></h2>
                  <p class="s51__subtitle wow animate__animated animate__fadeIn" data-wow-delay="0.5s" data-wow-offset="0"><?php the_field("s51_text"); ?></p>
               </div>
               <a href="<?php echo $contacts_link; ?>" class="s51__btn sbtn sbtn_2 wow animate__animated animate__fadeIn" data-wow-delay="1s" data-wow-offset="0">Speak To An Expert</a>
            </div>
         </div>
         <div>
         <?php get_template_part("templates/video"); ?>
         </div>
      </div>
</section>

<section class="s61">
   <div class="container container_1290">
      <h3 class="s61__title nstitle"><?php the_field("s61_title"); ?></h3>
      <div class="s61__text"><?php the_field("s61_text"); ?></div>
      <div class="s41__items-box s41__items-box_2 s61__items-box">
         <div class="s41__items-bg pa-100">
            <img loading="lazy" src="<?php echo bloginfo('template_url'); ?>/assets/img/6/61-1.svg" alt="">
         </div>
         <ul class="s41__items">
            <?php
            $items = get_field("s61_blocks");
            foreach ($items as $i => $item) {
            ?>
               <li class="s41-item">
                  <div class="s41-item__bg pa-100">
                     <img loading="lazy" src="<?php echo bloginfo('template_url'); ?>/assets/img/4/41-6.svg" alt="">
                  </div>
                  <div class="s41-item__main pa-100">
                     <div class="s41-item__img">
                        <img loading="lazy" src="<?php echo $item["s61_blocks_image"]["url"]; ?>" alt="">
                     </div>
                     <h4 class="s41-item__title"><?php echo $item["s61_blocks_text"]; ?></h4>
                     <?php if ($i == 0){ ?>
                     <a href="<?php echo get_permalink(get_page_id_by_template_name("hardware.php")); ?>" class="s62-block__link pa-100"></a>
                     <?php } ?>
                     <?php if ($i == 1){ ?>
                     <a href="<?php echo get_permalink(get_page_id_by_template_name("software.php")); ?>" class="s62-block__link pa-100"></a>
                     <?php } ?>
                  </div>
               </li>
            <?php }
            wp_reset_postdata(); ?>
         </ul>
      </div>
   </div>
</section>

<section class="s62">
   <div class="container container_1290">
      <div class="s62__box wow animate__animated animate__fadeInUp">
         <div>
            <div class="s62-block">
               <div class="s62-block__bg pa-100 of-img">
                  <img loading="lazy" src="<?php echo bloginfo('template_url'); ?>/assets/img/6/62-1.svg" alt="">
               </div>
               <div class="s62-block__main">
                  <div class="s62-block__img">
                     <img loading="lazy" src="<?php echo get_field("s62_block_image")["url"]; ?>" alt="">
                  </div>
                  <h4 class="s62-block__title"><?php the_field("s62_block_title"); ?></h4>
                  <p class="s62-block__text"><?php the_field("s62_block_text"); ?></p>
               </div>
            </div>
         </div>
         <div>
            <div class="s62__main">
               <h3 class="s62__title nstitle-2"><?php the_field("s62_title"); ?></h3>
               <div class="s62__text"><?php the_field("s62_text"); ?></div>
            </div>
         </div>
      </div>
      <div class="s53__box sbox">
         <div>
            <ul class="s53__items">
               <?php
               $items = get_field("s62_left_blocks");
               foreach ($items as $item) {
               ?>
                  <li class="s53-item">
                     <div class="s53-item__main">
                        <div class="s53-item__img">
                           <img loading="lazy" src="<?php echo $item["s62_left_blocks_image"]["url"]; ?>" alt="">
                        </div>
                        <p class="s53-item__text"><?php echo $item["s62_left_blocks_text"]; ?></p>
                     </div>
                  </li>
               <?php }
               wp_reset_postdata(); ?>
            </ul>
         </div>
         <div>
            <picture class="s53__img">
               <source srcset="<?php echo get_field("s62_image_webp")["url"]; ?>" type="image/webp">
               <img loading="lazy" src="<?php echo get_field("s62_image_png")["url"]; ?>" alt="">
            </picture>
         </div>
         <div>
            <ul class="s53__items">
               <?php
               $items = get_field("s62_right_blocks");
               foreach ($items as $item) {
               ?>
                  <li class="s53-item">
                     <div class="s53-item__main">
                        <div class="s53-item__img">
                           <img loading="lazy" src="<?php echo $item["s62_right_blocks_image"]["url"]; ?>" alt="">
                        </div>
                        <p class="s53-item__text"><?php echo $item["s62_right_blocks_text"]; ?></p>
                     </div>
                  </li>
               <?php }
               wp_reset_postdata(); ?>
            </ul>
         </div>
      </div>
      <a href="<?php echo $contacts_link; ?>" class="s62__btn sbtn sbtn_2">Speak To An Expert</a>
      <svg class="svg-mask">
         <clipPath id="my-clip-path-4" clipPathUnits="objectBoundingBox">
            <path d="M0.107,0.001 C0.101,0.001,0.096,0.007,0.095,0.015 L0.004,0.983 C0.003,0.992,0.009,1,0.016,1 L0.992,0.999 C0.999,0.999,1,0.991,1,0.982 L0.935,0.014 C0.935,0.006,0.93,0,0.923,0 L0.107,0.001"></path>
         </clipPath>
         <clipPath id="my-clip-path-5" clipPathUnits="objectBoundingBox">
            <path d="M0.109,1 C0.103,1,0.097,0.998,0.097,0.99 L0.004,0.022 C0.003,0.013,0.009,0.005,0.016,0.005 L0.992,0.004 C0.999,0.004,1,0.011,1,0.02 L0.937,0.989 C0.936,0.997,0.931,1,0.925,1 L0.109,1"></path>
         </clipPath>
      </svg>
   </div>
</section>

<section class="s63 gradient-bg wow animate__animated animate__fadeInUp">
   <div class="container container_1290">
      <div class="s63__box">
         <div>
            <div class="s63__main">
               <h3 class="s63__title nstitle"><?php the_field("s63_title"); ?></h3>
               <p class="s63__text"><?php the_field("s63_text"); ?></p>
            </div>
         </div>
         <div>
            <div class="s63__img">
               <img loading="lazy" src="<?php echo get_field("s63_image")["url"]; ?>" alt="">
            </div>
         </div>
      </div>
   </div>
</section>

<section class="s64">
   <div class="container container_1290">
      <div class="s64__box wow animate__animated animate__fadeInUp">
         <div>
            <div class="s64-block">
               <div class="s64-block__bg pa-100 of-img">
                  <img loading="lazy" src="<?php echo bloginfo('template_url'); ?>/assets/img/6/64-1.svg" alt="">
               </div>
               <div class="s64-block__main">
                  <div class="s64-block__img">
                     <img loading="lazy" src="<?php echo get_field("s64_block_image")["url"]; ?>" alt="">
                  </div>
                  <h4 class="s64-block__title"><?php the_field("s64_block_title"); ?></h4>
                  <p class="s64-block__text"><?php the_field("s64_block_text"); ?></p>
               </div>
            </div>
         </div>
         <div>
            <div class="s64__main">
               <h3 class="s64__title nstitle-2"><?php the_field("s64_title"); ?></h3>
               <div class="s64__text"><?php the_field("s64_text"); ?></div>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="s65">
   <div class="container container_1290">
      <div class="s65__box">
         <div>
            <ul class="s65__items">
               <?php
               $items = get_field("s65_left_blocks");
               foreach ($items as $i => $item) {
               ?>
                  <li class="s65-item">
                     <div class="s65-item__bg pa-100 of-img">
                        <?php $img_num = (($i + 1) % 2) ? 3 : 4; ?>
                        <img loading="lazy" src="<?php echo bloginfo('template_url'); ?>/assets/img/6/65-<?php echo $img_num; ?>.svg" alt="">
                     </div>
                     <div class="s65-item__main">
                        <h3 class="s65-item__title"><?php echo $item["s65_left_blocks_title"]; ?></h3>
                        <p class="s65-item__text"><?php echo $item["s65_left_blocks_text"]; ?></p>
                     </div>
                  </li>
               <?php }
               wp_reset_postdata(); ?>
            </ul>
         </div>
         <div>
            <div class="s65__images">
               <picture class="s65__img s65__img_1">
                  <source srcset="<?php echo get_field("s65_image-1_webp")["url"]; ?>" type="image/webp">
                  <img loading="lazy" src="<?php echo get_field("s65_image-1_png")["url"]; ?>" alt="">
               </picture>
               <picture class="s65__img s65__img_2">
                  <source srcset="<?php echo get_field("s65_image-2_webp")["url"]; ?>" type="image/webp">
                  <img loading="lazy" src="<?php echo get_field("s65_image-2_png")["url"]; ?>" alt="">
               </picture>
            </div>
         </div>
         <div>
            <ul class="s65__items s65__items_2">
               <?php
               $items = get_field("s65_right_blocks");
               foreach ($items as $i => $item) {
               ?>
                  <li class="s65-item">
                     <div class="s65-item__bg pa-100 of-img">
                        <?php $img_num = (($i + 1) % 2) ? 3 : 4; ?>
                        <img loading="lazy" src="<?php echo bloginfo('template_url'); ?>/assets/img/6/65-<?php echo $img_num; ?>.svg" alt="">
                     </div>
                     <div class="s65-item__main">
                        <h3 class="s65-item__title"><?php echo $item["s65_right_blocks_title"]; ?></h3>
                        <p class="s65-item__text"><?php echo $item["s65_right_blocks_text"]; ?></p>
                     </div>
                  </li>
               <?php }
               wp_reset_postdata(); ?>
            </ul>
         </div>
      </div>
      <a href="<?php echo $contacts_link; ?>" class="s65__btn sbtn sbtn_2">Speak To An Expert</a>
   </div>
</section>

<?php get_template_part("templates/s36", null, array("page_id" => get_page_id_by_template_name("about_us.php"))); ?>

<section class="s66">
   <div class="container container_1290">
      <div class="s66__box wow animate__animated animate__fadeInUp">
         <div>
            <div class="s66-block">
               <div class="s66-block__bg pa-100 of-img">
                  <img loading="lazy" src="<?php echo bloginfo('template_url'); ?>/assets/img/6/66-1.svg" alt="">
               </div>
               <div class="s66-block__main">
                  <div class="s66-block__img">
                     <img loading="lazy" src="<?php echo get_field("s66_block_image")["url"]; ?>" alt="">
                  </div>
                  <h4 class="s66-block__title"><?php the_field("s66_block_title"); ?></h4>
                  <p class="s66-block__text"><?php the_field("s66_block_text"); ?></p>
               </div>
            </div>
         </div>
         <div>
            <div class="s66__main">
               <h3 class="s66__title nstitle-2"><?php the_field("s66_title"); ?></h3>
               <div class="s66__text"><?php the_field("s66_text"); ?></div>
            </div>
         </div>
      </div>
   </div>
</section>

<?php get_footer(); ?>