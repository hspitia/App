<?php

/**
 * Institucion form.
 *
 * @package    siglo21
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class InstitucionForm extends BaseInstitucionForm {

    public function configure() {
        unset(
                $this['created_at'],
                $this['updated_at'],
                $this['slug']
        );

        $this->validatorSchema['email'] = new sfValidatorAnd(array(
                    $this->validatorSchema['email'],
                    new sfValidatorEmail(),
                ));
        
    }

}
