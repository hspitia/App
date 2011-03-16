<table>
  <tbody>
    <tr>
      <th>Fecha:</th>
      <td><?php echo $matricula->getFecha() ?></td>
    </tr>
    <tr>
      <th>Curso programado curso:</th>
      <td><?php echo $matricula->getCursoProgramadoCursoId() ?></td>
    </tr>
    <tr>
      <th>Curso programado institucion:</th>
      <td><?php echo $matricula->getCursoProgramadoInstitucionId() ?></td>
    </tr>
    <tr>
      <th>Curso programado periodo academico:</th>
      <td><?php echo $matricula->getCursoProgramadoPeriodoAcademicoId() ?></td>
    </tr>
    <tr>
      <th>Estudiante:</th>
      <td><?php echo $matricula->getEstudianteId() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $matricula->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $matricula->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('matricula/edit?curso_programado_curso_id='.$matricula->getCursoProgramadoCursoId().'&curso_programado_institucion_id='.$matricula->getCursoProgramadoInstitucionId().'&curso_programado_periodo_academico_id='.$matricula->getCursoProgramadoPeriodoAcademicoId().'&estudiante_id='.$matricula->getEstudianteId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('matricula/index') ?>">List</a>
