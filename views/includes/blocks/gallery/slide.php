<?php
$media_resource = $item['type'] === "video"
	? ['file' => $item]
	: $item;
?>
<?= hd_component('media', [
	'parent' => 'gallery__slider-slide',
	'type' => $item['type'],
	'resource' => $media_resource,
	'sizes' => ['crop-1440w', 'crop-2880w'],
	'display_sizes' => ['100vw'],
	'fallback' => 'crop-1440w',
	'fit' => 'cover',
	'video_options' => [
		'background' => 'no-loop',
	]
]) ?>