<h1>Prestadors List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Apellido y Nombre</th>
      <th>Calle</th>
      <th>Numero</th>
      <th>Piso</th>
      <th>Depto</th>
      <th>Localidad</th>
      <th>Especialidad</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Prestadors as $Prestador): ?>
    <tr>
      <td><a href="<?php echo url_for('prestador/show?id='.$Prestador->getId()) ?>"><?php echo $Prestador->getId() ?></a></td>
      <td><?php echo $Prestador->getApenom() ?></td>
      <td><?php echo $Prestador->getCalle() ?></td>
      <td><?php echo $Prestador->getNumero() ?></td>
      <td><?php echo $Prestador->getPiso() ?></td>
      <td><?php echo $Prestador->getDepto() ?></td>
      <td><?php echo $Prestador->getLocalidad()->getDescripcion() ?></td>
      <td><?php echo $Prestador->getEspecialidad()->getDescripcion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('prestador/new') ?>">New</a>
