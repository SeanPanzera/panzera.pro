<?php 
  $output = shell_exec('/git/git reset --hard origin/dev && git clean -f 2>&1');
  echo "<pre>$output</pre>";
?>