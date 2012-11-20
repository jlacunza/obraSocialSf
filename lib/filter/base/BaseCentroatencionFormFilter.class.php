<?php

/**
 * Centroatencion filter form base class.
 *
 * @package    obraSocial
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseCentroatencionFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'                            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'calle'                             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'numero'                            => new sfWidgetFormFilterInput(),
      'depto'                             => new sfWidgetFormFilterInput(),
      'piso'                              => new sfWidgetFormFilterInput(),
      'localidad_id'                      => new sfWidgetFormPropelChoice(array('model' => 'Localidad', 'add_empty' => true)),
      'centroatencion_has_prestador_list' => new sfWidgetFormPropelChoice(array('model' => 'Prestador', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'nombre'                            => new sfValidatorPass(array('required' => false)),
      'calle'                             => new sfValidatorPass(array('required' => false)),
      'numero'                            => new sfValidatorPass(array('required' => false)),
      'depto'                             => new sfValidatorPass(array('required' => false)),
      'piso'                              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'localidad_id'                      => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Localidad', 'column' => 'id')),
      'centroatencion_has_prestador_list' => new sfValidatorPropelChoice(array('model' => 'Prestador', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('centroatencion_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function addCentroatencionHasPrestadorListColumnCriteria(Criteria $criteria, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $criteria->addJoin(CentroatencionHasPrestadorPeer::CENTROATENCION_ID, CentroatencionPeer::ID);

    $value = array_pop($values);
    $criterion = $criteria->getNewCriterion(CentroatencionHasPrestadorPeer::PRESTADOR_ID, $value);

    foreach ($values as $value)
    {
      $criterion->addOr($criteria->getNewCriterion(CentroatencionHasPrestadorPeer::PRESTADOR_ID, $value));
    }

    $criteria->add($criterion);
  }

  public function getModelName()
  {
    return 'Centroatencion';
  }

  public function getFields()
  {
    return array(
      'id'                                => 'Number',
      'nombre'                            => 'Text',
      'calle'                             => 'Text',
      'numero'                            => 'Text',
      'depto'                             => 'Text',
      'piso'                              => 'Number',
      'localidad_id'                      => 'ForeignKey',
      'centroatencion_has_prestador_list' => 'ManyKey',
    );
  }
}
