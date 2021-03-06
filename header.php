<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>alexSHARKE</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:400,700,900" rel="stylesheet">
    <!-- Font Awesome -->
    <script defer src='https://use.fontawesome.com/releases/v5.0.8/js/all.js'></script>
    <!-- Custom Styles -->
    <link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/styles/style.css">
    
    <?php wp_head(); ?>
</head>

<body>
    <?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?>

    <?php if (is_front_page()) { ?>

        <!-- Home Header Img Loop -->
        <?php
            $header_arg = array(
                "post_type" => 'header_image',
                "posts_per_page" => 1,
                'orderby' => 'rand'
            );

            $header_q = new WP_Query($header_arg);
            if($header_q->have_posts()) : while($header_q->have_posts()) : $header_q->the_post();
                $background = get_field('images');

            endwhile; endif; 
        ?>

        <header class="header-home" style="background-image: url(<?php echo $background; ?>);">
            <div class="overlay"></div>
            <div class="logos">
                <img class="alex-logo" src="<?php echo bloginfo('template_url');?>/inc/imgs/alex-logo.png" alt="Alex Sharke">
                <img class="sharke-logo" src="<?php echo bloginfo('template_url');?>/inc/imgs/shark-logo.png" alt="Shark Fin in water">
            </div>
        </header>

    <?php } else {  ?>
        
        <header class="single_page--header">
            <h1>HI MATTY</h1>
        </header>

    <?php } ?>