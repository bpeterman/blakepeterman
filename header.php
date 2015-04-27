<html>
    <head>
        <title><?php
if (!is_home()) {
    echo the_title();
    echo " | ";
}
?><?php echo get_bloginfo('name'); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <link href='http://fonts.googleapis.com/css?family=Bitter:400,700,400italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div id="wrapper">
            <div id="header">
                <h1><a href ="<?php echo get_home_url(); ?>"><?php echo get_bloginfo('name'); ?></a></h1>
                <div id="description"><?php echo get_bloginfo('description'); ?></div>
                <div id=profile><a href="<?php echo get_home_url(); ?>"><img src="http://blakepeterman.com/wp-content/uploads/2015/04/blake-compressor.jpg" alt="You guessed it, that's Blake" /></a></div>
                <div id="menu"><?php
                    // Get the nav menu based on $menu_name (same as 'theme_location' or 'menu' arg to wp_nav_menu)
                    // This code based on wp_nav_menu's code to get Menu ID from menu slug

                    $menu_name = 'primary';

                    if (( $locations = get_nav_menu_locations() ) && isset($locations[$menu_name])) {
                        $menu = wp_get_nav_menu_object($locations[$menu_name]);

                        $menu_items = wp_get_nav_menu_items($menu->term_id);

                        $menu_list = '<ul id="menu-' . $menu_name . '">';

                        foreach ((array) $menu_items as $key => $menu_item) {
                            $title = $menu_item->title;
                            $url = $menu_item->url;
                            $menu_list .= '<li><a href="' . $url . '">' . $title . '</a></li>';
                        }
                        $menu_list .= '</ul>';
                    } else {
                        $menu_list = '<ul><li>Menu "' . $menu_name . '" not defined.</li></ul>';
                    }
                    // $menu_list now ready to output

                    echo $menu_list;
                    ?>
                </div>


            </div>

