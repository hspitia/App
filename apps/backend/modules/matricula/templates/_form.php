<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('matricula/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?curso_programado_curso_id='.$form->getObject()->getCursoProgramadoCursoId().'&curso_programado_institucion_id='.$form->getObject()->getCursoProgramadoInstitucionId().'&curso_programado_periodo_academico_id='.$form->getObject()->getCursoProgramadoPeriodoAcademicoId().'&estudiante_id='.$form->getObject()->getEstudianteId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('matricula/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'matricula/delete?curso_programado_curso_id='.$form->getObject()->getCursoProgramadoCursoId().'&curso_programado_institucion_id='.$form->getObject()->getCursoProgramadoInstitucionId().'&curso_programado_periodo_academico_id='.$form->getObject()->getCursoProgramadoPeriodoAcademicoId().'&estudiante_id='.$form->getObject()->getEstudianteId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['CursoProgramado_Curso_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['CursoProgramado_Curso_id']->renderError() ?>
          <?php echo $form['CursoProgramado_Curso_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fecha']->renderLabel() ?></th>
        <td>
          <?php echo $form['fecha']->renderError() ?>
          <?php echo $form['fecha'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
