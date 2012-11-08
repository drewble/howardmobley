<?php include ('_header.php'); ?>

<div class="page-content">

    <div class="row">
      
       <div class="span5 content-container">
        <?php if ($page['sidebar_first']): ?>
          <div class="sidebar-first">
            <?php print render($page['sidebar_first']); ?>
          </div>
        <?php endif; ?>
      </div><!-- end span4 -->

      <div class="span7 content-container">
        <div role="main" class="main-content" id="#main-content">
          <?php print render($title_prefix); ?>
          <?php if ($title): ?>
            <h1><?php print $title; ?></h1>
          <?php endif; ?>
          <?php print render($title_suffix); ?>

          <?php if ($action_links): ?>
            <ul class="action-links"><?php print render($action_links); ?></ul>
          <?php endif; ?>

          <?php if (isset($tabs['#primary'][0]) || isset($tabs['#secondary'][0])): ?>
            <nav class="tabs"><?php print render($tabs); ?></nav>
          <?php endif; ?>

          <?php if($page['highlighted'] OR $messages){ ?>
            <div class="drupal-messages">
            <?php print render($page['highlighted']); ?>
            <?php print $messages; ?>
            </div>
          <?php } ?>  

          <?php print render($page['content_pre']); ?>

          <?php print render($page['content']); ?>

          <?php print render($page['content_post']); ?>

        </div><!--/main-->
      </div> <!-- end span4 -->

    </div><!-- end row -->
  </div> <!-- end container -->
</div>

<?php include ('_footer.php'); ?>