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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <script src="bootstrap/new-jq-file.js"></script>
    <script src="bootstrap/bootstrap.js"></script>
    <script src="../../angular.min.js"></script>
    <script>
        var mod=angular.module("mymodule",[])
        mod.controller("mycontroller",function($scope,$http){
            
            $http.get("json-fetch-complain.php").then(shanti,ashanti);
					function shanti(response)
					{
						//alert(JSON.stringify(response.data));
						$scope.jsonAry=response.data;
						//$scope.x=$scope.jsonAry;
					}
					function ashanti(response)
					{
						//alert(response.data);
					}
            $http.get("json-fetch-coustmer.php").then(shanti2,ashanti2);
					function shanti2(response2)
					{
						//alert(JSON.stringify(response.data));
						$scope.jsonAry2=response2.data;
						//$scope.x=$scope.jsonAry2;
					}
					function ashanti2(response)
					{
						//alert(response.data);
					}
        });
    
    
    </script>
    <style>
        textarea{
            background-color: inherit;
            border: none;
        }
    
    </style>
    
</head>
<body>
    
    <div class="container">
       <div class="row bg-success">
       <div class="col-md-12 text-white ">
                <CENTER>
                    <h2><U>complains</U></h2>
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
        
        
        
        <table class="table table-striped table-responsive-md" ng-controller="mycontroller" ng-app="mymodule">
  <thead >
   
   
    <tr >
        <th scope="col"><u>Compalin-ID</u></th>
      <th scope="col">PRODUCT</th>
      <th scope="col">MODEL</th>
      <th scope="col">PROBLEM</th>
      
      <th scope="col">SLOT-TIME</th>
      <th scope="col">DETAILS</th>
      
      <th scope="col">UPDATE STATUS</th>
      
      
      
    </tr>
    
  </thead>
  <tbody>
   <tr ng-repeat="obj in jsonAry " >
   
			
			<td>{{obj.serialno}}</td>
			<td>{{obj.complain}}</td>
			<td>{{obj.modal}}</td>
			<td><textarea cols="60">{{obj.expalin}}</textarea></td>
			<td>{{obj.timeslot}}</td>
			<td><input type="button" class="btn-sm btn-primary" value="details" data-toggle='modal' data-target='.bd-example-modal-xl'></td>
			<td><input type="button" class="btn btn-primary" value="update"></td>
			
			
			
		</tr>
    
    
  </tbody>
</table>
  
    </div>
    
</body>
</html>