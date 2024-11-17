<?php get_header(); ?>

<p>front-page.phpファイルです。</p>

<ul>
  <?php
    $args = array(
      'posts_per_page' => 3,
      'post_type' => 'post',
      'orderby' => 'date',
      'order' => 'DESC',
    );
    $query = new WP_Query($args);
    if($query->have_posts()){
      while($query->have_posts()){
        $query->the_post();
  ?>
  <li>
    <article>
      <a href="<?php the_permalink(); ?>" class="top__article">
        <div class="top__article-info">
          <time class="top__article-date" datetime="<?php echo get_the_time('Y-m-d') ?>"
            ><?php echo get_the_time('Y.m.d') ?></time
          >
          <?php
            $cats = get_the_category();
            echo '<div class="top__article-cats">';
            foreach($cats as $cat){
              echo '<p class="top__article-cat">' . $cat->name . '</p>';
            }
            echo '</div>';
          ?>
        </div>
        <h3 class="top-news__article-title">
          <?php the_title(); ?>
        </h3>
      </a>
    </article>
  </li>
  <?  }
    wp_reset_postdata();
  } ?>
</ul>

<?php get_footer(); ?>
