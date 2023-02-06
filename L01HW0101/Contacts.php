<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php 
    require_once('style.php')
    ?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary placeholder col-12 bg-dark">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <?php
                    require_once('menu.php');
                    ?>
          </div>
        </div>
      </nav>

      <div class="box">
            <h1>Contacts</h1>
            <h2><span> welcome to our site</span></h2>
            <p>ipsum dolor</p>
        </div>





</body>
</html>