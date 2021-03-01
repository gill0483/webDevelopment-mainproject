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
    
    
    
    <div class="container">
  <div class="text-center">
    <img class="d-block mx-auto mb-4" src="" alt="" width="72" height="72">
    <h2>Profile Information</h2>
    <p class="lead">This is manadatory profile which is need for submit compalint.</p>
  </div>

  <div class="row">
       
    <div class="col-md-8 order-md-1 offset-sm-2">
      <h4 class="mb-3"></h4>
      <form class="needs-validation" novalidate action="submit-complaint-process.php" method="post">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" id="txtfname" name="txtfname" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" id="txtlname" name="txtlname" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>
        <div class="row">
        <div class="mb-3 col-md-6">
          <label for="username">Mobile No.</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">+91</span>
            </div>
            
            <input type="text" class="form-control" id="txtmobile" name="txtmobile" placeholder="Mobile Number" required>
            <div class="invalid-feedback" style="width: 100%;">
              Your Mobile no. is required.
            </div>
          </div>
        </div>

        <div class="mb-3 col-md-6">
          <label for="email">Email <span class="text-muted">(Optional)</span></label>
          <input type="email" class="form-control" id="txtemail" name="txtemail" placeholder="you@example.com">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>
        </div>

        <div class="mb-3">
          <label for="address">Address</label>
          <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" id="address2" name="address2" placeholder="Apartment or suite">
        </div>

        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Country</label>
            <select class="custom-select d-block w-100" id="country" name="country" required>
              <option value="">Choose...</option>
              <option>United States</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">State</label>
            <select class="custom-select d-block w-100" id="state" name="state" required>
              <option value="">Choose...</option>
              <option>California</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Zip</label>
            <input type="text" class="form-control" id="zip" name="zip" placeholder="" required>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>
        
       
       <hr class="mb-4">

        

        
       
       
        <div class="col-md-4 offset-4">
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