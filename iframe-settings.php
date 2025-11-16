<?php
/**
 * iframe Plugin Settings Page
 * 
 * Handles all admin settings functionality for the iframe plugin
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Avoid direct calls to this file
}

/**
 * Get plugin settings with defaults
 * 
 * @return array All plugin settings with default values
 */
function iframe_plugin_get_settings() {
	$defaults = array(
		'loading' => 'none' // Default to none (no loading attribute)
	);
	
	$options = get_option('iframe_plugin_options', array());
	
	// Merge with defaults to ensure all keys exist
	return wp_parse_args($options, $defaults);
}

// Register settings
function iframe_plugin_register_settings() {
	register_setting('iframe_plugin_settings', 'iframe_plugin_options', array(
		'type' => 'array',
		'default' => array(
			'loading' => 'none'
		),
		'sanitize_callback' => 'iframe_plugin_sanitize_options'
	));
}
add_action('admin_init', 'iframe_plugin_register_settings');

// Sanitize all plugin options
function iframe_plugin_sanitize_options($input) {
	$sanitized = array();
	
	// Sanitize loading attribute
	if (isset($input['loading'])) {
		$allowed_loading = array('none', 'lazy', 'eager');
		$sanitized['loading'] = in_array($input['loading'], $allowed_loading, true) ? $input['loading'] : 'none';
	}
	
	// Add sanitization for future options here
	
	return $sanitized;
}

// Add settings page to admin menu
function iframe_plugin_add_settings_page() {
	add_options_page(
		'iframe Settings',           // Page title
		'iframe',                    // Menu title
		'manage_options',            // Capability
		'iframe-settings',           // Menu slug
		'iframe_plugin_settings_page' // Callback function
	);
}
add_action('admin_menu', 'iframe_plugin_add_settings_page');

// Render settings page
function iframe_plugin_settings_page() {
	if (!current_user_can('manage_options')) {
		return;
	}
	
	// Get current settings
	$options = iframe_plugin_get_settings();
	?>
	<div class="wrap">
		<h1><?php echo esc_html(get_admin_page_title()); ?></h1>
		
		<div style="display: flex; gap: 20px;">
			<div style="flex: 1;">
				<form action="options.php" method="post">
					<?php
					settings_fields('iframe_plugin_settings');
					?>
					<table class="form-table" role="presentation">
						<tr>
							<th scope="row">
								<label for="iframe_loading"><?php _e('Default Loading Behavior', 'iframe'); ?></label>
							</th>
							<td>
								<select name="iframe_plugin_options[loading]" id="iframe_loading">
									<option value="none" <?php selected($options['loading'], 'none'); ?>>
										<?php _e('None (Browser Default - No loading attribute)', 'iframe'); ?>
									</option>
									<option value="lazy" <?php selected($options['loading'], 'lazy'); ?>>
										<?php _e('Lazy (Recommended - Improves Performance)', 'iframe'); ?>
									</option>
									<option value="eager" <?php selected($options['loading'], 'eager'); ?>>
										<?php _e('Eager (Load Immediately)', 'iframe'); ?>
									</option>
								</select>
								<p class="description">
									<?php _e('Choose when iframes should load. "Lazy" defers loading until the iframe is near the viewport, improving page performance. You can override this setting on individual shortcodes using the loading parameter.', 'iframe'); ?>
								</p>
								<p class="description">
									<strong><?php _e('Example override:', 'iframe'); ?></strong> 
									<code>[iframe src="..." loading="eager"]</code>
								</p>
							</td>
						</tr>
					</table>
					<?php submit_button(__('Save Settings', 'iframe')); ?>
				</form>
			</div>
			
			<!-- Sidebar Promotion -->
			<div style="width: 300px;">
				<div style="background: #fff; border: 1px solid #ccd0d4; border-radius: 4px; padding: 20px; box-shadow: 0 1px 1px rgba(0,0,0,.04);">
					<h2 style="margin-top: 0; font-size: 18px; border-bottom: 1px solid #eee; padding-bottom: 10px;">
						<?php _e('Need More Features?', 'iframe'); ?>
					</h2>
					
					<div style="margin: 15px 0;">
						<h3 style="font-size: 16px; margin: 0 0 15px 0; color: #333;">
							<?php _e('You may try Advanced iFrame with more features', 'iframe'); ?>
						</h3>
						<ul style="list-style-type: disc; list-style-position: outside; margin: 0 0 15px 0; padding-left: 20px;">
							<li><?php _e('Auto-resize to content height/width', 'iframe'); ?></li>
							<li><?php _e('Show only specific iframe areas', 'iframe'); ?></li>
							<li><?php _e('Modify CSS/JS in parent and iframe', 'iframe'); ?></li>
							<li><?php _e('Forward parameters & URL mapping', 'iframe'); ?></li>
							<li><?php _e('Hide elements & custom styling', 'iframe'); ?></li>
							<li><?php _e('Cross-domain support with workaround', 'iframe'); ?></li>
							<li><?php _e('Widget support & much more', 'iframe'); ?></li>
						</ul>
						<p style="margin: 0 0 15px 0;">
							<a href="https://r.freemius.com/13759/8047958/" target="_blank" class="button button-primary" style="width: 100%; text-align: center; box-sizing: border-box;">
								<?php _e('Try Advanced iFrame', 'iframe'); ?> →
							</a>
						</p>
						<p style="margin: 0 0 15px 0; color: #666; font-size: 12px; font-style: italic;">
							<?php _e('✓ 30-day trial available', 'iframe'); ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
