<?php
    use app_lista_tarefas\app_lista_tarefas\Tarefa;
    use app_lista_tarefas\app_lista_tarefas\TarefaService;
    use app_lista_tarefas\app_lista_tarefas\Conexao;

    require "tarefa.model.php";
	require "tarefa.service.php";
	require "conexao.php";

	$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

	if($acao === 'inserir') {
        $tarefa = new Tarefa();
        $tarefa->__set('tarefa', $_POST['tarefa']);
        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefaService->inserir();
        header('location: nova_tarefa.php?inclusao=1');
    } else if($acao === 'recuperar') {
	    $tarefa = new Tarefa();
	    $conexao = new Conexao();

	    $tarefaService = new TarefaService($conexao, $tarefa);
	    $tarefas = $tarefaService->recuperar();

    }

?>