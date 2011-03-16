<h1>Matriculas List</h1>

<table>
  <thead>
    <tr>
      <th>Fecha</th>
      <th>Curso programado curso</th>
      <th>Curso programado institucion</th>
      <th>Curso programado periodo academico</th>
      <th>Estudiante</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($matriculas as $matricula): ?>
    <tr>
      <td><?php echo $matricula->getFecha() ?></td>
      <td><a href="<?php echo url_for('matricula/show?curso_programado_curso_id='.$matricula->getCursoProgramadoCursoId().'&curso_programado_institucion_id='.$matricula->getCursoProgramadoInstitucionId().'&curso_programado_periodo_academico_id='.$matricula->getCursoProgramadoPeriodoAcademicoId().'&estudiante_id='.$matricula->getEstudianteId()) ?>"><?php echo $matricula->getCursoProgramadoCursoId() ?></a></td>
      <td><a href="<?php echo url_for('matricula/show?curso_programado_curso_id='.$matricula->getCursoProgramadoCursoId().'&curso_programado_institucion_id='.$matricula->getCursoProgramadoInstitucionId().'&curso_programado_periodo_academico_id='.$matricula->getCursoProgramadoPeriodoAcademicoId().'&estudiante_id='.$matricula->getEstudianteId()) ?>"><?php echo $matricula->getCursoProgramadoInstitucionId() ?></a></td>
      <td><a href="<?php echo url_for('matricula/show?curso_programado_curso_id='.$matricula->getCursoProgramadoCursoId().'&curso_programado_institucion_id='.$matricula->getCursoProgramadoInstitucionId().'&curso_programado_periodo_academico_id='.$matricula->getCursoProgramadoPeriodoAcademicoId().'&estudiante_id='.$matricula->getEstudianteId()) ?>"><?php echo $matricula->getCursoProgramadoPeriodoAcademicoId() ?></a></td>
      <td><a href="<?php echo url_for('matricula/show?curso_programado_curso_id='.$matricula->getCursoProgramadoCursoId().'&curso_programado_institucion_id='.$matricula->getCursoProgramadoInstitucionId().'&curso_programado_periodo_academico_id='.$matricula->getCursoProgramadoPeriodoAcademicoId().'&estudiante_id='.$matricula->getEstudianteId()) ?>"><?php echo $matricula->getEstudianteId() ?></a></td>
      <td><?php echo $matricula->getCreatedAt() ?></td>
      <td><?php echo $matricula->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('matricula/new') ?>">New</a>
