<!-- Main html -->
<?php
  /**
    * Template Name: Info Template
    * Template Post Type: page
  **/
  get_header();
?>
<main>
<section class="masthead">
  <h1><?php the_field('masthead_title');?></h1>
  <?php the_field('masthead_paragraph');?>
</section>
</main>
<?php
  get_footer();
?>