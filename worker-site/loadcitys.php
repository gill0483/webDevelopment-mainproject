<?php
include 'loadcity-process.php';
$num=mysqli_num_rows($table);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <script src="bootstrap/new-jq-file.js"></script>
    <script src="bootstrap/bootstrap.js"></script>
    <script>
    $(document).ready(function(){ 
        //var n=0;
        
        <?php for($n=0; $n< $num; $n++){  
            $t=0;
             for($i=$n; $i< $num; $i++)
             { 
              if($decode[$n]->city != $decode[$i]->city)
                  $t++ ;
                
          } ?>
    
         if( <?php echo $t ?>==<?php echo $num ?> )
            $("#city").append("<option><?php echo $decode[$n]->city;  ?></option>");
        
       
        
       <?php }
        ?>
        
        
    });
    
        
    </script>
</head>
<body>
   <select id="city">
       <option selected>-select-</option>
   </select>
    
</body>
</html>