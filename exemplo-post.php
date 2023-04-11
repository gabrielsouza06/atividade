<?php 
   error_reporting(E_ALL); //mostrar erros
   ini_set("display_errors",1);//habitar para aparecer os erros
   include_once ("header.html");
   include_once ("exemplo-post-dados.php"); // inclue o arquivo. facilita o desenvolvimento
   if( !empty($_POST['form_submit']) ) { //se tiver algum valor ele manda "obterDados" realizando a função do outro arquivo
    // tem alguma coisa no campo 
    obterDados($_POST);
   }
?>
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
    <div class="t1"><p>FORMULÁRIO EXEMPLO POST</p></div> 
    <div class="conteudo">
        <form class="form" method="post" action="mostraalunos.php">

            <div> 
            <p>cpf: <input type="text" placeholder="digite seu cpf" name="cpf" /> </p>
                                <!--indicar oq será escrito -->
            <p>nome: <input type="text" name="nome" required value="estefane" /> </p> <!-- VALUE="estefane" já deixa com valor um valor inicial -->
                                                 <!--torna esse campo obrigatorio -->
            <p> número: <input type="text" name="numero"  /> </p> 
            </div>

            <div> 
            <p> estado: <input type="text" name="estado"  /> </P>
            <P> enderço: <input type="text" name="endereço"  /> </P>                                       
            <input TYPE="hidden" NAME="form_submit" VALUE="OK"> <!-- type-é para escoder o value- pode colocar qualquer valor: x, y, z, pq não precisa aparecer-->
            <!-- hidden-escondido(text) Esse é o CAMPO>-->
            <p> cidade: <input type="text" name="endereço"  /> </p>
            </div>

            <div> 
            <p> enderço: <input type="text" name="endereço"  /> </p>
            <p> estado: <input type="text" name="estado"  /> </p>
            <p> enderço: <input type="text" name="endereço"  /> </p>  
            </div>  
    </div>
              
          

            
            <div class="button"><button type="submit" class="btn">
            <b>Obter Dados Post</b>
            </button>
            </div>
        </form>
    
     
</body>
</html>