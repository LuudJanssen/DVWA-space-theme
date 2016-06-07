<?php $this->layout('sections/base', $this->data) ?>

<div class="body_padded">
  <h1>Vulnerability: Cross Site Request Forgery (CSRF)</h1>

  <div class="vulnerable-code">
    <h2>Change your admin password:</h2>

    <form class="form-group" action="#" method="GET">

      <?php if ($this->data['vulnerabilityFile'] == 'impossible.php'): ?>
        Current password:<br/>
        <input class="form-control" type="password" AUTOCOMPLETE="off" name="password_current">
      <?php endif ?>

      New password:<br/>
      <input class="form-control" type="password" AUTOCOMPLETE="off" name="password_new">
      Confirm new password:<br/>
      <input class="form-control" type="password" AUTOCOMPLETE="off" name="password_conf">
      <input class="btn btn-block btn-lg btn-success" type="submit" value="Change" name="Change">

      <?php if ($this->data['vulnerabilityFile'] == 'high.php' || $this->data['vulnerabilityFile'] == 'impossible.php'): ?>
        <?= $this->data['tokenField'] ?>
      <?php endif ?>

    </form>
    <?= $this->data['html'] ?>
  </div>

  <h2>More Information</h2>
  <ul>
    <li><?= $this->externalLink('https://www.owasp.org/index.php/Cross-Site_Request_Forgery') ?></li>
    <li><?= $this->externalLink('http://www.cgisecurity.com/csrf-faq.html') ?></li>
    <li><?= $this->externalLink('https://en.wikipedia.org/wiki/Cross-site_request_forgery') ?></li>
  </ul>
</div>
