<?php

/**
 * Matricula filter form base class.
 *
 * @package    siglo21
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMatriculaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'fecha'                               => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'CursoProgramado_Curso_id'            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CursoProgramadoCurso'), 'add_empty' => true)),
      'CursoProgramado_Institucion_id'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'CursoProgramado_PeriodoAcademico_id' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Estudiante_id'                       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Estudiante'), 'add_empty' => true)),
      'created_at'                          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'fecha'                               => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'CursoProgramado_Curso_id'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('CursoProgramadoCurso'), 'column' => 'id')),
      'CursoProgramado_Institucion_id'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'CursoProgramado_PeriodoAcademico_id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Estudiante_id'                       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Estudiante'), 'column' => 'id')),
      'created_at'                          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('matricula_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Matricula';
  }

  public function getFields()
  {
    return array(
      'id'                                  => 'Number',
      'fecha'                               => 'Date',
      'CursoProgramado_Curso_id'            => 'ForeignKey',
      'CursoProgramado_Institucion_id'      => 'Number',
      'CursoProgramado_PeriodoAcademico_id' => 'Number',
      'Estudiante_id'                       => 'ForeignKey',
      'created_at'                          => 'Date',
      'updated_at'                          => 'Date',
    );
  }
}
