<?php

session_start();

  function loginInvalido()
  {

  $loginInvalido =  "<div class='alert alert-danger' role='alert'>
    Acesso negado!
   </div>";

   return $loginInvalido;
  }






?>