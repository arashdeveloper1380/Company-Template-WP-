<?php  $option = array('post_type'=>'slider', 'posts_per_page' => '3'); $slider = new WP_Query($option); ?>
<?php if($slider->have_posts()): ?>
<div class="slider-section">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">

            <?php 
            $i = 0; 
            while($slider->have_posts()) : $slider->the_post(); 
            $active = ($i==0) ? "active" : ""; ?>
                <li data-target="#carouselExampleIndicators" data-slide-to="<?= $i ?>" class="<?= $active ?>"></li>
            <?php $i++; endwhile; ?>

        </ol>
        <div class="carousel-inner">
            <?php 
                $i = 0;
                while($slider->have_posts()) : $slider->the_post();
                $active = ($i==0) ? "active" : ""; ?>
            
                <div class="carousel-item <?= $active ?>">
                    <img src="<?php the_post_thumbnail_url() ?>" alt="">
                    <div class="slider-text">
                        <h1><?php the_title(); ?></h1>
                        <p><?php the_excerpt()?></p>
                        <a href="<?php the_permalink() ?>" class="slider-btn yellow">اطلاعات بیشتر</a>

                        <?php 
                            $title_slider = get_post_meta(get_the_ID(), 'title_project', true);
                            $link_slider = get_post_meta(get_the_ID(), 'link_project', true);
                        ?>
                        <a href="<?= $link_slider ?>" class="slider-btn white"><?= $title_slider ?></a>
                    </div>
                </div>
            <?php $i++; endwhile ?>
        </div>
    </div>
</div>
<?php endif; wp_reset_postdata(); ?>

<div class="clearfix"></div>