<html>
<head>
<title> VIT EXCHANGE PORTAL </title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
 
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style type="text/css">
<!--- <link rel="stylesheet" type="text/css" href="style.css" /> --->
 

 h2 {color: white;
 background-color: black;
 border: 3px solid white;}
  body {
 
color: white;
font-family: Georgia;
font-size: 25px;
}
 a:link {font-size:20px;
 text-decoration: none;}
 a:visited {color: white;}
 a:hover {color: pink;
 font-size: 20px;}
 
 span { font-size: 30px;
 color: red;}
 
body {
   font-family:"lucida grande";
    background-image: url("blur.jpg");
     
   position: absolute;
    overflow-x: hidden;

    /* Center and scale the image nicely */
    background-position: center;
    background-size: cover;
    background-size:100% 100vh;
height: 100%; 
width:100%;
 background-repeat: repeat;
}
 
 .formm{
font-size:50%;

centered content;
align: center;
margin: auto;
width:80%;
margin-bottom: -10px;
margin-top:20px; }
 
 #header img {
position:absolute;
top:10px;
left:15px;
height:10%;
}

 
#r{
  background-color: #212F3C;
margin:auto;
centered content;
width: 35%;
align: center;
opacity: 0.9;
//margin-top:-50px;
font-weight:bold;}

#footer{
height: 40px;
border-top: 15px solid grey;
text-align: center;
font-size: 20px;
color: white;
}

#l{
  text-align: center;
}

.w3-container{
  
  //margin-top:-40px;
}
 
 
 td{
   padding: 5px;
 }
 #form .error {
    color: #FB3A3A;
    display: inline-block;
    margin: 0px 0 0px 0px;
    padding: 7px;
    text-align: left;
    }
 
 
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

  $("form[name='registration']").validate({

    rules: {

      name: "required",
      regnum: {
        required: true,
        minlength: 9
      },
      email: {
        required: true,

        email: true
      },
      password: {
        required: true,
        minlength: 5
      },

      confirmpassword: {
        required: true,
        minlength: 5
      },

      mobile: {
        required: true,
        minlength: 10 
      },

      address: "required",
      gender: "required"

    },

    messages: {
      name: "Please enter your Name",
      
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      email: "Please enter a valid email address"
    },

    submitHandler: function(form) {
      form.submit();
    }
  });
  
});

</script>




</head>
<body>

<div id="header"> 
<a href="home.html"> <img src="vit.png"> </a>
</div>
<div id="r">
 <div class="w3-panel w3-topbar w3-bottombar w3-border-red">
 <h2> <center> REGISTER NOW </h2> 
    <div class="formm">
<form enctype="multipart/form-data" method="post" action="insert.php" name="registration" id="form">
<input class="w3-input w3-hover-green" type="text" placeholder="Name" name="name"  maxlength="20">

<br>
<input class="w3-input w3-hover-green" type="text" placeholder="Registration Number" name="regnum"  maxlength="9">
<br>

<select class="w3-select" name="gender">
    <option value="" disabled selected>Gender</option>
    <option value="male" name="gender">Male</option>
    <option value="female" name="gender">Female</option>
  </select>
<br>
<br>
<input class="w3-input w3-hover-green" type="text" placeholder="Address" name="address"  maxlength="100">
<br>
<input class="w3-input w3-hover-green" type="text" placeholder="E-Mail" name="email"  maxlength="50">
<br>
<input class="w3-input w3-hover-green" type="text" placeholder="Contact Number" name="mobile"  maxlength="10">
<br>
<input class="w3-input w3-hover-green" type="password" placeholder="Password" name="password"  maxlength="20">
<br>
<input class="w3-input w3-hover-green" type="password" placeholder="Confirm Password" name="confirmpassword"  maxlength="20">
<br>
<input type="hidden" name="MAX_FILE_SIZE" value="10000000">
<br>
Choose your picture: <input type="file" name="upload">
</div>

<div class="w3-container">
<p><button class="w3-button w3-block w3-red" input type="submit" value="Submit">SUBMIT</button></p>

</div>

</form>
</div>
</div>

<div id="l">

<a href="home.html" target="_blank"> Click here to go to Homepage </a>
</div>



</body>
</html>