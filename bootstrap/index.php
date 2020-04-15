<html>
<head>
	<title>
		Aplicando PHP
	</title>
</head>
<body>
	<div class="container">
  <div class="row">
	<div class="form-group">
	<form role="form">
		<label>Nome do Produto:</label>
		<select class="form-control" name="id_prod" id="id_prod">
			<option value="1">Cadeiras</option>
			<option value="2">Fogão</option>
			<option value="3">TV 29</option>
		</select>
	
	<button type="submit" class="btn btn-default"> Detalhes</button>
	</form>
	</div>
  </div>
</div>

  <div class="row">
  	<h1>Detalhes do Produto</h1>
  	<?php
  	$id_prod = $_GET['id_prod'];
	$detalhes[1]="Detalhes das Cadeiras";
	echo $detalhes[$id_prod];

  	?>
  </div>
</body>
</html>