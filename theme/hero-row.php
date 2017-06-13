<div class="row">
   <div class="hero">

      <div class="bg-slider">

         <div class="container">

            <div class="logo">
               <img src="<?=get_template_directory_uri();?>/img/logo.png"  alt="Plusvalía Patagonia - Corredora de Propiedades" />
            </div>

            <div class="slogan">
               <h1>Encuentra la propiedad que estabas buscando</h1>
            </div>

            <ul class="buscador">

               <li>
                  <a id="tipo" href="#">Tipo <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                  <ul class="dropdown">
                     <li><a class="dw-element" x-data-key='tipo' x-data-value='arriendo' href="#">Arriendo</a></li>
                     <li><a class="dw-element" x-data-key='tipo' x-data-value='venta' href="#">Venta</a></li>
                  </ul>
               </li>

               <li>
                  <a id="habitaciones" href="#">Habitaciones <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                  <ul class="dropdown">
                     <li><a class="dw-element" x-data-key='habitaciones' x-data-value='1' href="#">1 habitacion</a></li>
                     <li><a class="dw-element" x-data-key='habitaciones' x-data-value='2' href="#">2 habitaciones</a></li>
                     <li><a class="dw-element" x-data-key='habitaciones' x-data-value='3' href="#">3 o más habitaciones</a></li>
                  </ul>
               </li>


               <li>
                  <a id="banios" href="#">Baños <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                  <ul class="dropdown">
                     <li><a class="dw-element" x-data-key='banios' x-data-value='1' href="#">1 baño</a></li>
                     <li><a class="dw-element" x-data-key='banios' x-data-value='2' href="#">2 baños</a></li>
                     <li><a class="dw-element" x-data-key='banios' x-data-value='3' href="#">3 o más baños</a></li>
                  </ul>
               </li>


               <li>
                  <a id="estacionamiento" href="#">Estacionamiento <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                  <ul class="dropdown">
                     <li><a class="dw-element" x-data-key='estacionamiento' x-data-value='1' href="#">1 estacionamiento</a></li>
                     <li><a class="dw-element" x-data-key='estacionamiento' x-data-value='2' href="#">2 estacionamientos</a></li>
                     <li><a class="dw-element" x-data-key='estacionamiento' x-data-value='3' href="#">3 o más estacionamientos</a></li>
                  </ul>
               </li>


               <li>
                  <a id="precio" href="#">Precio <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                  <ul class="dropdown">
                     <li><a class="dw-element" x-data-key='precio' x-data-value='300000' href="#">Hasta $300.000</a></li>
                     <li><a class="dw-element" x-data-key='precio' x-data-value='700000' href="#">Hasta $700.000</a></li>
                     <li><a class="dw-element" x-data-key='precio' x-data-value='1000000' href="#">Hasta $1.000.000</a></li>
                     <li><a class="dw-element" x-data-key='precio' x-data-value='30000000' href="#">Hasta $30.000.000</a></li>
                     <li><a class="dw-element" x-data-key='precio' x-data-value='80000000' href="#">Hasta $80.000.000</a></li>
                     <li><a class="dw-element" x-data-key='precio' x-data-value='90000000' href="#">Hasta $90.000.000</a></li>
                     <li><a class="dw-element" x-data-key='precio' x-data-value='100000000' href="#">$100.000.000 o más</a></li>

                  </ul>
               </li>


               <li style="flex: 1 1.14 100%; "><a href="#" id="buscar" class="buscar"><i class="fa fa-search" aria-hidden="true"></i></a></li>

               <!--
               <li><a href="#">Sector <i class="fa fa-chevron-down" aria-hidden="true"></i></a></li>
               <li><a href="#">Precio Máximo <i class="fa fa-chevron-down" aria-hidden="true"></i></a></li>

               -->
            </ul>

         </div> <!-- /container -->

      </div><!-- /bg-slider -->

      <div class="bg-slides">
         sdsd
         <?php
            for ( $i = 1; $i <= 3; $i++ ) {
               $activa = $i == 1 ? 'slide-active':'';
               $imagen = get_template_directory_uri().'/img/hero/'.$i.'.jpg';
               echo '<div class="slide '.$activa.'" style="background:url('.$imagen.')"></div>';
            }
         ?>

      </div><!-- /bg-slides -->

   </div> <!-- /hero-->
</div> <!-- /row -->
