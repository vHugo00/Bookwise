<?php
function dd(...$dump)
{
  echo "<pre>";
  var_dump($dump);
  echo "</pre>";
  die();
}

function view($view)
{
  require "views/template/app.php";
}

function abort($code)
{
  http_response_code($code);
  view($code);
  require "views/$code.view.php";
  die();
}
