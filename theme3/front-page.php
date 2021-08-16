<?php
get_header();
/* Template Name: Front Page*/
?>
<!-- ^^^ Header Function -->

<?php echo do_shortcode('[smartslider3 slider="2"]'); ?>

<main>
<?php
while(have_posts()): the_post();
endwhile;
?>

    <article class="post">
        <section class="thumbnail">
            <?php if(has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?>
                </a>
            <?php endif; ?>
        </section>
        <?php the_content(); ?>
    </article>

</main>
<!-- VVV Footer Function -->
<?php get_footer(); ?>