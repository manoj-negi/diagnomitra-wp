<header class="site-header">
    <div class="container">
        <div class="header-content">
            <div class="site-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Site Logo">
                </a>
            </div>
            <nav class="site-navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'header-menu',
                    'menu_class' => 'header-menu',
                ));
                ?>
            </nav>
        </div>
    </div>
</header>
