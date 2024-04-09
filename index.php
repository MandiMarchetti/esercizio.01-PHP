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

// Esercizio 02
//--------------------------------------------------------------------------
$seconda_var = 'Esercizio 02';
echo $seconda_var;

echo '<br>';
echo '<br>';

$serie_a = array(
    "Juventus" => array("4-4-2", "Buffon", "Chiellini", "Bonucci", "De Ligt", "Danilo", "Chiesa", "Arthur", "Bentancur", "McKennie", "Dybala", "Ronaldo"),
    "Inter" => array("3-5-2", "Handanovic", "Skriniar", "De Vrij", "Bastoni", "Hakimi", "Barella", "Brozovic", "Eriksen", "Perisic", "Lukaku", "Martinez"),
    "Milan" => array("4-2-3-1", "Donnarumma", "Calabria", "Kjaer", "Tomori", "Hernandez", "Kessie", "Bennacer", "Saelemaekers", "Calhanoglu", "Rebic", "Ibrahimovic"),
    // Adicione outras equipes e formações conforme necessário
);

// Iterar sobre o array e imprimir os dados de cada equipe e sua formação
foreach ($serie_a as $equipe => $formacao) {
    echo "Equipe: $equipe<br>";
    echo "Formação: $formacao[0]<br>";
    echo "Formação titular:<br>";
    for ($i = 1; $i < count($formacao); $i++) {
        echo "$formacao[$i]<br>";
    }
    echo "<br>";
}

echo '<hr>';
// Esercizio 03
//--------------------------------------------------------------------------
$terza_var = 'Esercizio 03';
echo $terza_var;

echo '<br>';
echo '<br>';


$serie_a_2 = array(
    "Juventus" => array("Formação" => "4-4-2", "Titulares" => array("Buffon", "Chiellini", "Bonucci", "De Ligt", "Danilo", "Chiesa", "Arthur", "Bentancur", "McKennie", "Dybala", "Ronaldo")),
    "Inter" => array("Formação" => "3-5-2", "Titulares" => array("Handanovic", "Skriniar", "De Vrij", "Bastoni", "Hakimi", "Barella", "Brozovic", "Eriksen", "Perisic", "Lukaku", "Martinez")),
    "Milan" => array("Formação" => "4-2-3-1", "Titulares" => array("Donnarumma", "Calabria", "Kjaer", "Tomori", "Hernandez", "Kessie", "Bennacer", "Saelemaekers", "Calhanoglu", "Rebic", "Ibrahimovic"))
    // Adicione outras equipes e formações conforme necessário
);


$partidas = array(
    array("Casa" => "Juventus", "Visitante" => "Inter"),
    array("Casa" => "Milan", "Visitante" => "Napoli"),

);


foreach ($partidas as $partida) {
    echo "Partida: {$partida['Casa']} vs {$partida['Visitante']}<br>";


    if (array_key_exists($partida['Casa'], $serie_a_2)) {
        echo "Formação da equipe da casa: {$serie_a_2[$partida['Casa']]['Formação']}<br>";
        echo "Titulares da equipe da casa:<br>";
        foreach ($serie_a_2[$partida['Casa']]['Titulares'] as $jogador) {
            echo "- $jogador<br>";
        }
    } else {
        echo "Formação da equipe da casa não encontrada.<br>";
    }

    echo "<br>";


    if (array_key_exists($partida['Visitante'], $serie_a_2)) {
        echo "Formação da equipe visitante: {$serie_a_2[$partida['Visitante']]['Formação']}<br>";
        echo "Titulares da equipe visitante:<br>";
        foreach ($serie_a_2[$partida['Visitante']]['Titulares'] as $jogador) {
            echo "- $jogador<br>";
        }
    } else {
        echo "Formação da equipe visitante não encontrada.<br>";
    }

    echo "<br>";
}
