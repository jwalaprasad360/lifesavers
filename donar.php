
    <?php
    session_start();
    require 'config.php';
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


    <!doctype html>
    <html>
        <head>
        <meta charset="utf-8">
      <title>Warning Alert Notification | CodingNepal</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <script>
           @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>
        <style>
          .button_tag{
  padding: 8px 16px;
  font-size: 25px;
  font-weight: 500;
  border-radius: 4px;
  border: none;
  outline: none;
  background:rgb(87, 175, 87);
  color: white;
  letter-spacing: 1px;
  cursor: pointer;
}
.alert{
  background:rgb(24, 201, 224);
  padding: 20px 40px;
  min-width: 420px;
  position: absolute;
  right: 0;
  top: 10px;
  border-radius: 4px;
  border-left: 8px solid rgb(1, 1, 95);
  overflow: hidden;
  opacity: 0;
  pointer-events: none;
}
.alert.showAlert{
  opacity: 1;
  pointer-events: auto;
}
.alert.show{
  animation: show_slide 1s ease forwards;
}
@keyframes show_slide {
  0%{
    transform: translateX(100%);
  }
  40%{
    transform: translateX(-10%);
  }
  80%{
    transform: translateX(0%);
  }
  100%{
    transform: translateX(-10px);
  }
}
.alert.hide{
  animation: hide_slide 1s ease forwards;
}
@keyframes hide_slide {
  0%{
    transform: translateX(-10px);
  }
  40%{
    transform: translateX(0%);
  }
  80%{
    transform: translateX(-10%);
  }
  100%{
    transform: translateX(100%);
  }
}
.alert .fa-exclamation-circle{
  position: absolute;
  left: 20px;
  top: 50%;
  transform: translateY(-50%);
  color:yellow;
  font-size: 30px;
}
.alert .msg{
  padding: 0 20px;
  font-size: 18px;
  color:rgb(22, 28, 150);
}
.alert .close-btn{
  position: absolute;
  right: 0px;
  top: 50%;
  transform: translateY(-50%);
  background: orange;
  padding: 20px 18px;
  cursor: pointer;
}
.alert .close-btn:hover{
  background:rgb(156, 224, 156);
}
.alert .close-btn .fas{
  color:red;
  font-size: 22px;
  line-height: 40px;
}
    @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      -webkit-font-smoothing: antialiased;
      -moz-font-smoothing: antialiased;
      -o-font-smoothing: antialiased;
      font-smoothing: antialiased;
      text-rendering: optimizeLegibility;
    }

    body {
      font-family: "Roboto", Helvetica, Arial, sans-serif;
      font-weight: 100;
      font-size: 12px;
      line-height: 30px;
      color: #777;
      background:linear-gradient(to right,#000428,#004e92); 
    }
    h3
    {
        color:red;
    }
    .container
    {
        
      max-width: 400px;
      width: 100%;
      margin: 0 auto;
      position: relative;
    }

    #contact input[type="text"],
    #contact input[type="email"],
    #contact input[type="tel"],
    #contact input[type="url"],
    #contact textarea,
    #contact button[type="submit"] {
      font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
    }

    #contact {
      background: #F9F9F9;
      padding: 25px;
      margin: 150px 0;
      box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }

    #contact h3 {
      display: block;
      font-size: 30px;
      font-weight: 300;
      margin-bottom: 10px;
    }

    #contact h4 {
      margin: 5px 0 15px;
      display: block;
      font-size: 13px;
      font-weight: 400;
    }

    fieldset {
      border: medium none !important;
      margin: 0 0 10px;
      min-width: 100%;
      padding: 0;
      width: 100%;
    }

    #contact input[type="text"],
    #contact input[type="email"],
    #contact input[type="tel"],
    #contact input[type="url"],
    #contact textarea {
      width: 100%;
      border: 1px solid #ccc;
      background: #FFF;
      margin: 0 0 5px;
      padding: 10px;
    }

    #contact input[type="text"]:hover,
    #contact input[type="email"]:hover,
    #contact input[type="tel"]:hover,
    #contact input[type="url"]:hover,
    #contact textarea:hover {
      -webkit-transition: border-color 0.3s ease-in-out;
      -moz-transition: border-color 0.3s ease-in-out;
      transition: border-color 0.3s ease-in-out;
      border: 1px solid #aaa;
    }

    #contact textarea {
      height: 100px;
      max-width: 100%;
      resize: none;
    }

    #contact button[type="submit"] {
      cursor: pointer;
      width: 100%;
      border: none;
      background: #4CAF50;
      color: #FFF;
      margin: 0 0 5px;
      padding: 10px;
      font-size: 15px;
    }

    #contact button[type="submit"]:hover {
      background: #43A047;
      -webkit-transition: background 0.3s ease-in-out;
      -moz-transition: background 0.3s ease-in-out;
      transition: background-color 0.3s ease-in-out;
    }

    #contact button[type="submit"]:active {
      box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
    }

    .copyright {
      text-align: center;
    }

    #contact input:focus,
    #contact textarea:focus {
      outline: 0;
      border: 1px solid #aaa;
    }

    ::-webkit-input-placeholder {
      color: #888;
    }

    :-moz-placeholder {
      color: #888;
    }

    ::-moz-placeholder {
      color: #888;
    }

    :-ms-input-placeholder {
      color: #888;
    }
    .date2
    {
        width:100%;
        height: 25px;
        background-color: rgb(237, 64, 64);
    }
    .date1
    {
        width:100%;
        height: 25px;
        background-color:rgb(67, 176, 67);
    }
    .option
    {
        height: 25px;
        width: 100%;
    }
    label
    {
      color:black;
      font: size 10px;
    }
        </style>
    </head>



    <div class="alert hide">
         <span class="fas fa-exclamation-circle"></span>
         <span class="msg">Warning: This is a warning alert!</span>
         <div class="close-btn">
            <span class="fas fa-times"></span>
         </div>
      </div>
      <script>
         $('button').click(function(){
           $('.alert').addClass("show");
           $('.alert').removeClass("hide");
           $('.alert').addClass("showAlert");
           setTimeout(function(){
             $('.alert').removeClass("show");
             $('.alert').addClass("hide");
           },5000);
         });
         $('.close-btn').click(function(){
           $('.alert').removeClass("show");
           $('.alert').addClass("hide");
         });
      </script>
    <div class="container">  
      <form id="contact" action="donar.php" method="POST">
        <h3>FILL YOUR DETAILS HERE</h3>
        <h4></h4>
        <fieldset>
          <input placeholder="Your name" name="name" type="text" name="name" tabindex="1" required  autofocus>
        </fieldset>
        
        <fieldset>
          <input placeholder="Your Phone Number" name="phone" type="tel" name="number" required tabindex="3" >
        </fieldset>
        <fieldset>
            <select class="option" name="blood_group" required>
                <option value="select">SELECT YOUR BLOOD GROUP</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="B+">B+</option>
                <option value="B-">B-+</option>
            </select>
          </fieldset>
        <fieldset>
        <label>
      </fieldset>
          <fieldset>
        <label>From Date</label>
            <input type="date" name="from_date" class="date1" required>
          </fieldset>
          <fieldset>
        <label>To Date</label>
            <input type="date"name="to_date" class="date2" required>
          </fieldset>
        <fieldset>
          <fieldset>
          <select class="option" name="district" class="district" required>
            <option value="selection">Choose District---</option>
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
        <br>

      </fieldset>
          <textarea placeholder="Full Address" tabindex="5" name="full_address" required></textarea>
        </fieldset>
        <fieldset>
          <button name="submit" class="button_tag" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
        </fieldset>
    </form>
    <?php
      if(isset($_POST['submit']))
      {
          $name=$_POST['name'];
          $phone=$_POST['phone'];
          $blood_group=$_POST['blood_group'];

          $from_date=date('Y-m-d',strtotime($_POST['from_date']));
          $to_date=date('Y-m-d',strtotime($_POST['to_date']));
          $full_address=$_POST['full_address'];
          $unqid=$_SESSION['unqid'];
          $district=$_POST['district'];
          $q="UPDATE additional_data
		  SET 
      name='$name',
		  phone='$phone',
		  blood_group='$blood_group',
		  from_date='$from_date',
		  to_date='$to_date',
      full_address='$full_address',
      district='$district'
          where unqid='$unqid'";	
          $r=mysqli_query($con,$q);
          if($r)
          {
            
            

         
            echo "
            <script>
             window.location.href = 'BloodDonation.php'; 
            </script>";
          }
          else
          {
            echo "FAIL";
          }




          
      }
    ?>

    </div>
    </html>