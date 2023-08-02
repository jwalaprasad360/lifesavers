 <?php
    require 'config.php';
     session_start();
     if(!isset($_SESSION['unqid']))
    {
      header('location:login.php');
      echo "<h1>NOT DONE</h1>";
    }
    else
    {
      echo "<h1>".$_SESSION['unqid']."</h1>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Life Savers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
   
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    input
    {
        margin-top:12px;
        height:30px;
        width: 100px;
        background-color: #00FF33;
        color:black;
        border:0px;

    }
    input:hover
    {
        margin-top:12px;
        height:30px;
        width: 100px;
        background-color:white;
        color:black;
        border:0px;

    }
    .abc{
        //background-color: #3399FF;
       // background-image: linear-gradient(-225deg, #E3FDF5 0%, #FFE6FA 100%);
       background-image: linear-gradient(-225deg, #E3FDF5 50%, #FFE6FA 50%);
        padding: 10px;
    }
    /* Set black background color, white text and some padding */
    footer {
     background-color: #555;
     color: #808080;
    padding: 15px;
    }
    .xyz
    {
        background-color:#00FF33;
        height:50px;
    }
       .a1 
    {
        border-style: groove;
        border-width: 20px;
        border-left: -100px;
        border-color:cadetblue;
        margin-left: 150px;
        margin-right: 150px;
    }
    body{
        background-color:linear-gradient(to bottom,#50d07d,#d02552,#b2cecf);
        //background-image: linear-gradient(-225deg, #E3FDF5 0%, #FFE6FA 100%);
    }
    h1{
        font-family:"carousel";
        font-weight:bold;
    }
    /* On small screens, set height to 'auto' for sidenav and grid */
  </style>
</head>
<body>
  <form action="POST" method="BloodDonation.php">
    <div class="abc">
    <img src="blood1.jpg" width="100px" height="105px" style="margin-left: 100px; margin-top:-10px;margin-bottom:-1px;"> 
    <h1 style="margin-left:670px;margin-top:-45px;color:#ED1E79;text-shadow: 2px 2px 8px;font-size:50px;">LIFE SAVERS</h1>
     <!--<h3 style="text-align: right; color:red;margin-top:-45px;text-shadow: 2px 2px 8px;"><span class="glyphicon glyphicon-earphone">  Call:9603614667</h3></span></div>-->
    <h3 style="text-align: right; color:blue;margin-top:-45px;"><span class="glyphicon glyphicon-earphone">  Call:9603614667</h3></span></div>
    <!--<nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="#" style="color: red;">BLOOD DONATION</a>
          </div>-->
        <div class="xyz">
        <a class="navbar-brand" href="#" style="color:#f1f1f1;" >BLOOD DONATION</a>
            <ul class="nav navbar-nav">
              <li class="active"><a href="BloodDonation.php" style="color:#366eb7"><span class="glyphicon glyphicon-home"></span>Home</a></li>
              <!--<li><input type="submit" style="color:#366eb7" name="aboutus" value="ABOUT US"></li>-->
              <!-- <li><input type="submit" style="color:#366eb7"name="donar" value="DONAR"></li>-->
              <li><a href="BloodDonation.php">AboutUs</li></a>
              <li><a href="donar.php">Donate</li></a>
              <!--<li><a href=""<input type="submit" style="color:#366eb7" name="receiver"name="receiver" value="RECEIVER"></li>-->
              <li><a href="receiver.php">WantBlood</li></a>
              <li><a href="BloodDonation.php">Contact</li></a>
            
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
              <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
          </div>
        </div>
    </div>
      </nav>
      <!--<div class="wrapper">
    <nav>
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
      <div class="logo"><a href="#">NAVIAGTE FROM HERE</a></div>
      <img src="C:\Users\mahes\Desktop\project images'" class="images">
        <ul class="links">
          
          <li>
            <a href="home.php">Home</a></li>
          <li>
            <a href="login.php">Donate</a>
          <li>
            <a href="login.php">Receive</a>
          </li>
          <li>
            <a href="">About Us</a>
          <li>
          <li>
            <a href="">Contact</a>
    </div>
    </nav>
    </div>-->
      <div class="xyz">  
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" calss="active"></li>
            <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
          </ol>
      
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="image1.jpg"  style="width:500%;height:500px">
            </div>
      
            <div class="item">
              <img src="1.jpg"  style="width:500%;height:500px">
            </div>
          
           <!-- <div class="item">
              <img src="image2.jpg"style="width:500%;height:500px">
            </div>-->
            <div class="item">
              <img src="image4.jpg"style="width:500%;height:500px">
            </div>
          </div>
      
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
     
      <!--<div class="a1">
        <h2 style="margin-left: 400px;"><lable>Blood Group</h2></lable>
        <select id="Blood Group" name="Blood Group" style="margin-left:400px;font-size:large;margin-bottom: 20px;">
            <option value="A+ve">A+ve</option>
            <option value="B+ve">B+ve</option>
            <option value="AB+ve">AB+ve</option>
            <option value="O+ve">O+ve</option>
            <option value="A-ve">A-ve</option>
            <option value="B-ve">B-ve</option>
            <option value="AB-ve">AB-ve</option>
            <option value="O-ve">O-ve</option>
          </select>
          <h2 style="margin-left: 400px;"><lable>Enter District:</h2></lable>
         <select id="Districts" name="Districts" style="margin-left:400px;font-size:large;margin-bottom: 20px;">
        <option value="Anantapuram">Anantapuram</option>
        <option value="Chittoor">Chittoor</option>
        <option value="East Godavari">East Godavari</option>
        <option value="Guntur">Guntur</option>
        <option value="Krishna">Krishna</option>
        <option value="Kurnool">Kurnool</option>
        <option value="Prakasam">Prakasam</option>
        <option value="Nellore">Nellore</option>
        <option value="Srikakulam">Srikakulam</option>
        <option value="Vishakapatnam">Vishakapatnam</option>
        <option value="Vizianagaram">Vizianagaram</option>
        <option value="Ysr Kadapa">Ysr Kadapa</option>
      </select>
      <button style="margin-left: 100px;border-style:groove;font-size: medium;color:white;background-color: orangered;">Search</button>-->
</form>

</body>
</html>
