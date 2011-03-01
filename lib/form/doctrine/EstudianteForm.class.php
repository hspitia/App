<?php

/**
 * Estudiante form.
 *
 * @package    siglo21
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class EstudianteForm extends BaseEstudianteForm
{
  public function configure()
  {
  	  unset(
                $this['created_at'],
                $this['updated_at'],
                $this['slug']
        );

        $this->validatorSchema['email'] = new sfValidatorAnd(array(
                    $this->validatorSchema['email'],
                    new sfValidatorEmail(),
                ));
        
      // $this->widgetSchema->setLabels(array(
      //     'numero_documento' => 'Número Documento',
      //     'direccion_1' => 'Dirección',
      //     'direccion_2' => 'Complemento Dirección',
      //     'telefono' => 'Teléfono',
      //     'movil' => 'Móvil',
      //     'TipoDocumento_id' => 'Tipo de Documento',       
      //     'Genero_id' => 'Género',
      //     'Institucion_id' => 'Institución Educativa'
      // ));
  }
}
