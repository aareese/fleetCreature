<!DOCTYPE html>
    <head>
        <script type="text/javascript" src="js/prefixfree.js"></script>
        <script type="text/javascript" src="js/modernizr-2.0.6.js"></script>
        <title><?php wp_title(''); ?> <?php bloginfo('name'); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
        <link rel="shortcut icon" href="http://www.fleetcreature.com/favicon.ico" type="image/ico" />
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/css/reset.css" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/css/text.css" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/css/960_8_40.css" />
       <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="screen" />
         <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400" rel="stylesheet" type="text/css" />
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="blogheader-container">
            <div class="blogheader">            
                <div class="main_nav">
                    <ul>
                       	<?php wp_nav_menu( array( 'theme_location' => 'main_nav' ) );   ?> 
                    </ul>
                </div>
                <div class="categories">
                    <ul>
           					<?php wp_list_categories( 'show_count=0&title_li=&hide_empty=0&exclude=1'); ?>
                    </ul>
                </div>
            </div>            
        </div>
      