<?php
/* @var $this OfficeController */
/* @var $data Office */
//$office = Office::model()->findByAttributes(array('id_office' => $data->id_office));
//$sparelist = SparepartList::model()->findByAttributes(array('id_sparelist' => $data->id_sparelist));
//$spare = SpareOffice::model()->findByAttributes(array('id_spare' => $sparelist->id_spare));
?>

<table style="border-collapse: collapse;border:solid 2px chartreuse;"border="1">
    <tr style="border: 2px solid chartreuse;">
        <th class="tampilanView" width="10">No</th>
        <th class="tampilanView" width="30">Office</th>
        <th class="tampilanView" width="30">Stock</th>
        
    </tr>
    <tr>
        <td class="tampilanView" width="10" align="center"><?php echo $data->id_office;?></td>
        <td class="tampilanView" width="200" align="center"><?php echo $data->branch_office;?></td>
        <td class="tampilanView" width="200" align="center">
            <?php echo "<a href='index.php?r=office/view&id=$data->id_office'>".
                    $data->getStockOffice($data->id_office)."</a>";?>
        </td>
    </tr>
 </table>
<hr>