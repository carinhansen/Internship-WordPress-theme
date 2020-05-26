<?php get_header();

?>
    <div class="container">
        <div class="cat-title">
            <h1><?php single_term_title(); ?> /Tag</h1>
            <span>Dit is een overzicht van alle bewijsmateriaal voor de competentie "<?php single_term_title(); ?>". Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</span>
        </div>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="post-container">
                    <a href="<?php the_permalink(); ?>">
                        <div class="post-thumbnail" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>
                    </a>
                    <div class="post-text">
                        <h2><a href="<?php the_permalink(); ?>" class="category-title-link"><?php the_title(); ?></a>
                        </h2>
                        <?php the_excerpt(); ?>
                        <span class="title-category">
                        <?php if (has_category() && !has_category('Uncategorized')) : ?>
                            <?php the_category('  |  '); ?> |
                        <?php else : ?>
                        <?php endif; ?>
                            <!--                            --><?php //the_date(get_option('date_format')); ?>
                        </span>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <h1>No posts were found.</h1>
        <?php endif; ?>
        <p class="article-nav-next pull-right"><?php previous_posts_link(__('Newer Posts »')); ?></p>
        <p class="article-nav-prev pull-left"><?php next_posts_link(__('« Older Posts')); ?></p>
    </div>
<?php get_footer(); ?>