<?php /* Template Name: Blog Template */ 

get_header() ?>

    <div class="container-blog">
        <div class="flex-row">
  <?php
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 9
    );
    $query = new WP_Query($args);
    
    if ($query->have_posts()) :
      while ($query->have_posts()) :
        $query->the_post();
  ?>
        <div class="post">
            <a href="<?php the_permalink()?>">
            <div class="img-container">
          <?php the_post_thumbnail(); ?>
            </div>
        </a>

        <a href="<?php the_permalink()?>"> 
          <h2 class="flex-post-title"><?php echo wp_trim_words( get_the_title(), 4 ); ?></h2>
      </a>

          
          <p><?php echo wp_trim_words(get_the_excerpt(), 25) ?></p>
          <a class="readmore-btn-blog" href="<?php the_permalink(); ?>">Read more</a>
        </div>
  <?php
      endwhile;
    endif;
    wp_reset_postdata();
  ?>
    </div>
</div>


<?php get_footer() ?>

