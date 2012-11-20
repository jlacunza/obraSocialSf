<?php

/**
 * Prestador form base class.
 *
 * @method Prestador getObject() Returns the current form's model object
 *
 * @package    obraSocial
 * @subpackage form
 * @author     Your name here
 */
abstract class BasePrestadorForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                                => new sfWidgetFormInputHidden(),
      'apenom'                            => new sfWidgetFormInputText(),
      'calle'                             => new sfWidgetFormInputText(),
      'numero'                            => new sfWidgetFormInputText(),
      'piso'                              => new sfWidgetFormInputText(),
      'depto'                             => new sfWidgetFormInputText(),
      'localidad_id'                      => new sfWidgetFormPropelChoice(array('model' => 'Localidad', 'add_empty' => false)),
      'especialidad_id'                   => new sfWidgetFormPropelChoice(array('model' => 'Especialidad', 'add_empty' => false)),
      'centroatencion_has_prestador_list' => new sfWidgetFormPropelChoice(array('multiple' => true, 'model' => 'Centroatencion')),
    ));

    $this->setValidators(array(
      'id'                                => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'apenom'                            => new sfValidatorString(array('max_length' => 45)),
      'calle'                             => new sfValidatorString(array('max_length' => 100)),
      'numero'                            => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'piso'                              => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'depto'                             => new sfValidatorString(array('max_length' => 4, 'required' => false)),
      'localidad_id'                      => new sfValidatorPropelChoice(array('model' => 'Localidad', 'column' => 'id')),
      'especialidad_id'                   => new sfValidatorPropelChoice(array('model' => 'Especialidad', 'column' => 'id')),
      'centroatencion_has_prestador_list' => new sfValidatorPropelChoice(array('multiple' => true, 'model' => 'Centroatencion', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('prestador[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Prestador';
  }


  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['centroatencion_has_prestador_list']))
    {
      $values = array();
      foreach ($this->object->getCentroatencionHasPrestadors() as $obj)
      {
        $values[] = $obj->getCentroatencionId();
      }

      $this->setDefault('centroatencion_has_prestador_list', $values);
    }

  }

  protected function doSave($con = null)
  {
    parent::doSave($con);

    $this->saveCentroatencionHasPrestadorList($con);
  }

  public function saveCentroatencionHasPrestadorList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['centroatencion_has_prestador_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $c = new Criteria();
    $c->add(CentroatencionHasPrestadorPeer::PRESTADOR_ID, $this->object->getPrimaryKey());
    CentroatencionHasPrestadorPeer::doDelete($c, $con);

    $values = $this->getValue('centroatencion_has_prestador_list');
    if (is_array($values))
    {
      foreach ($values as $value)
      {
        $obj = new CentroatencionHasPrestador();
        $obj->setPrestadorId($this->object->getPrimaryKey());
        $obj->setCentroatencionId($value);
        $obj->save($con);
      }
    }
  }

}
