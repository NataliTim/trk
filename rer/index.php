<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ООО ТехРесурсКомплек</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
  <link rel="manifest" href="favicon/site.webmanifest">
  <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#2b5797">
  <meta name="theme-color" content="#ffffff">

  <meta property="og:title" content="ООО ТехРесурсКомплек" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="http://t-r-k.com" />
  <meta property="og:image" content="/img/siteog.jpg" />
</head>
<body>
<?php require_once "blocks/header.php" ?>
<div class="container mt-3">
  <div class="main-screen row">
    <div class="col-12 col-md-4 align-self-center">
      <h1 class="blue align"> Компания "ТехРесурсКомплект"</h1>
      <p class="light-blue align">Предлагает качественную продукцию, выполненную по высоким стандартам современного
        рынка.</p>
    </div>
    <div  class="col-12 col-md-8 svg-img align-self-end" align="right">
      <?php require_once "img/factory2.svg" ?>
    </div>
  </div>
</div>

<?php require_once "blocks/carousel.php"?>
<?php require_once "blocks/footer.php" ?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
  $(function() {
    setTimeout(function(){
      $('body').addClass("ready_animate"); }, 300);
  });
</script>
</body>
</html>