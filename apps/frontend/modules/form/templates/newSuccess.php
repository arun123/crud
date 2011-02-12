  <form action="<?php echo url_for('form_create'); ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data"' ?>>
  <table>
      <?php include_partial('form', array('form' => $form)); ?>
  </table>
</fieldset>