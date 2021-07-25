<?php
get_header();
/* Template Name: Front Page*/
?>
<!-- ^^^ Header Function -->
<div id="header_image"></div>
<main>
<!-- If we have posts... show me the posts!! -->
<!-- If not, say we don't have posts. -->

<?php while(have_posts()): the_post(); ?>
<?php endwhile; ?>
<section class="thumbnail">
    <?php if(has_post_thumbnail()) : ?>
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail(); ?>
        </a>
    <?php endif; ?>
</section>
<?php the_content(); ?>
    
</main>
<!-- VVV Footer Function -->
<?php get_footer(); ?>