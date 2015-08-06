<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>

<?php

    if ( is_single() ){ 

         single_post_title(); 

         }

    elseif ( is_page() ) { 

        single_post_title(''); 

        }

    elseif ( is_search() ) { 

        bloginfo('name');

        print ' | نتایج جستجو برای ' . wp_specialchars($s);

        }

    elseif ( is_404() ) { 

        bloginfo('name'); 

        print ' | 404'; 

        }

    else { 

        bloginfo('name'); 

        }

?>

</title>

<link href='http://awebfont.ir/css?id=1116' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

 	<link rel="shortcut icon" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/images/favicon.png" type="image/x-icon" />

    <!--[if lt IE9]>

    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript">

    </script>

    <!endif-->

    <?php if(is_single() && get_option('thread_comments') ) wp_enqueue_script('comment_replay'); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper">
	<div id="wrapper-bgtop">
		<div id="wrapper-bgbtm">
			<div id="header">
				<div id="logo">
					<h1><a href="<?php bloginfo('url'); ?>" /><?php bloginfo('name'); ?></a></h1>                    
                </div>
				<?php get_search_form(); ?>
			</div>
            <?php /* ?>
			<div id="menu">
				<ul>
                	<?php wp_page_menu(); ?>
                </ul>
            </div>
			<?php */ ?>
	<?php wp_head(); ?>
