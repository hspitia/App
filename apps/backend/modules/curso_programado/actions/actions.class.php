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
		
		$cursoProgramado = new CursoProgramado();
		$cursoProgramado->setPeriodoacademicoId(	$this->periodo);
				
		$this->form = new CursoProgramadoForm($cursoProgramado);
		
		$this->cursosPager 			= $this->getPager($request, 'Curso');
		$this->institucionesPager	= $this->getPager($request, 'Institucion');
		
		$this->formCursos = new CursoForm();
	}
	
	protected function getPager(sfWebRequest $request, $modelName) {
		$q = Doctrine_Core::getTable($modelName)->createQuery();
		
		$pager = new sfDoctrinePager(
			$modelName,
			sfConfig::get('app_max_records_on_list')
		);
		
		$pager->setQuery($q);
		$pager->setPage($request->getParameter('page', 1));
		$pager->init();
		
		return $pager; 
	}
	
	public function executeGetListaCursos(sfRequest $request) {
		$pager = $this->getPager($request, 'Curso');
		// $this->cursos = $this->pager->getResults();
		
		$uri = $this->getContext()->getRouting()->getCurrentInternalUri();
		$url = $this->getController()->genUrl($uri);
		
		return $this->renderPartial(
			'curso_programado/lista_cursos', 
			array(
				'pager'		=> $pager,
				'container'	=> 'lista_cursos',
				'url'		=> $url,
			)
		);

	}
	
	public function executeGetListaInstituciones(sfRequest $request) {
		$pager = $this->getPager($request, 'Institucion');
		// $this->cursos = $this->pager->getResults();
		
		$uri = $this->getContext()->getRouting()->getCurrentInternalUri();
		$url = $this->getController()->genUrl($uri);
		
		return $this->renderPartial(
			'curso_programado/lista_instituciones', 
			array(
				'pager'		=> $pager,
				'container' 	=> 'lista_instituciones',
				'url'		=> $url,
			)
		);

	}
	
	function executeGetCurso(sfRequest $request) {
		$curso_id = $request->getParameter('curso_id');
		$curso = Doctrine_Core::getTable('Curso')->find($curso_id);
		
		$aaData = array();
		$jsonArray = array($curso->getNombre(), $curso->getCodigo());
		
		return $this->renderText(json_encode($jsonArray));
		
		// return $this->renderText($curso->getNombre());
		
	}
}
