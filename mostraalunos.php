<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css">
    <title>Document</title>
</head>
<body>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #04AA6D;
  color: white;
}
</style>
<?php include_once ("header.html"); ?>
<h2>Clientes</h2>

<table>
  <tr>
    <th>CPF</th>
    <th>Nome</th>
    <th>Número</th>
    <th>Estado</th>
  </tr> 

 
  <tr>
    <td><?php echo $_POST['cpf'];?></td>
    <td><?php echo $_POST["nome"];?></td>
    <td><?php echo $_POST["numero"];?></td>
    <td><?php echo $_POST["estado"];?></td>
  </tr>
  <tr> 
</table>  

<form action="editar.php" method="post">
    <input type="hidden" name="nome" value=<?php echo $_POST["nome"];?> >
    <input type="hidden" name="cpf" value=<?php echo $_POST['cpf'];?> >
    <input type="hidden" name="numero" value=<?php echo $_POST["numero"];?> >
    <input type="hidden" name="estado" value=<?php echo $_POST["estado"];?> >


<button type="submit" class="btn" >
<b>Editar/Visualiza</b> 
</button>
</form>
<?php include_once ("footer.html");?>
</body>
</html>