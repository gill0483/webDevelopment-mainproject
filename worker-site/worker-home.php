<?php

include_once("mysql-connection2.php");

//$txtuid=$_GET["txtuid"];
//$txtpwd=$_GET["txtpwd"];
session_start();
if($_SESSION["txtuid"]=="")
    header("location:worker-login.php");
$txtuid=$_SESSION["txtuid"];
$query="select * from workersdata where email='$txtuid'";
$table=mysqli_query($dbcon,$query);
//mysqli_fetch_array($table);
$arry=array();
$arry[]=mysqli_fetch_array($table);
$json=json_encode($arry);
$decode=json_decode($json);
//echo $decode[0]->mobile;



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cover.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">

    <script src="bootstrap/new-jq-file.js"></script>
    <script src="bootstrap/bootstrap.js"></script>
    <script src="../../angular.min.js"></script>

    
    <?//++++++++++++===text-area-style==++==+=+?>
    <style>
        .hide1 {
            display: none;
        }
        button      {
            border: 0px;
        
        }
        
        
    </style>
    <script>
        var mod=angular.module("mymodule",[]);
        mod.controller("mycontroller",function($scope,$http){
            //alert("hello");
            $http.get("worker-home-details-process.php?uid="+).then(pos,neg);
            function pos(res)
            {
                $scope.details=res.data;
            }
            function neg(res)
            {
                alert(res.data);
            }
            
            
        });
    
    
    </script>
    
    <?//+++++++photo-prview//++++++?>
    <script>
       
        function showpreview(file) {
        
        if (file.files && file.files[0])
		 {  
            var reader = new FileReader();
            reader.onload = function (e) {
                $("#preview").prop('src', e.target.result);   
               
            }
            reader.readAsDataURL(file.files[0]);
        }
	}
    </script>
</head>

<body>

    
    <div class="modal fade bd-example-modal-complaints" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">


                <div class="modal-header ">
                    <h4 class="modal-title text-center col-md-12" id="exampleModalLabel">
                        Details of complaint</h4>
                    <button type="button" class="close ml-n5" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <!!======================================================!!>
                        <div class="container">

                            <div class="row mt-4">
                                <div class="col-md-10 offset-md-1">
                                    <form action="coustmer-profile-update-process.php" method="post" enctype="multipart/form-data">
                                        
                                        

                                        <div class="form-row">
                                           <div class="form-group col-md-4">
                                                <label for="txtname">Comp-ID</label>
                                                <input type="text" class="form-control" id="txtname" name="txtname" value=""
                                                disabled>
                                                <small id="errname" class="text-danger"></small>
                                            </div>
                                           
                                            <div class="form-group col-md-4">
                                                <label for="txtname">Person Name</label>
                                                <input type="text" class="form-control" id="txtname" name="txtname" value=""
                                                disabled>
                                                <small id="errname" class="text-danger"></small>
                                            </div>
                                            
                                            
                                                <div class="form-group col-md-4">
                                                    <label for="txtMobile">Mobile</label>
                                                    <input type="text" class="form-control" id="txtMobile"   name="txtmobile" value="" placeholder="10-digit-number" disabled>
                                            

                                            </div>
                                        </div>
                                        
                                        <div class="form-row mb-3">
                                            
                                            <div class="form-group col-md-8">
                                                <label for="txtAddr">Address</label>
                                                <input type="text" class="form-control" name="txtaddr" id="txtAddr" value="" disabled>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="txtAddr">Land-Mark</label>
                                                <input type="text" class="form-control" name="txtlandmark" id="txtland" value="" disabled>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="txtemail">Product</label>
                                                <input type="text" class="form-control" id="txtemail" name="txtemail" value="" disabled>
                                                <small id="erremail" class="text-danger"></small>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="comboCity">Modal</label>
                                                <input id="comboCity" class="form-control" name="combocity" value="" disabled>

                                                
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="comboCity">Purchase-date</label>
                                                <input id="comboCity" class="form-control" name="combocity" value="" disabled>

                                                
                                            </div>
                                            
                                            
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                               <label for="">Problem</label>
                                                <textarea class="form-control" disabled ></textarea>
                                            </div>
                                        </div>

                                        
                                      
                                        <div class="modal-footer mt-2">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                        <! //============================================!>

                </div>


            </div>
        </div>
    </div>

    
    
    



    <div class="modal fade bd-example-modal-profile" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true" ng-app="mymodule" ng-controller="mycontroller">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">


                <div class="modal-header ">
                    <h4 class="modal-title text-center col-md-12" id="exampleModalLabel">
                        Worker Profile</h4>
                    <button type="button" class="close ml-n5" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <!!======================================================!!>
                        <div class="container">

                            <div class="row mt-4">
                                <div class="col-md-10 offset-md-1">
                                    <form action="worker-profile-update-process.php" method="post" enctype="multipart/form-data">
                                        <div class="form-row">

                                            <div class="form-group col-md-2 offset-md-5">
                                                

                                                <center>
                                                   <div style="width:100px;height:100px; border:1px lightgrey solid; ">
                                                    <img alt="" src="../uploads/<?php echo $decode[0]->ppic; ?>"  width="100"
                                                    height="100" id="preview">
                                                    </div>
                                                </center>
                                                <center> <input type="file" class="mt-4" style="float:left" id="ppic" name="ppic" onchange="showpreview(this);"  ></center>
                                                </div>
                                            


                                        </div>

                                        

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="txtname">Name</label>
                                                <input type="text" class="form-control" id="txtname" name="txtname" value="<?php echo $decode[0]->name; ?>">
                                                <small id="errname" class="text-danger"></small>
                                            </div>
                                            
                                            
                                                <div class="form-group col-md-6">
                                                    <label for="txtMobile">Mobile</label>
                                                    <input type="text" class="form-control" id="txtMobile"   name="txtmobile" value="<?php echo $decode[0]->mobile; ?>" placeholder="10-digit-number">
                                            

                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="txtemail">Email</label>
                                                <input type="text" class="form-control" id="txtemail" name="txtemail" value="<?php echo $decode[0]->email; ?>">
                                                <small id="erremail" class="text-danger"></small>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="comboCity">city</label>
                                                <input id="comboCity" class="form-control" name="combocity" value="<?php echo $decode[0]->city; ?>">

                                                
                                            </div>
                                            
                                            
                                        </div>
                                        <div class="form-row mb-4">
                                            
                                            <div class="form-group col-md-8">
                                                <label for="txtAddr">Address</label>
                                                <input type="text" class="form-control" name="txtaddr" id="txtaddrress" value="<?php echo $decode[0]->address; ?>">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="txtAddr">Addar Number</label>
                                                <input type="text" class="form-control" name="txtaddar" id="txtaddr" value="<?php echo $decode[0]->addar; ?>">
                                            </div>
                                        </div>

                                        
                                      
                                        <div class="modal-footer mt-2">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <input type="submit" class="btn btn-primary" value="save changes" >
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                        <! //============================================!>

                </div>


            </div>
        </div>
    </div>



 
    
    <div class="container d-flex w-100 p-3 h-100 mx-auto flex-column text-center">
        <header class="masthead mb-auto">
            <div class="inner">
                <h3 class="masthead-brand">WORKER HOME</h3>
                <nav class="nav nav-masthead justify-content-center">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                    <a class="nav-link active" data-toggle="modal" data-target=".bd-example-modal-profile">Profile</a>
                    <a class="nav-link active " href="#">Contact</a>
                    <form action="logout-worker-home.php">
                    <button class="btn btn-outline-primary ml-5 mr-n3 " type="submit">logout</button>
                    </form>

                </nav>
            </div>
        </header>
        <!==++=+===++===+=+=+=+=+=+=+=+=+=+=+=+=+++++++++++=+=+==+=+=+=+=+=+=+=+=+=+=+==+=+=+!>



        

        <main role="main" class="inner cover  text-center ">


            <div class="container">
                <div class="card-deck mb-3 text-center">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header">
                            <h2 class="my-0 font-weight-normal"><u>pendind complaints</u></h2>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title pricing-card-title">features<small class="text-muted"></small></h5>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li></li>
                                <li>complaint regarding product</li>
                                <li>Get home service</li>
                                <li>choose preferable time</li>
                            </ul>
                            <a class="btn btn-lg btn-block btn-primary" href="worker-getcomplains.php" id="complain">check complains</a>
                        </div>
                    </div>
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header">
                            <h2 class="my-0 font-weight-normal">Deatils of workers</h2>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title pricing-card-title">can access:<small class="text-muted"></small></h5>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Any Updation</li>
                                <li>Modification</li>
                                <li>Addhar number</li>
                                <li></li>
                            </ul>
                            <a class="btn btn-lg btn-block btn-primary" id="status">
                                Get Status
                            </a>
                        </div>
                    </div>
                    <div class="card mb-4 shadow-sm">
                        <div class="card-header">
                            <h2 class="my-0 font-weight-normal">Allotment</h2>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title pricing-card-title">can access: <small class="text-muted"></small></h5>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>current location</li>
                                <li>allot workers</li>
                                <li>get status of workers</li>
                                <li></li>
                            </ul>
                            <a class="btn btn-lg btn-block btn-primary" href="allotment.php">Allotment</a>
                        </div>
                    </div>
                </div>


            </div>




        </main>

        <footer class="mastfoot mt-auto">
            <div class="inner">
                <center>
                    <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
                </center>
            </div>
        </footer>
    </div>




    <!=====++++=+++++=+=+=+=+=+====+=+=+=+=+=+==+=+=+=+====+=+=+=+=+=+====+=+=+=+=+=+==+=+??!>

</body>

</html>
