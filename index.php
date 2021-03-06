<a href="php.php" target="blank">PHP</a>
<a href="python.py" target="blank">Python</a>
<a href="js.html" target="blank">Javascript</a>
<?php
$consultas=[
'01'=>"Listado de provincias",
'02'=>"¿Cuánto suman 2 y 3?",
'04'=>"Densidades de población de las provincias",
'52'=>"Obtén el listado del nombre de las provincias que tiene cada autonomía",
'03'=>"¿Cuánto vale la raíz cuadrada de 2?",
'05'=>"¿Cuántos caracteres tiene cada nombre de provincia?",
'07'=>"Provincias con el mismo nombre que su comunidad autónoma",
'08'=>"Provincias que contienen el diptongo 'ue'",
'09'=>"Provincias que empiezan por A",
'17'=>"¿Qué provincias están en autonomías con nombre compuesto?",
'18'=>"¿Qué provincias tienen nombre compuesto?",
'19'=>"¿Qué provincias tienen nombre simple?",
'51'=>"Muestra las provincias de Galicia, indicando si es Grande, Mediana o Pequeña en función ",
'10'=>"Autonomías terminadas en 'ana'",
'11'=>"¿Cuántos caracteres tiene cada nombre de comunidad autónoma? Ordena el resultado por el ",
'12'=>"¿Qué autonomías tienen nombre compuesto? Ordena el resultado alfabéticamente en orden ",
'13'=>"¿Qué autonomías tienen nombre simple? Ordena el resultado alfabéticamente en orden ",
'14'=>"¿Qué autonomías tienen provincias con nombre compuesto? Ordenar el resultado ",
'15'=>"Autonomías que comiencen por 'can' ordenadas alfabéticamente",
'16'=>"¿Qué autonomías tienen provincias de más de un millón de habitantes? Ordénalas ",
'21'=>"Población del país",
'22'=>"Superficie del país",
'23'=>"¿Cuántas provincias hay en la tabla?",
'24'=>"En un listado alfabético, ¿qué provincia estaría la primera?",
'25'=>"¿Qué comunidades autónomas contienen el nombre de una de sus provincias?",
'26'=>"¿Qué provincias tienen un nombre más largo que el de su autonomía?",
'27'=>"¿Cuántas comunidades autónomas hay?",
'29'=>"¿Cuánto mide el nombre de autonomía más corto?",
'30'=>"¿Cuánto mide el nombre de provincia más largo?",
'28'=>"Población media de las provincias entre 2 y 3 millones de habitantes sin decimales",
'53'=>"Obtén el listado de autonomías: una línea por autonomía, junto al listado de sus provincias",
'31'=>"Provincia más poblada",
'32'=>"Provincia más poblada de las inferiores a 1 millón de habitantes",
'34'=>"Provincia menos poblada de las superiores al millón de habitantes",
'35'=>"¿En qué autonomía está la provincia más extensa?",
'36'=>"¿Qué provincias tienen una población por encima de la media nacional?",
'37'=>"Densidad de población del país",
'38'=>"¿Cuántas provincias tiene cada comunidad autónoma?",
'39'=>"Listado del número de provincias por autonomía ordenadas de más a menos provincias y ",
'40'=>"¿Cuántas provincias con nombre compuesto tiene cada comunidad autónoma?",
'41'=>"Autonomías uniprovinciales",
'42'=>"¿Qué autonomía tiene 5 provincias?",
'43'=>"Población de la autonomía más poblada",
'44'=>"¿Qué porcentaje del total nacional representa Cantabria en población y en superficie?",
'49'=>"Obtener la provincia más poblada de cada comunidad autónoma, indicando la población de ",
'47'=>"¿En qué posición del ranking autonómico por población de mayor a menor está Cantabria?",
'45'=>"Automía más extensa",
'46'=>"Autonomía con más provincias",
'48'=>"Provincia más despoblada de la autonomía más poblada",
'50'=>"Provincia más poblada de la autonomía más despoblada",
'06'=>"Listado de autonomías",	
];

$cs=array_rand($consultas,5);
foreach($cs as $c)
	echo '<div style="
		font-size:2em;
		padding:15px;
	">('.$c.') '.$consultas[$c].'</div>';