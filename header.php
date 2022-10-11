<!DOCTYPE html><!--htmlで書かれていることを宣言-->
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/image/common/fav.png">

  <?php if(is_home() || is_front_page()):?>
    <title><?php bloginfo('name'); ?></title>
  <?php else : ?>
    <title><?php wp_title('及川ラボ｜', true, 'left'); ?></title>
  <?php endif; ?>


  <?php if(is_home() || is_front_page()):?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/footer.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sidebar.css" type="text/css" />
  <?php else : ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/footer.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/header.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sidebar.css" type="text/css" />
  <?php endif; ?>

  <?php if(is_page('webdesign')): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/service_under.css" type="text/css" />
  <?php else : ?>
  <?php endif; ?>

  <?php if(is_page('philosophy')): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/philosophy.css" type="text/css" />
  <?php else : ?>
  <?php endif; ?>

  <?php if(is_page('company')): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/company.css" type="text/css" />
  <?php else : ?>
  <?php endif; ?>

  <?php if(is_page('case')): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/case.css" type="text/css" />
  <?php else : ?>
  <?php endif; ?>

  <?php if(is_page('case-webdesign') || is_page('case-line') || is_page('case-sns') || is_page('case-videodirection')  ): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/case_under_common.css" type="text/css" />
  <?php else : ?>
  <?php endif; ?>

  <?php if(is_page('service')): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/service.css" type="text/css" />
  <?php else : ?>
  <?php endif; ?>

  <?php if(is_page('payment')): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/payment.css" type="text/css" />
  <?php else : ?>
  <?php endif; ?>

  <?php if(is_page('contact')): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contact.css" type="text/css" />
  <?php else : ?>
  <?php endif; ?>

  <?php if(is_page('recruit')): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/recruit.css" type="text/css" />
  <?php else : ?>
  <?php endif; ?>

  <?php if(is_page('news')): ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/news.css" type="text/css" />
  <?php else : ?>
  <?php endif; ?>


  <?php if(is_single()):?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single.css" type="text/css" />
  <?php endif; ?>

  <?php wp_head(); ?>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-1LH7D8BH2N"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-1LH7D8BH2N');
  </script>

</head>
<body <?php body_class(); ?>>

  <header>
    <div class="h-content">
      <div class="h-c-logo">
        <?php
        if(is_home() || is_front_page()) {
          $title_tag_start = '<h1 class="site-title">';
          $title_tag_end = '</h1>';
        } else {
          $title_tag_start = '<p class="site-title">';
          $title_tag_end =  '</p>';
        }
        ?>
        <!--タイトルを画像にする場合-->
        <div class="site-title-wrap">
          <?php echo $title_tag_start; ?>
            <a href="<?php echo home_url(); ?>">
              <img src="<?php echo get_template_directory_uri() ?>/image/common/common_com_logo3.png">
            </a>
          <?php echo $title_tag_end; ?>
        </div>
      </div>
      <div class="h-c-sp_menu_button">
        <div class="header_sp_button">

        </div>
      </div>
    </div>
    <div class="nav_menu">
      <div class="h-menu">
        <div class="h-m-frame">
          <div id="header-nav-wrap" class="header-nav-wrap pc-menu">
          <?php wp_nav_menu( array(
                'theme_location' => 'header-nav',
                'container' => 'nav',
                'container_class' => 'header-nav',
                'container_id' => 'header-nav',
                'fallback_cb' => ''
          ) ); ?>
          </div>
          <div class="header-nav-catch">

          </div>
        </div>
      </div>
    </div>
  </header>
