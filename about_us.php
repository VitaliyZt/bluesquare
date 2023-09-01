<?php /* Template Name: About us */ ?>
<?php get_header(); ?>

<section class="s31">
   <div class="container container_1290">
      <div class="s31__heading">
         <h4 class="s31__subtitle"><?php the_field("s31_subtitle"); ?></h4>
         <h1 class="s31__title nstitle-big"><?php the_field("s31_title"); ?></h1>
      </div>
      <p class="s31__text"><?php the_field("s31_text"); ?></p>
   </div>
</section>

<section class="s32 gradient-bg">
   <div class="container container_1290">
      <h3 class="s32__title nstitle"><?php the_field("s32_title"); ?></h3>
      <div class="s32__text"><?php the_field("s32_text"); ?></div>
   </div>
</section>


<section class="s33">
   <div class="container container_1290">
      <div class="s33__box">
         <div class="s33__img_1">
            <img loading="lazy" src="<?php echo bloginfo('template_url'); ?>/assets/img/3/33-5.svg" alt="">
         </div>
         <div class="s33__img_2">
            <img loading="lazy" src="<?php echo bloginfo('template_url'); ?>/assets/img/3/33-7.svg" alt="">
         </div>
         <ul class="s33__items container container_1290">
            <?php
            $items = get_field("s33_blocks");
            foreach ($items as $item) {
            ?>
               <li>
                  <div class="s33-item">
                     <div class="s33-item__bg pa-100">
                        <img loading="lazy" src="<?php echo bloginfo('template_url'); ?>/assets/img/3/33-6.svg" alt="">
                     </div>
                     <div class="s33-item__main">
                        <div class="s33-item__img">
                           <img loading="lazy" src="<?php echo $item["s33_image"]["url"]; ?>" alt="">
                        </div>
                        <h4 class="s33-item__title"><?php echo $item["s33_title"]; ?></h4>
                        <p class="s33-item__text"><?php echo $item["s33_text"]; ?></p>
                     </div>
                  </div>
               </li>
            <?php }
            wp_reset_postdata(); ?>
         </ul>
      </div>
   </div>
</section>

<section class="s34">
   <div class="container container_1290">
      <div class="s34__box sbox">
         <div>
            <picture class="s34__img">
               <source srcset="<?php echo bloginfo('template_url'); ?>/assets/img/3/34-1.webp" type="image/webp">
               <img loading="lazy" src="<?php echo bloginfo('template_url'); ?>/assets/img/3/34-1.png" alt="">
            </picture>
         </div>
         <div>
            <div class="s34__main">
               <blockquote class="s34__text"><?php the_field("s34_text"); ?></blockquote>
               <em class="s34__name"><?php the_field("s34_name"); ?></em>
            </div>
         </div>
      </div>
   </div>
</section>

<?php get_template_part("templates/s35", null, array("page_id" => get_page_id_by_template_name("about_us.php"))); ?>

<?php get_template_part("templates/s36", null, array("page_id" => get_page_id_by_template_name("about_us.php"))); ?>

<?php get_footer(); ?>