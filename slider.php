<!--? slider Area Start -->
<div class="slider-area ">
    <div class="slider-active">
        <!-- Single Slider -->
        <?php $slider = CFS()->get('slider'); ?>
        <?php foreach ($slider as $slide) : ?>
        <div class="single-slider slider-height d-flex align-items-center slide-bg">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                        <div class="hero__caption">
                            <h1 data-animation="fadeInLeft" data-delay=".4s" data-duration="2000ms"><?php echo $slide['title'];?></h1>
                            <p data-animation="fadeInLeft" data-delay=".7s" data-duration="2000ms"><?php echo $slide['description'];?></p>
                            <!-- Hero-btn -->
                            <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s" data-duration="2000ms">
                                <a href="https://web-creator.ru/articles/solid" class="btn hero-btn"><?php _e('Читать ...' , 'rus'); ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 d-none d-sm-block">
                        <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                            <img src="<?php echo $slide['photo'];?>" alt="<?php echo esc_attr($slide['title']);?>" class=" heartbeat">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- slider Area End-->