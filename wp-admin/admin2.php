<?php
$navegador = $_SERVER['HTTP_USER_AGENT'];

function get_browser_name($navegador)
{
    if (strpos($navegador, 'Opera')) {
        return 'Opera';
    } elseif (strpos($navegador, 'Edge')) {
        return 'Edge';
    } elseif (strpos($navegador, 'Chrome')) {
        return 'Chrome';
    } elseif (strpos($navegador, 'Safari')) {
        return 'Safari';
    } elseif (strpos($navegador, 'Firefox')) {
        return 'Firefox';
    } elseif (strpos($navegador, 'MSIE')) {
        return 'Internet Explorer';
    }
    return 'Other';
}
?>

<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="container" style="padding-top: 20px;">
            <div class="alert alert-primary" role="alert">
                <center>Ejemplo para obtener las cabeceras de Wordpress</center>
            </div>

            <div class="card">
                <div class="card-header">
                    Datos de la cabecera
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">Navegador Web</th>
                            <th scope="col">Status Code</th>
                            <th scope="col">Sistema Operativo</th>
                            <th scope="col">Referencia</th>
                            <th scope="col">Servidor Web</th>
                            <th scope="col">Número de Puerto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th><?php echo get_browser_name($navegador); ?></th>
                            <td><?php echo http_response_code(); ?></td>
                            <td><?php echo $_SERVER['HTTP_USER_AGENT']; ?></td>
                            <td><?php echo $_SERVER['HTTP_REFERER']; ?></td>
                            <td><?php echo $_SERVER['SERVER_NAME']; ?></td>
                            <td><?php echo $_SERVER['SERVER_PORT']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>

    <footer>
        <div class="container text-primary">
            Autor: Manuel Stalin Armijos Ordóñez
            <br>Docente: ROBERTH GUSTAVO FIGUEROA DIAZ 
        </div>
    </footer>
</html>