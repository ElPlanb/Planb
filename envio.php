<?php

if(!empty($_POST)){
	if(isset($_POST["username"]) &&isset($_POST["password"])){
		if($_POST["username"]!=""&&$_POST["password"]!=""){
      // include "conexion.php";


      $host="localhost";
      $user="root";
      $password="";
      $db="Planb";

      // $host="db693630905.db.1and1.com";
      // $user="dbo693630905";
      // $password="Barreto555*";
      // $db="db693630905";
      $con = new mysqli($host,$user,$password,$db);
      
      // $con = mysqli_connect($host,$user,$password,$db);

      
      $name = $_POST["username"]; 
      $password = $_POST["password"];
			
      $user_id=null;
      $sql1= "SELECT * FROM usuarios WHERE nombre = '".$name."' AND pass= '".$password."'";
      // echo $sql1;
      // $sql1= 'SELECT * FROM usuarios WHERE (nombre=\"$_POST[username]\") AND pass=\"$_POST[password]\" ';
      $query = $con->query($sql1);

      if($con->errno) die($con->error); 
      // if($result->mysqli_query($con,$sql1)){
        // $query = $con->mysqli_query($sql1)  or die('Consulta fallida: ' . mysqli_error());
      //   echo mysqli_num_rows ( $result );
      // }
      
			// while ($r=$query->fetch_array()) {
      while ($r=mysqli_fetch_assoc($query)) {
      // while ($r=mysqli_fetch_array($result)) {
				$user_id=$r["nombre"];
				break;
			}
			if($user_id==null){
				print "<script>alert(\"Acceso invalido.\");window.location='login.html';</script>";
			}else{
				session_start();
				$_SESSION["user_id"]=$user_id;
				print "<script>window.location='envio.html';</script>";				
			}
		}
	}
}



?>