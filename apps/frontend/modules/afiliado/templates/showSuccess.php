<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $Afiliado->getId() ?></td>
    </tr>
    <tr>
      <th>Nro doc:</th>
      <td><?php echo $Afiliado->getNroDoc() ?></td>
    </tr>
    <tr>
      <th>Apenombre:</th>
      <td><?php echo $Afiliado->getApenombre() ?></td>
    </tr>
    <tr>
      <th>Fechanac:</th>
      <td><?php echo $Afiliado->getFechanac() ?></td>
    </tr>
    <tr>
      <th>Calle:</th>
      <td><?php echo $Afiliado->getCalle() ?></td>
    </tr>
    <tr>
      <th>Altura:</th>
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
      <th>Plan:</th>
      <td><?php echo $Afiliado->getPlanId() ?></td>
    </tr>
    <tr>
      <th>Tipodoc:</th>
      <td><?php echo $Afiliado->getTipodocId() ?></td>
    </tr>
    <tr>
      <th>Reparticion:</th>
      <td><?php echo $Afiliado->getReparticionId() ?></td>
    </tr>
    <tr>
      <th>Localidad:</th>
      <td><?php echo $Afiliado->getLocalidadId() ?></td>
    </tr>
    <tr>
      <th>Fechaingreso:</th>
      <td><?php echo $Afiliado->getFechaingreso() ?></td>
    </tr>
    <tr>
      <th>Sexo:</th>
      <td><?php echo $Afiliado->getSexoId() ?></td>
    </tr>
    <tr>
      <th>Estadocivil:</th>
      <td><?php echo $Afiliado->getEstadocivilId() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('afiliado/edit?id='.$Afiliado->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('afiliado/index') ?>">List</a>
