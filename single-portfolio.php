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

	<link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick.css" />
	<link rel="stylesheet" type="text/css" href="https://kenwheeler.github.io/slick/slick/slick-theme.css" />
	
	<section class="elementor-section fsec-pad elementor-top-section elementor-element elementor-element-4bbdc0a5 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4bbdc0a5 " data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
	<div class="elementor-container elementor-column-gap-default">
	<div class="elementor-row">
	<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7c672089" data-id="7c672089" data-element_type="column">
	
	<div class="elementor-column-wrap elementor-element-populated">
	<div class="elementor-widget-wrap">
	
	
	<div class="elementor-element elementor-element-27f25df0 elementor-widget elementor-widget-heading" data-id="27f25df0" data-element_type="widget" data-widget_type="heading.default">
	<div class="elementor-widget-container">
		<h1 class="elementor-heading-title elementor-size-default ttitleh1" style="color: #82000b">
		<?php echo get_field('portfolio_title',$id); ?>
		</h1>		
	</div>
	</div>
	
	
	<div class="elementor-element elementor-element-7eab8d5b elementor-widget elementor-widget-heading" data-id="7eab8d5b" data-element_type="widget" data-widget_type="heading.default">
	<div class="elementor-widget-container" style="padding-bottom: 12px;">
	<h2 class="elementor-heading-title elementor-size-default"><?php echo get_field('portfolio_heading',$id); ?></h2>		</div>
	</div>
	
	<div class="elementor-element elementor-element-6480d6c5 elementor-widget elementor-widget-text-editor" data-id="6480d6c5" data-element_type="widget" data-widget_type="text-editor.default">
	<div class="elementor-widget-container nkb-text">
	
	<?php echo get_field('portfolio_top_description',$id); ?>
	
	</div>
	</div>
	
	</div>
		
	</div>					
	</div>
	</div>
	</div>
	</section>
	
	
<?php 

		global $post;
		//echo "<pre>";
		//print_r($post);
		$id = $post->ID;			
		//echo 'Id of the post is: '.$id;
		 
				
					
	?>
	

	
<div id="primary" <?php astra_primary_class(); ?>>
<section class="elementor-section elementor-top-section elementor-element elementor-element-7e2d8f1 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7e2d8f1" data-element_type="section">						
<div class="elementor-container elementor-column-gap-default">
	<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f44ce45" data-id="f44ce45" data-element_type="column">
		<div class="elementor-widget-wrap elementor-element-populated">								
			<div class="elementor-element elementor-element-9cbda42 elementor-widget elementor-widget-heading" data-id="9cbda42" data-element_type="widget" data-widget_type="heading.default">				
				<div class="elementor-widget-container">	
				<div class="gap bo float-left elementor-column elementor-md-100 elementor-sm-100 elementor-col-100">
					<div class="top-message-girl">
						<h3>PORTFOLIO</h3>
							<div class="slider slider-for">
				<?php $gallery_data = get_post_meta( $id, 'gallery_data', true );
				
				$vid = get_field('video',$id); 
				 $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
		$video = $vid['url'];
		if($video != ''){ ?> 
				<div>
				
		<video width="100%" height="340" muted playsinline autoplay loop  class="vid video121">
			<source src="<?php echo $video; ?>#t=0.001" preload="none" type="video/mp4">
		</video>
		</div>	
		<?php }
		foreach($gallery_data['image_url']  as $img)
									{
										
									
						?>			
	                   
						<div>
						<a href="<?php echo $img; ?>" class="fancybox-inline"> 
						<img src="<?php echo $img; ?>"></a>
						</div>
							
					
	<?php } ?>
	
	
        </div>
					</div>
				</div>
				
			
				
		



			
				</div>
			</div>
				<div class="gap float-left elementor-column htht">
	<div class="nkb-text">
					<?php
						global $post;
					
					
 echo wpautop( $post->post_content );

					 ?>
				   </div>	
				</div>
				
						<div class="location-rates">
				<div id="rates" class="gap float-left elementor-column elementor-md-30 elementor-sm-100 elementor-col-30">
					<div class="elementor-widget-wrap elementor-element-populated">								
					<div class="elementor-element elementor-element-68b9f20 elementor-widget elementor-widget-heading" data-id="68b9f20" data-element_type="widget" data-widget_type="heading.default">				
						<div class="elementor-widget-container folio-services">			
							<h3 class="mu elementor-heading-title">RATES</h3>						
						</div>				
					</div>				
						<div class="inner-rates-content">		
					<div class="elementor-widget-icon-box elementor-position-left mb-5" data-id="e6b5c49" data-element_type="widget" data-widget_type="icon-box.default">				
						<div class="elementor-widget-container">					
							<div class="elementor-icon-box-wrapper">						
								<div class="elementor-icon-box-icon">				
									<span class="elementor-icon elementor-animation-">				
										<i aria-hidden="true" class="fas fa-circle"></i>				
									</span>			
								</div>						
								<div class="elementor-icon-box-content">				
								<h3 class="elementor-icon-box-title">					
									<span>	</span>				
								</h3>	
								<?php 
								
								$hourcall = get_field('1_hour_incall',$id); 
								if($hourcall == ''){
								
								}else{
								?>								
								<p class="elementor-icon-box-description">						
								1 Hour —&gt; Incall £<?php echo get_field('1_hour_incall',$id); ?>			
								</p>
								<?php } 
								
								$hourcallo = get_field('1_hour_outcall',$id); 
								if($hourcallo == ''){
								
								}else{
								?>
								<p class="elementor-icon-box-description">						
								1 Hour —&gt; Mobile outcall £<?php echo get_field('1_hour_outcall',$id); ?>				
								</p>
								<?php } ?>		
								</div>		
							</div>				
						</div>				
					</div>				
					<div class="elementor-widget-icon-box elementor-position-left mb-5" data-id="fd9dc5b" data-element_type="widget" data-widget_type="icon-box.default">				
						<div class="elementor-widget-container">					
							<div class="elementor-icon-box-wrapper">						
								<div class="elementor-icon-box-icon">				
									<span class="elementor-icon elementor-animation-">				
										<i aria-hidden="true" class="fas fa-circle"></i>				
									</span>			
								</div>						
							<div class="elementor-icon-box-content">				
								<h3 class="elementor-icon-box-title">					
									<span>	</span>				
								</h3>
								<?php 
								
								$phourcall = get_field('+1_hour_incall',$id); 
								if($phourcall == ''){
								
								}else{
								?>	
								<p class="elementor-icon-box-description">						
									+1 Hour —&gt; Incall £<?php echo get_field('+1_hour_incall',$id); ?></p>
								<?php } ?>	
								<?php 
								
								$phourcallp = get_field('+1_hour_outcall',$id); 
								if($phourcallp == ''){
								
								}else{
								?>
								<p class="elementor-icon-box-description">						
									+1 Hour —&gt; Mobile outcall £<?php echo get_field('+1_hour_outcall',$id); ?>			
								</p>
								<?php } ?>
							</div>		
						</div>				
					</div>				
				</div>				
				<div class="elementor-widget-icon-box elementor-position-left mb-5">	  <div class="elementor-widget-container">					
						<div class="elementor-icon-box-wrapper">						
							<div class="elementor-icon-box-icon">				
								<span class="elementor-icon elementor-animation-">				
									<i aria-hidden="true" class="fas fa-circle"></i>				
								</span>			
							</div>						
							<div class="elementor-icon-box-content">				
								<h3 class="elementor-icon-box-title">					
									<span>				</span>				
								</h3>	
										<?php 
								
								$phourcallt = get_field('2_hour_incall',$id); 
								if($phourcallt == ''){
								
								}else{
								?>
									<p class="elementor-icon-box-description">						
									2 Hour —&gt; Incall £<?php echo get_field('2_hour_incall',$id); ?> 		
									</p>
								<?php } 
								
								$ohourcallt = get_field('2_hour_outcall',$id); 
								if($ohourcallt == ''){
								
								}else{
								?>
								<p class="elementor-icon-box-description">						
								2 Hour —&gt; Mobile outcall £<?php echo get_field('2_hour_outcall',$id); ?>				
								</p>
								<?php } ?>
							</div>		
						</div>				
					</div>				
				</div>				
		
			</div>
			</div>
			</div>
			<?php 
			
			$incallocation = get_field('map',$id); 
			if($incallocation == ''){ }else{
			?>
			
				<div id="location-maps" class="gap float-left elementor-column elementor-md-30 elementor-sm-100 elementor-col-30">
					<div class="elementor-widget-wrap elementor-element-populated">
			<div class="elementor-element elementor-element-68b9f20 elementor-widget elementor-widget-heading" data-id="68b9f20" data-element_type="widget" data-widget_type="heading.default">				
						<div class="elementor-widget-container folio-services">			
							<h3 class="mu elementor-heading-title">INCALL LOCATION</h3>		
						</div>				
					</div>	

             	<div class="elementor-widget-wrap elementor-element-populated">								
				<div class="elementor-element elementor-element-b018c4d elementor-widget elementor-widget-google_maps" data-id="b018c4d" data-element_type="widget" data-widget_type="google_maps.default">				
					<div class="elementor-widget-container">			
						<style>/*! elementor - v3.6.5 - 27-04-2022 */.elementor-widget-google_maps .elementor-widget-container{overflow:hidden}.elementor-widget-google_maps iframe{height:300px}</style>		
						<div class="elementor-custom-embed">			
							
						<?php echo the_field('map',$id); ?>
							
						</div>				
					</div>				
				</div>					
			</div>
				</div>
			</div>
			<?php } ?>
		</div>
	
		<div class="massage-and-stats-row">	
			<div class="massage-and-stats">	
			<div id="stats-text" class="elementor-widget-wrap elementor-element-populated">								
					<div class="elementor-element elementor-element-dc544ee elementor-widget elementor-widget-heading" data-id="dc544ee" data-element_type="widget" data-widget_type="heading.default">				
						<div class="elementor-widget-container folio-services">			
							<h3 class="mu elementor-heading-title">STATS</h3>		
						</div>				
					</div>
			<div class="stats-full-details">
				<div class="stats-column-1">				
					<div class="elementor-widget-icon-box elementor-position-left mb-5" data-id="834b3b8" data-element_type="widget" data-widget_type="icon-box.default">				
						<div class="elementor-widget-container">			
						<link rel="stylesheet" href="https://tantric-london.com/wp-content/plugins/elementor/assets/css/widget-icon-box.min.css">		
								<div class="elementor-icon-box-wrapper">						
									<div class="elementor-icon-box-icon">				
										<span class="elementor-icon elementor-animation-">				
											<i aria-hidden="true" class="fas fa-circle"></i>				
										</span>			
									</div>						
									<div class="elementor-icon-box-content">				
										<h3 class="elementor-icon-box-title">					
											<span>	</span>				
										</h3>									
										<p class="elementor-icon-box-description">						
											Height:   <?php the_field('heights',$id);?>					
										</p>							
									</div>		
								</div>				
						</div>				
					</div>				
					<div class="elementor-widget-icon-box elementor-position-left mb-5" data-id="7e573c4" data-element_type="widget" data-widget_type="icon-box.default">				
						<div class="elementor-widget-container">					
							<div class="elementor-icon-box-wrapper">						
								<div class="elementor-icon-box-icon">				
									<span class="elementor-icon elementor-animation-">				
										<i aria-hidden="true" class="fas fa-circle"></i>				
									</span>			
								</div>						
								<div class="elementor-icon-box-content">				
									<h3 class="elementor-icon-box-title">					
									<span></span>				
									</h3>									
									<p class="elementor-icon-box-description">						
										Age:  <?php the_field('age',$id);?>					
									</p>							
								</div>		
							</div>				
						</div>				
					</div>				
					<div class="elementor-widget-icon-box elementor-position-left mb-5" data-id="f1f1961" data-element_type="widget" data-widget_type="icon-box.default">				
						<div class="elementor-widget-container">					
							<div class="elementor-icon-box-wrapper">						
								<div class="elementor-icon-box-icon">				
									<span class="elementor-icon elementor-animation-">				
										<i aria-hidden="true" class="fas fa-circle"></i>				
									</span>			
								</div>						
								<div class="elementor-icon-box-content">				
								<h3 class="elementor-icon-box-title">					
									<span>	</span>				
								</h3>									
								<p class="elementor-icon-box-description">						
									Orentation:  <?php the_field('orentation',$id);?>					
								</p>							
								</div>		
							</div>				
						</div>				
					</div>				
					<div class="elementor-widget-icon-box elementor-position-left mb-5" data-id="5e64fba" data-element_type="widget" data-widget_type="icon-box.default">				
						<div class="elementor-widget-container">					
							<div class="elementor-icon-box-wrapper">						
								<div class="elementor-icon-box-icon">				
									<span class="elementor-icon elementor-animation-">				
										<i aria-hidden="true" class="fas fa-circle"></i>				
									</span>			
								</div>						
								<div class="elementor-icon-box-content">				
									<h3 class="elementor-icon-box-title">					
										<span>			</span>				
									</h3>									
									<p class="elementor-icon-box-description">
										Bust:  <?php the_field('bust',$id);?>					
									</p>							
								</div>		
							</div>				
						</div>				
					</div>				
					<div class="elementor-widget-icon-box elementor-position-left mb-5" data-id="664fc59" data-element_type="widget" data-widget_type="icon-box.default">				
						<div class="elementor-widget-container">					
							<div class="elementor-icon-box-wrapper">						
								<div class="elementor-icon-box-icon">					
									<span class="elementor-icon elementor-animation-">				
										<i aria-hidden="true" class="fas fa-circle"></i>				
									</span>			
								</div>						
								<div class="elementor-icon-box-content">				
									<h3 class="elementor-icon-box-title">					
										<span>											</span>				
									</h3>									
									<p class="elementor-icon-box-description">						
										Language: <?php the_field('language',$id);?>					
									</p>							
								</div>		
							</div>				
						</div>				
					</div>	
               			
               <div class="elementor-widget-icon-box elementor-position-left mb-5" data-id="664fc59" data-element_type="widget" data-widget_type="icon-box.default">				
						<div class="elementor-widget-container">					
							<div class="elementor-icon-box-wrapper">						
								<div class="elementor-icon-box-icon">					
									<span class="elementor-icon elementor-animation-">				
										<i aria-hidden="true" class="fas fa-circle"></i>				
									</span>			
								</div>						
								<div class="elementor-icon-box-content">				
									<h3 class="elementor-icon-box-title">					
										<span>											</span>				
									</h3>									
									<p class="elementor-icon-box-description">						
										Nationality: <?php the_field('nationality',$id);?>					
									</p>							
								</div>		
							</div>				
						</div>				
					</div>
				</div>
				<div class="stats-column-2">	
				<div class="elementor-widget-icon-box elementor-position-left mb-5" data-id="664fc59" data-element_type="widget" data-widget_type="icon-box.default">				
						<div class="elementor-widget-container">					
							<div class="elementor-icon-box-wrapper">						
								<div class="elementor-icon-box-icon">					
									<span class="elementor-icon elementor-animation-">				
										<i aria-hidden="true" class="fas fa-circle"></i>				
									</span>			
								</div>						
								<div class="elementor-icon-box-content">				
									<h3 class="elementor-icon-box-title">					
										<span>											</span>				
									</h3>									
									<p class="elementor-icon-box-description">	
								<?php 
										$link = get_field('incall_location_link',$id);
										$link_url = $link['url'];
										$title = $link['title'];		
									?>									
										Incall location: <a href="<? echo $link_url; ?>"  ><?php the_field('incall_location',$id);?></a>						
									</p>							
								</div>		
							</div>				
						</div>				
					</div>
	
               <div class="elementor-widget-icon-box elementor-position-left mb-5" data-id="664fc59" data-element_type="widget" data-widget_type="icon-box.default">				
						<div class="elementor-widget-container">					
							<div class="elementor-icon-box-wrapper">						
								<div class="elementor-icon-box-icon">					
									<span class="elementor-icon elementor-animation-">				
										<i aria-hidden="true" class="fas fa-circle"></i>				
									</span>			
								</div>						
								<div class="elementor-icon-box-content">				
									<h3 class="elementor-icon-box-title">					
										<span>											</span>				
									</h3>									
									<p class="elementor-icon-box-description">						
										Tube Station: <a href="<?php the_field('tube_station_link',$id);?>"> <?php the_field('nearest_tube_station',$id);?></a>					
									</p>							
								</div>		
							</div>				
						</div>				
					</div>
       	
               <div class="elementor-widget-icon-box elementor-position-left mb-5" data-id="664fc59" data-element_type="widget" data-widget_type="icon-box.default">				
						<div class="elementor-widget-container">					
							<div class="elementor-icon-box-wrapper">						
								<div class="elementor-icon-box-icon">					
									<span class="elementor-icon elementor-animation-">				
										<i aria-hidden="true" class="fas fa-circle"></i>				
									</span>			
								</div>						
								<div class="elementor-icon-box-content">				
									<h3 class="elementor-icon-box-title">					
										<span>											</span>				
									</h3>									
									<p class="elementor-icon-box-description">						
										Does mobile outcalls: <?php the_field('does_mobile_outcalls',$id);?>					
									</p>							
								</div>		
							</div>				
						</div>				
					</div>
				</div>
			</div>
		</div>
                     
                 
					
				<div class="content-massage">
				<div id="massage-text" class="elementor-widget-wrap elementor-element-populated">								
				<div class="elementor-element elementor-element-36950e8 elementor-widget elementor-widget-heading" data-id="36950e8" data-element_type="widget" data-widget_type="heading.default">				
					<div class="elementor-widget-container folio-services">			
						<h3 class="mu elementor-heading-title elementor-size-default">MASSAGES</h3>		
					</div>				
				</div>				
				<div class="elementor-widget-icon-box elementor-position-left mb-5" data-id="3701acb" data-element_type="widget" data-widget_type="icon-box.default">				
									
				</div>				
						
		
									<?php global $post;
	
									$id = $post->ID; 
									
									?>
							<div class="elementor-widget-icon-box elementor-position-left mb-5" data-id="de6757b" data-element_type="widget" data-widget_type="icon-box.default">								
													
							<div class="elementor-icon-box-content">				
								<h3 class="elementor-icon-box-title">					
									<span>											</span>				
								</h3>									
								<ul style="text-align: left;">						
									<?php echo get_field('portfolio_description',$id);	?>			
								</ul>							
							</div>		
										
				</div>				
																				
			</div>
			</div>		
		</div>
	</div>
		</div>
	</div>
</div>



<section style="padding: 0 0 30px 0;" class="elementor-section elementor-top-section top-section11 elementor-element elementor-element-7e2d8f1 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7e2d8f1" data-element_type="section">
			<div class="elementor-container elementor-column-gap-default">
			
	<div class="elementor-column elementor-col-50 clocation elementor-top-column elementor-element elementor-element-f44ce45" data-id="f44ce45" data-element_type="column">
		<div class="elementor-widget-wrap elementor-element-populated">	
                      

								<?php 
								$ids=get_the_ID();
								//echo $ids;
								//print_r($id);
						 $term = get_the_terms( $id, 'locations',array('hide_empty' => false, ) );
						//echo "<pre>";
						//print_r($term);die;
						$city = $term[0]->term_id;
						$name = $term[0]->name;
						$slug = $term[0]->slug;
						
                   $child_term = get_term( $city, 'locations',array( 'hide_empty' => false,) );
              $parent_term = get_term( $child_term->parent, 'locations',array( 'hide_empty' => false,) );
			  
			  $terms = get_terms( 'locations', "parent=$city" , array( 'hide_empty' => false,));
			  
				$count = count($terms);
				
			  
			         
						?>
						<div class="elementor-widget-container">
                        <h3 class="Locationh1">Location</h3><br>						
						<h5 class="h5near"><?php echo $name; ?> Tantric Massage</h5>
						
						
<?php if ( $count > 0 ){
				 
				 foreach ( $terms as $termns ) {?>
				
<p class="h5nearul"><a href="<?php echo  get_term_link( $termns->term_id ); ?>"><?php echo $termns->name; ?></a></p>
				<?php }
				
				}

?>
<h5 class="h5near">Tantric Massage Near <?php echo $name; ?></h5>

<?php

		$id = $post->ID;
 
 $lid = get_field('masseuse_location',$id, array( 'hide_empty' => true,));
				// echo "hello";
 
if(!empty($lid)){
foreach($lid as $val){

$terml = get_term( $val, 'locations' ,array( 'hide_empty' => false,) );

$namel = $terml->name;	
?>
<p class="h5nearul"><a href="<?php echo  get_term_link( $val ); ?>"><?php echo $namel; ?></a></p>
<?php }
}
  if(!empty($parent_term)){
	 
 $pcity = $parent_term->term_id;
 $pname = $parent_term->name;
if($pcity == ''){}else{
	?>
<h5 class="h5near">View All</h5>
<p class="h5nearul"><a href="<?php echo  get_term_link( $pcity ); ?>"><?php echo $pname; ?></a></p>
<?php } 
  }?>
				
						</div>
                </div>
                 </div>			
							
					
	     <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-02d46bf map13" data-id="02d46bf" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">		
			
									<?php 
									global $post;

		$id = $post->ID;
									
									
									echo the_field('map',$id); ?>
     

		</div>
	</div>
	</div>	
	</section>






					  <?php  
					  $nid = $id;
				  $term = get_the_terms( $id, 'locations' );
	            $city = $term[0]->term_id;
				
				 $args = array(
    'post_type' => 'portfolio',
	'post_status'    => 'publish',
	'post__not_in' => array($nid),
	'tax_query' => array(
	   array(
                'taxonomy' => 'locations',
                'field' => 'term_id',
                'terms' => $city,
            )
        )
  );


//Query the posts:
$obituary_query = new WP_Query($args);



if ($obituary_query->have_posts() ) : ?>


				<div class="tantric-container">
					<h3 class="nearbygirl-text">TANTRIC GIRLS NEARBY</h3>
					<section  class="elementor-section elementor-top-section elementor-element elementor-element-7e2d8f1 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7e2d8f1" data-element_type="section">
					<div class="elementor-container elementor-column-gap-default">
	<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f44ce45" data-id="f44ce45" data-element_type="column">
		<div class="elementor-widget-wrap elementor-element-populated">	
					<div class="nearbygirl-videos">
			<?php		
while($obituary_query->have_posts()) : $obituary_query->the_post();
        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
		
           $id = get_the_ID();
		   
		$vid = get_field('video',$id); 
		$video = $vid['url'];
		
		$image_id = get_post_thumbnail_id($id);
	
		$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
		
        $alt = get_the_title($image_id);
       if($featured_img_url != ''){
		   
	  
?>
					
					
					
						<div class="">
						<a href="<?php echo  get_the_permalink(); ?>	">
								<img  src="<?php echo $featured_img_url; ?>" class="" >
							
							<div class="nearbygirl-content">
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

endwhile; ?>


<?php
else:
?>
</div>
						</div>
						</div>
					</div>
				</div>
<?php
endif;


?>	
						
					
           
				</div>				
			</div>							
		</div>		
	</div>							
</div>		
</section>



			

			
</div><!-- #primary -->


<?php get_footer(); ?>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
<script>


jQuery('.nearbygirl-videos').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  adaptiveHeight: true,
  arrows: true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
      	 adaptiveHeight: false,
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});


</script>
<script>
jQuery('.slider-for').slick({
  dots: false,
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 1,
 autoplay: false,
 arrows:true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
      	horizontal: true,
     	horizontalSwiping: true,
      	swipeToSlide: true,
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }

  ]
});
	
</script>