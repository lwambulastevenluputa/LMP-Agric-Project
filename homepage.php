<<<<<<< HEAD
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Mango Store</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;500&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" media="all" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.css">

    <script src="https://kit.fontawesome.com/5255961736.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&family=Raleway:wght@500&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap" rel="stylesheet">

    <script src="jquery-3.5.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

    <script type="text/javascript" src="https://cdn.rawgit.com/prashantchaudhary/ddslick/master/jquery.ddslick.min.js">
    </script>

    <!-- <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="style.css">
    <style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Oswald', sans-serif;
        padding-bottom: 50px;
    }

    nav {
        width: 100%;
        background-color: #00C853;
        padding: 5px 15px;
        display: flex;
        border-bottom: 1px solid #BDBDBD;

    }

    nav ul {
        margin: 0;
        padding: 0;
        display: flex;
    }

    nav li {
        list-style-type: none;
        margin: 0 15px;
        font-size: 13px;
        font-family: 'Oswald', sans-serif;

    }

    nav a {
        text-decoration: none;
        color: #fff;

    }

    nav a:hover {
        color: #fff;

    }

    nav button {
        border-radius: 5px;
        border: none;
        outline: none;
        font-family: 'Oswald', sans-serif;
        font-size: 17px;
    }

    #cancel-menu {
        background-color: #F0F0E9;
        display: none;
    }

    h3 {
        font-size: 35px;
        line-height: 0.5;
        font-weight: 200;
    }

    #category-cards {
        padding: 0 10%;
    }

    .card h3 {
        font-size: 20px;
        line-height: 1;
    }


    #ul-1-div {
        display: flex;
    }

    #ul-2-div {
        display: flex;

    }

    nav input {
        width: 350px;
        height: 35px;
        outline: none;
        border: 1px solid #BDBDBD;
        padding-left: 10px;
        border-radius: 5px;
    }

    #navbarSupportedContent a {
        color: #fff;
        font-size: 15px;
    }

    /*change the layout of the navigation bar for all the screens 
        that have a width less or equal than 500px*/

    @media only screen and (max-width: 700px) {

        nav {
            padding-left: 5px;
        }

        #ul-1-div {
            display: none;
        }

        #ul-2-div {
            display: none;
        }

        /*shows elements in a column*/
        nav ul {
            flex-direction: column;
        }

        /* deletes margin on top or bottom of the a tag*/
        nav li {
            margin: 3px 0;
        }

        nav li:hover {
            background-color: #fbfbfb;
        }

        /* makes sure that the a tag will take the entire screen*/
        nav a {
            display: block;
        }

        nav button {
            width: 120px;
            outline: none;

        }

        nav input {
            width: 200px;
        }


        /* deletes margin on top or bottom of the a tag*/

        #cancel-menu {
            display: block;
            cursor: pointer;
            text-align: left;
            outline: none;
            width: 20px;
        }
    }

    * {
        box-sizing: border-box;
    }

    /* Float four columns side by side */
    .column {
        float: left;
        width: 20%;
        padding: 0 2%;
    }

    /* Remove extra left and right margins, due to padding */


    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    @media screen and (max-width: 700px) {
        .column {
            width: 50%;
            display: block;
            margin-bottom: 20px;
        }
    }

    /* Responsive columns */
    @media screen and (max-width: 500px) {
        .column {
            width: 100%;
            display: block;
            margin-bottom: 20px;
        }
    }


    /* Style the counter cards */
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        padding: 16px;
        border: none;
        border-radius: 10px;
        text-align: center;
        background-color: #CDDC39;
        transition: transform .8s;
    }

    .card:hover {
        -ms-transform: scale(1.1);
        /* IE 9 */
        -webkit-transform: scale(1.1);
        /* Safari 3-8 */
        transform: scale(1.1);
    }

    #dashboard-menu {
        float: left;
        width: 20%;
        margin: 5% 2%;
        border: 1px solid black;
        height: 400px;
        background-color: #f1f1f1;
    }

    #category-cards img {
        width: 60%;
        align-self: center;
    }
    </style>
</head>
<!--/head-->

<body>



    <body>
        <nav style="justify-content:space-between;">
            <button id="cancel-menu"> 🞬 </button>
            <div id="ul-1-div">
                <ul id="ul-1">

                    <li><a href="#"><i class="fa fa-phone"></i> +260 975 651 046</a></li>
                    <li><a href="#"><i class="fa fa-envelope"></i> info@lendmepay.com</a></li>
                </ul>
            </div>
            <div id="ul-2-div">
                <ul>
                    <!-- <li><a href="#"><i class="fab fa-facebook"></i></a></li> -->
                    <!-- <li><a href="#"><i class="fab fa-twitter"></i></a></li> -->
                    <!-- <li><a href="#"><i class="fab fa-linkedin"></i></a></li> -->
                    <li><a class="link" href="#">Buy</a></li>
                    <li><a class="link" href="#">Bid</a></li>
                    <li><a class="link" href="#">Hire</a></li>
                    <li><a class="link" href="#">Sell</a></li>
                    <li><a class="link" href="#">Watchlist</a></li>
                    <li><a href="#"><i class="far fa-user-circle"></i></a></li>
                    <li><a href="#"><i class="far fa-bell"></i></li>
                    <li class="cart-icon"><a href="cart.php"><i class="fas fa-shopping-cart "></i><span id="cart-item"
                                class="badge" style="color: #fff; background-color: #FE980F;"></span></a></li>
                </ul>
            </div>



        </nav>
        <nav class="navbar navbar-expand-lg navbar-light" style="display: flex; background:#69f0ae">
            <div class="logo" style="margin-right: auto;">
                <a class="navbar-brand" href="index.php"><img src="img/Logo.png" id="nav-logo" alt="" /></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="search__box">
                <!-- <input type="text" placeholder="Search"/> -->
                <form class="form-inline my-2 my-lg-0">
                    <input type="search" placeholder="Search" aria-label="Search">
                    <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
                </form>
            </div>

            <div class="" id="navbarSupportedContent">

                <ul class="navbar-nav collapse navbar-collapse">
                    <!-- <li class="nav-item active">
                          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li> -->
                    <li class="nav-item">
                        <a class="nav-link active" href="#">All Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Market Prices</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Special Offers
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Fixed Products</a>
                            <a class="dropdown-item" href="#">Best Offer Products</a>
                            <a class="dropdown-item" href="#">Auction Products</a>
                            <!-- <div class="dropdown-divider"></div> -->
                            <a class="dropdown-item" href="#">Promotion Products</a>
                        </div>
                    </li>
                    <!-- <li class="nav-item">
                          <a class="nav-link" href="#">Sell</a>
                        </li> -->
                    <!-- <li class="nav-item">
                          <a class="nav-link" href="#">Place Command</a>
                        </li> -->
                    <!-- <li class="nav-item">
                          <a class="nav-link" href="#">Blog</a>
                        </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <!-- <li class="nav-item">
                          <a class="nav-link disabled" href="#">Disabled</a>
                        </li> -->
                </ul>
                <!-- <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                      </form> -->
            </div>
        </nav>
        <script>
        /* only execute this script when the document is ready */
        $(document).ready(function() {
            /* function called when you click of the button */
            $("#cancel-menu").click(function() {

                /* this if else to change the text in the button */
                if ($("#cancel-menu").text() == "☰") {
                    $("#cancel-menu").text("🞬");
                } else {
                    $("#cancel-menu").text("☰");
                }

                /* this function toggle the visibility of our "li" elements */
                $("nav li").toggle("slow");
                $("nav #log-in").toggle("slow");
            });
        });
        </script>
        <div class="container">
            <ul class="unstyled categories-link d-flex justify-content-center"
                style="font-family: 'Oswald', sans-serif;">
                <li><a href="#">Saved</a></li>
                <li><a href="#">Fruit & Veg</a></li>
                <li><a href="#">Livestock</a></li>
                <li><a href="#">Poultry</a></li>
                <li><a href="#">Fish</a></li>
            </ul>
            <!-- <div class="row">
			<div class="col-sm-9">
                <div class="shop-menu pull-left">
					<ul class="nav">
						<li><a href="#"><i class="fa fa-user"></i> Account</a></li>
						<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
						<li><a href="checkout.php"><i class="fa fa-crosshairs"></i> Checkout</a></li>
						<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
						<li><a href="login.php"><i class="fa fa-lock"></i> Login</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="search_box pull-right">
					<input type="text" placeholder="Search"/>
				</div>
			</div>
		</div> -->
        </div>

        <?php
        include 'views/components/slider2.php';
        ?>

        <div align="center" style="margin-top:50px;">
            <h3>Categories</h3>
        </div>
        <br>

        <div id="category-cards">
            <div class="row">
                <div class="column mb-4">
                    <div class="card">
                        <h3>Fruit & Veg</h3>
                        <img src="img/carrot-64.png" />
                    </div>
                </div>

                <div class="column mb-4">
                    <div class="card">
                        <h3>Poultry</h3>
                        <img src="img/chicken-2-64.png" />
                    </div>
                </div>

                <div class="column mb-4">
                    <div class="card">
                        <h3>Beef Products</h3>
                        <img src="img/cow-2-64.png" />
                    </div>
                </div>

                <div class="column mb-4">
                    <div class="card">
                        <h3>Pork Products</h3>
                        <img src="img/pig-4-64.png" />
                    </div>
                </div>

                <div class="column mb-4">
                    <div class="card">
                        <h3>Fish</h3>
                        <img src="img/fish-7-64.png" />
                    </div>
                </div>

                <div class="column mb-4">
                    <div class="card">
                        <h3>Goat Products</h3>
                        <img src="img/goat.png" />
                    </div>
                </div>

                <div class="column mb-4">
                    <div class="card">
                        <h3>Rabits</h3>
                        <img src="img/rabit.png" />
                    </div>
                </div>

                <div class="column mb-4">
                    <div class="card">
                        <h3>Machinary</h3>
                        <img src="img/tractor-64.png" />
                    </div>
                </div>

                <div class="column mb-4">
                    <div class="card">
                        <h3>Agro Dealers</h3>
                        <img src="img/shop-64.png" />
                    </div>
                </div>

                <div class="column mb-4">
                    <div class="card">
                        <h3>Dairy Products</h3>
                        <img src="img/milk-2-64.png" />
                    </div>
                </div>
            </div>
        </div>

        <style>
        #veg-scroll {
            display: flex;
            overflow-x: scroll;
            max-width: 2080px;
            width: 90%;
            border-top: 1px solid #CDDC39;
            border-bottom: 1px solid #CDDC39;
            margin-top: 20px;
        }

        #veg-scroll img {
            margin: 15px;
            height: 200px;
            width: 200px;
            cursor: pointer;
        }

        #veg-scroll::-webkit-scrollbar {
            height: 3px;
        }

        #veg-scroll::-webkit-scrollbar-track {

            background: #CDDC39;
        }

        #veg-scroll::-webkit-scrollbar-thumb {
            background: #4CAF50;
        }
        </style>

        <div style="margin-top:50px; padding-left: 10%;">
            <h3>Vegtables</h3>
        </div>
        <div class="container" id="veg-scroll">
            <img src="img/agri-products/1800x1200_benefits_of_cabbage_slideshow.jpg" alt="Bhutan">
            <img src="img/agri-products/Carrot_324x324.jpg" alt="Bhutan">
            <img src="img/agri-products/cucumbers.jpg" alt="Bhutan">
            <img src="img/agri-products/rape_vegetables_bundle.png" alt="Bhutan">
            <img src="img/agri-products/tomatoes.jpg" alt="Bhutan">
            <img src="img/agri-products/spinach_health_benefits.jpg" alt="Bhutan">
            <img src="img/agri-products/onion_per_kg.jpg" alt="Bhutan">
            <img src="img/agri-products/cauliflower.jpg" alt="Bhutan">
            <img src="img/agri-products/bell-peppers-multi.jpg" alt="Bhutan">
            <img src="img/agri-products/beetroot_product.jpg" alt="Bhutan">
            <img src="img/agri-products/cayenne_pepper.jpg" alt="Bhutan">
            <img src="img/agri-products/delta_potatoes.jpg" alt="Bhutan">
            <img src="img/agri-products/garlic.jpg" alt="Bhutan">
            <img src="img/agri-products/sweet-potatoes2.jpg" alt="Bhutan">
        </div>

        <div style="margin-top:50px; padding-left: 10%;">
            <h3>Fruits</h3>
        </div>
        <div class="container" id="veg-scroll">
            <img src="img/agri-products/40berries.jpg" alt="Bhutan">
            <img src="img/agri-products/table_grapes.jpg" alt="Bhutan">
            <img src="img/agri-products/bananas_health_benefits.jpg" alt="Bhutan">
            <img src="img/agri-products/Apples864x573.jpg" alt="Bhutan">
            <img src="img/agri-products/crimson_sweet_watermelon_seeds.jpg" alt="Bhutan">
            <img src="img/agri-products/pinapple_display.jpg" alt="Bhutan">
            <img src="img/agri-products/oranges.png" alt="Bhutan">
            <img src="img/agri-products/japanese_oranges.jpg" alt="Bhutan">
            <img src="img/agri-products/citrus_fruits.jpg" alt="Bhutan">
            <img src="img/agri-products/ginger-benefits.jpg" alt="Bhutan">
            <img src="img/agri-products/mangoes.jpg" alt="Bhutan">
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- JS Script to show the number of items in user's cart -->
        <script src="assets/js/num_cart_items.js"></script>
        <script src="assets/js/product_filter.js"></script>

        <?php include 'views/layout/footer_v2.php'; ?>
    </body>

</html>
=======
<html lang="en">

<head>

	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Mango Store</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;500&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" media="all" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.css">

    <script src="https://kit.fontawesome.com/5255961736.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&family=Raleway:wght@500&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap" rel="stylesheet">

    <script src="jquery-3.5.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

    <script type="text/javascript" src="https://cdn.rawgit.com/prashantchaudhary/ddslick/master/jquery.ddslick.min.js">
    </script>

    <!-- <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="style.css">
    <style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Oswald', sans-serif;
        padding-bottom: 50px;
    }

    nav {
        width: 100%;
        background-color: #00C853;
        padding: 5px 15px;
        display: flex;
        border-bottom: 1px solid #BDBDBD;

    }

    nav ul {
        margin: 0;
        padding: 0;
        display: flex;
    }

    nav li {
        list-style-type: none;
        margin: 0 15px;
        font-size: 13px;
        font-family: 'Oswald', sans-serif;

    }

    nav a {
        text-decoration: none;
        color: #fff;

    }

    nav a:hover {
        color: #fff;

    }

    nav button {
        border-radius: 5px;
        border: none;
        outline: none;
        font-family: 'Oswald', sans-serif;
        font-size: 17px;
    }

    #cancel-menu {
        background-color: #F0F0E9;
        display: none;
    }

    h3 {
        font-size: 35px;
        line-height: 0.5;
        font-weight: 200;
    }

    #category-cards {
        padding: 0 10%;
    }

    .card h3 {
        font-size: 20px;
        line-height: 1;
    }


    #ul-1-div {
        display: flex;
    }

    #ul-2-div {
        display: flex;

    }

    nav input {
        width: 350px;
        height: 35px;
        outline: none;
        border: 1px solid #BDBDBD;
        padding-left: 10px;
        border-radius: 5px;
    }

    #navbarSupportedContent a {
        color: #fff;
        font-size: 15px;
    }

    /*change the layout of the navigation bar for all the screens 
        that have a width less or equal than 500px*/

    @media only screen and (max-width: 700px) {

        nav {
            padding-left: 5px;
        }

        #ul-1-div {
            display: none;
        }

        #ul-2-div {
            display: none;
        }

        /*shows elements in a column*/
        nav ul {
            flex-direction: column;
        }

        /* deletes margin on top or bottom of the a tag*/
        nav li {
            margin: 3px 0;
        }

        nav li:hover {
            background-color: #fbfbfb;
        }

        /* makes sure that the a tag will take the entire screen*/
        nav a {
            display: block;
        }

        nav button {
            width: 120px;
            outline: none;

        }

        nav input {
            width: 200px;
        }


        /* deletes margin on top or bottom of the a tag*/

        #cancel-menu {
            display: block;
            cursor: pointer;
            text-align: left;
            outline: none;
            width: 20px;
        }
    }

    * {
        box-sizing: border-box;
    }

    /* Float four columns side by side */
    .column {
        float: left;
        width: 20%;
        padding: 0 2%;
    }

    /* Remove extra left and right margins, due to padding */


    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    @media screen and (max-width: 700px) {
        .column {
            width: 50%;
            display: block;
            margin-bottom: 20px;
        }
    }

    /* Responsive columns */
    @media screen and (max-width: 500px) {
        .column {
            width: 100%;
            display: block;
            margin-bottom: 20px;
        }
    }


    /* Style the counter cards */
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        padding: 16px;
        border: none;
        border-radius: 10px;
        text-align: center;
        background-color: #CDDC39;
        transition: transform .8s;
    }

    .card:hover {
        -ms-transform: scale(1.1);
        /* IE 9 */
        -webkit-transform: scale(1.1);
        /* Safari 3-8 */
        transform: scale(1.1);
    }

    #dashboard-menu {
        float: left;
        width: 20%;
        margin: 5% 2%;
        border: 1px solid black;
        height: 400px;
        background-color: #f1f1f1;
    }

    #category-cards img {
        width: 60%;
        align-self: center;
    }
    </style>
</head>
<!--/head-->

<body>



    <body>
        <nav style="justify-content:space-between;">
            <button id="cancel-menu"> 🞬 </button>
            <div id="ul-1-div">
                <ul id="ul-1">

                    <li><a href="#"><i class="fa fa-phone"></i> +260 975 651 046</a></li>
                    <li><a href="#"><i class="fa fa-envelope"></i> info@lendmepay.com</a></li>
                </ul>
            </div>
            <div id="ul-2-div">
                <ul>
                    <!-- <li><a href="#"><i class="fab fa-facebook"></i></a></li> -->
                    <!-- <li><a href="#"><i class="fab fa-twitter"></i></a></li> -->
                    <!-- <li><a href="#"><i class="fab fa-linkedin"></i></a></li> -->
                    <li><a class="link" href="#">Buy</a></li>
                    <li><a class="link" href="#">Bid</a></li>
                    <li><a class="link" href="#">Hire</a></li>
                    <li><a class="link" href="#">Sell</a></li>
                    <li><a class="link" href="#">Watchlist</a></li>
                    <li><a href="#"><i class="far fa-user-circle"></i></a></li>
                    <li><a href="#"><i class="far fa-bell"></i></li>
                    <li class="cart-icon"><a href="cart.php"><i class="fas fa-shopping-cart "></i><span id="cart-item"
                                class="badge" style="color: #fff; background-color: #FE980F;"></span></a></li>
                </ul>
            </div>



        </nav>
        <nav class="navbar navbar-expand-lg navbar-light" style="display: flex; background:#69f0ae">
            <div class="logo" style="margin-right: auto;">
                <a class="navbar-brand" href="index.php"><img src="img/Logo.png" id="nav-logo" alt="" /></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="search__box">
                <!-- <input type="text" placeholder="Search"/> -->
                <form class="form-inline my-2 my-lg-0">
                    <input type="search" placeholder="Search" aria-label="Search">
                    <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
                </form>
            </div>

            <div class="" id="navbarSupportedContent">

                <ul class="navbar-nav collapse navbar-collapse">
                    <!-- <li class="nav-item active">
                          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li> -->
                    <li class="nav-item">
                        <a class="nav-link active" href="#">All Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Market Prices</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Special Offers
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Fixed Products</a>
                            <a class="dropdown-item" href="#">Best Offer Products</a>
                            <a class="dropdown-item" href="#">Auction Products</a>
                            <!-- <div class="dropdown-divider"></div> -->
                            <a class="dropdown-item" href="#">Promotion Products</a>
                        </div>
                    </li>
                    <!-- <li class="nav-item">
                          <a class="nav-link" href="#">Sell</a>
                        </li> -->
                    <!-- <li class="nav-item">
                          <a class="nav-link" href="#">Place Command</a>
                        </li> -->
                    <!-- <li class="nav-item">
                          <a class="nav-link" href="#">Blog</a>
                        </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <!-- <li class="nav-item">
                          <a class="nav-link disabled" href="#">Disabled</a>
                        </li> -->
                </ul>
                <!-- <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                      </form> -->
            </div>
        </nav>
        <script>
        /* only execute this script when the document is ready */
        $(document).ready(function() {
            /* function called when you click of the button */
            $("#cancel-menu").click(function() {

                /* this if else to change the text in the button */
                if ($("#cancel-menu").text() == "☰") {
                    $("#cancel-menu").text("🞬");
                } else {
                    $("#cancel-menu").text("☰");
                }

                /* this function toggle the visibility of our "li" elements */
                $("nav li").toggle("slow");
                $("nav #log-in").toggle("slow");
            });
        });
        </script>
        <div class="container">
            <ul class="unstyled categories-link d-flex justify-content-center"
                style="font-family: 'Oswald', sans-serif;">
                <li><a href="#">Saved</a></li>
                <li><a href="#">Fruit & Veg</a></li>
                <li><a href="#">Livestock</a></li>
                <li><a href="#">Poultry</a></li>
                <li><a href="#">Fish</a></li>
            </ul>
            <!-- <div class="row">
			<div class="col-sm-9">
                <div class="shop-menu pull-left">
					<ul class="nav">
						<li><a href="#"><i class="fa fa-user"></i> Account</a></li>
						<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
						<li><a href="checkout.php"><i class="fa fa-crosshairs"></i> Checkout</a></li>
						<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
						<li><a href="login.php"><i class="fa fa-lock"></i> Login</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="search_box pull-right">
					<input type="text" placeholder="Search"/>
				</div>
			</div>
		</div> -->
        </div>

        <?php
        include 'views/components/slider2.php';
        ?>

        <div align="center" style="margin-top:50px;">
            <h3>Categories</h3>
        </div>
        <br>

        <div id="category-cards">
            <div class="row">
                <div class="column mb-4">
                    <div class="card">
                        <h3>Fruit & Veg</h3>
                        <img src="img/carrot-64.png" />
                    </div>
                </div>

                <div class="column mb-4">
                    <div class="card">
                        <h3>Poultry</h3>
                        <img src="img/chicken-2-64.png" />
                    </div>
                </div>

                <div class="column mb-4">
                    <div class="card">
                        <h3>Beef Products</h3>
                        <img src="img/cow-2-64.png" />
                    </div>
                </div>

                <div class="column mb-4">
                    <div class="card">
                        <h3>Pork Products</h3>
                        <img src="img/pig-4-64.png" />
                    </div>
                </div>

                <div class="column mb-4">
                    <div class="card">
                        <h3>Fish</h3>
                        <img src="img/fish-7-64.png" />
                    </div>
                </div>

                <div class="column mb-4">
                    <div class="card">
                        <h3>Goat Products</h3>
                        <img src="img/goat.png" />
                    </div>
                </div>

                <div class="column mb-4">
                    <div class="card">
                        <h3>Rabits</h3>
                        <img src="img/rabit.png" />
                    </div>
                </div>

                <div class="column mb-4">
                    <div class="card">
                        <h3>Machinary</h3>
                        <img src="img/tractor-64.png" />
                    </div>
                </div>

                <div class="column mb-4">
                    <div class="card">
                        <h3>Agro Dealers</h3>
                        <img src="img/shop-64.png" />
                    </div>
                </div>

                <div class="column mb-4">
                    <div class="card">
                        <h3>Dairy Products</h3>
                        <img src="img/milk-2-64.png" />
                    </div>
                </div>
            </div>
        </div>

        <style>
        #veg-scroll {
            display: flex;
            overflow-x: scroll;
            max-width: 2080px;
            width: 90%;
            border-top: 1px solid #CDDC39;
            border-bottom: 1px solid #CDDC39;
            margin-top: 20px;
        }

        #veg-scroll img {
            margin: 15px;
            height: 200px;
            width: 200px;
            cursor: pointer;
        }

        #veg-scroll::-webkit-scrollbar {
            height: 3px;
        }

        #veg-scroll::-webkit-scrollbar-track {

            background: #CDDC39;
        }

        #veg-scroll::-webkit-scrollbar-thumb {
            background: #4CAF50;
        }
        </style>

        <div style="margin-top:50px; padding-left: 10%;">
            <h3>Vegtables</h3>
        </div>
        <div class="container" id="veg-scroll">
            <img src="img/agri-products/1800x1200_benefits_of_cabbage_slideshow.jpg" alt="Bhutan">
            <img src="img/agri-products/Carrot_324x324.jpg" alt="Bhutan">
            <img src="img/agri-products/cucumbers.jpg" alt="Bhutan">
            <img src="img/agri-products/rape_vegetables_bundle.png" alt="Bhutan">
            <img src="img/agri-products/tomatoes.jpg" alt="Bhutan">
            <img src="img/agri-products/spinach_health_benefits.jpg" alt="Bhutan">
            <img src="img/agri-products/onion_per_kg.jpg" alt="Bhutan">
            <img src="img/agri-products/cauliflower.jpg" alt="Bhutan">
            <img src="img/agri-products/bell-peppers-multi.jpg" alt="Bhutan">
            <img src="img/agri-products/beetroot_product.jpg" alt="Bhutan">
            <img src="img/agri-products/cayenne_pepper.jpg" alt="Bhutan">
            <img src="img/agri-products/delta_potatoes.jpg" alt="Bhutan">
            <img src="img/agri-products/garlic.jpg" alt="Bhutan">
            <img src="img/agri-products/sweet-potatoes2.jpg" alt="Bhutan">
        </div>

        <div style="margin-top:50px; padding-left: 10%;">
            <h3>Fruits</h3>
        </div>
        <div class="container" id="veg-scroll">
            <img src="img/agri-products/40berries.jpg" alt="Bhutan">
            <img src="img/agri-products/table_grapes.jpg" alt="Bhutan">
            <img src="img/agri-products/bananas_health_benefits.jpg" alt="Bhutan">
            <img src="img/agri-products/Apples864x573.jpg" alt="Bhutan">
            <img src="img/agri-products/crimson_sweet_watermelon_seeds.jpg" alt="Bhutan">
            <img src="img/agri-products/pinapple_display.jpg" alt="Bhutan">
            <img src="img/agri-products/oranges.png" alt="Bhutan">
            <img src="img/agri-products/japanese_oranges.jpg" alt="Bhutan">
            <img src="img/agri-products/citrus_fruits.jpg" alt="Bhutan">
            <img src="img/agri-products/ginger-benefits.jpg" alt="Bhutan">
            <img src="img/agri-products/mangoes.jpg" alt="Bhutan">
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- JS Script to show the number of items in user's cart -->
        <script src="assets/js/num_cart_items.js"></script>
        <script src="assets/js/product_filter.js"></script>

        <?php include 'views/layout/footer_v2.php'; ?>
    </body>

</html>
>>>>>>> 11296a39b7585d5fef0f5988d7049f03851232be
