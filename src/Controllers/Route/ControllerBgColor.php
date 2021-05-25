<?php
namespace Microstar\Controllers\Route;

trait ControllerBgColor{

    public function bgColor($position)
    {
        switch($position){
          case"Aguardando":
              $_SESSION['bgColor'] = "bg-warning";
            break;
            case"Concluido":
                $_SESSION['bgColor'] = "bg-success";
              break;
                case"Visita Técnica":
                    $_SESSION['bgColor'] = "bg-danger";
                break;
                case"Atendimento":
                  $_SESSION['bgColor'] = "bg-info";
              break;

        }
    }
}