
<html >
<title> FORMULARIO CON BASE DE DATOS</title>
     
<head>
	 <meta charset="utf-8">
	 <link type="text/css" rel="stylesheet" href="css/estilo.css">
   </head>

<body>
   <h1>FORMULARIO CON PHP</h1>
   

<form action="manejadorAlumno.php" method= "post">


<p><tr>
<td>
Carnet:
</td>
<td>
<input type = "text" Name="Carnet">
</td>
</td>
</tr></p>

<p><tr>
<td>
Nombre:
</td>
<td>
<input type = "text" Name="Nombre">
</td>
</td>
</tr></p>

<p><tr>
<td>
Apellido:
</td>
<td>
<input type = "text" Name="Apellido ">
</td>
</td>
</tr></p>


<p><tr>
<td>
Fecha de nacimiento:
</td>
<td>
<input type = "text" Name="Fecha de nacimiento">
</td>
</td>
</tr></p>

<p><tr>
<td>
Direccion:
</td>
<td>
<input type = "text" Name="Direccion">
</td>
</td>
</tr></p>

<p><td>
Seccion:
</td>
<td>
<select Name = "text" Name="Seccion">
	<option value= ""></option>
		<option value= "sistema"> Sistemas</option>
	<option value= "manto"> Mantenimiento</option>
</select>
</td>
</td>
</td>
</tr></p>

<p><tr>
	<td colspan="2">
		<input type = "submit" name='bot' value= 'Enviar'>
	</td>
</tr><p/>


</form>

</body>
</html>