<section class="paginacion">
	
		<?php 
			# Establecemos el numero de paginas
			$numero_paginas = numero_paginas($blog_config['post_por_pagina'], $conexion);
		?>
		<!-- Mostramos el boton para retroceder una pagina -->
		<?php if (pagina_actual() === 1): ?>
			<a href="#" class="disabled">&laquo;</a>
		<?php else: ?>
			<a href="index.php?p=<?php echo pagina_actual() - 1?>">&laquo;</a>
		<?php endif; ?>

		<!-- Creamos un elemento li por cada pagina que tengamos -->
		<?php for ($i = 1; $i <= $numero_paginas; $i++): ?>
			<!-- Agregamos la clase active en la pagina actual -->
			<?php if (pagina_actual() === $i): ?>
				<a href="#" class="active">
					<?php echo $i; ?>
				</a>
			<?php else: ?>
				
					<a href="index.php?p=<?php echo $i?>"><?php echo $i; ?></a>
				
			<?php endif; ?>
		<?php endfor; ?>

		<!-- Mostramos el boton para avanzar una pagina -->
		<?php if (pagina_actual() == $numero_paginas): ?>
			<a href="#"  class="disabled" >&raquo;</a>
		<?php else: ?>
			<a href="index.php?p=<?php echo pagina_actual() + 1; ?>">&raquo;</a>
		<?php endif; ?>
	
</section>

