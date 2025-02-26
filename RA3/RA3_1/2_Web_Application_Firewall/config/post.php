<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Post Vulnerable a XSS</title>
</head>
<body>

<?php
if ($_SERVER['REQUEST_METHOD'] == "GET") {
?>
    <p>Nuevo Post</p>
    <form action='post.php' method='post'>
        <textarea name="textarea" rows="10" cols="50">Escribe algo aquí</textarea>
        <input type='submit' value='enviar'>
    </form>
<?php
} else {
    // Advertencia: Se muestra sin escape, lo que permite inyección de código malicioso (XSS).
    echo $_POST["textarea"];
}

?>

</body>
</html>

