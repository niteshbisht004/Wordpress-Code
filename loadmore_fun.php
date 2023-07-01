<?php

add_action( 'wp_footer', 'my_action_javascript' ); 
function my_action_javascript() { ?>
<script>
	// on load more button
		var page = 3; 
		jQuery(".load_more").click(function(){
		var data = {
			'action': 'get_blogposts',
			 'page': page
		};
		
		var ajaxurl = '<?php echo admin_url("admin-ajax.php"); ?>';
		jQuery.post(ajaxurl, data, function(response) {
				jQuery('ul.is-flex-container.columns-3').append(response);
				page++;
		});				
	
		});		
</script>
<?php
}
add_action( 'wp_ajax_get_blogposts', 'get_blogposts' );
add_action( 'wp_ajax_nopriv_get_blogposts', 'get_blogposts' );
function get_blogposts() {
	if(isset($_POST['page'] )){
						$page = isset( $_POST['page'] ) ? intval( $_POST['page'] ) : 3;
				}
				
						$args = array(
									'post_type' => 'post',
									'status'         => 'publish',
									'posts_per_page' => 6,
									'paged'          => $page
							        
									
							);
				
				$result = new WP_Query( $args );
				//echo $page;
				if(!isset($page)){
					$page = 1;
				}
			    $total_pages = $result ->max_num_pages;
	
							if ($result ->have_posts()) {
								$count =1;
								while ($result ->have_posts()) : $result ->the_post();
								$excerpt = wp_strip_all_tags(get_the_excerpt(get_the_ID())); 
								$words = explode(' ', $excerpt); 
								$limitedExcerpt = implode(' ', array_slice($words, 0, 30));
								echo '<li class="wp-block-post post-1303 post type-post status-publish format-standard has-post-thumbnail hentry category-resources">
								<div class="wp-block-group is-layout-flow wp-block-group-is-layout-flow">
								<figure class="wp-block-post-featured-image">
								<a href="'.get_the_permalink().'" target="_self">
								<img  src="'.get_the_post_thumbnail_url(get_the_ID()).'" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" sizes="(max-width: 1000px) 100vw, 1000px" style="height:270px;">
								</a>
								</figure>
								<h2 class="has-link-color wp-block-post-title has-medium-font-size has-secondary-font-family">
								<a href="'.get_the_permalink().'" target="_self">'.get_the_title(get_the_ID()).'</a>
								</h2>
								<div style="margin-top:10px;" class="blogpage_text wp-block-post-excerpt has-opensans-font-family">
								<p class="wp-block-post-excerpt__excerpt">'.$limitedExcerpt.'...</p>
								</div>
								<div style="margin-top:10px; font-style:normal;font-weight:400;" class="wp-block-post-date">
								<time datetime="2023-05-23T11:14:09+00:00">May 23, 2023</time></div></div>
								</li>';							   
								endwhile;
							}else {
								echo '<style>.load_more { visibility: hidden;}</style>';
							}; 
							
				if($page==$total_pages){
					echo '<style>.load_more { visibility: hidden;}</style>';
				}							
					
	wp_die();
}