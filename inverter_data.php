<?php
//INVERTER DATAS AMERICANA E BRASILEIRA
//AUTOR: MAURÍCIO PACHECO

//FUNÇÃO PARA INVERTER DATA
function inverteData($data){
    if(count(explode("/",$data)) > 1){
        return implode("-",array_reverse(explode("/",$data)));
    }elseif(count(explode("-",$data)) > 1){
        return implode("/",array_reverse(explode("-",$data)));
    }
}

//DATA AMERICANA EM UMA STRING
$data_americana = "2022-12-25";

//DATA BRASILEIRA EM UMA STRING
$data_brasileira = "25/12/2022";

//INVERÇÃO DA DATA
echo "Data Americana Invertida: ";
echo inverteData($data_americana);

echo "<br>";

//INVERÇÃO DA DATA
echo "Data Brasileira Invertida: ";
echo inverteData($data_brasileira);

?>
