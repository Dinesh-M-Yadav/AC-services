<?php 

$id=$_GET["id"];
$servername="localhost";
$username="root";
$password="";
$dbname="ac";

$con=mysqli_connect($servername,$username,$password,$dbname);
$sql="select * from register where id='$id'";
$res=mysqli_query($con,$sql);
$rows=mysqli_fetch_assoc($rows);
?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <div class="container my-5 border border-dark w-3 border-2  col-xl-6">
        <div class="text-center"><h4>Edit Form</h4>
    <hr>
<form action="updatauser.php" method="post">
    <div class="mb-3">
        <label class="visually-hidden" for="inputName">id</label>
        <input type="hidden" class="form-control" name="id" id="inputName" value="<?php echo"{$rows['id']}";?>" placeholder="">
    </div>
    
    <div class="mb-3">
      <label for="" class="form-label">Name</label>
      <input type="text"class="form-control" name="name" id="" aria-describedby="helpId" value="<?php echo"{$rows['name']}";?>" placeholder="">
    </div>


    <div class="mb-3">
      <label for="" class="form-label">username</label>
      <input type="text"class="form-control" name="username" id="" aria-describedby="helpId" value="<?php echo"{$rows['username']}";?>" placeholder="">
    </div>

    <div class="mb-3">
      <label for="" class="form-label">password</label>
      <input type="text"class="form-control" name="pass" id="" aria-describedby="helpId" value="<?php echo"{$rows['password']}";?>" placeholder="">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    <br><br>
    </div>
    </div>
    </form>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
  </script>
</body>

</html>