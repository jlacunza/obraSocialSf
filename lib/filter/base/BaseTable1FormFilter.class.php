<?php

/**
 * Table1 filter form base class.
 *
 * @package    obraSocial
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseTable1FormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'user'                   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'password'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'table1_has_table1_list' => new sfWidgetFormPropelChoice(array('model' => 'Table1', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'user'                   => new sfValidatorPass(array('required' => false)),
      'password'               => new sfValidatorPass(array('required' => false)),
      'table1_has_table1_list' => new sfValidatorPropelChoice(array('model' => 'Table1', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('table1_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function addTable1HasTable1ListColumnCriteria(Criteria $criteria, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $criteria->addJoin(Table1HasTable1Peer::TABLE1_ID1, Table1Peer::ID);

    $value = array_pop($values);
    $criterion = $criteria->getNewCriterion(Table1HasTable1Peer::TABLE1_ID1, $value);

    foreach ($values as $value)
    {
      $criterion->addOr($criteria->getNewCriterion(Table1HasTable1Peer::TABLE1_ID1, $value));
    }

    $criteria->add($criterion);
  }

  public function getModelName()
  {
    return 'Table1';
  }

  public function getFields()
  {
    return array(
      'id'                     => 'Number',
      'user'                   => 'Text',
      'password'               => 'Text',
      'table1_has_table1_list' => 'ManyKey',
    );
  }
}
