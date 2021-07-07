<?php
get_header();
?>
<!-- ^^^ Header Function -->
<main>
<!-- If we have posts... show me the posts!! -->
<!-- If not, say we don't have posts. -->
    <?php 
        if(have_posts()) :
    ?>
    <article class="post">
        <?php while(have_posts()): the_post(); ?>
        <h2><a href="
            <?php the_permalink(); ?>
        "><?php the_title(); ?></a></h2>

        <section class="meta">
            <span><strong>Posted By:</strong> <?php the_author(); ?></span>
            <span><strong>Posted On:</strong> <?php the_time('F j, Y g:i a'); ?></span>
        </section>

        <?php the_excerpt(); ?>
        <?php endwhile ?>
        <?php else : ?>
        <?php echo wpautop('Sorry, no posts were found!'); ?>
        <?php endif; ?>
    </article>
    <aside>
    
    </aside>
    
</main>



<!-- VVV Footer Function -->
<?php get_footer(); ?>