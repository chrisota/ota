<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div>
</div>
<!-- End Wrapper -->

<footer id="footer-main">
	<div class="container">
        <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
        <div class="columns nine">
            <?php dynamic_sidebar( 'footer-1' ); ?>
        </div>
        <?php endif; ?>
        
        <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
        <div class="columns six pull-right">
            <?php dynamic_sidebar( 'footer-2' ); ?>
        </div>
        <?php endif; ?>
        
    </div>
</footer>
<footer id="footer-copy">
    <div class="container">
        <p class="alignleft">&copy; Chris Ota, Ota Designs 2007 - <? print(Date("Y")); ?>. Honolulu, Hawaii</p>
        <div class="alignright">
            <ul>
                <li><a title="Chris Ota Twitter @chrisota" href="http://www.twitter.com"><span class="icons-social">&#62217;</span></a></li><!--
                --><li><a title="Chris Ota Dribbble UI Design" target="_blank" href="http://www.dribbble.com/chrisota"><span class="icons-social">&#62235;</span></a></li><!--
                --><li><a title="Ota Designs Facebook Fan Page" target="_blank" href="http://www.facebook.com/otadesigns"><span class="icons-social">&#62220;</span></a></li><!--
                --><li><a title="Chris Ota Professional Profile" target="_blank" href="http://www.linkedin.com/in/chrisota"><span class="icons-social">&#62232;</span></a></li>
                </ul>
        </div>
    </div>
</footer>
<!-- End Footer -->
<?php wp_footer(); ?>
</body>
</html>