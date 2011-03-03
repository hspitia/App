<?php

require_once dirname(__FILE__).'/../lib/periodo_academicoGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/periodo_academicoGeneratorHelper.class.php';

/**
 * periodo_academico actions.
 *
 * @package    siglo21
 * @subpackage periodo_academico
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
 class periodo_academicoActions extends autoPeriodo_academicoActions
 {
 	 public function executeNew(sfWebRequest $request) {
 	 	 $PeriodoAcademico = new PeriodoAcademico();
 	 	 $PeriodoAcademico->setCodigo('indefinido');
 	 	 $PeriodoAcademico->setInicio(time());
 	 	 $PeriodoAcademico->setFin(date('d-m-Y H:i:s', time() + 86400 * 30));
 	 	 
 	 	 $this->form = $this->configuration->getForm($PeriodoAcademico);
 	 	 $this->PeriodoAcademico = $this->form->getObject();
 	 }
 }
