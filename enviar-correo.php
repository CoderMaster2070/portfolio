<?php
if (isset($_POST['submit'])) {
  // Obtener los datos del formulario
  $nombre = $_POST['InputName'];
  $correo = $_POST['InputEmail'];
  $asunto = $_POST['InputSubject'];
  $mensaje = $_POST['InputMessage'];

  // Destinatario y cuerpo del correo
  $destinatario = "codemaster2070@gmail.com";
  $cuerpo = "Nombre: $nombre\n";
  $cuerpo .= "Correo: $correo\n";
  $cuerpo .= "Asunto: $asunto\n";
  $cuerpo .= "Mensaje: $mensaje\n";

  // Cabeceras del correo
  $cabeceras = "From: $correo";

  // Enviar el correo
  if (mail($destinatario, $asunto, $cuerpo, $cabeceras)) {
    // El correo se envió exitosamente
    echo "¡Gracias! Tu mensaje ha sido enviado.";
  } else {
    // Hubo un error al enviar el correo
    echo "Lo sentimos, ha ocurrido un error al enviar el mensaje.";
  }
}
?>