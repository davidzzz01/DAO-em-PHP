<?php 
include_once('db.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Carro</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div style="width:700px" class="container card mt-5">
        <h2 class="text-center mt-2" >Cadastro de Carro</h2>
        <form action="processa_formulario.php" method="post">
        
            <div class="form-group">
                <label for="marca">Marca</label>
                <input type="text" class="form-control" id="marca" name="marca" placeholder="Digite a marca">
            </div>
            <div class="form-group">
                <label for="km">Quilometragem</label>
                <input type="number" class="form-control" id="km" name="km" placeholder="Digite a quilometragem">
            </div>
            <div class="form-group">
                <label for="cor">Cor</label>
                <input type="text" class="form-control" id="cor" name="cor" placeholder="Digite a cor">
            </div>
            <button type="submit" class="btn btn-success mb-2">Enviar</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
body{
    background-color: #343a40;

}
.container{
    background-color: #f8f9fa;
}
    </style>
</body>
</html>

