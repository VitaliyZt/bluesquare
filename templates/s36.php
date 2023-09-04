<?php $page_id = $args['page_id']; ?>
<?php $contacts_link = get_permalink(get_page_id_by_template_name("contact_us.php")); ?>
<section class="s36 gradient-bg-inv wow animate__animated animate__fadeInUp">
   <div class="container container_1290">
      <div class="s36__box sbox">
         <div>
            <div class="s36__main">
               <h2 class="s36__title"><?php the_field("s36_title", $page_id); ?></h2>
               <p class="s36__text"><?php the_field("s36_text", $page_id); ?></p>
               <a href="<?php echo $contacts_link; ?>" class="s36__btn sbtn"><?php the_field("s36_button_text", $page_id); ?></a>
            </div>
         </div>
         <div>
            <picture class="s36__img">
               <source srcset="<?php echo get_field("s36_image_png", $page_id)["url"]; ?>" type="image/webp">
               <img loading="lazy" src="<?php echo get_field("s36_image_webp", $page_id)["url"]; ?>" alt="">
            </picture>
         </div>
      </div>
   </div>
</section>