<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wanderers
 */

?>

	<footer id="colophon" class="site-footer">
	<div class="fine-line"></div>

<div class="site-info">

<!-- SOCIAL MEDIA LINKS -->

<div class="social-links">
<a href="https://twitter.com/maddycollie/" target="_blank" >
	<img src="<?php bloginfo('template_directory');?>/images/twitter.svg" class="icon">
</a>
<a href="https://www.instagram.com/m_in_the_wild/" target="_blank" >
	<img src="<?php bloginfo('template_directory');?>/images/instagram.svg" class="icon">
</a>
</div><!-- .social-links -->

<!-- COPYRIGHT INFO -->
<div id="footer-bottom">
<p class="footer-copyright">&copy; <?php bloginfo("title"); ?> <?php echo date('Y'); ?></p>
</div><!-- .footer-bottom -->


</div><!-- .site-info -->

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
