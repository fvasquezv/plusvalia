<div class="row destacados">

      <div class="carrusel">

         <div class="container">
            <div class="container-title">
            Propiedades destacadas
            </div>
         </div>

         <div class="item-wrapper" id="slider1">

            <?php
            $post_tag="destacado";
            $the_query = new WP_Query( 'tag='.$post_tag.'&posts_per_page=7' );
            if ( $the_query->have_posts() ): while ( $the_query->have_posts() ) : $the_query->the_post(); $info  = get_post_custom(); $categoria = get_the_category();?>

            <div class="elemento-carrusel">

               <div class="bg-elemento" style="background:url('<?=the_post_thumbnail_url( array(120,120) );?>')">
               </div>

               <a class="elemento-texto" href="<? the_permalink(); ?>">

                  <div class="direccion">
                     <?= the_title(); ?>
                  </div>

                  <div class="precio">
                     <?=$info['precio'][0];?>
                  </div>

               </a>

               <div class="etiqueta arriendo">
                  <?= $categoria[0]->name; ?>
               </div>

            </div>

            <? endwhile; endif; ?>

         </div>

         <br class="clearfix">
      </div>

      <a href="#" class="btn-todas">Ver todas</a>

   </div>
