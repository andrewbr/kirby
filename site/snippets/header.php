<!DOCTYPE html>

<html class='no-js' lang='en-CA'>
  <head prefix='og: http://ogp.me/ns#'>
    <meta charset='utf-8'>
    <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
    <title>Andrew Bryant</title>
    <meta content='width=device-width, initial-scale=1.0, user-scalable=no' name='viewport'>
    <meta content='yes' name='apple-mobile-web-app-capable'>
    <meta content='Andrew Bryant' property='og:title'>
    <meta content='A digital designer' property='og:description'>
    <meta content='##' property='og:image'>
    <meta content='image/png' property='og:image:type'>
    <meta content='114' property='og:image:width'>
    <meta content='114' property='og:image:height'>
    <meta content='summary' name='twitter:card'>
    <meta content='@andrewBryant' name='twitter:site'>
    <meta content='Andrew Bryant' name='twitter:title'>
    <meta content='Strong, young and urban. Deeper than Barry White' name='twitter:description'>
    <meta content='###' name='twitter:image'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <?php echo css('assets/css/main.css') ?>
    <link rel="stylesheet" type="text/css" href="//cloud.typography.com/6692132/630046/css/fonts.css" />
<?php if($page->title() == 'Journal'): ?>
<style type="text/css"> .menu .active { color: #000;} .menu a { color: #fff;}</style>
<?php elseif($page->template() == 'project'): ?>
 <style type="text/css"> .menu .active { color: red;} .menu a { color: green;} .header-title{ color: #454147;}</style>   
<?php else: ?>
<style type="text/css"> </style>
<?php endif ?>

  </head>

  <body>
    <div id='image-preload'>
      
    </div>
    <header class='white-header' id='header'>
      <div class='container'>
        <span class='navgation-icon' id='navigation-icon'></span>
          <?php snippet('menu') ?>
      </div>
    </header>

 