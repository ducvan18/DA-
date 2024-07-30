<main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area" data-bg-img="../public/img/photos/bg3.webp">
      <div class="container pt--0 pb--0">
        <div class="row">
          <div class="col-12">
            <div class="page-header-content">
              <h2 class="title" data-aos="fade-down" data-aos-duration="1000">Login</h2>
              <nav class="breadcrumb-area" data-aos="fade-down" data-aos-duration="1200">
                <ul class="breadcrumb">
                  <li><a href="index.php">Home</a></li>
                  <li class="breadcrumb-sep">//</li>
                  <li>Login</li>
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
              <h2 class="title">Login</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="login-form-content">
              <form action="index.php?url=login" method="POST">
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <label for="username">Username<span class="required">*</span></label>
                     
                      <input id="username" name="username" class="form-control" type="text" required>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="password">Password <span class="required">*</span></label>
                      
                      <input id="password" name="password" class="form-control" type="password" required>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <input class="btn-login" type="submit" name="login" value="Login">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group account-info-group mb--0">
                      <div class="rememberme-account">
                        <div class="form-check">
                        <a class="lost-password" href="index.php?url=quenmk">Lost your password?</a>
                        </div>
                      </div>
                      <a class="lost-password" href="index.php?url=register">You don't have account?</a>
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