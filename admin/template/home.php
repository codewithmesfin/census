<div class=" " style="background-color:white">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-9 mx-auto">
        <img src="../images/census.png" alt="" class="img-fluid">
      </div>
    </div>
      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content bg-info rounded">
            <div class="modal-header">
              <h5 class="modal-title text-center text-light" id="exampleModalLongTitle">User Login</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form class="" action="data/login.php" method="post" id="app">
                <div class="row">
                  <div class="col-12 col-lg-10 mx-auto bg-light py-3 rounded text-info">
                    <div class="row">
                      <div class="col-12 form-group">
                        <label for="">E-mail</label>
                        <input type="email" name="email" value="" class="form-control" placeholder="E-mail" required v-model="email">
                      </div>
                      <div class="col-12 form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" value="" class="form-control" placeholder="Password" required v-model="password">
                      </div>
                      <div class="col-12 col-lg-6 mx-auto form-group">
                        <input type="submit" name="login" value="Log in" class="btn btn-info">
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <a href="#" class="btn btn-warning">Forgot password?</a>
              <a href="signup.php" class="btn btn-secondary">Sign up</a>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
<div class="col-12 col-lg-8 mx-auto">
  <div class="card card-body cards">
    <p class="text-info text-center h4" style="font-family:fanatsy">
      <strong>  WEB BASED CENSUS MANAGEMENT SYSTEM FOR WOLDIYA CITY IN TIN FAZE KEBELE</strong>
    </p>
    <div class="col-12 col-lg-4 mx-auto my-2">
      <a href="#" class="btn btn-info"  data-toggle="modal" data-target="#exampleModalCenter">Sign in</a>
    </div>
  </div>
</div>
<div class="bg-info" style="margin-top:-100px;z-index:3">
  <div class="bg-info mt-5 pt-5 col-12 col-lg-8 mx-auto">
    <div class="py-5">
      <p class="text-left text-white" style="font-family:serif">
        Census is the procedure of The central statics agency defines a population census as the total
        process of collecting, counting demographic, socio-economic related data at a specific time of all
        persons in a country or part of a country. census as the total process of collecting, compiling, and
        publishing demographic, economic, and social data pertaining to a specific time to all persons in
        a country or delimited part of the country.
        Acquiring and recording information about the member of a given population. The team is used
        mostly in connection with national population and housing census. It is an official survey of the
        population of the country that is carried out in order to find out how many people live there and
        to obtain detail of such things as peoples and jobs.
      </p>
    </div>
  </div>
</div>
