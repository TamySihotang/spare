<?php
/* @var $this SpareOfficeController */
/* @var $data SpareOffice */

$office = Office::model()->findByAttributes(array('id_office' => $data->id_office));
$sparelist = SparepartList::model()->findByAttributes(array('id_sparelist' => $data->id_sparelist));
$spare = Spare::model()->findByAttributes(array('id_spare' => $sparelist->id_spare));
?>

<table style="border-collapse: collapse;border:solid 2px chartreuse;"border="1">
    <tr style="border: 2px solid chartreuse;">
        <th class="tampilanView" width="10">No</th>
        <th class="tampilanView" width="30">Spare</th>
        <th class="tampilanView" width="30">Serial. Number</th>
        <th class="tampilanView" width="300">Stay in Office</th>
    </tr>
    <tr>
        <td class="tampilanView" width="10" align="center"><?php echo $data->id_spare_off;?></td>
        <td class="tampilanView" width="200" align="center"><?php echo $spare->aliasname;?></td>
        <td class="tampilanView" width="150" align="center"><?php echo $sparelist->SN;?></td>
        <td class="tampilanView" width="150" align="center"><?php echo $office->branch_office;?></td>
    </tr>
 </table>
<hr>