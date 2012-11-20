<?php

/**
 * Afiliado filter form base class.
 *
 * @package    obraSocial
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseAfiliadoFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nro_doc'        => new sfWidgetFormFilterInput(),
      'apenombre'      => new sfWidgetFormFilterInput(),
      'fechanac'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'calle'          => new sfWidgetFormFilterInput(),
      'altura'         => new sfWidgetFormFilterInput(),
      'piso'           => new sfWidgetFormFilterInput(),
      'depto'          => new sfWidgetFormFilterInput(),
      'plan_id'        => new sfWidgetFormPropelChoice(array('model' => 'Plan', 'add_empty' => true)),
      'tipodoc_id'     => new sfWidgetFormPropelChoice(array('model' => 'Tipodoc', 'add_empty' => true)),
      'reparticion_id' => new sfWidgetFormPropelChoice(array('model' => 'Reparticion', 'add_empty' => true)),
      'localidad_id'   => new sfWidgetFormPropelChoice(array('model' => 'Localidad', 'add_empty' => true)),
      'fechaingreso'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'sexo_id'        => new sfWidgetFormPropelChoice(array('model' => 'Sexo', 'add_empty' => true)),
      'estadocivil_id' => new sfWidgetFormPropelChoice(array('model' => 'Estadocivil', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'nro_doc'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'apenombre'      => new sfValidatorPass(array('required' => false)),
      'fechanac'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'calle'          => new sfValidatorPass(array('required' => false)),
      'altura'         => new sfValidatorPass(array('required' => false)),
      'piso'           => new sfValidatorPass(array('required' => false)),
      'depto'          => new sfValidatorPass(array('required' => false)),
      'plan_id'        => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Plan', 'column' => 'id')),
      'tipodoc_id'     => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Tipodoc', 'column' => 'id')),
      'reparticion_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Reparticion', 'column' => 'id')),
      'localidad_id'   => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Localidad', 'column' => 'id')),
      'fechaingreso'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'sexo_id'        => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Sexo', 'column' => 'id')),
      'estadocivil_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Estadocivil', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('afiliado_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Afiliado';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'nro_doc'        => 'Number',
      'apenombre'      => 'Text',
      'fechanac'       => 'Date',
      'calle'          => 'Text',
      'altura'         => 'Text',
      'piso'           => 'Text',
      'depto'          => 'Text',
      'plan_id'        => 'ForeignKey',
      'tipodoc_id'     => 'ForeignKey',
      'reparticion_id' => 'ForeignKey',
      'localidad_id'   => 'ForeignKey',
      'fechaingreso'   => 'Date',
      'sexo_id'        => 'ForeignKey',
      'estadocivil_id' => 'ForeignKey',
    );
  }
}
