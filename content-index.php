<?php
/**
 * The template for displaying content in the index.php template.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'col-md-12 col-sm-12' ); ?>>
	<div class="mb-4 text-center">
		<header class="mb-4">
			
			<?php 
			
			if ( has_post_thumbnail() ) {
				echo '<div class="post-thumbnail">' . get_the_post_thumbnail( get_the_ID(), 'large, rounded' ) . '</div>';
			}
			?>

			<h2 class="mt-4">
				<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'vgdaybswp' ), the_title_attribute( array( 'echo' => false ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h2>
			<?php
				if ( 'post' === get_post_type() ) :
			?>
				<div class="entry-meta">
					<?php
						vgdaybswp_article_posted_on();

						/* $num_comments = get_comments_number();
						if ( comments_open() && $num_comments >= 1 ) :
							echo ' <a href="' . esc_url( get_comments_link() ) . '" class="badge badge-pill bg-secondary float-end" title="' . esc_attr( sprintf( _n( '%s Comment', '%s Comments', $num_comments, 'vgdaybswp' ), $num_comments ) ) . '">' . $num_comments . '</a>';
						endif; */
					?>
				</div><!-- /.entry-meta -->
			<?php
				endif;
			?>
		</header>
		<div class="card-body">
			<div class="card-text entry-content">
				<?php
					

					/* if ( is_search() ) {
						the_excerpt();
					} else {
						the_content();
					} */
				?>
				<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . esc_html__( 'Pages:', 'vgdaybswp' ) . '</span>', 'after' => '</div>' ) ); ?>
			</div><!-- /.card-text -->
			<footer class="entry-meta">
				<a href="<?php the_permalink(); ?>" class="btn btn-outline-primary"><?php esc_html_e( 'ดูเพิ่มเติม', 'vgdaybswp' ); ?></a>
			</footer><!-- /.entry-meta -->
		</div><!-- /.card-body -->
	</div><!-- /.col -->
</article><!-- /#post><?php the_ID(); ?> -->
