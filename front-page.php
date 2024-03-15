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

$circlebtn_name = get_field('circle_button_name');
$listbtn_name   = get_field('list_button_name');

$left_menu_locations = get_nav_menu_locations();
$left_menu_id        = $left_menu_locations['left-menu'];
$left_menu_items     = wp_get_nav_menu_items($left_menu_id);

?>

<section class="bgcolorhome">
	<div class="profile-image">
		<div class="profile-image-fixed">
			<img src="<?php echo $pic; ?>" alt="">
		</div>
		<div class="cv-container">
			<button class="cv-button">
				<span>DOWNLOAD CV</span>
				<svg width="34" height="34" viewBox="0 0 74 74" fill="white" xmlns="http://www.w3.org/2000/svg">
					<circle cx="37" cy="37" r="35.5" stroke="white" stroke-width="3"></circle>
					<path d="M25 35.5C24.1716 35.5 23.5 36.1716 23.5 37C23.5 37.8284 24.1716 38.5 25 38.5V35.5ZM49.0607 38.0607C49.6464 37.4749 49.6464 36.5251 49.0607 35.9393L39.5147 26.3934C38.9289 25.8076 37.9792 25.8076 37.3934 26.3934C36.8076 26.9792 36.8076 27.9289 37.3934 28.5147L45.8787 37L37.3934 45.4853C36.8076 46.0711 36.8076 47.0208 37.3934 47.6066C37.9792 48.1924 38.9289 48.1924 39.5147 47.6066L49.0607 38.0607ZM25 38.5L48 38.5V35.5L25 35.5V38.5Z" fill="black"></path>
				</svg>
			</button>
		</div>
		<div class="scroll" id="marqueeContainer">
			<div class="scrolltext">
				<h1 class="header-title" id="header-title">
					<?php echo esc_html($username) . " – "; ?>
				</h1>
				<h1 class="header-title" id="header-title">
					<?php echo $username . " – "; ?>
				</h1>
			</div>
		</div>
	</div>

	<div class="description">
		<?php if (have_rows('job_description')) : ?>
			<?php while (have_rows('job_description')) : the_row(); ?>
				<?php the_sub_field('hobby'); ?><?php echo "<br>"; ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>

</section>

<div class="page2">
	<div class="container">
		<div class="row text-container">
			<div class="first-text col-sm-12 col-md-6 col-lg-9">
				<div class="sticky-text">
					<?php echo wp_kses_post(nl2br($first_input)); ?>
				</div>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-3">
				<div class="row">
					<div class="second-text"><?php echo nl2br($second_input); ?></div>
					<div class="button__container my-5 col-12">
						<button class="round-btn" data-url="<?php echo $circlebtn_name['url']; ?>">
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

<section class="white container-fluid">
	<div class="container">
		<h5 class="list-header">RECENT WORK</h5>
		<hr>
		<div class="list1">
			<?php if (have_rows('list_items')) : ?>
				<?php while (have_rows('list_items')) : the_row(); ?>
					<div class="row list mx-0" id="<?php echo "row-" . get_row_index(); ?>">
						<div class="tooltip1">
							<div class="image_container">
								<?php
								$list_images = get_sub_field('list_images');
								$image_in_list = $list_images['sizes']['cstm_size'];
								?>
								<img src="<?php echo $image_in_list; ?>" class="list-images">
								<!-- <div class="tooltipbutton"><span>View</span></div> -->
							</div>
						</div>

						<div class="col-9 p-0">
							<?php the_sub_field('recent_works'); ?>
						</div>
						<div class="col-3">
							<h6>
								<?php
								$type_of_work = get_sub_field('type_of_work');
								echo $type_of_work;
								?>
							</h6>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<div class="center-btn">
			<button class="list-btn" data-url="<?php echo $listbtn_name; ?>">
				<span>
					<?php echo $listbtn_name; ?>
				</span>
			</button>
		</div>
	</div>
</section>

<div class=" scrubcontainer">
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