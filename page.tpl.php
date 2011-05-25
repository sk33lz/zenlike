<?php
// $Id: page.tpl.php $
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
  zenlike1.0 by nodethirtythree design
  http://www.nodethirtythree.com
  Drupal 6 Theme by Arbor Web Development
  http://arborwebdevelopment.com
-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
  <?php print $head ?>
  <title><?php print $head_title ?></title>
  <?php print $styles ?>
  <?php print $scripts ?>
</head>
<body>
<div id="upbg"></div>
<div id="outer">
	<div id="header">
		<div id="headercontent">
			<?php if ($logo) : ?>
        <a class='site-logo' href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><img src="<?php print($logo) ?>" alt="<?php print t('Home') ?>" border="0" /></a>
      <?php endif; ?>
      <?php if ($site_name) : ?>
        <div class='site-name'><h1><a href="<?php print $front_page ?>" title="<?php print t('Home') ?>"><?php print($site_name) ?></a></h1></div>
      <?php endif;?>
      <?php if ($site_slogan) : ?>
        <div class='site-slogan'><h2 class='site-slogan'><?php print($site_slogan) ?></h2></div>
      <?php endif;?>
		</div>
	</div>
	<div id="headerpic"></div>
    <?php print $search_box ?>
	<div id="menu">
		 <?php if ($primary_links): ?>
  <div id="primary-menu">
    <?php print $primary_links_tree; ?>
  </div><!-- /primary_menu -->
<?php endif; ?>
	</div>
	<div id="menubottom"></div>
	<div id="content">
		<!-- Normal content: Stuff that's not going to be put in the left or right column. -->
		<div id="normalcontent">
			<div class="contentarea">
				<?php print $breadcrumb; ?>
				<?php if ($mission): print '<div id="mission">'. $mission .'</div>' .'<br />' . '<div class="divider1"></div>'; 
				endif; ?>
				<?php if ($tabs): print '<div id="tabs-wrapper" class="clear-block">'; endif; ?>
				<?php if ($title): print '<h2'. ($tabs ? ' class="with-tabs"' : '') .'>'. $title .'</h2>'; endif; ?>
				<?php if ($tabs): print '<ul class="tabs primary">'. $tabs .'</ul></div>'; endif; ?>
				<?php if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; ?>
				<?php if ($show_messages && $messages): print $messages; endif; ?>
				<?php print $help; ?>								
    <!-- Primary content: Stuff that goes in the primary content column (by default, the left column) -->
		<div id="primarycontainer">
			<div id="primarycontent">
			<!-- Primary content area start -->
				<div class="clear-block">
		      <?php print $content ?>
				</div>
				  <?php print $feed_icons ?>
			<!-- Primary content area end -->
			</div>
		</div>
		<!-- Secondary content: Stuff that goes in the secondary content column (by default, the narrower right column) -->
		<div id="secondarycontent">
			<!-- Secondary content area start -->
			<!-- HINT: All Blocks in the Left Sidebar get a box around them -->
			<!-- Build Boxed Column -->
			<?php if ($left): ?>
        <div id="sidebar-left" class="sidebar">
          <?php print $left ?>
        </div>
      <?php endif; ?>
      <!-- Build Unboxed Column -->
			<?php if ($right): ?>
        <div id="sidebar-right" class="sidebar">
          <?php print $right ?>
        </div>
      <?php endif; ?>
		 <!-- Secondary content area end -->
		   </div>
	   </div>			
		</div>
	</div>
  <div id="footer">
    <div class="left"><?php print $footer_message . $footer ?></div>
    <div class="right"><a href="http://drupalservers.net" title="Drupal 6 Themes">Drupal 6 Themes by <a href="http://arborwebdevelopment.com" title"Arbor Web Development">Arbor Web Development</a> | Original Template by <a href="http://nodethirtythree.com" title="Node Thirty Three Design" rel="nofollow">NodeThirtyThree Design</a> and <a href="http://freecsstemplates.org" title="Free CSS Templates" rel="nofollow">Free CSS Templates</a>
    </div>
  </div>
</div>
<?php print $closure ?>
</body>
</html>
