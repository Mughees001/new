<?php get_header();?>
<div class="site-section">
      <div class="container">
        <div class="row">
         
          <div class="col-lg-6">
            <div class="section-title">
              <h2>
              	<?php
              	//$catname="Politics";
              	//echo get_cat_ID('Politics');
              	//echo $category_name = 'Politics';
              	?>
              	<!-- <?php $cat //= get_the_category(); echo $cat[0]->cat_name; ?> -->

                <!-- <?php //echo get_cat_name(3);?> -->
                <?php 
  					$idObj = get_category_by_slug('politics'); 
  					$id = $idObj->term_id;
  					$name = $idObj->name;
  					print_r($name);
				?>
             </h2>
            </div>
             <?php 
             	//$catname="Politics";
                $args = array(
                	// call category by name
                	//get_cat_ID('Politics'),
                  // category id is 3 Politics	
                 'category__and' => array($id),
                 //'category_name' => 'Politics',
                 'posts_per_page' => 3,
                 'order' => 'ASC'
               );
                $blogposts = new WP_QUERY($args);

                while($blogposts->have_posts())
                {
                    $blogposts->the_post();
                
             ?>
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
               <?php }
        wp_reset_query(); ?>
            </div>
             <div class="col-lg-6">
            <div class="section-title">
              <h2>
              	<?php
              	//$catname="Business";
              	//echo get_cat_ID('Business');
              	?>
                <!-- <?php //echo get_cat_name(4);?> -->
                  <?php 
  					$idObj = get_category_by_slug('business'); 
  					$id = $idObj->term_id;
  					$name = $idObj->name;
  					print_r($name);
				?>
              </h2>
            </div>
             <?php 
             	//$catname="Business";
                $args = array(
                	//get_cat_ID('Business'),
                  // category id is 4 Business
                 'category__and' => array($id),
                 'posts_per_page' => 3,
               );
                $blogposts = new WP_QUERY($args);

                while($blogposts->have_posts())
                {
                    $blogposts->the_post();
                
             ?>
            <div class="post-entry-2 d-flex">
              <div class="thumbnail" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_id()); ?>')">
              </div>
              <div class="contents">
                <h2>
                  <a href="<?php the_permalink(); ?>">
                    <?php the_title();?>  
                    </a>
                  </h2>
                 <p class="mb-3">
                  <?php echo wp_trim_words(get_the_content(),50); ?>
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
                    <span class="mx-1">&bullet;
                    </span> 
                    <?php the_time(); ?>
                     <span class="icon-star2">
                     </span>
                   </span>
                </div>
              </div>
            </div>
             <?php }
        wp_reset_query(); ?>
          </div>


          <div class="col-lg-6">
            <div class="section-title">
              <h2>
                <?php
                //$catname="Politics";
                //echo get_cat_ID('Politics');
                //echo $category_name = 'Politics';
                ?>
                <!-- <?php $cat //= get_the_category(); echo $cat[0]->cat_name; ?> -->

                <!-- <?php //echo get_cat_name(3);?> -->
                <?php 
            $idObj = get_category_by_slug('general'); 
            $id = $idObj->term_id;
            $name = $idObj->name;
            print_r($name);
        ?>
             </h2>
            </div>
             <?php 
              //$catname="Politics";
                $args = array(
                  // call category by name
                  //get_cat_ID('Politics'),
                  // category id is 3 Politics  
                 'category__and' => array($id),
                 //'category_name' => 'Politics',
                 'posts_per_page' => 3,
                 'order' => 'ASC'
               );
                $blogposts = new WP_QUERY($args);

                while($blogposts->have_posts())
                {
                    $blogposts->the_post();
                
             ?>
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
               <?php }
        wp_reset_query(); ?>
            </div>


            <div class="col-lg-6">
            <div class="section-title">
              <h2>
                <?php
                //$catname="Politics";
                //echo get_cat_ID('Politics');
                //echo $category_name = 'Politics';
                ?>
                <!-- <?php $cat //= get_the_category(); echo $cat[0]->cat_name; ?> -->

                <!-- <?php //echo get_cat_name(3);?> -->
                <?php 
            $idObj = get_category_by_slug('health'); 
            $id = $idObj->term_id;
            $name = $idObj->name;
            print_r($name);
        ?>
             </h2>
            </div>
             <?php 
              //$catname="Politics";
                $args = array(
                  // call category by name
                  //get_cat_ID('Politics'),
                  // category id is 3 Politics  
                 'category__and' => array($id),
                 //'category_name' => 'Politics',
                 'posts_per_page' => 3,
                 'order' => 'ASC'
               );
                $blogposts = new WP_QUERY($args);

                while($blogposts->have_posts())
                {
                    $blogposts->the_post();
                
             ?>
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
               <?php }
        wp_reset_query(); ?>
            </div>



        </div>
      </div>
    </div>

    <?php get_footer(); ?>