<?php get_header(); ?>
<div class="container">
  <div class="contents">
    <?php $archive_cat = get_the_category();
    //カテゴリーIDの取得
    $cat_termid = $archive_cat[0]->term_id;
    //カテゴリー名の取得
    $cat_name = $archive_cat[0]->name;
    // カテゴリーidの取得
    $cat_id = $archive_cat[0]->cat_ID;
    // カテゴリースラッグの取得
    $cat_slug = $archive_cat[0]->slug;
    // カテゴリーの説明の取得
    $cat_description = $archive_cat[0]->category_description;
     ?>

     <div class="c-c-category_name_title">
       <p>
         「<?php echo $cat_name; ?>」の記事一覧
       </p>
     </div>

     <div id="breadcrumb" class="bread">
       <ul>
         <li>
           <a href="<?php echo home_url(); ?>">
             <span>TOP</span>
           </a>
         </li>
         <li>
           <?php
             if( $cat ) {
               $catdata = get_category( $cat );
               if( $catdata->parent ) {
                 echo get_category_parents( $catdata->parent, true, '</li><li>' );
               }
             } ?>
           <a><?php single_term_title(); ?></a>
         </li>
       </ul>
     </div>


    <div class="c-c-category content_left_common">

      <?php
      global $max_num_page;
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
      $args = array(
      'post_type' => 'post',
      'category_name' => $cat_slug,
      'posts_per_page' => 12,
      'orderby' => 'date',
      'order' => 'DESC',
      'paged' => $paged,
      );
      $the_query = new WP_Query( $args );
      while ( $the_query->have_posts() ) : $the_query->the_post();
      ?>

      <!--ここにループの中の記述 start-->
      <article class="article-list">
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
            <!--抜粋欄に記述した内容を出力-->
            <?php the_excerpt(); ?>
            <?php the_tags( '#', '#','' ); ?>
          </div><!-- end text -->
        </a>
      </article><!-- end article-list -->

      <!--ここにループの中の記述 end-->

      <?php endwhile; wp_reset_postdata(); ?>
      <?php the_posts_pagination(); ?>



    </div><!--end archive-top-->
    <?php get_sidebar(); ?>
  </div><!--end contents-->
</div><!--end container-->

<!--js読み込み（start）-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<?php category_scripts(); ?>
<?php header_scripts(); ?>
 <!--js読み込み（end）-->
<?php get_footer(); ?>
