<main class="main-content">
  <!--== Start Page Header Area Wrapper ==-->
  <div class="page-header-area" data-bg-img="../public/img/photos/bg3.webp">
    <div class="container pt--0 pb--0">
      <div class="row">
        <div class="col-12">
          <div class="page-header-content">
            <h2 class="title" data-aos="fade-down" data-aos-duration="1000">Account</h2>
            <nav class="breadcrumb-area" data-aos="fade-down" data-aos-duration="1200">
              <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="breadcrumb-sep">//</li>
                <li>Account</li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--== End Page Header Area Wrapper ==-->

  <!--== Start My Account Wrapper ==-->
  <section class="my-account-area">
    <div class="container pt--0 pb--0">
      <div class="row">
        <div class="col-lg-12">
          <div class="myaccount-page-wrapper">
            <div class="row">
              <div class="col-lg-3 col-md-4">
                <nav>
                  <div class="myaccount-tab-menu nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="dashboad-tab" data-bs-toggle="tab" data-bs-target="#dashboad"
                      type="button" role="tab" aria-controls="dashboad" aria-selected="true">Dashboard</button>
                    <button class="nav-link" id="orders-tab" data-bs-toggle="tab" data-bs-target="#orders" type="button"
                      role="tab" aria-controls="orders" aria-selected="false"> Đơn hàng</button>
                    <!-- <button class="nav-link" id="download-tab" data-bs-toggle="tab" data-bs-target="#download" type="button" role="tab" aria-controls="download" aria-selected="false">Download</button> -->
                    <button class="nav-link" id="payment-method-tab" data-bs-toggle="tab"
                      data-bs-target="#payment-method" type="button" role="tab" aria-controls="payment-method"
                      aria-selected="false">Payment Method</button>
                    <button class="nav-link" id="address-edit-tab" data-bs-toggle="tab" data-bs-target="#address-edit"
                      type="button" role="tab" aria-controls="address-edit" aria-selected="false">address</button>
                    <button class="nav-link" id="account-info-tab" data-bs-toggle="tab" data-bs-target="#account-info"
                      type="button" role="tab" aria-controls="account-info" aria-selected="false">Account
                      Details</button>
                    <button class="nav-link" onclick="window.location.href='index.php?url=logout'"
                      type="button">Logout</button>
                  </div>
                </nav>
              </div>
              <div class="col-lg-9 col-md-8">
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="dashboad" role="tabpanel" aria-labelledby="dashboad-tab">
                    <div class="myaccount-content">
                      <h3>Dashboard</h3>
                      <div class="welcome">
                        <p>Xin chào, <strong>
                            <?= $_SESSION['username'] ?>
                          </strong> (Không phải <strong>
                            <?= $_SESSION['username'] ?>
                          </strong><a href="index.php?url=logout" class="logout"> Đăng xuất</a>)</p>
                      </div>
                      <p>Từ bảng này bạn có thể xem lịch sử đơn hàng của bạn, cập nhật thông cá nhân.</p>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                    <div class="myaccount-content">
                      <h3>Đơn hàng của bạn</h3>
                      <div class="myaccount-table table-responsive text-center">
                        <table class="table table-bordered">
                          <thead class="thead-light">
                            <tr>
                              <th>Đơn</th>
                              <th>Ngày đặt</th>
                              <th>Trạng thái đơn hàng</th>
                              <th>Tổng tiền</th>
                              <th>Chi tiết đơn hàng</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                             
                            // if (is_array($listBill)) {
                              foreach ($listBill as $bill) {
                                extract($bill);
                                $ttdh =get_ttdh($order_status);
                                echo '
                                <tr>
                              <td>' . $order_id . '</td>
                              <td>' . $order_created_at . '</td>
                              <td>' . $ttdh . '</td>
                              <td>' . $order_total . '</td>
                              <td><a href="index.php?url=myBill&idBill=' . $order_id . '" class="check-btn sqr-btn ">View</a></td>
                            </tr>
                                ';
                              }
                            
                            ?>
                          
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="download" role="tabpanel" aria-labelledby="download-tab">
                    <div class="myaccount-content">
                      <h3>Downloads</h3>
                      <div class="myaccount-table table-responsive text-center">
                        <table class="table table-bordered">
                          <thead class="thead-light">
                            <tr>
                              <th>Product</th>
                              <th>Date</th>
                              <th>Expire</th>
                              <th>Download</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Haven - Free Real Estate PSD Template</td>
                              <td>Aug 22, 2022</td>
                              <td>Yes</td>
                              <td><a href="#/" class="check-btn sqr-btn"><i class="fa fa-cloud-download"></i> Download
                                  File</a></td>
                            </tr>
                            <tr>
                              <td>HasTech - Profolio Business Template</td>
                              <td>Sep 12, 2022</td>
                              <td>Never</td>
                              <td><a href="#/" class="check-btn sqr-btn"><i class="fa fa-cloud-download"></i> Download
                                  File</a></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="payment-method" role="tabpanel" aria-labelledby="payment-method-tab">
                    <div class="myaccount-content">
                      <h3>Payment Method</h3>
                      <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="address-edit" role="tabpanel" aria-labelledby="address-edit-tab">
                    <div class="myaccount-content">
                      <h3>Billing Address</h3>
                      <address>
                        <p><strong>Alex Tuntuni</strong></p>
                        <p>1355 Market St, Suite 900 <br>
                          San Francisco, CA 94103</p>
                        <p>Mobile: (123) 456-7890</p>
                      </address>
                      <a href="#/" class="check-btn sqr-btn"><i class="fa fa-edit"></i> Edit Address</a>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="account-info" role="tabpanel" aria-labelledby="account-info-tab">
                    <div class="myaccount-content">
                      <h3>Account Details</h3>
                      <div class="account-details-form">
                        <form action="#">
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="single-input-item">
                                <label for="first-name" class="required">First Name</label>
                                <input type="text" id="first-name" />
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="single-input-item">
                                <label for="last-name" class="required">Last Name</label>
                                <input type="text" id="last-name" />
                              </div>
                            </div>
                          </div>
                          <div class="single-input-item">
                            <label for="display-name" class="required">Display Name</label>
                            <input type="text" id="display-name" />
                          </div>
                          <div class="single-input-item">
                            <label for="email" class="required">Email Addres</label>
                            <input type="email" id="email" />
                          </div>
                          <fieldset>
                            <legend>Password change</legend>
                            <div class="single-input-item">
                              <label for="current-pwd" class="required">Current Password</label>
                              <input type="password" id="current-pwd" />
                            </div>
                            <div class="row">
                              <div class="col-lg-6">
                                <div class="single-input-item">
                                  <label for="new-pwd" class="required">New Password</label>
                                  <input type="password" id="new-pwd" />
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="single-input-item">
                                  <label for="confirm-pwd" class="required">Confirm Password</label>
                                  <input type="password" id="confirm-pwd" />
                                </div>
                              </div>
                            </div>
                          </fieldset>
                          <div class="single-input-item">
                            <button class="check-btn sqr-btn">Save Changes</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--== End My Account Wrapper ==-->
</main>