<?php

/**
 * afiliado actions.
 *
 * @package    obraSocial
 * @subpackage afiliado
 * @author     Your name here
 */
class afiliadoActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    //$this->Afiliados = AfiliadoQuery::create()->find();
      
      $ApeyNom = $request->getParameter('apeynom');
   
       if (!empty($ApeyNom)) {
          $this->Afiliados = AfiliadoQuery::create()->filterByApenombre('%'.$ApeyNom.'%')
                  ->joinWithTipodoc()
                  ->joinWithLocalidad()
                  ->find();
       }else{
           $this->Afiliados = AfiliadoQuery::create()
                  ->joinWithTipodoc()
                  ->joinWithLocalidad()
                  ->find();
       }
      
      
      
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->Afiliado = AfiliadoPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->Afiliado);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new AfiliadoForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new AfiliadoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Afiliado = AfiliadoQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Afiliado, sprintf('Object Afiliado does not exist (%s).', $request->getParameter('id')));
    $this->form = new AfiliadoForm($Afiliado);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Afiliado = AfiliadoQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Afiliado, sprintf('Object Afiliado does not exist (%s).', $request->getParameter('id')));
    $this->form = new AfiliadoForm($Afiliado);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Afiliado = AfiliadoQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Afiliado, sprintf('Object Afiliado does not exist (%s).', $request->getParameter('id')));
    $Afiliado->delete();

    $this->redirect('afiliado/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Afiliado = $form->save();

      $this->redirect('afiliado/edit?id='.$Afiliado->getId());
    }
  }
  
  public function executeBuscarAfiliado(sfWebRequest $request){
      
      
  }
          

}
