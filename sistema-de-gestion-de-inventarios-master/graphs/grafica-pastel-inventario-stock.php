<?php
require_once "../libraries/phplot/phplot.php";
require_once "../config/db.php";//Contiene las variables de configuracion para conectar a la base de datos
require_once "../config/conexion.php";//Contiene funcion que conecta a la base de datos
# PHPlot Example:  Flat Pie with options


$dataGrafico = array();
$nombre_categoria = array();

$sqlInventario = "SELECT categorias.nombre_categoria, products.id_producto, products.codigo_producto, products.nombre_producto,products.status_producto,products.date_added,products.precio_producto,products.stock,categorias.id_categoria
FROM products, categorias  WHERE products.status_producto = 1 AND categorias.id_categoria = products.id_categoria;";
$sql=mysqli_query($con, $sqlInventario);


$i=0;
while ($row=mysqli_fetch_array($sql)){
  $nombre_producto[] = $row["nombre_producto"];
  $dataGrafico[]= array("",$row["precio_producto"]);
  $data[$i] = array('', $row["stock"]);
  $i++;
}

$plot = new PHPlot(640,480);
$plot->SetTitle("Inventario / Stock\n");
$plot->SetImageBorderType('plain');
$plot->SetDataType('text-data-single');
$plot->SetDataValues($data);
$plot->SetPlotType('pie');

//$colors = array('red', 'green', 'blue', 'yellow', 'cyan');
$colors = $nombre_producto;
//$plot->SetDataColors($colors);
$plot->SetLegend($colors);
$plot->SetShading(0);
$plot->SetLabelScalePosition(0.2);

$plot->DrawGraph();