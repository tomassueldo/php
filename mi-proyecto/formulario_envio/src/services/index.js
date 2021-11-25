export const obtenerAsuntos = async() => {
    const response = await fetch("http://localhost/php/api/formulario_envio/obtenerAsunto.php");
    const data = await response.json();
    return data;
}
