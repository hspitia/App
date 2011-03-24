<?php echo javascript_include_tag('custom/selectCurso');?>
<div id="lista_cursos_loader" class="loader"></div>
<div>
	<table class="table_data">
		<thead>
			<tr>
				<th>Id</th>
				<th>Código</th>
				<th>Nombre</th>
				<th>Nombre Corto	</th>
				<th>Acción</th>
			</tr>
		</thead>
		<tbody id='lista_cursos'>
			<?php if($pager->count() == 0): ?>
				<tr>
					<td colspan="5" style="text-align:center;">
						No hay cursos para mostrar
					</td>
				</tr>
			<?php else: ?>
				<?php
				// foreach ($cursos as $i => $curso): 
				foreach ($pager->getResults() as $i => $curso): 
				?>
					<tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
						<td class="">
						<input type="hidden" name="curso_id" value="<?php echo $curso->getId() ?>" style="clear:right"/><br />
							<?php echo $curso->getId() ?>
						</td>
						<td class="">
							<?php echo $curso->getCodigo() ?>
						</td>
						<td class="">
							<?php echo $curso->getNombre() ?>
						</td>
						<td class="">
							<?php echo $curso->getNombreCorto() ?>
						</td>
						<td class="">
							<ul class="list_actions">
								<li class="list_actions_select">
									<a href="#">
									Seleccionar
							</a>
								</li>
							</ul>
							
						</td>
					</tr>
				<?php endforeach; ?>
			<?php endif ?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="5">
					<?php 
					include_partial(
						'global/ajax_pagination_control', 
						array(
							'pager' 		=> $pager,
							'container'	=> $container,
							'url'		=> $url,
							// 'module' => 'repairrequest'
						)); 
					?>
				</td>
			</tr>
		</tfoot>
	</table>
</div>


