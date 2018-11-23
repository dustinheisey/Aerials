<?php 

function banner($args) {

    if(!$args['title']){
        $args['title'] = get_the_title();
    }
?>
    <div class="sub-header">
        <h2><?php echo $args['title'] ?></h2>
        <h4><?php echo $args['subtitle'] ?></h4>
    </div>
<?php
}
function files() {
    wp_enqueue_style('open sans', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600');
    wp_enqueue_script('font awesome', 'https://use.fontawesome.com/releases/v5.0.9/js/all.js');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', null, microtime());
}

add_action( 'wp_enqueue_scripts', 'files');

function features() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'features');

// redirect to homepage 
add_action('admin_init', 'redirect');

function redirect() {
    $CurrentUser = wp_get_current_user();
    if(count($CurrentUser->roles) == 1 AND $CurrentUser->roles[0] == 'subscriber') {
        wp_redirect(site_url('/'));
        exit;
    }
}

//no subs admin
add_action('wp_loaded', 'noAdminBar');

function noAdminBar() {
    $CurrentUser = wp_get_current_user();
    if(count($CurrentUser->roles) == 1 AND $CurrentUser->roles[0] == 'subscriber') {
        show_admin_bar(false);
    }
}

add_filter('login_headerurl', 'headerUrl');

function headerUrl() {
    return esc_url(site_url('/'));
}



add_action('login_enqueue_scripts', 'loginCSS');

function loginCSS() {
    wp_enqueue_style('login', get_template_directory_uri() . '/css/login.css', null, microtime());
}
?>