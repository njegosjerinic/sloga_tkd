<?php get_header(); ?>
<section id="page">
    <div class="news-container">
        <?php
        while (have_posts()) {
            the_post(); ?>


            <div class="news-item">
                <a href="<?php echo the_permalink(); ?>">
                    <div class="news-img">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('custom-size'); // Use a smaller size for archives
                        }
                        ?>
                    </div>
                    <div class="news-text">
                        <h3 data-key="Trebinje2024-title"><?php the_title(); ?></h3>
                        <p class="post-text" data-key="Trebinje2024-description"><?php the_excerpt(); ?></p>

                    </div>
                </a>
            </div>

            <?php
        }
        ?>
    </div>

    <div><?php echo paginate_links(); ?></div>
</section>
<?php get_footer(); ?>