<?php
/*
Plugin Name: Pure Works
Plugin URI: http://ductincomputer.com
Description: My first plugin.
Version: 1.2
Author: Peter Nguyen
Author URI: http://facebook.com/socthaovat
*/

add_action('admin_menu', 'works_admin_actions');

function works_admin_actions(){
	add_menu_page('WorksPlugin', 'WorksPlugin', 'administrator', __FILE__, 'works_admin');
}

function works_admin(){
?>
	<div class="wrap">
		<h4>The first Wordpress Plugin: Works</h4>
		<table class="widefat">
			<thead>
				<tr>
					<th>ID</th>
					<th>Work Title</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>ID</th>
					<th>Work Title</th>
				</tr>
			</tfoot>
			<tbody>
			<?php
				global $wpdb;
				
				$results = $wpdb->get_results(
					"SELECT ID, post_title 
					 FROM $wpdb->posts"
				);
			?>
			<?php foreach($results as $post): ?>
				<tr>
					<td><?php echo $post->ID; ?></td>
					<td><?php echo $post->post_title; ?></td>
				</tr>
			<?php endforeach ?>
			</tbody>
		</table>
	</div>
<?php
}
?>