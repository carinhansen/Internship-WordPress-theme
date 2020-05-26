<?php /* Template Name: Archief */ ?>
<?php get_header();

?>

    <div class="container">
        <div class="cat-title">
            <h1>Archief</h1>
            <span>Dit is een overzicht van alle blog berichten van alle categorieën</span>
        </div>
    </div>

    <div class="container single-page-content">
        <?php
        $args = array('numberposts' => -1);
        $posts = get_posts($args);
        if ($posts) {
            foreach ($posts as $post) {
                setup_postdata($post);
                ?>
                <div class="post-container">
                    <a href="<?php the_permalink(); ?>">
                        <div class="post-thumbnail"
                             style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>
                    </a>
                    <div class="post-text">
                        <a href="<?php the_permalink(); ?>" class="category-title-link"><h4><?php the_title(); ?>
                        </h4>
                            <p><?php the_field('preview'); ?></p>
                        </a>
                        <span class="title-category">
                            <?php the_category('  |  '); ?> |
                            <?php echo get_the_date(); ?>
                            </span>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>

<?php get_footer(); ?>