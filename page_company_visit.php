<?php /* Template Name: Company visit */ ?>

<?php get_header(); ?>
<div class="full-header-container">
    <div class="full-header" style="background-image: url('<?php the_post_thumbnail_url() ?>')">
        <h1 class="title"></h1>
    </div>
</div>

<div class="container">
    <?php if (have_posts()) : while (have_posts()) :
        the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(__('(more...)')); ?></p>

    <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
