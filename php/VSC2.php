<?php
require "connection.php";
session_start();
?>

<!DOCTYPE>
<html>

<head>

    <link rel="stylesheet" href="../css/vsc.CSS2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <b>
        <title>Payment Details</title>

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

        <!--Vertical line-->
        <div class="vl"> </div>

        <!--left side-->

        <div class="left1">
            <h2>MY CART</h2>
            <br>

            <div style="float: left">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                    <img src="../IMAGES/frc4.jpg" style="width:60%">
                </div>

                <div class="mySlides fade">
                    <img src="../IMAGES/frc1.jpg" style="width:60%">
                </div>

                <div class="mySlides fade">
                    <img src="../IMAGES/frc2.jpg" style="width:60%">
                </div>

                <div class="mySlides fade">
                    <img src="../IMAGES/frc3.jpg" style="width:60%">
                </div>

                <div class="mySlides fade">
                    <img src="../IMAGES/frc5.jpg" style="width:60%">

                </div>


            </div>
            <br>


        </div>
        <div>
            <div class="mgn">
                <br><br><br>
                <label>Volina Embroidered Midi Dress (M)</label> <br><br>

                <label>3,850 LKR</label> <br><br>

            </div>


            <br><br>



            <br>
            <div class="br1">
                <p>&nbsp;&nbsp;<u>Have a Coupon Code?</u></p>

                <p>&nbsp;&nbsp;Sub Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3,850 LKR <br><br> &nbsp;&nbsp;Shipping&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 0 LKR<br><br> &nbsp;&nbsp;Total&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3,850 LKR</p>
            </div>

            <br>
            <br>
            <br>
            <br>
            <br>





            <div class="test3">
                <br>
                <center><button class="test2">Change your shipping details</button><br></center>
            </div>


        </div>


        <!--right side-->

        <div class="right1">
            <h2>PAYMENT DETAILS</h2><br>
            <?php
            

            $rs = Database::search("SELECT * FROM `payment` WHERE `id` = '".$_SESSION["u"]["id"]."'");
            $nr = $rs->num_rows;

            if ($nr == 1) {
                $d = $rs->fetch_assoc();
            ?>
                <label>Name on the Card&nbsp;</label><br><br>
                <input value="<?php echo $d["card_name"]; ?>" id="card_name" type="text" size="50" required><br><br><br>
                <label>Card Number&nbsp;</label><br><br>
                <input value="<?php echo $d["card_number"]; ?>" id="card_number" type="text" size="50" required><br><br><br>

                <label> Expiered Date &nbsp;</label><br><br>

                <label>&nbsp;&nbsp;Expiered Month </label><br>
                <input value="<?php echo $d["expire_month"]; ?>" id="expire_month" type="text" size="20" placeholder="january" required> <br><br>
                <label>&nbsp;&nbsp;Expiered Year </label><br>
                <input value="<?php echo $d["expire_year"]; ?>" id="expire_year" type="number" size="50" placeholder="2022" required>

                <br><br>

                <div class="split right2">
                    <label>CVV Number&nbsp;</label><br><br>
                    <input value="<?php echo $d["cvv"]; ?>" id="cvv" type="text" size="30" placeholder="123" required><br><br><br>

                    <img src="../images/payment.png" alt="cards" width="180" height="47">

                </div>
            <?php
            } else {
            ?>
                <label>Name on the Card&nbsp;</label><br><br>
                <input id="card_name" type="text" size="50" required><br><br><br>
                <label>Card Number&nbsp;</label><br><br>
                <input id="card_number" type="text" size="50" required><br><br><br>

                <label> Expiered Date &nbsp;</label><br><br>

                <label>&nbsp;&nbsp;Expiered Month </label><br>
                <input id="expire_month" type="text" size="20" placeholder="january" required> <br><br>
                <label>&nbsp;&nbsp;Expiered Year </label><br>
                <input id="expire_year" type="number" size="50" placeholder="2022" required>

                <br><br>

                <div class="split right2">
                    <label>CVV Number&nbsp;</label><br><br>
                    <input id="cvv" type="text" size="30" placeholder="123" required><br><br><br>

                    <img src="../images/payment.png" alt="cards" width="180" height="47">

                </div>
            <?php
            }

            ?>




            <input type="checkbox">
            <label>Save my card for next orders</label><br><br><br><br>

            <button onclick="card_details();" class="test2">Save Card Deatails</button><br><br><br>

            <a href="https://www.*" target="_blank">Privacy Policy | Terms & Condition</a>

            </b>

        </div>


        <script>
            let slideIndex = 0;
            showSlides();

            function showSlides() {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1
                }
                slides[slideIndex - 1].style.display = "block";
                setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
        </script>

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