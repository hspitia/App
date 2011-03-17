<?php

/**
* curso_programado actions.
*
* @package    siglo21
* @subpackage curso_programado
* @author     Your name here
* @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
*/
class curso_programadoActions extends sfActions
{
	/**
	* Executes index action
	*
	* @param sfRequest $request A request object
	*/
	public function executeIndex(sfWebRequest $request)
	{
		// $this->forward('default', 'module');
	}
	
	public function executeSeleccionarPeriodoAcademico(sfWebRequest $request) {
		$this->form = new SeleccionPeriodoAcademicoForm();
		
		if ($request->isMethod('post')) {
			$this->form->bind($request->getParameter('seleccionPeriodoAcademico'));
			if ($this->form->isValid())
			{
				$this->redirect('curso_programado/new?'.http_build_query($this->form->getValues()));
			}
		}
	}
	
	public function executeNew(sfRequest $request) {
		$this->periodo = $request->getParameter('PeriodoAcademico_id');
		
		$this->form = new CursoProgramadoForm();
	}
}
