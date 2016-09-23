<?php
	foreach ($articles as $key) {
		echo '<h3>'.$key['id'].'</h3><br>';
		echo '<h2>'.$key['title'].'</h2><br>';
		echo '<p>'.$key['content'].'</p>';
		echo '<em>'.$key['published_at'].'</em><br>';

	}
?>