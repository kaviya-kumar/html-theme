<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xtra Blog</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-xtra-blog.css" rel="stylesheet">
    <!--
    
TemplateMo 553 Xtra Blog

https://templatemo.com/tm-553-xtra-blog

-->
    <?php wp_head(); ?>
</head>

<body>
    <?php get_search_form(); ?>
    <header class="tm-header" id="tm-header">
        <div class="tm-header-wrapper">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="tm-site-header">
                <div class="mb-3 mx-auto tm-site-logo"><i class="fas fa-times fa-2x"></i></div>
                <h1 class="text-center">Xtra Blog</h1>
            </div>



            <nav class="tm-nav" id="tm-nav">
                <!-- <ul>
                     <li class="tm-nav-item active"><a href="http://localhost/xtra_blog/home/" class="tm-nav-link">
                             <i class="fas fa-home"></i>
                             Blog Home
                         </a></li>
                     <li class="tm-nav-item"><a href="http://localhost/xtra_blog/single/" class="tm-nav-link">
                             <i class="fas fa-pen"></i>
                             Single Post
                         </a></li>
                     <li class="tm-nav-item"><a href="http://localhost/xtra_blog/" class="tm-nav-link">
                             <i class="fas fa-users"></i>
                             About Xtra
                         </a></li>
                     <li class="tm-nav-item"><a href="http://localhost/xtra_blog/contact/" class="tm-nav-link">
                             <i class="far fa-comments"></i>
                             Contact Us
                         </a></li>
                 </ul> -->
                <?php wp_nav_menu(

                    array(
                        'menu' => 'trial',
                        'menu_class' => 'tm-nav',
                        'container' => 'div',
                        'add_li_class' => 'tm-nav-item',
                        'a_class' => 'tm-nav-link',
                        'active_class' => 'active',

                    )
                );
                ?>
            </nav>
            <div class="tm-mb-65">
                <a rel="nofollow" href="https://fb.com/templatemo" class="tm-social-link">
                    <i class="fab fa-facebook tm-social-icon"></i>
                </a>
                <a href="https://twitter.com" class="tm-social-link">
                    <i class="fab fa-twitter tm-social-icon"></i>
                </a>
                <a href="https://instagram.com" class="tm-social-link">
                    <i class="fab fa-instagram tm-social-icon"></i>
                </a>
                <a href="https://linkedin.com" class="tm-social-link">
                    <i class="fab fa-linkedin tm-social-icon"></i>
                </a>
            </div>
            <p class="tm-mb-80 pr-5 text-white">
                Xtra Blog is a multi-purpose HTML template from TemplateMo website. Left side is a sticky menu bar. Right side content will scroll up and down.
            </p>
        </div>

    </header>