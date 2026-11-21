<?php
/*
Template Name: Page Template
*/
get_header();

?>
<section id="page">
    <div class="page-wrapper">
        <div class="page-header">
            <div class="page-thumbnail">
                <?php if (has_post_thumbnail()) {

                    the_post_thumbnail('full', ['alt' => 'Main about us picture']);

                }
                ?>
            </div>
            <h1 class="page-title"><?php the_title() ?></h1>
        </div>
        <div class="page-content">
            <p><?php the_content() ?></p>
        </div>
    </div>
</section>
<?php

get_footer();

?>