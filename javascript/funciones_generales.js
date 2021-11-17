console.log("Esto es un archivo externo");

window.onload = function() {
    document.getElementById("btnIngresarDatos").onclick = function () {
        do{
            var num1 = prompt("ingrese un numero");
            var num2 = prompt("ingrese otro numero");
            var confirmacion = confirm("Desea confirmar los numeros?")
    
        } while(!confirmacion){
            document.write("Los numeros ingresados son: " + num1 + " y " + num2 )
        };
    };
}

