<?php $this->layout('sections/base', $this->data) ?>

<div class="body_padded">
  <img class="center-block" width="500px" src="<?= $this->data['templateRoot'] ?>images/bitsensor-logo.png"
       alt="BitSensor Logo - Dark Backgrounds">

  <h1>Welcome to BitSensor's Hacking Competition!</h1>
  <p>We have made a custom version
    of <?= $this->externalLink('http://www.dvwa.co.uk/', 'Damn Vulnerable Web Application') ?> to make hacking into a
    competition. If you have logged in you will find 10 different vulnerable pages to hack under 'Vulnerabilities'. We
    have hidden a couple of Bitcoin fractions on this server. In for example the database or the file system. It's your job to
    find them.</p>

  <h2>The Most Creative Hack</h2>
  <p>We like to be surprised by the creativity of hackers. Surprise us with a creative hack and we will reward you on
    stage with some lovely Bitcoin fractions!</p>

  <h2>More Training Resources</h2>
  <p>We use DVWA to make this competition happen. Big shout out to the people
    from <?= $this->externalLink('https://www.nccgroup.trust/uk/about-us/newsroom-and-events/news/2016/may/ncc-group-completes-2016-website-integration/', 'RandomStorm') ?>
    for making DVWA.</p>
  <p>Every vulnerability lists a list of external links that give you more information about the vulnerability.</p>
  <p>DVWA aims to cover the most commonly seen vulnerabilities found in today's web applications. However there are
    plenty of other issues with web applications. Should you wish to explore any additional attack vectors, or want more
    difficult challenges, you may wish to look into the following other projects:</p>
  <ul>
    <li><?= $this->externalLink('http://www.itsecgames.com/', 'bWAPP') ?></li>
    <li><?= $this->externalLink('http://sourceforge.net/projects/mutillidae/files/mutillidae-project/', 'NOWASP') ?>
      (formerly known
      as <?= $this->externalLink('http://www.irongeek.com/i.php?page=mutillidae/mutillidae-deliberately-vulnerable-php-owasp-top-10', 'Mutillidae') ?></li>
    <li><?= $this->externalLink('https://www.owasp.org/index.php/OWASP_Broken_Web_Applications_Project', 'OWASP Broken Web Applications Project') ?></li>
  </ul>

  <h1>Good Luck!</h1>
</div>
