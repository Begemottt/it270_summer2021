<footer>
<?php dynamic_sidebar( 'sidebar-footer' ); ?>
</footer>
<?php wp_footer(); ?>

<script>
    function toggle_menu(element){
        element.classList.toggle("active");
        document.getElementsByClassName("menu-upper-nav-container")[0].classList.toggle("visible");
    }
    function toggle_sub_menu(element){
        element.classList.toggle("active");
        console.log('Button Clicked!');
    }

    var submenu = document.getElementById("menu-item-33");

    submenu.addEventListener("click", ()=>toggle_sub_menu(submenu));
</script>
</body>
</html>