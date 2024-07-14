<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
    <?php
    include("navbar.php");
    ?>
    

    <form class="row g-3 container" action="insert.php" method="post">
  <div class="col-md-6">
    <label for="fname" class="form-label">First Name</label>
    <input type="text" class="form-control" id="fname" name="first">
  </div>
  <div class="col-md-6">
    <label for="lname" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="lname" name="last">
  </div>
  <div class="col-md-6">
    <label for="father" class="form-label">Father's Name</label>
    <input type="text" class="form-control" id="father" name="fathern">
  </div>
  <div class="col-md-6">
    <label for="code" class="form-label">National Code</label>
    <input type="text" class="form-control" id="code"name="ncode">
  </div>
  </div>
  <div class="col-md-6">
    <label for="phone" class="form-label">Phone Number</label>
    <input type="text" class="form-control" id="phone" name="phonen">
  </div>
  </div>
  <div class="col-md-6">
    <label for="period" class="form-label">Insurance Period</label>
    <input type="text" class="form-control" id="period" name="ip">
  </div>
  <div class="col-12">
    <label for="addres" class="form-label">Address</label>
    <input type="text" class="form-control" id="addres" name="ad">
  </div>
  <div class="col-md-4">
    <label for="gn" class="form-label">Gender</label>
    <select id="gn" class="form-select" name="gender">
      <option selected>...</option>
      <option>Male</option>
      <option>Female</option>
    </select>
  </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>



    
</body>
</html>