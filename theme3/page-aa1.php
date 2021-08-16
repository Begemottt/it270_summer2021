<?php
get_header();

/* Template Name: AA1*/
?>
<!-- ^^^ Header Function ^^^ -->

<main>
    <?php 
        if(have_posts()) :
    ?>
    <article class="post">
        <?php while(have_posts()): the_post(); ?>

        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

        <section class="meta">
            <span><strong>Posted By:</strong> <?php the_author(); ?></span>
            <span><strong>Posted On:</strong> <?php the_time('F j, Y g:i a'); ?></span>
        </section>

        <section class="thumbnail">
            <?php if(has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('large'); ?>
                </a>
            <?php endif; ?>
        </section>

        <?php the_content(); ?>

        <?php endwhile ?>

        <?php else : ?>
        <h2>Search Results: </h2>
        <p>Sorry, but nothing matched your search terms.</p>
        <p>Would you like to search again with different keywords?</p>
        <?php get_search_form(); ?>
        <?php endif; ?>
    </article>
    <article class="sidebar">
        <?php
        dynamic_sidebar( 'sidebar-aa1' );
        ?>
    </article>
</main>


<!-- VVV Footer Function VVV -->
<?php get_footer(); ?>