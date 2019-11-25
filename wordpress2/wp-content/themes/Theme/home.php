<?php /* Template Name: HOME */ ?>
<?php get_header();?>
       <!-- retriving all posts from wordpress database -->
            <?php 
                // query_posts('cat=6&tag=general'); 
                 $args = array(
                  // General category id is 6 
                 'category__and' => array(6),
                 'posts_per_page' => 1
                 // 'orderby' => 'title',
                 // 'order' => 'DESC' 
               );
                $blogposts = new WP_QUERY($args);

                while($blogposts->have_posts())
                {
                    $blogposts->the_post();
                
             ?>

    <div class="site-section py-0">
      <div class="owl-carousel hero-slide owl-style">

        <div class="site-section">
          <div class="container">
            <div class="half-post-entry d-block d-lg-flex bg-light">
              <div class="img-bg" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_id()); ?>')"></div>
              <!-- <?php //bloginfo('template_directory');?>/images/big_img_1.jpg -->
              <div class="contents">
                <span class="caption">Editor's Pick</span>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p class="mb-3"><?php echo wp_trim_words(get_the_content(),50); ?></p>
                
                <div class="post-meta">
                  <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">Food</a></span>
                  <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="site-section">
          <div class="container">
            <div class="half-post-entry d-block d-lg-flex bg-light">
              <div class="img-bg" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_id()); ?>')"></div>
              <div class="contents">
                <span class="caption">Editor's Pick</span>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
                <p class="mb-3"><?php echo wp_trim_words(get_the_content(),50); ?></p>
                
                <div class="post-meta">
                  <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                  <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                </div>

              </div>
            </div>
          </div>
        </div>


      </div>
    </div>

    <?php }
        wp_reset_query(); ?>
  

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="row">
              <div class="col-12">
                <div class="section-title">
                  <h2>Editor's Pick
                  	  <?php 
  					$idObj = get_category_by_slug('politics'); 
  					$id = $idObj->term_id;
  					$name = $idObj->name;
  					//print_r($name);
				?>
                  </h2>
                </div>
              </div>
            </div>
            
            <div class="row">

              <div class="col-md-6">
              	<?php 
                $args = array(
                  // category id is 3 Politics
                 'category__and' => array($id),
                 'posts_per_page' => 4,
               );
                $blogposts = new WP_QUERY($args);
                	$counter=0;

                while($blogposts->have_posts())
                {
                    $blogposts->the_post();
                	if($counter==0)

             
                { ?>
                <div class="post-entry-1">
                  <a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_id()); ?>" alt="Image" class="img-fluid"></a>
                  <h2><a href="<?php the_permalink(); ?>"> <?php the_title();?></a></h2>
                  <p><?php echo wp_trim_words(get_the_content(),50); ?></p>
                  <div class="post-meta">
                    <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                    <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                  </div>
                </div>
                </div>
              	<div class="col-md-6">
                <?php }//end of of if
                else { ?>

                 <div class="post-entry-2 d-flex bg-light">
                  <div class="thumbnail" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_id()); ?>')"></div>
                  <div class="contents">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="post-meta">
                      <span class="d-block"><a href="#">Dave Rogers</a> in <a href="<?php the_permalink(); ?>">News</a></span>
                      <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                    </div>
                  </div>
                </div>
                 	
                <?php  }//End of else
                	$counter++; 
                	//echo $counter;
                 	
                  }// end of while loop

                  
        			wp_reset_query(); ?>


              </div>
              
			<!-- col md 6 end -->
            </div>
            <!-- row end -->
          </div>
          <div class="col-lg-4">
            <div class="section-title">
              <h2>Trending</h2>
            </div>

            <div class="trend-entry d-flex">
              <div class="number align-self-start">01</div>
              <div class="trend-contents">
                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                <div class="post-meta">
                  <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                  <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                </div>
              </div>
            </div>

            <div class="trend-entry d-flex">
              <div class="number align-self-start">02</div>
              <div class="trend-contents">
                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                <div class="post-meta">
                  <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                  <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                </div>
              </div>
            </div>

            <div class="trend-entry d-flex">
              <div class="number align-self-start">03</div>
              <div class="trend-contents">
                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                <div class="post-meta">
                  <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                  <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                </div>
              </div>
            </div>

            <div class="trend-entry d-flex">
              <div class="number align-self-start">04</div>
              <div class="trend-contents">
                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                <div class="post-meta">
                  <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                  <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                </div>
              </div>
            </div>
            
            <p>
              <a href="#" class="more">See All Trends <span class="icon-keyboard_arrow_right"></span></a>
            </p>

          </div>
        </div>
      </div>
    </div>
    <!-- END section -->

    <div class="py-0">
      <div class="container">
        <div class="half-post-entry d-block d-lg-flex bg-light">
          <div class="img-bg" style="background-image: url('<?php bloginfo('template_directory');?>/images/big_img_1.jpg')"></div>
          <div class="contents">
            <span class="caption">Editor's Pick</span>
            <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
            <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate vero obcaecati natus adipisci necessitatibus eius, enim vel sit ad reiciendis. Enim praesentium magni delectus cum, tempore deserunt aliquid quaerat culpa nemo veritatis, iste adipisci excepturi consectetur doloribus aliquam accusantium beatae?</p>
            
            <div class="post-meta">
              <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">Food</a></span>
              <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
            </div>

          </div>
        </div>
      </div>
    </div>


           


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
        </div>
      </div>
    </div>




    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-9">
            <div class="section-title">
              <h2> <?php 
  					$idObj = get_category_by_slug('recent-news'); 
  					$id = $idObj->term_id;
  					$name = $idObj->name;
  					print_r($name);
				?></h2>
            </div>
             <?php 
                $args = array(
                	
                 'category__and' => array($id),
                 'posts_per_page' => 3,
                 //'order' => 'ASC'
               );
                $blogposts = new WP_QUERY($args);

                while($blogposts->have_posts())
                {
                    $blogposts->the_post();
                
             ?>
            <div class="post-entry-2 d-flex">
              <div class="thumbnail order-md-2" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_id()); ?>')"></div>
              <div class="contents order-md-1 pl-0">
                <h2><a href="<?php the_permalink(); ?>"> <?php the_title();?></a></h2>
                <p class="mb-3"><?php echo wp_trim_words(get_the_content(),20); ?></p>
                <div class="post-meta">
                  <span class="d-block"><a href="<?php the_permalink(); ?>">Dave Rogers</a> in <a href="<?php the_permalink(); ?>">News</a></span>
                  <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                </div>
              </div>
            </div>

             <?php }
        wp_reset_query(); ?>

            <!-- <div class="post-entry-2 d-flex">
              <div class="thumbnail order-md-2" style="background-image: url('<?php //bloginfo('template_directory');?>/images/img_h_3.jpg')"></div>
              <div class="contents order-md-1 pl-0">
                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus praesentium neque, voluptatum quam quibusdam.</p>
                <div class="post-meta">
                  <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                  <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                </div>
              </div>
            </div>

            <div class="post-entry-2 d-flex">
              <div class="thumbnail order-md-2" style="background-image: url('<?php //bloginfo('template_directory');?>/images/img_h_3.jpg')"></div>
              <div class="contents order-md-1 pl-0">
                <span class="caption mb-4 d-block">Editor's Pick</span>
                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus praesentium neque, voluptatum quam quibusdam.</p>
                <div class="post-meta">
                  <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                  <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                </div>
              </div>
            </div> -->
          </div>
          <div class="col-lg-3">
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

            <!--<div class="trend-entry d-flex">
              <div class="number align-self-start">03</div>
              <div class="trend-contents">
                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                <div class="post-meta">
                  <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                  <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                </div>
              </div>
            </div>

            <div class="trend-entry d-flex pl-0">
              <div class="number align-self-start">04</div>
              <div class="trend-contents">
                <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                <div class="post-meta">
                  <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                  <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                </div>
              </div>
            </div> -->
            
            <p>
              <a href="<?php the_permalink(); ?>" class="more">See All Popular <span class="icon-keyboard_arrow_right"></span></a>
            </p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <ul class="custom-pagination list-unstyled">
              <li><a href="#">1</a></li>
              <li class="active">2</li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
            </ul>
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