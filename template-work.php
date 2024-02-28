<?php 
/* Template Name: Work */

?>

<?php get_header();

    $burger       = get_field('menu_pic');
    $close_burger = get_field('close_menu_pic');
    $menu         = $burger['sizes']['cstm_size'];
    $close        = $close_burger['sizes']['cstm_size'];
?>
<div class="bgcolorwork">
    <div class="row">
        <div class="contacttext"><h1>HERE ARE SOME OF MY WORKS</h1></div>
    </div>
</div>

<div class="sidebar-container">
    <div class="sidebar">
    <?php 
                    wp_nav_menu(
                        array(
                            'theme_location' => 'left-menu',
                            
                            )            
                    );
                
                    wp_nav_menu(
                        array(
                            'theme_location' => 'right-menu',
                            
                            )            
                    ); 
                ?>
    </div>
</div>
    <section class="white container">
        <div class="list1">
            <?php if( have_rows ( 'list_items' ) ) : ?>
                <?php while( have_rows ( 'list_items' ) ): the_row(); ?>
                    <div class="row list" id="<?php echo "row-" . get_row_index(); ?>">
                        <div class="tooltip1">  
                            <div class="image_container">
                                <?php 
                                    $list_images = get_sub_field ('list_images'); 
                                    $image_in_list = $list_images['sizes']['cstm_size'];
                                        ?>    
                                <img src="<?php echo $image_in_list; ?>" class="list-images" id="<?php echo $image_index; ?>">
                                <!-- <div class="tooltipbutton">
                                    <span>View</span>
                                </div>        -->
                            </div>
                            </div>

                        <div class="col-9">
                            <?php the_sub_field ( 'recent_works' ); ?>
                        </div>
                            <div class="col-3">
                                <h6>
                                    <?php 
                                        $type_of_work = get_sub_field ('type_of_work');
                                        echo $type_of_work;
                                        ?>
                                </h6>
                            </div>
                        </div>	
                <?php endwhile;?>    
            <?php endif;?>
        </div>
    </section>
<div class="bgcolorwork">
    <div class="row">
        <div class="contacttext"><h1>HERE ARE SOME OF MY WORKS</h1></div>
    </div>
</div>
<?php get_footer(); ?>
