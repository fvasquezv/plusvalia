<?php

if (  function_exists('add_theme_support')  ) {
   // Add Thumbnail Theme Support
   add_theme_support('post-thumbnails');
   add_image_size('large', 700, '', true); // Large Thumbnail
   add_image_size('medium', 250, '', true); // Medium Thumbnail
   add_image_size('small', 120, '', true); // Small Thumbnail
   add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');
}

if (  function_exists('register_sidebar')   )  {
   // Define Sidebar Widget Area 1
   register_sidebar(array(
      'name'            => 'Barra lateral',
      'description'     => 'Barra lateral global del sitio',
      'id'              => 'widget-area-1',
      'before_widget'   => '<div class="widget">',
      'after_widget'    => '</div>',
      'before_title'    => '<h3>',
      'after_title'     => '</h3>'
   ));
}

/*
function propiedad_post_type()   {

   $labels  =  array(
      'name'               => 'Propiedades',
      'singular_name'      => 'Propiedad',
      'add_new_item'            => 'Agregar Propiedad',
      'all_items'          => 'Todas las propiedades',
      'edit_item'          => 'Editar Propiedad',
      'new_item'           => 'Nueva Propiedad',
      'search_item'        => 'Buscar Propiedad',
      'not_found'          => 'No se encontraron propiedades',
      'not_found_in_trash' => 'No se encontraron propiedades en el papelero',
      'parent_item_colon'  => 'Propiedad padre'
   );

   $support =  array('title', 'editor', 'thumbnail', 'revisions', 'custom-fields');
   $taxonomies =  array('category', 'post_tag');

   $args    =  array(
      'labels'             => $labels,
      'public'             => true,
      'has_archive'        => true,
      'publicly_queryable' => true,
      'query_var'          => true,
      'rewrite'            => true,
      'capability_type'    => 'post',
      'hierarchical'       => true,
      'support'            => $support,
      'taxonomies'         => $taxonomies,
      'menu_position'      => 2,
      'exclude_from_search'   => false
   );

   register_post_type( 'propiedades', $args );
}

add_action('init', 'propiedad_post_type');
*/
