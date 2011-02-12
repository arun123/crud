<?php

/**
 * form actions.
 *
 * @package    crud
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class formActions extends sfActions
{
public function executeIndex(sfWebRequest $request)
  {
    $this->pages = Doctrine::getTable('page')->findAll();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new myForm(array('name' => 'arun','email'=>'email@email.com'));
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->form = new myForm(array('name' => 'arun','email'=>'email@email.com'));
    $this->processForm($request, $this->form);
    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->form = new myForm(Doctrine::getTable('page')->findOneById($request->getParameter('id')));
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->form = new myForm(Doctrine::getTable('page')->findOneById($request->getParameter('id')));
    $this->processForm($request, $this->form);
    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    try
    {
      $item = Doctrine::getTable('page')->findById($request->getParameter('id'));
      $item->delete();
    }
    catch(Exception $e){}

    $this->redirect('@form');

  }

  public function executeShow(sfWebRequest $request)
  {
    $this->country = Doctrine::getTable('page')->findOneById($request->getParameter('id'));
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));

    if ($form->isValid())
    {
      $item = $form->save();
      $this->redirect('@form');
    }
  }
      
}
