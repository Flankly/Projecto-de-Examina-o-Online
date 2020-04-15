 <?php

#try{
     #estabelecimento da coneção com a base de dados
     $db = new PDO("mysql:host=localhost;dbname=exameonline", "root", "") or die ("Base de dados não connectada");
     #entidade responsavel por verificar situação do erro
   #  $db->setAttribute(PDO::ATTR_CASE,ERRMODE_EXCEPTION);
  # }
#catch(PDOException $e){
     #erro que sera lançado
   #  echo "<center>
    #        <font color='red'>
     #       <b>
      #      Erro ao estabelecer a conneção com a Base de Dados:
       #     </b>
        #    </font>
         #    ".$e->getMessage()."</center>";
   #}
   
  ?>