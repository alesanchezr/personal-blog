<?php 

function get_tags_string($tags_array)
{
	$str = "";
	foreach ($tags_array as $tag) {
		$str .= 'tag_'.$tag->slug.' ';
	}

	return $str;
}
get_header('estandar'); ?>
<ul id="filters" class="clearfix">
	<?php 
		$tags_array = get_tags(); 
		$tag_str = get_tags_string($tags_array); 
	?> 
	<li><span class="filter active" data-filter="<?php echo $tag_str; ?>">All</span></li>
	<?php 	foreach($tags_array as $tag) { ?>
	<li><span class="filter" data-filter="tag_<?php echo $tag->slug; ?>"><?php echo $tag->name; ?></span></li>
	<?php } ?>
</ul>
<div id="portfoliolist">
			
<?php
$args = array(
	'post_type' => 'project'
	);
$custom_query = new WP_Query( $args );
$cont = 0;
	while($custom_query->have_posts()) : $custom_query->the_post(); 
	$cont++;
	$postId = get_the_ID();
	$title = get_the_title();
	$content = get_the_content();
	$permalink = get_the_permalink();

	$image1 = get_post_meta( $postId, 'wpcf-image-1', false);
	$post_tags = wp_get_post_tags($postId);
	$thumb_url = $image1[0];
?>
	<div class="<?php foreach ($post_tags as $tag) echo 'tag_'.$tag->slug.' '; ?> portfolio mix_all" data-url="<?php echo $permalink; ?>" style="display: inline-block;  opacity: 1;">
		<div class="portfolio-wrapper">             
			<img src="<?php echo $thumb_url; ?>" alt="" style="top: 0px;">
			<div class="bottom-label" style="top: 200px;">
				<div class="label-text">
					<a href="http://4geeks.geeksfactory.co/4geeks-portfolio&amp;id=112713" class="text-title"><?php echo $title; ?></a>
					<ul class="text-category">

					<div class="text-description">
						<?php echo $description; ?>
					</div>

					<li>social-network,</li>

					</ul>
				</div>
				<div class="label-bg"></div>
			</div>
		</div>
	</div>	
<?php endwhile; ?>
<?php wp_reset_postdata(); // reset the query ?>										
			
</div>
<?php get_footer('estandar'); ?>