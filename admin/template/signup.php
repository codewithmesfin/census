<div class="my-5">
  <div class="col-12 col-lg-6 mx-auto">
    <form class="col-12 col-lg-9 mx-auto" action="data/signup.php" method="post">
      <div class="row">
        <div class="col-12 form-group">
          <input type="text" name="fname" value="" placeholder="First Name" class="form-control" required>
        </div>
        <div class="col-12 form-group">
          <input type="text" name="lname" value="" placeholder="Last Name" class="form-control" required>
        </div>
        <div class="col-12 form-group">
          <input type="text" name="idno" value="" placeholder="ID No" class="form-control" required>
        </div>
        <div class="col-12 form-group">
          <input type="text" name="phone" value="" placeholder="Phone No" class="form-control" required>
        </div>
        <div class="col-12 form-group">
          <input type="email" name="email" value="" placeholder="E-mail" class="form-control" required>
        </div>
        <div class="col-12 form-group">
          <select class="custom-select" name="gender">
            <option value="Gender">Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
        </div>
        <div class="col-12 form-group">
          <input type="password" name="password" value="" placeholder="Password" class="form-control" required>
        </div>
        <div class="col-12 form-group">
          <input type="password" name="confirmPassword" value="" placeholder="Confirm Password" class="form-control" required>
        </div>
        <div class="col-4 form-group">
          <input type="submit" name="signup" value="Sign up" class="btn btn-info btn-block">
        </div>
        <div class="col-8">
          <p class="btn">Already signed up? <a href="index.php" class="mx-2 text-primary">Log in</a></p>
        </div>
      </div>
    </form>
  </div>
</div>
