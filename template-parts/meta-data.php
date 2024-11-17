<?php
  $title = get_the_title() . '｜' . get_bloginfo('name');
  $description = 'ページの説明文が入ります';
  $noindex = '';

  if (is_front_page()) {
    $title = 'TOPページのタイトル';
    $description = 'TOPページの説明が入ります';
} elseif (is_404()) {
    $title = 'ページが見つかりませんでした | サイト名';
    $noindex = '<meta name="robots" content="noindex">';
}
?>
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $description; ?>" />
<?php echo $noindex; ?>
