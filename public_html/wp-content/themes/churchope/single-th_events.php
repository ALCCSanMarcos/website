<?php get_header(); ?>
<?php
$post_layout = (get_post_meta(get_the_ID(), SHORTNAME . "_post_layout", true)) ? get_post_meta(get_the_ID(), SHORTNAME . "_post_layout", true) : 'layout_'.get_option(SHORTNAME . '_events_layout').'_sidebar';	
$post_sidebar = (get_post_meta(get_the_ID(), SHORTNAME . '_post_sidebar', true)) ? get_post_meta(get_the_ID(), SHORTNAME . '_post_sidebar', true) : get_option(SHORTNAME . '_events_sidebar');
?>
<div id="contentarea" class="row">
	<?php if ($post_layout == 'layout_left_sidebar') { ?>
	<aside class="grid_4 left-sidebar">
		<?php $sidebar = ($post_sidebar)? $post_sidebar : "default-sidebar";
		generated_dynamic_sidebar_th($sidebar); ?>
	</aside>
	<?php } ?>
	<div class="<?php echo ($post_layout == 'layout_none_sidebar') ? 'grid_12' : 'grid_8'; ?>">    
		<?php get_template_part('loop','events'); ?>
	</div>
	<?php if ($post_layout == 'layout_right_sidebar') { ?>
	<aside class="grid_4 right-sidebar">
		<?php $sidebar = ($post_sidebar)? $post_sidebar : "default-sidebar";
		generated_dynamic_sidebar_th($sidebar); ?>
	</aside>
	<?php } ?>
</div>
<?php get_footer(); ?>