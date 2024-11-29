<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Anylist</title>
  <!-- Bootstrap CSS (CDN) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
</head>

<body class="d-flex flex-column min-vh-100">
  <?php include('navbar.php'); ?>  <!--Navbar is a separate php so you don't have to manually edit every page-->
  
  <!--Content Centered by Bootstrap-->
  <div class="d-flex flex-column justify-content-center align-items-center flex-grow-1 text-center">
    <img src="images/logo.png" alt="Anylist" class="mb-4">
    <a href="clients.php" class="btn btn-primary rounded-5" style="width: 200px; height: 60px; font-size: 30px;">
      Make a list
    </a>
  </div>

  <!-- Bootstrap JS (CDN) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
