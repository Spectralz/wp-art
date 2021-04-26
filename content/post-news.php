
<article class="blog_item">
    <div class="blog_item_img">
        <img class="card-img rounded-0" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'post_image' );?>" alt="">
        <a href="#" class="blog_item_date">
            <h3><?php the_time('j'); ?></h3>
            <p><?php the_time('M'); ?></p>
        </a>
    </div>
    <div class="blog_details">
        <a class="d-inline-block" href="<?php _e(the_permalink()); ?>">
            <h2><?php _e(get_the_title()); ?></h2>
        </a>
        <p><?php the_excerpt(); ?></p>
        <ul class="blog-info-link">
            <li><a href=""><i class="fa fa-user"></i></a>
                <?php do_action('castom_post_author'); ?>
                <?php do_action('block_meta'); ?>
            </li>
            <li><a href=""><i class="fa fa-bars"></i></a>
                <?php post_category(); ?></li>
            <li><a href="#"><i class="fa fa-comments"></i><?php comments_number(); ?></a></li>
        </ul>
    </div>
</article>