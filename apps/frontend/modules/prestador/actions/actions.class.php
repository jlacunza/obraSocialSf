<?php

/**
 * prestador actions.
 *
 * @package    obraSocial
 * @subpackage prestador
 * @author     Your name here
 */
class prestadorActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Prestadors = PrestadorQuery::create()->find();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->Prestador = PrestadorPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->Prestador);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new PrestadorForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new PrestadorForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Prestador = PrestadorQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Prestador, sprintf('Object Prestador does not exist (%s).', $request->getParameter('id')));
    $this->form = new PrestadorForm($Prestador);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Prestador = PrestadorQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Prestador, sprintf('Object Prestador does not exist (%s).', $request->getParameter('id')));
    $this->form = new PrestadorForm($Prestador);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Prestador = PrestadorQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Prestador, sprintf('Object Prestador does not exist (%s).', $request->getParameter('id')));
    $Prestador->delete();

    $this->redirect('prestador/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Prestador = $form->save();

      $this->redirect('prestador/edit?id='.$Prestador->getId());
    }
  }
}
