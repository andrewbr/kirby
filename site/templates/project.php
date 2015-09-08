<?php snippet('header') ?>


<div id='main' role='main'>
      <div class='position top-bg-grey' id='top-bg-grey'>
        <div class='position-inner-container container'>
          <div class='position-inner'>
            <div class='project-wrapper'>
              <h1 class='header-title'>
                 <?php echo $page->title()->html() ?>

              </h1>
               <ul class="meta cf">
      <li><b>Date:</b> <time datetime="<?php echo $page->date('c') ?>" pubdate="pubdate"><?php echo $page->date('d.m.Y H:i') ?></time></li>
      <li><b>Tags:</b> <?php echo $page->tags() ?></li>
    </ul>
      <div class="text">
      <?php echo $page->text()->kirbytext() ?>
      <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
     <figure>

        <img class="<?php echo $image->orientation(); ?>" src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
     
      </figure> 
      <?php endforeach ?>
    </div>
         <nav class="nextprev" role="navigation">
      <?php if($prev = $page->prevVisible()): ?>
      <a class="prev" href="<?php echo $prev->url() ?>">&larr; previous</a>
      <?php endif ?>
      <?php if($next = $page->nextVisible()): ?>
      <a class="next" href="<?php echo $next->url() ?>">next &rarr;</a>
      <?php endif ?>
    </nav>   
            </div>
           
      </div>
        </div>
</div>


<?php snippet('footer') ?>

