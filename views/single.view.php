<?php require 'header.php' ?>

	<div class="single-post">
        <div class="contenedor">
            <div class="post-single" data-aos="zoom-in-right">
                <article>
                    <div class="thumb">
						<img src="./imagenes/<?php echo $post['thumb']; ?>" alt="<?php echo $post['titulo'] ?>">
                    </div>
                    <div class="contenido">
						<h2 class="titulo"><?php echo $post['titulo'] ?></h2>
						<p class="fecha"><p class="fecha"><?php echo fecha($post['fecha']); ?></p></p>
                    	<p class="extracto"><?php echo nl2br($post['texto']); ?></p>  
                    </div>
                </article>
            </div> 
        </div>       
	</div>
	
<?php require 'footer.php'; ?>