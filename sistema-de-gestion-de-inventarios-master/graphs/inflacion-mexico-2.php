<?php
require_once "../libraries/phplot/phplot.php";
# PHPlot Example: Linepoints plot with legend using color boxes or shape markers

# The variable $use_shapes can be set to TRUE in another
# script which calls this script, to use shape markers
# rather than color boxes in the legend.
if (empty($use_shapes)) $use_shapes = FALSE;
# The variable $plot_type can be set in another script as well.
if (empty($plot_type)) $plot_type = 'linepoints';

# Use data labels to display only the points we want,
# but specify the same values for X to get the correct
# spacing.

$incremento = 1;

$array2011 = array(3.78, 3.57, 3.04, 3.36 ,3.25 ,3.28 ,3.55 ,3.42 ,3.14 ,3.2 ,3.48 ,3.82);
$array2012 = array(4.05 ,3.87 ,3.73 ,3.41 ,3.85 ,4.34 ,4.42 ,4.57 ,4.77 ,4.6 ,4.18 ,3.57);
$array2013 = array(3.25 ,3.55 ,4.25 ,4.65 ,4.63 ,4.09 ,3.47 ,3.46 ,3.39 ,3.36 ,3.62 ,3.97 );
$array2014 = array(4.48 ,4.23 ,3.76 ,3.5 ,3.51 ,3.75 ,4.07 ,4.15 ,4.22 ,4.3 ,4.17 ,4.08 );
$array2015 = array(3.07 ,3 ,3.14 ,3.06 ,2.88 ,2.92 ,3.02 ,2.97 ,2.98 ,2.87 ,2.73 ,2.61 );

$data = array(
  array('Enero', 1,      $array2011[0],  $array2012[0], $array2013[0], $array2014[0], $array2015[0]),
  array('Febrero', 2,    $array2011[1],  $array2012[1], $array2013[1], $array2014[1], $array2015[1]),
  array('Marzo', 3,      $array2011[2],  $array2012[2], $array2013[2], $array2014[2], $array2015[2]),
  array('Abril', 4,      $array2011[3],  $array2012[3], $array2013[3], $array2014[3], $array2015[3]),
  array('Mayo', 5,       $array2011[4],  $array2012[4], $array2013[4], $array2014[4], $array2015[4]),
  array('Junio', 6,      $array2011[5],  $array2012[5], $array2013[5], $array2014[5], $array2015[5]),
  array('Julio', 7,      $array2011[6],  $array2012[6], $array2013[6], $array2014[6], $array2015[6]),
  array('Agosto', 8,     $array2011[7],  $array2012[7], $array2013[7], $array2014[7], $array2015[7]),
  array('Septiembre', 9, $array2011[8],  $array2012[8], $array2013[8], $array2014[8], $array2015[8]),
  array('Octubre', 10,   $array2011[9],  $array2012[9], $array2013[9], $array2014[9], $array2015[9]),
  array('Noviembre', 11, $array2011[10], $array2012[10], $array2013[10], $array2014[10], $array2015[10]),
  array('Diciembre', 12, $array2011[11], $array2012[11], $array2013[11], $array2014[11], $array2015[11]),
);

$legend_text = array('2011', '2012', '2013', '2014', '2015' );

$plot = new PHPlot(800, 600);
$plot->SetImageBorderType('plain'); // Improves presentation in the manual
$plot->SetTitle("Inflacion en Mexico\n"
                .' 2011 - 2012 - 2013 - 2014 - 2015 - ');
$plot->SetPlotType($plot_type);
$plot->SetDataType('data-data');
$plot->SetDataValues($data);


# Turn on X data label lines (drawn from X axis up to data point):
$plot->SetDrawXDataLabelLines(True);

$plot->SetDrawYDataLabelLines(True);

$plot->SetPlotAreaWorld( null, null, null, 10);
$plot->SetYTickIncrement($incremento);
$plot->SetLegend($legend_text);
$plot->SetXTickPos('none');
$plot->SetDrawXDataLabelLines(True);
$plot->SetLegendUseShapes($use_shapes); // Use color boxes or shapes
$plot->SetPointSizes(12); // Make points bigger for visibility
$plot->SetLineStyles('solid'); // Make all lines solid
$plot->SetLineWidths(2); // Make all lines thicker

$plot->SetYDataLabelPos('plotin');
$plot->data_value_label_angle = 5; // Position the labels at 45 degrees

$plot->DrawGraph();