<?php
get_header();
include('hero-row.php');

/**
* CUSTOM SEARCH
* @author Fabián Vásquez
**/

$args					=	array();
$customs				=	array();
$tipo					=	trim( $_GET['tipo'] );
$habitaciones 		=	trim( $_GET['habitaciones'] );
$metros				=	trim( $_GET['metros'] );
$estacionamiento	=	trim( $_GET['estacionamiento'] );
$banios				=	trim( $_GET['banios'] );
$precio				=	trim( $_GET['precio'] );

if ( $tipo != "" ) $args['category_name'] = $tipo;

if ( $estacionamiento != "" )	{
	$eval_estacionamiento = $estacionamiento >= 3 ? '>=':'==';
	$estacionamiento = $estacionamiento >= 3 ? 3:$estacionamiento;

	$estacionamiento_array = array (
		'key'     => 'estacionamiento',
		'value'   => $estacionamiento,
		'compare' => $eval_estacionamiento
	);
	$customs[] = $estacionamiento_array;
}

if ( $habitaciones != "" )	{
	$eval_habitacion = $habitaciones >= 3 ? '>=':'==';
	$habitaciones = $habitaciones >= 3 ? 3:$habitaciones;
	$habitaciones_array = array (
		'key'     => 'habitaciones',
		'value'   => $habitaciones,
		'compare' => $eval_habitacion
	);
	$customs[] = $habitaciones_array;
}

if ( $banios != "" )	{
	$eval_banios = $banios >= 3 ? '>=':'==';
	$banios = $banios >= 3 ? 3:$banios;
	$banios_array = array (
		'key'     => 'banios',
		'value'   => $banios,
		'compare' => $eval_banios
	);
	$customs[] = $banios_array;
}

if ( $metros != "" )	{
	$eval_metros = (int) $metros <= 1000 ? '<=':'>=';
	$metros_array = array (
		'key'     => 'metros',
		'value'   => $metros,
		'compare' => $eval_metros
	);
	$customs[] = $metros_array;
}

if ( $precio != "" )	{
	$eval_precio = $precio <= 100000000 ? '<=':'>=';
	$precio_array = array (
		'key'     => 'metros',
		'value'   => $precio,
		'compare' => $eval_precio
	);
	$customs[] = $precio_array;
}

$args['meta_query'] =	$customs;
$query = new WP_Query( $args );
?>

<div class="row">
<div class="container latest">

	<div class="col-8" style="padding-right:10px;">

		<?php if ( $query->have_posts() ) : ?>

		<div class="container">
			<div class="container-title">
				Resultados de la búsqueda
			</div>
		</div>

		<?php while ( $query->have_posts() ) : $query->the_post(); ?>

			<? include('resultados.php'); ?>

		<?php endwhile; wp_reset_postdata(); ?>

		<?php else: ?>
			<div class="container">
				<div class="container-title">
					Su búsqueda no produjo resultados
				</div>
			</div>
		<?php endif; ?>

	</div><!-- /col-8 -->

	<? get_sidebar(); ?>

</div><!-- container latest -->
</div><!-- /row -->
<? get_footer(); ?>
