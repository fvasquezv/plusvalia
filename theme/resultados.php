<div class="resultado">

   <div class="imagen" style="background-image:url(<?=the_post_thumbnail_url( array(120,120) );?>)">
   </div>

   <div class="descripcion">

      <div class="fecha">
         <?= get_the_date(); ?>
      </div>

      <div class="titulo">
         <a href="<? the_permalink(); ?>"><? the_title(); ?></a>
      </div>

      <div class="resumen">
      </div>

      <div class="info">
      </div>

   </div>

</div>
