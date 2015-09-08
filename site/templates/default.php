<?php snippet('header') ?>

 <div id='main' role='main'>
<div class='position top-bg' id='top-bg'>
        <div class='post-inner-container container'>
          <div class='post-inner'>
    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>
</div>
</div>
</div>
  </div>

<?php snippet('footer') ?>