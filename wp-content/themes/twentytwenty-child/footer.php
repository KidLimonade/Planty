<?php
/**
* Planty code displaying the footer
*/

?>
<!-- site-footer become planty-footer -->
<footer id="planty-footer" class="header-footer-group">
    
    <div class="footer-inner">
        
        <?php
        if ( function_exists( 'the_privacy_policy_link' ) ) {
            the_privacy_policy_link( '<p class="privacy-policy">', '</p>' );
        } else {
            ?>
            <p class="privacy-policy">
                <a class="privacy-policy-link" href="#">Mentions légales</a>
            </p>
            <?php
        }
        ?>
        
    </div><!-- .footer-inner -->
    
</footer><!-- #site-footer -->

<?php wp_footer(); ?>

</body>
</html>
