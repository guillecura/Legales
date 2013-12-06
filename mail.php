<?php
	$email    = (isset($_POST["email"])) ? $_POST["email"] : "email_desconocido";
	$nombre   = (isset($_POST["nombre"])) ? $_POST["nombre"] : "Anónimo";
	$apellido = (isset($_POST["apellido"])) ? $_POST["apellido"] : "";
	$empresa  = (isset($_POST["empresa"])) ? $_POST["empresa"] : "";
	$telefono = (isset($_POST["telefono"])) ? $_POST["telefono"] : "";

	$mensaje  = "Este mensaje fue enviado por " . $nombre." ".$apellido." \r\n";
	if ($empresa != "")
		$mensaje .= "De la empresa ".$empresa." \r\n";
	if ($telefono != "")
		$mensaje .= "Su teléfono es: ".$telefono." \r\n";
	$mensaje .= "Su e-mail es: ".$email." \r\n";
	$mensaje .= "Mensaje: ".$_POST["mensaje"]." \r\n";
	$mensaje .= "Enviado el ".date("d/m/Y", time());

	$para   = "consulta@plazalegal.com.uy";
	$asunto = "Plaza Legal | Consulta Web";

	$headers = ($email != "email_desconocido") ? "From: ".$email : "";

	mail($para, $asunto, utf8_decode($mensaje), $headers);
	header("Location: ../index.html");
?>