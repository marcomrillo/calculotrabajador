<?
$sueldo = $_POST["sueldo"];
$sueldoporh = 20000;
$sueldoporhextra = 25000;
echo "su sueldo es de : " $_POST["hrs"] * $_POST[$sueldoporh];
$totalsalario = $_POST["hrs"] * $_POST[$sueldoporh];
echo "su sueldo en horas extra es de : " $_POST[$sueldoporhextra] * $_POST["hrsext"] ;
$totalsalarioext = $_POST[$sueldoporhextra] * $_POST["hrsext"];
echo "su salario total es de " $totalsalario + $totalsalarioext



?>