<?php

/**
 * Matricula form.
 *
 * @package    siglo21
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class MatriculaForm extends BaseMatriculaForm
{
  public function configure()
  {
  	  unset(
  	      $this['created_at'],
  	      $this['updated_at'],
  	      $this['slug']
  	      );
  	  
  	  $this->setWidgets(array(
  	  	  'fecha'                               => new sfWidgetFormDate(),
  	  	  'CursoProgramado_Curso_id'            => new sfWidgetFormDoctrineChoice(array(
  	  	  	  'model'  => 'CursoProgramado',
  	  	  	  'column' => 'name'
  	  	  	  )
  	  	  	  ),
  	  	  // 'CursoProgramado_Institucion_id'      => new sfWidgetFormInputText(),
  	  	  // 'CursoProgramado_PeriodoAcademico_id' => new sfWidgetFormInputText(),
  	  	  // 'Estudiante_id'                       => new sfWidgetFormInputText(),
  	  	  ));
  	  
  	  $this->setWidgets(array(
  	  	  'section_id' => sfWidgetFormPropelChoice(array(
  	  	  	  'model'  => 'Section',
  	  	  	  'column' => 'name'
  	  	  	  )
  	  	  	  )));
      
      // $this->setValidators(array(
      // 	  'fecha'                               => new sfValidatorDate(array('required' => false)),
      // 	  'CursoProgramado_Curso_id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('CursoProgramado_Curso_id')), 'empty_value' => $this->getObject()->get('CursoProgramado_Curso_id'), 'required' => false)),
      // 	  'CursoProgramado_Institucion_id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('CursoProgramado_Institucion_id')), 'empty_value' => $this->getObject()->get('CursoProgramado_Institucion_id'), 'required' => false)),
      // 	  'CursoProgramado_PeriodoAcademico_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('CursoProgramado_PeriodoAcademico_id')), 'empty_value' => $this->getObject()->get('CursoProgramado_PeriodoAcademico_id'), 'required' => false)),
      // 	  'Estudiante_id'                       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('Estudiante_id')), 'empty_value' => $this->getObject()->get('Estudiante_id'), 'required' => false)),
      // 	  ));
      
      // $this->widgetSchema->setNameFormat('matricula[%s]');
      
      // $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
      
      // $this->setupInheritance();
      
      // parent::setup();
  }
}
