<?php
$project = $_block;
$image = get_field('full_image', $project->ID);
$position = get_field('position', $project->ID);
?>

<article class="<?= $_bem->element('wrapper') ?>">
  <div class="<?= $_bem->element('image-wrapper') ?>">
    <?= hd_component('media', [
      'parent' => 'projects__list-item',
      'type' => 'image',
      'resource' => $image,
      'sizes' => ['crop-654w', 'crop-1308w'],
      'display_sizes' => ['desktop' => '50vw', 'phone' => '100vw'],
      'fallback' => 'crop-654w',
      'fit' => 'cover',
    ]) ?>
  </div>
  <div class="<?= $_bem->element('info') ?>">
    <?php if (!empty($featured)) : ?>
      <span class="<?= $_bem->element('pre-headline') ?>">Featured —</span>
    <?php endif ?>
    <?= hd_component('title', [
      'level' => 2,
      'class' => $_bem->element('name'),
      'text' => $project->post_title,
    ]) ?>
    <div class="<?= $_bem->element('description') ?>"><?= $project->post_content ?></div>
  </div>
</article>