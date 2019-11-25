



<?php get_header(); ?>
<?php while(have_posts()) {
  the_post();
  ?>

<div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 single-content">
         
            <p class="mb-5">
              <img src="<?php echo get_the_post_thumbnail_url(get_the_id()); ?>" class="img-fluid">
            </p>  
            <h1 class="mb-4">
              <?php the_title(); ?>
            </h1>
            <div class="post-meta d-flex mb-5">
              <div class="bio-pic mr-3">
                <img src="<?php echo get_the_post_thumbnail_url(get_the_id()); ?>" alt="Image" class="img-fluidid">
              </div>
              <div class="vcard">
                <span class="d-block"><a href="#"><?php the_author(); ?></a> in <a href="#">News</a></span>
                <span class="date-read"><span class="mx-1">&bullet;</span> <?php the_time('F j,Y') ?> <span class="icon-star2"></span></span>
              </div>
            </div>
            <?php  //$view=setPostViews(get_the_ID($post_id));
                    //if($view){$view=$view+1;} 
              //echo print_r($view); ?>
            <p><?php the_content(); ?></p>
           





            <div class="pt-5">
                    <p>Categories:  <a href="<?php the_permalink(); ?>"><?php echo get_the_category_list(' , '); ?></a> <!-- <a href="#">Events</a> -->  Tags: <a href="<?php the_permalink(); ?>"><?php echo get_the_tag_list(); ?></a><!--  <a href="#">#trends</a> --></p>
                  </div>

                  <?php } ?>
          </div>


          <div class="col-lg-3 ml-auto">
            <div class="section-title">
              <h2>Popular Posts</h2>
            </div>

             <?php 
              $popularpost = new WP_Query( array( 
             'posts_per_page' => 4,
             'meta_key' => 'wpb_post_views_count',
             'orderby' => 'meta_value_num',
             'order' => 'DESC'
               ) );
               $num=1; 
                while ( $popularpost->have_posts() ){ 
               $popularpost->the_post();
               wpb_get_post_views(get_the_ID());
               $num=$num;
        
                ?>

              

            <div class="trend-entry d-flex">
              <div class="number align-self-start"><?php echo "0"; print_r($num) ?></div>
              <div class="trend-contents">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?>?</a></h2>
                <div class="post-meta">
                  <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                  <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                </div>
              </div>
            </div>

          <?php 
               $num=$num+1; }
              wp_reset_query(); ?>

            </div>
            
            <!-- <p>
              <a href="#" class="more">See All Popular <span class="icon-keyboard_arrow_right"></span></a>
            </p> -->
          </div>


        </div>
        
      </div>
    </div>

    <div class="site-section subscribe bg-light">
      <div class="container">
        <form action="#" class="row align-items-center">
          <div class="col-md-5 mr-auto">
            <h2>Newsletter Subcribe</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis aspernatur ut at quae omnis pariatur obcaecati possimus nisi ea iste!</p>
          </div>
          <div class="col-md-6 ml-auto">
            <div class="d-flex">
              <input type="email" class="form-control" placeholder="Enter your email">
              <button type="submit" class="btn btn-secondary" ><span class="icon-paper-plane"></span></button>
            </div>
          </div>
        </form>
      </div>
    </div>


    
  


<?php get_footer(); ?>