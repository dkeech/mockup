<?php get_header();
?>
<div class="single-page">
    <div class="card-row">
        <?php
        $homepagePosts = new WP_Query(array(
            'posts_per_page' => 3,
            'post_type' => 'custom_post'
        ));
        while ($homepagePosts->have_posts()) {
            $homepagePosts->the_post(); ?>
            <div class="card" style="width: 18rem;">
                <?php $image = get_field('image');
                if (!empty($image)) :  ?>
                    <img src="<?php echo esc_url($image['url']) ?>" class=" card-img-top" alt="<?php the_field('alt_text') ?>">
                <?php endif; ?>
                <div class="card-body">
                    <h5 class="card-title"><?php echo the_title() ?></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        <?php
        }

        ?>
    </div><?php

            get_footer();
