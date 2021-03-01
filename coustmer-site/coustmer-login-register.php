<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>complaints</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/pendingcomplaint.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <script src="bootstrap/new-jq-file.js"></script>
    <script src="bootstrap/bootstrap.js"></script>
    <script>
     $(document).ready(function(){
        $("#login").click(function(){
         var mobile=$("#mobile").val();
         var pwd=$("#pwd").val();
         $.get("coustmer-login-process.php?txtuid="+mobile+"&txtpwd="+pwd,function(rec){
				//alert(jsonAry);
				//alert(JSON.stringify(jsonAry));
                //alert(rec);
             alert(rec);
                if(rec=="correct")
                   window.location.replace("coustmer-home.php?txtuid="+mobile+"&txtpwd="+pwd);
				
					});   
        }); 
         
     });    
    
    </script>
    
</head>
<body>
    
    <div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="uploads/logo_white%20(1).png" alt=""/>
                        <h3>Welcome</h3>
                        <p>Best Coustmer Service</p>
                        <br/>
                    </div>
                    <div class="col-md-9 register-right">
                       <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Register</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Login</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Registeration</h3>
                                <form action="coustmer-register-process.php" method="post">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name *" value="" id="txtfname" name="txtfname" >
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" value="" id="txtlname" name="txtlname">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" value="" id="txtpwd" name="txtpwd"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  placeholder="Confirm Password *" value="" id="txtcpwd"/>
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="male" id="txtg" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="female" id="txtg">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" value="" id="txtemail" name="txtemail"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" class="form-control" placeholder="Your Phone *" value="" id="txtmobile" name="txtmobile">
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" id="comboq" name="comboq">
                                                <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                                <option>What is your Birthdate?</option>
                                                <option>What is Your old Phone Number</option>
                                                <option>What is your Pet Name?</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter Your Answer *" value="" id="comboa" name="comboa"/>
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Register" id="submit"/>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                               <form  id="login2">
                                <h3  class="register-heading">Login</h3>
                                <div class="row register-form">
                                    <div class="col-md-6 offset-3">
                                        
                                        <div class="form-group">
                                            <input type="text" required class="form-control" placeholder="uid(mobile no.)*" value="" id="mobile" name="txtuid" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" value="" id="pwd" name="txtpwd"/>
                                        </div>


                                    </div>
                                    <div class="col-md-6 offset-2">
                                        
                                        
                                        <input type="submit" class="btnRegister"  value="login" id="login"   formaction="" />
                                    
                                    </div>
                                
                                </div>
                                </form>
                            </div>
                           
                        </div>
                    </div>
                </div>

            </div>
    
</body>
</html>