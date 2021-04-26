<?php

add_action( 'after_setup_theme', function() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5');

    register_nav_menus(array(
            'primary-menu' => 'Главное меню',
            'mobile-menu' => 'Мобильное меню',
        )
    );
});


// category single and post
function post_category(){
    $links = array_map( function ( $category ) {
    return sprintf(
        '<a href="%s" class="link link_text">%s </a>',
        esc_url( get_category_link( $category ) ),
        esc_html( $category->name )
    );
    }, get_the_category() );
    echo implode( '<a href="" class="disabled">, </a>', $links );
}

add_action('castom_post_author' , function (){?>
<a href="" class="disabled">
    <?php the_author(); ?>
</a>
<?php });


//sidebar
function sidebar_categories()
{
    $args = array(
        'show_option_all' => '',
        'show_option_none' => __('No categories'),
        'orderby' => 'count',
        'order' => 'DESC',
        'style' => 'list',
        'show_count' => 1,
        'hide_empty' => 1,
        'use_desc_for_title' => 1,
        'child_of' => 0,
        'feed' => '',
        'feed_type' => '',
        'feed_image' => '',
        'exclude' => '',
        'exclude_tree' => '',
        'include' => '',
        'hierarchical' => 0,
        'title_li' => '',
        'number' => 6,
        'echo' => 1,
        'depth' => 0,
        'current_category' => 0,
        'pad_counts' => 0,
        'taxonomy' => 'category',
        'walker' => 'Walker_Category',
        'hide_title_if_empty' => true,
        'separator' => '',
    );

    $categories = wp_list_categories('echo=0&show_count=1&orderby=count&number=6&order=DESC&title_li=0');
    $categories = str_replace( '(', '<a>(', $categories );
    $categories = str_replace( ')', ')</a>', $categories );
    echo $categories;
}




add_action( 'init', 'news_register_post_type_init' ); // Использовать функцию только внутри хука init
function news_register_post_type_init()
{
    $labels = array(
        'name' => 'Новости',
        'singular_name' => 'Новость', // админ панель Добавить->Функцию
        'add_new' => 'Добавить новость',
        'add_new_item' => 'Добавить новую новость', // заголовок тега <title>
        'edit_item' => 'Редактировать новость',
        'new_item' => 'Новая новость',
        'all_items' => 'Все новости',
        'view_item' => 'Просмотр новостей на сайте',
        'search_items' => 'Искать новости',
        'not_found' =>  'Новостей не найдено !!!!!',
        'not_found_in_trash' => 'В корзине нет новостей.',
        'menu_name' => 'Новости' // ссылка в меню в админке
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true, // показывать интерфейс в админке
        'has_archive' => true,
        'menu_icon' => 'dashicons-edit-large', // иконка в меню
        'menu_position' => 20, // порядок в меню
        'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail')
    );

    register_post_type('news', $args);
}

add_image_size('post_preview', 555, 280, 1);
add_image_size('post_image', 750, 375, 1);
add_image_size('avatar', 361, 489, 1);


/*
create role

*/

$result = add_role( // $result является переменной
    'employee', // basic reader - это имя назначенной $role
    __( 'Сотрудник' ), // Basic Reader назначенный $display_name
    array( // array список $capabilities для этой роли
        'read' => true, // Дает роли пользователя возможность читать сообщения.
        'edit_posts'  => true, // Дает роли пользователя возможность редактирования.
        'delete_posts'  => false,// Запрещает роли пользователя удалять записи.
    )
);


$employee = [
    'vasya1' => 'vasya1@mail.com',
    'vasya2' => 'vasya2@mail.com',
    'vasya3' => 'vasya3@mail.com',
    'vasya4' => 'vasya4@mail.com',
];

// set user role
foreach ($employee as $name => $email){
    register_new_user($name , $email);

    $WP_User = new WP_User(0,$name);
    $WP_User->set_role('employee');

}

// get views

add_action('block_meta', function() {
    echo '<li><a href="#"><i class="fa fa-eye"></i>';
    _e('Просмотров' , 'rus');
    echo ':   ';
    do_action('get_views');

    echo '<i class="lnr lnr-eye"></i></a></li>';
});


add_action('get_views', function() {
    $views = (int)get_post_meta(get_the_ID(), 'views', true);

    if (is_single()) {
        $views++;
        update_post_meta(get_the_ID(), 'views', $views);
    }else{
        echo $views;
    }
});


wp_enqueue_script('function', trailingslashit(get_template_directory_uri()) . 'js/function.js', array('jquery'), time(), 1);


// contacts

add_action('admin_menu',
    function() {
        add_menu_page( 'Контакты', 'Контакты', 'manage_options', 'contact_page', 'get_contact_page' );
        //add_submenu_page( 'inquires', 'Mail template', 'Mail template', 'manage_options', 'mail_template', 'get_mail_template' );
    }
);

function get_contact_page() {
// Сохранение настроек
if ($_POST) {
    update_option('site_country', stripslashes($_POST['country']));
    update_option('site_adress', stripslashes($_POST['adress']));
    update_option('site_phone', stripslashes($_POST['phone']));
    update_option('site_grafic', stripslashes($_POST['grafic']));
    update_option('site_email', stripslashes($_POST['email']));
    update_option('site_grafic_email', stripslashes($_POST['grafic_email']));
    echo '<div id="message" class="updated fade"><p><strong>Успешно сохраненно</strong></p></div>';
}

?>
<div class="wrap">
    <h2><?php echo get_admin_page_title() ?></h2>

    <form method="post" novalidate="novalidate">
        <label><?php _e('Город' , 'rus'); ?>
            <input type="text" name="country" value="<?php echo get_option('site_country'); ?>">
        </label>
        <br>
        <label><?php _e('Адрес' , 'rus'); ?>
            <input type="text" name="adress" value="<?php echo get_option('site_adress'); ?>">
        </label>
        <br>
        <label><?php _e('Телефон' , 'rus'); ?>
            <input type="text" name="phone" value="<?php echo get_option('site_phone'); ?>">
        </label>
        <br>
        <label><?php _e('График приёма звонков' , 'rus'); ?>
            <input type="text" name="grafic" value="<?php echo get_option('site_grafic'); ?>">
        </label>
        <br>
        <label><?php _e('Электронная почта' , 'rus'); ?>
            <input type="text" name="email" value="<?php echo get_option('site_email'); ?>">
        </label>
        <br>
        <label><?php _e('График рассмотрения почты' , 'rus'); ?>
            <input type="text" name="grafic_email" value="<?php echo get_option('site_grafic_email'); ?>">
        </label>
        <br>
        <p class="submit">
            <input type="submit" class="button button-primary button-large" value="<?php _e('Сохранить' , 'rus'); ?>" />
        </p>
    </form>
</div>
<?php }





// Волшебный AJAX
add_action( 'wp_ajax_contact', 'magicAjax' );
add_action( 'wp_ajax_nopriv_contact', 'magicAjax' );
//add_action( 'wp_ajax_{action}', 'magicAjax' );

function magicAjax() {
//    $status = wp_mail(get_option('admin_email'), __('Контакты'), print_r($_POST, 1));
    $status = wp_mail('jekekej634@zevars.com', __('Контакты'), print_r($_POST, 1));

    wp_send_json(array('status' => $status));
}


add_action( 'wp_ajax_needmore', 'magicAjax2' );
add_action( 'wp_ajax_nopriv_needmore', 'magicAjax2' );

function magicAjax2() {
    $data = new WP_Query('post_type=post&posts_per_page=1&orderby=rand');

    ob_start();
    ?>

    <?php if ($data->have_posts()): ?>
        <?php while($data->have_posts()): ?>
            <?php $data->the_post(); ?>
            <?php get_template_part('content/post', get_post_type());?>
        <?php endwhile; ?>
    <?php else : ?>
        <hr><?php _e('Ничего не найденно.', 'artjoker')?><hr>
    <?php endif; ?>

    <?php wp_reset_postdata(); ?>

    <?php

    $content = ob_get_contents();
    ob_clean();

    wp_send_json(
        array(
            'status' => 1,
            'content' => $content
        )
    );
}


if( post_type_exists( 'news' ) ){
    echo 'post yest';
}

add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){
    return '
	<nav class="navigation %1$s" style="text-decoration-color: green" role="navigation">
		<ul><li class="nav-links page-link">%3$s</li></ul>
	</nav>    
	';
}

