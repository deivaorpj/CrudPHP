<?php
require 'config.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM locacao");
if($sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<section>   
   <div class="container">
    <div class="container mt-4 mb-2">
        <a class="btn btn-success" href="adicionar.php">ADICIONAR USUÁRIO</a>
    </div>
    <div class="container table-responsive justify-content-md-center">
        <table class=" table table-striped ">
            <tr>
                <th>NOME</th>
                <th>EMAIL</th>
                <th>AÇÕES</th>
            </tr>
            <?php foreach($lista as $usuario): ?>
                <tr>
                    <td><?=$usuario['nome'];?></td>
                    <td><?=$usuario['email'];?></td>
                    <td ">
                        <a href="editar.php?id=<?=$usuario['id'];?>"> <img src="assets/image/pen.svg" class="me-2" style="height: 20px;"/></a>
                        <a href="excluir.php?id=<?=$usuario['id'];?>" onclick="return confirm('Tem certeza que deseja excluir?')"><img src="assets/image/trash3.svg" class="me-2" style="height: 20px"/></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    
    </div>
</div>
</section>

<script src="assets/js/bootstrap.min.js.map" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>