<footer> 
    <?php $args = array(
        "theme_location"=> "header-menu",
        "container" => "nav",
        "after" => "<span class='separator'> | </span>"
    ); 
wp_nav_menu($args);
?>

    <div class="location">
            <p>Nehruova No.35, 11 000 Belgrade, Serbia</p>
            <p>Phone Number: +381-64-558-555</p>
    </div>
    <p class="copyrights">All rights reserved <?php echo date("Y"); ?></p>
</footer>



<?php wp_footer(); ?>
</body>
</html>