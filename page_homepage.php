<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>

<?php
// get the information from WP plugin ACF
$about_group = get_field('about_burst_group');
$about_title = $about_group['about_title'];
$about_text = $about_group['about_burst_text'];
$about_logo = $about_group['burst_logo']['url'];

$get_profile = get_field('profile_picture');
$profile_picture = $get_profile['url'];

$get_banner = get_field('banner');
$banner = $get_banner['url'];
?>

<div class="full-header-container">
    <div class="full-header" style="background-image: url('<?php the_post_thumbnail_url() ?>')">
        <h1 class="title"></h1>
    </div>
</div>

<div class="container">
    <?php if (have_posts()) : while (have_posts()) :
    the_post(); ?>
    <div class="intro-section">
        <h1><?php the_title(); ?></h1>
        <div class="home-intro-text">
            <?php the_content(__('(more...)')); ?>
        </div>
        <div class="profile-picture" style="background-image: url('<?php echo $profile_picture; ?>');"></div>
    </div>
</div>

    <div class="full-banner" id="about-section" style="background-image: url('<?php echo $banner; ?>')"></div>

<div class="container" id="about-section">
    <div class="about-section">
        <h2><?php echo $about_title; ?></h2>
        <p><?php echo $about_text; ?></p>
        <img class="logo" src="<?php echo $about_logo; ?>"/>
        <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
    </div>
</div>


<?php get_footer(); ?>

