

			</div><!-- /.container -->
		</section><!-- /.section -->

		<footer class="footer">
			<div class="container">
				<section class="footerDescricao">
					<p><?php bloginfo( 'description' ); ?></p>
				</section>
				<section class="footerMenu">
					<nav class="navbar navbar-default">
						<?php
		                    /*
	                        * menuFundo vem de um register feito nas functions onde o mesmo entra em contato com o menu do 
	                        * Wordpress.
	                        */
			                menuRodape();
			            ?>
					</nav>
				</section>

				<section class="corporation">
					<div class="bordar"></div>
					<img alt="Licença Creative Commons" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icreativecommons.png" style="border-width:0">
					<a href="http://creativecommons.org/licenses/by-nc-nd/3.0/deed.pt" rel="license" target="_blank"> Conteúdos do site sob Licença&nbsp;Creative Commons - Atribuição-Não Comercial-Sem Derivados 3.0 Não Adaptada.</a>
				</section>
			</div>
		</footer>
		<?php wp_footer(); ?>    
	</body>
</html>