 <?php
/* @var $this RrCimyUefDataController */
/* @var $model RrCimyUefData */

$this->breadcrumbs=array(
    'Rr Cimy Uef Datas'=>array('index'),
    'Create',

);
?>
<table>
<tr>
  <th>Serial Number</th>
  <th>Business Name</th>
  <th>Facebook</th>
  <th>Twitter</th>
</tr>


<?php
for($a=0, $b=1;$a<count($results);$a=$a+3,$b++){
    if(($a+1)<count($results) && ($a+2)<count($results)){
echo '<tr><td>'.$b.'</td>';
echo '<td>'.$results[$a].'</td>';
echo '<td>'.$results[$a+1].'</td>';
echo '<td>'.$results[$a+2].'</td></tr>';
}
}
//var_dump($results);
?>
</table>