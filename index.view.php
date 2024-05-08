<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Oswald&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="estilos.css">
	<title>Paginacion</title>
	
</head>
<body>

	<div class="contenedor">
		<h1>Articulos</h1>
		<section class="articulos">
			<ul>
				<?php foreach ($articulos as $articulo): ?>
					<li><?php echo $articulo['id'] . '.-'. $articulo['articulo']; ?></li>

				<?php endforeach; ?>
		
			</ul>
		</section>

		<section class="paginacion">
			<ul>

				<?php if ($pagina == 1): ?>
				<li class="disabled">&laquo;</li>
				<?php else: ?>
				<li><a href="?pagina=<?php echo $pagina - 1 ?>"> &laquo;</a></li>
				<?php endif; ?>

				<?php

					for ($i=1; $i <= $numeroPaginas ; $i++) {
						if ($pagina == $i) {
							echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
						}  else {
							echo "<li><a href='?pagina=$i'>$i</a></li>";
						}
					}

				?>


				<?php if ($pagina == $numeroPaginas): ?>
				<li class="disabled">&raquo;</li>
				<?php else: ?>
				<li><a href="?pagina=<?php echo $pagina + 1 ?>"> &raquo;</a></li>
				<?php endif; ?>




			</ul>
			

		</section>


	</div>
</body>
</html>