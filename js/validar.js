function validar() {
//Asigno los campos de index.html usuario y contraseña a dos variables para su uso
    var usuario = document.getElementById("usuario").value;
    var pass = document.getElementById("contrasenia").value;
//compruebo que el usuario y la pass incluidos en el html sea igual a miguel y barreto555
//si es correcto, les redirecciono a la pagina de admin.html, en caso contrario lanzo popup 
//informando que no es correcto el usuario y la pass
    if(usuario=="miguel" && pass=="barreto555"){
        alert("Usuario y pass correctos");
        location.href="http://127.0.0.1:8887/html/Admin.html";
    }else{
        alert("Clave o pass Incorrecta intentelo de nuevo");
        document.getElementById("usuario").focus;
        document.getElementById("usuario").value="";
        document.getElementById("contrasenia").focus;
        document.getElementById("contrasenia").value="";

    }


}