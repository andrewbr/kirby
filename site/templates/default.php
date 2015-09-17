<?php snippet('header') ?>

<div id='main' role='main'>
      <div class='position top-bg-grey' id='top-bg-grey'>
        <div class='position-inner-container container'>
          <div class='position-inner'>
            <div class='project-wrapper'>
              <h1 class='header-title'>
                 <?php echo $page->title()->html() ?>

              </h1>
           
      <div class="text">
      <?php echo $page->text()->kirbytext() ?>
  
        
            </div>
           
      </div>
        </div>
</div>




<?php snippet('footer') ?>