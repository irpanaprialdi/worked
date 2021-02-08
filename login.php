<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/style-login.css">
  <title>Login</title>
</head>

<body>
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-6" style="background-color: white; border-radius: 20px 0 0 20px;">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-9">
              <h1 class="mb-5 text-center"><b>Welcome Back</b></h1>

              <div class="col-md-12">
                <a href="#" class="btn btn-outline-dark" style="width: 100%;">
                  <img src="images/icons8-google-240.png" style="width: 20px" />
                  Log in with Google
                </a>

              </div>

              <hr class="hr-text my-5" data-content="OR LOGIN WITH EMAIL" />

              <form class="mt-2" name="form" action="config/login.php" method="POST">
                <div class="input-group mb-3">
                  <input type="email" class="form-control" placeholder="You Email" name="email" required />
                </div>

                <div class="input-group mb-3">
                  <input type="password" class="form-control" placeholder="You Password" name="password" required />
                </div>

                <div class="form-check d-flex justify-content-between mt-4 mb-3">
                  <input class="form-check-input" type="checkbox" value="" />
                  <label class="form-check-label" for="defaultCheck1">
                    Keep me logged in
                  </label>
                  <a href="" style="text-decoration: underline; color: black;">Forgot Password</a>
                </div>

                <button type="submit" name="login" class="btn mt-3 mb-3" style="background-color: #090963; color: white; width: 100%;">Log
                  in</button>

                <hr>
                <p style="color: grey;" class="text-center">Don't have an account get? <a href="signup.php" style="text-decoration: underline;">Sign
                    up</a></p>

              </form>

            </div>
          </div>
        </div>
        <p class="text-center my-3">
          @Copyright by 18111068_Irpan Aprialdi_TIFRP18CIDB_UASWEB1
        </p>
      </div>

      <div class=" col-md-6" style="background-color: #cce4ff; border-radius: 0 20px 20px 0;">
        <h6 class="my-3 d-flex justify-content-end"><b>New Update Available</b></h6>
        <h6 class="d-flex justify-content-end" style="color: grey;">
          We have added some new
          <h6 class="d-flex justify-content-end" style="color: grey;">awesome features</h6>
          <div class="d-flex justify-content-end">
            <a href="main-menu.php" type="button" class="btn btn-light">Learn More</button>
          </div>
          <div class="d-flex justify-content-center">
            <img src="images/Lovepik_com-611365996-Vector 25D Stereo Network Technology Theme Illustration.png" style="width: 80%;" alt="">
          </div>
        </h6>
      </div>
    </div>
  </div>


</body>

</html>