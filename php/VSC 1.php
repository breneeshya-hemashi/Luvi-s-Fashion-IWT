<?php

require "connection.php";
session_start();

if (isset($_SESSION["u"])) {
?>


    <!DOCTYPE html>
    <html>


    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">


        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <link rel="stylesheet" href="../CSS/vsc.CSS1.css">


        <script src="JS/vsc1.JS.js"></script>

        <title>User Account</title>


        <style>
            body {

                background-image: url("../images/ybk.png");

                background-repeat: no-repeat;

                background-attachment: fixed;

                background-size: 100% 100%;

            }
        </style>

    </head>

    <body>

        <body>
            <div id="home_main">
                <div>
                    <div id="header">
                        <div class="logo"></div>
                        <div class="navigation">
                            <div class="nav_main">

                                <div class="nav">
                                    <div class="dropdown">
                                        <button class="dropbtn">Women
                                            <!-- <i class="fa fa-caret-down"></i> -->
                                        </button>
                                        <div class="dropdown-content">
                                            <a href="#">New Arrivals</a>
                                            <a href="#">Casual Wear</a>
                                            <a href="#">Formal Wear</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav">
                                    <div class="dropdown">
                                        <button class="dropbtn">Men
                                            <!-- <i class="fa fa-caret-down"></i> -->
                                        </button>
                                        <div class="dropdown-content">
                                            <a href="#">New Arrivals</a>
                                            <a href="#">Casual Wear</a>
                                            <a href="#">Formal Wear</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav">
                                    <div class="dropdown">
                                        <button class="dropbtn">Baby & Kids
                                            <!-- <i class="fa fa-caret-down"></i> -->
                                        </button>
                                        <div class="dropdown-content">
                                            <a href="#">New Arrivals</a>
                                            <a href="#">Boys' Clothing</a>
                                            <a href="#">Girls' clothing</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav">
                                    <div class="dropdown">
                                        <button class="dropbtn">Homeware
                                            <!-- <i class="fa fa-caret-down"></i> -->
                                        </button>
                                        <div class="dropdown-content">
                                            <a href="#">New Arrivals</a>
                                            <a href="#">Assosiries</a>
                                            <a href="#">Cooking Items</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav">
                                    <div class="dropdown">
                                        <button class="dropbtn">Beauty
                                            <!-- <i class="fa fa-caret-down"></i> -->
                                        </button>
                                        <div class="dropdown-content">
                                            <a href="#">Makeup Items</a>
                                            <a href="#">Perfumes</a>
                                            <a href="#">Bags</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="nav">
                                    <div class="dropdown">
                                        <button class="dropbtn">Other
                                            <!-- <i class="fa fa-caret-down"></i> -->
                                        </button>
                                        <div class="dropdown-content">
                                            <a href="#">New Arrivals</a>
                                            <a href="#">Link 2</a>
                                            <a href="#">Link 3</a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="icon">
                            <div class="icon_div_main">

                                <div class="icon_div1">
                                    <div class="dropdown1">
                                        <button class="dropbtn1">
                                            <!-- <i class="fa fa-caret-down"></i> -->
                                        </button>
                                        <div class="dropdown-content1">
                                            <!-- <a href="#">Link 1</a>
                                            <a href="#">Link 2</a>
                                            <a href="#">Link 3</a> -->
                                            <input type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="icon_div2"></div>
                                <div class="icon_div3">
                                    <div class="dropdown1">
                                        <button class="dropbtn1">
                                            <!-- <i class="fa fa-caret-down"></i> -->
                                        </button>
                                        <div class="dropdown-content1">
                                            <a href="#">Link 1</a>
                                            <a href="#">Link 2</a>
                                            <a href="#">Link 3</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <!--Add a header-->
                <h1> &nbsp;&nbsp;&nbsp;My Account </h1>


                <div class="box1">
                    <center>
                        <img src="../images/user icon.png" alt="user icon" width="100" height="100">
                    </center>
                    <br>
                    <h3 style="text-align:center;">Welcome<br>

                        <input type="text" size="15" value="<?php echo $_SESSION["u"]["first_name"] . " " . $_SESSION["u"]["last_name"] ?>"><br><br>
                    </h3>
                    <br>

                    <!--Buttons-->
                    <center>
                        <button class="test">General</button><br><br>
                        <button class="test">My Order</button><br><br>
                        <button class="test">Messages</button><br><br>
                        <button class="test">Wish List</button><br><br>
                        <button class="test">Favorite Stores</button><br><br>
                        <button class="test">Security</button><br><br>
                    </center>
                </div>
                <br>



                <div class="c">

                    <h2> Personal Details</h2>
                    <br>
                    <h4>
                        <div class="inputdata">
                            <form>



                                <label>Name</label>
                                <input type="text" size="30" required value="<?php echo $_SESSION["u"]["first_name"] . " " . $_SESSION["u"]["last_name"] ?>"><br><br>
                                <label>Email</label>
                                <input type="email" size="30" required value="<?php echo $_SESSION["u"]["email"] ?>"><br><br>
                                <label for="password">Password </label>
                                <input type="text" size="30" required value="<?php echo $_SESSION["u"]["password"] ?>"><br><br>
                                <label>Contact Number</label>
                                <input type="text" size="30" required value="<?php echo $_SESSION["u"]["contact"] ?>"><br><br>





                        </div>
                    </h4>
                    <div class="test">

                        <input type="reset" value="Edit"> &nbsp;
                        <input type="submit" value="Done">

                    </div>
                    </form>

                    <h2> Check Order Status</h2>

                    <h4>22/05/2022 &nbsp;&nbsp;&nbsp;&nbsp; Nike Shoes &nbsp;&nbsp;&nbsp;&nbsp; 7,400 LKR <br><br>
                        22/05/2022 &nbsp;&nbsp;&nbsp;&nbsp; Boss T-Shirt &nbsp;&nbsp;&nbsp;&nbsp; 2,350 LKR <br><br>
                        22/05/2022 &nbsp;&nbsp;&nbsp;&nbsp; Wristwatch &nbsp;&nbsp;&nbsp;&nbsp; 4,200 LKR <br><br>
                        22/05/2022 &nbsp;&nbsp;&nbsp;&nbsp; Slippers &nbsp;&nbsp;&nbsp;&nbsp; 1,350 LKR <br>
                    </h4>
                    &nbsp;&nbsp;<button class="test">View All Orders</button><br>

                    <div class="d"><b>My Shipping Details</b><br><br>

                        <input type="text" size="30" value="<?php echo $_SESSION["u"]["first_name"] . " " . $_SESSION["u"]["last_name"] ?>"><br><br>
                        <input id="address" type="text" size="30" placeholder="Customer Address"><br><br>

                        <br>
                        <center><button onclick="address();" class="reset">Submit</button><br></center>


                    </div>



                    <div class="e"><b>Card & Bank Accounts</b><br><br>

                        <input type="text" size="30" value="<?php echo $_SESSION["u"]["first_name"] . " " . $_SESSION["u"]["last_name"] ?>"><br><br>
                        <input type="text" size="30" placeholder="Account Number"><br><br>
                        <br>
                        <center><a href="VSC2.php"><button class="reset">Add card details</button></a><br></center>

                    </div>


                </div>

                <div>
                    <div id="footer">
                        <div class="div">
                            <h3>About LuVi's Fashion</h3>
                            <span>Exchange and return policy</span><br>
                            <span>Terms and conditions</span>
                        </div>
                        <div class="div">
                            <h3>Let Us Help You</h3>
                            <span>Contact Us</span><br>

                        </div>
                        <div class="div">
                            <h3>Contact Us</h3>
                            <span>077 455 7689</span><br>
                            <span>076 327 6636</span>
                        </div>
                        <div class="div">
                            <div class="d1">
                                <h3>Information</h3>
                                <span>Return and exchange</span><br>
                                <span>Size Guide</span>
                            </div>
                            <div class="d2">
                                <div class="sub">
                                    <img src="../images/facebook.webp">
                                </div>
                                <div class="sub">
                                    <img src="../images/insta.webp">
                                </div>
                                <div class="sub">
                                    <img src="../images/whatsapp.webp">
                                </div>
                                <div class="sub">
                                    <img src="../images/google.webp">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <script src="script.js"></script>
        </body>


    </html>


<?php
} else {
?>
    <script>
        alert("You have to signin first");
        window.location = "login.php";
    </script>
<?php
}

?>