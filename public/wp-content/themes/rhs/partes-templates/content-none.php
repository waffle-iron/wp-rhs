<section>
	<header class="page-header">
		<h1 class="page-title"><?php _e( 'Não há posts', 'rhs' ); ?></h1>
	</header>
	<div class="container">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( __( 'Deseja criar seu primeiro post? <a href="%1$s">Comece por aqui</a>.', 'rhs' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php else : ?>

			<p><?php _e( 'Parece que não podemos encontrar o que você está procurando. Talvez a pesquisa possa ajudar.', 'rhs' ); ?></p>
			<?php
				get_search_form();
		endif; ?>
	</div><!-- .container -->
</section><!-- .section -->