<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">    
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        
<!-- ===================================
        Start Here
========================================-->


<section  class="header_section_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div  class="header_section_content">
                     <h1><a href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                </div>
            </div>
            <div class="col-xl-8">
                <div  class="main_menu_area">
                     <?php wp_nav_menu(array(
                            'theme_location' => 'main_menu'


                        )); ?>
                </div>
            </div>
        </div>
    </div>
</section>
