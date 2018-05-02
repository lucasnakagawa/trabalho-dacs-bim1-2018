<?php
get_header();
global $wpdb;

$query = "SELECT post_title, post_content, post_date FROM $wpdb->posts WHERE post_status = 'publish' ORDER BY post_date DESC";
$rows = $wpdb->get_results($query);
foreach($rows as $row) {
	$postTitle = $row->post_title;
	$postContent = $row->post_content;
	$postDate = $row->post_date;
	
	echo "<h1 class='title'>" . $postTitle . "</h1>";
	echo "</br>";
	echo "<h2>" . $postContent . "</h2>";
	echo "</br>";
	echo "<h2>" . $postDate . "</h2>";
	echo "</br>";
	echo "<hr>";
	echo "</p>";
}
?>