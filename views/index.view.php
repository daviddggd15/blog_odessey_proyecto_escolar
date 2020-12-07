<?php require 'header.php' ?>

	<div class="contenedor">
		<?php foreach($posts as $post): ?>
			
			<div class="post" data-aos="zoom-in-right">
                    <article>
						<a href="single.php?id=<?php echo $post['id']; ?>" class="thumb">
							<img src="./imagenes/<?php echo $post['thumb']; ?>" alt="<?php echo $post['titulo'] ?>">
						</a>
                         <div class="contenido">
						 	<h2 class="titulo"><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['titulo'] ?></a></h2>
							<p class="fecha"><?php echo fecha($post['fecha']); ?></p>
							<p class="extracto"><?php echo $post['extracto'] ?></p>
							<a href="single.php?id=<?php echo $post['id']; ?>" class="continuar">Leer</a>
                        </div>
                    </article>
                </div>
				

		<?php endforeach; ?>

		<?php require 'paginacion.php'; ?>

	</div>

<?php require 'footer.php'; ?>