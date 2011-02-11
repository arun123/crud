<?php echo $form['_csrf_token']; ?>
<?php use_stylesheet('view.css') ?>

<div id="form_container">
  <ul >
    <li id="li_1" >
	  <?php echo $form['name']->renderLabel(__("Name"),array('class'=>'description', 'for'=>'element_1')); ?> 
		<div>
		<?php echo $form['name']->render(); ?> 
		</div><p class="guidelines" id="guide_1"><small>Name of the page</small></p> 
		</li>		<li id="li_2" >
	  <?php echo $form['layout']->renderLabel(__("Layout"),array('class'=>'description', 'for'=>'element_2')); ?>
		<div>
		<?php echo $form['layout']->render(); ?>
		</div><p class="guidelines" id="guide_2"><small>Layout of the page</small></p>
		</li>		<li id="li_3" >
	  <?php echo $form['title']->renderLabel(__("Title"),array('class'=>'description', 'for'=>'element_3')); ?> 
		<div>
			<?php echo $form['title']->render(); ?>
		</div><p class="guidelines" id="guide_3"><small>Title of the page</small></p> 
		</li>		<li id="li_4" >
	 <?php echo $form['body']->renderLabel(__("Body"),array('class'=>'description', 'for'=>'element_4')); ?>
		<div>
			 <?php echo $form['body']->render(); ?>
		</div><p class="guidelines" id="guide_4"><small>body of the page</small></p> 
		</li>		<li id="li_9" >
		 <?php echo $form['published']->renderLabel(__("Published"),array('class'=>'description', 'for'=>'element_5')); ?>
		<span>
		<?php echo $form['published']->render(); ?>
    
		</span><p class="guidelines" id="guide_9"><small>Publish the page</small></p> 
		</li>		<li id="li_5" >
	  <?php echo $form['description']->renderLabel(__("Description"),array('class'=>'description', 'for'=>'element_6')); ?> 
		<div>
			 <?php echo $form['description']->render(); ?>
		</div><p class="guidelines" id="guide_5"><small>Description about the page</small></p> 
		</li>		<li id="li_6" >
		<?php echo $form['keywords']->renderLabel(__("Keywords"),array('class'=>'description', 'for'=>'element_7')); ?> 
		<div>
			 <?php echo $form['keywords']->render(); ?>
		</div><p class="guidelines" id="guide_6"><small>Keywords</small></p> 
		</li>		<li id="li_7" >
		<?php echo $form['robots']->renderLabel(__("Robots"),array('class'=>'description', 'for'=>'element_8')); ?>
		<div>
			<?php echo $form['robots']->render(); ?>
		</div><p class="guidelines" id="guide_7"><small>Robots</small></p> 
		</li>		<li id="li_8" >
		 <?php echo $form['author']->renderLabel(__("Author"),array('class'=>'description', 'for'=>'element_5')); ?> 
		<div>
		 <?php echo $form['author']->render(); ?>
		</div><p class="guidelines" id="guide_8"><small>Author's Name</small></p> 
		</li>
		<li class="buttons">
			   <label for="submit">&nbsp;</label>
  <input type="submit" value="<?php echo __('Submit'); ?>" />
		</li>
</ul>
</div>