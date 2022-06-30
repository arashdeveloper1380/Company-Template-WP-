<?php get_header() ?>
<section>
   <div class="container">
      <div class="row">
         <div class="col-md-8">
            <?php while(have_posts()) : the_post(); ?>
            <article class="article-blog shadow-around">
               <header>
                  <h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
                  <div class="article-info">
                     <ul>
                        <li><i class="fa fa-comments"></i> <?php comments_popup_link('بدون دیدگاه','1 دیدگاه','% دیدگاه'); ?></li>
                        <li><i class="fa fa-heart"></i> <?php the_views(); ?></li>
                     </ul>
                  </div>
               </header>
               <div class="article-thumb">
                  <figure>
                     <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                  </figure>
                  <div class="blog-date"><?php echo get_the_date("d"); ?><span class="month"><?php echo get_the_date("m"); ?></span></div>
               </div>
               <div class="article-content">
                  <?php the_excerpt(); ?>
               </div>
            </article>
            <?php endwhile; ?>
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