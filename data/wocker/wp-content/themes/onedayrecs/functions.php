<?php
// メインページから特定のカテゴリーを除外する
function exclude_category( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'cat', '-1,-15,-17,-20' );
    }
}
add_action( 'pre_get_posts', 'exclude_category' );

// ウィジェットエリア
// サイドバーのウィジェット
register_sidebar( array(
     'name' => __( 'Side Widget' ),
     'id' => 'side-widget',
     'before_widget' => '<li class="widget-container">',
     'after_widget' => '</li>',
     'before_title' => '<h3>',
     'after_title' => '</h3>',
) );
 
// フッターエリアのウィジェット
register_sidebar( array(
     'name' => __( 'Footer Widget' ),
     'id' => 'footer-widget',
     'before_widget' => '<div class="widget-area"><ul><li class="widget-container">',
     'after_widget' => '</li></ul></div>',
     'before_title' => '<h3>',
     'after_title' => '</h3>',
) );
 
// カスタムナビゲーションメニュー
add_theme_support('menus');
//アイキャッチ画像
add_theme_support( 'post-thumbnails', array( 'post' ) );
?>
