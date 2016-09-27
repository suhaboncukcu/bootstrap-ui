<?php
$class = array_unique((array)$params['class']);
$message = (isset($params['escape']) && $params['escape'] === false) ? $message : h($message);
?>

<div class="ui message <?=$class?>">
	<p>
		<?=$message?>
	</p>
</div>
