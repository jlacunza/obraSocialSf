<?php /*@var $Afiliado Afiliado */    ?>
<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $Afiliado->getId() ?></td>
    </tr>
    <tr>
      <th>Apellido y Nombre:</th>
      <td><?php echo $Afiliado->getApenombre() ?></td>
    </tr>
    <tr>
      <th>Tipo de Documento:</th>
      <td><?php echo $Afiliado->getTipodoc()->getDescripcion() ?></td>
    </tr>
    <tr>
      <th>Documento N°:</th>
      <td><?php echo $Afiliado->getNroDoc() ?></td>
    </tr>
    <tr>
      <th>Fecha de Nacimiento:</th>
      <td><?php echo $Afiliado->getFechanac() ?></td>
    </tr>
    <tr>
      <th>Calle:</th>
      <td><?php echo $Afiliado->getCalle() ?></td>
    </tr>
    <tr>
      <th>N°:</th>
      <td><?php echo $Afiliado->getAltura() ?></td>
    </tr>
    <tr>
      <th>Piso:</th>
      <td><?php echo $Afiliado->getPiso() ?></td>
    </tr>
    <tr>
      <th>Depto:</th>
      <td><?php echo $Afiliado->getDepto() ?></td>
    </tr>
    <tr>
      <th>Localidad:</th>
      <td><?php echo $Afiliado->getLocalidad()->getDescripcion() ?></td>
    </tr>
    <tr>
      <th>Plan Tipo:</th>
      <td><?php echo $Afiliado->getPlan()->getDescripcion() ?></td>
    </tr>
    <tr>
      <th>Reparticion:</th>
      <td><?php echo $Afiliado->getReparticion()->getDescripcion() ?></td>
    </tr>
    <tr>
      <th>Fecha de ingreso:</th>
      <td><?php echo $Afiliado->getFechaingreso() ?></td>
    </tr>
    <tr>
      <th>Sexo:</th>
      <td><?php echo $Afiliado->getSexo()->getDescripcion() ?></td>
    </tr>
    <tr>
      <th>Estado Civil:</th>
      <td><?php echo $Afiliado->getEstadocivil()->getDescripcion() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('afiliado/edit?id='.$Afiliado->getId()) ?>">Modificar</a>
&nbsp;
<a href="<?php echo url_for('afiliado/index') ?>">Volver a la lista</a>
