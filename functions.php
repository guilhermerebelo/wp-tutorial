<?php

    function loadScripts() {
        // criar uma fila de css a serem carregados pelo wp
        wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css',array(), '4.1.1' , 'all');
        wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), '1.0' , 'all');
        // criar uma fila de js a serem carregados pelo wp
        wp_enqueue_script('template', get_template_directory_uri() . '/js/template.js', array(), null, true);
    }
    //cria um gancho para executar os scripts
    add_action('wp_enqueue_scripts', 'loadScripts');


    //registrar menus
    register_nav_menus(
        array('menu_principal' => "Menu Principal")
    );


    //possivel alterar a cor do background
    add_theme_support('custom-background');

    /*
    é possivel adicionar um tema ao header e ir alterando entre imagens
    existe mais codigos para esse efeito, aula 21
    */
    add_theme_support('theme-header');

    //adiciona miniaturas, é possivel adicionar de varios tamanhos
    //vincula uma imagem a um post
    add_theme_support('post-thumbnails');

    //vai liberar um input no painel de adm do wp, permitindo inserir video, imagem..
    add_theme_support('post_formats', array('video', 'image'));

    //adicionar suporte a html5
    add_theme_support('html5', array());

?>