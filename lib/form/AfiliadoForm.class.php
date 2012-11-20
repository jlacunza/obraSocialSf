<?php

/**
 * Afiliado form.
 *
 * @package    obraSocial
 * @subpackage form
 * @author     Your name here
 */
class AfiliadoForm extends BaseAfiliadoForm
{
  public function configure()
  {
      $rango = range(date('Y'), date('Y')-100);
      $aniosnac = array_combine($rango, $rango);
      
      $this->widgetSchema['fechanac']->setOption('format','%day%/%month%/%year%');
      $this->widgetSchema['fechanac']->setOption('years',$aniosnac);
      
      $this->validatorSchema['fechanac']->setOption('max',date("y-m-d"));
      $this->validatorSchema['fechanac']->setOption('max','fecha futura no valida');
  }
}
