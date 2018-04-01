<?php include 'header.php';?>
<!DOCTYPE html>

<html class="no-js" lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>VEP Exchange Portal</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="author" content="Vaibhav Khandelwal" />
        <link rel="shortcut icon" href="favicon.png"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style_home.css"/>
		<script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
        <style>
        body{
            align: center;
        }
.main{
    padding-top: 150px;
}
.heading{

}
.logo{
    font-family: raleway, arial;
    font-size: 24px;
    font-weight: bold;
    text-align: center;
    color: #3cb0fd;
}
a:hover{
    color: #3cb0fd;
}   
body, html {
height: 100%;
margin: 0;
}

.bg {
    background-image: url("homm.jpg");
//   opacity: 0.5;
    height: 100%; 
width:100%;
 background-repeat: repeat;
    position: absolute;
    overflow-x: hidden;
    /* Center and scale the image nicely */
    background-position: center;
    background-size: cover;
}


#cent {
  font-family: 'Raleway', sans-serif;

  padding: 0.5em 2em;
  font-size: 15px;
text-align: center;
h1,h2 {
  margin: 0.4em 0;
}
h1 { font-size: 3.5em; }

    height: 200px;
    width: 500px;
    //background: black;
color: white;
  //text-shadow: 0.5px 0 black, 0 0.5px black, 0.5px 0 black, 0 -0.5px black;
//opacity: 0.5;
//text-align: center;
//font-size: 40px;
    position: fixed;
    top: 50%;
    left: 50%;
    margin-top: -100px;
    margin-left: -250px;
}

#cent #centtext{
font-size: 16px;
margin-left: 5%;
color: white;
position: fixed;
}


#header{
width: 100%;
//height: 200px;
/*background: #1B4F72;*/
}

#header img {
position:absolute;
top:10px;
left:15px;
height:15%;
}
    background-image: url("homm.jpg");
 font-family: "lucida grande";
 color: "white";}
 
 
#wrapper{
width: auto;
height: auto;
margin: 410px auto;
}

.footer {
  right: 0;
  bottom: 0;
  left: 0;
  color:white;
  position:absolute;
//  padding: 1rem;
  background-color: black;
  text-align: center;
}

#header #form{
margin-left: 650px;
margin-top:-90px;
margin-right:5px;
color:white;
font-family:"lucida grande";
font-size: 17px;
}


#header #nav{
margin-top: 10px;
margin-left: 350px;
}


#header #nav ul li{
list-style-type: none;
display: inline;
padding: 10px 20px 7px 21px;
//background-color: black;
font-size: 20px;
font-family: "lucida grande";
margin-left:40px;
}

#header #nav a{
text-decoration: none;
color: white;
}

#header #nav ul li a:link{
color: white;
}


#header #nav ul li a:hover{
color: orange;
}

#header #nav ul li a:active{
color: red;
}





#wrapper #table1{
width: 700px;
//height: 250px;
table-layout: fixed;
}

#wrapper #table1 td{
background: #D8D8D8;
font-size: 14px;
padding: 10px;
border-radius: 10px;
-moz-border-radius: 10px;
-webkit-radius: 10px;
box-shadow: 0px 0px 10px #000;
-moz-box-shadow: 0px 0px 10px #000;
-webkit-box-shadow: 0px 0px 10px #000;
}

#wrapper #table1 td h3{
text-align: center;
font-family: "Georgia";
font-size: 20px;
}

.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 15px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 15px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}


.btn-group .buttonn {
    background-color: #2874A6;

    border-left: 7px solid #f4511e;
    color: white;
    padding: 10px 30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    cursor: pointer;
    float: left;
}

.btn-group .buttonn:hover {
    background-color: #3e8e41;
}
</style>


<link href='https://fonts.googleapis.com/css?family=Varela+Round|Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<script src="https://code.jquery.com/jquery-latest.min.js"></script>
<script>
$(document).ready(function() {
    $("#loginLink").click(function( event ){
           event.preventDefault();
           $(".overlay").fadeToggle("fast");
     });
     
    $(".overlayLink").click(function(event){
        event.preventDefault();
        var action = $(this).attr('data-action');
         
        $("#loginTarget").load("ajax/" + action);
         
        $(".overlay").fadeToggle("fast");
    });
     
    $(".close").click(function(){
        $(".overlay").fadeToggle("fast");
    });
     
    $(document).keyup(function(e) {
        if(e.keyCode == 27 && $(".overlay").css("display") != "none" ) { 
            event.preventDefault();
            $(".overlay").fadeToggle("fast");
        }
    });
});
</script>

<style>
/*
*    RESET
*/
*{
    box-sizing: border-box;
    margin: 0;
    outline: none;
    padding: 0;
}
 
*:after,
*:before {
    box-sizing: border-box;
}
 
/*
*    GLOBAL
*/
html {
    font-size: 16px;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
    text-rendering: optimizeLegibility;
}
 
body {
    background-color: #f3f3f3;
    color: rgb(165,165,165);
    font-family: "Open Sans", Arial, Helvetica, sans-serif;
    font-weight: 400;
}

div.overlay {
    background-color: rgba(0,0,0,.25);
    bottom: 0;
    display: flex;
    justify-content: center;
    left: 0;
    position: fixed;
    top: 0;
    width: 100%;
}
 
    div.overlay > div.login-wrapper {
        align-self: center;
        background-color: rgba(0,0,0,.25);
        border-radius: 2px;
        padding: 6px;
        width: 450px;
    }
     
        div.overlay > div.login-wrapper > div.login-content {
            background-color: rgb(255,255,255);
            border-radius: 2px;
            padding: 24px;    
            position: relative;
        }
         
            div.overlay > div.login-wrapper > div.login-content > h3 {
                color: rgb(0,0,0);
                font-family: 'Varela Round', sans-serif;
                font-size: 1.8em;
                margin: 0 0 1.25em;
                padding: 0;
            }
/*
*    FORM
*/
form label {
    color: rgb(0,0,0);
    display: block;
    font-family: 'Varela Round', sans-serif;
    font-size: 1.25em;
    margin: .75em 0;    
}

form label {
    color: rgb(0,0,0);
    display: block;
    font-family: 'Varela Round', sans-serif;
    font-size: 1.25em;
    margin: .75em 0;    
}
 
    form input[type="text"],
    form input[type="email"],
    form input[type="number"],
    form input[type="search"],
    form input[type="password"],
    form textarea {
        background-color: rgb(255,255,255);
        border: 1px solid rgb( 186, 186, 186 );
        border-radius: 1px;
        box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.08);
        display: block;
        font-size: .65em;
        margin: 6px 0 12px 0;
        padding: .8em .55em;    
        text-shadow: 0 1px 1px rgba(255, 255, 255, 1);
        transition: all 400ms ease;
        width: 90%;
    }
     
    form input[type="text"]:focus,
    form input[type="email"]:focus,
    form input[type="number"]:focus,
    form input[type="search"]:focus,
    form input[type="password"]:focus,
    form textarea:focus,
    form select:focus { 
        border-color: #4195fc;
        box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 0 8px #4195fc;
    }
     
        form input[type="text"]:invalid:focus,
        form input[type="email"]:invalid:focus,
        form input[type="number"]:invalid:focus,
        form input[type="search"]:invalid:focus,
        form input[type="password"]:invalid:focus,
        form textarea:invalid:focus,
        form select:invalid:focus { 
            border-color: rgb(248,66,66);
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 0 8px rgb(248,66,66);
        }
     
form button {
    background-color: #50c1e9;
    border: 1px solid rgba(0,0,0,.1);
    color: rgb(255,255,255);
    font-family: 'Varela Round', sans-serif;
    font-size: .85em;
    padding: .55em .9em;
    transition: all 400ms ease;    
}
 
    form button:hover {
        background-color: #1bc5b3;
        cursor: pointer;
    }

</style>

    </head>
    <body id="page">
        <ul class="cb-slideshow">
            <li><span>Background 1</span></li>
            <li><span>Background 2</span></li>
            <li><span>Background 3</span></li>
            <li><span>Background 4</span></li>
            <li><span>Background 5</span></li>
            <li><span>Background 6</span></li>
        </ul>
        <div class="bg">
<div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="#">
                <strong>Home</strong>
                </a>
                <a href="about.html">
                <strong>About</strong>
                </a>
                <!--<a href="seminar.html">
                <strong>Seminars</strong>
                <a href="event.html">
                <strong>Events</strong>-->
                <a href="contactus.php">
                <strong>Contact</strong>
                </a>
                <span class="right">
                    <a href="https://www.facebook.com/VEP" target="_blank">
                        <strong>
                    <i class="fa fa-facebook" aria-hidden="true"></i></strong></a>
                    <a href="https://twitter.com/VEP" target="_blank">
                    <i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="https://github.com/" target="_blank">
                    <i class="fa fa-github" aria-hidden="true"></i></a>
                    <a href="https://plus.google.com/+VEP" target="_blank">
                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/VEP" target="_blank">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.instagram.com/VEP" target="_blank">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->






    
<script>
var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
  document.body.appendChild(css);
}; </script>


<div id="cent">
<link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
<h1>ONE STOP EXCHANGE PORTAL FOR
  <span class="txt-rotate"
     data-period="2000"
     data-rotate='[ "VITIANS...", "YOU...", "VIT STUDENTS..." ]'></span>
</h1>



<div id="centtext"> 
Have a question about anything related to VIT?  <br>
 Need some help? Well, you have come to right place! <br>
 <a ref="login.php" id="loginLink"> <button class="button" style="vertical-align:middle"><span> Login </span></button> </a><br>

<div class="test"></div>
<div class="overlay" style="display: none;">
    <div class="login-wrapper">
        <div class="login-content" id="loginTarget">
            <a class="close">x</a>
            <h3>Sign in</h3>
            <form method="post" action="login.php">
                <label for="username">
                    Registration No.:
                    <input type="text" name="regnum" maxlength="9" style="text-transform:uppercase;"/ onkeyup="javascript:this.value=this.value.toUpperCase();" required />
                </label>
                <label for="password">
                    Password:
                    <input type="password" name="password" id="password"  required />
                </label>
                <button type="submit">Sign in</button>
            </form>
        </div>
    </div>
</div>

 <a href="reg.php"> <button class="button" style="vertical-align:middle"><span> Register </span></button> </a>
</div>
 </div>



<div class="footer">

 &copy; VEP 2017 | All Rights Reserved </div>

</div>
    </body>
</html>