<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <style></style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <script src="https://kit.fontawesome.com/19af404e00.js" crossorigin="anonymous"></script>
  <style>
    .video-container {
      position: relative;
      padding-bottom: 56.25%;
      /* 16:9 aspect ratio */
      height: 0;
      overflow: hidden;
      background: #000;
    }

    .video-container iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }
  </style>
</head>

<body>
  <?php include("navbar.php") ?>
  <div class="imgContent" style="margin-top: 65px; margin-bottom: 65px">
    <img src="./img/header.jpg" alt="" width="100%" />
  </div>

  <div class="container-fluid">
    <div class="container">
      <div class="row my-3 p-4">
        <div class="col col-12 col-md-6 p-auto">
          <p>
            Easily realign text to components with text alignment classes. For
            start, end, and center alignment, responsive classes are available
            that use the same viewport width breakpoints as the grid system.
          </p>
        </div>
        <div class="col col-12 col-md-6 p-auto">
          <img src="./img/content1.jpg" alt="" width="100%" />
        </div>
      </div>
      <div class="row my-3 p-4">
        <div class="col col-12 col-md-6 p-auto">
          <img src="./img/content1.jpg" alt="" width="100%" />
        </div>

        <div class="col col-12 col-md-6 p-auto">
          <p>
            Easily realign text to components with text alignment classes. For
            start, end, and center alignment, responsive classes are available
            that use the same viewport width breakpoints as the grid system.
          </p>
        </div>
      </div>
      <div class="row my-3 p-4">
        <div class="video-container">
          <iframe src="https://www.youtube.com/embed/06g45aGaswQ" frameborder="0" width="100%" allow="autoplay;" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>

  <?php
  include('footer.php');
  ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</html>