<main class="main-content">
    <!--== Start Page Header Area Wrapper ==-->
    <div class="page-header-area" data-bg-img="../public/img/photos/bg3.webp">
        <div class="container pt--0 pb--0">
            <div class="row">
                <div class="col-12">
                    <div class="page-header-content">
                        <h2 class="title" data-aos="fade-down" data-aos-duration="1000">Product Page</h2>
                        <nav class="breadcrumb-area" data-aos="fade-down" data-aos-duration="1200">
                            <ul class="breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li class="breadcrumb-sep">//</li>
                                <li>Product Page</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Product Area Wrapper ==-->
    <section class="product-area product-default-area">
        <div class="container">
            <div class="row flex-xl-row-reverse justify-content-between">
                <div class="col-xl-9">
                    <div class="row">
                        <div class="col-12">
                            <div class="shop-top-bar">
                                <!-- <div class="shop-top-left">
                                    <p class="pagination-line"><a href="shop.html">12</a> Product Found of <a href="shop.html">30</a></p>
                                </div> -->
                                <div class="shop-top-center">
                                    <nav class="product-nav">
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <button class="nav-link active" id="nav-grid-tab" data-bs-toggle="tab" data-bs-target="#nav-grid" type="button" role="tab" aria-controls="nav-grid" aria-selected="true"><i class="fa fa-th"></i></button>
                                        </div>
                                    </nav>
                                </div>
                                <div class="shop-top-right">
                                    <div class="shop-sort">
                                        <span>Sort By :</span>
                                        <select class="form-select" aria-label="Sort select example">
                                            <option selected>Default</option>
                                            <option value="1">Popularity</option>
                                            <option value="2">Average Rating</option>
                                            <option value="3">Newsness</option>
                                            <option value="4">Price Low to High</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-grid" role="tabpanel" aria-labelledby="nav-grid-tab">
                                    <div class="row">

                                        <?php foreach ($products as $pro) {  ?>

                                            <div class="col-sm-6 col-lg-4">
                                                <!--== Start Product Item ==-->
                                                <div class="product-item">
                                                    <div class="inner-content">
                                                        <div class="product-thumb">
                                                            <a href="index.php?url=detail-product&id=<?= $pro['product_id'] ?>">
                                                                <img src="<?= $pro['product_image'] ?>" width="270" height="274" alt="Image-HasTech">
                                                            </a>
                                                            <div class="product-action">
                                                                <button type="button" class="btn-product-quick-view-open">
                                                                    <i class="fa fa-arrows"></i>
                                                                </button>
                                                            </div>
                                                            <a class="banner-link-overlay" href="shop.html"></a>
                                                        </div>
                                                        <div class="product-info">

                                                            <h4 class="title"><a href="index.php?url=detail-product&id=<?= $pro['product_id'] ?>"><?= $pro['product_name'] ?></a></h4>
                                                            <div class="prices">
                                                                <span class="price">$<?= $pro['product_price'] ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--== End prPduct Item ==-->
                                            </div>

                                        <?php } ?>

                                        <div class="col-12">
                                            <div class="pagination-items">
                                                <ul class="pagination justify-content-end mb--0">
                                                    <li><a class="active" href="shop.html">1</a></li>
                                                    <li><a href="shop-four-columns.html">2</a></li>
                                                    <li><a href="shop-three-columns.html">3</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-list" role="tabpanel" aria-labelledby="nav-list-tab">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="pagination-items">
                                                <ul class="pagination justify-content-end mb--0">
                                                    <li><a class="active" href="shop.html">1</a></li>
                                                    <li><a href="shop-four-columns.html">2</a></li>
                                                    <li><a href="shop-three-columns.html">3</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="shop-sidebar">
                        <div class="shop-sidebar-category">
                            <h4 class="sidebar-title">Top Categories</h4>
                            <div class="sidebar-category">
                                <ul class="category-list mb--0">
                                    <?php
                                    if (isset($topCategories) && (is_array($topCategories))) {
                                     foreach ($topCategories as $top) {
                                        extract($top);
                                        $linkdm = "index.php?url=listCategory&idCategory=" . $category_id;
                                        echo '<li><a href="' . $linkdm . '">' . $category_name . ' ( ' . $product_count . ' ) <span></span></a></li>';
                                      }
                                    }
                                    ?>
                                  
                                </ul>
                            </div>
                        </div>

                        <!-- <div class="shop-sidebar-price-range">
                            <h4 class="sidebar-title">Price Filter</h4>
                            <div class="sidebar-price-range">
                                <div id="price-range"></div>
                            </div>
                        </div> -->



                        <div class="shop-sidebar-size">
                            <h4 class="sidebar-title">Size</h4>
                            <div class="sidebar-size">
                                <ul class="size-list">
                                    <li><a href="shop.html">S <span>(6)</span></a></li>
                                    <li><a href="shop.html">M <span>(4)</span></a></li>
                                    <li><a href="shop.html">L <span>(2)</span></a></li>
                                    <li><a href="shop.html">XL <span>(6)</span></a></li>
                                    <li><a href="shop.html">XXL <span>(12)</span></a></li>
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Product Area Wrapper ==-->
</main>