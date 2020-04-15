<head>
<title>Cadastro de Estudante</title>
<script language="javascript">
    
 function validacao(){
     if(document.formCad.nome.value==""){
         alert("Porfavor Preencha o campo NOME");
         document.formCad.nome.focus();
         return false;
     }
     
     if(document.formCad.morada.value==""){
         alert("Porfavor Preencha o campo MORADA");
         document.formCad.morada.focus();
         return false;
     }
     
     if(document.formCad.celular.value==""){
         alert("Porfavor Preencha o campo CELULAR");
         document.formCad.celular.focus();
         return false;
     }
     
     if(document.formCad.senha.value==""){
         alert("Porfavor Preencha o campo NOME");
         document.formCad.senha.focus();
         return false;
     }
     
      if(document.formCad.email.value==""){
          alert("Porfavor Preencha o campo E-MAIL");
	      document.formCad.email.focus();
	      return false;
  }
  e=document.formCad.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Porfavor Introduza um e-mail valido");
			document.formCad.email.focus();
			return false;
		}
  return true;
 }   
    
    
</script>

</head>   



<body >
 <?php
include("header.php");
?>   
<div class="container">
<center>
<h2>CADASTRO DE ESTUDANTES</h2>  
</center> 
<center>
<table  border="0" >
    <tr>
      <td >
        <img src="image/user.jpg" width="300px" height="350px">
       
    </td>    
   <td width="350px" >
        <div class="container">
        <form name="formCad" action="CadastroReport.php" method="post" onsubmit="return validacao();">
        <label>Nome </label>
        <input id="nome" type="text" name="nome" class="form-control" placeholder="Nome do Estudante">
	    <label>Morada</label> 
		<input id="morada" type="text" name="morada" class="form-control" placeholder="Morada">
	    <label>Celular</label>
        <input id="celular" type="text" maxlength="9" name="celular" class="form-control" placeholder="Celulr">
    	<label>E-mail</label>
        <input id="email" type="email" name="email" class="form-control" placeholder="estudante@exemplo.com">
	    <label>Senha</label>
        <input id="senha" type="password" name="senha" maxlength="10" class="form-control" placeholder="1234"><br>
        <input class="btn btn-danger" type="submit" value="Increver-se" name="Submit">
            
        </form>
        </div>
   </td>     
   </tr>
</table>
</center>
</div>
        
</body>
