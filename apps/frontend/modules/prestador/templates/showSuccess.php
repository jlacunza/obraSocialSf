<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $Prestador->getId() ?></td>
    </tr>
    <tr>
      <th>Apenom:</th>
      <td><?php echo $Prestador->getApenom() ?></td>
    </tr>
    <tr>
      <th>Calle:</th>
      <td><?php echo $Prestador->getCalle() ?></td>
    </tr>
    <tr>
      <th>Numero:</th>
      <td><?php echo $Prestador->getNumero() ?></td>
    </tr>
    <tr>
      <th>Piso:</th>
      <td><?php echo $Prestador->getPiso() ?></td>
    </tr>
    <tr>
      <th>Depto:</th>
      <td><?php echo $Prestador->getDepto() ?></td>
    </tr>
    <tr>
      <th>Localidad:</th>
      <td><?php echo $Prestador->getLocalidadId() ?></td>
    </tr>
    <tr>
      <th>Especialidad:</th>
      <td><?php echo $Prestador->getEspecialidadId() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('prestador/edit?id='.$Prestador->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('prestador/index') ?>">List</a>
