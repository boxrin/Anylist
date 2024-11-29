
<?php
$servename = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

$conn = mysqli_connect($servename, $username, $password, $dbname);

$sql = "select * from clients";
$result = mysqli_query($conn, $sql);


$sql = 'SELECT * FROM clients';

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLIENT LIST</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="d-flex flex-column min-vh-100">
  <?php include('navbar.php'); ?>  <!--Navbar is a separate php so you don't have to manually edit every page-->
  
  

  <!-- Bootstrap JS (CDN) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
<body>
    
    <div class="container my-5">
       <h2>
            Client List
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRy8ZY8UCSG6dGgMt8nCEVuTzzRJNwZ-LTvBA&s" alt="client list image" class="d-inline ms-3"  style="height: 50px;">
        </h2>
        <a class="btn btn-primary" href="/crud/add.php" role="button">ADD NEW CLIENT</button></a>
        <br>


        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Birthday</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Country</th>
                    <th>Created at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                    <td>$row[ID]</td>
                    <td>$row[Last_name]</td>
                    <td>$row[First_name]</td>
                    <td>$row[Birthday]</td>
                    <td>$row[Gender]</td>
                    <td>$row[Phone_number]</td>
                    <td>$row[Email]</td>
                    <td>$row[Country]</td>
                    <td>$row[created_at]</td>
                    <td>
                     <a class='btn btn-primary btn-sm' role='button' href='/crud/edit.php?ID=$row[ID]'>EDIT</a>
                     
                    
                    
                     <a class='btn btn-danger btn-sm' role='button' href='/crud/remove.php?ID=$row[ID]'>REMOVE</a>
                    
                    </td>
                 </tr>";
                }
                ?>

            </tbody>
        </table>
    </div>
</body>

</html>


