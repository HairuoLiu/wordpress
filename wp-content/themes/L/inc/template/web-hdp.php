<?php 
/***************************************

## Version: 0.1

****************************************/
?>

<!--效果html开始-->
<?php 
$showposts = cx_options('_cx_slider_num');
$args = array(
		'post_type'=>'slider_type',
		'orderby'=>'menu_order',
		'showposts'=>$showposts
	);
query_posts($args);
?>
<div class="site-wrap">
	<ul class="bxslider">
	<?php
	if(have_posts()):
    while(have_posts()): the_post();
    $slider_pic = get_post_meta($post->ID,'_slider_pic',true);
    $slider_link = get_post_meta($post->ID,'_slider_link',true);
    ?>
    <li><a target="_blank" href="<?php echo $slider_link; ?>"><img src="<?php echo $slider_pic ?>" alt="<?php the_title(); ?>" width="100%" /></a></li>
    <?php endwhile; else: ?>
    <li><a target="_blank" href="http://pico.org.ohio-state.edu"><img src="<?php echo CX_THEMES_URL;?>/images/demo.jpg" alt="Pico" width="100%" /></a></li>
    <?php endif; ?>
	</ul>
</div>
<?php wp_reset_query();
