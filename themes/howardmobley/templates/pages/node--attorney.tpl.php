<?php
//kpr(get_defined_vars());
//http://drupalcontrib.org/api/drupal/drupal--modules--node--node.tpl.php
//node--[CONTENT TYPE].tpl.php

//to remove all markup around a given field call the nomarkup theme function 
//$content['field_name']['#theme'] = "nomarkup";

if ($classes) {
  $classes = ' class="'. $classes . ' "';
}

if ($id_node) {
  $id_node = ' id="'. $id_node . '"';
}

hide($content['comments']);
hide($content['links']);
?>

<?php if( theme_get_setting('mothership_poorthemers_helper') ){ ?>
<!-- node.tpl.php -->
<?php } ?>


<div class="node">
  <div class="span5 content-container">

    <article <?php print $id_node . $classes .  $attributes; ?> role="article">
      <?php print $mothership_poorthemers_helper; ?>

      <?php print render($title_prefix); ?>

        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>" rel="bookmark"><?php print $title; ?></a></h2>

      <?php print render($title_suffix); ?>

      <?php print render($content['field_portrait']);?>
    </article>

  </div><!-- end span4 --> 

  <div class="span7 content-container">
    <div role="main" class="main-content" id="#main-content">
      <article>
        <div class="content">
          <?php print render($content['body']);?>
          <?php print render($content['field_education']);?>
          <?php print render($content['field_professional_activities']);?>
        </div>
      </article>
    </div><!--/main-->
  </div> <!-- end span4 -->
</div>



<?php if( theme_get_setting('mothership_poorthemers_helper') ){ ?>
<!-- /node.tpl.php -->
<?php } ?>
