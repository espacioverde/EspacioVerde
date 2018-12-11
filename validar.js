function validar(){
    var nombre, apellidos, correo,  usuario, clave, telefono, expresion;
    nombre = document.getElementById("nombre").value;
    apellidos = document.getElementById("apellidos").value;
    correo = document.getElementById("correo").value;
    usuario = document.getElementById("usuario").value;
    clave = document.getElementById("clave").value;
    telefono = document.getElementById("telefono").value; 
    
    expresion = /\w+@\w+\.+[a-z]/; 
    
    if(nombre === "" || apellidos === "" || correo === "" || usuario === "" || clave === "" || telefono === ""){
        alert("Todos los campos son obligatorios");
        return false;
       }
    
    else if (nombre.length>30){
        alert("El nombre es muy largo");
        return false;
    }
    
    else if (apellidos.length>30){
        alert("Los apellidos son muy largos");
        return false;
    }
    
    else if (correo.length>40){
        alert("El correo es muy largo");
        return false;
    }
    
    else if(!expresion.test(correo)){
            alert("El correo no es valido");
            return false;
            }
    
    else if (usuario.length>30 || clave.length>30){
        alert("El usuario y la clave solo deben de tener 30 caracteres como máximo");
        return false;
    }
    
     else if (telefono.length>=15){
        alert("El telefono es muy largo");
        return false;
    }
    
    else if (isNaN(telefono)){
        alert("El teléfono ingresado no es un numero");
        return false;
    }
}