<?php
get_header();
/* Template Name: Front Page*/
?>
<!-- ^^^ Header Function -->
<main>
<!-- If we have posts... show me the posts!! -->
<!-- If not, say we don't have posts. -->
    <?php 
        if(have_posts()) :
    ?>
    <?php while(have_posts()): the_post(); ?>
    <?php endwhile; ?>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    <?php else : ?>
    <?php echo wpautop('Sorry, no posts were found!'); ?>
    <?php endif; ?>

    <p>Here is my content</p>
</main>
<!-- VVV Footer Function -->
<?php get_footer(); ?>