<?php get_header('estandar'); ?>
<?php
$args = array(
	'post_type' => 'startup',
	'post_count' => -1,
	'posts_per_page' => -1
	);
$custom_query = new WP_Query( $args );
$cont = 0;
	while($custom_query->have_posts()) : $custom_query->the_post(); 
	$cont++;
	$postId = get_the_ID();
	$title = get_the_title();
	$content = get_the_content();
	$excerpt = get_the_excerpt();
	$permalink = get_the_permalink();

	$exerp = get_post_meta( $postId, 'wpcf-website', false);
	$post_thumbnail_id = get_post_thumbnail_id(get_the_ID());
	$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
	if($post_thumbnail_url=="") $post_thumbnail_url = get_template_directory_uri() . '/images/thumbnail-default.jpg';
?>
<div class="hover panel" onmouseover="javascript:this.className += ' flip';" onmouseout="javascript:this.className = 'hover panel';">
  <div class="front">
      <div class="frontTitle">
        <?php echo $title; ?>
      </div>
      <div class="frontLogo">
      	<img src="<?php echo $post_thumbnail_url; ?>" alt="">
      </div>
      <div class="frontLocation">
      	<?php echo $excerpt; ?>
      </div>
  </div>
  <div class="back">
    <div class="backTitle"><?php echo $title; ?></div>
    <div class="backParagraph">
        <?php echo $content; ?>
    </div>
    <div class="backGoto">
      <a href="<?php echo $website; ?>" title="Academic Portfolio">Website →</a>
    </div>
  </div>
</div>
<?php endwhile; ?>
