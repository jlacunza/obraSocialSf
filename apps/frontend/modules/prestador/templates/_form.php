<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('prestador/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('prestador/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'prestador/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['apenom']->renderLabel() ?></th>
        <td>
          <?php echo $form['apenom']->renderError() ?>
          <?php echo $form['apenom'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['calle']->renderLabel() ?></th>
        <td>
          <?php echo $form['calle']->renderError() ?>
          <?php echo $form['calle'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['numero']->renderLabel() ?></th>
        <td>
          <?php echo $form['numero']->renderError() ?>
          <?php echo $form['numero'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['piso']->renderLabel() ?></th>
        <td>
          <?php echo $form['piso']->renderError() ?>
          <?php echo $form['piso'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['depto']->renderLabel() ?></th>
        <td>
          <?php echo $form['depto']->renderError() ?>
          <?php echo $form['depto'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['localidad_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['localidad_id']->renderError() ?>
          <?php echo $form['localidad_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['especialidad_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['especialidad_id']->renderError() ?>
          <?php echo $form['especialidad_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['centroatencion_has_prestador_list']->renderLabel() ?></th>
        <td>
          <?php echo $form['centroatencion_has_prestador_list']->renderError() ?>
          <?php echo $form['centroatencion_has_prestador_list'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
