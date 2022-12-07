<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Register</h3>
                <form action="{{ route('register.action') }}" class="gambar" method="POST">
                    @csrf
                  <div class="form-group">
                    <label>Username</label>
                    <input class="form-control" type="text" name="name" value="" />
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" type="email" name="email" value="" />
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control p_input" name="password">
                  </div>
                  <div class="mb-5">
                    <label class="form-control1">Password Confirmation <span class="text-danger">*</span></label>
                    <input class="form-control" type="password" name="password_confirm" />
                </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Remember me </label>
                    </div>
                    <a href="#" class="forgot-pass">Forgot password</a>
                  </div>
                  <div class="text-center">
                    <button class="btn btn-primary btn-block enter-btn">Register</button>
                  </div>
                  <div class="d-flex">
                    <button class="btn btn-facebook col mr-2">
                      <i class="mdi mdi-facebook"></i> Facebook </button>
                    <button class="btn btn-google col">
                      <i class="mdi mdi-google-plus"></i> Google plus </button>
                  </div>
                  <p class="sign-up text-center">Already have an Account?<a href="#"> Sign Up</a></p>
                  <p class="terms">By creating an account you are accepting our<a href="#"> Terms & Conditions</a></p>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <form action="{{ route('register.action') }}" class="gambar" method="POST">
            @csrf
            <div class="mb-1">
                <label class="form-control1">Name <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="name" value="" />
            </div>
            <div class="mb-2">
                <label class="form-control1">Email <span class="text-danger">*</span></label>
                <input class="form-control" type="email" name="email" value="" />
            </div>
            <div class="mb-3">
                <label class="form-control1">Kelas <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="kelas" value="" />
            </div>
            <div class="mb-3">
                <label for="exampleSelectGender">Jurusan</label>
                <select class="form-control" id="exampleSelectGender" name="jurusan">
                  <option>Admin</option>
                  <option>PPLG</option>
                  <option>TKJ</option>
                  <option>MM</option>
                  <option>BC</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="form-control1">Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password" />
            </div>
            <div class="mb-5">
                <label class="form-control1">Password Confirmation <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password_confirm" />
            </div>
           
            <div class="mb-6">
                <button class="btn-primary">Register</button>
                <a class="btn btn-danger" href="/">Back</a>
            </div>
            <div class="text-center" style="margin-top: 437px">
            ALREADY HAVE AN ACCOUNT? <a href="login">Login</a>
          </div>

        </form>
    </div>
</div> --}}