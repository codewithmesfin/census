<div class="my-5 py-5">
  <div class="col-12 col-lg-4 mx-auto">
    <div class="card card-body">
      <p class="text-center">ADD NEW USER</p>
      <form class="mx-2" action="../data/newuser.php" method="post">
        <div class="row">
          <div class="col-12  form-group">
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
            <select class="custom-select" name="user_type">
              <option value="User type">User type</option>
              <option value="Supervisor">Supervisor</option>
              <option value="Enumerator">Enumerator</option>
              <option value="Manager">Manager</option>
              <option value="Administrator">Administrator</option>
            </select>
          </div>
          <div class="col-12 form-group">
            <input type="password" name="password" value="" placeholder="Password" class="form-control" required>
          </div>
          <div class="col-12 col-lg-8 mx-auto form-group my-2">
            <input type="submit" name="register" value="Register New User" class="btn btn-secondary btn-block">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
