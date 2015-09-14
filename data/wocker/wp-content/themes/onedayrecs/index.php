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
    

    <div class="parallax-container">
        <div class="parallax-logo hidden-xs">
            <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="tixeeboxロゴ">
        </div>
        <div class="parallax">
            <img src="<?php bloginfo('template_directory'); ?>/img/bg700.png" alt="tixeeboxイメージ">
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
        <?php
        $cat = 'blog';
        $num = '4';//取得件数
        global $post;

        $term_id = get_category_by_slug($cat)->term_id;
        $myposts = get_posts('numberposts=' .$num. '&category_name=' .$cat);
        if ($myposts) {
            echo '<h1 class="heading-a">' .get_the_category_by_ID($term_id). '</h1>';
            foreach($myposts as $post):
                setup_postdata($post);
            echo '  <section class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-image">
                                <a href=' .get_the_permalink(). '>'
                                    .get_the_post_thumbnail(). 
                                '</a>
                            </div>
                            <h1 class="card-action heading-b heading-b--row3">
                                <a href="<?php the_permalink() ?>">'.get_the_title().'</a>
                            </h1>
                        </div>
                    </section>'
                    ;
            endforeach;
        } else {
            echo '<p>記事がありません。</p>';
        }
        ?>
        </section>

        <section class="row container" id="event">
        <?php
        $cat = 'event';
        $num = '4';//取得件数
        global $post;

        $term_id = get_category_by_slug($cat)->term_id;
        $myposts = get_posts('numberposts=' .$num. '&category_name=' .$cat);
        if ($myposts) {
            echo '<h1 class="heading-a">' .get_the_category_by_ID($term_id). '</h1>';
            foreach($myposts as $post):
                setup_postdata($post);
            echo '  <section class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-image">
                                <a href=' .get_the_permalink(). '>'
                                    .get_the_post_thumbnail(). 
                                '</a>
                            </div>
                            <h1 class="card-action heading-b heading-b--row3">
                                <a href="<?php the_permalink() ?>">'.get_the_title().'</a>
                            </h1>
                        </div>
                    </section>'
                    ;
            endforeach;
        } else {
            echo '<p>記事がありません。</p>';
        }
        ?>
        </section>
    </div>

    <div class="parallax-container">
        <div class="parallax">
            <img src="<?php bloginfo('template_directory'); ?>/img/bg.png" alt="tixeeboxイメージ">
        </div>
    </div>

    <div class="wrapper">    
        <section class="row container" id="releases">
        <?php
        $cat = 'releases';
        $num = '20';//取得件数
        global $post;

        $term_id = get_category_by_slug($cat)->term_id;
        $myposts = get_posts('numberposts=' .$num. '&category_name=' .$cat);
        if ($myposts) {
            echo '<h1 class="heading-a">' .get_the_category_by_ID($term_id). '</h1>';
            foreach($myposts as $post):
                setup_postdata($post);
            echo '  <section class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-image">
                                <a href=' .get_permalink(). '>'
                                    .get_the_post_thumbnail(). 
                                '</a>
                            </div>
                            <h1 class="card-action heading-b">
                                <a href="<?php the_permalink() ?>">'.get_the_title().'</a>
                            </h1>
                        </div>
                    </section>'
                    ;
            endforeach;
        } else {
            echo '<p>記事がありません。</p>';
        }
        ?>
        </section>

        <section class="row container" id="videos">
        <?php
        $cat = 'videos';
        $num = '4';//取得件数
        global $post;

        $term_id = get_category_by_slug($cat)->term_id;
        $myposts = get_posts('numberposts=' .$num. '&category_name=' .$cat);
        if ($myposts) {
            echo '<h1 class="heading-a">' .get_the_category_by_ID($term_id). '</h1>';
            foreach($myposts as $post):
                setup_postdata($post);
            echo '  <section class="col s12 m6 l3">
                        <div class="card">
                            <div class="card-image">
                                <a href=' .get_the_permalink(). '>'
                                    .get_the_post_thumbnail(). 
                                '</a>
                            </div>
                            <h1 class="card-action heading-b">
                                <a href="<?php the_permalink() ?>">'.get_the_title().'</a>
                            </h1>
                        </div>
                    </section>'
                    ;
            endforeach;
        } else {
            echo '<p>記事がありません。</p>';
        }
        ?>
        </section>

        <section class="row container" id="contact">
            <h1 class="heading-a">
                CONTACT
            </h1>
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
