<?php
/**
 * Displays the home page.
 *
 * The home page is a list of posts.
 *
 * @link https://morethemes.baby/blog/ Live example
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/ Wordpress documentation
 *
 * @package MoTheme
 * @since 1.0.0
 */

get_header();

$component = new MoThemeHTMLComponent();
?>

<section <?php $component->attributes->display( array( 'block' => 'home' ) ); ?>>
	<?php
		$component->title->display( array( 'title' => 'Home' ) );
		get_template_part( 'template-parts/post-list/post-list', '' );
	?>
</section>

<?php
get_footer();
