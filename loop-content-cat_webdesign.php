<?php
$args = array(
'post_type' => 'post',
'category_name' => 'case-webdesign',
'posts_per_page' => -1,
'orderby' => 'date',
'order' => 'DESC',
);
$the_query = new WP_Query( $args );
while ( $the_query->have_posts() ) : $the_query->the_post();
?>

<!--ここにループの中の記述 -->
<article class="article-list">
  <div class="article-list-frame">
    <!--記事へのリンクを出力-->
    <a href="<?php the_permalink(); ?>">
    <!--サムネイル(アイキャッチ)画像を出力-->
      <?php
      if( has_post_thumbnail()){
        the_post_thumbnail('full');
      }
      ?>
      <div class="text">
        <!--投稿のタイトルを出力-->
        <h2><?php the_title(); ?></h2>
        <!--投稿日を表示-->
        <time class="article-date" datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
          <?php echo get_the_date(); ?>
        </time>
        <!--投稿のカテゴリを一つだけ出力-->
        <?php if( has_category() ){ ?>
          <span class="cat-data">
            <?php $postcat=get_the_category(); echo $postcat[0]->name; ?>
          </span>
        <?php } ?>
        
        <!--タグ出力-->
        <?php the_tags( '#', '#','' ); ?>
      </div><!-- end text -->
    </a>
  </div>
</article><!-- end article-list -->


<?php endwhile; wp_reset_postdata(); ?>

<?php
if ($the_query->max_num_pages > 1) {
  echo '<div class="pagination">';
  echo paginate_links( array(
    'base' => get_pagenum_link(1).'%_%',
    'format' => 'page/%#%/',
    'current' => max(1, $paged),
    'total' => $the_query->max_num_pages,
    'type' => 'list',
    'mid_size' => '1',
    'prev_text' => '«',
    'next_text' => '»'
    ) );
  echo '</div>';
}
?>
