<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Tarefa</title>
    <!-- Adicione os links do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body class="vw-100 vh-100 row align-items-center " >
<div class="container mt-5 ">
        <form action="" method="post" class="row g-3 p-3 flex-column bg-white color-black text-black rounded-5 r d-flex align-items-center justify-content-center " >
            @csrf
            <h1 class="fs-1 pl-6">Registrar Tarefa</h1>
            <div class="col-md-6">
                <label for="inputNome" class=" fs-4 form-label">Nome da Tarefa</label>
                <input type="text" class="form-control" id="inputNome" placeholder="Nome da Tarefa">
            </div>
            <div class="col-md-6">
                <label for="inputDescricao" class=" fs-4  form-label">Descrição da Tarefa</label>
                <textarea class="form-control" id="inputDescricao" placeholder="Descrição da Tarefa"></textarea>
            </div>
            <div class="col-6 d-flex justify-content-end ">
                <button type="submit" class="btn btn-primary ">Adicionar Tarefa</button>
            </div>
        </form>
    </div>
<!-- Adicione os scripts do Bootstrap -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>