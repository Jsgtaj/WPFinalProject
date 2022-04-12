<!-- Main html -->
<?php
  /**
    * Template Name: Album Preview Page
    * Template Post Type: albums
  **/
  get_header();
?>
<main class="album-preview">
<section>
<?php if (has_post_thumbnail()) : the_post_thumbnail(); endif;?>
</section>
<section>
<?php 
while (have_posts()) : the_post();
  the_content();
endwhile;?>
</section>
</main>
<?php
  get_footer();
?>