<?php
//Template Post Type: practices 
//Template Name: Whistleblower
get_header();
?>
<div class="home-hero home-hero-height-sync whistleblower" style="min-height:400px;">
	<div class="home-hero-inner home-hero-height-sync">
        <div class="home-hero-image-container home-hero-height-sync">
<!--          <video playsinline="" autoplay="" muted="" plays-inline="" loop>
                <source src="https://ifightforyourrights.com/wp-content/themes/paperstreet/images/banner-video.mp4" type="video/mp4">
            </video> -->
			<img src="<?php the_field('featured_hero_background');?>">

        </div>
		<picture class="home-hero-image-container home-hero-height-sync">
			<img src="<?php the_field('featured_hero_desktop');?>" alt="" width="1024" height="767">
		</picture>
		<div class="home-hero-tagline">
			<h1 class="visually-hidden">Whistleblower Law Firm</h1>
			<div class="row-wide columns no-float">
				<div class="home-hero-tagline-inner">
                    <div class="top"><span class="top-inner"><?php echo separate_string_characters('Protecting'); ?></span></div>
					<div class="mid">
                        <span class="mid-top"><?php echo separate_string_characters('Whistleblowers'); ?></span>
                        <!-- <span class="mid-bottom"><?php echo separate_string_characters('blowers'); ?></span> -->
                    </div>
					<div class="new-whst-blr-pg">
						<div class="top"><span class="top-inner"><?php echo separate_string_characters('Where Whistleblowers'); ?></span></div>
						<div class="mid">
                        	<span class="mid-top"><?php echo separate_string_characters('Who Know Secretly Go'); ?></span>
                    	</div>
					</div>
					<div class="bottom opacity0">
                        <!-- <span>Across the USA - by Nationally</span>
                        <span>Acclaimed Whistleblower Law Firm</span> -->
                        <span><?php the_field('featured_post_tagline');?></span>
                        <span><?php the_field('featured_post_tagline2');?></span>
                    </div>
                    <?php
                    $featured_post = get_field('featured_post');
                    
                    if( $featured_post ) { ?>
                        <div class="home-hero-message opacity0">
                            <p><?php echo get_field('featured_post_title') ? get_field('featured_post_title') : esc_html( $featured_post->post_title ); ?> - <a href="<?php echo get_the_permalink($featured_post->ID); ?>">Read More</a></p>
                        </div>
                    <?php
                    }

                    $featured_practice = get_field('featured_practice');
                    if( $featured_practice ) { ?>
                        <div class="home-hero-message right-side opacity0">
                            <p><?php echo get_field('featured_practice_title') ? get_field('featured_practice_title') : esc_html( $featured_practice->post_title ); ?> - <a href="<?php echo get_the_permalink($featured_practice->ID); ?>">Read More</a></p>
                        </div>
                    <?php
                    }
                    ?>
				</div>
			</div>
		</div>
	</div>
</div>
<main id="main" class="no-padding">
    <section class="cta">
        <div class="row columns no-float">
            <h2><?php the_field('win_title');?></h2>
            <p class="to-lnk-fnt"><?php the_field('free_consultation_title');?></p>
			<p class="lnk-fnt"><a href="https://ifightforyourrights.com/whistleblower/jason-t-brown-statement-on-the-fbi/"><?php the_field('free_consultation_button');?></a></p>
            <div class="home-hero-cta">
                <button class="home-hero-cta-button">
                    <span>Free Consultation</span>
                    <!-- <i class="fa fa-plus"></i> -->
                </button>
                <?php
                    $formHeading = "We Will<br>Fight <span class='italic'>for you!</span>";
                    include(locate_template("includes/include-contact.php"));
                ?>
            </div>
            <div class="practices">
                <?php
                $practices = get_field('featured_practices');
                foreach ($practices as $practice) {
                    ?>
                    <a href="<?php echo get_the_permalink($practice->ID); ?>" class="single-practice lazy-bg"  data-bg-src="<?php echo get_field('thumbnail_image',$practice->ID)['url']; ?>">
                        <div class="single-practice-inner">
                            <span><?php echo get_field('thumbnail_title',$practice->ID) ? get_field('thumbnail_title',$practice->ID) : get_the_title($practice->ID); ?></span>
                            <?php
                            if(get_field('excerpt',$practice->ID))
                            {
                                ?>
                                <p><?php echo get_field('excerpt',$practice->ID); ?></p>
                                <?php
                            }
                            ?>
                        </div>
                    </a>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>
    <section class="intro lazy-bg" data-bg-src="<?php echo get_template_directory_uri(); ?>/images/intro-whistle.jpg">
        <div class="row">
            <div class="titles columns no-float">
                <span class="cn-hlp-txt"><?php the_field('how_can_help_title');?></span>
                <h3 class="sub-title"><?php the_field('how_can_help_subtitle');?> </h3>
            </div>
            <div class="intro-inner">
                <div class="intro-content columns no-float">
                    <?php echo get_field('how_we_can_help_content'); ?>
                </div>
                <div class="intro-slider-container">
                    <h3>Victories</h3>
                    <div id="intro-slider">
                        <?php
                        if(have_rows('results',1371))
                        {
                            while (have_rows('results',1371))
                            {
                                the_row();
                                
                                if(get_sub_field('related_practice') != 1523 && !get_sub_field('display_only_on_results'))
                                {
                                    ?>
                                    <div class="single-result">
                                        <span class="number"><?php echo get_sub_field('number'); ?></span>
                                        <p><?php echo get_sub_field('title'); ?></p>
                                    </div>
                                    <?php
                                }
                            }
                        } ?>
                    </div>
                    <div class="module-practices-g-buttons slick-arrow-container">
                        <button id="intro-slider-g-prev"><span class="visually-hidden">Previous</span><i class="far fa-long-arrow-left"></i></button>
                        <button id="intro-slider-g-next"><span class="visually-hidden">Next</span><i class="far fa-long-arrow-right"></i></button>
                    </div>
                    <a href="/results/" class="button outline"><?php the_field('view_our_achievements_title');?></a>
                    <p class="italic"><?php the_field('view_our_achievements_content');?></p>
                </div>
            </div>
        </div>
    </section>
	
	<section class="faqs">
        <div class="row columns no-float">
            <?php if(1==2) { ?>
            <div class="gloves-container">
                <img class="lazy-img" data-img-src="<?php echo get_template_directory_uri(); ?>/images/gloves.png" alt="" width="605" height="844">
            </div>
            <?php } ?>
            <div class="faqs-inner">
                <div class="faqs-content">
                    <div class="faqs-title">
                        <h2><?php the_field('frequently_asked_title');?></h2>
                        <h3><?php the_field('frequently_asked_subtitle');?></h3>
                    </div>
                    <div class="faqs-accordions">
                        <?php
                        if(have_rows('faqs'))
                        {
                            while (have_rows('faqs'))
                            {
                                the_row(); ?>
                                <div class="accordion-item">
                                    <h2 class="accordion-item-title interact" tabindex="0"><span><?php echo get_sub_field('question'); ?></span></h2>
                                    <div class="accordion-item-content">
                                        <?php echo get_sub_field('answer'); ?>
                                    </div>
                                </div>
                                <?php
                            }
                        } ?>
                    </div>
                    <div class="border-button">
                        <a href="/whistleblower-law/healthcare-whistleblower-cases/" class="button">View All FAQ’s</a>
                    </div>
                </div>
                <div class="faqs-links">
                    <ul>
                    <?php
                    $args = array(
                        'post_type' => 'practices',
                        'post_status' => 'publish',
                        'posts_per_page' => '-1',
                        'orderby' => 'menu_order',
                        'order' => 'ASC',
                        'post_parent' => get_the_id(), //Top-level pages only
                    );
                    $query = new WP_Query($args);
                    
                    while($query->have_posts())
                    {
                        $query->the_post();
                        ?>
                        <li><a href="<?php echo get_the_permalink(); ?>" class="no-underline"><?php echo get_the_title(); ?></a></li>
                        <?php
                    }
                    wp_reset_postdata();
                    ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
	
	<section class="advice lazy-bg" data-bg-src="<?php echo get_template_directory_uri(); ?>/images/advice.jpg">
        <div class="row columns no-float">
            <div class="title">
                <h2>Whistleblower Tips</h2>
            </div>
            <div class="advice-accordions">
                <?php
                if(have_rows('advice_accordions'))
                {
                    while (have_rows('advice_accordions'))
                    {
                        the_row(); ?>
                        <div class="accordion-item">
                            <h2 class="accordion-item-title interact" tabindex="0"><?php echo get_sub_field('title'); ?></h2>
                            <div class="accordion-item-content">
                                <?php echo get_sub_field('content'); ?>
                            </div>
                        </div>
                        <?php
                    }
                } ?>
            </div>
            <p class="disclaimer"><?php echo get_field('disclaimer'); ?></p>
        </div>
    </section>
	
    <section class="video lazy-bg" data-bg-src="<?php echo get_template_directory_uri(); ?>/images/video.jpg">
        <div class="row columns no-float">
            <div class="video-inner">
                <?php
                    $youtube = get_field('featured_video');
                    $youtubeID = get_field('video_id',$youtube); 
                    $shortcode = "[youtube id='" . $youtubeID . "']";
                    echo do_shortcode($shortcode);
                ?>
                <div class="video-content">
                    <span class="sub-title">Blow the Whistle <span class="italic">on</span></span>
                    <h2>Healthcare Fraud</h2>
                    <?php
                    if(get_field('featured_video_title'))
                    {
                        ?>
                        <p><span class="blue">Watch: </span><?php echo get_field('featured_video_title'); ?></p>
                        <?php
                    }
                    else
                    {
                        ?>
                        <p><span class="blue">Watch: </span><?php echo get_the_title($youtube); ?></p>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="about-inner">
            <div class="row columns no-float">
                <span class="sub-title"><?php the_field('the_right_way_title');?></span>
                <h2><?php the_field('the_right_way_subtitle');?></h2>
                <?php echo get_field('the_right_way_content'); ?>
                <div class="border-button">
                    <a href="<?php echo get_the_permalink(get_field('contact_id','option')); ?>" class="button"><?php the_field('right_thing_button');?></a>
                </div>
            </div>
        </div>
        <div class="about-bg show-for-large">
            <img src="<?php the_field('law_firm_team_desktop');?>" width="1920" height="1280">
        </div>
        <div class="about-bg-mobile hide-for-large">
            <img class="lazy-img" src="<?php the_field('law_firm_team_mobile');?>">
        </div>
    </section>
    <section class="cta2 lazy-bg" data-bg-src="<?php echo get_template_directory_uri(); ?>/images/cta.jpg">
		<div class="row columns no-float">
			<div class="cta-content">
				<h2><?php the_field('whistleblower_law_firm_title');?></h2>
			</div>
			<div class="button-container">
				<a href="<?php echo get_the_permalink(get_field('contact_id','option')); ?>" class="button"><?php the_field('whistleblower_law_firm_button');?></a>
				<a href="tel:+1-<?php echo get_field('main_phone_number','option'); ?>" class="button outline"><i class="fas fa-phone fa-rotate-90 small-margin-right"></i><?php echo get_field('main_phone_number','option'); ?></a>
			</div>
		</div>
	</section>
    
    <section class="whistleblower-videos">
        <div class="row columns no-float">
            <h2><?php the_field('whistleblower_videos_title');?></h2>
            <h3><?php the_field('whistleblower_videos_subtitle');?></h3>
            <div class="videos-container">
                <?php

                if(wp_is_mobile())
                {
                    $args = array(
                        'post_type' => 'videos',
                        'post_status' => 'publish',
                        'posts_per_page' => '8',
                        'orderby' => 'date',
                        'order' => 'ASC',
                        'meta_query' => array(
                            array(
                                'key' => 'related_practice',
                                'compare' => 'LIKE',
                                'value' => get_the_ID()
                            )
                        )
                    );
                    $query = new WP_Query($args);
                }
                else
                {
                    $args = array(
                        'post_type' => 'videos',
                        'post_status' => 'publish',
                        'posts_per_page' => '9',
                        'orderby' => 'date',
                        'order' => 'ASC',
                        'meta_query' => array(
                            array(
                                'key' => 'related_practice',
                                'compare' => 'LIKE',
                                'value' => get_the_ID()
                            )
                        )
                    );
                    $query = new WP_Query($args);
                }

                $videoCount = 1;
                while($query->have_posts())
                {
                    $query->the_post();

                    if($videoCount == 5 && wp_is_mobile())
                    {
                        ?>
                        <div class="load-videos">
                        <?php
                    }
                    else if($videoCount == 7 && !wp_is_mobile())
                    {
                        ?>
                        <div class="load-videos">
                        <?php
                    }
                    ?>
                    <div class="single-video">
                        <?php
                        $youtube = get_field('video_id');
                        $shortcode = "[youtube id='" . $youtube . "']";

                        echo do_shortcode($shortcode);
                        ?>
                        <p><?php echo get_the_title(); ?></p>
                    </div>
                    <?php
                    $videoCount++;
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
        <div class="button-container">
            <?php
            if($videoCount > 7)
            {
                ?>
                <div class="border-button">
                    <button id="load-more">Load More videos</button>
                </div>
                <?php
            }
            ?>
            <div class="border-button">
                <a href="/videos/" class="button">Watch more videos</a>
            </div>
        </div>
    </section>
    
    <section class="awards lazy-bg" data-bg-src="<?php echo get_template_directory_uri(); ?>/images/intro-whistle.jpg">
        <div class="row-narrow columns no-float">
            <div class="titles">
                <h2>Our Achievements</h2>
            </div>
            <div class="awards-slider-container slider-container">
                <div id="awards-slider">
                    <?php
                    if(have_rows('awards',1366))
                    {
                        while (have_rows('awards',1366))
                        {
                            the_row(); ?>
                            <div class="single-award">
                                <div class="single-award-inner">
                                    <h3><?php echo get_sub_field('title'); ?></h3>
                                    <?php echo get_sub_field('description'); ?>
                                </div>
                            </div>
                            <?php
                        }
                    } ?>
                </div>
                <div class="module-practices-g-buttons slick-arrow-container">
                    <button id="awards-slider-g-prev"><span class="visually-hidden">Previous</span><i class="far fa-long-arrow-left"></i></button>
                    <button id="awards-slider-g-next"><span class="visually-hidden">Next</span><i class="far fa-long-arrow-right"></i></button>
                </div>
            </div>
            <a href="/awardsandaccolades/" class="button outline viewall">View All Awards & Accolades</a>
            <p class="disclaimer"><?php the_field('awardsandaccolades_title');?></p>
        </div>
    </section>
</main>
<!-- 		<script src="//www.apex.live/scripts/invitation.ashx?company=ifight" async></script>
<script>
window.ChatInterceptor = function () {
try {
var trackingCookie = ApexChat.Cookies.get('livechat_invitation_traffic_sources');
if (trackingCookie) {
var index = trackingCookie.indexOf('&term=');
if (index > -1) {
return trackingCookie.substr(0, index).replace(new RegExp('&', 'g'), ', ');
}
}
} catch (e) {
console.log(e);
}
};
</script>	 -->
		<script>(function (w,d,s,v,odl){(w[v]=w[v]||{})['odl']=odl;;
var f=d.getElementsByTagName(s)[0],j=d.createElement(s);j.async=true;
j.src='https://intaker.azureedge.net/widget/chat.min.js';
f.parentNode.insertBefore(j,f);
})(window, document, 'script','Intaker', 'brownllc');
</script>
<?php
get_footer();
?>