<p><a class="button" href="<?php echo url_for('form_new'); ?>"><?php echo __('Add'); ?></a></p>

<?php if ($pages->count()) { ?>

<table id="items" class="tablesorter">
  <thead>
    <tr>
        <th><?php echo 'page'; ?></th>
         <th><?php echo 'body'; ?></th>
        <th></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($pages as $row) { ?>
      <tr>
          <td><?php echo $row->getName(); ?></td>
          <td><?php echo $row->getBody(); ?></td>
          <td><a href="<?php echo url_for('form_edit', $row); ?>"><?php echo __("Edit"); ?></a> <?php echo link_to('Delete', '@form_delete?id='.$row->getId(), array('method' => 'delete', 'confirm' => __('Are you sure?'), 'class' => 'delete')); ?></td>
      </tr>
    <?php } ?>
  </tbody>
</table>
<?php } ?>