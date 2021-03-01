<?php
$uid=$_GET["uid"];
include 'coustmer-complaint-status-process.php';
$num=mysqli_num_rows($table);
//echo $num;
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>allotment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <script src="bootstrap/new-jq-file.js"></script>
    <script src="bootstrap/bootstrap.js"></script>
    <style>
        textarea{
            border:none;
            background-color: inherit;
            //resize: none;
        }
    </style>
    
    <script>
    $(document).ready(function(){
        
        
        
        
        
        
        
        
        
        
        //var n=0;
        <?php for($n=0; $n<$num; $n++){  ?>
            
            
            $("#table").append("<tr><th scope='row'><?php echo $decode[$n]->serialno ; ?></th><th><?php echo $decode[$n]->complain;  ?></th><td><?php echo $decode[$n]->modal; ?></td><td> <?php echo $decode[$n]->submitdatetime; ?></td><td><?php echo $decode[$n]->status; ?></td><td><?php echo $decode[$n]->workername; ?></td><td><input type='button' class='btn btn-outline-primary' value='allot'></td></tr> ");
           
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
                    <h2><U>Status of Complaints</U></h2>
                </CENTER>
            </div>
        </div>
        
        <table class="table table-striped table-responsive-md" >
  <thead >
   
   
    <tr >
      <th scope="col">Comp-ID</th>
      <th scope="col">Product</th>
      <th scope="col">Modal</th>
      <th scope="col">Submit-Date</th>
      <th scope="col">Status</th>
      <th scope="col">Details</th>
      <th scope="col">Edit</th>
      
      
      
    </tr>
    
  </thead>
  <tbody id="table">
    
    
  </tbody>
</table>
  
    </div>
    
</body>
</html>