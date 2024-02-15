<!-- template for destination of custom post cards used on first page -->
<?php get_header();
?>
<div class="cpt-page">
    <div class="cpt-image" style="background-image: url('<?php $image = get_field('small_image');
                                                            if (!empty($image)) : echo esc_url($image['url']);
                                                            endif; ?>')">

    </div>
    <div class="single-page">
        <?php
        while (have_posts()) {
            the_post(); ?>
            <h2><?php the_title(); ?></a></h2>
            <h3 class="business"><?php echo get_field('business_name'); ?></h3>
            <?php the_content(); ?>
    </div>
</div>
<?php }

        get_footer();
