<div id="content_form">
<fieldset class="form_css">
  <form action="<?php echo url_for('pages_update', array('id' => $sf_params->get('id'))); ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data"' ?>>
    <ul class="form_css">
     <li>
      <input type="hidden" name="sf_method" value="put" />
      <?php echo $form['id']; ?>
      <?php include_partial('form', array('form' => $form)); ?>
    </li>
    </ul>
  </form>
</fieldset>
</div>