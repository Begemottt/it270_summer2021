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
        <h2 class="page-title">
            <?php _e( 'Search Results for: ', 'site1'); ?>
            <span class='page-description'><?php echo get_search_query(); ?></span>
        </h2>
        <h3 class="pagetitle">Our findings 
            <?php
                $allsearch = new WP_Query("s=$s&showposts=-1");
                $key = wp_specialchars($s, 1);
                $count = $allsearch->post_count;
                _e('');
                _e('<span class="search-terms">');
                echo $key; _e('</span>');
                _e(' &mdash; ');
                echo $count . ' ';
                _e('articles/pages');
                wp_reset_query();
            ?>
        </h3>

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
        <?php else : ?>
        <h1 class="page-title">
            <?php _e('No content for: ', "site1") ?>
            <span class="page-description">
                <?php echo get_search_query(); ?>
            </span>
        </h1>
        <p>Sorry, but nothing matched your search terms.</p>
        <p>Would you like to search again with different keywords?</p>
        <?php get_search_form(); ?>
        <?php endif; ?>
    </article>
    
</main>



<!-- VVV Footer Function -->
<?php get_footer(); ?>