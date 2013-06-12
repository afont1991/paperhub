<div class="login-container">
  <h1 class="page-header">Login</h1>
<?php if (validation_errors()): ?>
<div class="alert">
  <?php echo validation_errors();?>
</div>
<?php endif ?>

  <div class="row-fluid">
    <div class="span4">
      <p>
        Login below with your e-mail address and password.
      </p>
        <?php echo form_open('users/login', array('id'=>'login'), array('redirect_to' => "/orders")) ?>
          <div class="control-group">
              <label for="email">e-mail address</label>
              <?php echo form_input('email', $this->input->post('email') ? $this->input->post('email') : '')?>
          </div>
          <div class="control-group">
              <label for="password">password</label>
              <input type="password" id="password" name="password" maxlength="20" />
          </div>
          <div class="control-group">
              <input type="submit" class="btn btn-success" value="login" name="submit">
              <?php echo anchor('users/reset_pass', lang('user:reset_password_link'));?>
          </div>
        <?php echo form_close(); ?>
    </div>
  </div>

</div>