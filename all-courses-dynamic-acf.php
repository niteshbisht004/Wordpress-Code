<div class="Main_course">
    <?php
    $args = array(
        'post_type' => 'course',
        'posts_per_page' => -1, // Retrieve all posts
        'orderby' => 'post_date', // Order by post date
        'order' => 'DESC', // Display the latest post first
    );
    
    $query = new WP_Query($args);
    
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            // Access post data here
            $post_id = get_the_ID();
            $post_title = get_the_title();
            $post_content = get_the_content();
            //$featured_image = get_the_post_thumbnail($post_id, 'thumbnail');
            $featured_image_url = get_the_post_thumbnail_url($post_id, 'medium');
            $time_du = get_field('time_duration',$post_id);
            $day_du = get_field('days',$post_id);
            $more_info = get_field('more_info',$post_id);
            //echo $time_du;
    ?>

    <div class="cour_ses">
      <h3 class="head_course"><?php echo $post_title; ?></h3>
     <img src="<?php echo $featured_image_url; ?>"> 
     <p><?php echo $post_content; ?></p>
    <div class="day_hour">
    <div class="hour_course">
	<img src="https://work.paradisetechsoft.com/wha-halal-org/wp-content/uploads/2023/05/png-lock.webp">
	<h4><?php echo $time_du; ?></h4>
    </div>
	 <div class="days_course">
	 <img src="https://work.paradisetechsoft.com/wha-halal-org/wp-content/uploads/2023/05/png.webp">
	 <h4><?php echo $day_du; ?></h4>
    </div>
    </div>
	<div class="course_buttons">
	<a href="<?php echo $more_info; ?>" class="more_course">MORE INFO</a>
	<a href="#" class="book_course">Book Now</a>
	</div>
    </div>
<?php
    }
}

?>
</div>