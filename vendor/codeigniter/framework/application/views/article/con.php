<label>ID</label>
<h3> 
	<?php 
		echo $result['id']; 
	?>	
	</h3>
<label>Title:</label>
	<div><h3> 
		<?php 
			echo $result['title']; 
		?>	
	</h3></div>
<label>Content:</label>
	<p><h3> 
		<?php 
			echo $result['content']; 
		?>	
	</h3></p>
<label>Time:</label>
	<div><h3> 
		<?php 
			echo $result['published_at']; 
		?>	
	</h3></div>
