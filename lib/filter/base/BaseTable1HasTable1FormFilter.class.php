<?php

/**
 * Table1HasTable1 filter form base class.
 *
 * @package    obraSocial
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseTable1HasTable1FormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
    ));

    $this->setValidators(array(
    ));

    $this->widgetSchema->setNameFormat('table1_has_table1_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Table1HasTable1';
  }

  public function getFields()
  {
    return array(
      'table1_id'  => 'ForeignKey',
      'table1_id1' => 'ForeignKey',
    );
  }
}
