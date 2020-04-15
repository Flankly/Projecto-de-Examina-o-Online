<?php
include("header.php");
$stmt = $db ->prepare("select * from disciplina");
$stmt ->execute();
$lista = $stmt -> fetchAll(PDO::FETCH_ASSOC);

?>

<html>


<body>
    <div class="container">
    <br>
    <br>
    <center>

        
        <?php
  
	    foreach ($lista as $d) {
        #echo "<tr><td><img src='image/teste.jpg'></td></tr>";
		#echo "<tr align='center'>";
        #<a href=teste.php?id=$d[disc_id]>
        echo "<form method=post action=$_SERVER[PHP_SELF]>";
        echo "<table  width='600px' border='1' >";
        echo '<tr align=rigt>';
		echo "<td>
        <input type=radio name=disciplina id=$d[disc_id]>
        $d[nome_Disciplina]</td>
        ";
		echo '</tr>';
        echo "</table>";
        }
        echo "<br>";
        echo "<p align=center><input id=validar type=submit name=$d[disc_id] value=Validar</p>";
        echo "</form";
	
    
    echo "<hr>";
   
    
        
    if(isset($validar)){
        $stmt = $db ->prepare("select * from teste where disc_id='$d[disc_id]'");
        $stmt ->execute();
        $test = $stmt -> fetchAll(PDO::FETCH_ASSOC);
        
        foreach($test as $t){
            echo "<ul>";
            echo "<ol><a href=teste.php?disc_id=$t[test_id]>$t[nome_teste]</a></ol>";
        }
    }
        
    ?>

</center>
</div>
</body>
</html>