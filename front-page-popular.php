<?php

$posts = get_posts( array(
'numberposts' => 6,
'category'    => 0,
'orderby'     => 'date',
'order'       => 'DESC',
'include'     => array(),
'exclude'     => array(),
'meta_key'    => '',
'meta_value'  =>'',
'post_type'   => array('post','news'),
'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) ); ?>



<?php foreach( $posts as $post ){ ?>
<?php setup_postdata($post);?>

<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
    <div class="single-popular-items mb-50 text-center">
        <div class="popular-img">
            <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'post_image' );?>" alt="">
            <div class="img-cap">
                <span><a class="d-inline-block" href="<?php _e(the_permalink()); ?>"><?php _e('Читать' , 'rus') ?></a></span>
            </div>
            <div class="favorit-items">
                <span class="flaticon-heart"></span>
            </div>
        </div>
        <div class="popular-caption">
            <h3><a href="product_details.html"><?php _e(get_the_title()); ?></a></h3>
            <span><?php the_excerpt(); ?></span>
        </div>
    </div>
</div>
<?php } ?>
<?php wp_reset_postdata(); // сброс ?>

