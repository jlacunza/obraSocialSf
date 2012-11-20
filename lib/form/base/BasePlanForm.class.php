<?php

/**
 * Plan form base class.
 *
 * @method Plan getObject() Returns the current form's model object
 *
 * @package    obraSocial
 * @subpackage form
 * @author     Your name here
 */
abstract class BasePlanForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'descripcion' => new sfWidgetFormInputText(),
      'descuento'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'descripcion' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'descuento'   => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorPropelUnique(array('model' => 'Plan', 'column' => array('descripcion'))),
        new sfValidatorPropelUnique(array('model' => 'Plan', 'column' => array('descuento'))),
      ))
    );

    $this->widgetSchema->setNameFormat('plan[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Plan';
  }


}
