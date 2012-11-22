<?php /*@var $Afiliado Afiliado */    ?>
<h1>Lista de Afiliados</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Apellido y Nombre</th>
      <th>Tipo Documento</th>
      <th>Documento N°</th>
      <th>Fecha de Nacimiento</th>
      <th>Localidad</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Afiliados as $Afiliado): ?>
    <tr>
      <td><a href="<?php echo url_for('afiliado/show?id='.$Afiliado->getId()) ?>"><?php echo $Afiliado->getId() ?></a></td>
      <td><?php echo $Afiliado->getApenombre() ?></td>
      <td><?php echo $Afiliado->getTipodoc()->getDescripcion() ?></td>
      <td><?php echo $Afiliado->getNroDoc() ?></td>
      <td><?php echo $Afiliado->getFechanac() ?></td>
      <td><?php echo $Afiliado->getLocalidad()->getDescripcion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('afiliado/new') ?>">Nuevo Afiliado</a>
  <a href="<?php echo url_for('afiliado/buscarAfiliado') ?>">Buscar otro</a>