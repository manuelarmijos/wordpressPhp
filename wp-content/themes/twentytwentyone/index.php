<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
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

<?php if (file_exists(get_stylesheet_directory() . '/EstudianteDeber.xml')) {
    $xml = simplexml_load_file(
        get_stylesheet_directory() . '/EstudianteDeber.xml'
    );

    echo '  <div class="container" style="padding-top: 0px;">
				<div class="alert alert-primary" role="alert">
                	<center>Datos del Estudiante</center>
            	</div>';

    foreach ($xml->estudiante as $key => $estud) {
        echo '<table>';
        echo '<tr>';
        echo '  <th> Nombres  </th>';
        echo '  <th> Apellidos </th>';
        echo '  <th> cedula </th>';
        echo '  <th> Título </th>';
        echo '  <th> Ciudad </th>';
        echo '  <th> Asignatura </th>';
        echo '  <th> Programa </th>';
        echo '  <th> Fecha Presentación </th>';
        echo '</tr>';
        echo '<tr>';
        echo '<td> ' . $estud->nombre . '</td>';
        echo '<td> ' . $estud->apellido . '</td>';
        echo '<td> ' . $estud->cedula . '</td>';
        echo '<td> ' . $estud->titulo . '</td>';
        echo '<td> ' . $estud->ciudad . '</td>';
        echo '<td> ' . $estud->asignatura . '</td>';
        echo '<td> ' . $estud->programa . '</td>';
        echo '<td> ' . $estud->fechaPresentacion . '</td>';
        echo '</tr>';

        echo '</table></div>';
    }
} else {
    echo 'No se puede abrir XML';
    echo get_stylesheet_directory();
} ?>

<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="container" style="padding-top: 0px;">
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
                            <td><?php if (isset($_SERVER['HTTP_REFERER'])) {
                                echo $_SERVER['HTTP_REFERER'];
                            } else {
                                echo 'No referencia';
                            } ?></td>
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

<?php if (
    is_home() &&
    !is_front_page() &&
    !empty(single_post_title('', false))
): ?>
	<header class="page-header alignwide">
		<h1 class="page-title"><?php single_post_title(); ?></h1>
	</header><!-- .page-header -->
<?php endif; ?>

<?php
if (have_posts()) {
    // Load posts loop.
    while (have_posts()) {
        the_post();

        get_template_part(
            'template-parts/content/content',
            get_theme_mod('display_excerpt_or_full_post', 'excerpt')
        );
    }

    // Previous/next page navigation.
    twenty_twenty_one_the_posts_navigation();
} else {
    // If no content, include the "No posts found" template.
    get_template_part('template-parts/content/content-none');
}

get_footer();

