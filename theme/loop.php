<div class="row propiedades">

	<div class="container">
		<div class="container-title">
			Propiedades ingresadas recientemente
		</div><!-- /container-title -->
	</div> <!-- /container !-->

	<div class="container latest">

		<div class="col-8">
			<?php if (have_posts()): while (have_posts()) : the_post(); $info  = get_post_custom(); $categoria = get_the_category(); ?>

				<div class="propiedad">

					<?php if ( has_post_thumbnail()) : ?>

						<div class="imagen-propiedad" style="background:url(<?=the_post_thumbnail_url( array(120,120) );?>)">
						</div> <!-- /imagen-propiedad !-->

					<?php else: ?>
						<div class="imagen-propiedad" style="background:url(http://placehold.it/200x300)">
						</div> <!-- /imagen-propiedad !-->
					<?php endif; ?>

					<div class="propiedad-info">

						<div class="categoria">
							<?= $categoria[0]->name; ?>
						</div>

						<div class="direccion">
							<?php the_title(); ?>
						</div>

						<div class="precio">
							<?=$info['precio'][0];?>
						</div>

						<div class="mapita">
							<i class="fa fa-location-arrow" aria-hidden="true"></i>
						</div>

					</div> <!-- /propiedad-info !-->

					<div class="propiedad-detalle">

						<div class="col-detalle">

							<div class="detalle-item">
								<i class="fa fa-bed" aria-hidden="true"></i> <?=$info['habitaciones'][0];?>
							</div>

							<div class="detalle-item">
								<i class="fa fa-bath" aria-hidden="true"></i> <?=$info['banios'][0];?>
							</div>

						</div>

						<div class="col-detalle">

							<div class="detalle-item">

								<i class="fa fa-arrows-alt" aria-hidden="true"></i> <?=$info['metros'][0];?>

							</div>

							<div class="detalle-item">
								<i class="fa fa-car" aria-hidden="true"></i> <?=$info['estacionamiento'][0];?>
							</div>

						</div>

					</div> <!-- /propiedad-detalle !-->

					<a href="<? the_permalink();?>" class="btn-detalle">Ver más</a>

				</div><!-- /propiedad !-->

			<? endwhile; endif; ?>
		</div> <!-- /col-8 !-->

		<? get_sidebar(); ?>

	</div><!-- /container latest !-->

</div> <!-- /row propiedades !-->
