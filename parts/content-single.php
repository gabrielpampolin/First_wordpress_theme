<header>
    <h1><?php the_title() ?></h1>

    <div class="meta-info">
        <p><?php esc_html_e('Posted in', 'wp-devs') ?> <?php echo esc_html(get_the_date()) ?> <?php esc_html_e('by', 'wp-devs') ?> <?php the_author_posts_link() ?></p>

        <?php if(has_category()): ?>
            <p><?php esc_html_e('Categories', 'wp-devs') ?>: <?php the_category(', ') ?></p>
        <?php endif; ?>

        <?php if(has_tag()): ?>
            <p><?php esc_html_e('Tags', 'wp-devs') ?>: <?php the_tags('', ', ') ?></p>
        <?php endif; ?>
    </div>
</header>

<div class="content">
    <?php the_content() ?>
</div>

<div class="wpdevs-pagination">
    <div class="pages next"><?php next_post_link('&laquo; %link') ?></div>

    <div class="pages previous"><?php previous_post_link('%link &raquo') ?></div>
</div>