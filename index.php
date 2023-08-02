<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form method="POST" action="index.php">
   <input type="email" name="email" placeholder="email">
   <input type="password" name="password" placeholder="password">
  <input type="submit" name="submit" value="DONE">
</form>
<?php
    if(isset($_POST['submit']))
    {
       $con=mysqli_connect("localhost","root","","demo") or die('unable to connect');
       $email=$_POST['email'];
       $password=$_POST['password'];
       $q="INSERT INTO  creds 
       VALUES('$email','$password')";
       $r=mysqli_query($con,$q);
       if($r)
       {
         echo "<script>
         alert('DONE');
         </script>";
       }
       else
       {
        echo "<script>
        alert('NOT DONE');
        </script>";
       }

    }
?>

</body>
</html>