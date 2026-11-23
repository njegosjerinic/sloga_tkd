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
                        <div class="post-text">
                            <?php the_excerpt(); ?>
                        </div>

                        <p class="read-more">
                            <?php
                            $uri_segments = explode('/', $_SERVER['REQUEST_URI']);

                            if (in_array('de', $uri_segments)) {
                                echo 'Mehr lesen';
                            } elseif (in_array('en', $uri_segments)) {
                                echo 'Read more';
                            } else {
                                echo 'Pročitaj više';
                            }
                            ?>

                            <span class="read-more-arrow">→</span>
                        </p>
                    </div>
                </a>
            </div>

            <?php
        }
        ?>
    </div>

    <div class="news-pagination">
        <?php
        the_posts_pagination([
            'mid_size' => 1,
            'prev_text' => '←',
            'next_text' => '→',
        ]);
        ?>
    </div>
</section>
<?php get_footer(); ?>