<?php get_header(); ?>
<div class="container">
  <div class="contents">

    <div class="c-c-single content_left_common">

      <div id="breadcrumb" class="bread">
        <ul>
          <li>
            <a href="<?php echo home_url(); ?>">
              <span>トップ</span>
            </a>
          </li>
          <li>
            <?php if( has_category() ): ?>
              <?php $postcat=get_the_category();
                echo get_category_parents( $postcat[0],true, '</li><li>' ); ?>
            <?php endif; ?>
            <a>
              <?php the_title(); ?>
            </a>
          </li>
        </ul>
      </div>

      <?php if(have_posts()): the_post(); ?>
      <article <?php post_class( 'article-content' ); ?>>
        <div class="article-info">
          <!--アイキャッチ取得-->
          <div class="article-img">
            <?php if( has_post_thumbnail() ): ?>
              <?php the_post_thumbnail( 'large' ); ?>
            <?php endif; ?>
          </div>

          <!--タイトル-->
          <h1><?php the_title(); ?></h1>
          <!--カテゴリ取得-->
          <?php if(has_category() ): ?>
          <span class="cat-data">
            <?php echo get_the_category_list( ' ' ); ?>
          </span>
          <?php endif; ?>
          <!--投稿日を取得-->
          <span class="article-date">
            <i class="far fa-clock"></i>
            <time
            datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
            <?php echo get_the_date(); ?>
            </time>
          </span>

        </div>
        <!--本文取得-->
        <?php the_content(); ?>
        <!--タグ-->
        <div class="article-tag">
          <?php the_tags('<ul><li>タグ： </li><li>','</li><li>','</li></ul>'
        ); ?>
        </div>
      </article>
      <?php endif; ?>


    </div>
  </div><!--end contents-->

</div><!--end container-->



<?php get_footer(); ?>
