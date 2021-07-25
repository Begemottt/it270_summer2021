<?php
get_header();
?>
<!-- ^^^ Header Function -->
<div id="search_error">
    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/searching.jpg" alt="searching" />
</div>
<main>
<!-- If we have posts... show me the posts!! -->
<!-- If not, say we don't have posts. -->
    <article class="post">
    <h2>This is somewhat embarrassing, isn't it?</h2>
    <p>It looks like nothing was found at this location. Maybe try another search?</p>
    <?php get_search_form(); ?>
    </article>
    <aside>
    
    </aside>
    
</main>



<!-- VVV Footer Function -->
<?php get_footer(); ?>