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
  public function executeIndex(sfWebRequest $request)
  {
    $this->matriculas = Doctrine_Core::getTable('Matricula')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->matricula = Doctrine_Core::getTable('Matricula')->find(array($request->getParameter('curso_programado_curso_id'),
                                               $request->getParameter('curso_programado_institucion_id'),
                                               $request->getParameter('curso_programado_periodo_academico_id'),
                                               $request->getParameter('estudiante_id')));
    $this->forward404Unless($this->matricula);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new MatriculaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new MatriculaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($matricula = Doctrine_Core::getTable('Matricula')->find(array($request->getParameter('curso_programado_curso_id'),
                         $request->getParameter('curso_programado_institucion_id'),
                         $request->getParameter('curso_programado_periodo_academico_id'),
                         $request->getParameter('estudiante_id'))), sprintf('Object matricula does not exist (%s).', $request->getParameter('curso_programado_curso_id'),
                         $request->getParameter('curso_programado_institucion_id'),
                         $request->getParameter('curso_programado_periodo_academico_id'),
                         $request->getParameter('estudiante_id')));
    $this->form = new MatriculaForm($matricula);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($matricula = Doctrine_Core::getTable('Matricula')->find(array($request->getParameter('curso_programado_curso_id'),
                         $request->getParameter('curso_programado_institucion_id'),
                         $request->getParameter('curso_programado_periodo_academico_id'),
                         $request->getParameter('estudiante_id'))), sprintf('Object matricula does not exist (%s).', $request->getParameter('curso_programado_curso_id'),
                         $request->getParameter('curso_programado_institucion_id'),
                         $request->getParameter('curso_programado_periodo_academico_id'),
                         $request->getParameter('estudiante_id')));
    $this->form = new MatriculaForm($matricula);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($matricula = Doctrine_Core::getTable('Matricula')->find(array($request->getParameter('curso_programado_curso_id'),
                         $request->getParameter('curso_programado_institucion_id'),
                         $request->getParameter('curso_programado_periodo_academico_id'),
                         $request->getParameter('estudiante_id'))), sprintf('Object matricula does not exist (%s).', $request->getParameter('curso_programado_curso_id'),
                         $request->getParameter('curso_programado_institucion_id'),
                         $request->getParameter('curso_programado_periodo_academico_id'),
                         $request->getParameter('estudiante_id')));
    $matricula->delete();

    $this->redirect('matricula/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $matricula = $form->save();

      $this->redirect('matricula/edit?curso_programado_curso_id='.$matricula->getCursoProgramadoCursoId().'&curso_programado_institucion_id='.$matricula->getCursoProgramadoInstitucionId().'&curso_programado_periodo_academico_id='.$matricula->getCursoProgramadoPeriodoAcademicoId().'&estudiante_id='.$matricula->getEstudianteId());
    }
  }
}
