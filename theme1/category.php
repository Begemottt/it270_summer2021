<?php
get_header();
?>
<!-- ^^^ Header Function -->
<div id="header_image"></div>
<main>
<!-- If we have posts... show me the posts!! -->
<!-- If not, say we don't have posts. -->
    <article class="post">
        <h1 class="page-title">
            <?php
            _e( 'Category Results for: ', 'site1'); 
            
            $categories = get_the_category();
            if (!empty($categories)){
                echo esc_html($categories[0]->name);
            }
            ?>
            <span class='page-description'><?php echo get_search_query(); ?></span>
        </h1>
        <?php while(have_posts()): the_post(); ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <section class="meta">
            <span><strong>Posted By:</strong> <?php the_author(); ?></span>
            <span><strong>Posted On:</strong> <?php the_time('F j, Y g:i a'); ?></span>
        </section>

        <section class="thumbnail">
            <?php if(has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?>
                </a>
            <?php endif; ?>
        </section>

        <?php the_excerpt(); ?>

        <span class="block">
            <a href="<?php the_permalink(); ?>">Read More about <?php the_title(); ?></a>
        </span>

        <?php endwhile ?>
        <!-- Remember: Search results originally working off the index.php page-->
    </article>
    
    <?php get_sidebar(); ?>
    
</main>



<!-- VVV Footer Function -->
<?php get_footer(); ?>