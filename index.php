<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"> 
    <title>Test</title>
    <style><?php include('min.css'); ?></style>
    <script><?php include('min.js'); ?></script>
    <?php
      $bg = array(
      'bg-01.gif','bg-02.gif','bg-03.gif','bg-04.gif','bg-05.gif','bg-06.gif','bg-07.gif','bg-08.gif','bg-09.gif','bg-10.gif','bg-11.gif','bg-12.gif','bg-13.gif','bg-14.gif','bg-15.gif','bg-16.gif','bg-17.gif','bg-18.gif','bg-19.gif','bg-20.gif','bg-21.gif','bg-22.gif','bg-23.gif','bg-24.gif','bg-25.gif','bg-26.gif','bg-27.gif','bg-28.gif','bg-29.gif','bg-30.gif','bg-31.gif','bg-32.gif','bg-33.gif','bg-34.gif','bg-35.gif','bg-36.gif','bg-37.gif','bg-38.gif','bg-39.gif','bg-40.gif','bg-41.gif','bg-42.gif','bg-43.gif','bg-44.gif','bg-45.gif','bg-46.gif','bg-47.gif','bg-48.gif','bg-49.gif','bg-50.gif','bg-51.gif','bg-52.gif','bg-53.gif','bg-54.gif','bg-55.gif','bg-56.gif','bg-57.gif','bg-58.gif','bg-59.gif','bg-60.gif','bg-61.gif','bg-62.gif','bg-63.gif','bg-64.gif','bg-65.gif','bg-66.gif','bg-67.gif','bg-68.gif','bg-69.gif','bg-70.gif','bg-71.gif','bg-72.gif','bg-73.gif','bg-74.gif','bg-75.gif','bg-76.gif','bg-77.gif','bg-78.gif','bg-79.gif','bg-80.gif','bg-81.gif','bg-82.gif','bg-83.gif','bg-84.gif','bg-85.gif','bg-86.gif','bg-87.gif','bg-88.gif','bg-89.gif','bg-90.gif','bg-91.gif','bg-92.gif','bg-93.gif','bg-94.gif','bg-95.gif','bg-96.gif','bg-97.gif','bg-98.gif','bg-99.gif',); // array of filenames

      $i = rand(0, count($bg)-1); // generate random number size of the array
      $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
    ?>
    <style type="text/css">
    <!--
      body{
      background-image: url(src/bg/<?php echo $selectedBg; ?>);
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
