
	<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=header, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  
    <link rel="stylesheet" href="<?php echo RUTA; ?>/css/style.css">
    <title>Odessey</title>
</head>
<body>
    <header>
        <nav>
            <div class="navegacion ">
                <div class="logo"><a href="<?php echo RUTA; ?>">Odessey</a></div>
                <form action="<?php echo RUTA; ?>/buscar.php" method="get" name="busqueda" class="buscar">
					<input type="text" name="busqueda" placeholder="Buscar">
					<button type="submit" class="icono fa fa-search"></button>
				</form>
                <div class="menu">
                    <a href="<?php echo RUTA; ?>">blog</a>
                </div>
            </div>
        </nav>
    </header>