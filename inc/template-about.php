<?php /* Template Name: About */ ?>
<?php get_header(); ?>
    <div class="clearfix"></div>
<div class="page-header" style="background-image:url('<?php bloginfo('template_url') ?>/images/slider/slider-2.jpg')">
   <h1 class="page-title"><?php the_title(); ?></h1>
</div>
<div class="clearfix"></div>
<div class="page-section">
   <div class="about-section">
      <div class="container">
         <div class="row">
            <div class="col-md-6 text-justify">
               <div class="about-section-content">
                   <?php $about_metabox = get_post_meta(get_the_ID(), 'title', true) ?>
                  <h2><?= $about_metabox ?></h2>
                  <?php while(have_posts()) : the_post(); ?>
                  <p><?php the_content() ?></p>
                  <?php endwhile; ?>
               </div>
            </div>
            <div class="col-md-6">
               <div class="video-section">
                  <video poster="images/video.jpg" controls>
                      <?php $video_metabox = get_post_meta(get_the_ID(), 'video', true) ?>
                     <source src="<?= $video_metabox ?>" type="video/mp4">
                  </video>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="clearfix"></div>
   <div class="clearfix"></div>
   <?php get_template_part('inc/index','company'); ?>
   <div class="clearfix"></div>
   <?php get_template_part('inc/index','contact'); ?>
</div>
<div class="clearfix"></div>
<?php get_footer(); ?>
