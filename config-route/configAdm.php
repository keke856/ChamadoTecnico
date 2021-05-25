
<?php

use Microstar\Controllers\Route\ControllerAlteracoesTecnico;
use Microstar\Controllers\Route\ControllerAlterarTecnico;
use Microstar\Controllers\Route\ControllerVisitaTecnica;
use Microstar\Controllers\Route\ControllerPainelTecnico;
use Microstar\Controllers\Route\ControllerLoginAdm;
use Microstar\Controllers\Route\ControllerConcluido;
use Microstar\Controllers\Route\ControllerCadastrarTecnico;
use Microstar\Controllers\Route\ControllerTecnico;
use Microstar\Controllers\Route\ControllerLogarAdm;
use Microstar\Controllers\Route\ControllerAtendimento;
use Microstar\Controllers\Route\ControllerLogout;
use Microstar\Controllers\Route\ControllerDetalhes;
use Microstar\Controllers\Route\ControllerAttendance;
use Microstar\Controllers\Route\ControllerBuscar;
use Microstar\Controllers\Route\ControllerBuscarClientes;
use Microstar\Controllers\Route\ControllerCadastroEmail;
use Microstar\Controllers\Route\ControllerCadastrarEmail;
use Microstar\Controllers\Route\ControllerClienteDelete;
use Microstar\Controllers\Route\ControllerEditarCliente;
use Microstar\Controllers\Route\ControllerEditClientes;
use Microstar\Controllers\Route\ControllerEmail;
use Microstar\Controllers\Route\ControllerFinish;
use Microstar\Controllers\Route\ControllerListClientes;
use Microstar\Controllers\Route\ControllerRemoverEmail;
use Microstar\Controllers\Route\ControllerRemoverTecnico;


require __DIR__."/../vendor/autoload.php";

return [ 
         '/chamado-visita-tecnica'=> ControllerVisitaTecnica::class,
         '/painel-tecnico' =>ControllerPainelTecnico::class,
         '/loginAdm' => ControllerLoginAdm::class,
         '/chamado-concluido' => ControllerConcluido::class,
         '/cadastro-tecnico'=> ControllerTecnico::class,
         '/cadastrar-tecnico' => ControllerCadastrarTecnico::class,
         '/logarAdm' => ControllerLogarAdm::class,
         '/atendimento' => ControllerAtendimento::class,
         '/logout'=> ControllerLogout::class,
         '/detalhes'=> ControllerDetalhes::class,
         '/attendance' => ControllerAttendance::class,
         '/envioEmail' => ControllerEmail::class,
         '/cadastro-email' => ControllerCadastroEmail::class,
         '/cadastrar-email' => ControllerCadastrarEmail::class,
         '/finalizar-chamado' => ControllerFinish::class,
         '/remover-email' => ControllerRemoverEmail::class,
         '/remover-tecnico' =>ControllerRemoverTecnico::class,
         '/update-tecnico' => ControllerAlteracoesTecnico::class ,
         '/alterar-tecnico' =>ControllerAlterarTecnico::class,  
         '/list-clientes' => ControllerListClientes::class,  
         '/remover-cliente' => ControllerClienteDelete::class,    
         '/edit-cliente' => ControllerEditClientes::class,
         '/editar-cliente' =>ControllerEditarCliente::class,
         '/buscar' =>ControllerBuscar::class,
         '/buscar-clientes' => ControllerBuscarClientes::class,
        ];