<!-- Main html -->
<?php
  /**
    * Template Name: Albums Template
    * Template Post Type: page
  **/
  get_header();
?>
<main>
<section class="masthead">
  <h1><?php the_field('masthead_title');?></h1>
</section>
<section class="album-list">
<!-- Dynamic list of posts -->
    <?php
      $args = array(
      'post_type' => 'albums',
      'posts_per_page' => '16',
      );
     $arr_posts = new WP_QUERY($args);
      if($arr_posts->have_posts()) :
       while($arr_posts->have_posts()) :
        $arr_posts->the_post();
    ?>
    <article id="post-<?php the_ID()?>" <?php post_class();?>>
    <a href="<?php the_permalink(); ?>">
    <?php
        if (has_post_thumbnail()) :
          the_post_thumbnail('thumbnail');
        endif;
    ?>
    <header class="entry-header">
      <h3><?php the_title(); ?></h3>
    </header>
  </a>
  </article>
  <?php
    endwhile;
  endif;
?>
</section>
</main>
<?php
  get_footer();
?>