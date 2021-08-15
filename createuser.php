<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create User</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
  <link rel="stylesheet" href="CSS/createuser.css" type="text/css">


</head>

<body>
  <?php
  include 'config.php';
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $balance = $_POST['balance'];
    $sql = "insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result = mysqli_query($conn, $sql);
    if ($result) {

      echo "<script> alert('User created');
                               window.location='transfermoney.php';
                     </script>";
    }
  }
  ?>
  <?php
  include 'navbar.php';
  ?>


  <div class="container-fluid justify-content-center pt-5">
    <h2 class="text-center pt-1  ml-2 ff">Register Here</h2>
    <div class="row justify-content-center mt-4">
      <div class="col-1 shadow" style="border-radius: 5px;">
        <form class="form-container" style="background-color:Aqua;">
          <div class="row justify-content-center mt-4">
            <i class="fas fa-user fa-2x"></i>
          </div>
          <div class="row justify-content-center mt-5"><i class="far fa-envelope fa-2x"></i>
          </div>
          <div class="row justify-content-center mt-5"><i class="fas fa-wallet fa-2x"></i>
          </div>
        </form>
      </div>
      <div class="col-12 col-sm-3 ">
        <form class="form-container" style="background-color:Aqua" method="post">
          <div class="myform">
            <div class="form-group">
              <label for="Name">Name</label>
              <input class="form-control" placeholder="Name" type="text" name="name" required>
            </div>
            <div class="form-group">
              <label for="Email">Email</label>
              <input class="form-control" placeholder="Enter Email" type="email" name="email" required>
            </div>
            <div class="form-group mb-5">
              <label for="Balance">Balance</label>
              <input class="form-control" placeholder="Balance" type="number" name="balance" required>
            </div>
            <div class="form-group">
              <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <footer class="text-center mt-5 py-2">
    <p style="font-family: poppins; font-size: 16px;">&copy 2021. Developed by <b>SANATH M C</b> <br> Sparks Foundation</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>
