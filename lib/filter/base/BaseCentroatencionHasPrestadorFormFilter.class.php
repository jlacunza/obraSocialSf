<?php

/**
 * CentroatencionHasPrestador filter form base class.
 *
 * @package    obraSocial
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseCentroatencionHasPrestadorFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
    ));

    $this->setValidators(array(
    ));

    $this->widgetSchema->setNameFormat('centroatencion_has_prestador_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'CentroatencionHasPrestador';
  }

  public function getFields()
  {
    return array(
      'centroatencion_id' => 'ForeignKey',
      'prestador_id'      => 'ForeignKey',
    );
  }
}
