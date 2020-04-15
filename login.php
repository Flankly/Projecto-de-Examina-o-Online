<html>

<head>
<style>
</style>

    <script language="javascript">
         
    function verificacao(){
        if(document.formLog.nome.value==""){
            alert("Preencha o nome do usuario");
            document.formLog.nome.focus();
            return false;
        }
        if(document.formLog.senha.value==""){
            alert("Preencha a senha");
            document.formLog.senha.focus();
            return false;
        }
        return true;        
    }
    
    </script>
</head>

<body background="back.png">
   
    <?php
   include("header.php");
    extract($_POST);
    if(isset($Entrar)){
        
    try{
        $stmt=$db -> prepare("select * from estudante where nome_completo = '$nome' and senha = '$senha'");
        $stmt->execute();
        $contar = $stmt -> rowCount();
        $linha=$stmt->fetchAll(PDO::FETCH_ASSOC);
        if($contar==1){
            echo "<h1 class='text-center'>Benvindo <font color='blue'>$nome</font></h1>";
            
		echo "<center>
              <table width='600px' border='3' bgcolor='red'></table>
              <br>
              <br>
              <table width='500px' border='0'>
              <tr>
              <td align='center'>
              <a id='testes' class=''href='disciplinas.php'>Realizar a Examinação</a>
              </td>
              <td align='center'>
              <input id='resultados' type='button' class='' value='Visualizar Resultados'>
              </td>
              </tr>
              </table>
              
        
            </center>
             ";
 
            exit;
        }else{
            echo "Dados invalidos...";
        }
    }catch(PDOException $e){
        echo "Erro: ".$e->getMessage();
    }
     }
    
    ?>
    
<center>
<table id="tab">
    <tr>
        <td>
            <center>
            <img src="image/login.jpg">
            </center>
        </td>
    </tr>
<tr>
<td heigth="300px" width="400px" >

    <div class="container">
        <form action="" method="post" name="formLog" onsubmit="return verificacao();">
        <label>Usuario</label>
        <input id="nome" type="text" name="nome" class="form-control" placeholder="Nome do Estudante" autocomplete="off">
        <label>Senha</label>
        <input id="senha" type="password" name="senha" maxlength="10" class="form-control" placeholder="Senha" autocomplete="off"><br>
            <center>
            <a href="CadastroAluno.php">Clique p/ ter uma Conta</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input id="Entrar" class="btn btn-danger" type="Submit" value="Entrar" name="Entrar">
            </center>
            
        
        </form>
   </div>
    
</td>
</tr>
</table>
</center>

</body>
</html>



