<?php /* Template Name: collection*/ ?>
<?php get_header();?>

		<div id="colorlib-main">
			<section class="ftco-section ftco-bread">
				<div class="container">
					<div class="row no-gutters slider-text justify-content-center align-items-center">
	          <div class="col-md-8 ftco-animate">
	            <p class="breadcrumbs"><span class="mr-2"><a href="http://dev-chongjing.pantheonsite.io/">Home</a></span> <span>Collection</span></p>
	            <h1 class="bread">My Collection</h1>
	          </div>
	        </div>
				</div>
			</section>
			<section class="ftco-section-3">
				<div class="photograhy">
					<div class="row">
            <?php if (have_posts()) :
                  while (have_posts()) :
                       the_post(); ?>
						<div class="col-md-4 ftco-animate">
							<a href="images/image_1.jpg" class="photography-entry img image-popup d-flex justify-content-start align-items-end" style="background-image: url(<?php echo get_theme_file_uri('images/image_1.jpg')?>);">
								<div class="overlay"></div>
								<div class="text ml-4 mb-4">
									<h3><?php the_content();?></h3>
									<span class="tag"><?php the_title();?></span>
								</div>
							</a>
						</div>
          <?php endwhile;
          endif; ?>
					</div>
				</div>
			</section>

<?php get_footer();?>
