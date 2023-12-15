<?php ob_start();?>



<table>
    <tr>
        <th>idMarque</th>
        <th>Nom de la marque</th>
    </tr>
    <?php for($i=0; $i<count($marques); $i++) :?>
    <tr>
        <td><?= $marques[$i]->getidMarque();?></td>
        <td><?= $marques[$i]->getnomMarque();?></td>
    </tr>
    <?php endfor; ?>

</table>

<?php
$content = ob_get_clean();
require_once "template.php";
?>