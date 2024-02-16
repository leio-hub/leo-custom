<?php get_header(); 
/*Template Name: Home*/

$username = get_field('user_name');
$gallery = get_field('profile_pic');
$pic = $gallery['sizes']['cstm_size'];
$textareas = get_field('text_areas');
$first_input = $textareas[0]['text'];
$second_input = $textareas[1]['text'];
$drawings = get_field('my_drawings');
$circlebtn_name = get_field('circle_button_name');
$listbtn_name = get_field('list_button_name');
$left_menu_locations = get_nav_menu_locations();
$left_menu_id = $left_menu_locations['left-menu'];
$left_menu_items = wp_get_nav_menu_items($left_menu_id);
?>

<div class="transition">
	<div id="menuTitleDisplay" class="menu-name-text"></div>
</div>

    <section class="bgcolor">
        <div class="profile-image" >
			<img src="<?php echo $pic;?>">
				<div class="scroll" id="marqueeContainer">
					<div class="scrolltext">
                    	<h1 class="header-title" id="header-title">
                        	<?php echo $username . " – ";?>
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
                        <?php the_sub_field('hobby'); echo"<br>"; ?>
                    <?php endwhile;?>
                <?php endif;?>
            </div>
        </div>		

    </section>
	<div class="page2">
		<div class="container">			
			<div class="row text-container">
				<div class="first-text col-9"><?php echo nl2br($first_input); ?></div>
				<div class="col-3">
					<div class="row">
						<div class="second-text"><?php echo nl2br($second_input);?></div>
							<div class="button__container my-5 col-12">
								<button class="round-btn mx-0" onclick="handleButtonClick('<?php echo $circlebtn_name['url'];?>')">
								<span class="btn-text">
									<?php echo $circlebtn_name['title'];?>
									<script>
    									function handleButtonClick(url) {
       									 window.location.href = url; //
    									}
										</script>

								</span>
							</button>
						</div>
						</div>
					</div>
				</div>
		</div>
	</div>	

    <section class="white container">
            <div class="listofworks">
                <div class="list1">
                    <h5 class="list-header">RECENT WORK</h5>
                    <?php if(have_rows('list_items')): ?>
                        <ul class="list-group">
                            <?php while(have_rows('list_items')): the_row();?>

                                <li class="list-group-item">
                                    <?php the_sub_field('recent_works'); ?>
                                </li>
                            <?php endwhile;?>     
                    </ul>
                    <?php endif;?>
                </div>
            </div>
            <div class="center-btn">
                <button class="list-btn">
					<span class="b-text">
						<?php echo $listbtn_name; ?>
					</span>
				</button>
            </div>
    </section>

	<div class="slider">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="pics">
						<?php if($drawings): ?>
							<?php foreach($drawings as $drawing): ?>
								<img src="<?php echo $drawing['sizes']['medium'];?>">
							<?php endforeach;?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	
	
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="pics">
						<?php if($drawings): ?>
							<?php foreach($drawings as $drawing): ?>
								<img src="<?php echo $drawing['sizes']['medium'];?>">
							<?php endforeach;?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>

	</div>
							
 


<?php get_footer(); ?>