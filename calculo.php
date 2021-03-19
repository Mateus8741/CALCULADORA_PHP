<?php 




include('index.php');


$tde1 = $_POST['tde1'];
$tde2 = $_POST['tde2'];
$tde3 = $_POST['tde3'];
$tde4 = $_POST['tde4'];
$avp1 = $_POST['avp1'];
$avp2 = $_POST['avp2'];
$total = (0.4 * $avp1) + (0.4* $avp2) + 0.05 * ($tde1 + $tde2 + $tde3 + $tde4);
    
echo "Média Final: ",$total, "<br/>";

if($total >=7 && $total <11){
    echo "APROVADO!";
}
if($total >= 4 && $total <7){
    echo "AVF!";
}
if($total < 4){
    echo "REPROVADO!";
}
if($total > 10){
    echo "MÉDIA NÃO ENCONTRADA!";
}









?>