<?php require 'variable.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title ?></title>
</head>
<body>
  <?php include 'template/nav.php'?>
  <h1><?php echo $title?></h1>
  <p><?php echo $description?></p>
  <small><?php echo $author ?></small>
</body>
</html>