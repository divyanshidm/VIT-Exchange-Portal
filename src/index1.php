<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<html>
<head>
<title> VIT EXCHANGE PORTAL </title>


  
<style type="text/css">




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


 body {
 
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
</head>
<body>

<div class="bg">



<div id="header"> 
<a href="home.html"> <img src="vit.png"> </a>
<div id="nav">
 <ul> 
 

	<li> <a href="about.html">  ABOUT US </a> </li> 

	<li> <a href="contactus.php">    CONTACT US  </a> </li> <br />
	</ul>

<div id="form">
<form method="post" action="login.php">


<table>
<tr><td>Registration Number:  </td><td><input type="text" name="regnum" maxlength="9" > </td></tr>
<tr><td>Password: </td><td><input type="password" name="password" maxlength="15" /> </td></tr>
<tr><td><p></td></tr>

<p style="clear:both"><br>

</table>

<div class="btn-group">
  
  <button class="buttonn" input type="submit" name="submit">Login</button>

</div>
<tr><td><p></td></tr>
</form>

</div>
</div>


	
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
 <a href="reg.php"> <button class="button" style="vertical-align:middle"><span> Register </span></button> </a>
</div>
 </div>



<div class="footer">

 &copy; VEP 2017 | All Rights Reserved </div>

</div>
</body>
</html>