<?php
$host="db693630905.db.1and1.com";
$user="dbo693630905";
$password="Barreto555*";
$db="db693630905";
// $con = new mysqli($host,$user,$password,$db);

$con = mysqli_connect($host,$user,$password,$db);

if (mysqli_errno()) {
    die('<p>Error al conectar con servidor MySQL: '.mysqli_error().'</p>');
} else {
    echo '<p>Se ha establecido la conexión al servidor MySQL con éxito.</p >';
}
?>
