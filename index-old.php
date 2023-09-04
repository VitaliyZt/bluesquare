<?php get_header(); ?>

<?php if (get_field("s10_active")) { ?>
   <section class="s10">
      <div class="container">
         <div class="s10__box sbox sbox_full sbox_aligned">
            <div>
               <div class="s10__main">
                  <div class="s10__heading">
                     <h2 class="s10__title stitle"><?php the_field("s10_title"); ?></h2>
                     <p class="s10__subtitle"><?php the_field("s10_subtitle"); ?></p>
                  </div>
                  <div class="s10__text"><?php the_field("s10_text"); ?></div>
                  <a href="<?php the_field("s10_button_link"); ?>" class="s10__btn sbtn sbtn_big"><?php the_field("s10_button_text"); ?></a>
               </div>
            </div>
            <div>
               <div class="s10__img-box">
                  <picture class="s10__img of-img">
                     <source srcset="<?php echo get_field("s10_image_webp")["url"]; ?>" type="image/webp">
                     <img loading="lazy" src="<?php echo get_field("s10_image_png")["url"]; ?>" alt="">
                  </picture>
               </div>
            </div>
         </div>
      </div>
   </section>
<?php } ?>


<?php if (get_field("s3_active")) { ?>
   <section class="s3">
      <div class="container">
         <div class="s3__box sbox sbox_635 sbox_aligned">
            <div>
               <picture class="s3__img of-img">
                  <source srcset="<?php echo get_field("s3_image_webp")["url"]; ?>" type="image/webp">
                  <img loading="lazy" src="<?php echo get_field("s3_image_png")["url"]; ?>" alt="">
               </picture>
            </div>
            <div>
               <div class="s3__main">
                  <div class="s3__heading">
                     <h2 class="s3__title stitle"><?php the_field("s3_title"); ?></h2>
                     <p class="s3__subtitle"><?php the_field("s3_subtitle"); ?></p>
                  </div>
                  <div class="s3__text"><?php the_field("s3_text"); ?></div>
                  <a href="<?php the_field("s3_button_link"); ?>" class="s3__btn sbtn sbtn_big sbtn_mb"><?php the_field("s3_button_text"); ?></a>
               </div>
            </div>
         </div>
      </div>
   </section>
<?php } ?>


<?php if (get_field("s4_active")) { ?>
   <section class="s4">
      <div class="container">
         <div class="s4-blocks sbox sbox_3">
            <?php
            $items = get_field("s4_blocks");
            //mydump($items);
            foreach ($items as $item) {
            ?>
               <div class="s4-block">
                  <picture class="s4-block__img of-img">
                     <source srcset="<?php echo $item["s4_blocks_image_webp"]["url"]; ?>" type="image/webp">
                     <img loading="lazy" src="<?php echo $item["s4_blocks_image_png"]["url"]; ?>" alt="">
                  </picture>
                  <div class="s4-block__main">
                     <h4 class="s4-block__title"><?php echo $item["s4_blocks_title"]; ?></h4>
                     <p class="s4-block__text"><?php echo $item["s4_blocks_text"]; ?></p>
                     <a href="<?php echo $item["s4_blocks_button_link"]; ?>" class="s4-block__btn sbtn sbtn_small"><?php echo $item["s4_blocks_button_text"]; ?></a>
                  </div>
               </div>

            <?php }
            wp_reset_postdata(); ?>

         </div>
      </div>
   </section>
<?php } ?>


<?php if (get_field("s5_active")) { ?>
   <section class="s5">
      <div class="s5__main">
         <picture class="s5__bg-img of-img abs-inner">
            <source srcset="<?php echo get_field("s5_image_webp")["url"]; ?>" type="image/webp">
            <img loading="lazy" src="<?php echo get_field("s5_image_png")["url"]; ?>" alt="">
         </picture>
         <div class="s5__bg abs-inner"></div>
         <div class="s5__container container">
            <div class="s5__box">
               <div class="s5__heading">
                  <h3 class="s5__title"><?php the_field("s5_title"); ?></h3>
                  <p class="s5__subtitle"><?php the_field("s5_subtitle"); ?></p>
               </div>
               <a href="<?php the_field("s5_button_link"); ?>" class="s5__btn sbtn sbtn_big sbtn_mb"><?php the_field("s5_button_text"); ?></a>
            </div>
         </div>
      </div>
   </section>
<?php } ?>


<?php if (get_field("s6_active")) { ?>
   <section class="s6">
      <div class="container">
         <div class="s6__top">
            <div class="s6__heading">
               <h2 class="s6__title stitle"><?php the_field("s6_title"); ?></h2>
               <div class="s6__subtitle"><?php the_field("s6_subtitle"); ?></div>
            </div>
            <p class="s6__text stext"><?php the_field("s6_text"); ?></p>
         </div>
         <div class="s6__main">
            <div class="s6__products sbox sbox_4">
               <?php
               $items = get_field("s6_products");
               foreach ($items as $item) {
               ?>
                  <div class="s6-product">
                     <picture class="s6-product__img">
                        <source srcset="<?php echo $item["s6_products_image_webp"]["url"]; ?>" type="image/webp">
                        <img loading="lazy" src="<?php echo $item["s6_products_image_png"]["url"]; ?>" alt="">
                     </picture>
                     <div class="s6-product__main">
                        <h4 class="s6-product__title"><?php echo $item["s6_products_title"]; ?></h4>
                        <p class="s6-product__price">
                           <span>Starting at</span><span>$<?php echo $item["s6_products_starting_at"]; ?></span>
                        </p>
                     </div>
                     <a href="<?php echo $item["s6_products_link"]; ?>" class="s6__btn sbtn sbtn_small">Get Product Info</a>
                  </div>
               <?php }
               wp_reset_postdata(); ?>
            </div>
         </div>
      </div>
   </section>
<?php } ?>


<?php if (get_field("s7_active")) { ?>
   <section class="s7">
      <div class="container">
         <div class="s7__box sbox sbox_635-rev sbox_aligned">
            <div>
               <div class="s7__main">
                  <div class="s7__heading">
                     <h2 class="s7__title stitle"><?php the_field("s7_title"); ?></h2>
                     <p class="s7__subtitle"><?php the_field("s7_subtitle"); ?></p>
                  </div>
                  <a href="<?php the_field("s7_button_link"); ?>" class="s7__btn sbtn sbtn_big sbtn_mb"><?php the_field("s7_button_text"); ?></a>
               </div>
            </div>
            <div>
               <picture class="s7__img of-img">
                  <source srcset="<?php echo get_field("s7_image_webp")["url"]; ?>" type="image/webp">
                  <img loading="lazy" src="<?php echo get_field("s7_image_png")["url"]; ?>" alt="">
               </picture>
            </div>
         </div>
      </div>
   </section>
<?php } ?>


<?php if (get_field("s8_active")) { ?>
   <section class="s8">
      <div class="container">
         <div class="s4-blocks sbox sbox_3">
            <?php
            $items = get_field("s8_blocks");
            foreach ($items as $item) {
            ?>
               <div class="s4-block">
                  <picture class="s4-block__img of-img">
                     <source srcset="<?php echo $item["s8_blocks_image_webp"]["url"]; ?>" type="image/webp">
                     <img loading="lazy" src="<?php echo $item["s8_blocks_image_png"]["url"]; ?>" alt="">
                  </picture>
                  <div class="s4-block__main">
                     <h4 class="s4-block__title"><?php echo $item["s8_blocks_title"]; ?></h4>
                     <p class="s4-block__text"><?php echo $item["s8_blocks_text"]; ?></p>
                     <a href="<?php echo $item["s8_blocks_button_link"]; ?>" class="s4-block__btn sbtn sbtn_small"><?php echo $item["s8_blocks_button_text"]; ?></a>
                  </div>
               </div>
            <?php }
            wp_reset_postdata(); ?>
         </div>
      </div>
   </section>
<?php } ?>

<?php if (get_field("s9_active")) { ?>
   <section class="s9">
      <div class="container">
         <div class="s9__top">
            <h2 class="s9__title stitle"><?php the_field("s9_title"); ?></h2>
            <p class="s9__text"><?php the_field("s9_subtitle"); ?></p>
         </div>
         <div class="s9__blocks sbox sbox_3">
            <?php
            $items = get_field("s9_blocks");
            foreach ($items as $item) {
            ?>
               <div class="s9-block">
                  <picture class="s9-block__img of-img">
                     <source srcset="<?php echo $item["s9_blocks_image_webp"]["url"]; ?>" type="image/webp">
                     <img loading="lazy" src="<?php echo $item["s9_blocks_image_png"]["url"]; ?>" alt="">
                  </picture>
                  <div class="s9-block__main">
                     <div class="s9-block__text">
                        <h4 class="s9-block__title"><?php echo $item["s9_blocks_title"]; ?></h4>
                        <p class="s9-block__subtitle"><?php echo $item["s9_blocks_text"]; ?></p>
                     </div>
                     <a href="<?php echo $item["s9_blocks_button_link"]; ?>" class="s9-block__btn sbtn"><?php echo $item["s9_blocks_button_text"]; ?></a>
                  </div>
               </div>
            <?php }
            wp_reset_postdata(); ?>
         </div>
      </div>
   </section>
<?php } ?>

<?php get_footer(); ?>