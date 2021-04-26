<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>
<!-- ================ contact section start ================= -->
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="contact-title"><?php _e('Свяжитесь с нами' , 'rus');?> </h2>
            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form"  id="contactSForm" novalidate="novalidate">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" <?php _e('Введите сообщение' , 'rus');?>"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="<?php _e('Введите имя' , 'rus');?>">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="<?php _e('Ваша почта' , 'rus');?>">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="<?php _e('Тема сообщения' , 'rus');?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm boxed-btn"><?php _e('Отправить' , 'rus');?></button>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <h3><?php echo get_option('site_country'); ?></h3>
                        <p><?php echo get_option('site_adress'); ?></p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                        <h3><?php echo get_option('site_phone'); ?></h3>
                        <p><?php echo get_option('site_grafic'); ?></p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3><?php echo get_option('site_email'); ?></h3>
                        <p><?php echo get_option('site_grafic_email'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================ contact section end ================= -->

<?php get_footer(); ?>