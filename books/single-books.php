<?php
get_header(); // Inkludera header-mallen

if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <article class="book">
            <h2><?php the_title(); ?></h2>
            <?php the_post_thumbnail('large'); // Visa en större bild ?>
            <div class="content">
                <?php the_content(); ?>
            </div>
        </article>
    <?php
    endwhile;
else :
    echo 'Boken hittades inte.';
endif;

get_footer(); // Inkludera footer-mallen
?>
