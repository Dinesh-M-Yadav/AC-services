
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
    <div class="container text-center my-5 ">
        
   
    <?php 
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="ac";
    $con=mysqli_connect($servername,$username,$password,$dbname);
    $sql="Select * from register";
    $result=mysqli_query($con,$sql);
    if (mysqli_num_rows($result)) {
        # code...
        echo "<div class='table-responsive text-center my-5'>
        <table class='table table-primary'>
            <thead>
                <tr>
                    <th scope='col'>Id</th>
                    <th scope='col'>Name </th>
                    <th scope='col'>username</th>
                    <th scope='col'>password</th>
                    <th scope='col'>Action</th>
                </tr>
            </thead>
            <tbody>";
            while ($rows=mysqli_fetch_assoc($result)) {
                # code...
                echo "<tr class=''>
                <td scope='row'>{$rows['id']}</td>
                <td>{$rows['name']}</td>
                <td>{$rows['username']}</td>
                <td>{$rows['password']}</td>
                <td><a name='' id='' class='btn btn-warning' href='edituserform.php?id={$rows['id']}' role='button'>Edit</a>
                <a name='' id='' class='btn btn-danger' href='deleteuser.php?id={$rows['id']}' role='button'>Delete</a></td>
            </tr>";
            }echo "  
            </tbody>
        </table>
    </div>
     ";
    } else {
        # code...
        header("Location:edituser.php");
    }
    
    ?>
   
     </div>
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

