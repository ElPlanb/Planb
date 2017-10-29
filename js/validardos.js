function validar(){
    var nombre, apellidos, correo, usuario, clave, telefono, expresion;
    nombre = document.getelementbyId("nombre").value;
    apellidos = document.getelementbyId("apellidos").value;
    correo = document.getelementbyId("correo").value;
    usuario = document.getelementbyId("clave").value;
    clave = document.getelementbyId("clave").value;
    telefono = document.getelementbyId("telefono").value;

    expresion = /\w+@\w+\.+[a-z]/;

if(nombre === "" || apellidos === "" || correo === "" || usuario === "" || clave === "" || telefono === ""){
        alert("Todos los campos son obligatorios");
        return false;
        }
else if(nombre.length>30) {
    alert("El nombre es muy largo");
    return false;
}
else if(apellidos.length>90) {
    alert("El apellido es muy largo");
    return false;
}
else if(correo.length>100) {
    alert("El correo es muy largo");
    return false;
}

else if(!expresion.test(correo)){
    alert("El correo no es válido");
    return false;
}
else if(usuario.length>30) {
    alert("El usuario es muy largo");
    return false;
}
else if(telefono.length>10) {
    alert("teléfono no válido");
    return false;
}
else if(isNaN(telefono)) {
    alert("Debe ser números");
    return false;
}

}