  <div class='position-s-wrapper'>
              <p class='position-s-intro'>
                Latest entries &amp; pictures
              </p>
              <ul class='posistion-s'>
              <?php foreach(page('projects')->children()->visible()->limit(2) as $project): ?>
                <li class="project-each">
               <time class="time-homepage" datetime="<?php echo $project->date('c') ?>" pubdate="pubdate"><?php echo $project->date('l jS \of F Y') ?></time>
                 <!--<time  datetime="<?php echo $project->date('c') ?>"><?php echo $project->date('l jS \of F Y', 'year') ?></time>-->
    <div class="post-s-title"><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></div>
    <p><?php echo $project->text()->excerpt(160) ?> <a href="<?php echo $project->url() ?>">read&nbsp;more&nbsp;→</a></p>
    </li>
   <?php endforeach ?>
              </ul>
            </div>
          </div>
        </div>

