<?php
function add_testimonial_metabox() {
    add_meta_box(
        'testimonial_metabox',
        'Testimonial Information',
        'testimonial_metabox_callback',
        'testimonials',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'add_testimonial_metabox' );

function testimonial_metabox_callback( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'testimonial_metabox_nonce' );
    $testimonial_author = get_post_meta( $post->ID, '_testimonial_author', true );
    $testimonial_company = get_post_meta( $post->ID, '_testimonial_company', true );
    ?>
    <p>
        <label for="testimonial_author"><?php _e( 'Author Name' ); ?></label>
        <input type="text" name="testimonial_author" id="testimonial_author" value="<?php echo esc_attr( $testimonial_author ); ?>" />
    </p>
    <p>
        <label for="testimonial_company"><?php _e( 'Company Name' ); ?></label>
        <input type="text" name="testimonial_company" id="testimonial_company" value="<?php echo esc_attr( $testimonial_company ); ?>" />
    </p>
    <?php
}

function save_testimonial_metabox( $post_id ) {
    if ( ! isset( $_POST['testimonial_metabox_nonce'] ) ||
        ! wp_verify_nonce( $_POST['testimonial_metabox_nonce'], basename( __FILE__ ) ) ) {
        return;
    }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }
    if ( isset( $_POST['testimonial_author'] ) ) {
        update_post_meta( $post_id, '_testimonial_author', sanitize_text_field( $_POST['testimonial_author'] ) );
    }
    if ( isset( $_POST['testimonial_company'] ) ) {
        update_post_meta( $post_id, '_testimonial_company', sanitize_text_field( $_POST['testimonial_company'] ) );
    }
}
add_action( 'save_post', 'save_testimonial_metabox' );