<?php get_header() ?>

<?php if(!have_posts()) {
        echo '<h2>There are no posts for this category</h2>';
} ?>


<?php if ( is_category( '3' ) ) : ?>
    <div class="archive-hero" style="background-image:url('http://pr-blog.local/wp-content/uploads/2023/05/bussines-banner.jpg');">
    <h2 id="archive-title-name"><?php the_archive_title() ?> </h2>
    </div>

<?php elseif (is_category('7') ) : ?>
    <div class="archive-hero" style="background-image:url('http://pr-blog.local/wp-content/uploads/2023/05/technology-banner.jpg');">
    <h2 id="archive-title-name"><?php the_archive_title() ?> </h2>
    </div>

    <?php elseif (is_category('6') ) : ?>
    <div class="archive-hero" style="background-image:url('http://pr-blog.local/wp-content/uploads/2023/05/sport-banner.jpg');">
    <h2 id="archive-title-name"><?php the_archive_title() ?> </h2>
    </div>

    <?php elseif (is_category('4') ) : ?>
    <div class="archive-hero" style="background-image:url('http://pr-blog.local/wp-content/uploads/2023/05/international-banner.jpg');">
    <h2 id="archive-title-name"><?php the_archive_title() ?> </h2>
    </div>

    <?php elseif (is_category('8') ) : ?>
    <div class="archive-hero" style="background-image:url('http://pr-blog.local/wp-content/uploads/2023/05/travel-bannerjpg.jpg');">
    <h2 id="archive-title-name"><?php the_archive_title() ?> </h2>
    </div>

<?php endif; ?>


<div class="main">

<?php while(have_posts()) {
      the_post();  
?>

   
    <a href="<?php the_permalink() ?>">
        <div class="img-container-archive">
            <?php the_post_thumbnail() ?>
        </div>
    </a>

    
    <a href="<?php the_permalink()?>">
        <h2 class="archive-post-title"><?php the_title() ?></h2>
            <p class="archive-post-paragraph"><?php echo get_the_excerpt() ?></p>
                <a class="readmore-btn-archive" href="<?php the_permalink() ?>">Read More</a>
    </a>

    <br><br><br>

<?php 
    }
    wp_reset_query();
?>

</div>

<?php get_footer() ?>