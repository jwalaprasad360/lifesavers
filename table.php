<?php
    require 'config.php';
    session_start();
?>



<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<style>
  table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;
}

table caption {
  font-size: 1.5em;
  margin: .5em 0 .75em;
}

table tr {
  background-color: #f8f8f8;
  border: 1px solid #ddd;
  padding: .35em;
}

table th,
table td {
  padding: .625em;
  text-align: center;
}

table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
}

@media screen and (max-width: 600px) {
  table {
    border: 0;
  }

  table caption {
    font-size: 1.3em;
  }
  
  table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }
  
  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }
  
  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: right;
  }
  
  table td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }
  
  table td:last-child {
    border-bottom: 0;
  }
}

body {
  font-family: "Open Sans", sans-serif;
  line-height: 1.25;
}
</style>
<body>
  <table>
    <caption>You Can Contact these Details</caption>
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Price</th>
        <th scope="col">Quantity</th>
      </tr>
    </thead>
    <tbody>
        <?php
         
            
          
            $unqid=$_SESSION['unqid'];
            $district=$_SESSION['district'];
            $blood_group=$_SESSION['blood_group'];
            $q="SELECT * FROM additional_data WHERE 
            district='$district' AND
            blood_group='$blood_group'
             ";
            $r=mysqli_query($con,$q);
              while($row=mysqli_fetch_array($r))
              {
                  $fdate=$row['from_date'];
                  $sdate=$row['to_date'];
                  $_SESSION['_name_']=$row['name'];
                  $_SESSION['_phone_']=$row['phone'];
                  $_SESSION['_district_']=$row['district'];
                  $_SESSION['_blood_group_']=$row['blood_group'];
                  $y1=(int)substr($fdate,0,4);//(index,len);
                  $m1=(int)substr($fdate,5,2);
                  //echo $m1;
                  $d1=(int)substr($fdate,8,2);
                  $y2=(int)substr($sdate,0,4);//(index,len);
                  $m2=(int)substr($sdate,5,2);
                  //echo $m2;
                  $d2=(int)substr($sdate,8,2);
                 // echo $fdate;
                 // echo $y1." ";
                 // echo $m1." ";
                 // echo $d1." "
  
                  if($y3>=$y1 AND $y3<=$y2)
                  {
                      if($m3>=$m1 AND $m3<=$m2)
                      {
                          if($d3>=$d1 AND $d3<=$d2)
                          {
                            ?>
                            <tr>
                            
                            <td data-label="Name"><?php echo $_SESSION['_name_']; ?></td>
                            <td data-label="Phone"><?php  echo$_SESSION['_phone_']; ?></td>
                            <td data-label="District"><?php echo$_SESSION['_district_']; ?></td>
                            <td data-label="BloodGroup"><?php echo$_SESSION['_blood_group_']; ?></td>
                       
                              </tr>
                             <?php 
                          }
                      }
                  }
                  else
                  {
                    echo "NO DATA ";
                  }
                 
             
  
                 
              }

          
            ?>
              </tr>
      
              </tbody>
            </table>
  
  
            <table>
    <caption>Not In Your District</caption>
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Phone Number</th>
        <th scope="col">District</th>
        <th scope="col">BloodGroup</th>
      </tr>
    </thead>
    <tbody>
    <?php
              $y3=(int)substr($_SESSION['todaydate'],0,4);//(index,len);
              $m3=(int)substr($_SESSION['todaydate'],5,2);
              $d3=(int)substr($_SESSION['todaydate'],8,2);
              $unqid=$_SESSION['unqid'];
              $district=$_SESSION['district'];
              $blood_group=$_SESSION['blood_group'];
              $q="SELECT * FROM additional_data WHERE 
              district!='$district' AND
              blood_group='$blood_group'
               ";
              $r=mysqli_query($con,$q);
                while($row=mysqli_fetch_array($r))
                {
                    $fdate=$row['from_date'];
                    $sdate=$row['to_date'];
                    $_SESSION['_name_']=$row['name'];
                    $_SESSION['_phone_']=$row['phone'];
                    $_SESSION['_district_']=$row['district'];
                    $_SESSION['_blood_group_']=$row['blood_group'];
                    $y1=(int)substr($fdate,0,4);//(index,len);
                    $m1=(int)substr($fdate,5,2);
                    $d1=(int)substr($fdate,8,2);
                    $y2=(int)substr($sdate,0,4);//(index,len);
                    $m2=(int)substr($sdate,5,2);
                    $d2=(int)substr($sdate,8,2);
                   // echo $fdate;
                   // echo $y1." ";
                   // echo $m1." ";
                   // echo $d1." "
    
                    if($y3>=$y1 AND $y3<=$y2)
                    {
                        if($m3>=$m1 AND $m3<=$m2)
                        {
                            if($d3>=$d1 AND $d3<=$d2)
                            {
                              ?>
                              <tr>
                              
                              <td data-label="Name"><?php echo $_SESSION['_name_']; ?></td>
                              <td data-label="Phone"><?php  echo$_SESSION['_phone_']; ?></td>
                              <td data-label="District"><?php echo$_SESSION['_district_']; ?></td>
                              <td data-label="BloodGroup"><?php echo$_SESSION['_blood_group_']; ?></td>
                         
                                </tr>
                               <?php 
                            }
                        }
                    }
                    else
                    {
                      echo "NO DATA ";
                    }
                   
               
    
                   
                }
        
        
        
        ?>
 </tr>
      
      </tbody>
    </table>
        
       

</body>
</html>
