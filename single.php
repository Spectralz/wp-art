<?php
/*
Template Name: Страница поста
*/
?>

<?php get_header(); ?>

<!-- Hero Area Start-->
<div class="slider-area ">
    <div class="single-slider slider-height2 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2><?php _e(the_title()); ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--================Blog Area =================-->
<section class="blog_area single-post-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post">
                    <div class="feature-img">
                        <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'post_image' );?>" alt="">
                    </div>
                    <div class="blog_details">
                        <h2>Second divided from form fish beast made every of seas
                            all gathered us saying he our
                        </h2>
                        <ul class="blog-info-link mt-3 mb-4">
                            <li><a href=""><i class="fa fa-user"></i></a>
                                <?php post_category(); ?>
                            </li>
                            <li><a href="#"><i class="fa fa-comments"></i><?php comments_number();?></a></li>
                                <?php do_action('get_views'); ?>
                        </ul>
                        <p class="excert">
                            <?php _e(the_content()) ?>
                        </p>
                    </div>
                </div>
                <div class="navigation-top">
                    <div class="d-sm-flex justify-content-between text-center">
                        <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                            people like this</p>
                        <div class="col-sm-4 text-center my-2 my-sm-0">
                            <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                        </div>
                    </div>
                    <div class="navigation-area">
                        <div class="row">
                            <div
                                class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                <div class="desc">
                                    <?php the_post_navigation( array(
                                        'prev_text' =>'<span class="screen-reader-text" style="color: black">Предыдущая запись</span> ',
                                    ) );?>
                                </div>
                            </div>
                            <div
                                class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                <div class="desc" style="color: black">
                                        <?php the_post_navigation( array(
                                        'next_text' =>'<span class="screen-reader-text " style="color: black">Следующая запись</span> ',
                                    ) );?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-author">
                    <div class="media align-items-center">
                        <img src="img/blog/author.png" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4>Harvard milan</h4>
                            </a>
                            <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he
                                our dominion twon Second divided from</p>
                        </div>
                    </div>
                </div>
                <div class="comments-area">
                    <h4>05 Comments</h4>
                    <div class="comment-list">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="img/comment/comment_1.png" alt="">
                                </div>
                                <div class="desc">
                                    <p class="comment">
                                        Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                                        Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <h5>
                                                <a href="#">Emilly Blunt</a>
                                            </h5>
                                            <p class="date">December 4, 2017 at 3:12 pm </p>
                                        </div>
                                        <div class="reply-btn">
                                            <a href="#" class="btn-reply text-uppercase">reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-list">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="img/comment/comment_2.png" alt="">
                                </div>
                                <div class="desc">
                                    <p class="comment">
                                        Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                                        Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <h5>
                                                <a href="#">Emilly Blunt</a>
                                            </h5>
                                            <p class="date">December 4, 2017 at 3:12 pm </p>
                                        </div>
                                        <div class="reply-btn">
                                            <a href="#" class="btn-reply text-uppercase">reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="comment-list">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="img/comment/comment_3.png" alt="">
                                </div>
                                <div class="desc">
                                    <p class="comment">
                                        Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                                        Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <h5>
                                                <a href="#">Emilly Blunt</a>
                                            </h5>
                                            <p class="date">December 4, 2017 at 3:12 pm </p>
                                        </div>
                                        <div class="reply-btn">
                                            <a href="#" class="btn-reply text-uppercase">reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comment-form">
                    <h4>Leave a Reply</h4>
                    <form class="form-contact comment_form" action="#" id="commentForm">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                 <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                           placeholder="Write Comment"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>
<!--================ Blog Area end =================-->

<?php get_footer(); ?>