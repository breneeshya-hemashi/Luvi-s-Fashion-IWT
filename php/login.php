<!DOCTYPE html>
<html>

<head>
    <title>Login-Luvi's fashion</title>
    <link rel="stylesheet" href="../css/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="js/login.js"></script>
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


            <div>
                <fieldset>
                    <img src="../images/ybk.png" width="300px">
                    <h2>Sign In</h2>

                    <p>Username<br><input type="text" id="usrNme" name="Name" placeholder="enter the username" required></p><br>
                    <p>Password<br><input type="password" id="psswrd" name="psword" placeholder="enter the password" required></p>

                    <br><br>

                    <a href="resetPassword.html">Forgot Password/Reset Password</a><br><br>

                    <button id="sbmt" onclick="signin();">LOGIN</button>
                </fieldset>

                <div>
                    <div class="slideshow-container">

                        <div class="mySlides fade">

                            <img src="../images/CS1.jpg" style="width:50%">

                        </div>

                        <div class="mySlides fade">

                            <img src="../images/CS2.jpg" style="width:50%">

                        </div>

                        <div class="mySlides fade">

                            <img src="../images/CS3.jpg" style="width:50%">

                        </div>

                        <div class="mySlides fade">

                            <img src="../images/CS4.jpg" style="width:50%">

                        </div>

                        <div class="mySlides fade">

                            <img src="../images/CS5.jpg" style="width:50%">

                        </div>

                        <div class="mySlides fade">

                            <img src="../images/CS6.jpg" style="width:50%">

                        </div>



                    </div>
                    <br>

                    <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"> </span>
                        <span class="dot" onclick="currentSlide(2)"> </span>
                        <span class="dot" onclick="currentSlide(3)"> </span>
                        <span class="dot" onclick="currentSlide(4)"></span>
                        <span class="dot" onclick="currentSlide(5)"></span>
                        <span class="dot" onclick="currentSlide(6)"></span>
                    </div>
                </div>
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

        </div>
        <script src="script.js"></script>
    </body>

</html>