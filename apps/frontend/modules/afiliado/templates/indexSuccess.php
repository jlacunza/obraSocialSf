<h1>Afiliados List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nro doc</th>
      <th>Apenombre</th>
      <th>Fechanac</th>
      <th>Calle</th>
      <th>Altura</th>
      <th>Piso</th>
      <th>Depto</th>
      <th>Plan</th>
      <th>Tipodoc</th>
      <th>Reparticion</th>
      <th>Localidad</th>
      <th>Fechaingreso</th>
      <th>Sexo</th>
      <th>Estadocivil</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Afiliados as $Afiliado): ?>
    <tr>
      <td><a href="<?php echo url_for('afiliado/show?id='.$Afiliado->getId()) ?>"><?php echo $Afiliado->getId() ?></a></td>
      <td><?php echo $Afiliado->getNroDoc() ?></td>
      <td><?php echo $Afiliado->getApenombre() ?></td>
      <td><?php echo $Afiliado->getFechanac() ?></td>
      <td><?php echo $Afiliado->getCalle() ?></td>
      <td><?php echo $Afiliado->getAltura() ?></td>
      <td><?php echo $Afiliado->getPiso() ?></td>
      <td><?php echo $Afiliado->getDepto() ?></td>
      <td><?php echo $Afiliado->getPlanId() ?></td>
      <td><?php echo $Afiliado->getTipodocId() ?></td>
      <td><?php echo $Afiliado->getReparticionId() ?></td>
      <td><?php echo $Afiliado->getLocalidadId() ?></td>
      <td><?php echo $Afiliado->getFechaingreso() ?></td>
      <td><?php echo $Afiliado->getSexoId() ?></td>
      <td><?php echo $Afiliado->getEstadocivilId() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('afiliado/new') ?>">New</a>
