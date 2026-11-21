<?php get_header(  ); 
?>
<?php 
while(have_posts(  )){
    the_post(  ); ?>
    <div class="blog-post">
        <div class="padding-for-post">
            <div class=thumbnails>
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('custom-size'); // Use a smaller size for archives
                }
                ?>
            </div>
        <div class="blog-content">
            <h1><?php the_title(); ?></h1>
            <p><?php the_content(); ?></p>
        </div>

        </div>
    </div>


<?php }

get_footer(  ); 

?>