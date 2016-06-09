<?php $this->layout('sections/base', $this->data) ?>

<form class="form-group center-block" action="login.php" method="post">
  <fieldset>
    <h2>We need to know who you are</h2>
    <label for="user">E-mail Address</label>
    <input class="form-control" type="text" size="20" name="username">
    <!--<label for="pass">Password</label>
    <input class="form-control" type="password" AUTOCOMPLETE="off"
           size="20" name="password">-->
    <input class="submit btn btn-block btn-success" type="submit" value="Start" name="Login">
  </fieldset>

  <small>We'll use your e-mail to draw the final winner.</small>

  <?= $this->data['tokenField'] ?>

</form>
