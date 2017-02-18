<?php

add_theme_support( 'post-thumbnails' );


function mostrar_post_item(){

    $labes=array(
    'name'=>'Itens',
    'name_singular'=>'Item',
    'add_new_item'=> 'Registrar Item',
    'add_item'=>' Editar Item',
   
    );
    // Define o que vai ter no tela do novo tipo de post 
    $suports= array(
        'title',
        'editor',
        'thumbnail',
        'page-attributes'
    );

    $args= array(
        'labels'=>$labes,
        'public'=>true,
        'description'=>'Apenas vários itens ',
        'menu_icon'=>'dashicons-image-filter',
        'supports'=>$suports,
         
    );

    register_post_type('item',$args);
}



function criar_post_carrocel(){
    $labes=array(
    'name'=>'Carrocel',
    'name_singular'=>'Carrocel',
    'add_new_item'=> 'Carrocel',
    'add_item'=>' Editar',
   
    );
    // Define o que vai ter no tela do novo tipo de post 
    $suports= array(
        'title',
        'editor',
        'thumbnail',
        'page-attributes'
    );

    $args= array(
        'labels'=>$labes,
        'public'=>true,
        'description'=>'Apenas vários itens ',
        'menu_icon'=>'dashicons-image-filter',
        'supports'=>$suports,
         
    );

    register_post_type('Carrocel',$args);
}


add_action('init', 'mostrar_post_item');
add_action('init', 'criar_post_carrocel');


