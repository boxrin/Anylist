<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>How to use - Anylist</title>
  <link rel="stylesheet" href="css/about.css">
</head>
<body>
  <?php include('navbar.php'); ?>

  <header>
    <div class="header">
      <img src="images/logo.png" alt="Anylist Logo">
    </div>
  </header>

  <!-- Video Section -->
  <section>
	<center>
    <div class="video-container">
      <video width="auto" height="auto" muted autoplay>
        <source src="videos/video.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <script>
          const video = document.querySelector('video');
          video.muted = true;
      </script>
    </div>
	</center>
  </section>

</body>
</html>
