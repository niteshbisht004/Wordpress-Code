<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Astra
 * @since 1.0.0
 */
error_reporting(E_ERROR | E_PARSE);

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


get_header(); ?>
<style>
 h2,h4,h5,h6 {
   color: #fff !important;
    text-transform: uppercase !important;
	font-size:25px !important;
	line-height:35px !important;
 }
</style>
<link rel="stylesheet" type="text/css" href="https://tantric-london.com/wp-content/plugins/elementor/assets/css/frontend-lite.min.css?ver=3.6.6" />
	<link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick.css" />
	<link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick-theme.css" />
<?php 
		global $post;
		$term = get_queried_object();
		//echo '<pre>';
		//print_r($term);
		
		$slug = $term->slug;
		$id = $term->term_id;
		
		$namet = $term->name;
		
		$fbck = get_field('first_section_background_image',$term);
	?>
	<section id="top-banner-location" class="elementor-section elementor-top-section elementor-element elementor-element-9d24424 elementor-section-full_width elementor-section-height-min-height elementor-section-height-default elementor-section-items-middle" data-id="9d24424" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" <?php if($fbck == ''){}else{ ?>style="background-image:url(<?php echo get_field('first_section_background_image',$term); ?>);" <?php } ?>>
	<div class="elementor-container elementor-column-gap-default">
		<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b8e4066 resizing" data-id="b8e4066" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
				<div class="elementor-element  elementor-element-fa02895 elementor-widget elementor-widget-heading" data-id="fa02895" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<style>/*! elementor - v3.7.3 - 29-08-2022 */
					.elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}
			</style>
					<h2 class="elementor-heading-title elementor-size-default">
						<?php echo get_field('first_section_title',$term); ?>
					</h2>
					<?php $first_section_description = get_field('first_section_description',$term);
						if( $first_section_description != "" )
							{
					?>
				  <?php echo $first_section_description; ?>
					  <?php } ?>
				</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	
<section id="location-girls-image" class="elementor-section elementor-top-section elementor-element elementor-element-51f871d elementor-section-boxed elementor-section-height-default elementor-section-height-default resizing" data-id="51f871d" data-element_type="section">
		<div class="elementor-container elementor-column-gap-default">
			<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b34071e" data-id="b34071e" data-element_type="column">
				<div style="width:100%;" class="elementor-element elementor-col-100 elementor-element-e9787a1 elementor-widget elementor-widget-text-editor" data-id="e9787a1" data-element_type="widget" id="p1" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
				<?php  $args = array(
					'post_type' => 'portfolio',
					'post_status'    => 'publish',
					'tax_query' => array(
					   array(
								'taxonomy' => 'locations',
								'field' => 'slug',
								'terms' => $slug,
							)
						)
				  );
//Query the posts:
$obituary_query = new WP_Query($args);



if ($obituary_query->have_posts() ) : while($obituary_query->have_posts()) : $obituary_query->the_post();
        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
		
           $id = get_the_ID();
		   
		$vid = get_field('video',$id); 
		$video = $vid['url'];
		$vname = $vid['name'];
		$image_id = get_post_thumbnail_id($id);
	
		$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
		
        $alt = get_the_title($image_id);
		$image_name = get_post_field('post_title', $image_id);
		$away = get_field('away',$id); 
		//echo '<pre>';
		//print_r($image_alt);
 if($featured_img_url != ""){
?>			
	                   
<div class="elementor-column elementor-col-25 pgrid elementor-inner-column elementor-element " data-id="a4d081e" data-element_type="column">
		
	<a href="<?php the_permalink(); ?>">

	<div class="elementor-widget-container video">
	<?php if($away[0] == 'Yes'){ ?> <span class="away">AWAY</span><?php  } ?>
			<img width="100%" height="400" src="<?php echo $featured_img_url; ?>" class="attachment-large size-large" >
					
	</div>
			
<div class="elementor-widget-container nearbygirl-content">
	<style>/*! elementor - v3.6.5 - 27-04-2022 */
			.elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}
		
	</style>
	<h2 class="titlehome elementor-heading-title elementor-size-default nearbygirl-text">
		<?php $name = get_the_title();
		$terms = get_the_terms( $id, 'massages' );
	$massage = $terms[1]->name;
    $term = get_the_terms( $id, 'locations' );
	$city = $term[1]->name;
	 echo ucfirst($name) .'-'. ucfirst($massage) .'-'. ucfirst($city);
		?>
	</h2>		
</div>
</a>
</div>
							
					
	<?php 
}
endwhile; 
wp_reset_postdata(); 
else:
?>
<h3 style="text-align:center;">No result Found</h3>
<?php
endif;

$term = get_queried_object();
$id = $term->term_id;
//$number2 = $id + 1;
//$num3 = $number2 +1;

?>



</div>
</div>
</div>
	
</div>
<div class="elementor-element elementor-element-7c677ad elementor-align-center elementor-widget elementor-widget-button widget-button11" data-id="7c677ad" data-element_type="widget" data-widget_type="button.default">
				<div class="elementor-widget-container">
					<div class="elementor-button-wrapper">
			<a href="<? echo get_home_url();?>/masseuse/" class="elementor-button-link elementor-button elementor-size-sm button-text11 btntext11" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">VIEW ALL MASSEUSES</span>
		</span>
					</a>
		</div>
				</div>
		</div>
</section>
</div>
				<section id="mayfair-location" class="elementor-section elementor-top-section elementor-element elementor-element-6f4798b elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="6f4798b" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div id="location-content" class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-0469d0e" data-id="0469d0e" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-e18c371 elementor-widget elementor-widget-heading" data-id="e18c371" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h3 class="elementor-heading-title elementor-size-default"><?php echo get_field('massage_in',$term); ?></h3>		</div>
				</div>
				<div class="elementor-element elementor-element-a99eb89 elementor-widget elementor-widget-text-editor" data-id="a99eb89" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
				<?php 
               $term = get_queried_object();
			   
			   
               $id = $term->term_id;
				//print_r($term);
					$term = get_term($id, 'locations' );	
					$name = $term->name;
                   $child_term = get_term($id, 'locations' );
				   
              $parent_term = get_term( $child_term->parent, 'locations' );
              $termss = get_terms( 'locations', "parent=$id" );
				$count = count($termss);
				//echo $count;
                   if ( $count == 0 ){
						?>	
				<div class="location-massage" style="display: flex;"><ul style="width: 200px;"><li><span style="color: #ffffff;"><a href="<?php echo  get_term_link( $term->term_id ); ?>"><?php echo $name; ?></a></span></li></ul></div>
<?php 
				
				}
				else{
					
				?>
						
				<?php
				 
				 foreach ( $termss as $termns ) {?>
				 	<div class="location-massage" style="display: flex;"><ul style="width: 200px;"><li><span style="color: #ffffff;"><a href="<?php echo  get_term_link( $termns->term_id ); ?>"><?php echo $termns->name; ?></span></a></li></ul></div>
<?php }
				
				}
				
				?>
					<h3 class="elementor-heading-title elementor-size-default"><?php echo get_field('massage_near',$term); ?></h3>
						<?php 

                       $term = get_queried_object();
					   
						$lid = get_field('nearby_locations',$term);
					if(!empty($lid)){
						foreach($lid as $val){

						$terml = get_term( $val, 'locations' );

						$namel = $terml->name;	
						?>
						<div class="location-massage" style="display: flex;">
						<ul style="width: 200px;"><li><span style="color: #ffffff;"><a href="<?php echo  get_term_link( $val ); ?>"><?php echo $namel; ?></a></span></li></ul></div>
						<?php }
					}
						  if(!empty($parent_term)){
						 $pcity = $parent_term->term_id;
						 $pname = $parent_term->name;
						

							?>
						<h3 class="elementor-heading-title elementor-size-default"><?php echo get_field('view_all_in',$term); ?></h3>
						<!--
						<div class="location-massage" style="display: flex;">
							<ul style="width: 200px;">
								<li>
									<span style="color: #ffffff;">
										<a href="<?php //echo  get_term_link( $pcity ); ?>"><?php //echo $pname; ?></a>
									</span>
								</li>
							</ul>
						</div>
						-->
						
						<?php } ?>
				</div>
				</div>
					</div>
		</div>
				<div id="location-maymap" class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-7e2bf06" data-id="7e2bf06" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-4f3ba73 elementor-widget elementor-widget-text-editor" data-id="4f3ba73" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							<?php
							 $term = get_queried_object();
							echo get_field('google_map',$term); ?>					</div>
				</div>
					</div>
		</div>
							</div>
		</section>
						
			
							
	<section id="location-end-one" class="elementor-section elementor-top-section elementor-element elementor-element-58a3b0d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="58a3b0d" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
	
	<div class="elementor-container elementor-column-gap-default nkb-row" style="padding-top: 60px;">
		<div class="elementor-row">
			<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-44b8224b elementor-widget elementor-widget-heading" data-id="44b8224b" data-element_type="widget" data-widget_type="heading.default">
					<div class="elementor-widget-container center">
					<?php echo get_field('second_section_title',$term); ?>
					</div>
				</div>
				<div class="elementor-element elementor-element-122b38e0 elementor-widget elementor-widget-text-editor" data-id="122b38e0" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
					<div class="elementor-text-editor elementor-clearfix timerel center">
				      <?php echo get_field('second_section_description',$term); ?>					
					 </div>
				</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="elementor-container elementor-column-gap-default nkb-rows" style="padding-top: 20px;">
		<div class="elementor-row">
			<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-44b8224b elementor-widget elementor-widget-heading" data-id="44b8224b" data-element_type="widget" data-widget_type="heading.default">
					<div class="elementor-widget-container center">
					<?php echo get_field('third_section_title',$term); ?>
					</div>
				</div>
				<div class="elementor-element elementor-element-122b38e0 elementor-widget elementor-widget-text-editor" data-id="122b38e0" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
					<div class="elementor-text-editor elementor-clearfix timerel center">
				      <?php echo get_field('third_section_description',$term); ?>					
					 </div>
				</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="elementor-container elementor-column-gap-default nkb-rows" style="padding-top: 20px;">
		<div class="elementor-row">
			<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-44b8224b elementor-widget elementor-widget-heading" data-id="44b8224b" data-element_type="widget" data-widget_type="heading.default">
					<div class="elementor-widget-container center">
					<?php echo get_field('massage_sect5_title',$term); ?>
					</div>
				</div>
				<div class="elementor-element elementor-element-122b38e0 elementor-widget elementor-widget-text-editor" data-id="122b38e0" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
					<div class="elementor-text-editor elementor-clearfix timerel center">
				      <?php echo get_field('massage_sect5_decription',$term); ?>					
					 </div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<!--
	<div class="elementor-container elementor-column-gap-default nkb-rows" style="padding-top: 20px;">
		<div class="elementor-row">
			<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-44b8224b elementor-widget elementor-widget-heading" data-id="44b8224b" data-element_type="widget" data-widget_type="heading.default">
					<div class="elementor-widget-container center">
					<?php //echo get_field('massage_sect6_title',$term); ?>
					</div>
				</div>
				<div class="elementor-element elementor-element-122b38e0 elementor-widget elementor-widget-text-editor" data-id="122b38e0" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
					<div class="elementor-text-editor elementor-clearfix timerel center">
				      <?php //echo get_field('massage_sect6_decription',$term); ?>					
					 </div>
				</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="elementor-container elementor-column-gap-default nkb-rows" style="padding-top: 20px;">
		<div class="elementor-row">
			<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-44b8224b elementor-widget elementor-widget-heading" data-id="44b8224b" data-element_type="widget" data-widget_type="heading.default">
					<div class="elementor-widget-container center">
					<?php //echo get_field('seventh_sec_title',$term); ?>
					</div>
				</div>
				<div class="elementor-element elementor-element-122b38e0 elementor-widget elementor-widget-text-editor" data-id="122b38e0" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
					<div class="elementor-text-editor elementor-clearfix timerel center">
				      <?php //echo get_field('seventh_sec_decription',$term); ?>					
					 </div>
				</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="elementor-container elementor-column-gap-default nkb-rows" style="padding-top: 20px;">
		<div class="elementor-row">
			<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-44b8224b elementor-widget elementor-widget-heading" data-id="44b8224b" data-element_type="widget" data-widget_type="heading.default">
					<div class="elementor-widget-container center">
					<?php //echo get_field('eight_sec_title',$term); ?>
					</div>
				</div>
				<div class="elementor-element elementor-element-122b38e0 elementor-widget elementor-widget-text-editor" data-id="122b38e0" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
					<div class="elementor-text-editor elementor-clearfix timerel center">
				      <?php //echo get_field('eight_sec_decription',$term); ?>					
					 </div>
				</div>
				</div>
			</div>
		</div>
	</div>
	-->
	<?php 
	
	  $taxonomy = 'massages'; // Taxonomy slug.
        $terms = get_terms([
					'taxonomy' => $taxonomy,
					'hide_empty' => false,
				]);
			
	?>
	
	<div class="elementor-container elementor-column-gap-default">
		<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4704b4c" data-id="4704b4c" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
				<div class="elementor-element elementor-element-1b9d522 elementor-widget elementor-widget-heading" data-id="1b9d522" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h3 class="elementor-heading-title elementor-size-default">TANTRIC MASSAGE SERVICES</h3>		</div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-05b0183 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="05b0183" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
					<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-13b8cca" data-id="13b8cca" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-c3bc78c elementor-widget elementor-widget-text-editor" data-id="c3bc78c" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							<ul>
    <?php
        $taxonomy = 'massages'; // Taxonomy slug.
        $terms = get_terms([
					'taxonomy' => $taxonomy,
					'hide_empty' => false,
				]);

        $children = '';
        $i = 0;
        foreach ( $terms as $term ) {
            // Parent ID 
                $children = $term->name; 
				 $slug = $term->slug;
				 if($i < 6){
					 if($i == 0){}else{
				 ?>

                <li><a href="/massages/<?php echo $slug; ?>"><?php echo $children; ?></a></li>

            <?php 
					 }
				 }			
			$i++;
	   }
    ?>
</ul>						</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-788d884" data-id="788d884" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-5dece58 elementor-widget elementor-widget-text-editor" data-id="5dece58" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
							<ul>
    <?php
        $taxonomy = 'massages'; // Taxonomy slug.
        $terms = get_terms([
					'taxonomy' => $taxonomy,
					'hide_empty' => false,
				]);

        $children = '';
        $i = 0;
        foreach ( $terms as $term ) {
            // Parent ID 
                $children = $term->name; 
				 $slug = $term->slug;
				 if($i > 5 && $i < 11){
				 ?>

                <li><a href="/massages/<?php echo $slug; ?>"><?php echo $children; ?></a></li>

            <?php 
				 }			
			$i++;
	   }
    ?>
</ul><p>&nbsp;</p>						</div>
				</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7d1acac" data-id="7d1acac" data-element_type="column">
			<div class="elementor-widget-wrap elementor-element-populated">
								<div class="elementor-element elementor-element-b8999f0 elementor-widget elementor-widget-text-editor" data-id="b8999f0" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
				<ul>
    <?php
        $taxonomy = 'massages'; // Taxonomy slug.
        $terms = get_terms([
					'taxonomy' => $taxonomy,
					'hide_empty' => false,
				]);

        $children = '';
        $i = 0;
        foreach ( $terms as $term ) {
            // Parent ID 
                $children = $term->name; 
				 $slug = $term->slug;
				 if($i > 11 && $i < 16){
				 ?>

                <li><a href="/massages/<?php echo $slug; ?>"><?php echo $children; ?></a></li>

            <?php 
				 }			
			$i++;
	   }
    ?>
</ul>	





							</div>
				</div>
					</div>
		</div>
							</div>
		</section>
					</div>
		</div>
							</div>
		</section>
						
	
</section>

<section class="elementor-section elementor-section31  elementor-top-section elementor-element elementor-element-51d72d57 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" data-id="13418c5" data-element_type="section">
	<div class="elementor-container elementor-column-gap-no">
		<div class="elementor-row">
			<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5276513e" data-id="5276513e" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
				<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-1131bd88 elementor-widget elementor-widget-heading" data-id="1131bd88" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
				<h5 class="elementor-heading-title elementor-size-default" style="color: #000000;
					font-size: 12px;
					font-weight: 600;
					text-transform: uppercase;
					letter-spacing: 12px;padding-top:50px;">LOCATION
				</h5>
				</div>
				</div>
				<div class="elementor-element elementor-element-4882696c elementor-widget elementor-widget-heading" data-id="4882696c" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container  tith11h3"><?php //	global $post;
		     //$term = get_queried_object();
		          ///$names =  $term->name;
					 ?>
			<?php
		           $term = get_queried_object();


					echo get_field('massage_sect6_title',$term); ?>		</div>
				</div>
			<div class="elementor-element elementor-element-2e7356a8 elementor-widget elementor-widget-text-editor" data-id="2e7356a8" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
				<div class="elementor-text-editor elementor-clearfix Bonddesc" >
					<?php
		           $term = get_queried_object();


					echo get_field('massage_sect6_decription',$term); ?>				
				</div>		
				</div>
			</div>
		</div>
		</div>
		</div>
		</div>
		</div>
	</section>
<!--
<?php
		           $term = get_queried_object();
				   $tid = $term->term_id;
				  if($tid  == 568 || $tid == 569 || $tid == 613){				   
					

?>

<section class="elementor-section elementor-inner-section elementor-element elementor-element-4c593ca elementor-section-boxed elementor-section-height-default elementor-section-height-default  elementor-section3" data-id="4c593ca" data-element_type="section">
						
						<div class="elementor-container elementor-column-gap-default">
						
							
					<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-588736e" data-id="588736e" data-element_type="column">
				
				<div class="elementor-widget-wrap elementor-element-populated">

								<div class="elementor-element elementor-element-dc544ee elementor-widget elementor-widget-heading" data-id="dc544ee" data-element_type="widget" data-widget_type="heading.default">				
						<div class="elementor-widget-container folio-services">			
							<a href="https://bodytobodylondon.co.uk/locations/london/kensington-chelsea/"><h3 class="tith11s"> Kensington & Chelsea</h3></a>		
						</div>				
					</div>		
				<div class="elementor-element elementor-element-b018c4d elementor-widget elementor-widget-google_maps" data-id="b018c4d" data-element_type="widget" data-widget_type="google_maps.default">				
					<div class="elementor-widget-container">
					<ul>
    <?php
	
			$term = get_queried_object();
			$tid = $term->term_id;
        $taxonomy = 'locations'; // Taxonomy slug.
        $terms = get_terms([
					'taxonomy' => $taxonomy,
					'hide_empty' => false,
				]);

        $children = '';

        foreach ( $terms as $term ) {
            if( $term -> parent == 570) { // Parent ID 
                $children = $term->name; 
				 $slug = $term->slug;
				 $id = $term->term_id;
				 if($tid == $id){}else{
				 ?>

                <li><a href="/locations/kensington-chelsea/<?php echo $slug; ?>"><?php echo $children; ?></a></li>
	 <?php
					$termch = get_term_children($id,'locations');
					
					if(!empty($termch)){
						?>
						
						<?php 
					foreach ( $termch as $termchs ) { 
					$name = get_term($termchs,'locations');
					$name = $name->name;
					?>
			
					<li><a href="<?php echo get_term_link($termchs,'locations') ?>"><?php echo $name; ?></a></li>	
				<?php	}						
						?>
						
						<?php 
					}
				 } } 
        }
		
    ?>
</ul>
</div>					
	</div>	</div>	
					
		
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-588736e" data-id="588736e" data-element_type="column">
				<div class="elementor-widget-wrap elementor-element-populated">		
					<div class="elementor-element elementor-element-dc544ee elementor-widget elementor-widget-heading" data-id="dc544ee" data-element_type="widget" data-widget_type="heading.default">				
						<div class="elementor-widget-container folio-services">			
							<a href="https://bodytobodylondon.co.uk/locations/london/city-of-westminster/"><h3 class="tith11s"> City Of Westminster</h3></a>		
						</div>				
					</div>



				
				<div class="elementor-element elementor-element-b018c4d elementor-widget elementor-widget-google_maps" data-id="b018c4d" data-element_type="widget" data-widget_type="google_maps.default">				
					<div class="elementor-widget-container">
					<ul>
    <?php
        $taxonomy = 'locations'; // Taxonomy slug.
        $terms = get_terms([
					'taxonomy' => $taxonomy,
					'hide_empty' => false,
					'include_children' => true,
					'operator' => 'IN',
					
				]);

        $children = '';

        foreach ( $terms as $term ) {
            if( $term -> parent == 571 ) { // Parent ID 
                $children = $term->name; 
				 $slug = $term->slug;
				 $id = $term->term_id;
				 if($tid == $id){}else{
					
				 ?>

                <li><a href="/locations/city-of-westminster/<?php echo $slug; ?>"><?php echo $children; ?></a></li>

				 <?php
					$termch = get_term_children($id,'locations');
					
					if(!empty($termch)){
						?>
						
						<?php 
					foreach ( $termch as $termchs ) { 
					$name = get_term($termchs,'locations');
					$name = $name->name;
					?>
			
					<li><a href="<?php echo get_term_link($termchs,'locations') ?>"><?php echo $name; ?></a></li>	
				<?php	}						
						?>
						
						<?php 
					}
				 }} 
        }
    ?>
</ul>
</div>					
	</div>	</div>					
		
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-588736e" data-id="588736e" data-element_type="column">
				<div class="elementor-widget-wrap elementor-element-populated">		
					<div class="elementor-element elementor-element-dc544ee elementor-widget elementor-widget-heading" data-id="dc544ee" data-element_type="widget" data-widget_type="heading.default">				
						<div class="elementor-widget-container folio-services">			
							<a href="https://bodytobodylondon.co.uk/locations/london/camden/"><h3 class="tith11s">Camden</h3></a>	
						</div>				
					</div>



				
				<div class="elementor-element elementor-element-b018c4d elementor-widget elementor-widget-google_maps" data-id="b018c4d" data-element_type="widget" data-widget_type="google_maps.default">				
					<div class="elementor-widget-container">
					<ul>
    <?php
        $taxonomy = 'locations'; // Taxonomy slug.
        $terms = get_terms([
					'taxonomy' => $taxonomy,
					'hide_empty' => false,
				]);

        $children = '';

        foreach ( $terms as $term ) {
            if( $term -> parent == 572 ) { // Parent ID 
                $children = $term->name; 
				 $slug = $term->slug;
				 $id = $term->term_id;
				 if($tid == $id){}else{
				 ?>

                <li><a href="/locations/camden/<?php echo $slug; ?>"><?php echo $children; ?></a></li>
	 <?php
					$termch = get_term_children($id,'locations');
					
					if(!empty($termch)){
						?>
						
						<?php 
					foreach ( $termch as $termchs ) { 
					$name = get_term($termchs,'locations');
					$name = $name->name;
					?>
			
					<li><a href="<?php echo get_term_link($termchs,'locations') ?>"><?php echo $name; ?></a></li>	
				<?php	}						
						?>
						
						<?php 
					}
             } }
        }
    ?>
</ul>
</div>					
	</div>
<div class="elementor-element elementor-element-dc544ee elementor-widget elementor-widget-heading" data-id="dc544ee" data-element_type="widget" data-widget_type="heading.default">				
						<div class="elementor-widget-container folio-services">			
							<a href="https://bodytobodylondon.co.uk/locations/london/london-central-business-district/"><h3 class="tith11s">London Central Business District</h3></a>		
						</div>				
					</div>
		<div class="elementor-element elementor-element-b018c4d elementor-widget elementor-widget-google_maps" data-id="b018c4d" data-element_type="widget" data-widget_type="google_maps.default">				
					<div class="elementor-widget-container">
					<ul>
    <?php
        $taxonomy = 'locations'; // Taxonomy slug.
        $terms = get_terms([
					'taxonomy' => $taxonomy,
					'hide_empty' => false,
				]);

        $children = '';

        foreach ( $terms as $term ) {
            if( $term -> parent == 642 ) { // Parent ID 
                $children = $term->name; 
				 $slug = $term->slug;
				 $id = $term->term_id;
				 if($tid == $id){}else{
				 ?>

                <li><a href="/locations/london/london-central-business-district/<?php echo $slug; ?>"><?php echo $children; ?></a></li>
	 <?php
					$termch = get_term_children($id,'locations');
					
					if(!empty($termch)){
						?>
						
						<?php 
					foreach ( $termch as $termchs ) { 
					$name = get_term($termchs,'locations');
					$name = $name->name;
					?>
			
					<li><a href="<?php echo get_term_link($termchs,'locations') ?>"><?php echo $name; ?></a></li>	
				<?php	}						
						?>
						
						<?php 
					}
             } }
        }
    ?>
</ul>
</div>					
	</div>

	</div>	



		
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
							</div>
		</section>
		
		
		
		
		
		
		

<section class="elementor-section elementor-inner-section elementor-element elementor-element-4c593ca elementor-section-boxed elementor-section-height-default elementor-section-height-default  elementor-section3" data-id="4c593ca" data-element_type="section">
						
						<div class="elementor-container elementor-column-gap-default">
						
							
					<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-588736e" data-id="588736e" data-element_type="column">
				
				<div class="elementor-widget-wrap elementor-element-populated">

								<div class="elementor-element elementor-element-dc544ee elementor-widget elementor-widget-heading" data-id="dc544ee" data-element_type="widget" data-widget_type="heading.default">				
						<div class="elementor-widget-container folio-services">			
							<a href="https://bodytobodylondon.co.uk/locations/london/city-of-london/"><h3 class="tith11s">City Of London </h3>	</a>	
						</div>				
					</div>		
				<div class="elementor-element elementor-element-b018c4d elementor-widget elementor-widget-google_maps" data-id="b018c4d" data-element_type="widget" data-widget_type="google_maps.default">				
					<div class="elementor-widget-container">
					<ul>
    <?php
        $taxonomy = 'locations'; // Taxonomy slug.
        $terms = get_terms([
					'taxonomy' => $taxonomy,
					'hide_empty' => false,
				]);

        $children = '';

        foreach ( $terms as $term ) {
            if( $term -> parent == 611) { // Parent ID 
                $children = $term->name; 
				 $slug = $term->slug;
				 $id = $term->term_id;
				 if($tid == $id){}else{
				 ?>

                <li><a href="/locations/city-of-london/<?php echo $slug; ?>"><?php echo $children; ?></a></li>
					 <?php
					$termch = get_term_children($id,'locations');
					
					if(!empty($termch)){
						?>
						
						<?php 
					foreach ( $termch as $termchs ) { 
					$name = get_term($termchs,'locations');
					$name = $name->name;
					?>
			
					<li><a href="<?php echo get_term_link($termchs,'locations') ?>"><?php echo $name; ?></a></li>	
				<?php	}						
						?>
						
						<?php 
					}
            } 
			}
        }
		
    ?>
</ul>
</div>					
	</div>	</div>	
					
		
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-588736e" data-id="588736e" data-element_type="column">
				<div class="elementor-widget-wrap elementor-element-populated">		
					<div class="elementor-element elementor-element-dc544ee elementor-widget elementor-widget-heading" data-id="dc544ee" data-element_type="widget" data-widget_type="heading.default">				
						<div class="elementor-widget-container folio-services">			
							<a href="https://bodytobodylondon.co.uk/locations/london/hammersmith-and-fulham/"><h3 class="tith11s"> Hammersmith & Fulham</h3></a>		
						</div>				
					</div>



				
				<div class="elementor-element elementor-element-b018c4d elementor-widget elementor-widget-google_maps" data-id="b018c4d" data-element_type="widget" data-widget_type="google_maps.default">				
					<div class="elementor-widget-container">
					<ul>
    <?php
        $taxonomy = 'locations'; // Taxonomy slug.
        $terms = get_terms([
					'taxonomy' => $taxonomy,
					'hide_empty' => false,
				]);

        $children = '';

        foreach ( $terms as $term ) {
            if( $term -> parent == 621 ) { // Parent ID 
                $children = $term->name; 
				 $slug = $term->slug;
				 $id = $term->term_id;
				 if($tid == $id){}else{
				 ?>

                <li><a href="/locations/hammersmith-fulham/<?php echo $slug; ?>"><?php echo $children; ?></a></li>
					 <?php
					$termch = get_term_children($id,'locations');
					
					if(!empty($termch)){
						?>
						
						<?php 
					foreach ( $termch as $termchs ) { 
					$name = get_term($termchs,'locations');
					$name = $name->name;
					?>
			
					<li><a href="<?php echo get_term_link($termchs,'locations') ?>"><?php echo $name; ?></a></li>	
				<?php	}						
						?>
						
						<?php 
					}
             } 
			}
        }
    ?>
</ul>
</div>					
	</div>	
	</div>					
		
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-588736e" data-id="588736e" data-element_type="column">
				<div class="elementor-widget-wrap elementor-element-populated">		
				


<div class="elementor-element elementor-element-b018c4d elementor-widget elementor-widget-google_maps" data-id="b018c4d" data-element_type="widget" data-widget_type="google_maps.default">				
					<div class="elementor-widget-container">
    <?php
         $term = get_queried_object();

			echo get_field('fifth_google_map',$term); ?>


</div>					
	</div>	

	</div>					
		
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
							</div>
		</section>
		
				  <?php }else{

					$term = get_queried_object();
					$city = $term->term_id;
						$name = $term->name;
						
							$slug = $term->slug;
						
                   $child_term = get_term( $city, 'locations',array( 'hide_empty' => false,) );
              $parent_term = get_term( $child_term->parent, 'locations',array( 'hide_empty' => false,) );
			  
			  $terms = get_terms( 'locations', "parent=$city" , array( 'hide_empty' => false,));
			 // print_r($terms);
				$count = count($terms);
				
					  ?>
					  
		<section class="elementor-section elementor-inner-section elementor-element elementor-element-4c593ca elementor-section-boxed elementor-section-height-default elementor-section-height-default  elementor-section3" data-id="4c593ca" data-element_type="section">
						
						<div class="elementor-container elementor-column-gap-default">
						
							
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-588736e" data-id="588736e" data-element_type="column">
				
				<div class="elementor-widget-wrap elementor-element-populated">

								<div class="elementor-element elementor-element-dc544ee elementor-widget elementor-widget-heading" data-id="dc544ee" data-element_type="widget" data-widget_type="heading.default">				
						<div class="elementor-widget-container folio-services">			
							<h4 class="tith11s"><?php echo $name; ?> <?php echo get_field('massage_in',$term); ?> </h4>		
						</div>				
					</div>		
				<div class="elementor-element elementor-element-b018c4d elementor-widget elementor-widget-google_maps" data-id="b018c4d" data-element_type="widget" data-widget_type="google_maps.default">				
					<div class="elementor-widget-container">
					<ul>
    <?php if ( $count > 0 ){
				 
				 foreach ( $terms as $termns ) {?>
				
<li><a href="<?php echo  get_term_link( $termns->term_id ); ?>"><?php echo $termns->name; ?></a></li>
				<?php }
				
				}

?>
</ul>
<h5 class="tith11se"><?php echo get_field('massage_near',$term); ?> <?php echo $name; ?></h5>
                  <ul style="color: #000;">
				<?php $lid = get_field('nearby_locations',$term, array( 'hide_empty' => false,));
				if(!empty($lid)){
				foreach($lid as $val){

				$terml = get_term( $val, 'locations' ,array( 'hide_empty' => false,) );

				$namel = $terml->name;	
				?>
				
				<li><a href="<?php echo  get_term_link( $val ); ?>" class="h5neara"><?php echo $namel; ?></a></li>
				<?php }
				}?> 
							</ul>
<?php
  if(!empty($parent_term)){
 $pcity = $parent_term->term_id;
 $pname = $parent_term->name;
 //echo "hello";
 
if($pcity !=""){

	?>
<h5 class="tith11se"><?php echo get_field('view_all_in',$term); ?></h5>
<ul style="color: #000;">
<li><a href="<?php echo  get_term_link( $pcity ); ?>" class="viewss"><?php echo $pname; ?></a></li></ul>
<?php } 
} 
?>
</div>					
	</div>	</div>	
					
		
		</div>
	
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-588736e" data-id="588736e" data-element_type="column">
				<div class="elementor-widget-wrap elementor-element-populated">		
				


<div class="elementor-element elementor-element-b018c4d elementor-widget elementor-widget-google_maps" data-id="b018c4d" data-element_type="widget" data-widget_type="google_maps.default">				
					<div class="elementor-widget-container">
    <?php
         $term = get_queried_object();

			echo get_field('fifth_google_map',$term); ?>


</div>					
	</div>	

	</div>					
		
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
							</div>
		</section>			  
					  
					  
					  
					  
				  <?php } ?>
				  
				  -->
				  
				  
				  
				  
				  
	<section style="background:#000 !important;" id="maapa-with-links" class="elementor-section section32 elementor-inner-section elementor-element elementor-element-4c593ca elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4c593ca" data-element_type="section">
						
						<div class="elementor-container elementor-column-gap-default">
						
							
					<div id="link-ap1" class="elementor-column elementor-col-21 elementor-inner-column elementor-element elementor-element-588736e" data-id="588736e" data-element_type="column">
				
				<div class="elementor-widget-wrap elementor-element-populated">

								<div class="elementor-element elementor-element-dc544ee elementor-widget elementor-widget-heading" data-id="dc544ee" data-element_type="widget" data-widget_type="heading.default">				
						<div class="elementor-widget-container folio-services">			
							<h3 class="tith11"> Kensington & Chelsea</h3>		
						</div>				
					</div>		
				<div class="elementor-element elementor-element-b018c4d elementor-widget elementor-widget-google_maps" data-id="b018c4d" data-element_type="widget" data-widget_type="google_maps.default">				
					<div class="elementor-widget-container">
					<ul>
    <?php
        $taxonomy = 'locations'; // Taxonomy slug.
        $terms = get_terms([
					'taxonomy' => $taxonomy,
					'hide_empty' => false,
				]);

        $children = '';

        foreach ( $terms as $term ) {
            if( $term -> parent == 198) { // Parent ID 
                $children = $term->name; 
				 $slug = $term->slug;
				 ?>

                <li><a href="<?php echo get_home_url(); ?>/locations/kensington-chelsea/<?php echo $slug; ?>"><?php echo $children; ?></a></li>

            <?php } 
        }
		
    ?>
</ul>
</div>					
	</div>
<div class="elementor-element elementor-element-dc544ee elementor-widget elementor-widget-heading" data-id="dc544ee" data-element_type="widget" data-widget_type="heading.default">				
						<div class="elementor-widget-container folio-services">			
							<h3 class="tith11"> Hammersmith & Fulham</h3>		
						</div>				
					</div>

				<div class="elementor-element elementor-element-b018c4d elementor-widget elementor-widget-google_maps" data-id="b018c4d" data-element_type="widget" data-widget_type="google_maps.default">				
					<div class="elementor-widget-container">
					<ul>
    <?php
        $taxonomy = 'locations'; // Taxonomy slug.
        $terms = get_terms([
					'taxonomy' => $taxonomy,
					'hide_empty' => false,
				]);

        $children = '';

        foreach ( $terms as $term ) {
            if( $term -> parent == 196 ) { // Parent ID 
                $children = $term->name; 
				 $slug = $term->slug;
				 ?>

                <li><a href="<?php echo get_home_url(); ?>/locations/hammersmith-fulham/<?php echo $slug; ?>"><?php echo $children; ?></a></li>

            <?php } 
        }
    ?>
</ul>
</div>					
	</div>
		</div>	
					
		
		</div>
				<div id="link-ap1" class="elementor-column elementor-col-21 elementor-inner-column elementor-element elementor-element-588736e" data-id="588736e" data-element_type="column">
				<div class="elementor-widget-wrap elementor-element-populated">		
					<div class="elementor-element elementor-element-dc544ee elementor-widget elementor-widget-heading" data-id="dc544ee" data-element_type="widget" data-widget_type="heading.default">				
						<div class="elementor-widget-container folio-services">			
							<h3 class="tith11"> City Of Westminster</h3>		
						</div>				
					</div>



				
				<div class="elementor-element elementor-element-b018c4d elementor-widget elementor-widget-google_maps" data-id="b018c4d" data-element_type="widget" data-widget_type="google_maps.default">				
					<div class="elementor-widget-container">
					<ul>
    <?php
        $taxonomy = 'locations'; // Taxonomy slug.
        $terms = get_terms([
					'taxonomy' => $taxonomy,
					'hide_empty' => false,
				]);

        $children = '';

        foreach ( $terms as $term ) {
            if( $term -> parent == 180 ) { // Parent ID 
                $children = $term->name; 
				 $slug = $term->slug;
				 ?>

                <li><a href="<?php echo get_home_url(); ?>/locations/city-of-westminster/<?php echo $slug; ?>"><?php echo $children; ?></a></li>

            <?php } 
        }
    ?>
</ul>
</div>					
	</div>	</div>					
		
		</div>
				<div id="link-ap1" class="elementor-column elementor-col-23 elementor-inner-column elementor-element elementor-element-588736e" data-id="588736e" data-element_type="column">
				<div class="elementor-widget-wrap elementor-element-populated">		
					<div class="elementor-element elementor-element-dc544ee elementor-widget elementor-widget-heading" data-id="dc544ee" data-element_type="widget" data-widget_type="heading.default">				
						<div class="elementor-widget-container folio-services">			
							<h3 class="tith11">Camden</h3>		
						</div>				
					</div>



				
				<div class="elementor-element elementor-element-b018c4d elementor-widget elementor-widget-google_maps" data-id="b018c4d" data-element_type="widget" data-widget_type="google_maps.default">				
					<div class="elementor-widget-container">
					<ul>
    <?php
        $taxonomy = 'locations'; // Taxonomy slug.
        $terms = get_terms([
					'taxonomy' => $taxonomy,
					'hide_empty' => false,
				]);

        $children = '';

        foreach ( $terms as $term ) {
            if( $term -> parent == 171 ) { // Parent ID 
                $children = $term->name; 
				 $slug = $term->slug;
				 ?>

                <li><a href="<?php echo get_home_url(); ?>/locations/camden/<?php echo $slug; ?>"><?php echo $children; ?></a></li>

            <?php } 
        }
    ?>
</ul>
</div>					
	</div>	
<div class="elementor-element elementor-element-dc544ee elementor-widget elementor-widget-heading" data-id="dc544ee" data-element_type="widget" data-widget_type="heading.default">				
						<div class="elementor-widget-container folio-services">			
							<h3 class="tith11">City Of London </h3>		
						</div>				
					</div>		
				<div class="elementor-element elementor-element-b018c4d elementor-widget elementor-widget-google_maps" data-id="b018c4d" data-element_type="widget" data-widget_type="google_maps.default">				
					<div class="elementor-widget-container">
					<ul>
    <?php
        $taxonomy = 'locations'; // Taxonomy slug.
        $terms = get_terms([
					'taxonomy' => $taxonomy,
					'hide_empty' => false,
				]);

        $children = '';

        foreach ( $terms as $term ) {
            if( $term -> parent == 175) { // Parent ID 
                $children = $term->name; 
				 $slug = $term->slug;
				 ?>

                <li><a href="<?php echo get_home_url(); ?>/locations/city-of-london/<?php echo $slug; ?>"><?php echo $children; ?></a></li>

            <?php } 
        }
		
    ?>
</ul>
</div>					
	</div>
	


</div>					
		
		</div>
		<div id="gogl-map1" class="elementor-column elementor-col-35 elementor-inner-column elementor-element elementor-element-588736e" data-id="588736e" data-element_type="column">
				<div class="elementor-widget-wrap elementor-element-populated">		
					<div class="elementor-element elementor-element-b018c4d elementor-widget elementor-widget-google_maps" data-id="b018c4d" data-element_type="widget" data-widget_type="google_maps.default">				
						<div class="elementor-widget-container">
					<?php
							 $term = get_queried_object();
							echo get_field('google_map',$term); ?>	
			</div>					
				</div>	</div>					
					
					</div>
		
		
		
				
		
		
		
		
		
		
		
							</div>
		</section>













							
		<?php
		$term = get_queried_object();
		 $slug = $term->slug;
			$i=0;	//echo $slug; 
 $args = array(
    'post_type' => 'review',
	'post_status'    => 'publish',
	'tax_query' => array(
	   array(
                'taxonomy' => 'locations',
                'field' => 'slug',
                'terms' => $slug,
            )
        )
  );

//Query the posts:

  $obituary_query = new WP_Query($args);
	if ($obituary_query->have_posts() ) {
	
?>

<section class="elementor-section elementor-top-section elementor-element elementor-element-2968bf56 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default height-defaultsss" data-id="2968bf56" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1f608bdc" data-id="1f608bdc" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-71e59ba3 elementor-widget elementor-widget-heading" data-id="71e59ba3" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h5 class="elementor-heading-title elementor-size-default">Client reviews</h5>		</div>
				</div>

				<section class="elementor-section elementor-inner-section elementor-element elementor-element-ec203a7 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ec203a7" data-element_type="section">
						<div class="elementor-container elementor-column-gap-no">
							<div class="elementor-row">
							
<?php

//print_r($obituary_query);
while($obituary_query->have_posts()) : $obituary_query->the_post();
      $ids = get_the_ID();
	  $date = get_the_date();
               
           $gjhj=$idss->post_title;
		  
			   if($i % 2 == 0){
				   
				   ?>
				   </div>
				   </div>
				   </section>
				   <section class="elementor-section elementor-inner-section elementor-element elementor-element-ec203a7 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ec203a7" data-element_type="section">
						<div class="elementor-container elementor-column-gap-no">
				<div class="elementor-row">   
				   
			<?php	  
			
			   }
		   ?>
													
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-78ab84e" data-id="78ab84e" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-f0dce0c elementor-view-default elementor-widget elementor-widget-icon" data-id="f0dce0c" data-element_type="widget" data-widget_type="icon.default">
				<div class="elementor-widget-container">
					<div class="elementor-icon-wrapper">
			<div class="elementor-icon elementor-animation-grow">
							<i class="fa fa-quote-left fa-quotes" aria-hidden="true"></i>
						</div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-2835c54 elementor-widget elementor-widget-testimonial" data-id="2835c54" data-element_type="widget" data-widget_type="testimonial.default">
				<div class="elementor-widget-container">
					<div class="elementor-testimonial-wrapper">
							<div class="elementor-testimonial-content test-content"><?php echo the_content(); ?></div>
			
						<div class="elementor-testimonial-meta testimonial-metass">
				<div class="elementor-testimonial-meta-inner">
					
										<div class="elementor-testimonial-details">
														<div class="elementor-testimonial-name testimonial"><?php echo the_title(); ?></div>
																						<div class="elementor-testimonial-job elementor-testi"><?php  echo $date; ?></div>
													</div>
									</div>
			</div>
					</div>
				</div>
				</div>
						</div>
					</div>
		</div>
<?php 
$i++;
		 endwhile;
		// print_r($idss); 
		
		 ?>
								</div>
					</div>
		</section>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
<?php
}
else{

}
?>
	
									</div>
			</div>
					</div>
		
	</div><!-- .entry-content .clear -->





<?php get_footer(); ?>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
<script>
jQuery('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
jQuery('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: true,
  centerMode: true,
  focusOnSelect: true
});
</script>
