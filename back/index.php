<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar Sesión de Seguplast</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <link rel="stylesheet" href="checkboxMaster/dist/checkbox.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="offset-md-4 col-md-6">
                <div class="form-group row">
                    <label for="usuario" class="col-md-2 col-form-label">Usuario</label>
                    <div class="col-md-6">
                        <input type="usuario" class="form-control" id="usuario" placeholder="Usuario">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-md-2 col-form-label">Contraseña</label>
                    <div class="col-md-6">
                        <input type="password" class="form-control" id="password" placeholder="Contraseña...">
                    </div>
                </div>
                <div class="form-group row" style="text-align:right">
                    <div class="col-md-8">
                        <a href="#">Me olvidé la contraseña</a>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-md-6 col-md-8">
                        <button type="submit" class="btn btn-success">Iniciar Sesión</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>