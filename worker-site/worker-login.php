<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="floating-labels.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <script src="bootstrap/new-jq-file.js"></script>
    <script src="bootstrap/bootstrap.js"></script>
    
    <script>
      $(document).ready(function(){
          
      
        
        $("#btnsign").click(function(){
			var txtuid=$("#txtuid").val();
            var txtpwd=$("#txtpwd").val();
			$.get("worker-login-process.php?txtuid="+txtuid+"&txtpwd="+txtpwd,function(rec){
				//alert(jsonAry);
				//alert(JSON.stringify(jsonAry));
                alert(rec);
                //alert(rec);
                if(rec=="correct")
                  location.href="worker-home.php";
				
					});
			});
            
            
        });
    </script>
</head>

<body>

    <form class="form-signin" id="action" action="" >
        <center><img class="mb-4" src="uploads/favicon.ico" alt="" width="72" height="72"></center>
        <center>
            <h1 class="h3 mb-3 font-weight-normal">Worker Login</h1>
        </center>
        <label for="txtuid" class="sr-only">Email</label>
        <input type="text" id="txtuid" name="txtuid" class="form-control" placeholder="Email" required autofocus>
        <label for="txtpwd" class="sr-only">Password</label>
        <input type="password" id="txtpwd" name="txtpwd" class="form-control mt-2" placeholder="Password" required>
        <center>
            <div class="checkbox mb-3 mt-2">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
        </center>
        <input class="btn btn-lg btn-primary btn-block" type="submit" id="btnsign" value="Sign In">
        <center>
            <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
        </center>
        
    </form>





</body>

</html>
