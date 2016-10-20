<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<section id="messagerie" class="widget">
			<h4>Vous avez une question ? Par içi.</h4>
			<textarea rows='10' id="message-zone" readonly></textarea>
			<form method="post" id="sendMessage" class="search-form" action="">
				<textarea name="messageContent" id='messageContent' placeholder="Composez votre message"></textarea>
				<input type="hidden" id="userName" name="userName" value="userTest">
				<input type="submit" value="envoyer">
			</form>
		</section>
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>
