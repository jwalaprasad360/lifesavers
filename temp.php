<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="one">
        <input type="name" name="t">
        <input type="submit" name="sub1">
    
        <input type="name" name="k">
        <input type="submit" name="sub2" >
    </form>

    <?php
    if(isset($_POST['sub1'])){
        $d=$_POST['t'];
        echo $d;
    }
    else if(isset($_POST['sub2'])){
        echo $_POST['k'];
    }
    ?>
</body>
</html>