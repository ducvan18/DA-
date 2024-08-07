<main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area" data-bg-img="../public/img/photos/bg3.webp">
      <div class="container pt--0 pb--0">
        <div class="row">
          <div class="col-12">
            <div class="page-header-content">
              <h2 class="title" data-aos="fade-down" data-aos-duration="1000">Register</h2>
              <nav class="breadcrumb-area" data-aos="fade-down" data-aos-duration="1200">
                <ul class="breadcrumb">
                  <li><a href="index.php">Home</a></li>
                  <li class="breadcrumb-sep">//</li>
                  <li>Register</li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start My Account Area Wrapper ==-->
    <section class="account-area">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 m-auto">
            <div class="section-title text-center">
              <h2 class="title">Register</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="register-form-content">
              <form action="index.php?url=register" method="post" >
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <label for="username">Username <span class="required">*</span></label>
                      <?php
                        echo (!empty($error['username']['required'])) ?'<span style="color:red" >'.$error['username']['required'].'</span>':false;
                        echo (!empty($error['username']['min'])) ?'<span style="color:red" >'.$error['username']['min'].'</span>':false;
                        echo (!empty($error['username']['exists'])) ?'<span style="color:red" >'.$error['username']['exists'].'</span>':false;
                    ?>
                      <input id="username" name="username" class="form-control" type="text" required>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="email">Email address <span class="required">*</span></label>
                      <?php
                        echo (!empty($error['email']['required'])) ?'<span style="color:red" >'.$error['email']['required'].'</span>':false;
                        echo (!empty($error['email']['min'])) ?'<span style="color:red" >'.$error['email']['valid'].'</span>':false;
                        echo (!empty($error['email']['exists'])) ?'<span style="color:red" >'.$error['email']['exists'].'</span>':false;
                    ?>
                      <input id="email" name="email" class="form-control" type="email" required>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="password">Password <span class="required">*</span></label>
                      <?php
                        echo (!empty($error['password']['required'])) ?'<span style="color:red" >'.$error['password']['required'].'</span>':false;
                        echo (!empty($error['password']['min'])) ?'<span style="color:red" >'.$error['password']['min'].'</span>':false;
                    ?>
                      <input id="password" name="password" class="form-control" type="password" required>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="repassword">Confirm password <span class="required">*</span></label>
                      <?php
                        echo (!empty($error['password']['match'])) ?'<span style="color:red" >'.$error['password']['match'].'</span>':false;
                    ?>
                      <input id="repassword" name="repassword" class="form-control" type="password" required>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group mb--0">
                      <input class="btn-register" name="register" type="submit" value="Register">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group account-info-group mb--0">
                        <div class="rememberme-account">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">Remember me</label>
                            </div>
                        </div>
                      <a class="lost-password" href="index.php?url=login">You have account?</a>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End My Account Area Wrapper ==-->
  </main>