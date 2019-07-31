
    const editar = (id, txt) => {
        //Criar um formulario
        let form = document.createElement('form');
        form.action = 'index.php?pag=index&acao=atualizar';
        form.method = 'post';
        form.className = 'column ';

        //Criar um input para entrada do texto
        let inputTarefa = document.createElement('input');
        inputTarefa.type = 'text';
        inputTarefa.name = 'tarefa';
        inputTarefa.className = 'form-control';
        inputTarefa.value = txt;

        //Criar um botão para o envio do formulario
        let button = document.createElement('button');
        button.type = 'submit';
        button.className = 'btn btn-primary mt-2';
        button.innerHTML = 'Atualizar';

        //Criar um input do tipo hidden
        let inputId = document.createElement('input');
        inputId.type = 'hidden';
        inputId.name = 'id';
        inputId.value = id;

        //Incluir o input tarefa no form
        form.appendChild(inputTarefa);
        form.appendChild(inputId);
        form.appendChild(button);

        let tarefa = document.getElementById('tarefa_' + id);
        //Limpar o texto da tarefa
        tarefa.innerHTML = '';
        //Incluir o form na pagina
        tarefa.insertBefore(form, tarefa[0]);

        console.log(form);
    }

    const remover = (id) => {
        location.href = 'index.php?pag=index&acao=remover&id='+ id;
    }

    const marcarRealizada = (id) => {
        location.href = 'index.php?pag=index&acao=marcarRealizada&id=' + id;
    }