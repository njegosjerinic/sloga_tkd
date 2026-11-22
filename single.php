<?php get_header(); ?>

<main class="blog-post">
    <?php while (have_posts()):
        the_post(); ?>

        <article class="padding-for-post">

            <?php if (has_post_thumbnail()): ?>
                <div class="thumbnails">
                    <?php the_post_thumbnail('large'); ?>
                </div>
            <?php endif; ?>

            <div class="blog-content">

                <h1 class="post-title">
                    <?php the_title(); ?>
                </h1>

                <div class="post-body">
                    <?php the_content(); ?>
                </div>

            </div>

        </article>

    <?php endwhile; ?>
</main>

<?php get_footer(); ?>