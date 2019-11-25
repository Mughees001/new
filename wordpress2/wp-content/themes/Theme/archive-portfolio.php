<?php /* Template Name: Portfolio */ ?>
<?php get_header(); ?>
<?php while(have_posts()) {
  the_post();
?>

<div class="site-section">
 <div class="container">
  <div class="row">
    <div class="col">
      <div class="post-entry-2 d-flex">
              <div class="thumbnail" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_id()); ?>')">  
              </div>
              <div class="contents">
                <h2>
                  <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                    </a>
                  </h2>
                 <p class="mb-3"><?php echo wp_trim_words(get_the_content(),50); ?>
                 </p>
                <div class="post-meta">
                  <span class="d-block">
                    <a href="<?php the_permalink(); ?>">
                      Dave Rogers
                    </a>
                     in <a href="<?php the_permalink(); ?>">
                        <?php the_category(' '); ?>
                        </a>
                    </span>
                  <span class="date-read">
                    <?php the_date(); ?>
                     <span class="mx-1">&bullet;</span>
                     <?php the_time(); ?>
                      <span class="icon-star2">
                      </span>
                    </span>
                </div>
              </div>
            </div>
    </div>
  </div>
 </div>
</div>


  <?php }?>
<?php get_footer(); ?>