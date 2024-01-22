<?php
/**
 * The template for displaying content in the single.php template.
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('bg-primary'); ?>>
<div class="container">
	
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php
			if ( 'post' === get_post_type() ) :
		?>
			<div class="entry-meta">
				<?php vgdaybswp_article_posted_on(); ?>
			</div><!-- /.entry-meta -->
		<?php
			endif;
		?>
	</header><!-- /.entry-header -->
	<div class="entry-content">
		<?php
			if ( has_post_thumbnail() ) :
				echo '<div class="post-thumbnail">' . get_the_post_thumbnail( get_the_ID(), 'large' ) . '</div>';
			endif;

			echo '<div class="mt-4">';
			the_content();
			echo '</div>';

			wp_link_pages( array( 'before' => '<div class="page-link"><span>' . esc_html__( 'Pages:', 'vgdaybswp' ) . '</span>', 'after' => '</div>' ) );
		?>
	</div><!-- /.entry-content -->

	<?php
		edit_post_link( __( 'Edit', 'vgdaybswp' ), '<span class="edit-link">', '</span>' );
	?>

</div><!-- class="container" -->
</article><!-- /#post-<?php the_ID(); ?> -->
