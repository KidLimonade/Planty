<?php
/**
* Planty code displaying the footer
*
* Contains the opening of the #site-footer div and all content after.
*/

?>
<footer id="site-footer" class="header-footer-group">
    
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
