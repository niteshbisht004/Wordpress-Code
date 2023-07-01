<?php
$current_term = get_queried_object(); 
$taxonomy = $current_term->taxonomy;
$term_id = $current_term->term_id;

$args = array(
    'post_type'      => 'project', 
    'posts_per_page' => 3,
    'tax_query'      => array(
        array(
            'taxonomy' => $taxonomy,
            'field'    => 'term_id',
            'terms'    => $term_id,
        ),
    ),
);

$query = new WP_Query($args);
?>
<div class="class-1">
<div class="all_arch">
<?php
if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();
        // Store the post details in variables
        $post_title = get_the_title();
        $post_date = get_the_date();
        $post_author = get_the_author();
        $post_excerpt = get_the_excerpt();
        ?>
        <div class="cat-details">
            <div class="for-image">
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('thumbnail');
                }
                ?>
            </div>
            <h2><?php echo $post_title; ?></h2>
            <p>Published on: <?php echo $post_date; ?></p>
            <p>By: <?php echo $post_author; ?></p>
            <p><?php echo $post_excerpt; ?></p>
        </div>
        <?php
    }
   // wp_reset_postdata();
} else {
    // No posts found for the current taxonomy
    echo 'No posts found.';
}
?>
</div>
</div>
