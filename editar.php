<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include_once ("header.html"); ?>


<form action="mostraalunos.php" method="post">
    <input type="text" name="nome" value=<?php echo $_POST["nome"];?> >
    <input type="text" name="cpf" value=<?php echo $_POST['cpf'];?> >
    <input type="text" name="numero" value=<?php echo $_POST["numero"];?> >
    <input type="text" name="estado" value=<?php echo $_POST["estado"];?> >
   
    <button type="submit" class="btn">
     <b>salva</b>
     </button>
               
</form>
 <?php include_once ("footer.html");?>  
</body>
</html>