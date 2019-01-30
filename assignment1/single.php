<?php get_header();?>

		<div id="colorlib-main">
			<section class="ftco-section-no-padding bg-light">
				<div class="hero-wrap">
					<div class="overlay"></div>
					<div class="d-flex align-items-center js-fullheight">
						<div class="author-image text img d-flex">
							<section class="home-slider js-fullheight owl-carousel">
					      <div class="slider-item js-fullheight" style="background-image: url(<?php echo get_theme_file_uri('images/author.jpg')?>);">
					      </div>

					      <div class="slider-item js-fullheight" style="background-image:url(<?php echo get_theme_file_uri('images/author-2.jpg')?>);">
					      </div>
					    </section>
						</div>
						<div class="author-info text p-3 p-md-5">
							<div class="desc">

<?php if(have_posts()):
  while(have_posts()):
    the_post();
    if(has_post_thumnail()){
      $feat_image_url = wp_get_attachment_url(get_post_thumbnail_id());
      echo '<header class="intro-header" style="background-image:url('.$feat_image_url.');">';
    }
  endwhile;
endif;?>


								<span class="subheading"><?php the_title();?></span>
								<h1 class="big-letter"><?php the_author();?></h1>
								<h1 class="mb-4"><span><?php the_author();?></span> <?php the_date();?> <span><?php the_title();?></span></h1>
								<p class="mb-4">
                  <?php the_content();?>
                </p>
								<h3 class="signature h1"><?php the_author();?></h3>
								<ul class="ftco-social mt-3">
		              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		            </ul>
	            </div>
						</div>
					</div>
				</div>
			</section>
			<section class="ftco-section instagram">
				<div class="container">
					<div class="row justify-content-center mb-2 pb-3">
	          <div class="col-md-7 heading-section heading-section-2 text-center ftco-animate">
	            <h2 class="mb-4">Follow me on Instagram</h2>
	          </div>
	        </div>

<?php if(have_posts()):
  while(have_posts()):
    the_post();?>

					<div class="row no-gutters">
		        <div class="col-sm-12 col-md ftco-animate">
		          <a href="<?php echo get_theme_file_uri('images/image_1.jpg');?> " class="insta-img image-popup" style="background-image: url(<?php echo get_theme_file_uri('images/image_1.jpg')?>);">
                <div class="icon d-flex justify-content-center">
		              <span class="icon-instagram align-self-center"></span>
		            </div>
		          </a>
		        </div>
		      </div>

<?php endwhile;
endif;?>
				</div>
			</section>

<?php get_footer();?>
