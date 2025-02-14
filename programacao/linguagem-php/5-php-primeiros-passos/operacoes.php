<?php 

$numero1 = 5;
$numero2 = 10;

$somar = $numero1 + $numero2;
$subtrair = $numero1 - $numero2;
$multiplicar = $numero1 * $numero2;
$dividir = $numero1 / $numero2;

echo "--------------------------------" . PHP_EOL;
echo "$numero1 + $numero2 = $somar" . PHP_EOL; // 5 + 10 = 15
echo "$numero1 - $numero2 = $subtrair" . PHP_EOL; // 5 - 10 = -5
echo "$numero1 * $numero2 = $multiplicar" . PHP_EOL; // 5 X 10 = 50
echo "$numero1 / $numero2 = $dividir" . PHP_EOL; // 5 / 10 = 0,5

echo "--------------------------------" . PHP_EOL;

$receber = 0;

echo "$receber = $receber + 2 = " . ($receber += 2) . PHP_EOL; // 0 = 0 + 2 = 2
echo "$receber = $receber - 1 = " . ($receber -= 1) . PHP_EOL;  // 2 = 2 - 1 = 1
echo "$receber = $receber * 50 = " . ($receber *= 50) . PHP_EOL; // 1 = 1 x 50 = 50
echo "$receber = $receber / 10 = " . ($receber /= 10) . PHP_EOL; // 50 = 50 / 10 = 5

echo "--------------------------------" . PHP_EOL;