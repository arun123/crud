<div id="content">
<?php if ($sf_user->isAuthenticated()): ?>
<div id="menu">
</div>
<?php endif ?>


<?php if ($pages->count()) { ?>
<div id="tab">
<table id="hor-minimalist-b" class="tablesorter">
  <thead>
    <tr>
        <th scope="col"><?php echo 'page'; ?></th>
        <th scope="col"><?php echo 'body'; ?></th>
        <th scope="col"><?php echo 'process'; ?></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($pages as $row) { ?>
      <tr>
          <td><?php echo $row->getName(); ?></td>
          <td><?php echo $row->getBody(); ?></td>
          <td><?php echo link_to(image_tag('edit.png','size=15x15'), 'pages_edit',$row) ?>
             <?php echo link_to(image_tag('add.png','size=15x15'), 'pages_new') ?>
            <?php echo link_to(image_tag('delete.png','size=20x18'), '@pages_delete?id='.$row->getId(), array('method' => 'delete', 'confirm' => __('Are you sure?'), 'class' => 'delete')); ?>
           
          </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
</div>
<?php } ?>
</div>