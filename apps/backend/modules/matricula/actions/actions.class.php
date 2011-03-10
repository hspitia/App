<?php

/**
* matricula actions.
*
* @package    siglo21
* @subpackage matricula
* @author     Your name here
* @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
*/
class matriculaActions extends sfActions
{
	/**
	* Executes index action
	*
	* @param sfRequest $request A request object
	*/
	
	private $campo 	= '';
	private $otro 	= '';
	
	public function executeIndex(sfWebRequest $request)
	{
		$this->form = new SelectPeriodForm();
		
		
		if ($request->isMethod('post'))
		{
			// Handle the form submission
			$campo = $request->getParameter('campo');
			$otro = $request->getParameter('otro');
			
			$this->redirect('matricula/selectCourse?'.http_build_query($this->form->getValues()));
		}
	}
	
	public function executeSelectCourse(sfWebRequest $request)
	{
		$this->form = new SelectCourseForm();
		
		
		if ($request->isMethod('post'))
		{
			// Handle the form submission
			$curso = $request->getParameter('curso');
			$this->redirect('matricula/selectStudent');
		}
	}
	
	public function executeSelectStudents(sfWebRequest $request) {
		$this->form = new SelectStudentesForm();
		
		if ($request->isMethod('post')) {
			$student = $request->getParameter('student');
			$this->redirect('matricula/finalMatricula');
		}
	}
	
	public function executeFinalMatricula(sfWebRequest $request) {
		
		
	}
}
