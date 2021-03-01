<?php
    
include 'allotment-process.php';
$num=mysqli_num_rows($table);
//echo $num;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>allotment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <script src="bootstrap/new-jq-file.js"></script>
    <script src="bootstrap/bootstrap.js"></script>
    <script>
    $(document).ready(function(){
        //var n=0;
        <?php for($n=0; $n<$num; $n++){  ?>
            
            
            $("#table").append("<tr><th scope='row'><?php echo $decode[$n]->uid; ?></th><th><img width='50' height='50' src='uploads/<?php echo $decode[$n]->ppic; ?>'></th><td><?php echo $decode[$n]->name; ?></td><td><?php echo $decode[$n]->city; ?></td><td><?php echo $decode[$n]->mobile; ?></td><td><?php echo $decode[$n]->status; ?></td><td><input type='button' class='btn btn-outline-primary' value='allotment' id='allot'></td></tr> ");
           
       <?php }
        ?>
        
        
    });
    
    </script>
</head>
<body>
    <div class="container">
       <div class="row bg-success">
       <div class="col-md-12 text-white ">
                <CENTER>
                    <h2><U>Allotment of Workers</U></h2>
                </CENTER>
            </div>
        </div>
        
        <table class="table table-striped table-responsive-md" >
  <thead >
   
   
    <tr >
        <th scope="col"><u>Worker<br>ID</u></th>
      <th scope="col">Photo</th>
      <th scope="col">NAME</th>
      <th scope="col">CITY</th>
      <th scope="col">MOBILE</th>
      <th scope="col">AVILABILITY</th>
      <th scope="col">Allotment</th>
      
      
      
    </tr>
    
  </thead>
  <tbody id="table">
    
    
  </tbody>
</table>
  
    </div>
    
</body>
</html>