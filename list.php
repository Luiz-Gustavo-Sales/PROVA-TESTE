<?php
include ("./conexao.php");

//ID DA ROTA PARA PODER LISTAR AS CATEGORIAS
$ID=$_GET['id'];

//echo $ID;

if ($ID==1){
  $tipo_categoria ="MOTOS";
  $SQL1= "SELECT  * FROM motos";
} else if ($ID==2){
  $tipo_categoria ="CARROS";
  $SQL1= "SELECT  * FROM carros";
}else {
  $tipo_categoria = "CAMINHOES";
  $SQL1= "SELECT  * FROM caminhoes";
}

// INSERINDO VALORES NO BANCO DE DADOS

//EXECUTANDO O COMANDO SQL

$result=$link ->query($SQL1) or  die("Query falhou");



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
  <link rel="stylesheet" href="../style/header.css" >
  <script src="../pages/script.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
<a href="./categorias.html"><button class="btn btn-primary mb-2 text-center " > Voltar</button></a>
<h1 class="text-center"> CATEGORIA <?php echo $tipo_categoria ;?></h1>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Modelo</th>
      <th scope="col">Marca</th>
      <th scope="col">Ano</th>
      <th scope="col">Valor</th>
      </tr>
      </thead>
  <?php 

while($row = mysqli_fetch_assoc($result)){
?>
    
<tbody>
      <th scope="row"><?php echo  $row['Id']; ?></th>
      <td><?php echo  $row['modelo']; ?></td>
      <td><?php echo $row['marca']; ?></td>
      <td><?php echo  $row['ano'];?></td>
      <td>R$ <?php echo  $row['valor'];?></td>
      

<?php 
  }

?>
  </tbody>
</table>
</body>
</html>
