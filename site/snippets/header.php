<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8" />  
    
    <meta name="description" content="<?php echo html($site->description()) ?>" />
    <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow" />

    <title><?php echo html($site->title()) ?></title>

    <?php echo css('assets/css/site.css') ?>

    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

  </head>
  <body>

  <article class="page">