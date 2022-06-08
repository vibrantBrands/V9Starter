<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<html id="ccm-fix" lang="en">
    <head>
        <?php Loader::element('header_required'); ?>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="<?php echo $view->getThemePath()?>/css/bootstrap-modified.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $view->getThemePath()?>/libraries/mmenu/mmenu-light.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $view->getThemePath()?>/libraries/aos/aos.css">

        <?php if ($c->getCollectionID() == 1) { ?>
            <link rel="stylesheet" type="text/css" href="<?php echo $view->getThemePath()?>/libraries/swiperJS/swiper.min.css">
        <?php } ?>

        <?php echo $html->css($view->getStylesheet('fonts.css')) ?>
        <?php echo $html->css($view->getStylesheet('main.css')) ?>

        <script src="https://kit.fontawesome.com/6196efcb76.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="<?php echo $c->getPageWrapperClass(); ?>">
          
