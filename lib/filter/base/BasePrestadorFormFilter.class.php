<?php

/**
 * Prestador filter form base class.
 *
 * @package    obraSocial
 * @subpackage filter
 * @author     Your name here
 */
abstract class BasePrestadorFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'apenom'                            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'calle'                             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'numero'                            => new sfWidgetFormFilterInput(),
      'piso'                              => new sfWidgetFormFilterInput(),
      'depto'                             => new sfWidgetFormFilterInput(),
      'localidad_id'                      => new sfWidgetFormPropelChoice(array('model' => 'Localidad', 'add_empty' => true)),
      'especialidad_id'                   => new sfWidgetFormPropelChoice(array('model' => 'Especialidad', 'add_empty' => true)),
      'centroatencion_has_prestador_list' => new sfWidgetFormPropelChoice(array('model' => 'Centroatencion', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'apenom'                            => new sfValidatorPass(array('required' => false)),
      'calle'                             => new sfValidatorPass(array('required' => false)),
      'numero'                            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'piso'                              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'depto'                             => new sfValidatorPass(array('required' => false)),
      'localidad_id'                      => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Localidad', 'column' => 'id')),
      'especialidad_id'                   => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Especialidad', 'column' => 'id')),
      'centroatencion_has_prestador_list' => new sfValidatorPropelChoice(array('model' => 'Centroatencion', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('prestador_filters[%s]');

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

    $criteria->addJoin(CentroatencionHasPrestadorPeer::PRESTADOR_ID, PrestadorPeer::ID);

    $value = array_pop($values);
    $criterion = $criteria->getNewCriterion(CentroatencionHasPrestadorPeer::CENTROATENCION_ID, $value);

    foreach ($values as $value)
    {
      $criterion->addOr($criteria->getNewCriterion(CentroatencionHasPrestadorPeer::CENTROATENCION_ID, $value));
    }

    $criteria->add($criterion);
  }

  public function getModelName()
  {
    return 'Prestador';
  }

  public function getFields()
  {
    return array(
      'id'                                => 'Number',
      'apenom'                            => 'Text',
      'calle'                             => 'Text',
      'numero'                            => 'Number',
      'piso'                              => 'Number',
      'depto'                             => 'Text',
      'localidad_id'                      => 'ForeignKey',
      'especialidad_id'                   => 'ForeignKey',
      'centroatencion_has_prestador_list' => 'ManyKey',
    );
  }
}
