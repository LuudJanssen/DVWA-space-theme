<?php $this->layout('sections/base', $this->data) ?>

<form class="form-group center-block" action="login.php" method="post">
  <fieldset>
    <label for="user">Username</label>
    <input class="form-control" type="text" size="20" name="username">
    <label for="pass">Password</label>
    <input class="form-control" type="password" AUTOCOMPLETE="off"
           size="20" name="password">
    <input class="submit btn btn-block btn-success" type="submit" value="Login" name="Login">
  </fieldset>

  <small>Pssshhtt. The login credentials are <em>admin</em> - <em>password</em>.</small>

  <?= $this->data['tokenField'] ?>

</form>
