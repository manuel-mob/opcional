<?php
// Conectando, seleccionando la base de datos
$link = mysqli_connect('localhost', 'user_opcional', 'pass_opcional','opcional')
    or die('No se pudo conectar: ' . mysql_error());
echo 'Connected successfully';

//insertContenido
if (isset($_POST['titulo']) && isset($_POST['autor']) && isset($_POST['descripcion']) && isset($_POST['url'])) {
    $query = "INSERT INTO contenido (titulo, autor,descripcion,url) values ('".$_POST['titulo']."','".$_POST['autor']."','".$_POST['descripcion']."','".$_POST['url']."')";
    $result = mysqli_query($link,$query) or die('Consulta fallida: ' . mysql_error());
    header('Location: index.php');
}
?>