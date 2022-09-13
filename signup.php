<?php include_once('header.php');?>

<div class="container">
      <div class="py-5 text-center">
        <h2 class="display-4">Sign Up form</h2>
      </div>

        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Please fill in the details to sign up</h4>
          <form id="signup_form">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter First Name" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter Last Name" required>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email address" required>
            </div>

            <div class="mb-3">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Enter your Password" required>
            </div>

            <div class="mb-3">
              <label for="phone">Phone Number</label>
              <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your Phone Number" required>
            </div>

            <hr class="mb-4">

            <button type="submit" class="btn btn-primary btn-lg btn-block">Sign Up</button>
          </form>
          <hr class="mb-4">
          <p class="text-muted">Already a member? <a href="login.php" >Login</a></p>
        </div>
    </div>

<?php include_once('footer.php');?>
