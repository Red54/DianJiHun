<?php function wp_install_defaults($user_id) {
	global $wpdb, $wp_rewrite, $current_site, $table_prefix;

	$djh_plugins = array (
		0 => 'disable-wordpress-updates/disable-updates.php',
		1 => 'buddypress/bp-loader.php',
		2 => 'collabpress/cp-loader.php',
	);

	foreach ($djh_plugins as $plugin) {
		$current = get_option( 'active_plugins' );
		$plugin = plugin_basename( trim( $plugin ) );
		$current[] = $plugin;
		sort( $current );
		do_action( 'activate_plugin', trim( $plugin ) );
		update_option( 'active_plugins', $current );
	}

	echo "<br>电机魂开源群件安装成功！<br>";
}
