<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="robots" content="index, follow" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <link rel="canonical" href="<?php bloginfo('url'); ?>">
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="icon" type="image/gif" href="animated_favicon1.gif">
        <title><?php bloginfo('title'); ?></title>
        <link href="<?php bloginfo( 'template_directory' ); ?>/css/common.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
<body id="fn-hesiveTop">
<?php print_r($wp_query); ?>
    

    <div class="c-parallax" id="fn-parallax-1">
        <div class="c-parallax-logo">
            <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="onedayrecsロゴ">
        </div>  
        <div class="c-parallax-body">

        </div> 
    </div> 
    <div class="header">
    <nav class="hidden-xs">
        <ul class="left hide-on-med-and-down">
            <li><a class="page-scroll" href="#blog">BLOG</a></li>
            <li><a class="page-scroll" href="#event">EVENT</a></li>
            <li><a class="page-scroll" href="#releases">RELEASES</a></li>
            <li><a class="page-scroll" href="#videos">VIDEOS</a></li>
            <li><a class="page-scroll" href="#contact">CONTACT</a></li>
        </ul>
        <ul class="social-icons">
            <li>
                <a href="https://twitter.com/tixeebox1" target="_blank">
                    <i class="icon-twitter"></i>
                </a>
            </li>
        </ul>
    </nav>
    <nav class="visible-xs navbar-fixed-top">
        <ul class="right hide-on-med-and-down">
            <li><a class="page-scroll" href="#blog">BLOG</a></li>
            <li><a class="page-scroll" href="#event">EVENT</a></li>
            <li><a class="page-scroll" href="#releases">RELEASES</a></li>
            <li><a class="page-scroll" href="#videos">VIDEOS</a></li>
            <li><a class="page-scroll" href="#contact">CONTACT</a></li>
        </ul>
        <ul id="slide-out" class="side-nav">
            <li><a class="page-scroll" href="#blog">BLOG</a></li>
            <li><a class="page-scroll" href="#event">EVENT</a></li>
            <li><a class="page-scroll" href="#releases">RELEASES</a></li>
            <li><a class="page-scroll" href="#videos">VIDEOS</a></li>
            <li><a class="page-scroll" href="#contact">CONTACT</a></li>
        </ul>
        <a data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
        <a href="#top" class="brand-logo center"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="tixeeboxロゴ"></a>
        <ul class="social-icons">
            <li>
                <a href="https://twitter.com/tixeebox1" target="_blank">
                    <i class="icon-twitter"></i>
                </a>
            </li>
        </ul>
    </nav>
</div>
    <div class="wrapper" id="fn-showHere">

        <section class="row container" id="blog">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
                <section class="col s12 m6 l3">
                    <div class="card">
                        <div class="card-image">
                            <a href='<?php the_permalink() ?>'>
                                <?php the_post_thumbnail(); ?>
                            </a>
                        </div>
                        <h1 class="card-action heading-b heading-b--row3">
                            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                        </h1>
                    </div>
                </section>
            <?php endwhile ?>
            <div class="navigation">
                <?php next_posts_link(trim(__('&laquo; ← NEW', 'default'))) ?>
                <?php previous_posts_link(trim(__('OLD → &raquo;', 'default'))) ?>
            </div>
            <?php else : ?>
                記事はありません
        <?php wp_reset_query();endif; ?>


        </section>
    </div>

    
                    <!--フッター-->
                <footer class="footer">
                    <div class="container">
                        ©2015 LiveStyles, Inc. All Rights Reserved.
                    </div>
                </footer>
            <script src="<?php bloginfo( 'template_directory' ); ?>/js/lib.min.js"></script>
        <script src="<?php bloginfo( 'template_directory' ); ?>/js/all.js"></script>
        <script src="<?php bloginfo( 'template_directory' ); ?>/js/common.js"></script>
    </body>
</html>
