<div class="footer-content">
<div class="container">
  <div class="row">
    <div class="span12">
      <footer role="contentinfo">
        <?php if($site_name): ?>        
          <div class="site-name"><?php print $site_name; ?></div>
        <?php endif; ?>
        <?php print render($page['footer']); ?>
      </footer>
    </div>
  </div><!-- end row-->
</div><!--/container-->
</div>