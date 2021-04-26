<?php

$users = get_users( [
    'role'         => 'employee',
    'number'       => '3'
] );
?>
<?php foreach( $users as $user ){?>

<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
    <div class="single-new-pro mb-30 text-center">
        <div class="product-img">
<!--            <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/gallery/new_product1.png" alt="">-->
            <?php $url = get_avatar_url( $user->ID, array(
            'default'=>'identicon',
            ) ); ?>
            <img src="<?php echo $url ;?>" alt="">
        </div>
        <div class="product-caption">
            <h3><a href="product_details.html"><?php echo $user->first_name ; ?> <?php echo $user->last_name ; ?></a></h3>
            <h3><a href="product_details.html"><?php echo $user->user_login ; ?></a></h3>
        </div>
    </div>
</div>


<?php }; ?>