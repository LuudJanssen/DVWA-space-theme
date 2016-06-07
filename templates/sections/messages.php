<?php if ($this->data['messages']): ?>
  <div class="messages">
    <?php foreach ($this->data['messages'] as $message): ?>
      <div class="message text-center"><?= $message ?></div>
    <?php endforeach ?>
  </div>
<?php endif ?>
