<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script src="bootstrap/new-jq-file.js"></script>
    <script src="bootstrap/bootstrap.js"></script>
    
    
    <style>
    .container {
  max-width: 960px;
}

.lh-condensed { line-height: 1.25; }

    </style>
    
    
    
</head>
<body>
    
    
    
    
    
  
    
    
    
    
    
    <div class="container border mt-5 mb-5  ">
  <div class="text-center ">
    <img class="d-block mx-auto mb-4" src="" alt="" width="72" height="72">
    <h2>Complaint form</h2>
    <p class="lead">By filling below form, you can submit form and you will get response in 1 week.</p>
  </div>

  <div class="row">
       
    <div class="col-md-8  offset-md-2">
      <h4 class="mb-3"></h4>
      <form class="needs-validation" novalidate action="submit-complaint-process.php" enctype="multipart/form-data" method="post">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">User Id</label>
            <input type="text" class="form-control" id="txtuid" name="txtuid" placeholder="" value="" required>
            <span class="small"><B>*Note:-Your Mobile no. is your UID</B></span>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          
        </div>
        
        
        <div class="row">
           <div class="col-md-6">
              <label for="complaint">Product Name</label>
                <select class="form-control" id="combocomplain" name="combocomplain" >
                    <option disabled selected value="">--select--</option>
                    <option value="air condition">Air Condition(AC)</option>
                    <option value="tv">Telvision</option>
                    <option value="computer">Computer</option>
                    <option value="fredge">Fredge</option>
                    <option value="heater">Heater</option>
                    
                    
                </select>
                 
                               
            </div>
            <div class="col-md-6">
             <label for="modal">Modal</label>
             <input class="form-control" type="text" id="modal" name="modal">
              
                
            </div>
            
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <label for="buydate" class="mt-3" >Purchase Date</label>
                <input type="date" class="btn-block form-control" id="purchase" name="purchase"> 
            </div>
            <div class="col-md-6 mt-3">
                <label for="picbill">Attach Bill</label>
                <input class="form-control-file" type="file" name="bil">
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12 mt-3">
             
              <label for="complaint">Explain</label>
                <textarea type="text" class="form-control" maxlength="200" style=" height:110px; " id="explain" name="explain" ></textarea>
            </div>  
            </div>
            <div class="row">
            <div class="col-md-12 mt-3">
             
              <label for="complaint">Time Slot</label>
                <select name="timeslot" id="timeslot">
                <option >--select--</option>
                <option>9:00--11:00</option>
                <option>11:00--13:00</option>
                <option>13:00--15:00</option>
                <option>15:00--17:00</option>
                
                </select>
                <span class="form-control-range"><b>*Note:-choose preferable time when technician can visit your place</b></span>
            </div>
            
            
        </div>
       <hr class="mb-4">

        

        
       
       
        <div class="col-md-4 offset-md-4">
        <input class="btn btn-primary btn-lg btn-block" type="submit" value="Submit">
        </div>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017-2019 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>

    
    
    
</body>
</html>