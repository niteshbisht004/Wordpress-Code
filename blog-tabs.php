    <div class="custom_tabs">
	<ul class="tabs">
        <?php
            $categories = get_categories();
            echo '<li><a href="#all">All</a></li>'; 
            foreach($categories as $category){
                echo '<li><a href="#'.$category->slug.'">'.$category->name.'</a></li>';
            }
        ?>
    </ul>

    <?php
        echo '<ul id="all" class="tab-content blog_posts">';
        $args = array(
            'post_type' => 'post',
        );
        $posts = new WP_Query($args);
        if($posts->have_posts()){
            while($posts->have_posts()){
                $posts->the_post();
				$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
					echo '<li>';
                    echo '<div class="blog_image">';
					echo '<img src="' . $featured_img_url . '" alt="' . get_the_title() . '">';
					echo '<h3> <a href="'.get_permalink().'">'.get_the_title().'</a></h3>';
                    echo '</div>';
					echo '</li>';
            }
            wp_reset_postdata();
        }else{
            echo '<p>No posts found.</p>';
        }
        echo '</ul>';

        foreach($categories as $category){
            echo '<ul id="'.$category->slug.'" class="tab-content blog_posts">';
            $args = array(
                'post_type' => 'post',
                'category_name' => $category->slug,
            );
            $posts = new WP_Query($args);
            if($posts->have_posts()){
                while($posts->have_posts()){
                    $posts->the_post();
					$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
					echo '<li>';
                    echo '<div class="blog_image">';
					echo '<img src="' . $featured_img_url . '" alt="' . get_the_title() . '">';
					echo '<h3> <a href="'.get_permalink().'">'.get_the_title().'</a></h3>';
                    echo '</div>';
					echo '</li>';
                }
                wp_reset_postdata();
            }else{
                echo '<p>No posts found in '.$category->name.' category.</p>';
            }
            echo '</ul>';
        }
    ?>
</div>
