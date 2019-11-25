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
                  <!-- Defaults comments call -->
                  <?php 
                    $withcomments = "1";
                    comments_template();  ?>

                  <?php } ?>


                  <!-- this is for comments.php -->
                  <!-- <?php            
                  // If comments are open or we have at least one comment, load up the comment template.
                  //if ( comments_open() || get_comments_number() ) {
                  //comments_template();}

                    //endwhile; // End of the loop.
                    ?> -->


                    
                    <!-- Get wp-comments.php template  -->

                    
                   

                   <!-- <?php //comment_form(); ?> -->

                   <!-- <?php //echo wp_list_comments( $args, $comments ); ?>  -->

      
                  <!-- <div class="pt-5">
                    <div class="section-title">
                      <h2 class="mb-5">6 Comments</h2>
                    </div>
                    <ul class="comment-list">
                      <li class="comment">
                        <div class="vcard bio">
                          <img src="images/person_1.jpg" alt="Image placeholder">
                        </div>
                        <div class="comment-body">
                          <h3>Jean Doe</h3>
                          <div class="meta">January 9, 2018 at 2:21pm</div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                          <p><a href="#" class="reply">Reply</a></p>
                        </div>
                      </li>
      
                      <li class="comment">
                        <div class="vcard bio">
                          <img src="images/person_1.jpg" alt="Image placeholder">
                        </div>
                        <div class="comment-body">
                          <h3>Jean Doe</h3>
                          <div class="meta">January 9, 2018 at 2:21pm</div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                          <p><a href="#" class="reply">Reply</a></p>
                        </div>
      
                        <ul class="children">
                          <li class="comment">
                            <div class="vcard bio">
                              <img src="images/person_1.jpg" alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                              <h3>Jean Doe</h3>
                              <div class="meta">January 9, 2018 at 2:21pm</div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                              <p><a href="#" class="reply">Reply</a></p>
                            </div>
      
      
                            <ul class="children">
                              <li class="comment">
                                <div class="vcard bio">
                                  <img src="images/person_1.jpg" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                  <h3>Jean Doe</h3>
                                  <div class="meta">January 9, 2018 at 2:21pm</div>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                  <p><a href="#" class="reply">Reply</a></p>
                                </div>
      
                                  <ul class="children">
                                    <li class="comment">
                                      <div class="vcard bio">
                                        <img src="images/person_1.jpg" alt="Image placeholder">
                                      </div>
                                      <div class="comment-body">
                                        <h3>Jean Doe</h3>
                                        <div class="meta">January 9, 2018 at 2:21pm</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                        <p><a href="#" class="reply">Reply</a></p>
                                      </div>
                                    </li>
                                  </ul>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
      
                      <li class="comment">
                        <div class="vcard bio">
                          <img src="images/person_1.jpg" alt="Image placeholder">
                        </div>
                        <div class="comment-body">
                          <h3>Jean Doe</h3>
                          <div class="meta">January 9, 2018 at 2:21pm</div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                          <p><a href="#" class="reply">Reply</a></p>
                        </div>
                      </li>
                    </ul>
                     END comment-list 
                    
                    <div class="comment-form-wrap pt-5">
                      <div class="section-title">
                        <h2 class="mb-5">Leave a comment</h2>
                      </div>
                      <form action="#" class="p-5 bg-light">
                        <div class="form-group">
                          <label for="name">Name *</label>
                          <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                          <label for="email">Email *</label>
                          <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                          <label for="website">Website</label>
                          <input type="url" class="form-control" id="website">
                        </div>
      
                        <div class="form-group">
                          <label for="message">Message</label>
                          <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                          <input type="submit" value="Post Comment" class="btn btn-primary py-3">
                        </div>
      
                      </form>
                    </div>
                  </div> -->
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

           <!--  <div class="trend-entry d-flex">
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
              <a href="#" class="more">See All Popular <span class="icon-keyboard_arrow_right"></span></a>
            </p>
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