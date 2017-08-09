<?php get_header(); ?>
<div class="wrapper">
    <?php get_sidebar(); ?>
    <div class="pageInfo">
        <?php if(have_posts()): ?>
            <?php while (have_posts()): the_post(); ?>
                <h1 class="title"><?php the_title() ?></h1>
                <div class="entry">
                    <?php the_content(); ?>
                    <?php link_pages('<p><strong>Pages:</strong>', '</p>', 'number'); ?>
                </div>

            <?php endwhile; ?>
        <?php else: ?>
            <div class="post">
                <h2><?php _e('Not Found'); ?></h2>
            </div>
        <?php endif; ?>
        <div class="navigation">
            <div class="fLeft"> <?php if (get_next_post(true)) { next_post_link('上一篇: %link','%title',true);} else { echo "已是最新文章";} ?></div>
            <div class="fRight"><?php if (get_previous_post(true)) { previous_post_link('下一篇: %link','%title');} else { echo "已是最后文章";} ?></div>
        </div>
    </div>
</div>
<?php get_footer(); ?>