<?php $this->layout('sections/base', $this->data) ?>

<div class="body_padded">
  <h1>Instructions</h1>

  <div class="btn-group btn-toolbar submenu">
    <?php foreach (array_keys($this->data['docs']) as $docId): ?>
      <?php $selectedClass = ($docId === $this->data['selectedDocId']) ? ' active' : ''; ?>
      <a href="?doc=<?= $docId ?>" class="btn btn-primary<?= $selectedClass ?>"><?= $this->data['docs'][$docId]['legend'] ?></a>
    <?php endforeach ?>
  </div>

  <div class="fixed <?= $this->data['selectedDocId'] === 'readme' ? 'markdown' : '' ?>" id="<?= $this->data['selectedDocId'] === 'readme' ? 'parse_markdown' : '' ?>">
    <?= $this->data['selectedDocId'] === 'readme' ? '' : $this->data['instructions'] ?>
  </div>
</div>
