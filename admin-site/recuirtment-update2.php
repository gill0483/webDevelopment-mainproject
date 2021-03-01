<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <script src="bootstrap/new-jq-file.js"></script>
    <script src="bootstrap/bootstrap.js"></script>
</head>
<body>
    
    <div class="container">
        
        <div class="row mt-4">
            <div class="col-md-12">
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
                              <label for="txtMobile"><center><b><u><center>Enter Mobile No. for details</center></u></b></center></label>
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
    
</body>
</html>