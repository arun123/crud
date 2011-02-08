<p><a class="button" href="<?php echo url_for('pages_new'); ?>"><?php echo __('Add'); ?></a></p>

<?php if ($pages->count()) { ?>

<table id="items" class="tablesorter">
  <thead>
    <tr>
        <th><?php echo ''; ?></th>
        <th></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($pages as $row) { ?>
      <tr>
          <td><?php echo ''; ?></td>
          <td><a href="<?php echo url_for('pages_edit', $row); ?>"><?php echo __("Edit"); ?></a> <?php echo link_to('Delete', '@pages_delete?id='.$row->getId(), array('method' => 'delete', 'confirm' => __('Are you sure?'), 'class' => 'delete')); ?></td>
      </tr>
    <?php } ?>
  </tbody>
</table>
<?php } ?>