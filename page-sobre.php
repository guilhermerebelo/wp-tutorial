<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- chaada para function do functions.php -->
    <?php wp_head()?>

</head>
<body <?php body_class(); ?>>
    <?php get_header(); ?>

    <div class="container"  style="height: 200px; background-color: beige  ">
        PAGINA SOBRE
    </div>

    <?php get_footer(); ?>

    <!-- carrega os scripts no footer -->
    <?php wp_footer(); ?>
</body>
</html>