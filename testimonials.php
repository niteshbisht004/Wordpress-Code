<div class="testimonial_row">
<?php 
    $args = array(
        'post_type' => 'testimonials',
        'post_status' => 'publish',
        'posts_per_page' => -1,
    );
    
    $testimonials_query = new WP_Query( $args );
    

    if ( $testimonials_query->have_posts() ) {
        while ( $testimonials_query->have_posts() ) {
            $testimonials_query->the_post();
            //echo '<pre>';
            //print_r($testimonials_query);
            $testimonial_title = get_the_title();
            $testimonial_content = get_the_content(); 
            $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); 
            //echo $testimonial_content.'content of the testimonials';
?>
    <div class="maincol">
        <div class="col">
            <div class="image">
                <img src="<?php echo $thumbnail_url; ?>">  
            </div>
            <div class="content">
                <p><?php echo $testimonial_content; ?></p>
                <h6>-- <?php echo $testimonial_title; ?></h6>
            </div>  
        </div>
    </div> 
    <?php 
            }
        }
    ?>
</div>