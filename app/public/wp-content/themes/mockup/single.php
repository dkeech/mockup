<!-- blog post template, not used on this site -->
<?php get_header();
?>
<div class="single-page">

    <?php
    while (have_posts()) {
        the_post(); ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_content(); ?>
        <hr>
</div>
<?php }

    get_footer();
