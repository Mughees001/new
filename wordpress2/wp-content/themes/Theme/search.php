<?php
/*
Template Name: Search Page
*/
?>
<?php get_header();  ?>

<?php
	$s=get_search_query();
	$args = array(
    's' =>$s
    );
    // The Query
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
        _e("<h2 style='font-weight:bold;color:#000'>Search Results for: ".get_query_var('s')."</h2>");
        while ( $the_query->have_posts() ) {
           $the_query->the_post();
            ?>
<!-- <div class="site-section py-0"> -->
    <!-- <div class="owl-carousel hero-slide owl-style"> -->

        <div class="site-section">
          <div class="container">
            <div class="half-post-entry d-block d-lg-flex bg-light">
              <div class="img-bg" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_id()); ?>')"></div>
              <!-- <?php //bloginfo('template_directory');?>/images/big_img_1.jpg -->
              <div class="contents">
                <span class="caption">Editor's Pick</span>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p class="mb-3"><?php the_content(); ?></p>
                
                <div class="post-meta">
                  <span class="d-block"><a href="<?php the_permalink(); ?>"><?php the_author(); ?></a> in <a href="<?php the_permalink(); ?>"><?php echo get_the_category_list(' , '); ?></a></span>
                  <span class="date-read"><span class="mx-1">&bullet;</span>  <?php the_time('F j,Y') ?> <span class="icon-star2"></span></span>
                </div>
              </div>
            </div>
          </div>
        </div>
    <!-- </div> -->
<!-- </div> -->
<?php
        }//end while
    	}//end if
    		else{
			?>
       	 	<h2 style="margin-top: 100px; text-align: center;" >Nothing Found</h2>
       
       		 <p style="text-align: center; margin-bottom: 230px;">Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
        
			<?php } ?>

 
<?php get_footer(); ?>