
<div class="container-fluid d-flex h-100 align-items-center justify-content-center py-4 py-sm-5">
    <div class="card card-body" style="max-width: 940px">
      <a class="position-absolute top-0 end-0 nav-link fs-sm py-1 px-2 mt-3 me-3" href="#" onclick="window.history.go(-1); return false;"><i class="fi-arrow-long-left fs-base me-2"></i>Go back</a>
      <a class="position-absolute top-0 start-50 nav-link fs-sm py-1 px-2 mt-3 me-3" href="index.html">Home</a>
      <div class="row mx-0 align-items-center">
        <div class="col-md-6 border-end-md p-2 p-sm-5">
          <h2 class="h3 mb-4 mb-sm-5">Hey there!<br>Welcome to IPM.</h2><img class="d-block mx-auto" src="img/signin-modal/signin.svg" width="344" alt="Illustartion">
          <div class="mt-4 mt-sm-5">Don't have an account? <a href="signup-light.html">Sign up here</a></div>
        </div>
        <div class="col-md-6 px-2 pt-2 pb-4 px-sm-5 pb-sm-5 pt-md-5"><a class="btn btn-outline-info w-100 mb-3" href="#"><i class="fi-google fs-lg me-1"></i>Sign in with Google</a><a class="btn btn-outline-info w-100 mb-3" href="#"><i class="fi-facebook fs-lg me-1"></i>Sign in with Facebook</a>
          <div class="d-flex align-items-center py-3 mb-3">
            <hr class="w-100">
            <div class="px-3">Or</div>
            <hr class="w-100">
          </div>
          <form class="needs-validation" novalidate>
            <div class="mb-4">
              <label class="form-label mb-2" for="signin-email">Country code</label>
              <input class="form-control" type="text" id="signin-email" placeholder="+964" required>
            </div>
            <div class="mb-4">
              <div class="d-flex align-items-center justify-content-between mb-2">
                <label class="form-label mb-0" for="signin-password">phone num</label>
              </div>
              <div class="password-toggle">
                <input class="form-control" type="text" id="signin-password" placeholder="Enter your phone number" required>
              </div>
            </div>
            <button class="btn btn-primary btn-lg w-100" type="submit">Send SMS</button>
            <div class="otp-field d-flex justify-content-around mt-5 ">
              <input style="width: 15%;" type="text" maxlength="1" />
              <input style="width: 15%;" type="text" maxlength="1" />
              <input style="width: 15%;" type="text" maxlength="1" />
              <input style="width: 15%;" type="text" maxlength="1" />
          </div>
        
            <button class="btn btn-primary btn-lg w-100 mt-2" type="submit">log in</button>

          </form>
        </div>
      </div>
    </div>
  </div>