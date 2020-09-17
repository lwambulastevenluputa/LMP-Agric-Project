<<<<<<< HEAD
<?php
    session_start();
    include 'views/layout/header_v2.php';
    include 'views/components/slider2.php';
?>
    <div class="container-fluid top-padding-50">
        <div id="message"></div>
        <div class="row mt-4 pb-3">
            <div class="col-lg-2">
                <?php include 'views/layout/aside-cat.php'; ?>
            </div>

            <div class="col-sm-10 mb-4">
                    <h2 id="textChange" class="title text-center">Featured Items</h2>
                    <div class="text-center">
                        <!-- <img src="images/loader.gif" alt="" id="loader" width="200" style="display: none;"> -->
                        <p id="loader" style="display: none;">Loading....</p>
                    </div>
                    <div class="row" id="result">           
                        <?php 
                            include 'database/db_connection.php';
                            $stmt = $conn->prepare("SELECT * FROM products");
                            $stmt->execute();
                            $result = $stmt->get_result();
                            while($row = $result->fetch_assoc()): ?>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div id="product" class="product-image-wrapper">
                                <div class="single-product">
                                    <div class="productinfo text-center">
                                        <a href="product_details.php?id=<?php echo $row['id'] ?>"><img src="<?= $row['product_image'] ?>" alt="" class="card-img-top" height="250"></a>
                                        <h2>ZMW <?= number_format($row['product_price'],2) ?></h2>
                                        <p class="mb-1"><?= $row['product_name'] ?></p>
                                        <p class="text-success mb-1"><?= $row['product_seller'] ?></p>
                                    </div>
                                    <div class="p-2">
                                        <form action="" class="form-submit">
                                            <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                                            <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                                            <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                                            <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                                            <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                                            <input type="hidden" class="currency" value="<?= $row['currency'] ?>">
                                            <!-- <a href="" class="btn btn-default add-to-cart addItemBtn text-center"><i class="fas fa-cart-plus"></i>Add to cart</a> -->
                                            <button class="btn btn-block add-to-cart addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="choose">
									<ul class="unstyled d-flex p-2 mb-0">
										<li class="mr-auto"><a href="#"><i class="fa fa-plus-square"></i> Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i> Add to compare</a></li>
									</ul>
								</div>
                            </div>
                        </div>
                        <?php endwhile; ?>

                    </div><!-- End Row -->
            </div>
            
        </div>
    </div>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
    <!-- JS Script to show the number of items in user's cart -->
    <script src="assets/js/num_cart_items.js"></script>
    <script src="assets/js/product_filter.js"></script>

=======
<?php
    session_start();
    include 'views/layout/header_v2.php';
    include 'views/components/slider2.php';
?>
    <div class="container-fluid top-padding-50">
        <div id="message"></div>
        <div class="row mt-4 pb-3">
            <div class="col-lg-2">
                <?php include 'views/layout/aside-cat.php'; ?>
            </div>

            <div class="col-sm-10 mb-4">
                    <h2 id="textChange" class="title text-center">Featured Items</h2>
                    <div class="text-center">
                        <!-- <img src="images/loader.gif" alt="" id="loader" width="200" style="display: none;"> -->
                        <p id="loader" style="display: none;">Loading....</p>
                    </div>
                    <div class="row" id="result">           
                        <?php 
                            include 'database/db_connection.php';
                            $stmt = $conn->prepare("SELECT * FROM products");
                            $stmt->execute();
                            $result = $stmt->get_result();
                            while($row = $result->fetch_assoc()): ?>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div id="product" class="product-image-wrapper">
                                <div class="single-product">
                                    <div class="productinfo text-center">
                                        <a href="product_details.php?id=<?php echo $row['id'] ?>"><img src="<?= $row['product_image'] ?>" alt="" class="card-img-top" height="250"></a>
                                        <h2>ZMW <?= number_format($row['product_price'],2) ?></h2>
                                        <p class="mb-1"><?= $row['product_name'] ?></p>
                                        <p class="text-success mb-1"><?= $row['product_seller'] ?></p>
                                    </div>
                                    <div class="p-2">
                                        <form action="" class="form-submit">
                                            <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                                            <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                                            <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                                            <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                                            <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                                            <input type="hidden" class="currency" value="<?= $row['currency'] ?>">
                                            <!-- <a href="" class="btn btn-default add-to-cart addItemBtn text-center"><i class="fas fa-cart-plus"></i>Add to cart</a> -->
                                            <button class="btn btn-block add-to-cart addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to cart</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="choose">
									<ul class="unstyled d-flex p-2 mb-0">
										<li class="mr-auto"><a href="#"><i class="fa fa-plus-square"></i> Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i> Add to compare</a></li>
									</ul>
								</div>
                            </div>
                        </div>
                        <?php endwhile; ?>

                    </div><!-- End Row -->
            </div>
            
        </div>
    </div>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
    <!-- JS Script to show the number of items in user's cart -->
    <script src="assets/js/num_cart_items.js"></script>
    <script src="assets/js/product_filter.js"></script>

>>>>>>> 11296a39b7585d5fef0f5988d7049f03851232be
<?php include 'views/layout/footer_v2.php'; ?>