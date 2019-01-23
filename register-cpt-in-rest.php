/*
* Add CPT data from 3rd party plugins to REST
* This is actually the preferred way of accessing data, rather than querying the DB with a callback
* Extended from https://scottbolinger.com/custom-post-types-wp-api-v2/
*/

function add_rest_support_for_plugin_cpts(){
	global $wp_post_types;
	// Add plugin CPT names into the array
	$post_type_name = ['mec-events', 'event'];
	for($i=0; $i < count($post_type_name); $i++){
		if(isset($wp_post_types[$post_type_name[$i]])){
			$wp_post_types[$post_type_name[$i]]->show_in_rest = true;
		}
	}
}
add_action('init', 'add_rest_support_for_plugin_cpts', 25);
