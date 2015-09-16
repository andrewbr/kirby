<nav role="navigation">

  <ul class="menu cf">
  <li><a <?php if($page->isHomePage()): ?>
class="active"
<?php endif ?> href="<?php echo $site->homePage()->url() ?>">Home</a></li>
    <?php foreach($pages->visible() as $p): ?>
    <li>
      <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>

      <?php if($p->hasVisibleChildren()): ?>

      <?php endif ?>

    </li>
    <?php endforeach ?>
    <?php if($page->template() == 'project'): ?> 

      <li class="childTitle">: <?php echo $page->title()->html() ?></li> 

      <?php else: ?>

<?php endif ?>
  </ul>

</nav>
