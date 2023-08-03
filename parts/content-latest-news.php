<article class="latest-news">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>

    <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>

    <div class="meta-info">
        <p>
            <?php esc_html_e('by', 'wp-devs') ?> <span><?php the_author_posts_link() ?></span>
            <?php esc_html_e('Categories', 'wp-devs') ?>: <span><?php the_category(' ') ?></span>
            <?php esc_html_e('Tags', 'wp-devs') ?>: <?php the_tags('', ', ') ?>
        </p>

        <p><span><?php echo esc_html(get_the_date()) ?></span></p>

        <?php the_excerpt() ?>
    </div>
</article>