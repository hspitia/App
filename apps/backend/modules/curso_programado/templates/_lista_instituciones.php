<div id="lista_instituciones_loader" class="loader"></div>
<div>
	<table class="table_data">
		<thead>
			<tr>
				<th>Nombre Corto	</th>
			</tr>
		</thead>
		<tbody id='lista_instituciones'>
			<?php if($pager->count() == 0): ?>
				<tr>
					<td colspan="1" style="text-align:center;">
						No existen Instituciones Educativas para mostrar
					</td>
				</tr>
			<?php else: ?>
				<?php
				// foreach ($cursos as $i => $curso): 
				foreach ($pager->getResults() as $i => $institucion): 
				?>
					<tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
						<td class="location">
							<?php echo $institucion->getNombreCorto() ?>
						</td>
					</tr>
				<?php endforeach; ?>
			<?php endif ?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="1">
					<?php 
					include_partial(
						'global/ajax_pagination_control', 
						array(
							'pager' 		=> $pager,
							'container'	=> $container,
							'url'		=> $url,
						)); 
					?>
				</td>
			</tr>
		</tfoot>
	</table>
</div>


