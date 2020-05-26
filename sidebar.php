<div class="sidebar">
    <span class="sidebar-title"><?php _e('Categories'); ?></span>
    <ul> <?php wp_list_cats('sort_column=namonthly'); ?> </ul>
<!--    <h2>--><?php //_e('Archives'); ?><!--</h2>-->
<!--    <ul> --><?php //wp_get_archives(); ?><!-- </ul>-->
    <?php wp_meta(); ?>
</div>