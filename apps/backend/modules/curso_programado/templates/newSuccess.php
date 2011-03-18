<?php 
/* use_stylesheets_for_form($form) */
?>
<?php 
/*use_javascripts_for_form($form) */ 
?>

<div>
	<table class="jobs">
	  <thead>
		<tr>
			<th>Código</th>
			<th>Nombre</th>
			<th>Nombre Corto	</th>
		</tr>
	  </thead>
	  <tbody>
		<?php foreach ($cursos as $i => $curso): ?>
		<tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
			<td class="location">
				<?php echo $curso->getCodigo() ?>
			</td>
			<td class="location">
				<?php echo $curso->getNombre() ?>
			</td>
			<td class="location">
				<?php echo $curso->getNombreCorto() ?>
			</td>
		</tr>
	  <?php endforeach; ?>
	  </tbody>
	</table>


<?php if ($pager->haveToPaginate()): ?>
  <div class="pagination">
    <a href="<?php echo url_for('curso_programado/new') ?>?page=1">
    <img src= "<?php echo sfConfig::get('app_icons_dir') ?>resultset_first.png" alt="Primera página" title="Primera página" />
    </a>
    <a href="<?php echo url_for('curso_programado/new') ?>?page=<?php echo $pager->getPreviousPage() ?>">
    <img src= "<?php echo sfConfig::get('app_icons_dir') ?>resultset_previous.png" alt="Página anterior" title="Página anterior" />
    </a>
 
    <?php foreach ($pager->getLinks() as $page): ?>
      <?php if ($page == $pager->getPage()): ?>
        <?php echo $page ?>
      <?php else: ?>
        <a href="<?php echo url_for('curso_programado/new') ?>?page=<?php echo $page ?>"><?php echo $page ?></a>
      <?php endif; ?>
    <?php endforeach; ?>
 
    <a href="<?php echo url_for('curso_programado/new') ?>?page=<?php echo $pager->getNextPage() ?>">
    <img src= "<?php echo sfConfig::get('app_icons_dir') ?>resultset_next.png" alt="Next page" title="Next page" />
    </a>
 
    <a href="<?php echo url_for('curso_programado/new') ?>?page=<?php echo $pager->getLastPage() ?>">
    <img src= "<?php echo sfConfig::get('app_icons_dir') ?>resultset_last.png" alt="Last page" title="Last page" />
    </a>
    
  </div>
<?php endif; ?>
</div>
  
  

