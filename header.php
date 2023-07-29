<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="<?php echo get_bloginfo('description'); ?>">
   <meta name="keywords" content="">
   <meta name="robots" content="index, follow, noodp">
   <meta name="googlebot" content="index, follow">
   <meta name="google" content="notranslate">
   <meta name="format-detection" content="telephone=no">
   <meta name="author" content="VitaliyZt">

   <meta property="og:title" content="">
   <meta property="og:type" content="">
   <meta property="og:image" content="">
   <meta property="og:url" content="">

   <?php wp_head(); ?>
   <style>
      html {
         margin-top: 0 !important;
      }
   </style>
   <script>
      const ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
      jQuery(document).ready(function() {});
   </script>
</head>

<body <?php body_class(); ?> id="id_<?php echo get_the_ID(); ?>" data-template="<?php
 global $template; echo basename($template); ?>">
   <?php wp_body_open(); ?>
   <?php global $g; ?>

   <header class="header">
      <div class="container">
         <div class="header__box sbox">
            <div>
               <button class="header__menu-btn">
                  <img loading="lazy" src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/Menu.svg" alt="">
               </button>
            </div>
            <div>
               <a href="#" class="header__logo">
                  <img loading="lazy" src="<?php echo get_field("logo", "options")["url"]; ?>" alt="">
               </a>
            </div>
            <div>
               <?php ob_start(); ?>
               <ul class="header__btns">
                  <?php
                  $items = get_field("right_icons", "options");
                  foreach ($items as $item) {
                  ?>
                     <li>
                        <a href="<?php echo $item["link"]; ?>" class="header__btn" title="<?php echo $item["title"]; ?>">
                           <img loading="lazy" src="<?php echo $item["icon"]["url"]; ?>" alt="">
                        </a>
                     </li>
                  <?php }
                  wp_reset_postdata(); ?>
               </ul>
               <?php $header__btns = ob_get_clean(); ?>
               <?php echo $header__btns; ?>
            </div>
         </div>
      </div>
      <div class="header__nav-bg"></div>
      <nav class="header__nav">
         <?php
         wp_nav_menu(array(
            'theme_location' => 'main-menu',
            'menu_class' => 'header__menu',
            'container' => '',
         ));
         ?>
         <?php echo $header__btns; ?>
         <button class="header__nav-close"><span></span><span></span></button>
      </nav>
   </header>
   <main class="main">