<?php

/**
 * Curso form.
 *
 * @package    siglo21
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CursoForm extends BaseCursoForm
{
  public function configure()
  {
  	  unset(
  	      $this['created_at'],
  	      $this['updated_at'],
  	      $this['slug']
  	  );
  	  
  	  $this->widgetSchema['descripcion'] = new sfWidgetFormTextarea();
  	  
  }
}
