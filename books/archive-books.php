<?php
get_header(); // Inkludera header-mallen

if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <div class="book">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_post_thumbnail(); ?>
            <?php the_excerpt(); ?>
        </div>
    <?php
    endwhile;
else :
    echo 'Inga böcker hittades.';
endif;

get_footer(); // Inkludera footer-mallen
?>
