<?php
get_header();
?>
<!-- ^^^ Header Function -->
<div id="header_image"></div>
<main>
<!-- If we have posts... show me the posts!! -->
<!-- If not, say we don't have posts. -->
    <?php 
        if(have_posts()) :
    ?>
    <article class="post">
        <?php while(have_posts()): the_post(); ?>
        <?php endwhile; ?>
        <h1><?php the_title(); ?></h1>
        <section class="meta">
            <span><strong>Posted By:</strong> <?php the_author(); ?></span>
            <span><strong>Posted On:</strong> <?php the_time('F j, Y g:i a'); ?></span>
        </section>
        <?php the_content(); ?>
        <?php else : ?>
        <?php echo wpautop('Sorry, no posts were found!'); ?>
        <?php endif; ?>

        <span class="next-previous">
            <?php (previous_post_link()) ? '%link' : ''; ?> &nbsp; &nbsp; <?php (next_post_link()) ? '%link' : ''; ?>
        </span>

        <?php comments_template(); ?>
    </article>

    <aside>
    
    </aside>

    
</main>
<!-- VVV Footer Function -->
<?php
get_footer();