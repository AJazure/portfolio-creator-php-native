<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>


    <main>
    <?php echo $data['usuarios'][0]->mail ;?>
        <!--formulario de consulta de disponibilidad-->
        <form action="<?php echo RUTA_URL; ?>user/index" method="POST" class="container mt-4 p-4 bg-light">
            <div class="row">
                <div class="col-md-2">
                    <label for="mail" class="form-label">Correo</label>
                    <input type="mail" name="mail" id="mail" class="form-control" value="" required>
                </div>
                <div class="col-md-2">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary mt-2">Login</button>
            </div>
        </form>
    </main>        

    
