<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"> 
    <title>Test</title>
    <style><?php include('min.css'); ?></style>
    <script><?php include('min.js'); ?></script>
    <?php
      $i = rand(1,187); // generate random number size of the number of bgs
    ?>
    <style type="text/css">
    <!--
      body{
      background-image: url(src/bg/<?php echo $i.'.gif'; ?>);
      }
    --> 
  </style>
  </head>
  <body>
    <div class="o-wrap">
      <h1 class="c-greeting">Welcome.</h1>
    </div>
  </body>
</html>
