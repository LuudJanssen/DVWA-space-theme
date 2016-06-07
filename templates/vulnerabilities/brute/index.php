<?php $this->layout('sections/base', $this->data) ?>

<div class="body_padded">
  <h1>Vulnerability: Brute Force</h1>

  <div class="vulnerable-code">
    <h2>Login</h2>

    <form class="form-group" action="#" method="<?= $this->data['method'] ?>">
      Username:<br/>
      <input class="form-control" type="text" name="username">
      Password:<br/>
      <input class="form-control" type="password" AUTOCOMPLETE="off" name="password">
      <input class="btn btn-block btn-lg btn-success" type="submit" value="Login" name="Login">

      <?php if ($this->data['vulnerabilityFile'] == 'high.php' || $this->data['vulnerabilityFile'] == 'impossible.php'): ?>
        <?= $this->data['tokenField'] ?>
      <?php endif ?>
    </form>
    <?= $this->data['html'] ?>
  </div>

  <h2>More Information</h2>
  <ul>
    <li><?= $this->externalLink('https://www.owasp.org/index.php/Testing_for_Brute_Force_(OWASP-AT-004)') ?></li>
    <li><?= $this->externalLink('http://www.symantec.com/connect/articles/password-crackers-ensuring-security-your-password') ?></li>
    <li><?= $this->externalLink('http://www.sillychicken.co.nz/Security/how-to-brute-force-http-forms-in-windows.html') ?></li>
  </ul>
</div>
