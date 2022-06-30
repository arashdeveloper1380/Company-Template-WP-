<?php $group_portfolio = myprefix_get_option('group_portfolio'); $group_portfolio = $group_portfolio[0]; ?>
<?php 
    $option = array('post_type'=>'portfolio', 'post_per_page'=>'6');
    $portfolio = new WP_Query($option);
    if($portfolio->have_posts()) :
?>
<div class="portfolio-section">
    <div class="title-section text-center">
        <h2><?= $group_portfolio['title'] ?></h2>
        <p><?= $group_portfolio['desc'] ?></p>
    </div>
    <div class="container">
        <div class="row">
            <?php while($portfolio->have_posts()): $portfolio->the_post(); ?>
                <div class="col-12 col-md-4">
                    <div class="portfolio-info shadow-around">
                        <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title() ?>"></a>
                        <div class="portfolio-overlay"></div>
                        <div class="portfolio-overlay-text">
                        <a href="<?php the_post_thumbnail_url() ?>" data-fancybox data-caption="<?php the_title() ?>"><i class="fa fa-search"></i></a>
                            <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                            <p><?php the_excerpt() ?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>

            <div class="clearfix"></div>
            <div class="button">
                <a href="" class="all-button">نمونه کار های بیشتر</a>
            </div>

        </div>
    </div>
</div>
<?php endif; wp_reset_postdata() ?>

<div class="clearfix"></div>