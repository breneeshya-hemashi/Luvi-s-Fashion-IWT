// slider
var slides = document.getElementsByClassName('slide');
var slideCount = slides.length;
var i = 0;

function moveLeft() {
    i++; // i = i + i 
    if (i < slideCount) {
        slides[i].style.left = "0";
        slides[i - 1].style.left = "-100%";
        console.log("advanced i = " + i);
    } else {
        i = 0; // Set current slide back to zero
        slides[i].style.left = "0";
        slides[slideCount - 1].style.left = "-100%";

        console.log("back to start");

        for (var x = 1; x < slideCount - 1; x++) {
            slides[x].style.left = "100%";
        }

    }
}
// Run the function, move left, when clicked on next// 
document.getElementById("next").onclick = moveLeft;
// slider

// document.getElementById("myButton").onclick = function Login() {
//     location.href = "www.luvi's.com";
// }

// function checkPasswords() {

//     if (document.getElementById("passw1").value != document.getElementById("passw2").value) {

//         alert("Passwords are mismatched");

//         return false;

//     } else {
//         alert("Passwords matched");

//         return true;
//     }


// }

function register() {
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var email = document.getElementById("email").value;
    var contact = document.getElementById("contact").value;
    var password = document.getElementById("password").value;
    var confirm_password = document.getElementById("confirm_password").value;

    var form = new FormData();
    form.append("fname", fname);
    form.append("lname", lname);
    form.append("email", email);
    form.append("contact", contact);
    form.append("password", password);
    form.append("confirm_password", confirm_password);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;

            if (text == "User has registered successfully") {
                alert(text);
                window.location = "login.php";
            } else {
                alert(text);
            }
        }
    };

    r.open("POST", "signup_proccess.php", true);
    r.send(form);
}

function signin() {
    var username = document.getElementById("usrNme").value;
    var password = document.getElementById("psswrd").value;

    var form = new FormData();
    form.append("username", username);
    form.append("password", password);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;

            if (text == "success") {
                window.location = "index.php";
            } else {
                alert(text);
            }
        }
    };

    r.open("POST", "signin_proccess.php", true);
    r.send(form);

}

function address() {
    var address = document.getElementById("address").value;

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;
            alert(text);
        }
    };

    r.open("GET", "address_proccess.php?address=" + address, true);
    r.send();

}

function card_details() {
    var card_name = document.getElementById("card_name").value;
    var card_number = document.getElementById("card_number").value;
    var expire_month = document.getElementById("expire_month").value;
    var expire_year = document.getElementById("expire_year").value;
    var cvv = document.getElementById("cvv").value;

    var form = new FormData();
    form.append("card_name", card_name);
    form.append("card_number", card_number);
    form.append("expire_month", expire_month);
    form.append("expire_year", expire_year);
    form.append("cvv", cvv);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;

            if (text == "Payment details updated successfully") {
                alert(text);
                window.location = "VSC2.php";
            } else {
                alert(text);
            }
        }
    };

    r.open("POST", "card_proccess.php", true);
    r.send(form);

}

function feedback() {
    var fb = document.getElementById("textarea").value;

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;

            if (text == "Successfully submited your feedback") {
                alert(text);
                window.location = "feedback.php";
            } else {
                alert(text);
            }
        }
    };

    r.open("GET", "feedback_proccess.php?fb=" + fb, true);
    r.send();
}

function send_massege() {
    var name = document.getElementById("NAME").value;
    var address = document.getElementById("ADDRESS").value;
    var email = document.getElementById("EMAIL").value;
    var contact = document.getElementById("PHONE NUMBER").value;
    var massege = document.getElementById("MESSAGE").value;

    var form = new FormData();
    form.append("name", name);
    form.append("address", address);
    form.append("email", email);
    form.append("contact", contact);
    form.append("massege", massege);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;

            if (text == "Massege sent successfully") {
                alert(text);
                window.location = "Contact Us Page.php";
            } else {
                alert(text);
            }
        }
    };

    r.open("POST", "send_massege_proccess.php", true);
    r.send(form);
}