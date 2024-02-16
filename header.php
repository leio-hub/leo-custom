<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@barba/core"></script> -->

    <?php wp_head(); ?>
</head>
<body data-barba="wrapper">
    
    <div class="topmenu">
        <div class="container">
            <?php 
                wp_nav_menu(

                    array(

                        'theme_location' => 'left-menu',

                        'menu_class' => 'left-bar',
                        )            

                    );
            
            
            
                wp_nav_menu(

                    array(

                        'theme_location' => 'right-menu',

                        'menu_class' => 'top-bar',
                        )            

                    ); 
            ?>
            
        </div>
    </div>
    <main data-barba="container" data-barba-namespace="home">
