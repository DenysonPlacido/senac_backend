<?php

$nomes = ['Joao','Maria','Jose'];

// $nomes = array('João','Maria','José');

// echo $nomes[0];

// echo nl2br($nomes[2]);

// echo '<br>'.$nomes[2];

#Criar arrays com chaves

// $nomes = [
//     10=>'Joao',
//     20=>'Maria',
//     30=>'Jose'
// ];

// echo $nomes[20];

// $familia = [
//     'pai' => 'Edson',
//     'mae' => 'Lurdes',
//     'filho' => 'Tiburcio'
// ];

// echo $familia['filho'];

// echo '<prev>';
// print_r($nomes);
// echo '<prev>';

// acrescenta elemento no final do array    
array_push($nomes,'pedro');

// retirar elemento de acordo com a posição
unset($nomes[2]);

print_r($nomes);












