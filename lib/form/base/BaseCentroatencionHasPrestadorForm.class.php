<?php

/**
 * CentroatencionHasPrestador form base class.
 *
 * @method CentroatencionHasPrestador getObject() Returns the current form's model object
 *
 * @package    obraSocial
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseCentroatencionHasPrestadorForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'centroatencion_id' => new sfWidgetFormInputHidden(),
      'prestador_id'      => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'centroatencion_id' => new sfValidatorPropelChoice(array('model' => 'Centroatencion', 'column' => 'id', 'required' => false)),
      'prestador_id'      => new sfValidatorPropelChoice(array('model' => 'Prestador', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('centroatencion_has_prestador[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CentroatencionHasPrestador';
  }


}
