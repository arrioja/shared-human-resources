<html>
<head>
<title>Formulario para a�adir datos a la tabla demo4</title>
</head>
<body>
<center><h2>Tabla �demo4�<br>Formulario de altas<h2></center>

<!-- creamos un formulario en el que recogeremos los valores
     a a�adir a la base de datos demo4
     utilizaremos los mismos nombres de variables que en aquel
     - por razones de comodidad- anteponiendoles p_ -->


<form name="altas" method=POST action="ejemplo105.php">
<table bgcolor="#E9FFFF" align=center border=2>
<td align="right">A�o: </td>
<td align="left"> <select name="ano[0]">
 <?
 $fechaSistema = date("Y"); 
   echo "<option>$fechaSistema</option>";
 ?>
</select> de: <select name="ano[1]">
<?
 $messistema = date("m"); 
   echo "<option>$messistema</option>";
?>

</td><tr>
<td align="right">Activo: </td>


<td align="right">Escribe tu D.N.I.: </td>
<td align="left"> <input type="text" name="p_v1" value="" size=8></td><tr>
<td align="right">Nombre....: </td>
<td align="left"> <input type="text" name="p_v2" value="" size=20></td><tr>
<td align="right">Primer apellido....: </td>
<td align="left"> <input type="text" name="p_v3" value="" size=15></td><tr>
<td align="right">Segundo apellido...: </td>
<td align="left"> <input type="text" name="p_v4" value="" size=15></td><tr>
<td align="right">Fecha de nacimiento: </td>

<!-- para evitar fechas de nacimiento incorrectas
     utilizamos la opci�n select para asignarles valores
     y recogemos e un array de indices 0, 1 y 2
     los valores respectivos de a�o, mes y d�a
     con el �nimo de mantener la misma secuencia
     con la que MySQL registrar� estos datos -->
    

<td align="left"> <select name="p_v5[2]">
<? for ($i=1;$i<32;$i++){
echo "<option>$i</option>";
} 
?>
</select> de 
<select name="p_v5[1]">
<? for ($i=1;$i<13;$i++){
echo "<option>$i</option>";
} 
?>
</select> de
<select name="p_v5[0]">
<? for ($i=1901;$i<2001;$i++){
echo "<option>$i</option>";
} 
?>

<!-- el sexo lo recogemos mediante una una opcion
     tipo radio y le asignamos cheked al valor M
     para obligar a que tenga el mismo valor
     El unico detalle relevante es que el name ha de ser el mismo
     en ambos botones de opcion -->

</select></td><tr>
<td align="right">Sexo...:</td>
<td align="left"> <input type="radio" name="p_v6" value="M" checked > Masculino <input type="radio" name="p_v6" value="F" > Femenino </td><tr>
<td align="right">Hora de nacimiento: </td>


<!-- para insertar la hora de nacimiento utilizamos la misma
     estrategia que para la fecha de nacimiento
     utilizando un array como variable y asignando
     los indices 0, 1 y 2 para
     horas, minutos y segundos respectivamente -->

<td align="left"> <select name="p_v7[0]">
<? for ($i=0;$i<24;$i++){
echo "<option>$i</option>";
} 
?>
</select> h  
<select name="p_v7[1]">
<? for ($i=0;$i<60;$i++){
echo "<option>$i</option>";
} 
?>
</select> m
<select name="p_v7[2]">
<? for ($i=0;$i<60;$i++){
echo "<option>$i</option>";
} 
?>
</select> s</td><tr>

<!-- volvemos a utilizar la opci�n radio para asignar valor 1 al caso de fumador
     valor 0 en el caso de no fumador y recogemos el resultado
     en la variable p_v8  -->

<td align="right">Fumador:</td>
<td align="left"> <input type="radio" name="p_v8" value="1" checked > Si <input type="radio" name="p_v8" value="0" > No </td><tr>

<!-- la opci�n idiomas la activamos mediante un SELECT MULTIPLE
        que permite visualizar las OPCIONES DE IDIOMA
        POR EL MISMO ORDEN EN QUE FUERON DEFINIDAS
        EN LA OPCION SET DE LA BASE DE DATOS
        A cada una de las opciones les asignamos como valor
        una POTENCIA DE DOS empezando por
        2 elevado 0, 2 elevado 1, 2 elevado 2, etc.
    la finalidad de esta estrategia es permitir
        que en el formulario de ALTAS
        se puedan sumar estos valores y que esa suma
        se el valor decimal equivalente al valor binario
        de las opciones seleccionadas 
        El array p_v9 recoger� con indices correlativos
        a partir de 0, unicamente los valores de 
        AQUELLAS OPCIONES QUE HAN SIDO SELECCIONADAS -->
  

<td align="right">Habla:<br>
(<i>Si habla varios seleccionarlos<br>
pulsando con el mouse encima de <br>
cada uno de ellos con la tecla<br>
<b>Ctrl</b> presionada</i>)</td>
<td align="left"> <SELECT MULTIPLE name=p_v9[] SIZE=6>
<option  value=1>Castellano</option>
<option  value=2>Franc�s</option>
<option value=4>Ingl�s</option>
<option  value=8>Alem�n</option>
<option  value=16>B�lgaro</option>
<option  value=32>Chino</option>
</select>
</td><tr>

<!--colocamos los botones de enviar y borrar -->


<td align=center><input type=submit value="Enviar"></td>
<td align=center><input type=reset value="Borrar"></td>
</table>
</body>
</html>