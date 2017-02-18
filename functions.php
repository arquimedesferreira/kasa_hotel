<?php

add_theme_support( 'post-thumbnails' );

$labes=array(
    'name'=>'Itens',
    'name_singular'=>'Item',
    'add_new_item'=> 'Registrar Item',
    'add_item'=>' Editar Imóvel'
);
// Define o que vai ter no tela do novo tipo de post 
$suports= array(
    'title',
    'editor',
    'thumbnail'
);

$args= array(
    'labels'=>$labes,
    'public'=>true,
    'description'=>'Apenas vários itens ',
    'menu_icon'=>'dashicons-image-filter',
    'supports'=>$suports
);




register_post_type('item',$args);



