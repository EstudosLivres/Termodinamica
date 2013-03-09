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
    
    /*
    $processador_aba4 = new ProcessadorExcel($linhas_aba4);
    $processador_aba5 = new ProcessadorExcel($linhas_aba5);
    $processador_aba6 = new ProcessadorExcel($linhas_aba6);
    $processador_aba7 = new ProcessadorExcel($linhas_aba7);
    
    preenchePrcessador($processador_aba4);
    preenchePrcessador($processador_aba5);
    preenchePrcessador($processador_aba6);
    preenchePrcessador($processador_aba7);
    
    $processador_de_excel = $processador_aba4;
     * */
     
    $processador_de_excel = new ProcessadorExcel($linhas_aba4);
?>