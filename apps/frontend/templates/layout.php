<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
</head>
 <div id="wrapper">
	<div id="top">
		<div id="logo">
		</div>
		<div id="nav">
			<ul>
			  <li class="active"><?php echo link_to('Home', '/') ?></li>
			  <li><?php echo link_to('pages', 'pages') ?></li>
			  
				<li><a href="#">Services</a></li>
				<li><a href="#">Contact</a></li>
				<?php if ($sf_user->isAuthenticated()): ?>
			  <li><?php echo link_to('Logout', 'sf_guard_signout') ?></li>
			  <?php endif ?>
			</ul>
		</div>
	</div>
	
    <?php echo $sf_content ?>
   
    <div id="footer_lt">
    </div>
    <div id="footer">
    <div id="f_logo">
    </div>
    <div id="copyright">
    <p> &copy; 2009 - PSDTemplate.com. All rights reserved. </p>
    </div>
    
    <div id="rss">
    </div>
    </div>
    <div id="footer_rt">
    </div>
 </div>
<body>
</body>
</html>
