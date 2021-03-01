<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>recuirtment-update</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <script src="bootstrap/new-jq-file.js"></script>
    <script src="bootstrap/bootstrap.js"></script>
    <script>
    $(document).ready(function(){
        $("#btnSearch").click(function(){
           
            
            
            var uid=$("#txtMobile").val();
            $.getJSON("checkworker.php?txtMobile="+uid,function(res){
            
                if(res.length==0)
					alert("Invalid id");
				else
					{
                         $("#txtname").prop("disabled","");
				$("#txtemail").prop("disabled","");
				$("#txtaddar").prop("disabled","");
                $("#txtAddr").prop("disabled","");
                $("#comboCity").prop("disabled",""); 
                $("#comboexp").prop("disabled","");
                $("#txtspl").prop("disabled","");
                $("#ppic").prop("disabled","");
				
				$("#txtname").val(res[0].name);
				$("#txtemail").val(res[0].email);
				$("#txtaddar").val(res[0].addar);
                $("#txtAddr").val(res[0].address);
                $("#comboCity").val(res[0].city); 
                $("#comboexp").val(res[0].experience);
                $("#txtspl").val(res[0].speciality);
                $("#preview").prop('src','uploads/'+res[0].ppic);
					}
            });
        });
        
    });
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
   <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
         Details of workers</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
       <!!======================================================!!>
        <div class="container">
        
        <div class="row mt-4">
            <div class="col-md-10 offset-md-1">
                <form action="recuirtment-update-process.php" method="post" enctype="multipart/form-data">
                    <div class="form-row">
                        
                        <div class="form-group col-md-12">

                            <center>
                                <img alt="" width="150" height="150" id="preview">
                            </center>
                           <center> <input type="file" class="mt-4" style="float:left" id="ppic" name="ppic" onchange="showpreview(this);" disabled></center>
                        </div>
                    
                    <div class="form-row">
                          <div class="form-group col-md-12 ">
                            <label for="txtMobile"><b><u>Enter Mobile No. for details</u></b></label>
                        </div>
                           
                        </div>  
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-12">
                            <label for="txtMobile">Mobile or UID</label>
                            <input type="text" class="form-control" id="txtMobile" name="txtMobile" placeholder="10-digit-number OR UID" >
                        </div>
                        
                    </div>
                    <div class="form-group col-md-8 offset-2">
							
							<center><input type="button" class="form-control btn-danger" id="btnSearch" value="Get Details"></center>
						</div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="txtname">Name</label>
                            <input type="text" class="form-control" id="txtname" name="txtname" disabled>
                            <small id="errname" class="text-danger"
                            ></small>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="txtemail">Email</label>
                            <input type="text" class="form-control" id="txtemail" name="txtemail"  disabled>
                            <small id="erremail" class="text-danger"></small>
                        </div>
                        </div>
                        <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="txtaddar">Addhar Number</label>
                            <input type="text" class="form-control" id="txtaddar" name="txtaddar" disabled>
                            <small id="erraddar" class="text-danger"></small>
                        </div>
                    <div class="form-group col-md-12">
                        <label for="txtAddr">Address</label>
                        <input type="text" class="form-control" name="txtAddr" id="txtAddr" disabled>
                    </div>
                    </div>

                    <div class="form-row">
                        
                        <div class="form-group col-md-12">
                            <label for="comboCity">city</label>
                            <select id="comboCity" class="form-control" name="comboCity" disabled>
                                <option selected></option>
                                <option value="Bathinda">Bathinda</option>
                                <option value="Delhi">Delhi</option>
                                <option value="malout">Malout</option>
                                <option value="Muktsar">Muktsar</option>

                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="comboexp">Experience</label>
                            <select id="comboexp" class="form-control" name="comboexp" disabled>
                                <option selected></option>
                                <option value=1>1 year</option>
                                <option value=2>2 year</option>
                                <option value=3>3 year</option>

                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                     <div class="form-group col-md-12">
                      <label>speciality</label>
                      
                      <input type="text" id="txtspl" name="txtspl" class="form-control" disabled>
                        </div>
                      
                    </div>

                <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="save changes">
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
</body>
</html>