<?php
    include_once 'app/processa_excel.php';
    
    $abas = getAbasArray();
    
    /* //verifica se está vindo de fato a array com as abas
    foreach ($abas as $aba) 
        echo $aba->getTitle() . "<br>";
    */
    
    $linhas_aba4 = getLinhasArray_PorAba($abas[0]);
    $linhas_aba5 = getLinhasArray_PorAba($abas[1]);
    $linhas_aba6 = getLinhasArray_PorAba($abas[2]);
    $linhas_aba7 = getLinhasArray_PorAba($abas[3]);
    
    
    
    /*
    $it = $linhas_aba4[12]->getCellIterator();
    foreach ($it as $cell)
        echo "Valor dentro da celula: " . $cell . "<br>";   */
    //echo "Teste: " . $it[0]->getCoordinate(); não funfa acesso direto no iterator

    /*
    $celulas_aba4 = getCelulasArray_PorLinha($linhas_aba4);
    $celulas_aba5 = getCelulasArray_PorLinha($linhas_aba5); 
    $celulas_aba6 = getCelulasArray_PorLinha($linhas_aba6); 
    $celulas_aba7 = getCelulasArray_PorLinha($linhas_aba7);
    
    print_r($celular_aba7);
    */
    
    
    $processador = new ProcessadorExcel();
    
    array_push($processador->entrada, @$_GET["entrada1"]);
    array_push($processador->entrada, @$_GET["entrada2"]);
    
    array_push($processador->volume, @$_GET["volume1"]);
    array_push($processador->volume, @$_GET["volume2"]);
    
    array_push($processador->energia, @$_GET["energia1"]);
    array_push($processador->energia, @$_GET["energia2"]);
    array_push($processador->energia, @$_GET["energia3"]);
    
    array_push($processador->entalpia, @$_GET["entalpia1"]);
    array_push($processador->entalpia, @$_GET["entalpia2"]);
    array_push($processador->entalpia, @$_GET["entalpia3"]);
    
    array_push($processador->entropia, @$_GET["entropia1"]);
    array_push($processador->entropia, @$_GET["entropia2"]);
    array_push($processador->entropia, @$_GET["entropia3"]);
    
    
?>
