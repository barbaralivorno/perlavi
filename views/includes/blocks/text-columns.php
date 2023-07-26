<?php
  $tc = $_block;
?>

<ul class='<?= $_bem->block() ?>'>
  <?php foreach ($tc['columns'] as $item) :
    $item = $item['cell']; ?>
  <li class='<?= $_bem->element('item') ?>'>
    <?= hd_component('title', [
      'level' => 3,
      'class' => $_bem->element('title'),
      'modifier' => 'xl',
      'text' => $item['title'],
    ]) ?>
    <p class="<?= $_bem->element('text') ?>"><?= $item['text'] ?></p>
  </li>
  <?php endforeach; ?>
</ul>