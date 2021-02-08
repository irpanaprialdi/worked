<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/style-login.css">
  <title>Sign up</title>
</head>

<body>
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-6" style="background-color: #cce4ff; border-radius: 20px 0 0 20px;">

        <h4 class="my-3 d-flex justify-content-between"><b>THE POWER OF MODERN CITY</b></h4>
        <h6 class="d-flex justify-content-between style=" color: grey;">
          Modern Technology Makes All Things In The World Easy
          <h6 class="d-flex justify-content-between" style="color: grey;">if you want more to know about
            modern technology go klik learn more.</h6>
          <div class="d-flex justify-content-between">
            <button type="button" class="btn btn-light">Learn More</button>
          </div>
          <div class="d-flex justify-content-center">
            <img src="images/Lovepik_com-611365996-Vector 25D Stereo Network Technology Theme Illustration.png" style="width: 80%;" alt="">
          </div>
        </h6>

      </div>

      <div class=" col-md-6" style="background-color: white; border-radius: 0 20px 20px 0;">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-9">
              <h1 class="mb-5 text-center"><b>Sign Up</b></h1>

              <form method="POST" class="mt-2" action="config/signup.php">
                <div class="input-group mb-3">
                  <input type="text" name="username" class="form-control" placeholder="Username" required />
                </div>
                <div class="input-group mb-3">
                  <input type="text" name="alamat" class="form-control" placeholder="Alamat" required />
                </div>
                <div class="input-group mb-3">
                  <input type="email" name="email" class="form-control" placeholder="Email" required />
                </div>
                <div class="input-group mb-3">
                  <input type="password" name="password" class="form-control" placeholder="Password" required />
                </div>

                <div class="form-check d-flex justify-content-between mt-4 mb-2">
                  <input class="form-check-input" type="checkbox" value="" />
                  <label class="form-check-label" for="defaultCheck1">
                    I agree to all statements include in the terms of services
                    <a href="" style="text-decoration: underline; color: black;">terms of
                      services</a>
                  </label>
                </div>

                <button type="submit" name="register" class="btn mt-3 mb-2" style="background-color: #090963; color: white; width: 100%;">Sign Up
                </button>
                <p style="color: grey;" class="text-center">Have Account? <a href="login.php" style="text-decoration: underline;">Sign
                    in</a></p>
                <hr class="hr-text" data-content="OR" />

                <div class="col-md-12">
                  <a href="#" class="btn btn-outline-dark" style="width: 100%;">
                    <img src="images/icons8-google-240.png" style="width: 20px" />
                    Log in with Google
                  </a>
                </div>
              </form>

            </div>

          </div>
        </div>
        <p class="text-center my-3">
          @Copyright by 18111068_Irpan Aprialdi_TIFRP18CIDB_UASWEB1
        </p>
      </div>
    </div>

  </div>

  <script src="js/bootstrap.min.js"></script>
</body>

</html>