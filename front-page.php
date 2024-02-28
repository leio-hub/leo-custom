<?php 
/*Template Name: Home*/
get_header(); 

$username     = get_field('user_name');
$profile      = get_field('profile_pic');
$pic          = $profile['sizes']['cstm_size'];
$textareas    = get_field('text_areas');
$first_input  = $textareas[0]['text'];
$second_input = $textareas[1]['text'];
$drawings     = get_field('my_drawings');
// $list_item_images  = get_field('list_items_images');
// $list_images = $list_item_images['list_images'];
$circlebtn_name = get_field('circle_button_name');
$listbtn_name   = get_field('list_button_name');
$left_menu_locations = get_nav_menu_locations();
$left_menu_id        = $left_menu_locations['left-menu'];
$left_menu_items     = wp_get_nav_menu_items($left_menu_id);
?>



<section class="bgcolorhome">
    <div class="profile-image" >
		<img src="<?php echo $pic;?>">
			<div class="scroll" id="marqueeContainer">
				<div class="scrolltext">
                    <h1 class="header-title" id="header-title">
                        <?php echo esc_html($username) . " – ";?>
                    </h1>
					<h1 class="header-title" id="header-title">
                    	<?php echo $username . " – "; ?>
                    </h1>
				</div>
            </div>
    </div>

	<div class="description">
        <?php if(   have_rows('job_description')):?>
            <?php while(    have_rows('job_description')): the_row();?>
                <?php the_sub_field('hobby'); ?>
            <?php endwhile;?>
        <?php endif;?>
    </div>

</section>


	
<div class="page2">
	<div class="container">			
		<div class="row text-container">
			<div class="first-text col-9">
				<div class="sticky-text">
				<?php echo wp_kses_post ( nl2br($first_input) ); ?>
				</div>
			</div>
			<div class="col-3">
				<div class="row">
					<div class="second-text"><?php echo nl2br($second_input);?></div>
						<div class="button__container my-5 col-12">
							<button class="round-btn mx-0" data-url="<?php echo $circlebtn_name['url'];?>">
								<span class="btn-text">
									<?php 
										echo $circlebtn_name['title'];
									?>		
								</span>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>
<div class="spacer"></div>
	<section class="white container">
			<h5 class="list-header">RECENT WORK</h5>
				<hr>
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
									<img src="<?php echo $image_in_list; ?>" class="list-images">
									<!-- <div class="tooltipbutton"><span>View</span></div> -->
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
		<div class="center-btn">
			<button class="list-btn">
				<span>
					<?php echo $listbtn_name; ?>
				</span>
			</button>
		</div>
	</section>

<div class="scrubcontainer">
<div class="scrub">
    <?php if (have_rows('list_items')) : ?>
        <?php while (have_rows('list_items')) : the_row(); ?>
            <div class="scrub-box" id="<?php echo "pic-" . get_row_index(); ?>">
                <?php
                $scrub_images = get_sub_field('list_images');
                $scrub_images_inside = $scrub_images['sizes']['cstm_size'];
                ?>
                <img src="<?php echo $scrub_images_inside; ?>" class="list-images">
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>

<div class="scrub">
    <?php if (have_rows('list_items')) : ?>
        <?php while (have_rows('list_items')) : the_row(); ?>
            <div class="scrub-box2" id="<?php echo "pic-" . get_row_index(); ?>">
                <?php
                $scrub_images = get_sub_field('list_images');
                $scrub_images_inside = $scrub_images['sizes']['cstm_size'];
                ?>
                <img src="<?php echo $scrub_images_inside; ?>" class="list-images">
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
</div>

<div class="transitionIn">
	        <div id="menuTitleDisplay" class="menu-name-text"></div>
        </div>
<?php get_footer(); ?>
