<footer>
    <article class="copyright">
        <p>Copyright <?php echo date('Y'); ?></p>
        <p>All Rights Reserved</p>
        <p><a href="">Terms of Use</a></p>
        <p>Design by <a href="https://rtvgilder.com">Robin VanGilder</a></p>
    </article>
</footer>
<script>
    $(document).ready(function(){
        $(".nav-button").click(function () {
        $(".nav-button,.primary-nav").toggleClass("open");
        });    
    });
</script>
<?php wp_footer(); ?>
</body>
</html>