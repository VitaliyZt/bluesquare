<?php /* Template Name: Hardware */ ?>
<?php get_header(); ?>

<section class="s51 s51_2">
   <div class="container container_1290">
      <div class="s51__box sbox">
         <div>
            <div class="s51__main">
               <div class="s51__heading">
                  <h2 class="s51__title"><?php the_field("s51_2_title"); ?></h2>
                  <p class="s51__subtitle"><?php the_field("s51_2_text"); ?></p>
               </div>
               <a href="<?php the_field("s51_2_button_link"); ?>" class="s51__btn sbtn sbtn_2"><?php the_field("s51_2_button_text"); ?></a>
            </div>
         </div>
         <div>
            <picture class="s51__img">
               <source srcset="<?php echo get_field("s51_2_image_webp")["url"]; ?>" type="image/webp">
               <img loading="lazy" src="<?php echo get_field("s51_2_image_png")["url"]; ?>" alt="">
            </picture>
         </div>
      </div>
   </div>
</section>

<section class="s58 gradient-bg">
   <div class="container container_1290">
      <h2 class="s58__title nstitle"><?php the_field("s58_title"); ?></h2>
      <p class="s58__text"><?php the_field("s58_text"); ?></p>
   </div>
</section>

<section class="s59">
   <div class="container container_1290">
      <div class="s59__heading">
         <h2 class="s59__title nstitle"><?php the_field("s59_title"); ?></h2>
         <p class="s59__text"><?php the_field("s59_text"); ?></p>
      </div>
      <div class="s59__items">         
      <?php
            $items = get_field("s59_blocks");
            foreach ($items as $item) {
            ?>
         <div class="s59-item sbox">
            <div>               
               <picture class="s59-item__img of-img">
                  <source srcset="<?php echo $item["s59_blocks_image_webp"]["url"]; ?>" type="image/webp">
                  <img loading="lazy" src="<?php echo $item["s59_blocks_image_png"]["url"]; ?>" alt="">
               </picture>
            </div>
            <div>
               <div class="s59-item__main">
                  <h3 class="s59-item__title nstitle-2"><?php echo $item["s59_blocks_title"]; ?></h3>
                  <p class="s59-item__text"><?php echo $item["s59_blocks_text"]; ?></p>
                  <ul class="s59-item__blocks">

                  <?php
            $jitems = $item["s59_blocks_blocks"];
            foreach ($jitems as $jitem) {
            ?>
                     <li class="s59-block">
                        <div class="s59-block__bg pa-100">
                           <img src="<?php echo bloginfo('template_url'); ?>/assets/img/5/59-3.svg" alt="">
                        </div>
                        <div class="s59-block__main">
                           <div class="s59-block__img">
                              <img src="<?php echo $jitem["s59_blocks_blocks_image"]["url"]; ?>" alt="">
                           </div>
                           <p class="s59-block__text"><?php echo $jitem["s59_blocks_blocks_text"]; ?></p>
                        </div>
                     </li>

                  <?php } ?>

                  </ul>
               </div>
            </div>
         </div> 
         
<?php } wp_reset_postdata(); ?>

      </div>
      <svg class="svg-mask">
         <clipPath id="svgPath-1" clipPathUnits="objectBoundingBox">
            <path d="M1,0.104 C1,0.098,0.994,0.093,0.986,0.092 L0.017,0 C0.008,-0.001,0,0.005,0,0.012 V0.988 C0,0.995,0.008,1,0.017,1 L0.986,0.932 C0.994,0.932,1,0.926,1,0.92 V0.104"></path>            
         </clipPath>
         <clipPath id="svgPath-2" clipPathUnits="objectBoundingBox">
            <path d="M0,0.104 C0,0.098,0.006,0.093,0.014,0.092 L0.983,0 C0.992,-0.001,1,0.005,1,0.012 V0.988 C1,0.995,0.992,1,0.983,1 L0.014,0.932 C0.006,0.932,0,0.926,0,0.92 V0.104"></path>            
         </clipPath>
       </svg>
   </div>
</section>

<section class="s510 gradient-bg-inv">
   <div class="container container_1290">
      <h3 class="s510__title nstitle"><?php the_field("s510_text"); ?></h3>
      <div class="s510__items-box">
         <div class="s510__items-bg pa-100">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/5/510-1.svg" alt="">
         </div>
         <ul class="s510__items">

         <?php
            $items = get_field("s510_blocks");
            foreach ($items as $item) {
            ?>

            <li>
               <div class="s510-item">
                  <div class="s510-item__bg pa-100">
                     <img src="<?php echo bloginfo('template_url'); ?>/assets/img/4/41-4.svg" alt="">
                  </div>
                           
               <picture class="s510-item__img pa-100">
                  <source srcset="<?php echo $item["s510_blocks_image_webp"]["url"]; ?>" type="image/webp">
                  <img loading="lazy" src="<?php echo $item["s510_blocks_image_png"]["url"]; ?>" alt="">
               </picture>

               </div>
            </li>

<?php } wp_reset_postdata(); ?>

         </ul>
      </div>
   </div>
</section>

<section class="s35">
   <div class="container container_1290">
      <div class="s35__main">
         <h3 class="s35__title nstitle"><?php the_field("s35_title"); ?></h3>
         <p class="s35__text"><?php the_field("s35_text"); ?></p>
      </div>

<div class="s35__items-slider">
   <div class="s35__items-box swiper">
      <ul class="s35__items swiper-wrapper">

      <?php
            $items = get_field("s35_slider");
            foreach ($items as $item) {
            ?>
         <li class="s35__item-wrap swiper-slide">
            <div class="s35-item">               
               <picture class="s35-item__bg of-img">
                  <source srcset="<?php echo $item["s35_slider_image_webp"]["url"]; ?>" type="image/webp">
                  <img loading="lazy" src="<?php echo $item["s35_slider_image_png"]["url"]; ?>" alt="">
               </picture>
               <div class="s35-item__main pa-100">
                  <h4 class="s35-item__title"><?php echo $item["s35_slider_title"]; ?></h4>
                  <p class="s35-item__text"><?php echo $item["s35_slider_text"]; ?></p>
                  <a href="<?php echo $item["s35_slider_link"]; ?>" class="s35-item__btn sbtn sbtn_2">Learn More</a>
               </div>
            </div>
         </li>

<?php } wp_reset_postdata(); ?>

      </ul>
      <div class="s35__items-pagination swiper-pagination"></div>
   </div>
</div>

   </div>
</section>

<section class="s511">
   <div class="container container_1290">
      <div class="s511__box sbox">
         <div>
            <div class="s511__main">
               <h3 class="s511__title nstitle-2"><?php the_field("s511_title"); ?></h3>
               <p class="s511__text"><?php the_field("s511_text"); ?></p>
               <a href="<?php the_field("s511_button_link"); ?>" class="s511__btn sbtn sbtn_2"><?php the_field("s511_button_text"); ?></a>
            </div>
         </div>
         <div>
            <picture class="s511__img">
               <source srcset="<?php echo get_field("s511_image_webp")["url"]; ?>" type="image/webp">
               <img loading="lazy" src="<?php echo get_field("s511_image_png")["url"]; ?>" alt="">
            </picture>
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
            <div class="s55-item__bg pa-100">
               <img src="<?php echo bloginfo('template_url'); ?>/assets/img/5/55-2.svg" alt="" class="pa-100">
            </div>
            <div class="s55-item__main">
               <div class="s55-item__img">
                  <img src="<?php echo $item["s55_blocks_image"]["url"]; ?>" alt="">
               </div>
               <h4 class="s55-item__title"><?php echo $item["s55_blocks_title"]; ?></h4>
               <p class="s55-item__text"><?php echo $item["s55_blocks_text"]; ?></p>
            </div>
         </li>
            
<?php } wp_reset_postdata(); ?>

      </ul>   

      <a href="<?php the_field("s55_button_link"); ?>" class="s55__btn sbtn sbtn_2"><?php the_field("s55_button_text"); ?></a>

      <svg class="svg-mask">
         <clipPath id="my-clip-path-1" clipPathUnits="objectBoundingBox"><path d="M0,0.894 C0,0.901,0.004,0.907,0.01,0.908 L0.989,1 C0.995,1,1,0.995,1,0.987 L1,0.015 C1,0.007,0.995,0,0.989,0.001 L0.01,0.069 C0.004,0.07,0,0.076,0,0.083 L0,0.894"></path></clipPath>
         <clipPath id="my-clip-path-2" clipPathUnits="objectBoundingBox"><path d="M1,0.894 C1,0.901,0.997,0.907,0.992,0.908 L0.013,1 C0.007,1,0.002,0.995,0.002,0.987 L0.002,0.015 C0.002,0.007,0.007,0,0.013,0.001 L0.992,0.069 C0.997,0.07,1,0.076,1,0.083 L1,0.894"></path></clipPath>
       </svg>
   </div>
</section>

<?php get_footer(); ?>