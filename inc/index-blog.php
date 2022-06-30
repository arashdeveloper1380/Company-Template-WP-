<?php 
    $option = array('post_type'=>'post', 'post_per_page'=>'3');
    $blog = new WP_Query($option);
    if($blog->have_posts()) :
?>
<!--Start Blog-->
<div class="blog-section">
    <div class="title-section text-center">
        <h2>آخرین مطالب بلاگ</h2>
        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط</p>
    </div>

    <div class="container">
        <div class="row">
        <?php while($blog->have_posts()): $blog->the_post(); ?>
            <div class="col-12 col-sm-12 col-md-4">
                <div class="blog-item shadow-around">
                    <img src="<?php the_post_thumbnail_url() ?>" alt="">
                    <div class="blog-content">
                        <h4><a href=""><?php the_title(); ?></a></h4>
                        <ul>
                            <li><i class="fa fa-clock-o"></i><?php echo get_the_date("Y/m/d") ?></li>
                            <li><i class="fa fa-heart-o"></i><?php the_views() ?></li>
                            <li><i class="fa fa-comments-o"></i><?php comments_popup_link('بدون دیدگاه','1 دیدگاه','%دیدگاه') ?></li>
                        </ul>
                        <p>
                        <?php the_excerpt(); ?>
                        </p>
                    </div>
                    <div class="read-more"><a href="<?php the_permalink() ?>">ادامه مطلب</a></div>
                </div>
            </div>
            <?php endwhile; ?>
            <div class="clearfix"></div>
            <div class="button"><a href="#" class="all-button">مقالات بیشتر</a></div>
        </div>
    </div>
</div><!--End Blog-->
<?php endif; wp_reset_postdata(); ?>

<div class="clearfix"></div>
