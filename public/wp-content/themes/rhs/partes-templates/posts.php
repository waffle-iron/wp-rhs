<div class="panel panel-default display-panel">
	<div class="panel-heading">
		<div class="row post-titulo espacamento-topo">
			<div class="col-xs-4 col-md-3">
				<div class="img-usuario">
					<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"  title="Ver perfil do usuário.">
						<img src="<?php echo get_avatar_url(get_the_author_meta( 'ID' )); ?>" alt="..." class="img-circle">
					</a>	
				</div>
			</div>
			<div class="col-xs-8 col-md-9 col-md-pull-1 col-xs-pull-2">
				<div class="col-xs-12 col-md-12">
					<span class="nome-author">
						<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"  title="Ver perfil do usuário.">
							<?php the_author_meta('user_firstname'); ?> <?php the_author_meta('user_lastname'); ?>
						</a>
					</span>
				</div>

				<div class="col-xs-12 col-md-12"><span class="post-date text-uppercase"><?php the_time('D, d/m/Y - H:i'); ?></p></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="panel-body">
		<a href="<?php the_permalink(); ?>"><?php the_title( '<h3 class="panel-title">', '</h3>' ); ?></a>
		<?php if( has_post_thumbnail() ) :	?>
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail(); ?>
			</a>
		<?php
			endif;
			the_excerpt(); 
		?>
	</div><!-- .paine-body -->
</div><!-- .panel .panel-default -->