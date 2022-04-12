<!-- Main html -->
<?php
  /**
    * Template Name: News Template
    * Template Post Type: page
  **/
  get_header();
?>
<main>
<section class="masthead">
  <h1><?php the_field('masthead_title');?></h1>
</section>
<section class="news-list">
<!-- Dynamic list of posts -->
    <?php
      $args = array(
      'post_type' => 'post',
      'category_name' => 'news',
      'post_status' => 'publish',
      'posts_per_page' => '16',
      );
     $arr_posts = new WP_QUERY($args);
      if($arr_posts->have_posts()) :
       while($arr_posts->have_posts()) :
        $arr_posts->the_post();
    ?>
    <article id="post-<?php the_ID()?>" <?php post_class();?>>
      <header class="entry-header">
        <a href="<?php the_permalink(); ?>">
          <h3><?php the_title(); ?></h3>  
        </a>    
          <?php the_excerpt(); ?>
      </header>
      
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