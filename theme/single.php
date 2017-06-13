<?php get_header(); ?>
<?php include('hero-row.php'); ?>

	<div class="single row">

		<?php if (have_posts()): while (have_posts()) : the_post(); $info  = get_post_custom(); ?>

			<div class="container latest">

				<div class="col-8">

					<div class="post">

						<div class="featured-image" style="background-image:url(<?=the_post_thumbnail_url('large');?>)">
	                  <div class="titulo-post">
	                     <h1><? the_title(); ?></h1>
	                     <h4><?=$info['precio'][0];?></h4>
	                  </div>

	                  <div class="logo-post">
	                     <img src="<?=get_template_directory_uri();?>/img/logo.png">
	                  </div>
						</div><!-- /featured-image !-->

						<div class="propiedad-detalle-single">

	                  <div class="col-detalle">

	                     <div class="detalle-item">
	                        <i class="fa fa-bed" aria-hidden="true"></i> <?=$info['dormitorios'][0];?> Dormitorio(s)
	                     </div>

	                     <div class="detalle-item">
	                        <i class="fa fa-bath" aria-hidden="true"></i> <?=$info['banios'][0];?> Baño(s)
	                     </div>

	                  </div>

	                  <div class="col-detalle">

	                     <div class="detalle-item">
	                        <i class="fa fa-arrows-alt" aria-hidden="true"></i> <?=$info['metros'][0];?> Terreno
	                     </div>

	                     <div class="detalle-item">
	                        <i class="fa fa-car" aria-hidden="true"></i> <?=$info['estacionamiento'][0];?> Estacionamiento(s)
	                     </div>

	                  </div>

               	</div><!-- /propiedad-detalle-single !-->

						<div class="the-content">
							<? the_content(); ?>
               	</div>

	               <div class="the-content">
	                  <h2>Ubicación</h2>
	                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2471.1375384701764!2d-72.48609768368108!3d-51.73051965715986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xbdafe80025bb7fad%3A0xe30c1c4fafc29aac!2sSim%C3%B3n+Bol%C3%ADvar%2C+Puerto+Natales%2C+Natales%2C+Regi%C3%B3n+de+Magallanes+y+de+la+Ant%C3%A1rtica+Chilena!5e0!3m2!1ses!2scl!4v1495314529825" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	               </div>

	               <button class="solicitar-visita">Solicitar más información de esta propiedad</button>

					</div><!-- /post !-->

				</div><!-- /col-8 !-->

				<?php get_sidebar(); ?>

			</div><!-- /container latest !-->

		<?php endwhile; endif; ?>

	</div><!-- /single row !-->

<?php get_footer(); ?>
