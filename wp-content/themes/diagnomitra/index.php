<?php get_template_part('pre-header'); ?>
<?php get_header(); ?>
<main>
    <!-- Main content -->
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_title('<h1>', '</h1>');
            the_content();
        endwhile;
    else :
        echo '<p>No content found</p>';
    endif;
    ?>
</main>
<?php get_footer(); ?>
