<?php
$prima_var = 'Esercizio 01';
echo $prima_var;

echo '<br>';
echo '<br>';

date_default_timezone_set('Europe/Rome');
$meses = array(
    1 => 'Gennaio',
    2 => 'Febbraio',
    3 => 'Marzo',
    4 => 'Aprile',
    5 => 'Maggio',
    6 => 'Giugno',
    7 => 'Luglio',
    8 => 'Agosto',
    9 => 'Settembre',
    10 => 'Ottobre',
    11 => 'Novembre',
    12 => 'Dicembre'
);
$dia_settimana = date('');
$dia = date('d');
$mes = date('n');
$ano = date('Y');

$data = $dia . ' ' . $meses[$mes] . ' ' . $ano;

echo $data;

echo '<hr>';
