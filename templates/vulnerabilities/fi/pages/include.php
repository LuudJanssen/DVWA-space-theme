<?php $this->layout('vulnerabilities/fi/index', $this->data) ?>

<div class="body_padded">
  <h1>Vulnerability: File Inclusion</h1>

  <div class="vulnerable-code">
    <div class="btn-group btn-toolbar submenu">
      <a class="btn btn-primary" href="?page=file1.php">file1.php</a>
      <a class="btn btn-primary" href="?page=file2.php">file2.php</a>
      <a class="btn btn-primary" href="?page=file3.php">file3.php</a>
    </div>

    <div class="messages no-margin">
      <?php if (!$this->data['allowUrlInclude']): ?>
        <div class="message error">The PHP function <em>allow_url_include</em> is not enabled.</div>
      <?php endif ?>

      <?php if (!$this->data['allowUrlFopen']): ?>
        <div class="message error">The PHP function <em>allow_url_fopen</em> is not enabled.</div>
      <?php endif ?>
    </div>
  </div>

  <h2>More Information</h2>
  <ul>
    <li><?= $this->externalLink('https://en.wikipedia.org/wiki/Remote_File_Inclusion') ?></li>
    <li><?= $this->externalLink('https://www.owasp.org/index.php/Top_10_2007-A3') ?></li>
  </ul>
</div>
