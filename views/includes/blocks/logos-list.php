<?php
  $logos = $_block['logos_list'];
?>

<ul class='<?= $_bem->block() ?>'>
  <?php foreach ($logos as $item) : 
    $item = $item['item']?>
  <li class='<?= $_bem->element('item') ?>'>
    <img src=<?= $item['url']?> class='<?= $_bem->element('logo') ?>' />
  </li>
  <?php endforeach; ?>
</ul>