<?php

/**
 * PeriodoAcademico form.
 *
 * @package    siglo21
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PeriodoAcademicoForm extends BasePeriodoAcademicoForm
{
  public function configure()
  {
  	  $current_user = sfContext::getInstance()->getUser();
  	  $culture = substr($current_user->getCulture(), 0,2);
    
  	  unset(
  	      // $this['codigo'],
  	      $this['created_at'],
  	      $this['updated_at'],
  	      $this['slug']
  	  );
  	  
  	  $this->widgetSchema['codigo'] = new sfWidgetFormInput(array(),
  	  	  array( 
  	  	  	  'readonly' => 'readonly'
  	  	  	  // 'disabled' => 'disabled'   
  	  ));
  	  
  	  $this->widgetSchema['comentarios'] = new sfWidgetFormTextarea();
  	  
  	  
  	  $this->widgetSchema['inicio'] = new sfWidgetFormJQueryDate(array(
  	  	  'image' => '/images/icons/calendar.png',
  	  	  'config' => '{}',
  	  	  'culture' => 'es',
  	  ));
  	  
  	  $this->widgetSchema['fin'] = new sfWidgetFormJQueryDate(array(
  	    'image' => '/images/icons/calendar.png',
  	    'config' => '{}',
  	    'culture' => 'es',
  	  ));
  	  
  	  // $this->validatorSchema['codigo'] = new sfValidatorDoctrineUnique( array(
  	  // 	  	  'model' => 'PeriodoAcademico',
  	  // 	  	  'column' => 'codigo',
  	  // 	  	  'required' => 'true'
  	  // 	  	  ));
  	    	  
  	  $this->validatorSchema['codigo'] = new sfValidatorAnd(array(
  	  	  $this->validatorSchema['codigo'],
  	  	  new sfValidatorDoctrineUnique(array(
  	  	  	  'model' => 'PeriodoAcademico',
  	  	  	  'column' => 'codigo',
  	  	  	  'required' => 'true',
  	  	  	  'primary_key' => 'id',
  	  	  	  'throw_global_error' => false
  	  	  	  ), array (
  	  	  	  'invalid' => "Ya existe un período académico programado con este código.")
  	  	  	  ),
  	  	  ));

  }
}
