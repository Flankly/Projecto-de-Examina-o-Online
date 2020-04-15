<?php
include("header.php");
extract($_POST);

$verif =$db -> prepare("select * from estudante where nome_completo = '$nome'");
$verif-> execute();
$resul = $verif -> fetchAll(PDO::FETCH_ASSOC);
foreach($resul as $r){

if($r>0){
    echo"
        <center>
        <h1>
        <font color='red'>
        Não pode cadastrar, o Usuario já Existe...
        </font>
        </h1>
        <br>
        <a href='CadastroAluno.php'>Tente Novamente</a>
        </center>
        
        ";
        exit;
    }
}
   
    $stmt = $db -> prepare("insert into estudante (nome_completo,morada,celular,email,senha) values ('$nome','$morada','$celular','$email','$senha')");
$stmt->execute();
    
     echo"<center>
     <h2>
        <font color='green'>
        <p>'$nome' a sua conta foi criada com Sucesso 
        </font>
    </h2>
    <a href='login.php'>Pode Aceder ao Sistema</a>
        </center>";
   
?>