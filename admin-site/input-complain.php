<?php

include 'input-compalin-process.php';
include 'allotment-process.php';
$num2=mysqli_num_rows($table2);
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
    <style>
        textarea {
            border: none;
            background-color: inherit;
            //resize: none;
        }

    </style>
    <script>
        $(document).ready(function() {
            //var n=0;


            <?php for($n=0; $n<$num; $n++){  ?>


            $("#table").append("<tr><th scope='row'><?php echo $decode[$n]->serialno ; ?></th><th><?php echo $decode[$n]->complain;  ?></th><td><?php echo $decode[$n]->modal; ?></td><td><textarea cols='60' disabled> <?php echo $decode[$n]->expalin; ?> </textarea> </td><td><?php echo $decode[$n]->timeslot; ?></td><td><?php echo $decode[$n]->submitdatetime; ?></td><td><input type='button' class='btn btn-outline-primary' value='allot' data-toggle='modal' data-target='.bd-example-modal-xl' id='<?php echo $decode[$n]->serialno ; ?>' onclick='a=<?php echo $decode[$n]->serialno ; ?>'  ></td></tr> ");

            <?php }
        ?>

        });
        
        

    

    </script>
    <script>
    $(document).ready(function(){
        //var n=0;
        <?php for($n=0; $n<$num2; $n++){  ?>
            
            
            $("#table2").append("<tr><th scope='row'><?php echo $decode2[$n]->uid; ?></th><th><img width='50' height='50' src='../uploads/<?php echo $decode2[$n]->ppic; ?>'></th><td><?php echo $decode2[$n]->name; ?></td><td><?php echo $decode2[$n]->city; ?></td><td><?php echo $decode2[$n]->mobile; ?></td><td><textarea cols='6' disabled><?php echo $decode2[$n]->speciality; ?></textarea></td><td><?php echo $decode2[$n]->status; ?></td><td><input type='button' class='btn btn-outline-primary' value='select' id='<?php echo $decode2[$n]->uid; ?>' ></td></tr> ");
           
       <?php }
        ?>
        
        //=+++=++=+=+=+=====+=+=+====+=+=+=+=+=+==++=+=+=+===========+=+=+===+++++++++==+==//
        <?php for($n=0; $n<$num2; $n++){  ?>
        $("#<?php echo $decode2[$n]->uid; ?>").click(function(){
            //alert(a);

            $.get("do-allot-worker-process.php?wid="+this.id+"&cid="+a,function(res){
            
                
                
                
                location.reload(true);
            });
        });
       
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
                    <h2><U>Pending complaints</U></h2>
                </CENTER>
            </div>
        </div>




        <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">


                    <div class="modal-header ">
                        <h4 class="modal-title text-center col-md-12" id="exampleModalLabel">
                            allotment of workers</h4>
                        <button type="button" class="close ml-n5" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <!!======================================================!!>
                            <div class="container">
                                <div class="row bg-success">
                                    <div class="col-md-12 text-white ">
                                        <CENTER>
                                            <h2><U></U></h2>
                                        </CENTER>
                                    </div>
                                </div>

                                <table class="table table-striped table-responsive-md">
                                    <thead>


                                        <tr>
                                            <th scope="col"><u>Worker<br>ID</u></th>
                                            <th scope="col">Photo</th>
                                            <th scope="col">NAME</th>
                                            <th scope="col">CITY</th>
                                            <th scope="col">MOBILE</th>
                                            <th scope="col">Speciality</th>
                                            <th scope="col">Bussy-Hours</th>
                                            <th scope="col">Allotment</th>



                                        </tr>

                                    </thead>
                                    <tbody id="table2">


                                    </tbody>
                                </table>

                            </div>
                            <! //============================================!>

                    </div>


                </div>
            </div>
        </div>






        <table class="table table-striped table-responsive-md">
            <thead>


                <tr>
                    <th scope="col">Comp-ID</th>
                    <th scope="col">Product</th>
                    <th scope="col">Modal</th>
                    <th scope="col">Problem</th>
                    <th scope="col">Slot</th>
                    <th scope="col">Submit-Date Time</th>
                    <th scope="col">Allot-Worker</th>



                </tr>

            </thead>
            <tbody id="table">


            </tbody>
        </table>

    </div>

</body>

</html>
