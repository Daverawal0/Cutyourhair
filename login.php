
<?php include_once('header.php');?>
<div class="container">
  <div class="py-5 text-center">
    <h2 class="display-4">Login form</h2>
  </div>

    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Please fill in the details to Login</h4>

      <form id="login_form">
        <div class="mb-3">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email address" required>
        </div>

        <div class="mb-3">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Enter your Password" required>
        </div>

        <hr class="mb-4">

        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
      </form>

      <hr class="mb-4">
      <p class="text-muted">Not a member yet? <a href="signup.php" >Create an account here</a></p>
    </div>
</div>

<?php include_once('footer.php');?>
