<?php $this->layout('sections/base', $this->data) ?>

<div class="body_padded">
  <h1>Vulnerability: Stored Cross Site Scripting (XSS)</h1>

  <div class="vulnerable-code">
    <form class="form-group" method="post" name="guestform" onsubmit="return validate_form(this)">
      Name * <br>
      <input class="form-control" name="txtName" type="text" size="30" maxlength="10">
      Message * <br>
      <textarea class="form-control" name="mtxMessage" cols="50" rows="3" maxlength="50"></textarea>

      <input class="btn btn-block btn-success" name="btnSign" type="submit" value="Sign Guestbook"
             onClick="return checkForm();">

      <?php if ($this->data['vulnerabilityFile'] == 'impossible.php'): ?>
        <?= $this->data['tokenField'] ?>
      <?php endif ?>
    </form>
    <?= $this->data['html'] ?>
  </div>
  <br/>

  <?php foreach ($this->data['guestBook'] as $entry): ?>
    <blockquote id="guestbook_comments">
      <small><?= $entry['name'] ?> wrote:</small>
      <p><?= $entry['comment'] ?></p>
    </blockquote>
  <?php endforeach ?>

  <hr>

  <h2>More Information</h2>
  <ul>
    <li><?= $this->externalLink('https://www.owasp.org/index.php/Cross-site_Scripting_(XSS)') ?></li>
    <li><?= $this->externalLink('https://www.owasp.org/index.php/XSS_Filter_Evasion_Cheat_Sheet') ?></li>
    <li><?= $this->externalLink('https://en.wikipedia.org/wiki/Cross-site_scripting') ?></li>
    <li><?= $this->externalLink('http://www.cgisecurity.com/xss-faq.html') ?></li>
    <li><?= $this->externalLink('http://www.scriptalert1.com/') ?></li>
  </ul>
</div>
