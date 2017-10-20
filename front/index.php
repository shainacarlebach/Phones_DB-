
<table>
<?php
require_once '../back/controllers/phoneController.php';

$pc=new PhoneController();
$p=$pc->Read();

foreach ($p as $phone){
       
    echo "<tr><td>".$phone->getID()."</td></tr>";
    echo "<tr><td>".$phone->getModel()."</td></tr>";
    echo "<tr><td>".$phone->getCode()."</td></tr>";
}

$new=$pc->Create(0, 's8 plus', 1);
?>



?>
</table>



















     