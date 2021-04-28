/* JavaScript Validate Login Form*/
function validateLoginForm() {
    var email = document.forms["loginForm"]["idemail"].value;
    var pass = document.forms["loginForm"]["idpass"].value;
    if ((email === "") || (pass === "")) {
        alert("Please fill out your email/password"); /* If user not fill in details*/
        return false;
    }
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (!re.test(String(email))) {
        alert("Please correct your email"); /* If user fill incorrect email*/
        return false;
    }
    setCookies(10); /* JavaScript Set Cookies Remember Login*/
}

/* JavaScript Google Map in Contact Us Page*/
function myMap() { 
    var mapProp = {
        center: new google.maps.LatLng(6.436715789203521, 100.19433277995743),
        zoom: 23,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
}

/* JavaScript Validate Registration Form*/
function validateRegForm() { 
    var email = document.forms["registerForm"]["idemail"].value;
    var pass = document.forms["registerForm"]["idpass"].value;
    if ((email === "") || (pass === "")) {
        alert("Please fill out your email/password"); /* If user not fill in details*/
        return false;
    }
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (!re.test(String(email))) {
        alert("Please correct your email"); /* If user fill incorrect email*/
        return false;
    }
}

function setCookies(exdays) { /* JavaScript Expires Date Cookies Login*/
    var email = document.forms["loginForm"]["idemail"].value;
    var pass = document.forms["loginForm"]["idpass"].value;
    var rememberme = document.forms["loginForm"]["idremember"].checked;
    console.log(email, pass, rememberme);
    if (rememberme) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = "cusername=" + email + ";" + expires + ";path=/";
        document.cookie = "cpass=" + pass + ";" + expires + ";path=/";
        document.cookie = "rememberme=" + rememberme + ";" + expires + ";path=/";

    } else {
        document.cookie = "cusername=;expires=Thu, 01 Jan 1970 00:00:00 UTC;path=/;";
        document.cookie = "cpass=;expires=Thu, 01 Jan 1970 00:00:00 UTC;path=/";
        document.cookie = "rememberme=;expires=Thu, 01 Jan 1970 00:00:00 UTC;path=/";
    }
}

function getCookie(cname) { /* JavaScript Get the Cookies Remember Login*/
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function loadCookies() { /* JavaScript Load the Cookies Remember Login*/
    var username = getCookie("cusername");
    var password = getCookie("cpass");
    var rememberme = getCookie("rememberme");
    console.log("COOKIES:" + username, password, rememberme);
    document.forms["loginForm"]["idemail"].value = username;
    document.forms["loginForm"]["idpass"].value = password;
    if (rememberme) {
        document.forms["loginForm"]["idremember"].checked = true;
    } else {
        document.forms["loginForm"]["idremember"].checked = false;
    }
}

function logout() { /* JavaScript Log Out Function*/
    alert('Log out success')
    console.log("logout");
    sessionStorage.clear();
    unset($_SESSION);
    session_unset();
    session_destroy();
    window.location.replace('../html/login.html') /* User back to Login Page*/
}

function myFunction() { /* JavaScript Burger Menu Function*/
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    } 
}
