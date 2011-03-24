<?php 
if ($pager->haveToPaginate()):
?>
  <div class="pagination">
    <a href="#" onclick="loadPage(1, '<?php echo $container ?>', '<?php echo $url ?>');">
    <img src= "<?php echo sfConfig::get('app_icons_dir') ?>resultset_first.png" alt="Primera página" title="Primera página" />
    </a>
    <a href="#" onclick="loadPage( <?php	echo $pager->getPreviousPage() ?>, '<?php echo $container ?>', '<?php echo $url ?>');">
    <img src= "<?php echo sfConfig::get('app_icons_dir') ?>resultset_previous.png" alt="Página anterior" title="Página anterior" />
    </a>
 
    <?php foreach ($pager->getLinks() as $page): ?>
      <?php if ($page == $pager->getPage()): ?>
        <?php echo $page ?>
      <?php else: ?>
        <a href="#" onclick="loadPage(<?php echo $page ?>, '<?php echo $container ?>', '<?php echo $url ?>');"><?php echo $page ?></a>
      <?php endif; ?>
    <?php endforeach; ?>
 
    <a href="#" onclick="loadPage(<?php echo $pager->getNextPage() ?>, '<?php echo $container ?>', '<?php echo $url ?>');">
    <img src= "<?php echo sfConfig::get('app_icons_dir') ?>resultset_next.png" alt="Next page" title="Next page" />
    </a>
 
    <a href="#" onclick="loadPage(<?php echo $pager->getLastPage() ?>, '<?php echo $container ?>', '<?php echo $url ?>');">
    <img src= "<?php echo sfConfig::get('app_icons_dir') ?>resultset_last.png" alt="Last page" title="Last page" />
    </a>
    
  </div>
<?php 
endif; 
?>
