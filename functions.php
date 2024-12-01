<?php

  // お知らせ投稿のアーカイブページ有効化
  function post_has_archive( $args, $post_type ) {
    if ( 'post' == $post_type ) {
      $args['rewrite'] = true;
      $args['has_archive'] = 'news'; //任意のスラッグ名　
      $args['label'] = 'お知らせ'; //管理画面左ナビに「投稿」の代わりに表示される
    }
    return $args;
  }
  add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );
