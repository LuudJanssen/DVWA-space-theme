<?php $this->layout('vulnerabilities/fi/index', $this->data) ?>

<div class="body_padded">
  <h1>Vulnerability: File Inclusion</h1>
  <div class="vulnerable-code">
    <h2>File 2</h2>
    <hr/>
    <blockquote>
      <p>I needed a password eight characters long so I picked Snow White and the Seven Dwarves.</p>
      <small>Nick Helm</small>
    </blockquote>
    <a class="btn btn-primary" href="?page=include.php">back</a>
  </div>
  <h2>More info</h2>
  <ul>
    <li><?= $this->externalLink('https://en.wikipedia.org/wiki/Remote_File_Inclusion') ?></li>
    <li><?= $this->externalLink('https://www.owasp.org/index.php/Top_10_2007-A3') ?></li>
  </ul>
</div>
