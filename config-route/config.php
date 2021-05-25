<?php

        use Microstar\Controllers\Route\ControlesAttendance;
        use Microstar\Controllers\Route\ControllerAtendimento;
        use Microstar\Controllers\Route\ControllerAguardando;
        use Microstar\Controllers\Route\ControllerCadastrarCliente; 
        use Microstar\Controllers\Route\ControllerDetalhes;
        use Microstar\Controllers\Route\ControllerChamadoAlteracoes;
        use Microstar\Controllers\Route\ControllerCadastroCliente;
        use Microstar\Controllers\Route\ControllerLogar;
        use Microstar\Controllers\Route\ControllerLogin;
        use Microstar\Controllers\Route\ControllerNovoChamado;
        use Microstar\Controllers\Route\ControllerPainelCliente;
        use Microstar\Controllers\Route\ControllerSolicitarChamado;
        


        use Microstar\Controllers\Route\ControllerVisitaTecnica;
        use Microstar\Controllers\Route\ControllerPainelTecnico;
        use Microstar\Controllers\Route\ControllerLoginAdm;
        use Microstar\Controllers\Route\ControllerConcluido;
        use Microstar\Controllers\Route\ControllerCadastrarTecnico;
        use Microstar\Controllers\Route\ControllerTecnico;
        use Microstar\Controllers\Route\ControllerLogarAdm;
        use Microstar\Controllers\Route\ControllerDetalhesCliente;

require __DIR__."/../vendor/autoload.php";

 return [

       
        '/chamado-atendimento'=> ControllerAtendimento::class,
        '/chamado-aguardando'=> ControllerAguardando::class,
        '/detalhes'=> ControllerDetalhes::class,
        '/chamado-alteracoes' => ControllerChamadoAlteracoes::class,
        '/cadastro-cliente' => ControllerCadastroCliente::class,
        '/cadastrar-cliente'=> ControllerCadastrarCliente::class,
        '/painel-cliente' =>  ControllerPainelCliente::class,
         '/login' => ControllerLogin::class,
         '/logar' => ControllerLogar::class,
         '/novo-chamado' => ControllerNovoChamado::class,
         '/solicitar-chamado' => ControllerSolicitarChamado::class,
         '/detalhes-cliente' => ControllerDetalhesCliente::class,
         '/chamado-visita-tecnica'=> ControllerVisitaTecnica::class,
         '/painel-tecnico' =>ControllerPainelTecnico::class,
         '/loginAdm' => ControllerLoginAdm::class,
         '/chamado-concluido' => ControllerConcluido::class,
         '/cadastro-tecnico'=> ControllerTecnico::class,
         '/cadastrar-tecnico' => ControllerCadastrarTecnico::class,
         '/logarAdm' => ControllerLogarAdm::class
         
        ];




















?>