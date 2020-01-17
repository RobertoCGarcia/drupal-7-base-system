<?php

/* Connect To Database*/
require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos

//print " Total Productos: " . $rowInventario["TOTALPRODUCTOS"] . "<br/>"; 

?>

<div align="center">
<img src="graphs/grafica-pastel-inventario.php">
</div> 

<p>&nbsp;</p>

<div align="center">
<img src="graphs/grafica-pastel-inventario-stock.php">
</div> 

<p>&nbsp;</p>

<table width="800px" border="1" align="center">
  <tr>
    <td width="81"><b>ID Producto</b></td>
    <td width="111"><b>Codigo Producto</b></td>
    <td width="65"><b>Categoria</b></td>
    <td width="117"><b>Nombre Producto</b></td>
    <td width="77"><b>Agregado</b></td>
    <td width="54"><b>Precio</b></td>
    <td width="65"><b>Stock</b></td>
  </tr>

<?php

$dataGrafico = array();
$etiquetas = array();

$sqlInventario = "SELECT categorias.nombre_categoria, products.id_producto, products.codigo_producto, products.nombre_producto,products.status_producto,products.date_added,products.precio_producto,products.stock,categorias.id_categoria
FROM products, categorias  WHERE products.status_producto = 1 AND categorias.id_categoria = products.id_categoria;";
$sql=mysqli_query($con, $sqlInventario);


$i=0;
while ($row=mysqli_fetch_array($sql)){
	 
	$nombre_categoria=$row["nombre_categoria"];
	$codigo_producto=$row['codigo_producto'];
	$id_producto=$row['id_producto'];
	$nombre_producto=$row['nombre_producto'];
	$fecha_registro=$row['date_added'];
    $stock=$row['stock'];
	$precio_venta=$row['precio_producto'];
	$precio_venta_f=number_format($precio_venta,2);//Formateo variables
	$precio_venta_r=str_replace(",","",$precio_venta_f);//Reemplazo las comas
	//$precio_total=$precio_venta_r*$cantidad;
	//$precio_total_f=number_format($precio_total,2);//Precio total formateado
	//$precio_total_r=str_replace(",","",$precio_total_f);//Reemplazo las comas
	//$sumador_total+=$precio_total_r;//Sumador
	//if ($nums%2==0){
	//	$clase="clouds";
	//} else {
	//	$clase="silver";
	//}
?>
  <tr>
    <td><?php print $id_producto; ?></td>
    <td><?php print $codigo_producto; ?></td>
    <td><?php print $nombre_categoria; ?></td>
    <td><?php print $nombre_producto; ?></td>
    <td><?php print $fecha_registro; ?></td>
    <td><?php print $precio_venta_f; ?></td>
    <td><?php print $stock; ?></td>
  </tr>
 <?php
   $i++;
 }
 ?> 
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>



