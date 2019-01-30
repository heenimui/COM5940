<?php /* Template Name: blog-detail*/ ?>
<?php get_header();?>

<div id="colorlib-main">
  <section class="ftco-section ftco-bread">
    <div class="container">
      <div class="row no-gutters slider-text justify-content-center align-items-center">
        <div class="col-md-8 ftco-animate">
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span class="mr-2"><a href="blog.html">Blog</a></span> <span>Blog Single</span></p>
          <h1 class="bread">Blog Single</h1>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section">
    <div class="container">
      <div class="row">

        <?php if (have_posts()) :
              while (have_posts()) :
                   the_post(); ?>

        <div class="col-lg-8 ftco-animate">
          <h2 class="mb-3 mt-5 font-weight-bold">#2. Creative WordPress Themes</h2>
          <p>Temporibus ad error suscipit exercitationem hic molestiae totam obcaecati rerum, eius aut, in. Exercitationem atque quidem tempora maiores ex architecto voluptatum aut officia doloremque. Error dolore voluptas, omnis molestias odio dignissimos culpa ex earum nisi consequatur quos odit quasi repellat qui officiis reiciendis incidunt hic non? Debitis commodi aut, adipisci.</p>
          <p>
            <img src="<?php echo get_theme_file_uri('images/image_2.jpg')?>" alt="" class="img-fluid">
          </p>
          <p>
            <?php the_content();?>
          </p>
          <div class="tag-widget post-tag-container mb-5 mt-5">
            <div class="tagcloud">
              <a href="#" class="tag-cloud-link"><?php echo get_tag();?></a>

            </div>
          </div>

          <div class="about-author d-flex p-4 bg-light">
            <div class="bio mr-5">
              <img src="<?php echo get_theme_file_uri('images/person_1.jpg')?>" alt="Image placeholder" class="img-fluid mb-4">
            </div>
            <div class="desc">
              <h3><?php the_author();?></h3>
              <p><?php the_content();?></p>
            </div>
          </div>


          <div class="pt-5 mt-5">
            <h3 class="mb-5 font-weight-bold">6 Comments</h3>
            <ul class="comment-list">
              <li class="comment">
                <div class="vcard bio">
                  <img src="images/person_1.jpg" alt="Image placeholder">
                </div>
                <div class="comment-body">
                  <h3>John Doe</h3>
                  <div class="meta">October 03, 2018 at 2:21pm</div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                  <p><a href="#" class="reply">Reply</a></p>
                </div>
              </li>


            </ul>
            <!-- END comment-list -->

            <div class="comment-form-wrap pt-5">
              <h3 class="mb-5">Leave a comment</h3>
              <form action="#" class="p-3 p-md-5 bg-light">
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
                  <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                </div>

              </form>
            </div>
          </div>
        </div> <!-- .col-md-8 -->
        <div class="col-lg-4 sidebar ftco-animate bg-light">
          <div class="sidebar-box">
            <form action="#" class="search-form">
              <div class="form-group">
                <span class="icon icon-search"></span>
                <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
              </div>
            </form>
          </div>
          <div class="sidebar-box ftco-animate">
            <h3 class="sidebar-heading">Categories</h3>
            <ul class="categories">
              <li><a href="#"><?php the_category();?>
                <span><?php echo get_post_meta( $post->ID, 'incr_number', true );?></span></a></li>

            </ul>
          </div>

          <div class="sidebar-box ftco-animate">
            <h3 class="sidebar-heading">Popular Articles</h3>
            <div class="block-21 mb-4 d-flex">
              <a class="blog-img mr-4" style="background-image: url(<?php echo get_theme_file_uri('images/image_1.jpg')?>);"></a>
              <div class="text">
                <?php if (have_posts()) :
                      while (have_posts()) :
                           the_post(); ?>
                <h3 class="heading"><a href="#"><?php the_content();?></a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> <?php the_date();?></a></div>
                  <div><a href="#"><span class="icon-person"></span> <?php the_author();?></a></div>
                  <div><a href="#"><span class="icon-chat"></span> <?php echo get_comments_number();?></a></div>
                </div>
              </div>
            </div>


          </div>



          <div class="sidebar-box subs-wrap img" style="background-image: url(<?php echo get_theme_file_uri('images/bg_1.jpg')?>);">
            <div class="overlay"></div>
            <h3 class="mb-4 sidebar-heading">Newsletter</h3>
            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia</p>
            <form action="#" class="subscribe-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Email Address">
                <input type="submit" value="Subscribe" class="mt-2 btn btn-white submit">
              </div>
            </form>
          </div>

          <div class="sidebar-box ftco-animate">
            <h3 class="sidebar-heading">Archives</h3>
            <ul class="categories">
              <li><a href="#"><?php echo get_the_date();?>
                <span><?php echo get_post_meta( $post->ID, 'incr_number', true );?></span></a></li>

            </ul>
          </div>
        <?php endwhile;
        endif; ?>


          <div class="sidebar-box ftco-animate">
            <h3 class="sidebar-heading">Paragraph</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut.</p>
          </div>
        </div><!-- END COL -->


    
      </div>
    </div>
  </section>
<?php get_footer();?>
