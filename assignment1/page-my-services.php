<?php /* Template Name: myservices*/ ?>
<?php get_header();?>
<div id="colorlib-main">
  <section class="ftco-section ftco-bread">
    <div class="container">
      <div class="row no-gutters slider-text justify-content-center align-items-center">
        <div class="col-md-8 ftco-animate">
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Services</span></p>
          <h1 class="bread">My Services</h1>
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
        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services py-4 d-block">
            <div class="d-flex justify-content-start">
              <div class="icon d-flex align-items-center justify-content-center">
                <span class="flaticon-big-lens"></span>
              </div>
            </div>
            <div class="media-body p-2 mt-2">
              <h3 class="heading mb-3"><?php the_title();?></h3>
              <p><?php the_content();?></p>
            </div>
          </div>
        </div>
      <?php endwhile;
    endif; ?>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
