<?php
//kpr(get_defined_vars());
//kpr($theme_hook_suggestions);
//template naming
//page--[CONTENT TYPE].tpl.php
?>
<?php if( theme_get_setting('mothership_poorthemers_helper') ){ ?>
<!--page-front.tpl.php-->
<?php } ?>

<?php print $mothership_poorthemers_helper; ?>
<div class="container">
<header class="navigation" role="banner">

  <div class="row">
    <div class="siteinfo span5">
      

      <?php if($site_name): ?>        
        <span class="site-name"><?php print $site_name; ?></span>
      <?php endif; ?>
    </div>
  </div><!--end row-->
  <div class="row">
    <div class="span12">
      <?php if($page['header']): ?>
      <div class="header">
        <?php print render($page['header']); ?>
      </div>
      <?php endif; ?>
    </div>
  </div><!-- end row -->

</header>