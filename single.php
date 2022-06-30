<?php get_header() ?>
<div class="page-header" style="background-image:url('<?php bloginfo('template_url') ?>/images/slider/slider-2.jpg')">
   <h1 class="page-title"><?php the_title(); ?></h1>
</div>
<section>
   <div class="container">
      <div class="row">
         <div class="col-md-8">
            <?php while(have_posts()) : the_post(); ?>
            <article class="article-blog shadow-around">
               <header>
                  <h1><?php the_title(); ?></h1>
                  <div class="article-info">
                     <ul>
                        <li><i class="fa fa-comments"></i> <?php comments_popup_link('بدون دیدگاه','1 دیدگاه','% دیدگاه'); ?></li>
                        <li><i class="fa fa-heart"></i> <?php the_views(); ?></li>
                     </ul>
                  </div>
               </header>
               <div class="article-thumb">
                  <figure>
                     <img src="<?php the_post_thumbnail_url(); ?>" width="100%" alt="<?php the_title(); ?>">
                  </figure>
                  <div class="blog-date"><?php echo get_the_date("d"); ?><span class="month"><?php echo get_the_date("m"); ?></span></div>
               </div>
               <div class="article-content">
                  <?php the_content(); ?>
               </div>
            </article>
            <?php endwhile; ?>
            <section class="shadow">
                <?php comments_template() ?>
            </section>
         </div>
         <div class="col-md-4">
            <aside>
               <div class="sidebar">
                  <?php dynamic_sidebar("widget_sidebar"); ?>
               </div>
            </aside>
         </div>
      </div>
   </div>
</section>
<?php get_footer() ?>