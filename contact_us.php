<?php /* Template Name: Contact us */ ?>
<?php get_header(); ?>

<section class="s41 gradient-bg">
   <div class="container container_1290">
      <div class="s41__box sbox">
         <div>
         <div class="s41__main">
            <h1 class="s41__title nstitle-big"><?php the_field("s41_title"); ?></h1>
            <div class="s41__text"><?php the_field("s41_text"); ?></div>
         </div>
         </div>
         <div>
            <div class="s41__items-box">
               <div class="s41__items-bg pa-100">
                  <img loading="lazy" src="<?php echo bloginfo('template_url'); ?>/assets/img/4/41-5.svg" alt="">
               </div>
               
            <ul class="s41__items">
            <?php
            $items = get_field("s41_blocks");
            foreach ($items as $item) {
         ?>
                  <li class="s41-item">
                     <div class="s41-item__bg pa-100">
                        <img loading="lazy" src="<?php echo bloginfo('template_url'); ?>/assets/img/4/41-4.svg" alt="">
                     </div>
                     <div class="s41-item__main pa-100">
                        <div class="s41-item__img">
                           <img loading="lazy" src="<?php echo $item["s41_blocks_image"]["url"]; ?>" alt="">
                        </div>
                        <h4 class="s41-item__title"><?php echo $item["s41_blocks_text"]; ?></h4>
                     </div>
                  </li>
         
<?php } wp_reset_postdata(); ?>

            </ul>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="s42">
   <div class="container container_1290">
      <div class="s42__heading">
         <h2 class="s42__title nstitle-big"><?php the_field("s42_title"); ?></h2>
         <div class="s42__subtitle"><?php the_field("s42_text"); ?></div>         
      </div>

      <?php echo do_shortcode('[contact-form-7 id="6be47d0" title="Contact us" html_class="s42__form sform"]'); ?>
      
   </div>
</section>

<?php get_footer(); ?>