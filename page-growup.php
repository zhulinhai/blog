<?php get_header(); ?>
<div class="wrapper">
    <?php include 'sidebar.php'; ?>
    <div class="pageInfo">
        <div class="post-list">
            <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'category_name' => 'growup',
                    // 控制只显示10篇文章，如果将10改成-1将显示所有文章
                    'showposts' => 6,
                    'paged' => $paged
                );
                query_posts($args);
            ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article class="post">
                    <a href="<?php the_permalink() ?>">
                        <div class="post-image">
                            <figure><?php the_post_thumbnail(); ?></figure>
                            <p>了解更多</p>
                        </div>
                        <div class="post-data">
                            <h1><?php the_title(); ?></h1>
                            <p><?php the_excerpt(); ?></p>
                            <ul>
                                <li>发布于<?php the_time('Y年n月j日') ?></li>
                                <li><span class="cat-material"><?php the_author() ?></span></li>
                            </ul>
                        </div>
                    </a>
                </article>
            <?php endwhile; ?>
        </div>
        <div class="page_navi"><?php par_pagenavi(6); ?></div>
    </div>
</div>

<?php get_footer(); ?>