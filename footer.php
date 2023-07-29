</main>

<footer class=" footer">
   <div class="footer__main">
      <div class="container">
         <div class="footer__box sbox">
            <div>
               <h4 class="footer__title"><img loading="lazy" src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/b-short.svg" alt=""><?php echo get_field("title_1", "options"); ?></h4>
               <ul class="footer__contacts">
                  <?php
                  $items = get_field("contacts", "options");
                  foreach ($items as $item) {
                  ?>
                     <li>
                        <?php if ($item["contacts_link"]) { ?>
                           <a href="<?php echo $item["contacts_link"]; ?>" target="_blank">
                           <?php } else { ?><span><?php } ?>

                              <img loading="lazy" src="<?php echo $item["contacts_icon"]["url"]; ?>" alt=""><?php echo $item["contacts_text"]; ?>

                              <?php if ($item["contacts_link"]) { ?></a><?php } else { ?></span><?php } ?>
                     </li>
                     <?php }
                  wp_reset_postdata(); ?>
               </ul>
            </div>
            <div>
               <h4 class="footer__title"><?php echo get_field("title_2", "options"); ?></h4>
               <?php
                  wp_nav_menu(array(
                     'theme_location' => 'footer-menu-1',
                     'menu_class' => 'footer__menu',
                     'container' => '',
                  ));
               ?>
            </div>
            <div>
               <h4 class="footer__title"><?php echo get_field("title_3", "options"); ?></h4>
               <?php
                  wp_nav_menu(array(
                     'theme_location' => 'footer-menu-2',
                     'menu_class' => 'footer__menu',
                     'container' => '',
                  ));
               ?>
            </div>
            <div>
               <div class="footer__partners-box">
                  <h4 class="footer__title"><?php echo get_field("title_4", "options"); ?></h4>
                  <ul class="footer__partners">
                     <?php
                     $items = get_field("partners", "options");
                     foreach ($items as $item) {
                     ?>
                        <li>
                           <img loading="lazy" src="<?php echo $item["partners_logo"]["url"]; ?>" alt="" <?php if ($item["partners_width"]) { ?> width="<?php echo $item["partners_width"]; ?>" <?php } ?>>
                        </li>
                     <?php }
                     wp_reset_postdata(); ?>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="footer__bottom">
      <div class="container">
         <p class="footer__copyright"><?php echo get_field("copyright", "options"); ?></p>
      </div>
   </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>