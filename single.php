<?php get_header(); ?>

    <div class="full-header-container">
        <div class="full-split-header">
            <div class="full-split-header-text">
                <h1><?php the_title(); ?></h1>
                <?php the_excerpt(); ?>
            </div>
        </div>
        <div class="full-split-header full-split-header-right"
             style="background-image: url('<?php the_post_thumbnail_url() ?>')"></div>
    </div>


    <div class="container single-page-content">
        <?php if (have_posts()) : while (have_posts()) :
            the_post(); ?>
            <span class="title-category-section">Categorie</span>
            <span><?php the_category() ?></span>
            <?php the_content(); ?>
        <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
    </div>

<?php get_footer(); ?>