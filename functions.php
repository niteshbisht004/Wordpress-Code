<?php
/**
 * astra-child-theme Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package astra-child-theme
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_THEME_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_THEME_VERSION, 'all' );

}
add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );
function create_post_type() 
{  
	register_post_type( 'portfolio',
    array('labels' =>
		array('name' => __( 'Portfolio' ),
			'singular_name' => __( 'Portfolios' )),	 
			'supports'=> array( 'title', 'editor', 'excerpt',  'thumbnail','comments' ),
			'public' => true,	  
			'has_archive' => true,)
		);  
}
add_action( 'init', 'create_post_type' );

function create_posttypes() 
{  
	register_post_type( 'review',
    array('labels' =>
		array('name' => __( 'review' ),
			'singular_name' => __( 'reviews' )),	 
			'supports'=> array( 'title', 'editor', 'excerpt',  'thumbnail','comments' ),
			'public' => true,	  
			'has_archive' => true,));  
}
add_action( 'init', 'create_posttypes' );

function enable_comments_custom_post_type() {
 add_post_type_support( 'portfolio', 'comments' );
}
add_action( 'init', 'enable_comments_custom_post_type', 11 );

function create_portfolio_Categorie_tax() 
{	
$labels = array('name'=> _x( 'Locations', 'taxonomy general name', 'portfolio' ),
		'singular_name' => _x( 'Location', 'taxonomy singular name', 'portfolio' ),
		'search_items'=> __( 'Search Locations', 'portfolio' ),
		'all_items'         => __( 'All Locations', 'portfolio' ),
		'parent_item'       => __( 'Parent Location', 'portfolio' ),
		'parent_item_colon' => __( 'Parent Location:', 'portfolio' ),
		'edit_item'         => __( 'Edit Location', 'portfolio' ),
		'update_item'       => __( 'Update Location', 'portfolio' ),
		'add_new_item'      => __( 'Add New Location', 'portfolio' ),
		'new_item_name'     => __( 'New Location Name', 'portfolio' ),
		'menu_name'         => __( 'Location', 'portfolio' ),);	
		
		
		$args = array('labels' => $labels,
		'description' => __( '', 'portfolio' ),
		'hierarchical' => true,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_in_rest' => false,
		'show_tagcloud' => false,
		'show_in_quick_edit' => true,
		'show_admin_column' => false,
       'rewrite' => array( 'slug' => 'locations', 'hierarchical' => true,
	   'with_front' => false ),);
		register_taxonomy( 'locations', array('portfolio','review' ), $args );
}
add_action( 'init', 'create_portfolio_Categorie_tax' );






function create_portfolio_Massages() 
{	
$labels = array('name'=> _x( 'Massages', 'taxonomy general name', 'portfolio' ),
		'singular_name' => _x( 'Massages', 'taxonomy singular name', 'portfolio' ),
		'search_items'=> __( 'Search Massages', 'portfolio' ),
		'all_items'         => __( 'All Massages', 'portfolio' ),
		'parent_item'       => __( 'Parent Massages', 'portfolio' ),
		'parent_item_colon' => __( 'Parent Massages:', 'portfolio' ),
		'edit_item'         => __( 'Edit Massages', 'portfolio' ),
		'update_item'       => __( 'Update Massages', 'portfolio' ),
		'add_new_item'      => __( 'Add New Massages', 'portfolio' ),
		'new_item_name'     => __( 'New Massages Name', 'portfolio' ),
		'menu_name'         => __( 'Massages', 'portfolio' ),);	
		$args = array('labels' => $labels,
		'description' => __( '', 'portfolio' ),
		'hierarchical' => true,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_in_rest' => false,
		'show_tagcloud' => false,
		'show_in_quick_edit' => true,
		'show_admin_column' => false,);
		register_taxonomy( 'massages', array('portfolio','review' ), $args );
}
add_action( 'init', 'create_portfolio_Massages' );





add_shortcode( 'portfolio-grid', 'footag_funcr' );
function footag_funcr() {
	  ob_start();

$args = array(
    'post_type' => 'portfolio',
	'post_status'    => 'publish',
	'posts_per_page' => -1 
  );


//Query the posts:
$obituary_query = new WP_Query($args);

if ($obituary_query->have_posts() ) : while($obituary_query->have_posts()) : $obituary_query->the_post();
        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
		
           $id = get_the_ID();
		   
		$vid = get_field('video',$id); 
		$video = $vid['url'];
		
		$image_id = get_post_thumbnail_id($id);
	
		$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
		
        $alt = get_the_title($image_id);
		
          $away = get_field('away',$id); 
		  if($featured_img_url != ""){
			  
?>

<div class="elementor-column elementor-col-25 pgrid elementor-inner-column elementor-element " data-id="a4d081e" data-element_type="column">

<a href="<?php the_permalink(); ?>">

	<div class="elementor-widget-container video">
	<?php if($away[0] == 'Yes'){ ?> <span class="away">AWAY</span><?php  } ?>
			<img  height="400"  src="<?php echo $featured_img_url; ?>" class="attachment-large size-large" >
				
	</div>
			
<div class="elementor-widget-container" id="videos-content-box">
	<style>/*! elementor - v3.6.5 - 27-04-2022 */
			.elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}
	</style>
	<h2 class="titlehome elementor-heading-title elementor-size-default">
		<?php $name = get_the_title();
		$terms = get_the_terms( $id, 'massages' );
	$massage = $terms[1]->name;
    $term = get_the_terms( $id, 'locations' );

	$city = $term[0]->name;

	
	  echo ucfirst($name).' / '. ucfirst($city);
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
?>


<?php     return ob_get_clean();

}



add_action( 'admin_init', 'add_post_gallery_so_14445904' );
add_action( 'admin_head-post.php', 'print_scripts_so_14445904' );
add_action( 'admin_head-post-new.php', 'print_scripts_so_14445904' );
add_action( 'save_post', 'update_post_gallery_so_14445904', 10, 2 );
 
/**
 * Add custom Meta Box to Posts post type
*/
function add_post_gallery_so_14445904()
{
	add_meta_box(
	'post_gallery',
	'Gallery Images',
	'post_gallery_options_so_14445904',
	'portfolio',// here you can set post type name
	'normal',
	'core'
			);
}
 
/**
 * Print the Meta Box content
 */
function post_gallery_options_so_14445904()
{
	global $post;
	$gallery_data = get_post_meta( $post->ID, 'gallery_data', true );
 
	// Use nonce for verification
	wp_nonce_field( plugin_basename( __FILE__ ), 'noncename_so_14445904' );
	?>
 
<div id="dynamic_form">
 
    <div id="field_wrap">
    <?php 
    if ( isset( $gallery_data['image_url'] ) ) 
    {
        for( $i = 0; $i < count( $gallery_data['image_url'] ); $i++ ) 
        {
        ?>
 
        <div class="field_row">
 
          <div class="field_left">
            <div class="form_field">
              <label>Image URL</label>
              <input type="text"
                     class="meta_image_url"
                     name="gallery[image_url][]"
                     value="<?php esc_html_e( $gallery_data['image_url'][$i] ); ?>"
              />
            </div>
          </div>
 
          <div class="field_right image_wrap">
            <img src="<?php esc_html_e( $gallery_data['image_url'][$i] ); ?>" height="48" width="48" />
          </div>
 
          <div class="field_right">
            <input class="button" type="button" value="Choose File" onclick="add_image(this)" /><br />
            <input class="button" type="button" value="Remove" onclick="remove_field(this)" />
          </div>
 
          <div class="clear" /></div> 
        </div>
        <?php
        } // endif
    } // endforeach
    ?>
    </div>
 
    <div style="display:none" id="master-row">
    <div class="field_row">
        <div class="field_left">
            <div class="form_field">
                <label>Image URL</label>
                <input class="meta_image_url" value="" type="text" name="gallery[image_url][]" />
            </div>
        </div>
        <div class="field_right image_wrap">
        </div> 
        <div class="field_right"> 
            <input type="button" class="button" value="Choose File" onclick="add_image(this)" />
            <br />
            <input class="button" type="button" value="Remove" onclick="remove_field(this)" /> 
        </div>
        <div class="clear"></div>
    </div>
    </div>
 
    <div id="add_field_row">
      <input class="button" type="button" value="Add Field" onclick="add_field_row();" />
    </div>
 
</div>
 
  <?php
}
 
/**
 * Print styles and scripts
 */
function print_scripts_so_14445904()
{
    // Check for correct post_type
    global $post;
    if( 'portfolio' != $post->post_type )// here you can set post type name
        return;
    ?>  
    <style type="text/css">
      .field_left {
        float:left;
      }
 
      .field_right {
        float:left;
        margin-left:10px;
      }
 
      .clear {
        clear:both;
      }
 
      #dynamic_form {
        width:580px;
      }
 
      #dynamic_form input[type=text] {
        width:300px;
      }
 
      #dynamic_form .field_row {
        border:1px solid #999;
        margin-bottom:10px;
        padding:10px;
      }
 
      #dynamic_form label {
        padding:0 6px;
      }
    </style>
 
    <script type="text/javascript">
        function add_image(obj) {
            var parent=jQuery(obj).parent().parent('div.field_row');
            var inputField = jQuery(parent).find("input.meta_image_url");
 
            tb_show('', 'media-upload.php?TB_iframe=true');
 
            window.send_to_editor = function(html) {
                var url = jQuery(html).find('img').attr('src');
                inputField.val(url);
                jQuery(parent)
                .find("div.image_wrap")
                .html('<img src="'+url+'" height="48" width="48" />');
 
                // inputField.closest('p').prev('.awdMetaImage').html('<img height=120 width=120 src="'+url+'"/><p>URL: '+ url + '</p>'); 
 
                tb_remove();
            };
 
            return false;  
        }
 
        function remove_field(obj) {
            var parent=jQuery(obj).parent().parent();
            //console.log(parent)
            parent.remove();
        }
 
        function add_field_row() {
            var row = jQuery('#master-row').html();
            jQuery(row).appendTo('#field_wrap');
        }
    </script>
    <?php
}
 
/**
 * Save post action, process fields
 */
function update_post_gallery_so_14445904( $post_id, $post_object ) 
{
    // Doing revision, exit earlier **can be removed**
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )  
        return;
 
    // Doing revision, exit earlier
    if ( 'revision' == $post_object->post_type )
        return;
 
    // Verify authenticity
    if ( !wp_verify_nonce( $_POST['noncename_so_14445904'], plugin_basename( __FILE__ ) ) )
        return;
 
    // Correct post type
    if ( 'portfolio' != $_POST['post_type'] ) // here you can set post type name
        return;
 
    if ( $_POST['gallery'] ) 
    {
        // Build array for saving post meta
        $gallery_data = array();
        for ($i = 0; $i < count( $_POST['gallery']['image_url'] ); $i++ ) 
        {
            if ( '' != $_POST['gallery']['image_url'][ $i ] ) 
            {
                $gallery_data['image_url'][]  = $_POST['gallery']['image_url'][ $i ];
            }
        }
 
        if ( $gallery_data ) 
            update_post_meta( $post_id, 'gallery_data', $gallery_data );
        else 
            delete_post_meta( $post_id, 'gallery_data' );
    } 
    // Nothing received, all fields are empty, delete option
    else 
    {
        delete_post_meta( $post_id, 'gallery_data' );
    }
}


add_action( 'search_form', 'portfolio_search_form' );
function portfolio_search_form()
{
	ob_start();
	include 'portfolio-form.php';
	 return ob_get_clean();
}

add_shortcode( 'portfolio-search', 'portfolio_search_form' );







function js_enqueue_scripts() {
    wp_enqueue_script ("my-ajax-handle", get_stylesheet_directory_uri() . "/ajax.js", array('jquery')); 
    //the_ajax_script will use to print admin-ajaxurl in custom ajax.js
    wp_localize_script('my-ajax-handle', 'the_ajax_script', array('ajaxurl' =>admin_url('admin-ajax.php')));
} 
add_action("wp_enqueue_scripts", "js_enqueue_scripts");


function more_post_ajax() {
	ob_start();

 	if ( isset( $_POST["massage"] )  || isset( $_POST["city"] ) ) {
    $ppp = $_POST["massage"];
    $page = $_POST['city'];
	$name = $_POST['name'];
	
  
    
	if($ppp == '' && $page == '') {
		
	$args = array(
    'post_type' => 'portfolio',
	'post_status' => 'publish',
	"s" => $name
	 );	
		
	}elseif($ppp != '' && $page == '' && $name == ''){
	
		
  $args = array(
    'post_type' => 'portfolio',
	'post_status' => 'publish',
	'tax_query' => array(
	         array(
                'taxonomy' => 'massages',
                'field' => 'name',
                'terms' => $ppp,
            )
        )
  );
	}elseif($ppp == '' && $page != '' && $name == ''){
		
  $args = array(
    'post_type' => 'portfolio',
	'post_status' => 'publish',
	'tax_query' => array(
	     array(
                'taxonomy' => 'locations',
                'field' => 'name',
                'terms' => $page,
            )
        )
  );
		
		
		
	}elseif($ppp == '' && $page == '' && $name == ''){
		
		
		  $args = array(
    'post_type' => 'portfolio',
	'post_status' => 'publish',
	'posts_per_page' => -1 
		);
		
	}else{
		if($ppp == ''){
	  
	  $ppp = 'All';
  }
  if($page == ''){
	  
	  $page = 'All';
  }	
		
  $args = array(
    'post_type' => 'portfolio',
	'post_status' => 'publish',
	's' => $name, 
	'tax_query' => array(
	'relation' => 'OR',
            array(
                'taxonomy' => 'massages',
                'field' => 'name',
                'terms' => $ppp,
            ),
          array(
                'taxonomy' => 'locations',
                'field' => 'name',
                'terms' => $page,
            )
        )
  );
		
	}

//Query the posts:
$obituary_query = new WP_Query($args);

if ($obituary_query->have_posts() ) : while($obituary_query->have_posts()) : $obituary_query->the_post();
        $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
		
           $id = get_the_ID();
		   
		$vid = get_field('video',$id); 
		$video = $vid['url'];
		
		$image_id = get_post_thumbnail_id($id);
	
		$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
		
        $alt = get_the_title($image_id);

?>

<div class="elementor-column elementor-col-25 pgrid elementor-inner-column elementor-element " data-id="a4d081e" data-element_type="column">
<a href="<?php the_permalink(); ?>">

	<div class="elementor-widget-container">
	
			<img  height="400"  src="<?php echo $featured_img_url; ?>" class="attachment-large size-large" >
					
	</div>
			
<div class="elementor-widget-container">
	<style>/*! elementor - v3.6.5 - 27-04-2022 */
			.elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:19px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:29px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}
	</style>
<h2 class="titlehome elementor-heading-title elementor-size-default">
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

endwhile; else:
?>
<h3 style="text-align:center;">No result Found</h3>
<?php
endif;
?>

<?php     return ob_get_clean();


}
  
}
add_action('wp_ajax_nopriv_more_post_ajax', 'more_post_ajax');
add_action('wp_ajax_more_post_ajax', 'more_post_ajax');


add_action('admin_footer', 'my_admin_hide_cf');
function my_admin_hide_cf() {
    $u=$_GET['taxonomy'];
   
    if ($u == 'locations'){
    echo '
   <style>
   .acf-field-639b01124e0e8,.acf-field-639b012b4e0e9,.acf-field-639b02e74e0f0,.acf-field-639b030e4e0f1,.acf-field-639b059b4e0f8,.acf-field-639b03434e0f2,.acf-field-631091fc4cbd3,.acf-field-639b04f34e0f7{display:none}
   </style>';
 }
 
    if ($u == 'massages'){
    echo '
   <style>
   .acf-field-639b03b74e0f3, .acf-field-62a329fe82e66 ,.acf-field-639b04264e0f4, .acf-field-639b043d4e0f5,.acf-field-639b04504e0f6,.acf-field-62a1b3f9301ec{display:none}
   </style>';
 }
}

function wpse_199918_wp_editor_settings( $settings, $editor_id ) {
    if ( $editor_id === 'content' && get_current_screen()->post_type === 'portfolio' ) {
        $settings['tinymce']   = false;
        $settings['quicktags'] = true;
        $settings['media_buttons'] = true;
    }

    return $settings;
}

add_filter( 'wp_editor_settings', 'wpse_199918_wp_editor_settings', 10, 2 );
