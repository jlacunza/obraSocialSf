<?php

/**
 * Table1 form base class.
 *
 * @method Table1 getObject() Returns the current form's model object
 *
 * @package    obraSocial
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTable1Form extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                     => new sfWidgetFormInputHidden(),
      'user'                   => new sfWidgetFormInputText(),
      'password'               => new sfWidgetFormInputText(),
      'table1_has_table1_list' => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'Table1')),
    ));

    $this->setValidators(array(
      'id'                     => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'user'                   => new sfValidatorString(array('max_length' => 10)),
      'password'               => new sfValidatorString(array('max_length' => 10)),
      'table1_has_table1_list' => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'Table1', 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Table1', 'column' => array('user')))
    );

    $this->widgetSchema->setNameFormat('table1[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Table1';
  }


  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['table1_has_table1_list']))
    {
      $values = array();
      foreach ($this->object->getTable1HasTable1sRelatedByTable1Id1() as $obj)
      {
        $values[] = $obj->getTable1Id1();
      }

      $this->setDefault('table1_has_table1_list', $values);
    }

  }

  protected function doSave($con = null)
  {
    parent::doSave($con);

    $this->saveTable1HasTable1List($con);
  }

  public function saveTable1HasTable1List($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['table1_has_table1_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(Table1HasTable1Peer::TABLE1_ID1, $this->object->getPrimaryKey());
    Table1HasTable1Peer::doDelete($c, $con);

    $values = $this->getValue('table1_has_table1_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new Table1HasTable1();
        $obj->setTable1Id1($this->object->getPrimaryKey());
        $obj->setTable1Id1($value);
        $obj->save($con);
      }
    }
  }

}
