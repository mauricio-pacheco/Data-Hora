<?php
//COLETAR DIA DA SEMANA
//AUTOR: MAURÍCIO PACHECO

//COLETAR DIA DA SEMANA
$diasemana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado');
$data = date('Y-m-d');
$diasemana_numero = date('w', strtotime($data));

$dia_da_semana = $diasemana[$diasemana_numero];

echo $dia_da_semana;

?>