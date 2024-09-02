<?php

$data = file_get_contents('php://input');
if (!$data) {
  // handling orang iseng
  echo 'ini callback Trian untuk Testing';
}

else
{
file_put_contents("callback.json",$data . PHP_EOL, FILE_APPEND);
echo '{
    "status": "000",
      }';
}

?>