<?php

/**
 * Table1HasTable1 form base class.
 *
 * @method Table1HasTable1 getObject() Returns the current form's model object
 *
 * @package    obraSocial
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTable1HasTable1Form extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'table1_id'  => new sfWidgetFormInputHidden(),
      'table1_id1' => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'table1_id'  => new sfValidatorPropelChoice(array('model' => 'Table1', 'column' => 'id', 'required' => false)),
      'table1_id1' => new sfValidatorPropelChoice(array('model' => 'Table1', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('table1_has_table1[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Table1HasTable1';
  }


}
