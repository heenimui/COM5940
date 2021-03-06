<?php /* Template Name: blog*/ ?>
<?php get_header();?>

<div id="colorlib-main">
  <section class="ftco-section ftco-bread">
    <div class="container">
      <div class="row no-gutters slider-text justify-content-center align-items-center">
        <div class="col-md-8 ftco-animate">
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Blog</span></p>
          <h1 class="bread">Read Our Blog</h1>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section">
    <div class="container">
      <div class="row d-flex">
        <div class="col-lg-8">
          <div class="row">
            <div class="col-md-12">
              <?php if (have_posts()) :
                    while (have_posts()) :
                         the_post(); ?>
              <div class="blog-entry ftco-animate d-md-flex">
                <a href="single.html" class="img img-2" style="background-image: url(<?php echo get_theme_file_uri('images/image_1.jpg')?>);"></a>
                <div class="text text-2 p-4">
                  <h3 class="mb-2"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                  <div class="meta-wrap">
                    <p class="meta">
                      <span><?php the_date();?></span>
                      <span><a href="<?php the_permalink();?>"><?php the_category();?></a></span>
                      <span>5 Comment</span>
                    </p>
                  </div>
                  <p class="mb-4"><?php the_content();?></p>
                  <p><a href="<?php the_permalink();?>" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a></p>
                </div>
              </div>
            <?php endwhile;
            endif; ?>

            </div>
          </div><!-- END-->
          <!-- Pagination!!!-->
          <div class="row">
            <div class="col">
              <div class="block-27">
                <ul>
                  <li><a href="#">&lt;</a></li>
                  <li class="active"><span>1</span></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">&gt;</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
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



<?php get_footer(); ?>
