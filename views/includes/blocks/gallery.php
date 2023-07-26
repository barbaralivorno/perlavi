<div class="<?= $_bem->block() ?>">
  <?= hd_component('slider', [
    'parent' => 'gallery',
    'items' => $_block['gallery'],
    'item_view' => 'blocks/gallery/slide',
  ]) ?>
</div>