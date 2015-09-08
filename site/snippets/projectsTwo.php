<div class='projects-holder'>
  <div class='position-masthead-project'>
      <h1 class='header-title-yellow'>
        <span>Journal</span>
      </h1>
  </div> 
    <ul class='position-masthead' >
              <?php foreach(page('projects')->children()->visible() as $project): ?>

      <li class="journal">         
    <div class="time">
      <time class="time-homepage" datetime="<?php echo $project->date('c') ?>" pubdate="pubdate"><?php echo $project->date('l jS \of F Y') ?></time> 
    </div>           
   <div class="main-text"><div class="post-s-title"><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></div>
   
    <div class="blurb"><p><?php echo $project->text()->excerpt(360) ?> <a href="<?php echo $project->url() ?>">read&nbsp;more&nbsp;→</a></p></div></div>
    </li>
   <?php endforeach ?>
              </ul>
  </div>
  </div>
  </div>
