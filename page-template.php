<?php
/*
 * Template Name: Page Template
 */
get_header();
?>
<main class="sloga-page">
    <?php while (have_posts()):
        the_post();
        $thumbnail = get_the_post_thumbnail(get_the_ID(), 'full', [
            'sizes' => '(max-width: 550px) 100vw, (max-width: 62rem) calc(100vw - 2rem), 60rem',
        ]);
        ?>
        <?php if ($thumbnail): ?>
            <div class="sloga-page__thumbnail">
                <?php echo $thumbnail; ?>
            </div>
        <?php endif; ?>
        <div class="sloga-page__body">
            <h1 class="sloga-page__title"><?php the_title(); ?></h1>
            <div class="sloga-page__content">
                <?php the_content(); ?>
            </div>
        </div>
    <?php endwhile; ?>
</main>
<?php get_footer(); ?>
