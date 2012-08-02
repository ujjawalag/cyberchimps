<?php
/**
 * FIXME: Edit Title Content
 *
 * FIXME: Edit Description Content
 *
 * Please do not edit this file. This file is part of the Response core framework and all modifications
 * should be made in a child theme.
 * FIXME: POINT USERS TO DOWNLOAD OUR STARTER CHILD THEME AND DOCUMENTATION
 *
 * @category Response
 * @package  Framework
 * @since    1.0
 * @author   CyberChimps
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     http://www.cyberchimps.com/
 */
?>

<div id="secondary" <?php response_filter_sidebar_left_class(); ?>>
	
	<?php do_action( 'response_before_sidebar' ); ?>
	
	<div id="sidebar">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar( 'sidebar-left' ) ) : ?>

		<div class="widget-container">    
			<h3 class="widget-title">Welcome to Response</h3>
    		<ul>
				<li>Thank you for using Response!</li>
				<li>&nbsp;</li>
				<li>We designed Response to be as user friendly as possible, but if you do run into trouble we provide a <a href="http://cyberchimps.com/forum">support forum</a>, and <a href="http://www.cyberchimps.com/response/docs/">precise documentation</a>.</li>
				<li>&nbsp;</li>
				<li>(To remove this Widget login to your admin account, go to Appearance, then Widgets and drag new widgets into Sidebar Widgets)</li>
			</ul>
    	</div>
		
		<div class="widget-container">    
			<h3 class="widget-title"><?php _e('Pages', 'response' ); ?></h3>
			<ul>
    			<?php wp_list_pages('title_li=' ); ?>
    		</ul>
    	</div>
    
		<div class="widget-container">    
    		<h3 class="widget-title"><?php _e( 'Archives', 'response' ); ?></h3>
    		<ul>
    			<?php wp_get_archives('type=monthly'); ?>
    		</ul>
    	</div>
        
		<div class="widget-container">
			<h3 class="widget-title"><?php _e('Categories', 'response' ); ?></h3>
			<ul>
				<?php wp_list_categories('show_count=1&title_li='); ?>
			</ul>
        </div>
        
        <div class="widget-container">
        	<h3 class="widget-title"><?php _e('WordPress', 'response' ); ?></h3>
        	<ul>
        		<?php wp_register(); ?>
        		<li><?php wp_loginout(); ?></li>
        		<li><a href="<?php echo esc_url( __('http://wordpress.org/', 'response' )); ?>" target="_blank" title="<?php esc_attr_e('Powered by WordPress, state-of-the-art semantic personal publishing platform.', 'response'); ?>"> <?php _e('WordPress', 'response' ); ?></a></li>
        		<?php wp_meta(); ?>
    		</ul>
		</div>
		
		<div class="widget-container">
			<h3 class="widget-title"><?php _e('Subscribe', 'response' ); ?></h3>
			<ul>
				<li><a href="<?php bloginfo('rss2_url'); ?>"><?php _e('Entries (RSS)', 'response' ); ?></a></li>
				<li><a href="<?php bloginfo('comments_rss2_url'); ?>"><?php _e('Comments (RSS)', 'response' ); ?></a></li>
			</ul>
		</div>
		
	<?php endif; ?>
	</div><!-- #sidebar -->
	
	<?php do_action( 'response_after_sidebar' ); ?>
	
</div><!-- #secondary .widget-area .span3 -->