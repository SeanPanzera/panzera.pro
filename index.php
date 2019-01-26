<!DOCTYPE html>
<html lang="en" class="home">
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
  <navigation class="o-navigation">
    <ul class="c-nav-list">
      <li class="c-nav-list__item c-nav-list__home">
        <a href="" class="cyan">Home</a>
      </li>
      <li class="c-nav-list__item">
        <a href="" class="green">About</a>
      </li>
      <li class="c-nav-list__item">
        <a href="" class="magenta">What's New</a>
      </li>
      <li class="c-nav-list__item">
        <a href="" class="yellow">Why are you here?</a>
      </li>
    </ul>
  </navigation>
  <body>
    <div class="o-wrap">
      <h1 class="c-greeting">Welcome.</h1>
    </div>
  </body>
</html>
