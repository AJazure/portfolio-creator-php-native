<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>


    <main>
        <!--formulario de regsitro de usuarios-->
        <?php echo RUTA_URL; ?>
        <form action="<?php echo RUTA_URL; ?>user/create" method="POST" class="container mt-4 p-4 bg-light">
            <div class="row">
            <div class="col-md-2">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" required>
                </div>
                <div class="col-md-2">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" name="apellido" id="apellido" class="form-control" required>
                </div>
                <div class="col-md-2">
                    <label for="mail" class="form-label">Correo</label>
                    <input type="mail" name="mail" id="mail" class="form-control" required>
                </div>
                <div class="col-md-2">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Registrarse</button>
            </div>
        </form>

    </main>        

    
