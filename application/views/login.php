<?php include('include_config.php');?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Demo</title>
  <?php include('include_metadata.php'); ?>
</head>
<body>
  <!-- <?php include('include_nav.php'); ?> -->
<!-- partial:index.partial.html -->
<div class="login-form">
  <form action="" method="POST">
    <h1>Login</h1>
    <div class="content">
    <?php if($this->session->flashdata('error')){?>
        <p style="color:red"><?php  echo $this->session->flashdata('error');?></p>	
        <?php } ?>

      <div class="input-field">
        <input name="email" type="email" placeholder="Email" autocomplete="nope">
      </div>
      <div class="input-field">
        <input name="password" type="password" placeholder="Password" autocomplete="new-password">
      </div>
      <div>REMEMBER ME: <input name="remember" type="checkbox" <?php //echo get_cookie('remember') ? 'checked="checked"' : ''; ?>/></div> 
      <a href="#" class="link">Forgot Your Password?</a>
    </div>
    <div class="action">
      <button id="signup" type="button" onclick="window.location.href='<?php echo base_url('index.php/register');?>'">Register</button>
      <button id="signin" type="submit">Sign in</button>
    </div>
  </form>
</div>
<!-- partial -->
<?php include('include_footer.php'); ?>
<?php include('include_base.php');?>
</body>
</html>

