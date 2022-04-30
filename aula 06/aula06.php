<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Controle Remoto</title>
</head>
<body>
	<pre>
		<h1>Projeto Controle Remoto</h1>
		<?php
			require_once 'ControleRemoto.php';
			$c = new ControleRemoto();
			$c->ligar();
			$c->maisVolume();
		?>
	</pre>
</body>
</html>