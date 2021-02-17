
<?PHP
$chico = (float)1.50;
$juca = (float)1.10;
$anos = 0;

while ($chico >= $juca) {
    $chico = $chico + (float) 0.2;
    $juca = $juca + (float) 0.3;
    $anos = $anos + (int) 1;
}
echo " Serão necessario " . $anos . " anos para que juca fica maior que chico";
