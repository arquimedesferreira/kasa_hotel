<?php

add_theme_support( 'post-thumbnails' );

$labes=array(
    'name'=>'Imoveis',
    'name_singular'=>'Imovel'
);

$args= array(
    'labels'=>$labes,
    'public'=>true
);




register_post_type('imovel',$args);



