<?php if ($sf_user->isAuthenticated()): ?>
<div id="menu">
<ul>
<li><?php echo link_to('New page ', 'pages_new') ?></li>
<li><?php echo link_to('Logout', 'sf_guard_signout') ?></li>
</ul>
</div>
<?php endif ?>


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
          <td><a href="<?php echo url_for('pages_edit', $row); ?>"><?php echo __("Edit"); ?></a> <?php echo link_to('Delete', '@pages_delete?id='.$row->getId(), array('method' => 'delete', 'confirm' => __('Are you sure?'), 'class' => 'delete')); ?></td>
      </tr>
    <?php } ?>
  </tbody>
</table>
<?php } ?>