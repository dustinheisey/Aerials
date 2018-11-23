<html <?php language_attributes(); ?>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
    <div class="container">
        <header class="header">
            <h1 class="header__logo">
                <!-- Mobile -->
                <img class="logo-mobile" width="90%" src="<?php echo get_theme_file_uri('/images/logo-mobile.png'); ?>">

                <!-- Desktop -->
                <img class="logo-desktop" width="90%" src="<?php echo get_theme_file_uri('/images/logo-desktop.png'); ?>">
            </h1>
        </header>