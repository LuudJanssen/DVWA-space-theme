<?php $this->layout('sections/base', $this->data) ?>

<div class="body_padded">
  <h1>Vulnerability: Insecure CAPTCHA</h1>

  <div class="vulnerable-code">
    <form class="form-group" action="#" method="POST"<?= ($this->data['hideForm'] ? ' style="display: none;"' : '') ?>>
      <h2>Change your password:</h2>

      <input type="hidden" name="step" value="1"/>
      <?php if ($this->data['vulnerabilityFile'] == 'impossible.php'): ?>
        Current password:<br/>
        <input class="form-control" type="password" AUTOCOMPLETE="off" name="password_current">
      <?php endif ?>
      New password:<br/>
      <input class="form-control" type="password" AUTOCOMPLETE="off" name="password_new">
      Confirm new password:<br/>
      <input class="form-control" type="password" AUTOCOMPLETE="off" name="password_conf">


      <?php if ($this->data['vulnerabilityFile'] == 'high.php'): ?>
        <!-- **DEV NOTE**   Response: 'hidd3n_valu3'   &&   User-Agent: 'reCAPTCHA'   **/DEV NOTE** -->
      <?php endif ?>

      <?php if ($this->data['vulnerabilityFile'] == 'high.php' || $this->data['vulnerabilityFile'] == 'impossible.php'): ?>
        <?= $this->data['tokenField'] ?>
      <?php endif ?>

      <input class="btn btn-block btn-lg btn-success" type="submit" value="Change" name="Change">

      <h3>Captcha</h3>
      <?= $this->data['recaptchaHtml'] ?>
    </form>

    <div class="messages no-margin">
      <?php if (!$this->data['captchaKeySet']): ?>
        <div class="message error"><em>reCAPTCHA API key missing</em> from config file: <?= $this->data['configPath'] ?>
        </div>
      <?php endif ?>
    </div>

    <?= $this->data['html'] ?>
  </div>

  <h2>More Information</h2>
  <ul>
    <li><?= $this->externalLink('http://www.captcha.net/') ?></li>
    <li><?= $this->externalLink('https://www.google.com/recaptcha/') ?></li>
    <li><?= $this->externalLink('https://www.owasp.org/index.php/Testing_for_Captcha_(OWASP-AT-012)') ?></li>
  </ul>
</div>
