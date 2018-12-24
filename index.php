<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- chamada para function do functions.php -->
    <?php wp_head()?>

</head>
<body <?php body_class(); ?>>
    <?php get_header(); ?>

    <!-- a logica dos posts fica na index -->
    <div class="container" style="background: #ffd4d4; padding: 30px">
        <h4>
            <?php
                if(have_posts()) {
                    while(have_posts()) {
                        the_post();
                        ?>
                            <h1><?php the_title(); ?></h1>
                            <?php //the_post_thumbnail(array(450,450)); ADICIONANDO MINIATURA AO POST ?> 
                            <p>Pulbicado em <?php echo get_the_date(); ?> por <?php the_author(); ?></p>
                            <p>Categorias: <? the_category(' '); ?></p>
                            <p><?php the_content(); ?></p>
                        <?php
                    };
                } else {
                    ?>
                    <p>Não tem nada para exibir</p>
                    <?php
                }
            ?>
        </h4>
    </div>

    <?php get_footer(); ?>

    <!-- carrega os scripts no footer -->
    <?php wp_footer(); ?>
</body>
</html>