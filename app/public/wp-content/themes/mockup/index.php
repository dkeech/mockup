<!-- default index page, not used on any pages on this site -->
<?php get_header();
?>
<div class="single-page">
    <div class="card-row">
        <?php
        $homepagePosts = new WP_Query(array(
            'posts_per_page' => 3,
            'post_type' => 'custom_post',
            'order' => 'ASC'
        ));
        while ($homepagePosts->have_posts()) {
            $homepagePosts->the_post(); ?>
            <div class="card" style="width: 18rem;">
                <?php $image = get_field('image');
                if (!empty($image)) :  ?>
                    <img src="<?php echo esc_url($image['url']) ?>" class=" card-img-top" alt="<?php the_field('alt_text') ?>">
                <?php endif; ?>
                <div class="card-body">
                    <p class="business-name"><?php echo get_field('business_name') ?></p>
                    <h5 class="card-title"><?php echo the_title() ?></h5>
                    <p class="card-text"><?php echo wp_trim_words(get_the_content(), 18) ?></p>
                    <a href="<?php the_permalink(); ?>" class="purple-link">Read More</a>
                </div>
            </div>
        <?php
        }

        ?>
    </div><?php

            get_footer();
