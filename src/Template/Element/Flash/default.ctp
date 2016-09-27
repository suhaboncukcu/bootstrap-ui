<?php
$class = array_unique((array)$params['class']);
$message = (isset($params['escape']) && $params['escape'] === false) ? $message : h($message);

$classes = "";
foreach ($class as $cs) {
	if($cs == 'alert') {
		$cs = 'error';
	}
	$classes .= $cs." ";
}
?>


<div class="ui message <?=$classes?>">
	<p>
		<?=$message?>
	</p>
</div>
