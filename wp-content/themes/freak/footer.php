<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package freak
 */
?>

	</div><!-- #content -->
	<?php get_sidebar('footer'); ?>
<?php get_template_part('subscription'); ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		
	</footer><!-- #colophon -->
	
</div><!-- #page -->


<?php wp_footer(); ?>

</body>
</html>
