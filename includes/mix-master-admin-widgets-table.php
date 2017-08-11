<?php
if(!class_exists('WP_List_Table')){
	require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}
class mix_master_admin_widgets_table extends WP_List_Table {
	/**
	 * Display the rows of records in the table
	 * @return string, echo the markup of the rows
	 */
	function display() {
	$plugin_master_name = constant('MIX_MASTER_NAME');
?>
<table class="widefat" cellspacing="0">
	<thead>
		<tr>
			<th><h2><img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:18px; vertical-align:middle;" /><?php _e('&nbsp;Screenshot', 'mix_master'); ?></h2></th>
			<th><h2><img src="<?php echo plugins_url('images/techgasp-minilogo-16.png', dirname(__FILE__)); ?>" style="float:left; height:18px; vertical-align:middle;" /><?php _e('&nbsp;Description', 'mix_master'); ?></h2></th>
		</tr>
	</thead>

	<tfoot>
		<tr>
			<th><a class="button-primary" href="<?php echo get_site_url(); ?>/wp-admin/widgets.php" title="To Widgets Page" style="float:left;">To Widgets Page</a></p></th>
			<th><a class="button-primary" href="<?php echo get_site_url(); ?>/wp-admin/widgets.php" title="To Widgets Page" style="float:right;">To Widgets Page</a></p></th>
		</tr>
	</tfoot>

	<tbody>
		<tr class="alternate">
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-mixcloudmaster-widget-basic-admin.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name; ?>" align="left" width="300px" height="135px" style="padding:5px;"/></td>
			<td style="vertical-align:middle"><h3>Basic, Fast Loading Player Widget</h3><p>The Basic Mixcloud Player Widget was specially designed for fast loading times. All player options are on automatic settings so it's easy and fast to deploy by any wordpress administrator.</p><p>This widget is fully <b>Mobile Responsive</b>, check Add-ons page.</p></td>
		</tr>
		<tr>
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-mixcloudmaster-widget-advanced-admin.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name; ?>" align="left" width="300px" height="135px" style="padding:5px;"/></td>
			<td style="vertical-align:middle"><h3>Advanced Responsive Player Widget</h3><p>The "top of the line" Advanced Mixcloud Player Widget was specially designed to grant you all mixcloud player Options, you have full control over the Color Scheme (light, dark), Auto-Play, Display Artwork, Display Tracklist and Display TechGap Bang Artwork!. All player options are customizable, still extremely easy to use.</p><p>This widget is fully <b>Mobile Responsive</b>, check Add-ons page.</p></td>
		</tr>
		<tr class="alternate">
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-mixcloudmaster-widget-advanced-mini-admin.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name; ?>" align="left" width="300px" height="135px" style="padding:5px;"/></td>
			<td style="vertical-align:middle"><h3>Advanced Responsive Mini Player Widget</h3><p>Awesome full featured advanced mini player to use on those special occasions where small matters. With the mini player you can select the Color Scheme (light, dark), Auto-Play, Display Artwork, Display Tracklist and Display TechGap Bang Artwork!. All player options are customizable and easy to use.</p><p>This widget is fully <b>Mobile Responsive</b>, check Add-ons page.</p></td>
		</tr>
		<tr>
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-mixcloudmaster-widget-profile-admin.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name; ?>" align="left" width="300px" height="135px" style="padding:5px;"/></td>
			<td style="vertical-align:middle"><h3>Mixcloud User Profile Widget</h3><p>Fast loading widget to display mixcloud user profiles. A great way to connect people to your mixcloud profile, show off your work and gather followers and likes.</p><p>This widget is fully <b>Mobile Responsive</b>, Check Add-ons page.</p></td>
		</tr>
		<tr class="alternate">
			<td style="vertical-align:middle"><img src="<?php echo plugins_url('images/techgasp-mixcloudmaster-widget-dashboard-admin.png', dirname(__FILE__)); ?>" alt="<?php echo $plugin_master_name; ?>" align="left" width="300px" height="135px" style="padding:5px;"/></td>
			<td style="vertical-align:middle"><h3>Administrator Dashboard Widget</h3><p>Cool player widget to listen to your favourite mixcloud radio and podcasts while working on your Wordpress Administrator. Check Add-ons page.</p></td>
		</tr>
	</tbody>
</table>
<?php
		}
}
