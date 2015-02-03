<?php 
if($data['custom_fields']) {
	if($data['custom_fields']['price']) {
		$price = $data['custom_fields']['price'][0];
		?>
		<div class="price">
			<p><strong>Price:</strong> <span>$<?= $price ?></span></p>
		</div>	
		<?php
	}
}
?>