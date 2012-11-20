<?php

/**
 * Usuario filter form base class.
 *
 * @package    obraSocial
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseUsuarioFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'user'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'password' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'rol_id'   => new sfWidgetFormPropelChoice(array('model' => 'Rol', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'user'     => new sfValidatorPass(array('required' => false)),
      'password' => new sfValidatorPass(array('required' => false)),
      'rol_id'   => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Rol', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('usuario_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuario';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'user'     => 'Text',
      'password' => 'Text',
      'rol_id'   => 'ForeignKey',
    );
  }
}
