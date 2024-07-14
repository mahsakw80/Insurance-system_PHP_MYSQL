<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
  <?php
  include ("conf.php");
  include ("navbar.php");
  
  $sql="SELECT id,firstname,lastname,fathersName,NationalCode,gender,phoneNumber,addres,Insurance_period,reg_date FROM users";
  $result=mysqli_query($conn,$sql);
  ?>
      <h1 class="container">Lists of Users</h1>
    <table class="table  table-striped-primary container">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Father's Name</th>
            <th scope="col">National Code</th>
            <th scope="col">Gender</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Addres</th>
            <th scope="col">Insurance Period</th>
            <th scope="col">Start Date</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
          
          ?>
          <tr>
            <th scope="row"><?php echo $row["id"]?></th>
            <td><?php echo $row["firstname"]?></td>
            <td><?php echo $row["lastname"]?></td>
            <td><?php echo $row["fathersName"]?></td>
            <td><?php echo $row["NationalCode"]?></td>
            <td><?php echo $row["gender"]?></td>
            <td><?php echo $row["phoneNumber"]?></td>
            <td><?php echo $row["addres"]?></td>
            <td><?php echo $row["Insurance_period"]?></td>
            <td><?php echo $row["reg_date"]?></td>
            <td><a href="index.php?id= <?php echo $row["id"]?>"><i id="0" class="float-end m-2 fa-solid fa-pen-to-square" ></a></td>
            <td><a href="delet.php?id= <?php echo $row["id"]?>"><i class="float-end m-2 fa-solid fa-trash"></a></td>
          </tr>
          <?php
            }}
            else {echo "0 results";}
            mysqli_close($conn);
            
          ?>
        </tbody>
      </table>
</body>
</html>