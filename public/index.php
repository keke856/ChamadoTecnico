
<?php
 

  $path = require __DIR__."/../config-route/config.php";
  $pathAdm = require __DIR__."/../config-route/configAdm.php";
  
  $url = $_SERVER['PATH_INFO'];

  if(array_key_exists($url,$pathAdm)){
  
  require __DIR__."/../Routes-Adm/index.php";
 
  }elseif(array_key_exists($url,$path)){

    require __DIR__."/../Routes/index.php";
  }else{
    echo "Erro 404";
  }
  