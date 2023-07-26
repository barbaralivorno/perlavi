<?php
$grid_items = $_block['grid'];
?>
<div class="<?= $_bem->block() ?>">
  <?php if (!empty($_block['title'])) : ?>
  <h2 class="title page-title <?= $_bem->element('title') ?>"><?= $_block['title'] ?></h2>
  <?php endif ?>
  <ul class="<?= $_bem->element('list') ?>">
    <?php foreach ($grid_items as $item) : ?>
    <li class="<?= $_bem->element('item') ?>">
      <?= hd_component('media', [
          'parent' => 'image-grid__list-item',
          'type' => 'image',
          'resource' => $item['image'],
          'sizes' => ['crop-654w', 'crop-1308w'],
          'display_sizes' => ['desktop' => '50vw', 'phone' => '100vw'],
          'fallback' => 'crop-654w',
          'fit' => 'cover',
        ]) ?>
      <span class="title <?= $_bem->element('title') ?>">
        <?= $item['title'] ?>
      </span>
    </li>
    <?php endforeach; ?>
  </ul>
</div>