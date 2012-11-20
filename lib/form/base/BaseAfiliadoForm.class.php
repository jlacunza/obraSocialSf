<?php

/**
 * Afiliado form base class.
 *
 * @method Afiliado getObject() Returns the current form's model object
 *
 * @package    obraSocial
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseAfiliadoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'nro_doc'        => new sfWidgetFormInputText(),
      'apenombre'      => new sfWidgetFormInputText(),
      'fechanac'       => new sfWidgetFormDate(),
      'calle'          => new sfWidgetFormInputText(),
      'altura'         => new sfWidgetFormInputText(),
      'piso'           => new sfWidgetFormInputText(),
      'depto'          => new sfWidgetFormInputText(),
      'plan_id'        => new sfWidgetFormPropelChoice(array('model' => 'Plan', 'add_empty' => false)),
      'tipodoc_id'     => new sfWidgetFormPropelChoice(array('model' => 'Tipodoc', 'add_empty' => false)),
      'reparticion_id' => new sfWidgetFormPropelChoice(array('model' => 'Reparticion', 'add_empty' => false)),
      'localidad_id'   => new sfWidgetFormPropelChoice(array('model' => 'Localidad', 'add_empty' => false)),
      'fechaingreso'   => new sfWidgetFormDate(),
      'sexo_id'        => new sfWidgetFormPropelChoice(array('model' => 'Sexo', 'add_empty' => false)),
      'estadocivil_id' => new sfWidgetFormPropelChoice(array('model' => 'Estadocivil', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'nro_doc'        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'apenombre'      => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'fechanac'       => new sfValidatorDate(array('required' => false)),
      'calle'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'altura'         => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'piso'           => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'depto'          => new sfValidatorString(array('required' => false)),
      'plan_id'        => new sfValidatorPropelChoice(array('model' => 'Plan', 'column' => 'id')),
      'tipodoc_id'     => new sfValidatorPropelChoice(array('model' => 'Tipodoc', 'column' => 'id')),
      'reparticion_id' => new sfValidatorPropelChoice(array('model' => 'Reparticion', 'column' => 'id')),
      'localidad_id'   => new sfValidatorPropelChoice(array('model' => 'Localidad', 'column' => 'id')),
      'fechaingreso'   => new sfValidatorDate(array('required' => false)),
      'sexo_id'        => new sfValidatorPropelChoice(array('model' => 'Sexo', 'column' => 'id')),
      'estadocivil_id' => new sfValidatorPropelChoice(array('model' => 'Estadocivil', 'column' => 'id')),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Afiliado', 'column' => array('nro_doc')))
    );

    $this->widgetSchema->setNameFormat('afiliado[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Afiliado';
  }


}
